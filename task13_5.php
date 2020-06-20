<?php
//strip_tags
$str =  "<p>文字列からHTMLタグを取り除く</p>";
echo strip_tags($str) ;
?>


<?php
//array_push
$fruits = ['apple', 'orange'];
//要素を追加する
array_push($fruits, 'banana', 'pineapple');
print_r($fruits);
?>


<?php
//array_merge
$items1 = ['item1', 'item2'];
$items2 = ['item3', 'item4'];
//配列を結合する
$item_merge = array_merge($items1, $items2);
print_r($item_merge);
?>


<?php
//time
//現在のタイムスタンプを取得
echo '現在のUnixタイムスタンプ：'.time();
echo " ";
//3日後のタイムスタンプを取得
$nweek = time() + (3 * 24 * 60 * 60);
echo '3日後のUnixタイムスタンプ：'.$nweek;
?>


<?php
//mktime
//指定した日時のタイムスタンプを取得
$timestamp = mktime(0, 0, 0, 1, 1, 2020);
echo $timestamp;
?>


<?php
//現在の日時を取得
echo date('Y/m/d', time());
echo " ";
//3日後のタイムスタンプを取得
$nweek = time() + (7 * 21 * 60 * 60);
//3日後の日時を取得
echo date('Y/m/d',$nweek);
?>