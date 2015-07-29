<?php

class pdoTools {
	/** @var modX $modx */
	public $modx;
	/** @var array $timings Array with query log */
	public $timings = array();
	/** @var array $config Array with class config */
	public $config = array();
	/** @var array $store Array for cache elements and user data */
	public $store = array(
		'chunk' => array(),
		'snippet' => array(),
		'tv' => array(),
		'data' => array(),
		'resource' => array(),
	);
	/** @var integer $idx Index of iterator of rows processing */
	public $idx = 1;
	/** @var integer $time Time of script start */
	protected $time;
	/** @var integer $count Total number of results for chunks processing */
	protected $count = 0;
	/** @var boolean $preparing Specifies that now is the preparation */
	protected $preparing = false;
	protected $start = 0;
	/** @var pdoParser $parser */
	public $parser;
	/** @var Fenom $fenom */
	public $fenom;


	/**
	 * @param modX $modx
	 * @param array $config
	 */
	public function __construct(modX & $modx, $config = array()) {
		$this->modx = $modx;
		$this->time = $this->start = microtime(true);

		$this->setConfig($config);
	}


	/**
	 * Set config from default values and given array.
	 *
	 * @param array $config
	 * @param bool $clean_timings Clean timings array
	 */
	public function setConfig(array $config = array(), $clean_timings = true) {
		$this->config = array_merge(array(
			'fastMode' => false,
			'nestedChunkPrefix' => 'pdotools_',
			'offset' => 0,

			'checkPermissions' => '',
			'loadModels' => '',
			'prepareSnippet' => '',
			'prepareTVs' => '',
			'processTVs' => '',

			'outputSeparator' => "\n",
			'decodeJSON' => true,
			'scheme' => '',
		), $config);

		if ($clean_timings) {
			$this->timings = array();
		}

		if ($this->config['scheme'] === '-1') {
			$this->config['scheme'] = -1;
		}
		elseif (empty($this->config['scheme'])) {
			$this->config['scheme'] = $this->modx->getOption('link_tag_scheme');
		}
		$this->config['useFenom'] = $this->modx->getOption('pdotools_fenom_default', null, true);
		$this->config['useFenomParser'] = $this->modx->getOption('pdotools_fenom_parser', null, false);
		$this->config['useFenomCache'] = $this->modx->getOption('pdotools_fenom_cache', null, false);
		$this->config['useFenomMODX'] = $this->modx->getOption('pdotools_fenom_modx', null, false);
	}


	/**
	 * Loads pdoTools parser
	 *
	 * @return pdoParser
	 */
	protected function getParser() {
		$this->parser = $this->modx->getParser();
		if (!($this->parser instanceof pdoParser)) {
			if (!class_exists('pdoParser')) {
				require_once dirname(__FILE__) . '/pdoparser.class.php';
			}
			$this->parser = new pdoParser($this->modx);
		}

		return $this->parser;
	}


	/**
	 * Loads template engine
	 *
	 * @return bool|Fenom
	 */
	public function getFenom() {
		if (!$this->fenom) {
			try {
				if (!class_exists('Fenom')) {
					require dirname(dirname(__FILE__)) . '/fenom/Fenom.php';
					Fenom::registerAutoload();
				}
				$cache = MODX_CORE_PATH . 'cache/';
				if (!file_exists($cache)) {
					mkdir($cache);
				}
				$this->fenom = Fenom::factory($cache, $cache);

				if (!$this->modx->getOption('pdotools_fenom_php', null, false)) {
					$this->fenom->removeAccessor('php');
				}
				if ($options = $this->modx->getOption('pdotools_fenom_options')) {
					if (is_numeric($options) || $options = $this->modx->fromJSON($options)) {
						$this->fenom->setOptions($options);
					}
				}
			}
			catch (Exception $e) {
				$this->modx->log(xPDO::LOG_LEVEL_ERROR, $e->getMessage());
				return false;
			}
		}

		return $this->fenom;
	}


	/**
	 * Add new record to timings log
	 *
	 * @var string $message
	 * @var integer $delta
	 *
	 * @param $message
	 */
	public function addTime($message, $delta = null) {
		$time = microtime(true);
		if (!$delta) {
			$delta = $time - $this->time;
		}

		$this->timings[] = array(
			'time' =>  number_format(round(($delta), 7), 7),
			'message' => $message,
		);
		$this->time = $time;
	}


	/**
	 * Return timings log
	 *
	 * @param bool $string Return array or formatted string
	 *
	 * @return array|string
	 */
	public function getTime($string = true) {
		$this->timings[] = array(
			'time' => number_format(round(microtime(true) - $this->start, 7), 7),
			'message' => '<b>Total time</b>'
		);
		$this->timings[] = array(
			'time' => number_format(round((memory_get_usage(true)), 2), 0, ',', ' '),
			'message' => '<b>Memory usage</b>'
		);

		if (!$string) {
			return $this->timings;
		}
		else {
			$res = '';
			foreach ($this->timings as $v) {
				$res .= $v['time'] . ': ' . $v['message'] . "\n";
			}
			return $res;
		}
	}


	/**
	 * Set data to cache
	 *
	 * @param $name
	 * @param $object
	 * @param string $type
	 */
	public function setStore($name, $object, $type = 'data') {
		$this->store[$type][$name] = $object;
	}


	/**
	 * Get data from cache
	 *
	 * @param $name
	 * @param string $type
	 *
	 * @return mixed|null
	 */
	public function getStore($name, $type = 'data') {
		return isset($this->store[$type][$name])
			? $this->store[$type][$name]
			: null;
	}


	/**
	 * Loads specified list of packages models
	 */
	public function loadModels() {
		if (empty($this->config['loadModels'])) {return;}

		$time = microtime(true);
		$models = array();
		if (strpos(ltrim($this->config['loadModels']), '{') === 0) {
			$tmp = $this->modx->fromJSON($this->config['loadModels']);
			foreach ($tmp as $k => $v) {
				$v = trim(strtolower($v));
				$models[$k] = (strpos($v, MODX_CORE_PATH) === false)
					? MODX_CORE_PATH . ltrim($v, '/')
					: $v;
			}
		}
		else {
			$tmp = array_map('trim', explode(',', $this->config['loadModels']));
			foreach ($tmp as $v) {
				$models[$v] = MODX_CORE_PATH . 'components/'.strtolower($v).'/model/';
			}
		}

		if (!empty($models)) {
			foreach ($models as $k => $v) {
				$t = '/' . str_replace(MODX_BASE_PATH, '', $v);
				if ($this->modx->addPackage(strtolower($k), $v)) {
					$this->addTime('Loaded model "'.$k.'" from "'.$t.'"', microtime(true) - $time);
				}
				else {
					$this->addTime('Could not load model "'.$k.'" from "'.$t.'"', microtime(true) - $time);
				}
				$time = microtime(true);
			}
		}

		$this->config['loadModels'] = '';
	}


	/**
	 * Transform array to placeholders
	 *
	 * @param array $array
	 * @param string $plPrefix
	 * @param string $prefix
	 * @param string $suffix
	 * @param bool $uncacheable
	 *
	 * @return array
	 */
	public function makePlaceholders(array $array = array(), $plPrefix = '', $prefix = '[[+', $suffix = ']]', $uncacheable = true) {
		$result = array('pl' => array(), 'vl' => array());

		$uncached_prefix = str_replace('[[', '[[!', $prefix);
		foreach ($array as $k => $v) {
			if (is_array($v)) {
				$result = array_merge_recursive($result, $this->makePlaceholders($v, $plPrefix . $k.'.', $prefix, $suffix, $uncacheable));
			}
			else {
				$pl = $plPrefix.$k;
				$result['pl'][$pl] = $prefix.$pl.$suffix;
				$result['vl'][$pl] = $v;
				if ($uncacheable) {
					$result['pl']['!'.$pl] = $uncached_prefix.$pl.$suffix;
					$result['vl']['!'.$pl] = $v;
				}
			}
		}

		return $result;
	}


	/**
	 * Process and return the output from a Chunk by name.
	 *
	 * @param string $name The name of the chunk.
	 * @param array $properties An associative array of properties to process the Chunk with, treated as placeholders within the scope of the Element.
	 * @param boolean $fastMode If false, all MODX tags in chunk will be processed.
	 *
	 * @return mixed The processed output of the Chunk.
	 */
	public function getChunk($name = '', array $properties = array(), $fastMode = false) {
		$properties = $this->prepareRow($properties);
		$name = trim($name);

		/* @var $chunk modChunk[] */
		if (!empty($name)) {
			$chunk = $this->_loadChunk($name, $properties);
		}
		if (empty($name) || empty($chunk) || !($chunk['object'] instanceof modChunk)) {
			return !empty($properties)
				? str_replace(array('[',']','`'), array('&#91;','&#93;','&#96;'), htmlentities(print_r($properties, true), ENT_QUOTES, 'UTF-8'))
				: '';
		}

		$content = $this->config['useFenom']
			? $this->fenom($chunk, $properties)
			: $chunk['content'];

		if (strpos($content, '[[') !== false) {
			// Processing quick placeholders
			if (!empty($chunk['placeholders'])) {
				$properties = $this->flattenArray($properties);
				$pl = $chunk['placeholders'];
				foreach ($pl as $k => $v) {
					if ($k[0] == '!') {
						if (empty($properties[substr($k, 1)])) {
							$pl[substr($k, 1)] = $v;
						}
						unset($pl[$k]);
					}
					elseif (empty($properties[$k])) {
						$pl[$k] = '';
					}
				}
				if (!empty($pl)) {
					$pl = $this->makePlaceholders($pl);
					$content = str_replace($pl['pl'], $pl['vl'], $content);
				}
			}

			// Processing given placeholders
			if (!empty($properties)) {
				$pl = $this->makePlaceholders($properties);
				$content = str_replace($pl['pl'], $pl['vl'], $content);
			}
		}

		// Processing other placeholders
		if (strpos($content, '[[') !== false) {
			if ($fastMode) {
				$content = $this->fastProcess($content, true);
			}
			else {
				$chunk['object']->_cacheable = false;
				$chunk['object']->_processed = false;
				$chunk['object']->_content = '';
				$content = $chunk['object']->process($properties, $content);
			}
		}

		return $content;
	}


	/**
	 * Parse a chunk using an associative array of replacement variables.
	 *
	 * @param string $name The name of the chunk.
	 * @param array $properties An array of properties to replace in the chunk.
	 * @param string $prefix The placeholder prefix, defaults to [[+.
	 * @param string $suffix The placeholder suffix, defaults to ]].
	 *
	 * @return string The processed chunk with the placeholders replaced.
	 */
	public function parseChunk($name = '', array $properties = array(), $prefix = '[[+', $suffix = ']]') {
		$properties = $this->prepareRow($properties);
		$name = trim($name);

		if (!empty($name)) {
			$chunk = $this->_loadChunk($name, $properties);
		}
		if (empty($name) || empty($chunk['content'])) {
			return !empty($properties)
				? str_replace(array('[',']','`'), array('&#91;','&#93;','&#96;'), htmlentities(print_r($properties, true), ENT_QUOTES, 'UTF-8'))
				: '';
		}

		$content = $this->config['useFenom']
			? $this->fenom($chunk, $properties)
			: $chunk['content'];

		if (strpos($content, '[[') !== false) {
			$pl = $this->makePlaceholders($properties, '', $prefix, $suffix);
			$content = str_replace($pl['pl'], $pl['vl'], $content);
		}

		return $content;
	}


	/**
	 * @param string|array $chunk
	 * @param array $properties
	 *
	 * @return mixed|string
	 */
	public function fenom($chunk, array $properties = array()) {
		$content = is_array($chunk)
			? trim($chunk['content'])
			: trim($chunk);
		if (empty($this->config['useFenom']) || (strpos($content, '{$') === false && strpos($content, '{/') === false)) {
			return $content;
		}

		if ($fenom = $this->getFenom()) {
			$name = '';
			if (is_array($chunk)) {
				if (!empty($chunk['binding'])) {
					$name = $chunk['binding'] . '/';
				}
				if (!empty($chunk['id'])) {
					$name .= $chunk['id'];
				}
				elseif (!empty($chunk['name'])) {
					$name .= $chunk['name'];
				}
				else {
					$name .= md5($content);
				}
			}
			else {
				$name = md5($content);
			}
			/** @var Fenom\Template $tpl */
			if (!$tpl = $this->getStore($name, 'fenom')) {
				if (!empty($this->config['useFenomCache'])) {
					$cache_options = array(
						'cache_key' => 'fenom/' . $name,
					);
					if (!$cache = $this->getCache($cache_options)) {
						if ($tpl = $this->_compileChunk($content, $name)) {
							$this->setCache($tpl->getTemplateCode(), $cache_options);
						}
					}
					else {
						$cache = preg_replace('#^<\?php#', '', $cache);
						$tpl = eval($cache);
					}
				}
				else {
					$tpl = $this->_compileChunk($content, $name);
				}
				if ($tpl) {
					$this->setStore($name, $tpl, 'fenom');
				}
			}

			if ($tpl instanceof Fenom\Render) {
				$properties['_pls'] = $properties;
				if (!empty($this->config['useFenomMODX'])) {
					$properties['modx'] = $this->modx;
					$properties['pdoTools'] = $this;
				}
				try {
					$content = $tpl->fetch($properties);
				}
				catch (Exception $e) {
					$this->modx->log(modX::LOG_LEVEL_ERROR, $e->getMessage());
					$this->modx->log(modX::LOG_LEVEL_INFO, $tpl->getTemplateCode());
				}
			}
		}

		return $content;
	}


	/**
	 * Fast processing of MODX tags.
	 *
	 * @param string $content
	 * @param bool $processUncacheable
	 *
	 * @return mixed
	 */
	public function fastProcess($content, $processUncacheable = true) {
		$matches = array();
		$this->getParser()->collectElementTags($content, $matches);

		$unprocessed = $pl = $vl = array();
		foreach ($matches as $tag) {
			$tmp = $this->parser->processTag($tag, $processUncacheable);

			if ($tmp === $tag[0]) {
				$unprocessed[] = $tmp;
			}
			else {
				$pl[] = $tag[0];
				$vl[] = $tmp;
			}
		}

		$content = str_replace($pl, $vl, $content);
		$content = str_replace($unprocessed, '', $content);

		return $content;
	}


	/**
	 * Method for define name of a chunk serving as resource template
	 * This algorithm taken from snippet getResources by opengeek
	 *
	 * @param array $properties Resource fields
	 *
	 * @return mixed
	 */
	public function defineChunk($properties = array()) {
		$idx = isset($properties['idx']) ? (integer) $properties['idx'] : $this->idx++;
		$idx -= $this->config['offset'];

		$first = empty($this->config['first']) ? ($this->config['offset'] + 1) : (integer) $this->config['first'];
		$last = empty($this->config['last']) ? ($this->count + $this->config['offset']) : (integer) $this->config['last'];

		$odd = !($idx & 1);
		$resourceTpl = '';
		if ($idx == $first && !empty($this->config['tplFirst'])) {
			$resourceTpl = $this->config['tplFirst'];
		}
		else if ($idx == $last && !empty($this->config['tplLast'])) {
			$resourceTpl = $this->config['tplLast'];
		}
		else if (!empty($this->config['tpl_' . $idx])) {
			$resourceTpl = $this->config['tpl_' . $idx];
		}
		else if ($idx > 1) {
			$divisors = array();
			for ($i = $idx; $i > 1; $i--) {
				if (($idx % $i) === 0) {
					$divisors[] = $i;
				}
			}
			if (!empty($divisors)) {
				foreach ($divisors as $divisor) {
					if (!empty($this->config['tpl_n' . $divisor])) {
						$resourceTpl = $this->config['tpl_n' . $divisor];
						break;
					}
				}
			}
		}

		if (empty($resourceTpl) && $odd && !empty($this->config['tplOdd'])) {
			$resourceTpl = $this->config['tplOdd'];
		}
		else if (empty($resourceTpl) && !empty($this->config['tplCondition']) && !empty($this->config['conditionalTpls'])) {
			$conTpls = $this->modx->fromJSON($this->config['conditionalTpls']);
			if (isset($properties[$this->config['tplCondition']])) {
				$subject = $properties[$this->config['tplCondition']];
				$tplOperator = !empty($this->config['tplOperator']) ? strtolower($this->config['tplOperator']) : '=';
				$tplCon = '';
				foreach ($conTpls as $operand => $conditionalTpl) {
					switch ($tplOperator) {
						case '!=': case 'neq': case 'not': case 'isnot': case 'isnt': case 'unequal': case 'notequal':
							$tplCon = (($subject != $operand) ? $conditionalTpl : $tplCon);
							break;
						case '<': case 'lt': case 'less': case 'lessthan':
							$tplCon = (($subject < $operand) ? $conditionalTpl : $tplCon);
							break;
						case '>': case 'gt': case 'greater': case 'greaterthan':
							$tplCon = (($subject > $operand) ? $conditionalTpl : $tplCon);
							break;
						case '<=': case 'lte': case 'lessthanequals': case 'lessthanorequalto':
							$tplCon = (($subject <= $operand) ? $conditionalTpl : $tplCon);
							break;
						case '>=': case 'gte': case 'greaterthanequals': case 'greaterthanequalto':
							$tplCon = (($subject >= $operand) ? $conditionalTpl : $tplCon);
							break;
						case 'isempty': case 'empty':
							$tplCon = empty($subject) ? $conditionalTpl : $tplCon;
							break;
						case '!empty': case 'notempty': case 'isnotempty':
							$tplCon = !empty($subject) && $subject != '' ? $conditionalTpl : $tplCon;
							break;
						case 'isnull': case 'null':
							$tplCon = $subject == null || strtolower($subject) == 'null' ? $conditionalTpl : $tplCon;
							break;
						case 'inarray': case 'in_array': case 'ia':
							$operand = explode(',', $operand);
							$tplCon = in_array($subject, $operand) ? $conditionalTpl : $tplCon;
							break;
						case 'between': case 'range': case '>=<': case '><':
							$operand = explode(',', $operand);
							$tplCon = ($subject >= min($operand) && $subject <= max($operand)) ? $conditionalTpl : $tplCon;
							break;
						case 'contains':
							$tplCon = (is_string($subject) && (strpos($subject,$operand) !== false) ? $conditionalTpl : $tplCon);
							break;
						case '==': case '=': case 'eq': case 'is': case 'equal': case 'equals': case 'equalto':
						default:
							$tplCon = (($subject == $operand) ? $conditionalTpl : $tplCon);
							break;
					}
				}
			}
			if (!empty($tplCon)) {
				$resourceTpl = $tplCon;
			}
		}

		if (empty($resourceTpl) && !empty($this->config['tpl'])) {
			$resourceTpl = $this->config['tpl'];
		}

		return $resourceTpl;
	}


	/**
	 * Loads and returns chunk by various methods.
	 *
	 * @param string $name Name or binding
	 * @param array $row Current row with results being processed
	 *
	 * @return array
	 */
	protected function _loadChunk($name, $row = array()) {
		$binding = $content = '';

		$name = trim($name);
		if (preg_match('/^@([A-Z]+)/', $name, $matches)) {
			$binding = $matches[1];
			$content = substr($name, strlen($binding) + 1);
		}
		$content = ltrim($content, ' :');
		$content = str_replace(array('{{','}}'), array('[[',']]'), $content);

		// Change name for empty TEMPLATE binding so will be used template of given row
		if ($binding == 'TEMPLATE' && empty($content) && isset($row['template'])) {
			$name = '@TEMPLATE '.$row['template'];
			$content = $row['template'];
		}

		// Load from cache
		$cache_name = (strpos($name, '@') === 0) ? md5($name) : $name;
		if ($chunk = $this->getStore($cache_name, 'chunk')) {
			return $chunk;
		}

		$id = 0;
		/** @var modChunk $element */
		switch ($binding) {
			case 'CODE':
			case 'INLINE':
				$element = $this->modx->newObject('modChunk', array('name' => $cache_name));
				$element->setContent($content);
				$this->addTime('Created inline chunk with name "'.$cache_name.'"');
				break;
			case 'FILE':
				$path = isset($this->config['tplPath'])
					? $this->config['tplPath'] . '/'
					: MODX_ASSETS_PATH . 'elements/chunks/';
				if (strpos($path, MODX_BASE_PATH) === false) {
					$path = MODX_BASE_PATH . $path;
				}
				$path = preg_replace('#/+#', '/', $path . $content);
				if (!preg_match('/(.html|.tpl)$/i', $path)) {
					$this->addTime('Allowed extensions for @FILE chunks is "html" and "tpl"');
				}
				elseif (!file_exists($path)) {
					$this->addTime('Could not find tpl file at "'.str_replace(MODX_BASE_PATH, '', $path).'".');
					return false;
				}
				elseif ($content = file_get_contents($path)) {
					$element = $this->modx->newObject('modChunk', array('name' => $cache_name));
					$element->setContent($content);
					$this->addTime('Loaded chunk from "'.str_replace(MODX_BASE_PATH, '', $path).'"');
				}
				break;
			case 'TEMPLATE':
				/** @var modTemplate $template */
				if ($template = $this->modx->getObject('modTemplate', array('id' => $content, 'OR:templatename:=' => $content))) {
					$content = $template->getContent();
					$element = $this->modx->newObject('modChunk', array('name' => $cache_name));
					$element->setContent($content);
					$this->addTime('Created chunk from template "'.$template->templatename.'"');
					$id = $template->get('id');
				}
				break;
			case 'CHUNK':
				$cache_name = $content;
				if ($element = $this->modx->getObject('modChunk', array('name' => $cache_name))) {
					$content = $element->getContent();
					$this->addTime('Loaded chunk "'.$cache_name.'"');
					$id = $element->get('id');
				}
				break;
			default:
				if ($element = $this->modx->getObject('modChunk', array('name' => $cache_name))) {
					$content = $element->getContent();
					$this->addTime('Loaded chunk "'.$cache_name.'"');
					$binding = 'CHUNK';
					$id = $element->get('id');
				}
		}

		if (!$element) {
			$this->addTime('Could not load or create chunk "'.$name.'".');
			return false;
		}

		// Preparing special tags
		if (strpos($content, '<!--'.$this->config['nestedChunkPrefix']) !== false) {
			preg_match_all('/\<!--'.$this->config['nestedChunkPrefix'].'(.*?)[\s|\n|\r\n](.*?)-->/s', $content, $matches);
			$src = $dst = $placeholders = array();
			foreach ($matches[1] as $k => $v) {
				$src[] = $matches[0][$k];
				$dst[] = '';
				$placeholders[$v] = $matches[2][$k];
			}
			if (!empty($src) && !empty($dst)) {
				$content = str_replace($src, $dst, $content);
			}
		}
		else {
			$placeholders = array();
		}

		$chunk = array(
			'object' => $element,
			'content' => $content,
			'placeholders' => $placeholders,
			'name' => $cache_name,
			'id' => $id,
			'binding' => strtolower($binding),
		);
		$this->setStore($cache_name, $chunk, 'chunk');

		return $chunk;
	}


	/**
	 * Compiles Fenom chunk
	 *
	 * @param $content
	 * @param string $name
	 *
	 * @return bool|\Fenom\Template
	 */
	protected function _compileChunk($content, $name = '') {
		$tpl = false;
		if ($fenom = $this->getFenom()) {
			if (empty($name)) {
				$name = md5($content);
			}
			try {
				$tpl = $fenom->getRawTemplate()->source($name, $content, true);
			}
			catch (Exception $e) {
				$this->modx->log(modX::LOG_LEVEL_ERROR, $e->getMessage());
				$this->modx->log(modX::LOG_LEVEL_INFO, $content);
			}
		}
		$this->addTime('Compiled Fenom chunk with name "'.$name.'"');

		return $tpl;
	}


	/**
	 * Builds a hierarchical tree from given array
	 *
	 * @param array $tmp Array with rows
	 * @param string $id Name of primary key
	 * @param string $parent Name of parent key
	 *
	 * @return array
	 */
	public function buildTree($tmp = array(), $id = 'id', $parent = 'parent') {
		$time = microtime(true);

		if (empty($id)) {$id = 'id';}
		if (empty($parent)) {$parent = 'parent';}

		if (count($tmp) == 1) {
			$row = current($tmp);
			$tree = array(
				$row[$parent] => array(
					'children' => array(
						$row[$id] => $row
					)
				)
			);
		}
		else {
			$rows = $tree= array();
			foreach ($tmp as $v) {
				$rows[$v[$id]] = $v;
			}

			foreach ($rows as $id => &$row) {
				if (empty($row[$parent])) {
					$tree[$id] = &$row;
				}
				else{
					$rows[$row[$parent]]['children'][$id] = &$row;
				}
			}
		}

		$this->addTime('Tree was built', microtime(true) - $time);
		return $tree;
	}


	/**
	 * Prepares fetched rows and process template variables
	 *
	 * @param array $rows
	 *
	 * @return array
	 */
	public function prepareRows(array $rows = array()) {
		$time = microtime(true);
		$prepare = $process = $prepareTypes = array();
		if (!empty($this->config['includeTVs']) && (!empty($this->config['prepareTVs']) || !empty($this->config['processTVs']))) {
			$tvs = array_map('trim', explode(',', $this->config['includeTVs']));
			$prepare = ($this->config['prepareTVs'] == 1)
				? $tvs
				: array_map('trim', explode(',', $this->config['prepareTVs']));
			$prepareTypes = array_map('trim', explode(',', $this->modx->getOption('manipulatable_url_tv_output_types',null,'image,file')));
			$process = ($this->config['processTVs'] == 1)
				? $tvs
				: array_map('trim', explode(',', $this->config['processTVs']));

			$prepare = array_flip($prepare);
			$prepareTypes = array_flip($prepareTypes);
			$process = array_flip($process);
		}

		foreach ($rows as & $row) {
			// Extract JSON fields
			if ($this->config['decodeJSON']) {
				foreach ($row as $k => $v) {
					if (!empty($v) && is_string($v) && strlen($v) >= 2 && (($v[0] == '{' && $v[1] == '"') || ($v[0] == '[' && $v[1] != '['))) {
						$tmp = $this->modx->fromJSON($v);
						if ($tmp !== null) {
							$row[$k] = $tmp;
						}
					}
				}
			}

			// Prepare and process TVs
			if (!empty($tvs)) {
				foreach ($tvs as $tv) {
					if (!isset($process[$tv]) && !isset($prepare[$tv])) {continue;}

					/** @var modTemplateVar $templateVar */
					if (!$templateVar = $this->getStore($tv, 'tv')) {
						if ($templateVar = $this->modx->getObject('modTemplateVar', array('name' => $tv))) {
							$sourceCache = isset($prepareTypes[$templateVar->type])
								? $templateVar->getSourceCache($this->modx->context->get('key'))
								: null;
							$templateVar->set('sourceCache', $sourceCache);
							$this->setStore($tv, $templateVar, 'tv');
						}
						else {
							$this->addTime('Could not process or prepare TV "'.$tv.'"');
							continue;
						}
					}

					$tvPrefix = !empty($this->config['tvPrefix']) ?
						trim($this->config['tvPrefix'])
						: '';
					$key = $tvPrefix . $templateVar->name;
					if (isset($process[$tv])) {
						$row[$key] = $templateVar->renderOutput($row['id']);
					}
					elseif (isset($prepare[$tv]) && is_string($row[$key]) && strpos($row[$key],'://') === false && method_exists($templateVar, 'prepareOutput')) {
						if ($source = $templateVar->sourceCache) {
							if ($source['class_key'] == 'modFileMediaSource') {
								if (!empty($source['baseUrl']) && !empty($row[$key])) {
									$row[$key] = $source['baseUrl'].$row[$key];
									if (isset($source['baseUrlRelative']) && !empty($source['baseUrlRelative'])) {
										$row[$key] = $this->modx->context->getOption('base_url',null,MODX_BASE_URL).$row[$key];
									}
								}
							}
							else {
								$row[$key] = $templateVar->prepareOutput($row[$key]);
							}
						}
					}
				}
			}
		}

		if (!empty($tvs)) {
			$this->addTime('Prepared and processed TVs', microtime(true) - $time);
		}

		return $rows;
	}


	/**
	 * Allow user to prepare single row by custom snippet before render chunk
	 * This method was developed in cooperation with Agel_Nash
	 *
	 * @param array $row
	 *
	 * @return array
	 */
	public function prepareRow($row = array()) {
		if ($this->preparing) {return $row;}

		if (!empty($this->config['prepareSnippet'])) {
			$this->preparing = true;
			$name = trim($this->config['prepareSnippet']);

			/** @var modSnippet $snippet */
			if (!$snippet = $this->getStore($name, 'snippet')) {
				if ($snippet = $this->modx->getObject('modSnippet', array('name' => $name))) {
					$this->setStore($name, $snippet, 'snippet');
				}
				else {
					$this->addTime('Could not load snippet "'.$name.'" for preparation of row.');
					return '';
				}
			}
			$snippet->_cacheable = false;
			$snippet->_processed = false;

			$tmp = $snippet->process(array(
				'pdoTools' => $this,
				'pdoFetch' => $this,
				'row' => $row,
			));

			$tmp = ($tmp[0] == '[' || $tmp[0] == '{')
				? $this->modx->fromJSON($tmp, 1)
				: unserialize($tmp);

			if (!is_array($tmp)) {
				$this->addTime('Preparation snippet must return an array, instead of "'.gettype($tmp).'"');
			}
			else {
				$row = array_merge($row, $tmp);
			}
			$this->preparing = false;
		}

		return $row;
	}


	/**
	 * Checks user permissions to view the results
	 *
	 * @param array $rows
	 *
	 * @return array
	 */
	public function checkPermissions($rows = array()) {
		$permissions = array();
		if (!empty($this->config['checkPermissions'])) {
			$tmp = array_map('trim', explode(',', $this->config['checkPermissions']));
			foreach ($tmp as $v) {
				$permissions[$v] = true;
			}
		}
		else {
			return $rows;
		}
		$total = $this->modx->getPlaceholder($this->config['totalVar']);

		foreach ($rows as $key => $row) {
			/** @var modAccessibleObject $object */
			$object = $this->modx->newObject($this->config['class']);
			$object->_fields['id'] = $row['id'];
			if ($object instanceof modAccessibleObject && !$object->checkPolicy($permissions)) {
				unset($rows[$key]);
				$this->addTime($this->config['class'] .' #'.$row['id'].' was excluded from results, because you do not have enough permissions');
				$total--;
			}
		}

		$this->addTime('Checked for permissions "'.implode(',', array_keys($permissions)).'"');
		$this->modx->setPlaceholder($this->config['totalVar'], $total);
		return $rows;
	}


	/**
	 * Returns data from cache
	 *
	 * @param mixed $options
	 *
	 * @return mixed
	 */
	public function getCache($options = array()) {
		$cacheKey = $this->getCacheKey($options);
		$cacheOptions = $this->getCacheOptions($options);

		$cached = '';
		if (!empty($cacheOptions) && !empty($cacheKey) && $this->modx->getCacheManager()) {
			if ($cached = $this->modx->cacheManager->get($cacheKey, $cacheOptions)) {
				$this->addTime('Retrieved data from cache "' . $cacheOptions[xPDO::OPT_CACHE_KEY] .'/'. $cacheKey . '"');
			}
			else {
				$this->addTime('No cached data for key "' . $cacheOptions[xPDO::OPT_CACHE_KEY] .'/'. $cacheKey . '"');
			}
		}
		else {
			$this->addTime('Could not check cached data for key "' . $cacheOptions[xPDO::OPT_CACHE_KEY] .'/'. $cacheKey . '"');
		}

		return $cached;
	}


	/**
	 * Sets data to cache
	 *
	 * @param mixed $data
	 * @param mixed $options
	 *
	 * @return string $cacheKey
	 */
	public function setCache($data = array(), $options = array()) {
		$cacheKey = $this->getCacheKey($options);
		$cacheOptions = $this->getCacheOptions($options);

		if (!empty($cacheKey) && !empty($cacheOptions) && $this->modx->getCacheManager()) {
			$this->modx->cacheManager->set(
				$cacheKey,
				$data,
				$cacheOptions[xPDO::OPT_CACHE_EXPIRES],
				$cacheOptions
			);
			$this->addTime('Saved data to cache "' . $cacheOptions[xPDO::OPT_CACHE_KEY] .'/'. $cacheKey . '"');
		}

		return $cacheKey;
	}


	/**
	 * Returns array with options for cache
	 *
	 * @param $options
	 *
	 * @return array
	 */
	protected function getCacheOptions($options = array()) {
		if (empty($options)) {$options = $this->config;}

		$cacheOptions = array(
			xPDO::OPT_CACHE_KEY => !empty($options['cache_key'])
				? 'default'
				: (!empty($this->modx->resource)
					? $this->modx->getOption('cache_resource_key', null, 'resource')
					: 'default'),

			xPDO::OPT_CACHE_HANDLER => !empty($options['cache_handler'])
				? $options['cache_handler']
				: $this->modx->getOption('cache_resource_handler', null, 'xPDOFileCache'),

			xPDO::OPT_CACHE_EXPIRES => $options['cacheTime'] !== ''
				? (integer) $options['cacheTime']
				: (integer) $this-> modx->getOption('cache_resource_expires', null, 0),
		);

		return $cacheOptions;
	}


	/**
	 * Returns key for cache of specified options
	 *
	 * @var mixed $options
	 *
	 * @return bool|string
	 */
	protected function getCacheKey($options = array()) {
		if (empty($options)) {$options = $this->config;}

		if (!empty($options['cache_key'])) {
			return $options['cache_key'];
		}

		$key = !empty($this->modx->resource)
			? $this->modx->resource->getCacheKey()
			: '';
		if (is_array($options)) {
			$options['cache_user'] = isset($options['cache_user'])
				? (integer) $options['cache_user']
				: $this->modx->user->id;
		}

		return $key . '/' . sha1(serialize($options));
	}


	/**
	 * Flatten array of placeholders with nested arrays
	 *
	 * @param $array
	 * @param string $plPrefix
	 *
	 * @return array
	 */
	protected function flattenArray($array, $plPrefix = '') {
		$result = array();

		foreach ($array as $k => $v) {
			if (is_array($v)) {
				$result = array_merge($result, $this->flattenArray($v, $plPrefix.$k.'.'));
			}
			else {
				$result[$plPrefix.$k] = $v;
			}
		}

		return $result;
	}


	/**
	 * Removes cache files
	 * @deprecated
	 */
	public function clearCache() {
		//$this->getFenom()->clearAllCompiles();
		return true;
	}

}
