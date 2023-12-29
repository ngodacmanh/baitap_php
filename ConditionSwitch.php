<?php
/**
 * 10.1: Viế t chương trì nh nhậ p và o mộ t số nguyên. Kiể m tra số đó nguyên dương hay nguyên âm. In ra mà n hì nh kế t quả
 */

 $a = -5;
 switch($a) {
    case $a > 0:
        echo ("So: " . $a . " la so nguyen duong");
        break;
    case $a == 0:
        echo ("So: " . $a . " khong phai la so nguyen duong va cung khong phai la so nguyen am");
        break;   
    case $a < 0:
        echo ("So: " . $a . " la so nguyen am");
        break;
    default:
        echo ("Vui long nhap so");
 }
 echo '<br>';

/**
 * 10.2: Viế t chương trì nh nhậ p và o mộ t số nguyên n. Kiể m tra n chia hế t cho 3 hay 5. In kế t quả ra mà n hì nh
 */

$n = 15;
switch($n) {
    case $n % 3 == 0:
        echo ("So $n: chia het cho 3");
        break;
    case $n % 5 == 0:
        echo ("So $n: chia het cho 5");
        break;
    default:
        echo ("Vui long nhap so");
}
echo '<br>';

/**
 * 10.3: Viế t chương trì nh nhậ p và o thá ng trong năm. In ra số ngà y củ a thá ng đó
 */
$Month = 9;
switch($Month) {
    case $Month == 1 || $Month == 3 || $Month == 5 || $Month == 7 || $Month == 8 || $Month == 10 || $Month == 12:
        echo ("Thang " . $Month . " co 31 ngay!");
        break;
    case $Month == 2:
        echo ("Thang " . $Month . " co 28 ngay!");
        break;
    default:
        echo ("Thang " . $Month . " co 30 ngay!");
}

/**
 * 
 */
?>