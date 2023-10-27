
window.onload = function() {
    //hoverした場合
    $('.drop').hover(function(){

    if(window.innerWidth > 981) {
    $(".drop-menu:not(:animated)", this).fadeIn();
    //hoverが外れた場合
       } }, function(){
    if(window.innerWidth > 981) {
        $(".drop-menu",this).fadeOut();
        }
    });

    $(".header-menu").on("click", function(){
        $(this).toggleClass("open");
        $("#header-navigation").fadeToggle();
    });

       //スムーススクロール
    $('a[href^="#"]').click(function(){
      var hd_height = $('header').height();
      console.log(hd_height);
      $('html,body').animate({ scrollTop: $($(this).attr("href")).offset().top - hd_height }, 'slow','swing');
      return false;
    })


    // ページのURLを取得
    const url = $(location).attr('href'),
    // headerの高さを取得してそれに30px追加した値をheaderHeightに代入
    headerHeight = $('header').outerHeight();

    // urlに「#」が含まれていれば
    if(url.indexOf("#") != -1){
        // urlを#で分割して配列に格納
        const anchor = url.split("#"),
        // 分割した最後の文字列（#◯◯の部分）をtargetに代入
        target = $('#' + anchor[anchor.length - 1]),
        // リンク先の位置からheaderHeightの高さを引いた値をpositionに代入
        position = Math.floor(target.offset().top) - headerHeight;
        // positionの位置に移動
        $("html, body").animate({scrollTop:position}, 500);
    }

    $('.p-qa ul li h2').on('click',function(){
        $(this).next().slideToggle();
        $(this).toggleClass("open");
    });
}
$(document).ready(function() {
    $('.info-title').click(function() {
        if($(this).hasClass('active')){
            $('.text-content').hide();
            $($(this).attr('href')).hide();
            $('.info-title').removeClass('active');
            $('.text-contents').removeClass('active-opac').delay(200).queue(function(){
                $('.text-contents').removeClass('active-disp');
                $('.modal-list-wrapper').removeClass('deactive-disp').removeClass('deactive-opac');
                $('.text-contents').dequeue();
            });            
        }else{
            $('.info-title').removeClass('active');
            $('.text-content').hide();
            $($(this).attr('href')).css('display', 'flex');
            $(this).addClass('active');
            $('.modal-list-wrapper').addClass('deactive-opac').delay(200).queue(function(){
                $('.modal-list-wrapper').addClass('deactive-disp');
                $('.text-contents').addClass('active-disp').addClass('active-opac');
                $('.modal-list-wrapper').dequeue();
            });
        }
    });

    $('.sp-back-button button').click(function(){
        $('.text-content').hide();
        $(this).parents('.text-content').hide();
        $('.info-title').removeClass('active');
        $('.text-contents').removeClass('active-opac').delay(200).queue(function(){
            $('.text-contents').removeClass('active-disp');
            $('.modal-list-wrapper').removeClass('deactive-disp').removeClass('deactive-opac');
            $('.text-contents').dequeue();
        });            
    });

    $('.paged-box').click(function(){
        $(".info-title[href=" + $(this).attr('href') + "]").trigger('click');
        console.log($(".info-title [href='" + $(this).attr('href') + "']"));
    });
})