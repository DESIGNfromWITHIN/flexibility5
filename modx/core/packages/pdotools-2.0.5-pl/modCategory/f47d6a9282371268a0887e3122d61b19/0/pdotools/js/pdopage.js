if (typeof(pdoPage) == 'undefined') {
	pdoPage = {callbacks: {}, keys: {}};
}

pdoPage.Reached = false;

pdoPage.initialize = function(config) {

	if (pdoPage.keys[config['pageVarKey']] == undefined) {
		var tkey = config['pageVarKey'];
		var tparams = pdoPage.Hash.get();
		var tpage = tparams[tkey] == undefined ? 1 : tparams[tkey];
		pdoPage.keys[tkey] = Number(tpage);
	}
	var $this = this;
	switch (config['mode']) {
		case 'default':
			$(document).on('click', config['link'], function(e) {
				e.preventDefault();
				var href = $(this).prop('href');
				var key = config['pageVarKey'];
				var match = href.match(new RegExp(key + '=(\\d+)'));
				var page = !match ? 1 : match[1];
				if (pdoPage.keys[key] != page) {
					pdoPage.Hash.add(key, page);
					$this.loadPage(href, config);
				}
			});

			$(window).on('popstate', function(e) {
				if (e.originalEvent.state && e.originalEvent.state['pdoPage']) {
					$this.loadPage(e.originalEvent.state['pdoPage'], config);
				}
			});

			history.replaceState({pdoPage: window.location.href}, '');
			break;

		case 'scroll':
		case 'button':
			if (typeof(jQuery().sticky) == 'undefined') {
				$.getScript(config['assetsUrl'] + 'js/lib/jquery.sticky.js', function() {
					pdoPage.initialize(config);
				});
				return;
			}

			pdoPage.stickyPagination(config);
			var key = config['pageVarKey'];

			if (config['mode'] == 'button') {
				// Add more button
				$(config['rows']).after(config['moreTpl']);
				var has_results = false;
				$(config['link']).each(function() {
					var href = $(this).prop('href');
					var match = href.match(new RegExp(key + '=(\\d+)'));
					var page = !match ? 1 : match[1];
					if (page > pdoPage.keys[key]) {
						has_results = true;
						return false;
					}
				});
				if (!has_results) {
					$(config['more']).hide();
				}

				$(document).on('click', config['more'], function(e) {
					e.preventDefault();
					pdoPage.addPage(config)
				});
			}
			else {
				// Scroll pagination
				var wrapper = $(config['wrapper']);
				var $window = $(window);
				$window.on('scroll', function() {
					if (!pdoPage.Reached && $window.scrollTop() > wrapper.height() - $window.height()) {
						pdoPage.Reached = true;
						pdoPage.addPage(config);
					}
				});
			}

			break;
	}
};

pdoPage.addPage = function(config) {
	var key = config['pageVarKey'];
	var params = pdoPage.Hash.get();
	var current = params[key] || 1;
	$(config['link']).each(function() {
		var href = $(this).prop('href');
		var match = href.match(new RegExp(key + '=(\\d+)'));
		var page = !match ? 1 : Number(match[1]);
		if (page > current) {
			pdoPage.Hash.add(key, page);
			pdoPage.keys[key] = current;
			pdoPage.loadPage(href, config, 'append');
			return false;
		}
	});
};

pdoPage.loadPage = function(href, config, mode) {
	var wrapper = $(config['wrapper']);
	var rows = $(config['rows']);
	var pagination = $(config['pagination']);
	var key = config['pageVarKey'];
	var match = href.match(new RegExp(key + '=(\\d+)'));
	var page = !match ? 1 : Number(match[1]);
	if (!mode) {mode = 'replace';}

	if (pdoPage.keys[key] == page) {
		return;
	}
	if (pdoPage.callbacks['before'] && typeof(pdoPage.callbacks['before']) == 'function') {
		pdoPage.callbacks['before'].apply(this, [config]);
	}
	else if (config['mode'] != 'scroll') {
		wrapper.css({opacity: .3});
	}

	var params = pdoPage.Hash.get();
	for (var i in params) {
		if (params.hasOwnProperty(i) && pdoPage.keys[i] && i != key) {
			delete(params[i]);
		}
	}
	params[key] = pdoPage.keys[key] = page;
	$.get(document.location.pathname, params, function(response) {
		if (response && response['total']) {
			wrapper.find(pagination).html(response['pagination']);
			if (mode == 'append') {
				wrapper.find(rows).append(response['output']);
				if (config['mode'] == 'button') {
					if (response['pages'] == response['page']) {
						$(config['more']).hide();
					}
					else {
						$(config['more']).show();
					}
				}
				else if (config['mode'] == 'scroll') {
					pdoPage.Reached = false;
				}
			}
			else {
				wrapper.find(rows).html(response['output']);
			}

			if (pdoPage.callbacks['after'] && typeof(pdoPage.callbacks['after']) == 'function') {
				pdoPage.callbacks['after'].apply(this, [config, response]);
			}
			else if (config['mode'] != 'scroll') {
				wrapper.css({opacity: 1});
				if (config['mode'] == 'default') {
					$('html, body').animate({scrollTop: wrapper.position().top - 50 || 0}, 0);
				}
			}
			pdoPage.updateTitle(config, response);
			$(document).trigger('pdopage_load', [config, response]);
		}
	}, 'json');
};

pdoPage.stickyPagination = function(config) {
	var pagination = $(config['pagination']);
	if (pagination.is(':visible')) {
		pagination.sticky({
			wrapperClassName: 'sticky-pagination',
			getWidthFrom: config['pagination'],
			responsiveWidth: true
		});
		$(config['wrapper']).trigger('scroll');
	}
};

pdoPage.updateTitle = function(config, response) {
	if (typeof(pdoTitle) == 'undefined') {
		return;
	}
	var $title = $('title');
	var separator = pdoTitle.separator || ' / ';
	var tpl = pdoTitle.tpl;

	var title = [];
	var items = $title.text().split(separator);
	var pcre = new RegExp('^' + tpl.split(' ')[0] + ' ');
	for (var i = 0; i < items.length; i++) {
		if (i === 1 && response.page && response.page > 1) {
			title.push(tpl.replace('{page}', response.page).replace('{pageCount}', response.pages));
		}
		if (!items[i].match(pcre)) {
			title.push(items[i]);
		}
	}
	$title.text(title.join(separator));
};

pdoPage.Hash = {
	get: function() {
		var vars = {}, hash, splitter, hashes;
		if (!this.oldbrowser()) {
			var pos = window.location.href.indexOf('?');
			hashes = (pos != -1) ? decodeURIComponent(window.location.href.substr(pos + 1)) : '';
			splitter = '&';
		}
		else {
			hashes = decodeURIComponent(window.location.hash.substr(1));
			splitter = '/';
		}

		if (hashes.length == 0) {return vars;}
		else {hashes = hashes.split(splitter);}

		for (var i in hashes) {
			if (hashes.hasOwnProperty(i)) {
				hash = hashes[i].split('=');
				if (typeof hash[1] == 'undefined') {
					vars['anchor'] = hash[0];
				}
				else {
					vars[hash[0]] = hash[1];
				}
			}
		}
		return vars;
	}

	,set: function(vars) {
		var hash = '';
		for (var i in vars) {
			if (vars.hasOwnProperty(i)) {
				hash += '&' + i + '=' + vars[i];
			}
		}

		if (!this.oldbrowser()) {
			if (hash.length != 0) {
				hash = '?' + hash.substr(1);
			}
			window.history.pushState({pdoPage: document.location.pathname + hash}, '', document.location.pathname + hash);
		}
		else {
			window.location.hash = hash.substr(1);
		}
	}

	,add: function(key, val) {
		var hash = this.get();
		hash[key] = val;
		this.set(hash);
	}

	,remove: function(key) {
		var hash = this.get();
		delete hash[key];
		this.set(hash);
	}

	,clear: function() {
		this.set({});
	}

	,oldbrowser: function() {
		return !(window.history && history.pushState);
	}
};

if (typeof(jQuery) == 'undefined') {
	console.log("You must load jQuery for using ajax mode in pdoPage.");
}
