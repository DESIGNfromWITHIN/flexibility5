<?php
/**
 * Get list Forms
 *
 * @package FormIt
 * @subpackage processors
 */
class FormItDecryptProcessor extends modObjectGetListProcessor {
    public $classKey = 'FormItForm';
    public $languageTopics = array('formit:default');
    public $defaultSortField = 'id';
    public $defaultSortDirection = 'DESC';

    public function prepareQueryBeforeCount(xPDOQuery $c) {
        $c->where(array(
            'form' => $this->getProperty('form'),
            'encrypted' => 1
        ));
        return $c;
    }

    public function prepareRow(xPDOObject $object) {
        $object->set('encrypted', 0);
        $object->set('values', $this->modx->toJSON($object->decrypt()));
        $object->save();
        $ff = $object->toArray();
        return $ff;
    }
}
return 'FormItDecryptProcessor';