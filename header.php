<!DOCTYPE html>
<html lang="<?php language_attributes(  ); ?>">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>RaiseTech</title>
  <?php wp_head(  ); ?>
</head>
<body>
  <header>
      <div class="left">
        <div class="header-logo">
          <a href="<?php echo esc_url( home_url('/') ); ?>">
            <img src="<?php echo esc_url( get_template_directory_uri(). '/img/header-logo.svg' ); ?>" alt="RaiseTech">
            <p>最速で<span>「稼げる」</span>プロになる<br>エンジニアリングスクール</p>
          </a>
        </div>
      </div>

      <div class="right">
        <ul class="nav">
          <li class="drop-btn down1">
            <a href="#">はじめての方へ</a>
            <ul class="submenu submenu1">
              <li><a href="#">マンガでわかるRaiseTech</a></li>
              <li><a href="#">サポート体制とトライアル授業</a></li>
              <li><a href="#">就職・転職支援制度</a></li>
              <li><a href="#">ご利用の流れ</a></li>
            </ul>
          </li>

          <li class="drop-btn down2"><a>コース案内</a>
            <ul class="submenu submenu2">
              <li><a href="#">マーケティングコース</a></li>
              <li><a href="#">デザインコース</a></li>
              <li><a href="#">WordPress副業コース</a></li>
              <li><a href="#">AWSフルコース</a></li>
              <li><a href="#">AWS自動化コース</a></li>
              <li><a href="#">Javaフルコース</a></li>
              <li><a href="#">Javaフレームワークコース</a></li>
            </ul>
          </li>

          <li class="nondrop"><a href="#">講師紹介</a></li>
          <li class="drop-btn down3"><a href="#">卒業生の声・実績</a>
            <ul class="submenu submenu3">
              <li><a href="#">卒業生の声</a></li>
              <li><a href="#">転職案件実績</a></li>
            </ul>
          </li>

          <li class="drop-btn down4"><a>メディア</a>
            <ul class="submenu submenu4">
              <li><a href="#">動画一覧</a></li>
              <li><a href="#">掲載記事一覧</a></li>
            </ul>
          </li>

          <li class="drop-btn down5"><a>サポート</a>
            <ul class="submenu submenu5">
              <li><a href="#">よくあるご質問</a></li>
              <li><a href="#">お問い合わせ</a></li>
            </ul>
          </li>

          <li class="last-btn"><a href="#">受講お申し込み</a></li>
        </ul>
      </div>

      <!-- ハンバーガー -->
      <div class="ham-btn">
        <span class="ham-btn__line"></span>
        <span class="ham-btn__line"></span>
        <span class="ham-btn__line"></span>
      </div>

      <ul class="h-nav">
        <li class="h-menu h-menu__down1 close">
          <a href="#">はじめての方へ</a>
          <ul class="h-submenu h-submenu__1">
            <li><a href="#">マンガでわかるRaiseTech</a></li>
            <li><a href="#">サポート体制とトライアル受講</a></li>
            <li><a href="#">就職・転職支援制度</a></li>
            <li><a href="#">ご利用の流れ</a></li>
          </ul>
        </li>

        <li class="h-menu h-menu__down2 close">
          <a>コース案内</a>
          <ul class="h-submenu h-submenu__2">
            <li><a href="#">マーケティングコース</a></li>
            <li><a href="#">デザインコース</a></li>
            <li><a href="#">WordPress副業コース</a></li>
            <li><a href="#">AWSフルコース</a></li>
            <li><a href="#">AWS自動化コース</a></li>
            <li><a href="#">Javaフルコース</a></li>
            <li><a href="#">Javaフレームワークコース</a></li>
          </ul>
        </li>

        <li class="h-singlemenu"><a href="#">講師紹介</a></li>

        <li class="h-menu h-menu__down3 close">
          <a href="#">卒業生の声・実績</a>
          <ul class="h-submenu h-submenu__3">
            <li><a href="#">卒業生の声</a></li>
            <li><a href="#">転職案件実績</a></li>
          </ul>
        </li>

        <li class="h-menu h-menu__down4 close">
          <a>メディア</a>
          <ul class="h-submenu h-submenu__4">
            <li><a href="#">動画一覧</a></li>
            <li><a href="#">掲載記事一覧</a></li>
          </ul>
        </li>

        <li class="h-menu h-menu__down5 close">
          <a>サポート</a>
          <ul class="h-submenu h-submenu__5">
            <li><a href="#">よくあるご質問</a></li>
            <li><a href="#">お問い合わせ</a></li>
          </ul>
        </li>
      </ul>

    </header>
