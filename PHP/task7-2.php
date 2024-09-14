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
    protected $name;
    protected $age;
    protected $sex;
    protected $id;
    protected static $count = 0;

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

  class PartStaff extends Staff{
    private $jikyu;

    public function __construct($name,$age,$sex,$jikyu){
      parent::__construct($name,$age,$sex);
      $this -> jikyu = $jikyu;
    }

    public function number(){
      self::$count++;
      $this -> id = self::$count;
    }

    public function show(){
      printf('(P%04d) %s %d歳 %s 時給:%d円<br>',$this -> id,$this -> name,$this -> age,$this -> sex,$this -> jikyu);
    }

  } 

  $staff[0]=new Staff('佐藤　一郎',31,'男性');
  $staff[1]=new Staff('山田　花子',25,'女性');
  $staff[2]=new Staff('鈴木　次郎',27,'男性');
  $staff[3]=new PartStaff('田中　友子',24,'女性',900);
  $staff[4]=new Staff('中村　三郎',27,'男性');
  foreach($staff as $st){
    $st -> number();
    $st -> show();
  }
  
  ?>
</body>
</html>