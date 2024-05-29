<?php
// Q1 変数と文字列
$name = '藤田浩輝';
echo "私の名前は「". $name ."」です。\n";

// Q2 四則演算
$val_Mul = 5*4;
$val__Div=$val_Mul/2;
echo $val_Mul. "\n";
echo $val__Div. "\n";

// Q3 日付操作
echo "現在時刻は、" .date("Y/m/d H:i:s"). "です。\n";

// Q4 条件分岐-1 if文
$device='Mac';
if($device === 'windows')
{
  echo "使用OSは、" .$device. "です。\n";
}
if($device === 'Mac'){
    echo "使用OSは、" .$device. "です。\n";
}
else{
  echo "どちらでもありません。\n";
}

// Q5 条件分岐-2 三項演算子
$age = 17;

$msg = $age < 18 ? '未成年です。' : '成人です。';
echo $msg . "\n";


// Q6 配列
$pre_Kanto = ['東京', '神奈川', '栃木', '千葉', '埼玉', '群馬', '茨城'];
echo $pre_Kanto[2] . "と" . $pre_Kanto[3] . "関東地方の都道府県です。\n";

// Q7 連想配列-1
$as_City_Kanto = ['東京' => '新宿', '神奈川' => '横浜市', '千葉' => '千葉市',
  '埼玉' => 'さいたま市', '栃木' => '宇都宮市', '群馬' => '前橋市', '茨城' => '水戸市'];
foreach($as_City_Kanto as $key => $value)
{
  echo $as_City_Kanto[$key] . "\n";
}


// Q8 連想配列-2
$pre_Key = array_keys($as_City_Kanto, "さいたま市");
if($as_City_Kanto[$pre_Key[0]])
{
  echo $pre_Key[0] ."県の県庁所在地は、" .$as_City_Kanto[$pre_Key[0]]. "です。\n";
}

// Q9 連想配列-3
$as_City_Kanto = ['東京' => '新宿', '神奈川' => '横浜市', '千葉' => '千葉市',
  '埼玉' => 'さいたま市', '栃木' => '宇都宮市', '群馬' => '前橋市', '茨城' => '水戸市',
  '愛知' => '名古屋市', '大阪' => '大阪市'];
$city_Kanto = ['新宿', '横浜市', '宇都宮市', '千葉市', 'さいたま市', '前橋市', '水戸市'];
foreach ($as_City_Kanto as $key => $value)
{
  if(in_array($key, $pre_Kanto)){
    echo "${key}の県庁所在地は${value}です。\n";
  }
  else{
    echo "${key}は関東地方ではありません。\n";
  }
}

// Q10 関数-1

function hello($name)
{
  echo  $name. "さん、こんにちは。\n";
}
$name = '金谷';
hello($name);
$name = '安藤';
hello($name);
// Q11 関数-2
function calcTaxInPrice($price)
{
  $tax = 1.1;
  $tax_Price = $price*$tax;
  return $tax_Price;
}
  $excludingTax = 1000;
  $taxInPrice = calcTaxInPrice($excludingTax);
  echo $excludingTax . "円の商品の税込価格は" .$taxInPrice. "円です。\n";
// Q12 関数とif文
function distinguishNum($num)
{
  if($num % 2 == 0)
  {
    $dis_Msg=$num. "は偶数です。\n";
    return $dis_Msg;
  }
  if($num%2 == 1)
  {
    
    $dis_Msg = $num. "は奇数です。\n";
    return $dis_Msg;
  }
}
$od_Num=11;
$ev_Num=24;
$msg=distinguishNum($od_Num);
echo $msg;
$msg=distinguishNum($ev_Num);
echo $msg;
// Q13 関数とswitch文
function evaluateGrade($gr)
{
  switch($gr){
    case 'A':
    case 'B':
      $result = "合格です。\n";
      break;
    case 'C':
      $result = "合格ですが追加課題があります。\n";
      break;
    case 'C':
      $result = "不合格です。\n";
      break;
    default :
      $result = "判定不明です。講師に問い合わせてください。\n";
      break;
  }
  return $result;
}
$device='Mac';
$point=['A','B','C','D'];
$msg=evaluateGrade($point[0]);
echo $msg;
$msg=evaluateGrade($device);
echo $msg;


?>