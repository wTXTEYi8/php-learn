<?php
do {
    echo "お名前を入力してください: ";
    $user_name = trim(fgets(STDIN));

    if (empty($user_name)) {
        echo "名前が空白です。正しい名前を入力してください。\n";
    }
} while (empty($user_name));

echo $user_name . "さん、こんにちは！\n";

$timestamp = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
$log = $timestamp->format('Y-m-d H:i:s') . " - " . $user_name . "\n";
file_put_contents('log.txt', $log, FILE_APPEND);
