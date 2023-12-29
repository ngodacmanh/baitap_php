<?php
/**
 * Viế t chương trì nh nhậ p và o 2 số nguyên a, b:
 * Tí nh tổ ng, hiệ u, tí ch, thương củ a 2 số a, b. In ra mà n hì nh kế t quả . 
 * Định  dạ ng 2 chữ số hà ng thậ p phân
 */


 $a = 15;
 $b = 5;
 echo "<br>";
 echo "a = $a";
 echo "<br>";
 echo "b = $b";
 echo "<br>";
 $c = $a < $b;
 $d = $a > $b;
 $f = $a <= $b;
 $e = $a >= $b;
 $tong = $a + $b;
 $hieu = $a - $b;
 $tich = $a * $b;
 $thuong = $a / $b;

 echo "Tong: $tong";
 echo "<br>";
 echo "Hieu: $hieu";
 echo "<br>";
 echo "Tich: $tich";
 echo "<br>";
 echo "Thuong: $thuong";
 echo "<br>";

 echo "a < b:";
 var_dump($c);
 echo "<br>";
 echo "a > b:";
 var_dump($d);
 echo "<br>";
 echo "a <= b:";
 var_dump($f);
 echo "<br>";
 echo "a >= b:";
 var_dump($e);
?>