<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>

  <?php
  $goods = array(
    'title' => '商品',
    'pen' => '鉛筆',
    'eraser' => '消しゴム'
  );

  $price = array(
    'title' => '価格',
    'pen' => '100円',
    'eraser' => '200円'
  );

  $taxin_pen = 100*1.1;
  $taxin_eraser = 200*1.1;

  $dz_pen = $taxin_pen*12;
  $dz_eraser = $taxin_eraser*12;
  
  ?>
  <table border="1">
    <tr>
      <th><?= $goods['title'];?></th>
      <th><?= $price['title'];?></th>
      <th><?= '税込価格';?></th>
      <th><?= '1Dzの価格';?></th>
    </tr>
    <tr>
      <td><?= $goods['pen'];?></td>
      <td><?= $price['pen'];?></td>
      <td><?= $taxin_pen.'円';?></td>
      <td><?= $dz_pen.'円';?></td>
    </tr>
    <tr>
      <td><?= $goods['eraser'];?></td>
      <td><?= $price['eraser'];?></td>
      <td><?= $taxin_eraser.'円';?></td>
      <td><?= $dz_eraser.'円';?></td>
    </tr>
  </table>
  
</body>
</html>