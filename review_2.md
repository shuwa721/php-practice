## Q1
* for($i=1;$i<=100;$i++){
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

## Q2
**問1**
* $personalInfos = [
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
* echo $personalInfos[1]['name']."の電話番号は".$personalInfos[1]['tel']."です。\n";

**問2**
* foreach($personalInfos as $key=>$value){
    $num=$key+1;
    echo $num. "番目の" .$personalInfos[$key]['name']. "のメールアドレスは" .$personalInfos[$key]['mail'].
    "で、電話番号は".$personalInfos[$key]['tel']."です。\n";
  }
**問3**
* $ageList = [25, 30, 18];
* foreach($personalInfos as $key=>$value){
    $personalInfos[$key]=$personalInfos[$key]+array("age"=>$ageList[$key]);
    
  }
* var_dump($personalInfos);
## Q3
* class Student
  {
      public $studentId;
      public $studentName;
  
      public function __construct($id, $name)
      {
          $this->studentId = $id;
          $this->studentName = $name;
      }
  
      public function attend()
      {
          echo '授業に出席しました。';
      }
  }
* $stu=new Student(120,'山田');
* echo "学籍番号" .$stu->studentId. "番の生徒は" .$stu->studentName. "です。\n";

## Q4
* class Student
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
        $this->studentsubject=$subject;
        echo $this->studentName. 'は' .$this->studentsubject. 'の授業に出席しました。学籍番号：' .$this->studentId. "\n";
      }
  }
* $yamada->attend('PHP');

## Q5
**問1**
* $date=new DateTime();
* $date->sub(new DateInterval('P1M'));
* echo $date->format("Y-m-d\n");

**問2**
* $time = new DateTime('1992-04-25');
* $diff = $date->diff($time);
* echo $diff->format('あの日から%a日経過しました。');


