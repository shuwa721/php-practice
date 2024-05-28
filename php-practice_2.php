<?php
// Q1 tic-tac問題
for($i=1;$i<=100;$i++){
  if($i%4==0 && $i%5==0){
    echo "tic-tac \n";
  }
  elseif($i%5==0){
    echo "tac \n";
  }
  elseif($i%4==0){
    echo "tic\n";
    
  }
  else{
    echo $i . "\n";
  }
}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
echo $personalInfos[1]['name']."の電話番号は".$personalInfos[1]['tel']."です。\n";

foreach($personalInfos as $Key=>$Value){
  $Num=$Key+1;
  echo $Num. "番目の" .$personalInfos[$Key]['name']. "のメールアドレスは" .$personalInfos[$Key]['mail'].
  "で、電話番号は".$personalInfos[$Key]['tel']."です。\n";
}

$AgeList = [25, 30, 18];
foreach($personalInfos as $Key=>$Value){
  $personalInfos[$Key]=$personalInfos[$Key]+array("age"=>$AgeList[$Key]);
    
}

// Q3 オブジェクト-1

$Stu=new Student(120,'山田');
echo "学籍番号" .$Stu->studentId. "番の生徒は" .$Stu->studentName. "です。\n";
// Q4 オブジェクト-2
$yamada= new Student(120, '山田');
$yamada->attend('PHP');

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($Subject)
    {
      echo $this->studentName. 'は' .$Subject. 'の授業に出席しました。学籍番号：' .$this->studentId. "\n";
    }
}

// Q5 定義済みクラス
$Date=new DateTime();
$Date->sub(new DateInterval('P1M'));
echo $Date->format("Y-m-d\n");


$Time = new DateTime('1992-04-25');
$Diff = $Date->diff($Time);
echo $Diff->format('あの日から%a日経過しました。');
?>