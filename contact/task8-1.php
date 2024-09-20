<?php
if (empty($_POST['name'])){
  $error[] = "名前を入力してください。";
} else {
  $name = $_POST['name'];
}
if (empty($_POST['furigana'])){
  $error[] = "フリガナを入力してください。";
} else {
  $furigana = $_POST['furigana'];
}
if (empty($_POST['email'])){
  $error[] = "アドレスを入力してください。";
} else {
  $email = $_POST['email'];
}
if (empty($_POST['phone'])){
  $error[] = "電話番号を入力してください。";
} else {
  $phone = $_POST['phone'];
}
if (empty($_POST['select'])){
  $error[] = "選択してください。";
} else {
  $select = $_POST['select'];
}
if (empty($_POST['message'])){
  $error[] = "内容をを入力してください。";
} else {
  $message = $_POST['message'];
}
if (empty($_POST['check'])){
  $error[] = "個人情報保護方針に同意してください。";
} else {
  $check = $_POST['check'];
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Contactページ</title>
</head>
<body>
  <header>
    <h1>ここには会社名が入ります</h1>
    <ul class="header_btn">
      <li>
        <a href="#" class="btn_01">ボタン01</a>
      </li>
      <li>
        <a href="#" class="btn_02">ボタン02</a>
      </li>
    </ul>
  </header>
  <div class="menu">
    <a href="#" class="menu_01">メニュー01</a>
    <a href="#" class="menu_02">メニュー02</a>
    <a href="#" class="menu_03">メニュー03</a>
  </div>
    <img src="img/mv.png" alt="">
    <section class="contact-form">
      <div class="contact-form_top">
        <h2>お問い合わせ</h2>
        <p>お問い合わせや業務内容に関するご質問は、電話またはこちらのお問い合わせフォームより承っております。</p><span><p>後ほど担当者よりご連絡させていただきます。</p><br>
        <p><?php if (!empty($error)): ?>
        <ul class="error-messages" style="color: red;text-align: center;">
            <?php foreach ($error as $err): ?>
                <li><?= $err ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?></p></span>
        </div>
        <form action="task8-1.php" method="POST">
          <div class="form-group">
              <label for="name">お名前 <span class="required">必須</span></label>
              <input type="text" id="name" name="name" placeholder="山田太郎" value = "<?= $name ?>">
          </div>
          <div class="form-group">
              <label for="furigana">フリガナ <span class="required">必須</span></label>
              <input type="text" id="furigana" name="furigana" placeholder="ヤマダタロウ" value = "<?= $furigana ?>">
          </div>
          <div class="form-group">
              <label for="email">メールアドレス <span class="required">必須</span></label>
              <input type="email" id="email" name="email" placeholder="info@fast-creademy.jp" value = "<?= $email ?>">
          </div>
          <div class="form-group">
              <label for="phone">電話番号 <span class="required">必須</span></label>
              <input type="tel" id="phone" name="phone" placeholder="090-1234-5678" value = "<?= $phone ?>">
          </div>
          <div class="form-group">
              <label for="inquiry">お問い合わせ項目 <span class="required">必須</span></label>
              <select id="inquiry" name="inquiry">
                  <option value="" <?= empty($select) ?>>選択してください</option>
                  <option value="質問">質問</option>
                  <option value="要望">要望</option>
                  <option value="その他">その他</option>
              </select>
          </div>
          <div class="form-group">
              <label for="message">お問い合わせ内容<span class="required">必須</span></label>
              <textarea id="message" name="message" placeholder="こちらにお問い合わせ内容をご記入ください" rows="5"><?= $message ?></textarea>
          </div>
          <div class="form-group_01">
              <label for="privacy">個人情報保護方針 <span class="required">必須</span></label>
              <div class="check_privacy">
                <input type="checkbox" id="privacy" name="privacy" value="1" <?= empty($check) ?>><a href="#">個人情報保護方針</a><i class="fa-solid fa-window-restore"></i>に同意します。
              </div>
          </div>
          <button type="submit">確認</button>
      </form>
    </section>
    <section class="sec_05">
      <div class="sec_05_content">
        <div class="sec_05_left">
          <h2>こちらからご購入ください</h2>
          <a href="#" class="btn_n">ネットショップ</a>
        </div>
       <div class="sec_05_right">
        <h2>お気軽にお問い合わせください</h2>
        <a href="#" class="btn_o">お問い合せ</a>
       </div>
      </div>
    </section>
    <footer>
      <div class="foot_01">
        <h4>ここには会社名が入ります</h4>
        <p>住所が入ります</p>
        <p>03-1234-5678</p>
        <p>営業時間：9：00～18：00</p>
      </div>
      <ul class="foot_02">
        <li> <a href="#">リンク01</a></li>
        <li> <a href="#">リンク02</a></li>
        <li> <a href="#">リンク03</a></li>
        <li> <a href="#">リンク04</a></li>
        <li> <a href="#">リンク05</a></li>
        <div>
          <li> <a href="#">リンク06</a></li>
          <li> <a href="#">リンク07</a></li>        
        </div>
      </ul>
      <div class="foot_03">
        <p>ここには会社名が入ります©Copyright</p>
      </div>
    </footer>
</body>
</html>