$(function() {
  /*固定ボタン*/
	/*PC用*/
	function PageTopAnime() {
		let scroll = $(window).scrollTop();
		if (scroll >= 500){
			$('.black-label').removeClass('DownMove');
			$('.consult').removeClass('DownMove');
			$('.black-label').addClass('UpMove');
			$('.consult').addClass('UpMove');
		}else{
			if($('.black-label, .consult').hasClass('UpMove')){
				$('.black-label').removeClass('UpMove');
				$('.consult').removeClass('UpMove');
				$('.black-label').addClass('DownMove');
				$('.consult').addClass('DownMove');
			}
		}
	}
	
	/*SP用*/
	$(window).scroll(function () {
		let windowWidth = $(window).width();
		if (windowWidth <= 800) {		
		} else {
			PageTopAnime();
		}
	});

	/*消すPC*/
	//スクロールした際の動きを関数でまとめる
	function setFadeElement(){
		let windowH = $(window).height();
		let scroll = $(window).scrollTop(); 
			
		//範囲の指定
		let contentsTop = Math.round($('#promotion_zone3').offset().top);
		let contentsH = $('#promotion_zone3').outerHeight(true);
			
		//2つ目の範囲の指定
		let contentsTop2 = Math.round($('#footer').offset().top);
		let contentsH2 = $('#footer').outerHeight(true);

		//出現範囲内に入ったかどうかをチェック
		if(scroll+windowH >= contentsTop && scroll+windowH  <= contentsTop+contentsH){
			$('.black-label').removeClass('UpMove');
			$('.consult').removeClass('UpMove');
			//2つ目の出現範囲に入ったか
		} else if(scroll+windowH >= contentsTop2 && scroll+windowH <= contentsTop2+contentsH2) {
			$('.black-label').removeClass('UpMove');
			$('.consult').removeClass('UpMove');
		}else{

		}
	}

	/*SP*/
	function SPFadeElement(){
		let windowH = $(window).height();
		let scroll = $(window).scrollTop(); 
		//出現範囲の指定
		let contentsTop = Math.round($('#promotion_zone3').offset().top);
		let contentsH = $('#promotion_zone3').outerHeight(true);
		//2つ目の出現範囲の指定※任意
		let contentsTop2 = Math.round($('#footer').offset().top);
		let contentsH2 = $('#footer').outerHeight(true);
		//出現範囲内に入ったかどうかをチェック
		if(scroll+windowH >= contentsTop && scroll+windowH  <= contentsTop+contentsH){
			$('.black-label').addClass('none');
			$('.consult').addClass('none');
			//2つ目の出現範囲に入ったか
		} else if(scroll+windowH >= contentsTop2 && scroll+windowH <= contentsTop2+contentsH2) {
			$('.black-label').addClass('none');
			$('.consult').addClass('none');
		}else{
			$('.black-label').removeClass('none');
			$('.consult').removeClass('none');
		}
	}

	$(window).scroll(function () {
		let windowWidth = $(window).width();
		if (windowWidth <= 800) {
			SPFadeElement();
		} else {
		}
	});

	$(window).scroll(function () {
		setFadeElement();
	});

	
	
})