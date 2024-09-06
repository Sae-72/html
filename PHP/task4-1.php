<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
<?php

$rand = rand(1, 100);
if ($rand <= 5) {
    echo "今日の運勢は大凶です。";

} elseif ($rand <= 20) {
    echo "今日の運勢は凶です。";

} elseif ($rand <= 50) {
    echo "今日の運勢は吉です。";

} elseif ($rand <= 80) {
    echo "今日の運勢は中吉です。";

} else {
    echo "今日の運勢は大吉です。";
}

?>

</body>
</html>