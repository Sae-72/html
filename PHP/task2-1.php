<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>

  <?php
  $a = array('日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日');
  ?>

  <ul>
    <li><?= $a[0]?></li>
    <li><?= $a[1]?></li>
    <li><?= $a[2]?></li>
    <li><?= $a[3]?></li>
    <li><?= $a[4]?></li>
    <li><?= $a[5]?></li>
    <li><?= $a[6]?></li>
  </ul>
</body>
</html>