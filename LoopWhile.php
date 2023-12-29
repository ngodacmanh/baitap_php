<?php
/**
 * 11.1: Viế t chương trì nh tí nh tổ ng cá c số từ 1 đế n 100
 */
$sum = 0;
$i = 1;
while($i <= 100) {
    $sum += $i;
    $i++;
}

echo ("Tong cac so tu 1 => 100 = ".$sum);
echo "<br>";
echo "<br>";    

/**
 * 11.2: Viế t chương tì nh nhậ p và o mộ t số tự nhiên n. Tí nh tổ ng cá c số chia hế t cho 3 bé hơn n.
 */

$n = 20;
$sum2 = 0;
$i = 1;
while($i <= $n) {
    if($i % 3 == 0 && $i < $n) {
        $sum2 += $i;
    }
    $i++;
}

echo ("Tong cac so chia het cho 3 be hon " . $n . " = " .$sum2);
echo "<br>";
echo "<br>";

/**
 * 11.3: Viế t chương trì nh in ra 100 số Fibonacci đầ u tiên.
 */

function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;

    if($n < 0) {
        return -1;
    } else if($n == 0 || $n == 1) {
        return $n;
    }else {
        for($i = 2; $i < $n; $i++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}

echo ("100 số đầu tiên của dãy số fibonacci: ");
$i = 0;
while($i < 100) {
    echo (fibonacci ( $i ) . "<br>");
    $i++;
}
echo "<br>";
echo "<br>";

/**
 * 11.4: Viế t chương trì nh kiể m tra mộ t số nguyên n có phả i là số polinom
 */


 function isPolinom($n) {
     $n = (string)$n; // Chuyển số nguyên thành chuỗi để dễ xử lý
     $length = strlen($n); // Độ dài của chuỗi
 
     // Sử dụng hàm str_split để chuyển chuỗi thành mảng ký tự
     $characters = str_split($n);
 
     // Sử dụng hàm array_reverse để đảo ngược mảng
     $reversedCharacters = array_reverse($characters);
 
     // Sử dụng hàm implode để nối mảng ký tự thành chuỗi và so sánh với chuỗi gốc
     $reversedN = implode('', $reversedCharacters);
 
     if ($n === $reversedN) {
         return true; // Nếu bằng nhau, thì đây là số palindromic
     } else {
         return false; // Nếu không bằng nhau, thì đây không phải số palindromic
     }
 }
 
 // Số nguyên cần kiểm tra
 $n = 1256521;
 
 if (isPolinom($n)) {
     echo "$n là số polinom.";
 } else {
     echo "$n không phải là số polinom.";
 }

 
echo "<br>";
echo "<br>";

/**
 * 11.5: Viế t chương trì nh liệ t kê cá c số từ 100 đế n 999 có tổ ngcá c chữ số chia hế t cho 3
 */

 $i = 100;
while($i <= 900) {
    if($i % 3 == 0) {
        echo ($i);
        echo ("<br>");
    }
    $i++;
}
?>