jQuery(function() {

  //スクロールするとヘッダーの色が変わる
  jQuery(window).on('scroll', function () {
    if(jQuery('.header').height() <
      jQuery(this).scrollTop()) {
      jQuery('.header').addClass('change-color');
      } else {
      jQuery('header').removeClass('change-color');
      }
  });

  //ハンバーガーメニュー
  jQuery('.burger-btn').on('click', function() {
    jQuery('.burger-btn, .bar-top, .bar-mid, .bar-bottom').toggleClass('active');
    jQuery('.header_gnav-wrapper').toggleClass('slide-in');
    jQuery('body').toggleClass('noscroll');
  });


});
