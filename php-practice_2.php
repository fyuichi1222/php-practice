<?php
// Q1 tic-tac問題
for ($number = 1; $number < 100; $number++ ){
  if ($number % 4 ==0 && number % 5 == 0 ){
    //5の倍数かつ4の倍数の時はtictacと出力
    echo tic-tac. "\n";
  } elseif ($number % 4 == 0 ){
    //4の倍数の時はticと出力
    echo tic. "\n";
  }elseif ($number % 5 == 0) {
    //5の倍数の時はtacと出力
    echo tac. "\n";
  } else {
    //数字を出力
    echo "$number";
  }
}

// Q2 多次元連想配列

// Bさんの電話番号を出力
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

foreach ($personalInfos as $person) {
  if ($person['name'] === 'Bさん') {
    //Bさんの電話番号は08033334444です。
      echo "{$person['name']}の電話番号は{$person['tel']}です。\n";
  }
}
//ABCさんの電話番号を出力
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

foreach ($personalInfos as $person) {
  if ($person['name'] === 'Aさん') {
    // Aさんの電話番号は09011112222です。
      echo "{$person['name']}の電話番号は{$person['tel']}です。\n";
  }
  elseif ($person['name'] === 'Bさん') {
    // Q3 Bさんの電話番号は08033334444です。
      echo "{$person['name']}の電話番号は{$person['tel']}です。\n";
  }
  elseif ($person['name'] === 'Cさん') {
    // Cさんの電話番号は55556666です。
      echo "{$person['name']}の電話番号は{$person['tel']}です。\n";
  }
}


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

$ageList = [25, 30, 18];

foreach ($personalInfos as $index => &$info) {
  $info['age'] = $ageList[$index];
}

var_dump($personalInfos);
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

    public function attend()
    {
        echo '学籍番号' . $this->studentId . '番の生徒は' . $this->studentName . 'です。';
    }
}

$student = new Student(120, '山田');
$student->attend();


// Q4 オブジェクト-2
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
        echo $this->studentName . 'は' . $subject . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
$oneMonthAgo = new DateTime('1 month ago');
echo $oneMonthAgo->format('Y-m-d');


$today = new DateTime();
$pastDate = new DateTime('1992-04-25');
$interval = $today->diff($pastDate);
echo "あの日から" . $interval->format('%a日') . "経過しました。\n";
?>