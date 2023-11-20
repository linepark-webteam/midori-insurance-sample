<?php
session_start();

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer//src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer//src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// セッションデータの確認
if (empty($_SESSION['name']) || empty($_SESSION['email'])) {
    header('Location: ../contact/');
    exit;
}

// セッションからデータを取得
$inquiryType = $_SESSION['inquiryType'] ?? '';
$name = $_SESSION['name'] ?? '';
$companyName = $_SESSION['companyName'] ?? '';
$email = $_SESSION['email'] ?? '';
$callbackPreference = $_SESSION['callbackPreference'] ?? '';
$inquiry = $_SESSION['inquiry'] ?? '';

// PHPMailerを使用してメールを送信
$mail = new PHPMailer(true);

try {
    // 問い合わせ者に送るメール
    $mail->setFrom('info@example.com', '株式会社みどり総合保険事務所');
    $mail->addAddress($email, $name);
    $mail->isHTML(true);
    $mail->Subject = 'お問い合わせありがとうございます';
    $mail->Body = "お問い合わせ内容を受け付けました。<br>内容: $inquiry";
    $mail->send();

    // 指定したアドレスに送るメール
    $mail->clearAddresses();
    $mail->addAddress('ko.nagai.0801@gmail.com', '管理者');
    $mail->Subject = '新しいお問い合わせがあります';
    $mail->Body = "新しいお問い合わせがあります。<br>内容: $inquiry";
    $mail->send();

    // セッションの破棄
    session_unset();
    session_destroy();

    // 完了ページやメッセージにリダイレクト
    header('Location: thanks.php'); // thank_you.phpは適宜作成してください
    exit;
} catch (Exception $e) {
    echo "メッセージは送信できませんでした。Mailer Error: {$mail->ErrorInfo}";
}
?>