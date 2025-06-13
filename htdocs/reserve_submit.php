<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>予約完了</title>
  <style>
    body {
      font-family: "Hiragino Kaku Gothic ProN", Meiryo, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      background-color: #fff;
      border: 2px solid #000;
      padding: 40px 50px;
      width: 500px;
      text-align: center;
      box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
    }
    h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }
    p {
      font-size: 18px;
      margin-bottom: 30px;
    }
    button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #0078D7;
      color: white;
      border: none;
      cursor: pointer;
    }
    button:hover {
      background-color: #005a9e;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>予約が確定しました</h1>
    <p>レッスンの予約が正常に完了しました。</p>
    <button onclick="location.href='index.html'">TOPへ戻る</button>
  </div>
</body>
</html>

