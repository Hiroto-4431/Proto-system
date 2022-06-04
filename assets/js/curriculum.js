$(function() {
  /*タブ*/
	function GethashID (hashIDName){
		if(hashIDName){
			$('.curriculum__tab li').find('a').each(function() {
				let idName = $(this).attr('href');	
				if(idName == hashIDName){
					let parentElm = $(this).parent();
					$('.curriculum__tab li').removeClass("active");
					$(parentElm).addClass("active");
					$(".area").removeClass("is-active");
					$(hashIDName).addClass("is-active");
				}
			});
		}
	}
	$('.curriculum__tab a').on('click', function() {
		let idName = $(this).attr('href');
		GethashID (idName);
		return false;
	});
	$('.curriculum__tab li').on('click', function() {
		$(this).toggleClass('curriculum__tab li.sys')
	});

	//▽
	const SYS = document.getElementById('system-1');
	const NET = document.getElementById('network-2');
	$('.sys').on('click', function() {
		$('.curriculum').removeClass('height');
		$(NET).removeClass('net-box1');
		$(SYS).addClass('sys-box1');
	});
	$('.net').on('click', function() {
		$('.curriculum').toggleClass('height');
		$(NET).addClass('net-box1');
		$(SYS).removeClass('sys-box1');
	});
	
	
	$(window).on('load', function () {
		$('.curriculum__tab li:first-of-type').addClass("active");
		$('.curriculum__system-content').addClass("is-active");
		let hashName = location.hash;
		GethashID (hashName);

		//▽
		$(NET).removeClass('net-box1');

		
	});
})