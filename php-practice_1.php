<?php
// Q1 変数と文字列
$Name='藤田浩輝';
echo "私の名前は「". $Name ."」です。\n";

// Q2 四則演算
$Q2_Val_Mul=5*4;
$Q2_Val__Div=$Q2_Val_Mul/2;
echo $Q2_Val_Mul. "\n";
echo $Q2_Val__Div. "\n";

// Q3 日付操作
echo "現在時刻は、" .date("Y/m/d H:i:s"). "です。\n";

// Q4 条件分岐-1 if文
$Device='Mac';
if($Device==='windows' || $Device==='Mac'){
  if ($Device==='windows'){
    echo "使用OSは、" .$Device. "です。\n";
  }
  else{
    echo "使用OSは、" .$Device. "です。\n";
  }
}
else{
  echo "どちらでもありません。\n";
}

// Q5 条件分岐-2 三項演算子
$Age=18;

if($Msg = $Age<18 ? '未成年です。' :  '成人です。'){
    echo $Msg . "\n";
}


// Q6 配列
$Pre_Kanto=['東京','神奈川','栃木','千葉','埼玉','群馬','茨城'];
echo $Pre_Kanto[2] . "と" . $Pre_Kanto[3] . "関東地方の都道府県です。\n";

// Q7 連想配列-1
$As_City_Kanto=['東京'=>'新宿','神奈川'=>'横浜市','千葉'=>'千葉市',
  '埼玉'=>'さいたま市','栃木'=>'宇都宮市','群馬'=>'前橋市','茨城'=>'水戸市',];
foreach($As_City_Kanto as $Key=>$Value){
    echo $As_City_Kanto[$Key] . "\n";
  }


// Q8 連想配列-2
$Pre_Key=array_keys($As_City_Kanto,"さいたま市");
if($As_City_Kanto[$Pre_Key[0]]){
  echo $Pre_Key[0] ."県の県庁所在地は、"  .$As_City_Kanto[$Pre_Key[0]]. "です。\n";
}

// Q9 連想配列-3
$As_City_Kanto=['東京'=>'新宿','神奈川'=>'横浜市','千葉'=>'千葉市',
  '埼玉'=>'さいたま市','栃木'=>'宇都宮市','群馬'=>'前橋市','茨城'=>'水戸市',
  '愛知'=>'名古屋市','大阪'=>'大阪市'];
$City_Kanto=['新宿','横浜市','宇都宮市','千葉市','さいたま市','前橋市','水戸市'];
foreach ($As_City_Kanto as $Key => $Value) {
    if(in_array($Key,$Pre_Kanto)){
      echo "${Key}の県庁所在地は${Value}です。\n";
    }else{
      echo "${Key}は関東地方ではありません。\n";
    }
  }

// Q10 関数-1

function hello($Name){
  echo  $Name. "さん、こんにちは。\n";
}
$Name='金谷';
hello($Name);
$Name='安藤';
hello($Name);
// Q11 関数-2
function calcTaxInPrice($Price){
    $Tax=1.1;
    $Tax_Price=$Price*$Tax;
    return $Tax_Price;
  }
  $Mer=1000;
  $taxInPrice=calcTaxInPrice($Mer);
  echo $Mer . "円の商品の税込価格は" .$taxInPrice. "円です。\n";
// Q12 関数とif文
function distinguishNum($Num){
  if($Num%2==0){
    $Dis_Msg=$Num. "は偶数です。\n";
    return $Dis_Msg;
  }
  if($Num%2==1){
    
    $Dis_Msg=$Num. "は奇数です。\n";
    return $Dis_Msg;
  }
}
$Od_Num=11;
$Ev_Num=24;
$Msg=distinguishNum($Od_Num);
echo $Msg;
$Msg=distinguishNum($Ev_Num);
echo $Msg;
// Q13 関数とswitch文
$Device='Mac';
$Point=['A','B','C','D'];
evaluateGrade($Point[0]);
evaluateGrade($Device);
function evaluateGrade($gr){
    switch($gr){
      case 'A':
      case 'B':
        echo "合格です。\n";
        break;
      case 'C':
        echo "合格ですが追加課題があります。\n";
        break;
      case 'C':
        echo "不合格です。\n";
        break;
      default :
        echo "判定不明です。講師に問い合わせてください。\n";
        break;
    }
  }

?>