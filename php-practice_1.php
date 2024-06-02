<?php
// Q1 変数と文字列
$name = '藤田浩輝';
echo "私の名前は「". $name ."」です。\n";

// Q2 四則演算
$valueMultiplication = 5*4;
$valDivision=$valueMultiplication/2;
echo $valueMultiplication. "\n";
echo $valDivision. "\n";

// Q3 日付操作
echo "現在時刻は、" .date("Y/m/d H:i:s"). "です。\n";

// Q4 条件分岐-1 if文
$device='Mac';
if($device === 'windows' || $device === 'Mac')
{
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
$preKanto = ['東京', '神奈川', '栃木', '千葉', '埼玉', '群馬', '茨城'];
echo $preKanto[2] . "と" . $preKanto[3] . "関東地方の都道府県です。\n";

// Q7 連想配列-1
$asCityKanto = ['東京' => '新宿', '神奈川' => '横浜市', '千葉' => '千葉市',
  '埼玉' => 'さいたま市', '栃木' => '宇都宮市', '群馬' => '前橋市', '茨城' => '水戸市'];
foreach($asCityKanto as $key => $value)
{
  echo $value . "\n";
}


// Q8 連想配列-2
$preKey = array_keys($asCityKanto, "さいたま市");
if($asCityKanto[$preKey[0]])
{
  echo $preKey[0] ."県の県庁所在地は、" .$asCityKanto[$preKey[0]]. "です。\n";
}

// Q9 連想配列-3
$asCityKanto = ['東京' => '新宿', '神奈川' => '横浜市', '千葉' => '千葉市',
  '埼玉' => 'さいたま市', '栃木' => '宇都宮市', '群馬' => '前橋市', '茨城' => '水戸市',
  '愛知' => '名古屋市', '大阪' => '大阪市'];
$city_Kanto = ['新宿', '横浜市', '宇都宮市', '千葉市', 'さいたま市', '前橋市', '水戸市'];
foreach ($asCityKanto as $key => $value)
{
  if(in_array($key, $preKanto)){
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
function calcTaxInPrice($excludingTax)
{
  $tax = 1.1;
  $tax_Price = $excludingTax*$tax;
  return $tax_Price;
}

  $price = 1000;
  $taxInPrice = calcTaxInPrice($price);
  echo $price . "円の商品の税込価格は" .$taxInPrice. "円です。\n";
// Q12 関数とif文
function distinguishNum($num)
{
  if($num % 2 == 0)
  {
    $disMsg=$num. "は偶数です。\n";
    return $disMsg;
  }
  if($num%2 == 1)
  {
    
    $disMsg = $num. "は奇数です。\n";
    return $disMsg;
  }
}
$odNum=11;
$evNum=24;
$msg=distinguishNum($odNum);
echo $msg;
$msg=distinguishNum($evNum);
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