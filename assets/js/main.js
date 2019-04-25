;(function(JQuery){

	"use strict";

	function EasyTradeJS()
	{
		var fn = {
			init: function()
			{
                fn.addListeners();
                fn.setPolaroidCSS();
                fn.setQuoteBlockCSS();
                fn.setRatingBlockCSS();
            },
            
            addListener: function ()
            {
                jQuery('.navbar-toggle.tablet-only').on('click', fn.toggleMainMenu)
            },

            toggleMainMenu: function ()
            {
                var mainmenu = jQuery('.mainmenu');
                if (jQuery(mainmenu).attr('aria-expanded') == false) {
                    jQuery(mainmenu).attr('aria-expanded', true);
                }
                else {
                    jQuery(mainmenu).attr('aria-expanded', true);
                }
            },

            setPolaroidCSS: function()
			{
				var largestHeight = 0;
                var polaroidBoxes = jQuery('.polaroid-box');
				jQuery(polaroidBoxes).each(function(i, elem) {
                    if (jQuery(elem).height() > largestHeight)
                    {
                        largestHeight = jQuery(elem).height();
                    }
				});

                jQuery(polaroidBoxes).css("height", (largestHeight + 20));
            },

            setQuoteBlockCSS: function()
			{
				var largestHeight = 0;
                var quotes = jQuery('.carousel-inner .item');
				jQuery(quotes).each(function(i, elem) {
                    if (jQuery(elem).height() > largestHeight)
                    {
                        largestHeight = jQuery(elem).height();
                    }
                });

                jQuery(quotes).each(function(i, elem) {
                    var currentHeight = jQuery(elem).height();
                    var padding = ((largestHeight - currentHeight) / 2);
                    jQuery(elem).css("height", (largestHeight));
                    jQuery(elem).css("padding-top", (padding));
                    jQuery(elem).css("padding-bottom", (padding));
                });

            },
            
            setRatingBlockCSS: function()
			{
				var largestHeight = 0;
                var ratingBoxes = jQuery('.rating');
				jQuery(ratingBoxes).each(function(i, elem) {
                    if (jQuery(elem).height() > largestHeight)
                    {
                        largestHeight = jQuery(elem).height();
                    }
				});

                jQuery(ratingBoxes).css("height", (largestHeight + 30));
            },

		}

		fn.init();
	}

	new EasyTradeJS();
})(jQuery);
