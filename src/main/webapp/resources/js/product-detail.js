(function($){
	var Controller = window.Controller;
	var proto = Controller.prototype;
	proto.bindCustomEvents = function(){
		$('#buy-bag-btn').on('click', $.proxy(this.buyProuct, this));
		
	};
	proto.buyProuct = function(){
		var buyItem = {};
		buyItem.productId = "BAG001";
		buyItem.quality = $('[name=cart]').val();
		this.pushItemToCart(buyItem);
	};
	var controller = new Controller();
	
})(jQuery);