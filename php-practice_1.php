<?php
  $name='藤田浩輝';
  $q2_val_mul=5*4;
  $q2_val__div=$q2_val_mul/2;
  $device='Mac';
  $age=20;
  $pre_key=4;
  $pre_kanto=['東京','神奈川','栃木','千葉','埼玉','群馬','茨城'];
  $city_kanto=['新宿','横浜市','宇都宮市','千葉市','さいたま市','前橋市','水戸市'];
  $as_city_kanto=['東京'=>'新宿','神奈川'=>'横浜市','千葉'=>'千葉市',
  '埼玉'=>'さいたま市','栃木'=>'宇都宮市','群馬'=>'前橋市','茨城'=>'水戸市',
  '愛知'=>'名古屋市','大阪'=>'大阪市'];
  $mer=1000;
  $od_num=5;
  $ev_num=6;
  $point=['A','B','C','D'];
  echo "私の名前は「". $name ."」です。\n";
  echo $q2_val_mul . "\n";
  echo $q2_val__div . "\n";
  echo "現在時刻は、" .date("Y/m/d H:i:s"). "です。\n";
  if ($device==='windows'){
    echo "使用OSは、" .$device. "です。\n";
  }

  else if($device==='Mac'){
    echo "使用OSは、" .$device. "です。\n";
  }

  else{
    echo "使用OSは、" .$device. "です。\n";
  }

  if($age<18){
    echo "未成年です\n";
  }

  else if($age>=18){
    echo "成人です\n";
  }
  echo $pre_kanto[2] . "と" . $pre_kanto[3] . "関東地方の都道府県です。\n";
  for($i=0; $i<=6; $i++){
    echo $as_city_kanto[$pre_kanto[$i]] . "\n";
  }
  if($as_pre_kanto[$pre_key]){
    echo $as_pre_kanto[$pre_key] ."の県庁所在地は、"  .$as_city_kanto[$pre_kanto[$pre_key]]. "です。\n";
  }

  foreach ($as_city_kanto as $key => $value) {
    if(in_array($key,$pre_kanto)){
      echo "${key}の県庁所在地は${value}です。\n";
  }else{
      echo "${key}は関東地方ではありません。\n";
   }
  }
  hello($name);
  calcTaxInPrice($mer);
  distinguishNum($od_num);
  distinguishNum($ev_num);
  evaluateGrade($point[0]);
  evaluateGrade($device);

  function hello($greet){
    echo  $greet. "さん、こんにちは。\n";
  }
  function calcTaxInPrice($price){
    $zei=0.1;
    $taxInPrice=$price+($price*$zei);
    echo $price . "円の商品の税込価格は" .$taxInPrice. "円です。\n";
  }
  function distinguishNum($num){
    if($num%2==0){
      echo $num. "は偶数です。\n";
    }
    if($num%2==1){
      echo $num. "は奇数です。\n";
    }
  }
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
