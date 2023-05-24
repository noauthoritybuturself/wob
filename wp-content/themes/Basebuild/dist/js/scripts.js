

$(document).ready(function() {
    var autoplaySlider = $('#ponentes').lightSlider({
        auto:true,
        pager:false,
        autoWidth:true,
        pauseOnHover:true,
        loop:true,
        controls:false,
        pauseOnHover: true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        },
        onBeforeSlide: function (el) {
            $('#current').text(el.getCurrentSlideCount());
        } 
    });
    $('#total').text(autoplaySlider.getTotalSlideCount());
});

