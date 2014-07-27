//Scroll Top
$(function(){
    $(window).scroll(function() {              
      $('#back-to-top').toggle($(document).scrollTop() > 500);
    })
});

$("#back-to-top").click(function()
{
      
      $( 'html, body' ).animate( {
         
         scrollTop: 0
         
      }, 700 );
    
});