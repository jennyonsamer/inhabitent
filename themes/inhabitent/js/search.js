(function($){

  $('.search-field').hide();

  $('.main-navigation .search-submit').on('click', function(event){
    event.preventDefault();
    $('.main-navigation .search-field').toggle().focus();


    $(document).keypress(function( event ) {
      if ( event.which == 13 ) {
         event.preventDefault();
         $('.search-form').submit();
      }
    });



    
  });

  $('.main-navigation .search-field').on('blur', function(){
    $(this).toggle()
  });


})(jQuery);