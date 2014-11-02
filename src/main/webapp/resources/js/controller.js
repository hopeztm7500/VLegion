/**
 * cookie相关
 */
$.cookie = {
	/**
	 * 读取cookie
	 * 
	 * @param {String}
	 *            n=名称
	 * @return {String} cookie值
	 * @example $.cookie.get('id_test');
	 */
	get : function(n) {
		var m = document.cookie
				.match(new RegExp("(^| )" + n + "=([^;]*)(;|$)"));
		return !m ? "" : unescape(m[2]);
	},
	/**
	 * 设置cookie
	 * 
	 * @param {String}
	 *            name cookie名称 --必填
	 * @param {String}
	 *            value cookie值 --必填
	 * @param {String}
	 *            domain 所在域名
	 * @param {String}
	 *            path 所在路径
	 * @param {Number}
	 *            hour 存活时间，单位:小时
	 * @example $.cookie.set('value1','cookieval',"id.qq.com","/test",24);
	 *          //设置cookie
	 */
	set : function(name, value, domain, path, hour) {
		var expire = new Date();
		expire.setTime(expire.getTime()
				+ (hour ? 3600000 * hour : 30 * 24 * 60 * 60 * 1000));
		var val = name + "=" + value + "; ";
		var expirePart = "expires=" + expire.toGMTString() + ";";
		var path = "path=" + (path ? path : "/") + "; ";
		var domain = domain ? ("domain=" + "www.legion.com" + ";") : "";
		
		document.cookie = val;
		document.cookie = expirePart;
		document.cookie = path;
		document.cookie = domain;
		
	},

	/**
	 * 删除指定cookie,复写为过期 !!注意path要严格匹配， /id 不同于/id/
	 * 
	 * @param {String}
	 *            name cookie名称
	 * @param {String}
	 *            domain 所在域
	 * @param {String}
	 *            path 所在路径
	 * @example $.cookie.del('id_test'); //删除cookie
	 */
	del : function(name, domain, path) {
		document.cookie = name
				+ "=; expires=Mon, 26 Jul 1997 05:00:00 GMT; path="
				+ (path ? path : "/") + "; "
				+ (domain ? ("domain=" + domain + ";") : "");
	},
	/**
	 * 删除所有cookie -- 这里暂时不包括目录下的cookie
	 * 
	 * @example $.cookie.clear(); //删除所有cookie
	 */

	clear : function() {
		var rs = document.cookie.match(new RegExp(
				"([^ ;][^;]*)(?=(=[^;]*)(;|$))", "gi"));
		// 删除所有cookie
		for ( var i in rs) {
			document.cookie = rs[i]
					+ "=;expires=Mon, 26 Jul 1997 05:00:00 GMT; path=/; ";
		}
	},
	/**
	 * uin -- 针对业务,对外开源请删除
	 * 
	 * @return {String} uin值
	 * @example $.cookie.uin();
	 */
	uin : function() {
		var u = $.cookie.get("uin");
		return !u ? null : parseInt(u.substring(1, u.length), 10);
	}
};

(function($, exports) {
	/**
	 * @const
	 */
	var COOKIE_NAME = "cart-info";

	var Controller = function(hasCart) {
		this.hasCart = hasCart === false ? false : true;
		//this.initialize();

	};
	var proto = Controller.prototype;

	proto.initialize = function() {
		this.bindEvent();
		this.bindCustomEvents();
	};

	proto.bindEvent = function() {
		$(document).on('ready', $.proxy(this.afterDocIsReady, this));
	};

	proto.bindCustomEvents = function() {
		// user should implement this function
	};

	/**
	 * @param {{productId:
	 *            <string>, quality:<number>}}
	 */
	proto.pushItemToCart = function(item) {
		var cookie = $.cookie.get(COOKIE_NAME);
		if (!cookie) {
			cookie = [];
		} else {
			cookie = JSON.parse(cookie);
		}
		
		var itemExsit = _.find(cookie, function(val, idx) {
			return val.productId == item.productId;
		});
		if (itemExsit) {
			itemExsit.quality = item.quality;
		} else {
			cookie.push(item);
		}
		$.cookie.set(COOKIE_NAME, JSON.stringify(cookie), "www.legion.com",
				"/cart", 48);
		this.refreshShoppingCart();

	};

	proto.delItem = function(item) {

		var cookie = $.cookie.get(COOKIE_NAME);

		cookie = JSON.parse(cookie);
		if (cookie instanceof Array) {
			cookie = _.filter(cookie, function(v) {
				return v.productId !== item.productId;
			});
			$.cookie.set(COOKIE_NAME, JSON.stringify(cookie), "www.legion.com",
					"/cart", 48);
		}

	};
	proto.afterDocIsReady = function() {
		if (this.hasCart) {
			this.refreshShoppingCart();
		}
	};

	proto.refreshShoppingCart = function() {

		return ;
		var cookie = $.cookie.get(COOKIE_NAME);
		cookie = JSON.parse(cookie);
		if (cookie instanceof Array) {
			this.setCartInfo(cookie.length);
		}
	};

	proto.clearShoppingCart = function() {
		$.cookie.clear();
	};
	proto.setCartInfo = function(num) {
		if (num > 0) {
			$('#cart-info').text('(' + num + ')');
		} else {
			$('#cart-info').text('');
		}
	};

	exports.Controller = Controller;

})(jQuery, window);