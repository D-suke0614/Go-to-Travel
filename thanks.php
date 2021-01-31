<?php
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $comment = htmlspecialchars($_POST['comment']);

    // データベース接続
    $dsn = 'mysql:dbname=go_to_travel;host=localhost';
    $user = 'root';
    $password='';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');

    // SQL実行
    $sql = 'INSERT INTO `contact`(`name`, `email`, `comment`) VALUES ("'. $name.'", "'.$email.'", "'.$comment.'")';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    // 切断
    $dbh = null;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>送信完了</title>
  <link rel="stylesheet" href="./assets/css/thanks.css">
</head>
<body>
  <div class="thanks">
    <h1>お問い合わせありがとうございます！</h1>
    <div class="concents">
      <h3>入力内容</h3>
      <p>お名前 : <?php echo $name; ?></p>
      <p>メールアドレス : <?php echo $email; ?></p>
      <p>お問い合わせ内容 : <?php echo $comment; ?></p>
    </div>
    <div>
    <a class="to-top-page" href="./index.php">トップページに戻る</a>
    </div>
  </div>
</body>
</html>
