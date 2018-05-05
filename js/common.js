
//スクロールヘッダー
jQuery(window).scroll(function() {
  if (jQuery(window).scrollTop() > 100) {
    jQuery('.Header').addClass('Header-Bg');
  } else {
    jQuery('.Header').removeClass('Header-Bg');
  }
});

//ハンバーガーメニュー
jQuery('.naviToggle').on("click", function() {
  jQuery('.Header').toggleClass('naviToggle-Open');
  return false;
});

//ナビゲーション外タッチで閉じる
jQuery(".Navi-Shadow").click(function() {
  jQuery('.Header').removeClass('naviToggle-Open');
  return false;
});

//タブ
jQuery('.Tab-Btn').on('click',function(){
  var index = jQuery('.Tab-Btn').index(this);
  jQuery('.Tab-Inner').css('display','none');
  jQuery('.Tab-Inner').eq(index).css('display','block');
  jQuery('.Tab-Btn').removeClass('Tab-Btn--Active');
  jQuery(this).addClass('Tab-Btn--Active');
});

//アコーディオン
jQuery(".Accordion dt").on("click", function() {
  jQuery(this).next().slideToggle();
});

//カルーセル

var slideWidth = jQuery('.Carousel-Wrapper li').outerWidth();  // .slideの幅を取得して代入
var slideNum = jQuery('.Carousel-Wrapper li').length;  // .slideの数を取得して代入
var slideSetWidth = slideWidth * slideNum;  // .slideの幅×数で求めた値を代入
jQuery('.Carousel-Wrapper').css('width', slideSetWidth); // .slideSetのスタイルシートにwidth: slideSetWidthを指定

var slideCurrent = 0; // 現在地を示す変数

// アニメーションを実行する独自関数
var sliding = function(){
  // slideCurrentが0以下だったら
  if( slideCurrent < 0 ){
    slideCurrent = slideNum - 1;

  // slideCurrentがslideNumを超えたら
  }else if( slideCurrent > slideNum - 1 ){  // slideCUrrent >= slideNumでも可
    slideCurrent = 0;

  }

  jQuery('.Carousel-Wrapper').stop().animate({
    left: slideCurrent * -slideWidth
  });
}

// 前へボタンが押されたとき
jQuery('.Carousel-Button-Prev').click(function(){
  slideCurrent--;
  sliding();
});

// 次へボタンが押されたとき
jQuery('.Carousel-Button-Next').click(function(){
  slideCurrent++;
  sliding();
});
