<?php
/**
 * Viế t chương trì nh nhậ p và o mộ t chuỗ i từ bà n phí m.
 * 1: Đả o ngượ c chuỗ i
 */

 $myString = "Hello World";
 echo ("Đảo ngược chuỗi: ");
 echo strrev($myString);

echo "<br>";
echo "<br>";

 /**
  * 2: Đế m xem chuỗ i có bao nhiề u từ trong chuỗ i
  */
$count = str_word_count($myString);

echo ("Chuỗi có " . $count . " từ");
?>