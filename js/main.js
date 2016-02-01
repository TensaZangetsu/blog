$(document).ready(function () {
    $menuLeft = $('.pushmenu-left');
    $nav_list = $('#nav_list i');
    $submenu = $('.pushmenu-left  li:nth-child(3) ');
    $submenu.click(function(){
        $('.submenu').slideToggle();
    })
    $nav_list.click(function() {
        $(this).toggleClass('active');
        $('.admin').toggleClass('pushmenu-push-toright');
        $menuLeft.toggleClass('pushmenu-open');
    });
    $('.flexslider').flexslider({
        animation: 'slide',
        controlsContainer: '.flexslider'
    });
    $(".fa-bars").click(function () {
        $('nav').slideToggle('fast');
    })
});
