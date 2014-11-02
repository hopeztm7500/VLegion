(function($){
	var Controller = window.Controller;

	var controller = new Controller();
	controller.bindCustomEvents = function(){
		$('.dropdown .dropdown-toggle').on('mouseover', function(e){
			var $target = $(e.target);
			$target.next().hide().slideDown(5000);
		});
	};
	
	controller.initialize();
	
})(jQuery);