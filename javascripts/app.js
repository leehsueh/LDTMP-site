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

    $("#products-nav-item").hover(
        function() {
            $(this).find(".flyout").show();
        },
        function() {
            $(this).find(".flyout").hide();
        }
    );

    $("#orbit-container").orbit();
    $("#falling-faces-orbit, #hello-park-orbit").orbit({
         animation: 'horizontal-push',                  // fade, horizontal-slide, vertical-slide, horizontal-push
         animationSpeed: 800,                // how fast animtions are
         timer: false,            // true or false to have the timer
         pauseOnHover: false,        // if you hover pauses the slider
         directionalNav: true,       // manual advancing directional navs
         captions: false,             // do you want captions?
         bullets: true,             // true or false to activate the bullet navigation
         bulletThumbs: false,        // thumbnails for the bullets
         fluid: '16x8'                         // or set a aspect ratio for content slides (ex: '4x3') 
    });
    $(document).on("click", "a.scroll-link", function() {
        var elementClicked = $(this).attr("href");
        var destination = $(elementClicked).offset().top;
        $("html:not(:animated),body:not(:animated)").animate(
            {scrollTop: destination-50}, 
            800, 
            'linear',
            function() {}
        );
        return false;
    });

    $(".fancybox").fancybox({
        maxWidth: 1024,
        maxHeight: 900
    });
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
