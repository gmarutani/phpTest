<?php
//1. $number に数字を代入し、 if文で $number が偶数だったら 「偶数です」、もし違ったら「奇数です」と表示するように実装してください。

$number = 5;
if ($number % 2 == 0){echo "偶数です";
} else {
    echo "奇数です";
}
echo "<br>";

//2. 【応用】$animals に配列で好きな動物を5種類代入し、for文で逆番に出力してください。
$animals = ["猫","犬","ライオン","ハムスター","きつね"];
for ($i = 4; $i > -1; $i--) {
    echo $animals[$i];
}
echo "<br>";


//3. 【応用】 for文を使って、下記のような九九の結果を表させてください
   // 1 * 1 は 1です
   // 1 * 2 は 2です
   // ~省略~
   // 9 * 8 は 72です
   // 9 * 9 は 81です

$suuji = [1,2,3,4,5,6,7,8,9];
$zero = 0;
for ($i =0; $i < 9; $i++) {
    for ($j = 1;$j < 10; $j++){
     $zero += $j;   
    echo $suuji[$i] .  "*";
    echo $j . "は" ;
    echo $suuji[$i] * $j ."です" ;
    echo "<br>";
    }
}

?>