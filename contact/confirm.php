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
    <h2>お問い合わせ内容確認</h2>

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
</body>
</html>
