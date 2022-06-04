$(function() {
  /*アコーディオン*/
  $('.Q-A__accordion--area--title').on('click', function() {
	  let findElm = $(this).next(".Q-A__accordion--area--box");
	  $(findElm).slideToggle();
	  if($(this).hasClass('close')){
		  $(this).removeClass('close');
	  }else{
		  $(this).addClass('close');
	  }
  });
})