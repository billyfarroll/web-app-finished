$(document).ready(function(){
    
   $('.login-box').hide();
    
    $('.login-toggle').click(function() {
        $('.login-box').slideToggle();
    });
    
    $('.register').hide();
    
    $('.register-toggle').click(function() {
        $('.register').slideToggle();
    });
    
    $('.add-holiday').hide();
    
    $('.holiday-toggle').click(function() {
        $('.add-holiday').slideToggle();
    });
    
    $('.logout').hide();
    
    $('.logout-toggle').click(function() {
        $('.logout').slideToggle();
    });
    
    //$('.date').hide();
    
    //$('.date-toggle').click(function() {
       // $('.date').slideToggle();
    //});
    
});
