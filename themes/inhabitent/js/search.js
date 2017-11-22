(function($){

  $('.search-field').hide();

  $('.main-navigation .search-submit').on('click', function(event){
    event.preventDefault();
    $('.search-field').toggle().focus();
  });

  $('.search-field').on('blur', function(){
    $(this).toggle()
  });


})(jQuery);