//ナビゲーションメニュー
$(".header-menu").on("click", function(){
	$(this).toggleClass("open");
	$("#header-navigation").fadeToggle();
});

$(".header-navigation-list li a").on("click", function(){
	if(window.innerWidth < 980) {
		$(".header-menu").toggleClass("open");
		$("#header-navigation").fadeToggle();
}
});


function showWord() {
	$('.loading-char').each((i, elem) => {
		setTimeout(() => {
			$(elem).addClass('animation-text');
		}, 100 * i, i, elem);
	});
}

$(document).ready(function() {
	showWord();
	//文字を消す
	timer = setInterval(() => {
		$('.loading-char').removeClass('animation-text');
		$('.loading-char').addClass('animation-reverse');
		setTimeout(() => {
		$('.loading-char').removeClass('animation-reverse');
			showWord();
		}, 2000);
	}, 5000);
});


//MVアニメーション
const elems = Array(
	$('.animation'),
	$('.mv-blackboard-logo'),
	$('.mv-lion'),
	$('.ico-info-link'),
	$('.ico-art-link')
);
const elemsAtInfo = Array(
	$('.box01'),
	$('.box02'),
	$('.box03'),
	$('.box04'),
);
const classNamePc = Array(
	'fade-in',
	'fade-in',
	'fade-in-to-left',
	'fade-in-icon_pc',
	'fade-in-icon-art_pc',
)
const classNameSp = Array(
	'fade-in',
	'fade-in',
	'fade-in-to-left',
	'fade-in-icon_sp',
	'fade-in-icon-art_sp',
)
const classNameInfo = Array(
	'img01',
	'img02',
	'img03',
	'img04',
)
let timer;

function animation() {
	console.log(window.innerWidth);
	for (let i = 0; i < elems.length; i++) {
		elems[i].removeClass(classNamePc[i]);
		elems[i].removeClass(classNameSp[i]);
	}
	if (window.innerWidth > 500) {
		for (let i = 0; i < elems.length; i++) {
			setTimeout(() => {
				elems[i].addClass(classNamePc[i])
			}, 1000 * (i + 1));
		}
	}
	if (window.innerWidth <= 500) {
		for (let i = 0; i < elems.length; i++) {
			setTimeout(() => {
				elems[i].addClass(classNameSp[i])
			}, 1000 * (i + 1));
		}
	}
	for (let i = 0; i < elemsAtInfo.length; i++) {
		setTimeout(() => {
			elemsAtInfo[i].addClass(classNameInfo[i])
		}, 1000 * (i + 1));
	}
};


window.onload = () => {
	clearInterval(timer);
	$('.loading').delay(1500).fadeOut('slow');
	$('#loading-box').delay('1200').fadeOut('slow');
	setTimeout(animation, 1500)

  //トップページのアイコンマウスオン時の挙動
	//PC
	$('.ico-art-link_pc').click(function() {
		$('.balloon-background_pc').toggleClass('balloonHover');
		$('.balloon-background_pc').toggleClass('balloonDisappear');
		$('.balloon button').toggleClass('btn-cursor');
	});
	$('.ico-info-link_pc').click(function() {
		$('.balloon-background_pc2').toggleClass('balloonHover2');
		$('.balloon-background_pc2').toggleClass('balloonDisappear2');
		$('.balloon2 button').toggleClass('btn-cursor');
	});
	$('.mv-lion_pc').click(function() {
		$('.balloon-background_pc3').toggleClass('balloonHover3');
		$('.balloon-background_pc3').toggleClass('balloonDisappear3');
		$('.balloon3 button').toggleClass('btn-cursor');
	});
	//SP
	$('.ico-art-link_sp').on('touchstart', function() {
		$('.balloon-background_sp').toggleClass('balloonHover');
		$('.balloon-background_sp').toggleClass('balloonDisappear');
		$('.balloon button').toggleClass('btn-cursor');
	});
	$('.ico-info-link_sp').click(function() {
		$('.balloon-background_sp2').toggleClass('balloonHover2');
		$('.balloon-background_sp2').toggleClass('balloonDisappear2');
		$('.balloon2 button').toggleClass('btn-cursor');
	});
	$('.mv-lion_sp').click(function() {
		$('.balloon-background_sp3').toggleClass('balloonHover3');
		$('.balloon-background_sp3').toggleClass('balloonDisappear3');
		$('.balloon3 button').toggleClass('btn-cursor');
	});
	
	//フキダシ外クリックorタップでフキダシを消す
	//PC
	$('.balloon-background').on('click', function (e) {
		if ($('.balloon-background_pc').hasClass('balloonHover')) {
			$('.balloon-background_pc').removeClass('balloonHover');
			$('.balloon-background_pc').addClass('balloonDisappear');
			$('.balloon button').removeClass('btn-cursor');
		}
	});
	$('.balloon-background2').on('click', function (e) {
		if ($('.balloon-background_pc2').hasClass('balloonHover2')) {
			$('.balloon-background_pc2').removeClass('balloonHover2');
			$('.balloon-background_pc2').addClass('balloonDisappear2');
			$('.balloon2 button').removeClass('btn-cursor');
		}
	});
	$('.balloon-background3').on('click', function (e) {
		if ($('.balloon-background_pc3').hasClass('balloonHover3')) {
			$('.balloon-background_pc3').removeClass('balloonHover3');
			$('.balloon-background_pc3').addClass('balloonDisappear3');
			$('.balloon3 button').removeClass('btn-cursor');
		}
	});
	$('.balloon').on('click', function(e){//フキダシ自体はクリックしても消さない
		e.stopPropagation();
	});
	$('.balloon2').on('click', function(e){//フキダシ自体はクリックしても消さない
		e.stopPropagation();
	});
	$('.balloon3').on('click', function(e){//フキダシ自体はクリックしても消さない
		e.stopPropagation();
	});
	//SP
	$('.balloon-background_sp').on('touchstart', function () {
		if ($('.balloon-background_sp').hasClass('balloonHover')) {
			$('.balloon-background_sp').removeClass('balloonHover');
			$('.balloon-background_sp').addClass('balloonDisappear');
			$('.balloon button').removeClass('btn-cursor');
		}
	});
	$('.balloon-background_sp2').on('touchstart', function () {
		if ($('.balloon-background_sp2').hasClass('balloonHover2')) {
			$('.balloon-background_sp2').removeClass('balloonHover2');
			$('.balloon-background_sp2').addClass('balloonDisappear2');
			$('.balloon2 button').removeClass('btn-cursor');
		}
	});
	$('.balloon-background_sp3').on('touchstart', function () {
		if ($('.balloon-background_sp3').hasClass('balloonHover3')) {
			$('.balloon-background_sp3').removeClass('balloonHover3');
			$('.balloon-background_sp3').addClass('balloonDisappear3');
			$('.balloon3 button').removeClass('btn-cursor');
		}
	});
	$('.balloon').on('touchstart', function(e){//フキダシ自体はクリックしても消さない
		e.stopPropagation();
	});
	$('.balloon2').on('touchstart', function(e){//フキダシ自体はクリックしても消さない
		e.stopPropagation();
	});
	$('.balloon3').on('touchstart', function(e){//フキダシ自体はクリックしても消さない
		e.stopPropagation();
	});
	//フキダシの×マーククリックでフキダシ消す
	//PC
	$('.ico-close').on('click', function() {
		if ($('.balloon-background_pc').hasClass('balloonHover')) {
			$('.balloon-background_pc').removeClass('balloonHover');
			$('.balloon-background_pc').addClass('balloonDisappear');
			$('.balloon button').removeClass('btn-cursor');
		}
	})
	$('.ico-close2').on('click', function() {
		if ($('.balloon-background_pc2').hasClass('balloonHover2')) {
			$('.balloon-background_pc2').removeClass('balloonHover2');
			$('.balloon-background_pc2').addClass('balloonDisappear2');
			$('.balloon2 button').removeClass('btn-cursor');
		}
	})
	$('.ico-close3').on('click', function() {
		if ($('.balloon-background_pc3').hasClass('balloonHover3')) {
			$('.balloon-background_pc3').removeClass('balloonHover3');
			$('.balloon-background_pc3').addClass('balloonDisappear3');
			$('.balloon3 button').removeClass('btn-cursor');
		}
	})
	//SP
	$('.ico-close').on('touchstart', function() {
		if ($('.balloon-background_sp').hasClass('balloonHover')) {
			$('.balloon-background_sp').removeClass('balloonHover');
			$('.balloon-background_sp').addClass('balloonDisappear');
			$('.balloon button').removeClass('btn-cursor');
		}
	});
	$('.ico-close2').on('touchstart', function() {
		if ($('.balloon-background_sp2').hasClass('balloonHover2')) {
			$('.balloon-background_sp2').removeClass('balloonHover2');
			$('.balloon-background_sp2').addClass('balloonDisappear2');
			$('.balloon2 button').removeClass('btn-cursor');
		}
	});
	$('.ico-close3').on('touchstart', function() {
		if ($('.balloon-background_sp3').hasClass('balloonHover3')) {
			$('.balloon-background_sp3').removeClass('balloonHover3');
			$('.balloon-background_sp3').addClass('balloonDisappear3');
			$('.balloon3 button').removeClass('btn-cursor');
		}
	});
};

window.onresize = () => {
	for (let i = 0; i < elems.length; i++) {
		elems[i].removeClass(classNamePc[i]);
		elems[i].removeClass(classNameSp[i]);
	}
	if (window.innerWidth > 500) {
		for (let i = 0; i < elems.length; i++) {
			elems[i].addClass(classNamePc[i])
		}
	}
	if (window.innerWidth <= 500) {
		for (let i = 0; i < elems.length; i++) {
			elems[i].addClass(classNameSp[i])
		}
	}
}