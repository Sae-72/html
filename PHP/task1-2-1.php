<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
<?php
const TAX = '10%';

$product1_name = "鉛筆";
$product1_price = "100円";
$product1_price_tax = "税込110円";

$product2_name = "消しゴム";
$product2_price = "200円";
$product2_price_tax = "税込220円";
?>

<p><?="現在、消費税は " . TAX . "です。"."<br>";?></p>
<p><?=$product1_name . "が " . $product1_price . "で" . $product1_price_tax . "です。"."<br>";?></p>
<p><?=$product2_name . "が " . $product2_price . "で" . $product2_price_tax . "です。"."<br>";?></p>
</body>
</html>