<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>予約削除</title>
  <style>
    body {
      font-family: "Hiragino Kaku Gothic ProN", Meiryo, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background-color: #fff;
      border: 2px solid #000;
      padding: 30px 40px;
      width: 400px;
      box-shadow: 2px 2px 10px #ccc;
      text-align: center;
    }
    h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-top: 20px;
      text-align: left;
    }
    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
    }
    .btn-row {
      display: flex;
      justify-content: space-between;
    }
    button {
      padding: 10px 20px;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>予約削除</h1>
    <form action="delete_submit.php" method="POST">
      <label for="date">レッスン日</label>
      <input type="text" id="date" name="date" placeholder="例：2025-06-21" required>

      <label for="time">時間帯</label>
      <input type="text" id="time" name="time" placeholder="例：10:00〜" required>

      <div class="btn-row">
        <button type="submit">削除</button>
        <button type="button" onclick="location.href='index.html'">戻る</button>
      </div>
    </form>
  </div>
</body>
</html>
