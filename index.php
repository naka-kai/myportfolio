<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kai Portfolio</title>

  <!-- ogp -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta property="og:type" content="website">
  <meta property="og:site" content="" />
  <meta property="og:title" content="Kai Portfolio" />
  <meta property="og:description" content="大阪出身・東北在住の27歳、kaiのポートフォリオです" />
  <meta property="og:image" content="https://kaiblo.com/myportfolio/img/mv.jpg" />
  <meta property="og:url" content="https://kaiblo.com/myportfolio/">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/mainvisual.css">
  <link rel="stylesheet" href="css/service.css">
  <link rel="stylesheet" href="css/works.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/profile.css">
  <link rel="stylesheet" href="css/footer.css">

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- javascript -->
  <script src="js/script.js"></script>
</head>

<body>

  <header class="header">
    <h1 class="header-logo">N.Kai</h1>
    <div class="header_gnav-wrapper">
      <nav class="header_gnav">
        <ul class="header_list">
          <li class="header_listItem"><a href="#profile">profile</a></li>
          <li class="header_listItem"><a href="#service">Service</a></li>
          <li class="header_listItem"><a href="#works">Works</a></li>
          <li class="header_listItem"><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
    <!-- ハンバーガーボタン -->
    <div class="burger-btn">
      <span class="bar bar-top"></span>
      <span class="bar bar-mid"></span>
      <span class="bar bar-bottom"></span>
    </div>
  </header>

  <section class="mainvisual">
    <div class="thanks">
      <div class="thanks_bg">
        <p class="thanks_text">ホームページにお越しいただきありがとうございます。<br>
          Web制作を行っております、中島三希子と申します。<br>
          お客様の事業の成長につながるお手伝いを<br class="smallNone">させていただきたいと考えています。<br>
          まずはお気軽にご相談ください。<br>
        </p>
      </div>
    </div>
  </section>

  <section class="profile" id="profile">
    <div class="container profile_container">
      <div class="plofile_text-box">
        <p class="plofile_text">プロフィール</p>
        <h1 class="plofile_title">Plofile</h1>
      </div>
      <div class="plofile_main-box">
        <figure class="profile_img-box"><img class="profile_img" src="img/faceimg.jpg" alt="中島三希子"></figure>
        <p class="profile_text">大阪出身・宮城在住の27歳。<br>
          本名は中島三希子なのですが、LGBTで女の子の名前が好きではなく、よく海(かい)と呼ばれています。<br>
          2021年3月頃より、独学にてWeb制作を学び始めました。<br>
          現在は日々学習を継続しております。<br>
          個人や店舗からのLP・Webサイト制作依頼も承っております。<br>(WordPressの方は現在学習中です)
          <br>
          お気軽にご相談ください。
        </p>
      </div>
    </div>
  </section>

  <section class="service" id="service">
    <div class="container">
      <p class="service_text">サービス</p>
      <h1 class="service_title">Service</h1>
      <p class="service_description">料金等詳しくはお気軽にお問い合わせください</p>
      <div class="service_coding-title-wrapper">
        <h2 class="service_coding-title">コーディング</h2>
      </div>
      <div class="service_icon-wrapper">
        <div class="service_icon-top">
          <i class="fas fa-desktop"></i>
        </div>
        <div class="service_icon-mid">
          <i class="far fa-file-code"></i>
        </div>
        <div class="service_icon-bottom">
          <div class="service_icon-bottom-container">
            <i class="fas fa-tablet-alt"></i>
            <i class="fas fa-mobile-alt"></i>
          </div>
        </div>
      </div>
      <div class="service_icon-wrapper2">
        <div class="service_bottom-container">
          <p class="service_coding-text">デザインカンプに正確かつ忠実なコーディングを行います。<br><br>
            パソコンからだけでなくスマートフォンなどどのデバイスからも見栄えの良いレスポンシブ対応も可能です。</p>
          <div class="service_htmlAndCss-wrapper">
            <div class="service_htmlAndCss-icon-wrapper">
              <i class="fab fa-html5"></i>
              <i class="fab fa-css3-alt"></i>
            </div>
            <p class="service_htmlAndCss-text">HTML5とCSS3でWebサイトの見た目を整えます。</p>
          </div>
          <div class="service_js-wrapper">
            <i class="fab fa-js-square"></i>
            <p class="service_js-text">JavaScriptやjQueryでハンバーガーメニュー・最上部へ戻るボタンなど、Webサイトに動きをつけます。</p>
          </div>
          <div class="service_sass-wrapper">
            <i class="fab fa-sass"></i>
            <p class="service_sass-text">Sassを使って効率的に、保守しやすいコードを書きます。</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="works" id="works">
    <div class="container">
      <p class="works_text">実績</p>
      <h1 class="works_title">Works</h1>
      <p class="works_description">制作実績を載せております</p>
      <p class="works_basic">Besic認証をかけておりますのでIDとパスワードの入力をお願い致します。<br>
        ID:admin Pass:portfolio</p>
      <div class="works_cardlayout-wrapper">
        <div class="works_card-list-wrapper">
          <div class="works_card-list">
            <a class="works-card-link" href="https://kaiblo.com/portfolio/medium/" rel="noreferrer noopener" target="_blank">
              <figure class="works_card-figure"><img src="img/yourcoding.png" alt="ユアコーディング"></figure>
              <p class="works-card-text">デザインカンプからのコーディング<br>
                サンプル<br>
                (HTML/CSS/jQuery/Sass)
              </p>
            </a>
          </div>
          <div class="works_card-list">
            <a class="works-card-link" href="https://kaiblo.com/portfolio/mediumEx/" rel="noreferrer noopener" target="_blank">
              <figure class="works_card-figure"><img src="img/ishiikadan.png" alt="石井花壇"></figure>
              <p class="works-card-text">デザインカンプからのコーディング<br>
                サンプル<br>
                (HTML/CSS/jQuery/Sass)
              </p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="footer">
    <small>©2021 Kai Portfolio All Rights Reserved.</small>
  </footer>

</body>

</html>
