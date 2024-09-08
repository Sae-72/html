<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  const TAX = 10;

  $product1_name = "鉛筆";
  $product1_price = 100;

  $product2_name = "消しゴム";
  $product2_price = 200;

  function tax_in($price){
    return $price + ($price * TAX /100);
  }
  ?>

  <p><?= "現在、消費税は".TAX."%です。"?></p>
  <p><?=$product1_name."が".$product1_price."円で税込".tax_in($product1_price)."円です。"?></p>
  <p><?=$product2_name."が".$product2_price."円で税込".tax_in($product2_price)."円です。"?></p>

</body>
</html>