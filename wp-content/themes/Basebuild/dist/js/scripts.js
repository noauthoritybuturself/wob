

$(document).ready(function() {
    var autoplaySlider = $('#ponentes').lightSlider({
        auto:true,
        pager:false,
        autoWidth:true,
        pauseOnHover:true,
        loop:true,
        controls:false,
        onSliderLoad: function() {
            $('#ponentes').removeClass('cS-hidden');
        },
  
    });
});


$(document).ready(function() {
    var autoplaySlider = $('#tickets').lightSlider({
        auto:true,
        pager:false,
        loop:true,
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

