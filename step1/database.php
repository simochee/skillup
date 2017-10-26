<?php

// データベースに接続
$mysqli = new mysqli('localhost', 'root', 'root', 'datas');

// データベースに接続できなかったらエラーを表示
if ($mysqli->connect_error) {
  echo '接続失敗';
} else {
  echo '接続成功';
}

$mysqli->set_charset('utf8');

$name = 'tamura';
$age = 20;
$message = 'hello!';

// データを挿入する
// $stmt = $mysqli->prepare("INSERT INTO datas (name, age, message) VALUES (?, ?, ?)");
// $stmt->bind_param('sis', $name, $age, $message);
// $stmt->execute();

// データ取得する
$result = $mysqli->query("SELECT * FROM datas ORDER BY created DESC");

if ($result) {
  while($row = $result->fetch_object()) {
    $name = htmlspecialchars($row->name);
    $age = htmlspecialchars($row->age);
    $message = htmlspecialchars($row->message);
    echo "<p>$name($age): $message<p>";
  }
}