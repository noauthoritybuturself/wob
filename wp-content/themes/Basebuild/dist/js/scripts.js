

$(document).ready(function() {
    var autoplaySlider = $('#ponentes').lightSlider({
        auto:true,
        pager:false,
        autoWidth:true,
        pauseOnHover:true,
        loop:true,
        controls:false,
        pause:6000,
        speed:6000,
        onSliderLoad: function() {
            $('#ponentes').removeClass('cS-hidden');
        },
    });
});



$(document).ready(function() {
    var autoplaySlider = $('#ponentes2').lightSlider({
        auto:true,
        pager:false,
        autoWidth:true,
        pauseOnHover:true,
        loop:true,
        rtl: true,
        controls:false,
        pause:6000,
        speed:6000,
        onSliderLoad: function() {
            $('#ponentes').removeClass('cS-hidden');
        },
    });
});

$(document).ready(function() {
    var autoplaySlider = $('#ponentes2').lightSlider({
        auto:true,
        pager:false,
        autoWidth:true,
        pauseOnHover:true,
        loop:true,
        rtl: true,
        controls:false,
        pause:6000,
        speed:6000,
        onSliderLoad: function() {
            $('#ponentes').removeClass('cS-hidden');
        },
    });
});


$(document).ready(function() {
    var autoplaySlider = $('#programa').lightSlider({
        auto:false,
        pager:false,
        loop:false,
        item: 3,
        autoWidth: false,
        pauseOnHover:true,
        controls:false,
        enableTouch:false,
        enableDrag:false,
        onSliderLoad: function() {
            $('#programa').removeClass('cS-hidden');
        },
        responsive: [
            {
                breakpoint:1020,
                settings: {
                    item:2,
                    pause:1000,
                    speed:1000,
                    enableTouch:true,
                    enableDrag:true,            
                    loop:true          
                  }
            },
            {
                breakpoint:700,
                settings: {
                    item:1,
                    pause:1000,
                    speed:1000,
                    enableTouch:true,
                    enableDrag:true,            
                    loop:true 
                  }
            }
        ]
    });
});


$(document).ready(function() {
    var autoplaySlider = $('#tickets').lightSlider({
        auto:true,
        pager:false,
        loop:true,
        pause:6000,
        speed:6000,
        item: 3,
        autoWidth: true,
        pauseOnHover:true,
        addClass: "row",
        controls:false,
        onSliderLoad: function() {
            $('#tickets').removeClass('cS-hidden');
        },
        responsive: [
            {
                breakpoint:1020,
                settings: {
                    item:2
                  }
            },
            {
                breakpoint:700,
                settings: {
                    item:1
                  }
            }
        ]
    });
});

$(document).ready(function() {
    var autoplaySlider = $('#sponsors').lightSlider({
        auto:true,
        pager:false,
        autoWidth:true,
        pauseOnHover:true,
        loop:true,
        controls:false,
        slideMargin: 30,
        onSliderLoad: function() {
            $('#sponsors').removeClass('cS-hidden');
        },
        onBeforeSlide: function (el) {
        } 
    });
});

$(document).ready(function() {
    var autoplaySlider = $('#partners').lightSlider({
        auto:true,
        pager:false,
        autoWidth:true,
        pauseOnHover:true,
        loop:true,
        controls:false,
        slideMargin: 30,
        onSliderLoad: function() {
            $('#partners').removeClass('cS-hidden');
        },
        onBeforeSlide: function (el) {
        } 
    });
});

$(document).ready(function() {
    var autoplaySlider = $('#organizadores').lightSlider({
        auto:true,
        pager:false,
        autoWidth:true,
        pauseOnHover:true,
        loop:true,
        controls:false,
        slideMargin: 30,
        onSliderLoad: function() {
            $('#organizadores').removeClass('cS-hidden');
        },
        onBeforeSlide: function (el) {
        } 
    });
});

$(document).ready(function() {
    var autoplaySlider = $('#cursos').lightSlider({
        auto:true,
        pager:false,
        autoWidth:true,
        pauseOnHover:true,
        loop:true,
        controls:false,
        slideMargin: 30,
        onSliderLoad: function() {
            $('#organizadores').removeClass('cS-hidden');
        },
        onBeforeSlide: function (el) {
        } 
    });
});

