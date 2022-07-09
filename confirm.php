<?php
//直リンクされた場合index.phpにリダイレクト
if ($_SERVER["REQUEST_METHOD"] != "POST") {
  header("Location: index.php");
  exit();
}

//各項目を内容を取得
$name = $_POST['name'];
$kana = $_POST['kana'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$detail = $_POST['detail'];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="style.css">
  <link href="./css/styles.css" rel="stylesheet">
  <script src="./js/jquery-3.3.1.min.js"></script>
  <script src="https://kit.fontawesome.com/89b6350089.js" crossorigin="anonymous"></script>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WNKH9ZD');
  </script>
  <!-- End Google Tag Manager -->
</head>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNKH9ZD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header class="l-header">
  <div class="l-header__top">
    <h1><a href=""><img src="img/logo.png" alt="" width="488"></a></h1>
    <div class="l-header__btn">
      <ul>
        <li><a href="tel:03-6822-2992"><i class="fas fa-phone-volume"></i><span>電話で相談</span></a></li>
        <li><a href="https://blockchains.support/#contact"><i class="fas fa-envelope"></i><span>メールで相談</span></a></li>
        <li><a href="https://lin.ee/YiDdsAy"><i class="fab fa-line"></i><span>LINEで相談</span></a>
          <p><span>相談無料・24時間365日受付</span></p>
        </li>
      </ul>
    </div>
  </div>
</header>
<main>
  <section class="sec-contact">
    <div class="l-container">
      <div class="sec-contact__inner">
        <h2 class="c-title1">内容を確認してください</h2>
        <p>以下の入力内容に誤りがないかご確認後、送信してください。</p>
        <form action="send_mail.php" method="post" class="c-form">
          <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>">
          <input type="hidden" name="kana" value="<?php echo htmlspecialchars($kana, ENT_QUOTES, "UTF-8"); ?>">
          <input type="hidden" name="mail" value="<?php echo htmlspecialchars($mail, ENT_QUOTES, "UTF-8"); ?>">
          <input type="hidden" name="etel" value="<?php echo htmlspecialchars($email, ENT_QUOTES, "UTF-8"); ?>">
          <input type="hidden" name="detail" value="<?php echo htmlspecialchars($detail, ENT_QUOTES, "UTF-8"); ?>">
          <dl>
            <dt>お名前</dt>
            <dd>
              <p class="c-input--confirm"><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
            </dd>
          </dl>
          <dl>
            <dt>お名前(フリガナ)</dt>
            <dd>
              <p class="c-input--confirm"><?php echo htmlspecialchars($kana, ENT_QUOTES, "UTF-8"); ?> </p>
            </dd>
          </dl>
          <dl>
            <dt>メールアドレス</dt>
            <dd>
              <p class="c-input--confirm"><?php echo $_POST["mail"]; ?> </p>
            </dd>
          </dl>
          <dl>
            <dt>電話番号</dt>
            <dd>
              <p class="c-input--confirm"><?php echo htmlspecialchars($tel, ENT_QUOTES, 'UTF-8'); ?></p>
            </dd>
          </dl>
          <dl>
            <dt>お問い合わせ内容</dt>
            <dd>
              <p class="c-input--confirm"><?php echo htmlspecialchars($detail, ENT_QUOTES, 'UTF-8'); ?></p>
            </dd>
          </dl>
          <input type="hidden" name="token" value="35a29cdf736c47f9b81a8a011647c07b99b20f7e" />
          <div class="input-area">
            <input type='button' onclick='history.back()' value='戻る' class="btn-border">
            <input type="submit" name="submit" value="送信" class="btn-border">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="kana" value="<?php echo $kana; ?>">
            <input type="hidden" name="mail" value="<?php echo $mail; ?>">
            <input type="hidden" name="tel" value="<?php echo $tel; ?>">
            <input type="hidden" name="detail" value="<?php echo $detail; ?>">
          </div>
        </form>
      </div>
    </div>
  </section>
</main>
<footer class="l-footer">
  <div class="l-container">
    <div class="l-footer__inner">
      <div class="l-footer__left">
        <h2>運営会社情報</h2>
        <img src="./img/img-footer.png" alt="">
      </div>
      <div class="l-footer__center">
        <h4>株式会社インテグラル</h4>
        <dl>
          <dt>住所</dt>
          <dd>〒151-0053<br>
            東京都渋谷区代々木1丁目30番14号天翔ANNEXビル地下一階010号室
          </dd>
        </dl>
        <dl>
          <dt>電話番号</dt>
          <dd>03-6822-2992</dd>
        </dl>
        <dl>
          <dt>メールアドレス</dt>
          <dd>kasou.higai@gmail.com</dd>
        </dl>
        <dl>
          <dt>受付時間</dt>
          <dd>24時間365日</dd>
        </dl>
      </div>
      <div class="l-footer__right">
        <span>相談無料・24時間365日受付</span>
        <ul>
          <li><a href="tel:03-6822-2992"><i class="fas fa-phone-volume"></i>電話で相談</a></li>
          <li><a href="https://blockchains.support/#contact"><i class="fas fa-envelope"></i>メールで相談</a></li>
          <li><a href="https://lin.ee/YiDdsAy"><i class="fab fa-line"></i>LINEで相談</a>
          </li>
        </ul>
      </div>
    </div>
    <p class="l-footer__copy">Copyright © 2021 ロマンス詐欺緊急窓口 All Rights Reserved.</p>
  </div>

</footer>
<script src="./js/functions.js"></script>


</body>



</html>