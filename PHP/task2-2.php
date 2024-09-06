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
    'eraser' => '消しゴム',
    'ruler' => '定規'
  );

  $price = array(
    'title' => '価格',
    'pen' => '100円',
    'eraser' => '200円',
    'ruler' => '300円'
  );

  $taxin = array(
    'title' => '税込価格',
    'pen' => '110円',
    'eraser' => '220円',
    'ruler' => '330円'
  );
  ?>
  <table border="1">
    <tr>
      <th><?= $goods['title'];?></th>
      <th><?= $price['title'];?></th>
      <th><?= $taxin['title'];?></th>
    </tr>
    <tr>
      <td><?= $goods['pen'];?></td>
      <td><?= $price['pen'];?></td>
      <td><?= $taxin['pen'];?></td>
    </tr>
    <tr>
      <td><?= $goods['eraser'];?></td>
      <td><?= $price['eraser'];?></td>
      <td><?= $taxin['eraser'];?></td>
    </tr>
    <tr>
      <td><?= $goods['ruler'];?></td>
      <td><?= $price['ruler'];?></td>
      <td><?= $taxin['ruler'];?></td>
    </tr>
  </table>
  
</body>
</html>