// JavaScript Document

jQuery(document).ready(function($) {
    // Inside of this function, $() will work as an alias for jQuery()
    // and other libraries also using $ will not be accessible under this shortcut


    // Click event to scroll to top
    $('#upstairs').click(function(e){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });

    // Add Class for responsiv Table
    $('table').addClass('table-responsive');

    // jQuery Bootstrap-style Dropdowns
    function dropdown_menu(){
       if(!("ontouchstart" in document.documentElement)){
           $('ul.nav li.dropdown').hover(function() {
               $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
           }, function() {
               $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
           });
       }
    }
    dropdown_menu();

    // The resize event is sent to the window element when the size of the browser window changes
    $(window).resize(function() {
        dropdown_menu();
    });
});