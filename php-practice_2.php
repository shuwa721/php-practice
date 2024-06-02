<?php
// Q1 tic-tac問題
for($i = 1;$i <= 100;$i ++)
{
  if($i%4 == 0 && $i%5 == 0 )
  {
    echo "tic-tac \n";
  }
  elseif($i%5 == 0)
  {
    echo "tac \n";
  }
  elseif($i%4 == 0)
  {
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

foreach($personalInfos as $key => $value)
{
  $num = $key+1;
  echo $num. "番目の" .$personalInfos[$key]['name']. "のメールアドレスは" .$personalInfos[$key]['mail'].
  "で、電話番号は".$personalInfos[$key]['tel']."です。\n";
}

$ageList = [25, 30, 18];
foreach($personalInfos as $key => $value)
{
  $personalInfos[$key] = $personalInfos[$key]+array("age" => $ageList[$key]);
}

// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
      echo $this->studentName. 'は' .$subject. 'の授業に出席しました。学籍番号：' .$this->studentId. "\n";
    }
}

$stu = new Student(120, '山田');
echo "学籍番号" .$stu->studentId. "番の生徒は" .$stu->studentName. "です。\n";
// Q4 オブジェクト-2
$yamada = new Student(120, '山田');
$yamada->attend('PHP');



// Q5 定義済みクラス
$date = new DateTime();
$date->sub(new DateInterval('P1M'));
echo $date->format("Y-m-d\n");


$date_Before = new DateTime('1992-04-25');
#$Time = new DateTime('1992-04-25');
#$Date = new DateTime('1992-04-25');
echo $date_Before->diff($date)->format('あの日から%a日経過しました。');

?>