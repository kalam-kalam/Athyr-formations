$(document).ready(function () {

    //swiper sliders
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });

    //Menu Burger Appear
    $('#box-shadow-burger').click(
        function () {
            $('#all_nav_resp').fadeIn();
            $('#logo_container_resp').css('display', 'none');
            $('#banner').css('margin-top', '260px');
            return false;
    });

    $('#burger_cross').on('click', function () {
        $('#all_nav_resp').hide();
        $('#banner').css('margin-top', '0px');
        $('#logo_container_resp').fadeIn();
        
    });

    //Dropdown Menu
    $('.menu_click').hover(
        function () {
            $(this).children('ul').stop(true, false, true).slideToggle(100);
        });

    $('.menu_click_resp').click(
        function () {
            $(this).children('ul').stop(true, false, true).slideToggle(100);
        });

    $('#search').mouseenter(
        function(){
            $('#toggle_ul_search').stop(true, false, true).fadeIn(400);
        });

    $('#search').mouseleave(
        function(){
            $('#toggle_ul_search').stop(true, false, true).fadeOut(400);
        }
    );
    
    //Single_Pages toggle details

    /*$('.toggle_single').click(function () {
            
            $(this).children('.details_toggle_single').show();
            $(this).find('.toggle_plus').hide();
            $(this).find('.toggle_moins').show();

            var marginHeight = $(this).children('.details_toggle_single').outerHeight();
            $(this).next().css('margin-top', marginHeight);  
    
        
        });*/
    
    


    $('.toggle_single').click(function(){

        if($(this).children('.details_toggle_single').is(':hidden')){
            $(this).children('.details_toggle_single').show();
            $(this).find('.toggle_plus').hide();
            $(this).find('.toggle_moins').show();

            var marginHeight = $(this).children('.details_toggle_single').outerHeight();
            var marginToAdd = (marginHeight + 10);
            $(this).next().css('margin-top', marginToAdd);

            
        }else{
            $(this).children('.details_toggle_single').hide();
            $(this).find('.toggle_plus').show();
            $(this).find('.toggle_moins').hide();
            $(this).next().css('margin-top', '10px');
            
        }
        
    });

    


    // Make responsive changes on window resize
    if ($(window).width() < 768) {

        $('#engagements_athyr_desktop').hide();
        $('#engagements_athyr_resp').show();
    }

    else  {
        $('#engagements_athyr_desktop').show();
        $('#engagements_athyr_resp').hide();

    }

    $(window).resize(function () {
        if ($(window).width() < 768) {

            $('#engagements_athyr_desktop').hide();
            $('#engagements_athyr_resp').show();
            $('#actu_blog_resp').show();
        }
        else if ($(window).width() > 768) {
            $('#engagements_athyr_desktop').show();
            $('#engagements_athyr_resp').hide();
        }
    });

    function div_show(popup_newsletter) {
        document.getElementById(popup_newsletter).style.display = 'flex';
    }

    function div_hide(popup_newsletter) {
        document.getElementById(popup_newsletter).style.display = 'none';
    }


    });





