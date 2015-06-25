requirejs.config({
	paths: {
		knockout: '../vendor/js/knockout.min',
		pager: '../vendor/js/pager.min',
		jquery: '../vendor/js/jquery.min',
		'jquery.fancybox': '../vendor/js/jquery.fancybox',
		jquery_ui: '../vendor/js/jquery-ui.min', /* it already has the jquery dependency */
		bootstrap: '../vendor/js/bootstrap.min',

		/* view models */
		appViewModel: 'viewModels/appViewModel',
		eventListViewModel: 'viewModels/eventListViewModel',

		/* utils */
		debugBH: 'bindingHandlers/debug',

	},
	shim: {
		'pager':['knockout'],
		'bootstrap':['jquery'],
		'jquery.fancybox':['jquery'],
	},
	waitSeconds: 200,
});

require(['knockout', 'pager', 'appViewModel', 'bootstrap', 'debugBH'], function(ko, pager, appViewModel) {
	// extend your view-model with pager.js specific data
	pager.extendWithPage(appViewModel);
	// apply the view-model using KnockoutJS as normal
	ko.applyBindings(appViewModel);
	// start pager.js
	pager.start();
});