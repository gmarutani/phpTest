<?php

//1.引数に税抜きの数値を指定して実行すると、税込み(消費税10%)の数値を返す関数を作成してください。
  //※小数点以下は「切り捨て」にして返り値は整数で提出しましょう。

function tax() {
    $zeinuki = 5;
 $zeinuki * 110 / 100;
 echo floor($zeinuki);
}
echo tax();
echo "<br>";


//2.$name と $age を仮引数に持ち $age が20以上の場合は $nameを返し、それ以外は「未成年」と返す関数を作成してください。

function f ($name, $age){
    if($age >= 20){
    echo $name;   
    } else {
    echo "未成年";    
    }
}

echo f(40,20);

echo "<br>";


//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素の中央値を返す関数を作成してください。


$arr = array(1,3,5,7,9,11,13);

function array_median ($arr){
	sort($arr);
	if (count($arr) % 2 == 0){
		return (($arr[(count($arr)/2)-1]+$arr[((count($arr)/2))])/2);
	}else{
		return ($arr[floor(count($arr)/2)]);
	}
}

echo array_median($arr);

echo "<br>";

//4.$price と $amount という配列の仮引数を持ち、$price * $amount が1万以上なら20%引きの値を返す関数を作成してください。
//※小数点以下は「切り捨て」にして返り値は整数で提出しましょう。


function amount ($price,$amount){
  $kakezan = $price * $amount;
  if ($kakezan >= 10000){
    $kakezan = $kakezan * 8 / 10;
  }
  return $kakezan;
}

echo amount (200,40) ;

echo "<br>";



//5.【応用】次のプログラムは、配列の中で1番小さい値を返す min_array という関数を実装しようとしています。途中の部分を完成させてください。

$arr = [8,16,2,4,5,10,3,1,8,0];

function min_array($arr) {
  // とりあえず配列の最初の要素を1番小さい値とする
  $min_number = $arr[0];
  foreach($arr as $a) {
    //どうしたらいいかわからない・・・・
    if ($min_number > $a){
      $min_number = $a;
    }
  }
  return $min_number;
}

echo min_array($arr);

echo "<br>";
?>