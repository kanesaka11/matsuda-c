<?php
// データベース接続
$dsn = 'mysql:host=localhost;dbname=piano;charset=utf8';
$user = 'root';      // ← XAMPPの場合は通常 root
$pass = '';          // ← パスワード（XAMPPでは空が多い）

try {
  $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
  die('DB接続失敗: ' . $e->getMessage());
}

// フォームから送信されたデータ
$password = $_POST['password'] ?? '';
$lesson_type = $_POST['lesson_type'] ?? '';

// ユーザー認証
$sql = "SELECT * FROM users WHERE password = ? AND lesson_type = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$password, $lesson_type]);
$user = $stmt->fetch();

if ($user) {
  // ログイン成功
  header('Location: reserve.html');
  exit;
} else {
  // ログイン失敗
  echo 'パスワードまたはレッスン種別が正しくありません。<br>';
  echo '<a href="index.html">戻る</a>';
}
?>
