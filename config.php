<?php
// config.php（プロジェクト ルート）
define('BASE_PATH', __DIR__); // 物理パス（include 用）

// ルートURLを算出（XAMPPのhtdocs配下でサブディレクトリ運用でもOK）
$docRoot = rtrim(str_replace('\\','/', $_SERVER['DOCUMENT_ROOT']), '/');
$baseUrl = rtrim(str_replace($docRoot, '', str_replace('\\','/', BASE_PATH)), '/') . '/';
