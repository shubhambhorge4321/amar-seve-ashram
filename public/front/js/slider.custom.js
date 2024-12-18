//
// Carousel showcase
//

var showcase;
function showcaseInit() {
    showcase = $("#showcase");
    showcase.Cloud9Carousel({
        xRadius: 600,
        yOrigin: 75,
        yRadius: 160,
        speed: 5,
        itemClass: "sport_card",
        buttonLeft: $("#nav-left"),
        buttonRight: $("#nav-right"),
        bringToFront: true,
        onLoaded: function() {
            showcase.css('visibility', 'visible');
            showcase.css('display', 'none');
            showcase.fadeIn(1500);
        }
    });
    $('.nav-button').click(showcaseArrowClicked);
    showcaseInitSwipe();
}

function showcaseInitSwipe() {
    showcase.on('swiperight', function() {
        $('#nav-left').click();
    }).on('swipeleft', function() {
        $('#nav-right').click();
    }).on('movestart', function(e) {
        // Unblock vertical scroll if swipe is more vertical than horizontal
        if((e.distX > e.distY && e.distX < -e.distY) || (e.distX < e.distY && e.distX > -e.distY)) {
            e.preventDefault();
        }
    });
}

function showcaseArrowClicked(event) {
    var hi = $(event.target).closest('.nav-button').find('.blink-overlay');
    // Flash button highlight
    hi.stop();
    hi.css('opacity', '0');
    hi.css('display', 'block');
    hi.animate({
        'opacity': '0.7'
    }, 80, 'swing', function() {
        hi.animate({
            'opacity': '0'
        }, 160, 'swing');
    });
}
//
// Keyboard events
//
// Contact form may disable the arrow keys so carousel doesn't spin while
// form inputs are being edited
var arrowKeysEnabled = true;

function keysInit() {
    $(document).keydown(function(e) {
        switch(e.keyCode) {
            /* left arrow */
            case 37:
                arrowKeysEnabled && $('#nav-left').click();
                break;
                /* right arrow */
            case 39:
                arrowKeysEnabled && $('#nav-right').click();
                break;
        }
    });
}
//
// Main
//
$(function() {
    showcaseInit();
    keysInit();
});