<?php
// Nhập mảng có 10 phần tử số nguyên
$array = array(15, 2, 63, 54, 47, 5, 16, 27, 98, 15);
echo ("Mảng ban đầu: ");
echo "[";
for($i = 0; $i < 10; $i++) {
    echo ($array[$i] . " ,");
}
echo "]";
echo "<br>";
echo "<br>";

/**
 * Tí nh tổ ng cá c phầ n tử củ a mả ng. Kiể m tra tổ ng là chẵ n hay lẻ . In kế t quả ra mà n hì nh
 */

$sumArray = 0;
for($i = 0; $i < 10; $i++) {
    $sumArray += $array[$i];
}

echo ("Tổng của các phần tử trong mảng = " .$sumArray);
echo "<br>";
echo "<br>";

/**
 * Kiể m tra mả ng có bao nhiêu số chẵ n, bao nhiêu số lẻ . In kế t quả ra màn hình
 */

$soChan = 0;
$soLe = 0;
for($i = 0; $i < 10; $i++) {
    if($array[$i] % 2 == 0) {
        $soChan++;
    }else {
        $soLe++;
    }
}

echo ("Mảng có " .$soChan . " số chẵn!");
echo "<br>";
echo ("Mảng có " .$soLe . " số lẻ!");
echo "<br>";
echo "<br>";

/**
 * Sắ p xế p cá c phầ n tử mả ng theo thứ tự tăng dầ n, giả m dầ n. In mả ng ra mà n hì nh
 */

// Xap xep theo thu tu tang dan
for($i = 0; $i < 10; $i++) {
    for($j = $i + 1; $j < 10; $j++) {
        if($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}

echo ("Mảng xắp sếp theo thứ tự tăng dần: ");
echo "[";
for($i = 0; $i < 10; $i++) {
    echo ($array[$i] . ", ");
}
echo "]";

echo "<br>";
echo "<br>";

// Xap xep theo thu tu giam dan
for($i = 0; $i < 10; $i++) {
    for($j = $i + 1; $j < 10; $j++) {
        if($array[$i] < $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}

echo ("Mảng xắp sếp theo thứ tự giảm dần: ");
echo "[";
for($i = 0; $i < 10; $i++) {
    echo ($array[$i] . ", ");
}
echo "]";

echo "<br>";
echo "<br>";
/**
 * Kiể m tra phầ n tử nà o xuấ t hiệ n nhiề u nhấ t trong mả ng
 */

// Hàm để tìm phần tử xuất hiện nhiều lần nhất trong mảng
function findMostFrequentElement($arr) {
    $count = array(); // Mảng để lưu số lần xuất hiện của từng phần tử
    $maxCount = 0; // Số lần xuất hiện nhiều nhất
    $mostFrequentElement = null; // Phần tử xuất hiện nhiều lần nhất

    foreach ($arr as $element) {
        if (isset($count[$element])) {
            $count[$element]++;
        } else {
            $count[$element] = 1;
        }

        // Kiểm tra xem phần tử hiện tại có xuất hiện nhiều hơn phần tử trước đó không
        if ($count[$element] > $maxCount) {
            $maxCount = $count[$element];
            $mostFrequentElement = $element;
        }
    }

    return $mostFrequentElement;
}

$mostFrequent = findMostFrequentElement($array);

if ($mostFrequent !== null) {
    echo "Phần tử xuất hiện nhiều lần nhất trong mảng là: $mostFrequent";
} else {
    echo "Mảng trống.";
}
echo "<br>";
echo "<br>";
/**
 * Kiể m tra có bao nhiêu số nguyên tố xuấ t hiệ n trong mả ng
 */
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    if ($num <= 3) {
        return true;
    }
    if ($num % 2 == 0 || $num % 3 == 0) {
        return false;
    }
    $i = 5;
    while ($i * $i <= $num) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }
    return true;
}

// Mảng chứa các số nguyên
$array = array(2, 3, 5, 7, 11, 4, 9, 14, 17);

$primeCount = 0; // Số lượng số nguyên tố

foreach ($array as $num) {
    if (isPrime($num)) {
        $primeCount++;
    }
}

echo "Trong mảng, có $primeCount số nguyên tố.";
?>