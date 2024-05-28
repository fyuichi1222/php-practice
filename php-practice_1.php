<?php
// Q1 変数と文字列
$name = "福島";
echo "私の名前は「" . $name . "」です。";

// Q2 四則演算
$num = 5 * 4;
echo $num  . "\n";

$result = $num / 2;
echo $result   . "\n";

// Q3 日付操作
$time = strtotime("2019年05月23日 14時48分22秒");
echo date("Y年m月d日 H時i分s秒", $time);


// Q4 条件分岐-1 if文
$device='windows';

if ($device == 'windows') {
  echo '使用OSは、windowsです。';
} else {
  if ($device == 'mac') {
    echo '使用OSは、macです。';
} else {
    echo 'どちらでもありません。';
  }
}
// Q5 条件分岐-2 三項演算子
$age = 10;
$message = ($age >= 18) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列
$japan = ['東京都','埼玉県','栃木県','千葉県','神奈川県','茨城県','群馬'];
$kanto3 = $japan[3];
$kanto4 = $japan[4];
echo $japan[3] . "と" . $japan[4] . "は関東地方の都道府県です。";


// Q7 連想配列-1
$kanto = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
];

foreach ($kanto as $city) {
  echo $city . "\n";
}

// Q8 連想配列-2
$kanto_city = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
];


  echo "埼玉県の県庁所在地は、" . $kanto_city["埼玉県"] . "です。";



// Q9 連想配列-3
$japan = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市",
  "愛知県" => "名古屋市",
  "大阪府" => "大阪市"
];

foreach ($japan as $kanto => $city) {
  if ($kanto == "東京都" || $kanto == "神奈川県" || $kanto == "千葉県" || $kanto == "埼玉県" || $kanto == "栃木県" || $kanto == "群馬県" || $kanto == "茨城県") {
      echo $kanto . "の県庁所在地は、" . $city . "です。" . "\n";
  } else {
      echo $kanto . "は関東地方ではありません。" . "\n";
  }
}

// Q10 関数-1
function hello($name) {
  return $name . "さん、こんにちは。";
}

echo hello("金谷") . "\n";
echo hello("安藤") . "\n";

// Q11 関数-2
function calcTaxInPrice($price) {
  return $price * 1.1;;
  return $taxInPrice;
}
  $price = 1000;

$taxInPrice = calcTaxInPrice($price);

echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';


// Q12 関数とif文
function distinguishNum($number) {
  if ($number % 2 == 0) {
      return $number . 'は偶数です。';
  } else {
      return $number . 'は奇数です。';
  }
}
echo distinguishNum(11) . "\n";
echo distinguishNum(24) . "\n";

// Q13 関数とswitch文
function evaluateGrade($score) {
  switch ($score) {
      case 'A':
          return $score . 'は合格です。';
      case 'B':
          return $score . 'は合格です。';
      case 'C':
          return $score . 'は合格ですが追加課題があります。';
      case 'D':
          return $score . 'は不合格です。';
      default:
          return '判定不明です。講師に問い合わせてください。';
  }
}

echo evaluateGrade('A');
echo evaluateGrade('Z');

?>