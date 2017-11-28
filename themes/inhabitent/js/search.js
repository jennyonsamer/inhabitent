(function($){

  $('.search-field').hide();

  $('.main-navigation .search-submit').on('click', function(event){
    event.preventDefault();
    $('.main-navigation .search-field').toggle().focus();
    
  });

  $('.main-navigation .search-field').on('blur', function(){
    $(this).toggle()
  });


})(jQuery);