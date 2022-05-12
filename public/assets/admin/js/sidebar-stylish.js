
$(function () {
    "use strict";

    var body = $("#main-wrapper");

    // perfect scrollbar initialisation

    $('.mini-nav, .sidebar-menu').perfectScrollbar();

    // ============================================================== 
    // This is for the top header part and sidebar part
    // ==============================================================  

    var set1 = function () {
        var width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
        var topOffset = 0;
        if (width < 1170) {
            $('.mini-nav > li.selected').addClass('cnt-none');
            $('#toggle-stylish-sidebar').hide();
        } else {
            $('.mini-nav > li.selected').removeClass('cnt-none');
            $('#toggle-stylish-sidebar').show();
        }
    };
    $(window).ready(set1);
    $(window).on("resize", set1);

    // this is for close icon when navigation open in mobile view

    $(".nav-toggler").click(function () {
        $("body").toggleClass("show-sidebar");
        $(".nav-toggler i").toggleClass("ti-menu");
        $(".nav-toggler i").addClass("ti-close");
    });

    // This is for click on Sidebar open close button 

    $(".mini-nav > li, #toggle-stylish-sidebar").on('click', function () {
        if (body.hasClass("rmv-sidebarmenu")) {
            body.trigger("resize");
            $("#toggle-stylish-sidebar").hide();
        } else {
            body.trigger("resize");
            $("#toggle-stylish-sidebar").show();
        }
    });
    $(".mini-nav > li, #toggle-stylish-sidebar").on('click', function () {
        if (body.hasClass("mini-sidebar")) {
            $('.mini-nav > li.selected').removeClass('cnt-none');
            $("#toggle-stylish-sidebar").show();
        }
    });

    // Sidemenu toggle 

    $(".mini-nav").css("overflow", "hidden").parent().css("overflow", "visible");
    $('#toggle-stylish-sidebar').on("click", function () {
        $('#toggle-stylish-sidebar').hide();
        $('.mini-nav > li.selected').addClass('cnt-none');
        $(".topbar .navbar-header").removeClass("expand-logo");
        $(".topbar .navbar-header").toggleClass("narrow-logo");
    });
    $('.mini-nav > li').on("click", function () {
        $('#toggle-stylish-sidebar').show();
        $('.mini-nav > li.selected').removeClass('cnt-none');
        body.removeClass('rmv-sidebarmenu');
        $(".topbar .navbar-header").addClass("expand-logo");
    });
    $('.mini-nav > li').on('click', function () {
        $('.mini-nav > li.selected').removeClass('selected');
        $(this).addClass('selected');
    });

    
    $(window).resize(function(e) {
        var width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
        if (width < 1170) {
            //$("ul.sidebar-menu a").addClass('active').parent().addClass('in').parent().parent().addClass('selected').css("display","none");
            $(".mini-nav > li .sidebarmenu").addClass("collapse-sidebar");

            $('.mini-nav > li').on("click", function(){
                $(".sidebarmenu").removeClass("collapse-sidebar");
            });
        }
        else {
            // Code here
        }
    });
    // Add or removed class from body 
    if($(window).width() > 1170) {
        $('#toggle-stylish-sidebar').on('click', function () {
            body.toggleClass('mini-sidebar');
        });
    } else {
        // Code here
    }
    

    // ============================================================== 
    // Auto select left navbar
    // ============================================================== 
    $(function () {
        var url = window.location;
        var element = $('ul.sidebar-menu a').filter(function () {
            return this.href == url;
        }).addClass('active').parent().addClass('active');
        while (true) {
            if (element.is('li')) {
                element = element.parent().addClass('in').parent().parent().addClass('selected');
            } else {
                break;
            }
        }
    });

    // Sidemenu style 

    $.sidemenu = function (menu) {
        var animationSpeed = 300;
        $(menu).on('click', 'li a', function (e) {
            if ($(this).next().is('.sub-menu') && $(this).next().is(':visible')) {
                $(this).next().slideUp(animationSpeed, function () {
                    $(this).next().removeClass('menu-open');
                });
                $(this).next().parent("li").removeClass("active");
            } else if (($(this).next().is('.sub-menu')) && (!$(this).next().is(':visible'))) {
                var parent = $(this).parents('ul').first();
                parent.find('ul:visible').slideUp(animationSpeed).removeClass('menu-open');
                $(this).next().slideDown(animationSpeed, function () {
                    $(this).next().addClass('menu-open');
                    parent.find('li.active').removeClass('active');
                    $(this).parent("li").addClass('active');
                });
            }
        });
    }
    $.sidemenu($('.sidebar-menu'));

});