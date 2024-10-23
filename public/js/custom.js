(function ($) {
    $(document).ready(function () {
        //Footer Title Responsive
        $(".footerBlock h3").on("click", function () {
            $(this).next().slideToggle();
            $(this).toggleClass("active");
        })
        //Sidebar
        responsiveMenu();
        $('.menuTigger').on("click", function () {
            $('body').toggleClass("menu--open");
            $(".has-sub").removeClass('active');
        });
        // $('.tabsTriggerLink').on("click", function () {
        //     $('body').toggleClass("aside--open");
        // });
        // $(".profileBox .closeBtn").on("click", function () {
        //     $(this).parents(".menu-block").removeClass("active")
        // });
        // $('.datepicker .date').datepicker({ dateFormat: "dd/mm/yy" });
        // $('.timepicker .time').datetimepicker({
        //     format: 'LT',
        //     icons: {
        //         time: 'fa fa-clock',
        //         date: 'fa fa-calendar',
        //         up: 'up-arrow',
        //         down: 'down-arrow',
        //     }
        // });
        //Header user profile
        // $(".menuBtn").on("click", function () {
        //     $(this).parent().toggleClass('active');
        // });
        //Edit Voucher Accordian
        // $('.editBtn').click(function () {
        //     $(".tblAccordianBody").hide();
        //     $(this).parents().next(".tblAccordianBody").toggle();

        // });
        // $(".closeBtn").on("click",function(){
        //      $(this).parents(".tblAccordianBody").hide();
        // });

        //Small Slider

        // var $slider = $('.smallSlider');
        // $slider.slick({
        //     autoplay: true,
        //     autoplaySpeed: 2000,
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     dots: true,
        //     prevArrow: '<button type="button" class="slick-prev"></button>',
        //     nextArrow: '<button type="button" class="slick-next"></button>'
        // });

        // $slider.on('click', '.slick-prev, .slick-next', function () {
        //     $slider.slick('slickPause');
        //     $slider.slick('slickPlay');
        // });
    });

    // $(document).mouseup(function (e) {
    //     const container = $(".profileBox, .menuBtn");
    //     // if the target of the click isn't the container nor a descendant of the container
    //     if (!container.is(e.target) && container.has(e.target).length === 0) {
    //         $(".menu-block").removeClass("active");
    //     }
    // });
    $(window).on("resize", function () {
        responsiveMenu();
    });
    function responsiveMenu() {
        if ($(window).width() < 1200) {
            $(".has-sub .arrow").on("click", function () {
                $(this).parent().toggleClass('active');
                $(this).parent().siblings().removeClass('active');
            });
        }
    }
})(jQuery);
