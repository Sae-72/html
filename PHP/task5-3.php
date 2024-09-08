<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $pencil = ['鉛筆','100円','110円'];
  $eraser = ['消しゴム','200円','220円'];
  $ruler = ['定規','300円','330円'];
  ?>

  <table border="1">
  <tr>
    <th>商品</th>
    <th>価格</th>
    <th>税込価格</th>
  </tr>
  <tr>
    <?php
    foreach($pencil as $pen){
    echo "<td>".$pen."</td>";
    }?>
  </tr>
  <tr>
    <?php
    foreach($eraser as $era){
    echo "<td>".$era."</td>";
  }?>
  </tr>
  <tr>
    <?php
    foreach($ruler as $rul){
    echo "<td>".$rul."</td>";
  }?>
  </tr>
  </table>
</body>
</html>