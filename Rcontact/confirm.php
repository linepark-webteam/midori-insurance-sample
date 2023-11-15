<?php
session_start();

// セッションからデータを取得
$inquiryType = $_SESSION['inquiryType'] ?? '';
$name = $_SESSION['name'] ?? '';
$companyName = $_SESSION['companyName'] ?? '';
$email = $_SESSION['email'] ?? '';
$confirmEmail = $_SESSION['confirmEmail'] ?? '';
$callbackPreference = $_SESSION['callbackPreference'] ?? '';
$inquiry = $_SESSION['inquiry'] ?? '';

// 送信処理
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ここにメール送信などの処理を記述

    // 処理完了後、complete.phpにリダイレクト
    header('Location: complete.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="●●●">
  <meta name="description" content="●●●">
  <link rel="icon" href="../img/favicon.webp" type="image/x-icon">
  <link rel="apple-touch-icon" href="../img/appletouch.png" sizes="180x180">
  <title>お問い合わせ｜株式会社みどり総合保険事務所</title>

  <!-- google fonts Noto Serif JP -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500&display=swap" rel="stylesheet"> -->

  <!-- google fonts Klee One -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS BootStrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../css/my-bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="../css/animation.css">
</head>

<body>
  <!-- プリローダー -->
  <div id="preloader">
    <div class="progress-ring"></div>
    <div class="leaf-loader"></div>
  </div>

  <h1 class="brand d-flex justify-content-center">株式会社みどり総合保険事務所<!-- 名刺の画像等に変更？ --></h1>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="../"><img src="../img/midori-insurance.webp" alt="株式会社みどり総合保険事務所"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../">ホーム</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              会社情報
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../philosophy/">経営理念</a></li>
              <li><a class="dropdown-item" href="../company/">会社概要</a></li>
              <li><a class="dropdown-item" href="../profile/">代表プロフィール</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProducts" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              商品紹介
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownProducts">
              <li><a class="dropdown-item" href="../personal-products/">個人のお客様</a></li>
              <li><a class="dropdown-item" href="../corporation-products/">法人のお客様</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../access/">アクセス</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact/">お問い合わせ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="hero mb-5">
    <div class="image-section position-relative masked">
      <img src="../img/contact1.webp" class="d-block w-100" alt="Image 1">
      <div class="position-absolute top-50 start-50 translate-middle text-white">
        <div class="hero-fixed-text d-flex flex-column align-items-center justify-content-center">
          <h3>Contact</h3>
          <h2>お問い合わせ</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="mb-5 py-5">
    <div class="container">
      <div class="mb-3">
        <div class="mb-5 d-flex flex-column align-items-center">
          <div class="section-header col-lg-4">
            <h2>お問合せ</h2>
            <h6>― Contact ―</h6>
          </div>
        </div>

    <form action="confirm.php" method="post">
        <h3>お問い合わせ項目</h3>
        <p><?php echo htmlspecialchars($inquiryType); ?></p>

        <h3>お名前</h3>
        <p><?php echo htmlspecialchars($name); ?></p>

        <h3>会社名</h3>
        <p><?php echo htmlspecialchars($companyName); ?></p>

        <h3>メールアドレス</h3>
        <p><?php echo htmlspecialchars($email); ?></p>

        <h3>確認用メールアドレス</h3>
        <p><?php echo htmlspecialchars($confirmEmail); ?></p>

        <h3>担当者からの折り返し方法</h3>
        <p><?php echo htmlspecialchars($callbackPreference); ?></p>

        <h3>お問い合わせ内容</h3>
        <p><?php echo nl2br(htmlspecialchars($inquiry)); ?></p>

        <div class="d-flex justify-content-center">
          <a href="index.php" class="btn btn-secondary">修正</a>
            <button type="submit" class="btn btn-primary">送信</button>
        </div>
    </form>

  <!-- TOPに戻るボタン -->
  <a href="#" id="page_top"></a>


  <!-- Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/e7eaec89a2.js" crossorigin="anonymous"></script>
  <!-- Created JS -->
  <script src="../js/app.js"></script>

</body>
</html>