<?php
do {
    echo "お名前を入力してください: ";
    $user_name = trim(fgets(STDIN));

    if (empty($user_name)) {
        echo "名前が空白です。正しい名前を入力してください。\n";
    }
} while (empty($user_name));

echo $user_name . "さん、こんにちは！\n";

// 日時を取得（日本時間）
date_default_timezone_set('Asia/Tokyo');
$timestamp = date('Y-m-d H:i:s');

// ログに記録
$log_entry = $timestamp . " - " . $user_name . "\n";
file_put_contents('name_log.txt', $log_entry, FILE_APPEND);
