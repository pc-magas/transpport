define(['knockout', 'eventListViewModel'],function(ko, EventListViewModel){
	evList = new EventListViewModel();
	var myApp= new function ShowViewModel(){
		var app=this;
		app.show=ko.observable(false);
		
		app.display=function()
		{
			app.show(true);
		};
		
		app.notShow=ko.computed(function()
		{
			return !app.show();
		});
	};
	
	return masterVM = {
		'myApp':myApp,
		'events': evList,
	};
});