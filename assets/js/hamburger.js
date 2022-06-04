$(function() {
  /* ハンバーガーメニュー */
  $(".header__openbtn").click(function () {
    $(this).toggleClass('active');
    $(".header__g-nav").toggleClass('panelactive');
		$("body").toggleClass('fixed');
  });
  $(".header__g-nav--all--content a").click(function () {
    $(".header__openbtn").removeClass('active');
    $(".header__g-nav").removeClass('panelactive');
    
    $("body").removeClass('fixed');
  });
});