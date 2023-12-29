<?php
/**
 * 1: Viế t chương trì nh nhậ p và o mộ t số nguyên. Kiể m tra số 
 * đó nguyên dương hay nguyên âm. In ra mà n hì nh kế t quả
 * 2:Viế t chương trì nh nhậ p và o mộ t số nguyên n. Kiể m tra n
 * chia hế t cho 3 hay 5. In kế t quả ra mà n hì nh
 * 3:Viế t chương trì nh nhậ p và o thá ng trong năm. In ra số ngà y củ a thá ng đó
 * 4:Viế t chương trì nh giả i phương trì nh bậ c 2
 * 5: Viế t chương trì nh nhậ p và o 3 số a, b, c. Kiể m tra có phả i 
 * là 3 cạ nh củ a mộ t tam giá c không?
 */

 $a = -5;
 if($a > 0) {
    echo "a la so nguyen duong";
 }else {
    echo "a la so nguyen am";
 }

 echo "<br>";

 $b = 15;
 if($b % 3 == 0 || $b % 5 == 0) {
    echo "$b chia het cho 3 hoac 5";
 }else {
    echo "$b khong chia het cho 3 hoac 5";
 }

 echo "<br>";

 $month = 9;
 if($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) {
    echo "Thang $month co 31 ngay";
 }else if($month == 2) {
    echo "Thang $month co 28 ngay";
 }else {
    echo "Thang $month co 30 ngay";
 }

 echo "<br>";


$a2 = 5;
$b2 = 3;
$c2 = 2;
$x1 = "";
$x2 = "";
$delta;
if($a2 == 0) {
    if($b2 == 0) {
        echo "Phuong trinh vo nghiem!";
    }else {
        echo ("Phuong trinh co mot nghiem: " . "x = " . (-$c2 / $b2));
    }
}

$delta = $b2 * $b2 - 4 *$a2 * $c2;

if($delta > 0) {
    $x1 = (-$b2 + sqrt($delta)) / (2 * $a2);
    $x2 = (-$b2 - sqrt($delta)) / (2 * $a2);
    echo ("Phuong trinh co 2 nghiem la:" . "x1 = " . $x1 . "x2 = " . $x2);
}elseif($delta == 0) {
    $x1 = (-$b2 / (2 * $a2));
    echo ("Phuong trinh co ngiem kep x1 = x2 =" . $x1);
}else {
    echo ("Phuong trinh vo nghiem");
}

echo "<br>";

$canh_a = 5;
$canh_b = 6;
$canh_c = 4;

if($canh_a + $canh_b > $canh_c || $canh_b + $canh_c > $canh_a || $canh_c + $canh_a > $canh_b) {
    echo ("Day la 3 canh cua 1 tam giac");
}else {
    echo ("Day khong phai la 3 canh cua 1 tam giac");
}
?>