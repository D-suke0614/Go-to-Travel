<?php

  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $comment = htmlspecialchars($_POST['comment']);

  // name
  if ($name == '') {
    $name_result = 'お名前が入力されていません。';
  } else {
    $name_result = 'ようこそ' . $name . '様';
  }
  // email
  if ($email == '') {
    $email_result = 'メールアドレスが入力されていません。';
  } else {
    $email_result = 'メールアドレス：' . $email;
  }
  // comment
  if ($comment == '') {
    $comment_result = 'お問い合わせ内容が入力されていません。';
  } else {
    $comment_result = 'お問い合わせ内容：' . $comment;
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力内容確認</title>
</head>
<body>
  <h1>入力内容確認</h1>
  <p><?php echo $name_result; ?></p>
  <p> <?php echo $email_result; ?> </p>
  <p> <?php echo $comment_result; ?> </p>
  <form method="POST" action="thanks.php">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="comment" value="<?php echo $comment; ?>">

    <input type="button" value="戻る" onclick="history.back()">
    <?php if ($name != '' && $email != '' && $comment != ''): ?>
      <input type="submit" value="OK" >
    <?php endif; ?>
  </form>
</body>
</html>
