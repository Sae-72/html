<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  class Staff{
    private $name;
    private $age;
    private $sex;
    private $id;
    private static $count = 0;

    public function __construct($name,$age,$sex){
      $this -> name = $name;
      $this -> age = $age;
      $this -> sex = $sex;
    }

    public function number(){
      self::$count++;
      $this -> id = self::$count;
    }

    public function show(){
      printf('(S%04d) %s %d歳 %s<br>',$this -> id,$this -> name,$this -> age,$this -> sex);
    }
  }

  $staff[0]=new Staff('佐藤　一郎',31,'男性');
  $staff[1]=new Staff('山田　花子',25,'女性');
  $staff[2]=new Staff('鈴木　次郎',27,'男性');
  foreach($staff as $st){
    $st -> number();
    $st -> show();
  }
  
  ?>
</body>
</html>