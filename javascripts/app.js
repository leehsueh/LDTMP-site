/* Foundation v2.2.1 http://foundation.zurb.com */
jQuery(document).ready(function ($) {

	$(document).foundationMediaQueryViewer();
    
    $(document).foundationAlerts();
    $(document).foundationAccordion();
    $(document).tooltips();
    $('input, textarea').placeholder();
    
    
    
    $(document).foundationButtons();
    
    
    
    $(document).foundationNavigation();
    
    
    
    $(document).foundationCustomForms();
    
    
    $(document).foundationTabs({callback:$.foundation.customForms.appendCustomMarkup});

    $(".fancybox-media").fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});

    $('.fancybox-thumbs').fancybox({
        prevEffect : 'elastic',
        nextEffect : 'elastic',

        closeBtn  : true,
        arrows    : true,
        nextClick : true,

        helpers : {
            thumbs : {
                width  : 80,
                // height : 50
            },
            title: {
                type: 'inside'
            }
        }
    });
  
});
