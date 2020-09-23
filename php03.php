<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

// 1〜$max までを足して結果を返す関数
function sum ($double) {
  echo $double = $double * 2;
}

echo sum ($double = 50);

echo "<br>";

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
//　参考）引数は下記のように指定すると、複数の仮引数を使うことができます。
//function f ($a, $b){
//処理したい内容
//}

function f ($a, $b){
    echo $answer = $a + $b;
}

echo f ($a = 9,$b = 2) . "\n";

echo "<br>";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結
//果を返す関数を作成してください。

$arr = array(1,3,5,7,9);

function array_total ($arr){
  $result = 1; 
  $count = count ($arr) - 1; 
 for ($i = 0; $i <= $count; $i++){
   $result = $result * $arr[$i];  
 };   
return $result;
}

echo array_total($arr);

echo "<br>";

//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す 
//max_array という関数を実装しようとしていま
//す。途中の部分を完成させてください。
function max_array ($arr) {
// とりあえず配列の最初の要素を1番大きい値とする
$max_number = $arr[ 0 ];
foreach ($arr as $a) {
//どうしたらいいかわからない・・・・
if ($a > $max_number){
    $max_number = $a;
}
}
return $max_number;
}

echo max_array ($arr = array(8,4,5,3,9,1,10,14,257)) ;

echo "<br>";

//5.次のビルトイン関数の用途、使い方を自分で調べて実際に使ってみてください。
//strip_tags
//この関数は、指定した文字列 (str) から全ての NULL バイトと
// HTML および PHP タグを取り除きます。 
//この関数は、fgetss() 関数と同じタグ除去アルゴリズムを使用します。
$text = '<p> おはようございます</p><!-- Comment --> <a href="#fragment">こんにちは</a>';
echo strip_tags($text);
echo "\n";

echo "<br>";


//array_push
//配列の末尾に要素を追加する。
$year = [2017,2018,2019];
array_push($year,2020);
print_r($year);

echo "<br>";

//array_merge
//配列をマージする
$data = array("TV1" => "500", "TV2" => "1000" , "RADIO1" => "800");
$add_data = array("TV1" => "2000", "RADIO2" => "600");
$result = array_merge($data, $add_data);
print_r($result);

echo "<br>";




//time , mktime
//time  「1970年1月1日0時」から経過した秒数のタイムスタンプを表示
echo time();
echo "<br>";

//mktime 指定した時間のタイムスタンプを取得
$time = mktime(0, 0, 0, 1, 1, 2020);
var_dump(date('Y年m月d日h時i分s秒', $time));
print('<br/>');

echo "<br>";

//date
//UNIXタイムスタンプを日付にする

$timestamp = time() + (60 * 60 * 24) * 7;
$next_week = date('Y年m月d日H時i分s秒', $timestamp);
print $next_week;

?>