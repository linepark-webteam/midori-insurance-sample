<?php
session_start();

$errors = [];
$inquiryType = $_SESSION['inquiryType'] ?? '';
$name = $_SESSION['name'] ?? '';
$companyName = $_SESSION['companyName'] ?? '';
$email = $_SESSION['email'] ?? '';
$confirmEmail = $_SESSION['confirmEmail'] ?? '';
$callbackPreference = $_SESSION['callbackPreference'] ?? '';
$inquiry = $_SESSION['inquiry'] ?? '';
$privacyPolicy = $_SESSION['privacyPolicy'] ?? '';

// フォームが送信された場合の処理
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $inquiryType = $_POST['inquiryType'] ?? '';
  $_SESSION['inquiryType'] = $inquiryType;

  $name = $_POST['name'] ?? '';
  $_SESSION['name'] = $name;

  $companyName = $_POST['companyName'] ?? '';
  $_SESSION['companyName'] = $companyName;

  $email = $_POST['email'] ?? '';
  $_SESSION['email'] = $email;

  $confirmEmail = $_POST['confirmEmail'] ?? '';
  $_SESSION['confirmEmail'] = $confirmEmail;

  $callbackPreference = $_POST['callbackPreference'] ?? '';
  $_SESSION['callbackPreference'] = $callbackPreference;

  $inquiry = $_POST['inquiry'] ?? '';
  $_SESSION['inquiry'] = $inquiry;

  // 必須項目の入力・バリデーションチェック
  // お問い合わせ項目
  if (empty($inquiryType)) {
    $errors['inquiryType'] = 'お問い合わせ項目を選択してください。';
  }
  // お名前
  if (empty($name)) {
    $errors['name'] = 'お名前は必須です。';
  } elseif (strlen($name) > 32) {
    $errors['name'] = 'お名前は32文字以内で入力してください。';
  }

  // 会社名
  if (strlen($companyName) > 64) {
    $errors['companyName'] = '会社名は64文字以内で入力してください。';
  }

  // メールアドレス
  if (empty($email)) {
    $errors['email'] = 'メールアドレスは必須です。';
  } elseif (strlen($email) > 64) {
    $errors['email'] = 'メールアドレスは64文字以内で入力してください。';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = '正しいメールアドレスを入力してください。';
  }

  // 確認用メールアドレス
  if ($email !== $confirmEmail) {
    $errors['confirmEmail'] = 'メールアドレスと確認用メールアドレスが一致しません。';
  }

  // お問い合わせ項目
  if (empty($callbackPreference)) {
    $errors['callbackPreference'] = '担当者からの折り返し方法を選択してください。';
  }

  // お問い合わせ内容
  if (empty($inquiry)) {
    $errors['inquiry'] = 'お問い合わせ内容を入力してください。';
  } elseif (strlen($inquiry) > 1000) {
    $errors['inquiry'] = 'お問い合わせ内容は1000文字以内で入力してください。';
  }

  // 個人情報保護方針への同意
  if (isset($_POST['privacyPolicy'])) {
    $_SESSION['privacyPolicy'] = $_POST['privacyPolicy'];
    $privacyPolicy = $_POST['privacyPolicy'];
  } else {
    $_SESSION['privacyPolicy'] = '';
    $privacyPolicy = '';
  }

  // 個人情報保護方針への同意のエラーチェック
  if (empty($privacyPolicy)) {
    $errors['privacyPolicy'] = '個人情報保護方針への同意をお願いいたします。';
  }


  // エラーがなければconfirm.phpへリダイレクト
  if (empty($errors)) {
    header('Location: confirm.php');
    exit;
  }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="みどり総合保険事務所 お問い合わせ">
  <meta name="description" content="お問い合わせ｜株式会社みどり総合保険事務所">
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

  <h1 class="brand d-flex justify-content-center py-1"><img src="../img/logo.webp" alt="株式会社みどり総合保険事務所"></h1>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">株式会社みどり総合保険事務所</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
              <li><a class="dropdown-item" href="../company/staff.html">スタッフ紹介</a></li>
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
        <div class="container row">
          <form action="" method="post">
            <!-- お問合わせ項目 -->
            <div class="form-group col-12 d-lg-flex">
              <label for="inquiryType" class="col-lg-3 mb-2 me-5">お問合わせ項目 <span class="badge text-bg-success">必須</span></label>
              <div class="d-flex flex-column col-lg-8">
                <div class="d-lg-flex col-lg-9">
                  <div class="form-check form-check-block align-items-center col-lg-4">
                    <input class="form-check-input" type="radio" name="inquiryType" id="corporate" value="法人のお客様" <?php echo ($inquiryType === '法人のお客様') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="corporate">法人のお客様</label>
                  </div>
                  <div class="form-check form-check-block align-items-center col-lg-4">
                    <input class="form-check-input" type="radio" name="inquiryType" id="individual" value="個人のお客様" <?php echo ($inquiryType === '個人のお客様') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="individual">個人のお客様</label>
                  </div>
                  <div class="form-check form-check-block align-items-center col-lg-4">
                    <input class="form-check-input" type="radio" name="inquiryType" id="other" value="その他" <?php echo ($inquiryType === 'その他') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="other">その他</label>
                  </div>
                </div>
                <?php if (!empty($errors['inquiryType'])) : ?>
                  <div class="error"><?php echo $errors['inquiryType']; ?></div>
                <?php endif; ?>
              </div>
            </div>

            <!-- お名前 -->
            <div class="form-group d-lg-flex mt-3">
              <label for="name" class="col-lg-3 mb-2 me-5">お名前 <span class="badge text-bg-success">必須</span></label>
              <div class="d-flex flex-column col-lg-8">
                <input type="text" name="name" class="form-control d-block" id="name" placeholder="お名前を入力してください" maxlength="32" value="<?php echo htmlspecialchars($name); ?>">
                <span class="small">（32文字以内）</span>
                <?php if (!empty($errors['name'])) : ?>
                  <div class="error"><?php echo $errors['name']; ?></div>
                <?php endif; ?>
              </div>
            </div>

            <!-- 会社名 -->
            <div class="form-group d-lg-flex mt-3">
              <label for="companyName" class="col-lg-3 mb-2 me-5">会社名 <span class="badge text-bg-secondary">任意</span></label>
              <div class="d-flex flex-column col-lg-8">
                <input type="text" name="companyName" class="form-control d-block" id="companyName" placeholder="会社名を入力してください" maxlength="64" value="<?php echo htmlspecialchars($companyName); ?>">
                <span class="small">（64文字以内）</span>
                <?php if (!empty($errors['companyName'])) : ?>
                  <div class="error"><?php echo $errors['companyName']; ?></div>
                <?php endif; ?>
              </div>
            </div>

            <!-- メールアドレス -->
            <div class="form-group d-lg-flex mt-3">
              <label for="email" class="col-lg-3 mb-2 me-5">メールアドレス <span class="badge text-bg-success">必須</span></label>
              <div class="d-flex flex-column col-lg-8">
                <input type="email" name="email" class="form-control d-block" id="email" placeholder="メールアドレスを入力してください" maxlength="64" value="<?php echo htmlspecialchars($email); ?>">
                <span class="small">（64文字以内）</span>
                <?php if (!empty($errors['email'])) : ?>
                  <div class="error"><?php echo $errors['email']; ?></div>
                <?php endif; ?>
              </div>
            </div>

            <!-- メールアドレス（確認用） -->
            <div class="form-group d-lg-flex mt-3">
              <label for="confirmEmail" class="col-lg-3 mb-2 me-5">メールアドレス（確認用） <span class="badge text-bg-success">必須</span></label>
              <div class="d-flex flex-column col-lg-8">
                <input type="email" name="confirmEmail" class="form-control d-block" id="confirmEmail" placeholder="確認用メールアドレスを入力してください" maxlength="64" value="<?php echo htmlspecialchars($confirmEmail); ?>">
                <span class="small">（上記と同じメールアドレスを入力してください）</span>
                <?php if (!empty($errors['confirmEmail'])) : ?>
                  <div class="error"><?php echo $errors['confirmEmail']; ?></div>
                <?php endif; ?>
              </div>
            </div>

            <!-- 担当者からの折り返し方法 -->
            <div class="form-group d-lg-flex mt-3">
              <label class="col-lg-3 mb-2 me-5">担当者からの折り返し方法 <span class="badge text-bg-success">必須</span></label>
              <div class="d-flex flex-column col-lg-8">
                <div class="col-lg-9">
                  <div class="form-check align-items-center form-check-block">
                    <input class="form-check-input" type="radio" name="callbackPreference" id="contactByEmail" value="メールでの連絡希望" <?php echo ($callbackPreference === 'メールでの連絡希望') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="contactByEmail">メールでの連絡希望</label>
                  </div>
                  <div class="form-check align-items-center form-check-block">
                    <input class="form-check-input" type="radio" name="callbackPreference" id="contactByPhone" value="電話での連絡希望" <?php echo ($callbackPreference === '電話での連絡希望') ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="contactByPhone">電話での連絡希望</label>
                  </div>
                </div>
                <?php if (!empty($errors['callbackPreference'])) : ?>
                  <div class="error"><?php echo $errors['callbackPreference']; ?></div>
                <?php endif; ?>
              </div>
            </div>

            <!-- お問合せ内容 -->
            <div class="form-group d-lg-flex mt-3">
              <label for="inquiry" class="col-lg-3 mb-2 me-5">お問合せ内容 <span class="badge text-bg-success">必須</span></label>
              <div class="d-flex flex-column col-lg-8">
                <textarea name="inquiry" class="form-control" id="inquiry" rows="10" placeholder="お問い合わせ内容を入力してください" maxlength="1000"><?php echo htmlspecialchars($inquiry); ?></textarea>
                <span class="small">（1000文字以内）</span>
                <?php if (!empty($errors['inquiry'])) : ?>
                  <div class="error"><?php echo $errors['inquiry']; ?></div>
                <?php endif; ?>
              </div>
            </div>

            <!-- 「個人情報保護方針」 -->
            <div class="form-group my-5">
              <div class="form-check d-flex justify-content-center">
                <div class="d-flex flex-column align-items-center col-lg-8">
                  <div class="d-flex">
                  <input type="checkbox" name="privacyPolicy" class="form-check-input" id="privacyPolicy" value="accepted" <?php echo (!empty($privacyPolicy) ? 'checked' : ''); ?>>
                <label class="form-check-label" for="privacyPolicy">「<a href="../privacy-policy/">個人情報保護方針</a>」に同意の上、チェックを入れて送信してください。</label>
                </div>
                <?php if (!empty($errors['privacyPolicy'])) : ?>
                  <div class="error"><?php echo $errors['privacyPolicy']; ?></div>
                <?php endif; ?>
              </div>
              </div>
            </div>

            <!-- 送信ボタン -->
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-outline-success col-4">確認ページへ</button>
            </div>
          </form>

        </div>
        </div>
        </div>
  </section>


  <footer class="container-fluid d-flex justify-content-center mt-5 py-3">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-4">
          <img src="../img/logo.webp" alt="logo" class="col-12 py-3">
    </div>
    </div>
    <div class="row d-flex justify-content-around">
      <div class="col-lg-4 align-content-center">
        <p class="content-text">株式会社みどり総合保険事務所</p>
        <p class="content-text">
          〒252-0225<br>
          神奈川県相模原市中央区<br>
          緑が丘2丁目38-39<br>
        </p>
        <p class="content-text">TEL: <a href="tel:042-769-7735">042-769-7735</a><br>FAX: 042-769-7734<br>MOBILE: <a
            href="tel:090-7425-1653">090-7425-1653</a><br>MAIL: <a
            href="mailto:177mmidori@nifty.com">177mmidori@nifty.com</a></p>
      </div>
      <div class="col-lg-4">
        <p class="content-text"><a href="../philosophy/">経営理念</a></p>
        <p class="content-text"><a href="../company/">会社概要</a></p>
        <p class="content-text"><a href="../profile/">代表プロフィール</a></p>
        <p class="content-text"><a href="../company/staff.html">スタッフ紹介</a></p>
        <p class="content-text"><a href="../personal-products/">個人のお客様</a></p>
        <p class="content-text"><a href="../corporation-products/">法人のお客様</a></p>
        <p class="content-text"><a href="../access/">アクセス</a></p>
      </div>
      <div class="col-lg-4">
        <p class="content-text"><a href="../contact/">お問い合わせ</a></p>
        <p class="content-text"><a href="../privacy-policy/">個人情報保護方針</a></p>
      </div>
    </div>
    </div>
  </footer>
  <div class="copyright container-fluid row justify-content-center align-content-center">
    Copyright © 株式会社みどり総合保険事務所 All Rights Reserved.
  </div>

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