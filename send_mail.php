<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");

$to = $_POST["email"];
$subject = "任意の件名";
$header = "From: kasou.higai@gmail.com";
$header .= "\n";
$header .= "Bcc: kasou.higai@gmail.com";
$message = "お問い合わせありがとうございます。" . "\n" .
  "以下の通りにお問い合わせ内容を受け付けました。" . "\n" . "\n" .
  "お名前｜" . $_POST["name"] . "\n" .
  "ふりがな｜" . $_POST["kana"] . "\n" .
  "メール｜" . $_POST["mail"] . "\n" .
  "電話番号｜" . $_POST["tel"] . "\n" .
  "お問い合わせ内容｜" . $_POST["detail"];

mb_send_mail($to, $subject, $message, $header);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>完了画面</title>
  <style type="text/css">
    body {
      background-color: #f9fff2;
    }
  </style>
  <!-- Global site tag (gtag.js) - Google Ads: 10913097719 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10913097719"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10913097719');
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E5GTGP30X7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E5GTGP30X7');
</script>
</head>

<body>
  <h2>お問い合わせ完了</h2>
  <p>お問い合わせありがとうございました。</p>
  <p>今後とも当サイトをよろしくお願いいたします。</p>
  <p><a href="https://www.kasouhigai.net/suport.site/">お問い合わせトップへ</p>
</body>

</html>