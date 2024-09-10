<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  function showString($str,$num){
    for ($i=1; $i<=$num; $i++){
      echo $str."<br>";
    }
  }

  showString("気合いだ！",3);
  ?>
</body>
</html>