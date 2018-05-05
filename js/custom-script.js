jQuery(function($){
  //スクロールヘッダー
  $(window).scroll(function() {
    if ($(window).scrollTop() > 60) {
      $('.header').addClass('header-bg');
    } else {
      $('.header').removeClass('header-bg');
    }
  });

  //ハンバーガーメニュー
  $('.naviToggle').on("click", function() {
    $('.header').toggleClass('naviToggle-open'),
    $('.naviToggle-block-shadow').fadeToggle();
  });

  //ナビゲーション外タッチで閉じる
  $(".naviToggle-block-shadow").click(function() {
    $('.header').removeClass('naviToggle-open'),
    $('.naviToggle-block-shadow').fadeOut();
  });

  $(function() {
    setTimeout(function(){
      $('.hero-text').animate({ opacity: "1" }, { duration: 3000, easing: 'swing', });
    },3000);
  });

  $(window).on('load',function(){

	// fade-up
  $(window).scroll(function (){
    $('.fadeIn').each(function(){
      var POS = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (scroll > POS - windowHeight){
        $(this).css({
          'opacity':'1',
          'transform':'translateY(0)',
          '-webkit-transform':'translateY(0)',
          '-moz-transform':'translateY(0)',
          '-ms-transform':'translateY(0)'
          });
        } else {
          $(this).css({
            'opacity':'0',
            'transform':'translateY(70px)',
            '-webkit-transform':'translateY(70px)',
            '-moz-transform':'translateY(70px)',
            '-ms-transform':'translateY(70px)'
          });
        }
      });
    });
  });
});
