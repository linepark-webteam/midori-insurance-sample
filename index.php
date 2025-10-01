<!DOCTYPE html>
<html lang="ja">

<?php require_once __DIR__ . '/config.php'; ?>

<head>

  <?php include BASE_PATH . '/includes/head.php'; ?>

  <meta name="keywords" content="みどり保険, 相模原, 保険, 濱島一志, 神奈川">
  <meta name="description" content="株式会社みどり総合保険事務所 - 神奈川県相模原市中央区に拠点を置き、個人向けから法人向けまで幅広い保険商品を取り扱っています。私たちの使命は、保険を通じてお客様の安心な生活と夢の実現を支援することです。キャッチコピー「人を幸せにできる会社になる」のもと、保険以外の分野でもお客様の良きパートナーとして「みどりに任せてよかった」と思っていただけるようなサービスを提供しています。">
  <meta property="og:title" content="株式会社みどり総合保険事務所">
  <meta property="og:type" content="website">
  <!-- <meta property="og:image" content="画像のURL"> -->
  <meta property="og:url" content="https://midori-hoken.com">
  <meta property="og:description" content="株式会社みどり総合保険事務所へようこそ！神奈川県相模原市で、個人から法人までの幅広い保険ニーズに応え、お客様の安心と夢の実現をサポートします。私たちは、保険を超えた価値を提供し、お客様に「みどりに任せてよかった」と感じていただけるよう努めています。">
  <meta name="twitter:card" content="summary_large_image">
  <!-- <meta name="twitter:site" content="@Twitterアカウント"> -->
  <meta name="twitter:title" content="株式会社みどり総合保険事務所">
  <meta name="twitter:description" content="株式会社みどり総合保険事務所へようこそ！神奈川県相模原市で、個人から法人までの幅広い保険ニーズに応え、お客様の安心と夢の実現をサポートします。私たちは、保険を超えた価値を提供し、お客様に「みどりに任せてよかった」と感じていただけるよう努めています。">
  <!-- <meta name="twitter:image" content="画像のURL"> -->
  <title>みどり総合保険事務所</title>
  <link rel="stylesheet" href="css/animation.css">
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K07XZCD6JK"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-K07XZCD6JK');
</script>

<body>
  <?php include BASE_PATH . '/includes/header.php'; ?>


  <!-- Carousel -->
  <section class="hero mb-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/image1.webp" class="d-block w-100" alt="Image 1">
          <!-- <div class="carousel-caption">
            <h5>First Slide Title</h5>
            <p>First slide description.</p>
          </div> -->
        </div>
        <div class="carousel-item">
          <img src="img/image2.webp" class="d-block w-100" alt="Image 2">
          <!-- <div class="carousel-caption">
            <h5>Second Slide Title</h5>
            <p>Second slide description.</p>
          </div> -->
        </div>
        <div class="carousel-item">
          <img src="img/image3.webp" class="d-block w-100" alt="Image 3">
          <!-- <div class="carousel-caption">
            <h5>Third Slide Title</h5>
            <p>Third slide description.</p>
          </div> -->
        </div>
      </div>
      <div class="carousel-fixed-text position-absolute text-white p-3">
        <p class="h3">常にお客様のリスクを分析し、</p>
        <p class="h2">最小の費用で最大の安心を。</p>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- お知らせ -->
  <section id="campaign" class="pb-5">
    <h2 class="px-2 py-2 col-12 heading">お知らせ</h2>
    <div class="container slide-right-content">
      <div class="row">
        <h4>2025年11月25日（火）</h4>
        <h3>速読セミナー　「読む力、変わる120分」　開催！</h3>
        <div class="d-flex justify-content-center">
          <a class="btn btn-outline-success col-lg-4 mt-5" href="campaign/speed-reading-seminar.php">詳細はこちら！</a>
        </div>
      </div>
    </div>

    <div class="container slide-left-content pt-5">
      <div class="row">
        <h3>高西先生背骨調整治療セミナー　開催！</h3>
        <div class="d-flex justify-content-center">
          <a class="btn btn-outline-success col-lg-4 mt-5" href="campaign/takanishi-seminar.php">詳細はこちら！</a>
        </div>
      </div>
    </div>

  </section>

  <!-- 経営理念 -->
  <section class="py-5">
    <h2 class="px-2 py-2 col-12 heading">経営理念</h2>
    <div class="container policy slide-left-content">
      <div class="row">
        <p class="col-12 h3">誠心誠意をもって、お客様の安心と安全に尽くす</p>
        <div class="d-flex flex-column flex-lg-row justify-content-around">
          <a class="btn btn-outline-success col-12 col-lg-5 mt-5" href="philosophy/">経営理念</a>
          <a class="btn btn-outline-success col-12 col-lg-5 mt-5" href="company/">会社概要</a>
        </div>
      </div>
    </div>
  </section>



  <section class="py-5">
    <!-- <div class="d-flex"> -->
    <h2 class="px-2 py-2 col-12 mb-5 heading">商品のご紹介</h2>
    <div class="personal-products container mb-3">
      <div class="row d-flex">
        <div class="col-lg-6 slide-bottom-content">
          <h2 class="px-2 py-2 col-12 heading">個人のお客様</h2>
          <p>クルマ、住まい、ケガ、さまざまなタイプの商品をラインナップ。充実した補償とサービスであなたの生活をサポートします。</p>
          <a class="btn btn-outline-success col-12 fade-in" href="personal-products/">個人向け商品紹介</a>
        </div>
        <div class="col-lg-6 slide-right-content mb-3">
          <img class="col-12 mt-3" src="img/image1.webp" alt="個人向け商品紹介">
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="corporation-products container">
      <div class="row flex-row-reverse">
        <div class="col-lg-6 slide-right-content">
          <h2 class="px-2 py-2 col-12 heading">法人のお客様</h2>
          <p>ビジネスシーンに応じたさまざまなタイプの商品をラインナップ。充実した補償とサービスで貴社の事業をサポートします。</p>
          <a class="btn btn-outline-success col-12" href="corporation-products/">法人向け商品紹介</a>
        </div>
        <div class="col-lg-6 slide-bottom-content">
          <img class="col-12 mt-3" src="img/image2.webp" alt="法人向け商品紹介">
        </div>
      </div>
    </div>
  </section>

  <!-- access -->
  <section class="py-5">
    <h2 class="px-2 py-2 col-12 heading">アクセス</h2>
    <div class="container row d-flex mx-auto">
      <div class="col-lg-6 slide-left-content">
        <p>〒252-0225</p>
        <p>神奈川県相模原市中央区緑が丘 2-38-39</p>
      </div>
      <div class="col-lg-6 slide-right-content mb-3">
        <iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1099.0478950392073!2d139.383229519868!3d35.54863404304715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018fdeaee360491%3A0x327206c7c53d12c8!2z44CSMjUyLTAyMjUg56We5aWI5bed55yM55u45qih5Y6f5biC5Lit5aSu5Yy657eR44GM5LiY77yS5LiB55uu77yT77yY4oiS77yT77yZIOOBv-OBqeOCiue3j-WQiOS_nemZuuS6i-WLmeaJgA!5e0!3m2!1sja!2sjp!4v1696913287065!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    </div>
  </section>

  <!-- contact -->
  <section class="contact pt-5">
    <div class="d-flex justify-content-center">
      <h2 class="px-2 py-2 col-12 align-center heading">お問い合わせ</h2>
    </div>
    <div class="container-fruid">
      <div class="row">
        <a href="contact/">
          <div class="position-relative masked">
            <img class="col-12 px-0" src="img/contact1.webp" alt="コンタクトフォームへ">
            <div class="position-absolute top-50 start-50 translate-middle text-white">
              <h3 class="display-5">お問い合わせフォームへ</h3>
            </div>
          </div>
        </a>
        <!-- <div class="col-6 position-relative masked">
          <img class="col-12" src="img/image2.webp" alt="メールでのお問い合せ">
          <div class="position-absolute top-50 start-50 translate-middle text-white">
            <h3>メールでのお問い合せ</h3>
          </div>
        </div>
        <div class="col-6 position-relative masked">
          <img class="col-12" src="img/image3.webp" alt="お電話でのお問い合わせ">
          <div class="position-absolute top-50 start-50 translate-middle text-white">
            <h3>お電話でのお問い合せ</h3>
          </div> -->
      </div>
    </div>
  </section>

  <?php include BASE_PATH . '/includes/footer.php'; ?>
</body>

</html>