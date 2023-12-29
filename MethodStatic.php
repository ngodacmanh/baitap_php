<!-- Viết chương trình:
Hàm được biểu diễn dưới dạng chuỗi Taylor của riêng nó. Tính giá trị gần đúng
của tổng của chuỗi vô hạn này. Kết thúc phép tính khi số hạng tiếp theo nhỏ
hơn một số nhất định về giá trị tuyệt đối . Trong đó  = 10-k ở đây k là số tự
nhiên.
So sánh kết quả thu được với giá trị được tính bằng các hàm tiêu chuẩn.
Nhập các giá trị x và k từ bàn phím.
Đưa ra kế t quả có ba chữ số sau dấu thập phân. -->

<?php
class TaylorSeries
{
    public static function calculate($x, $k)
    {
        $epsilon = pow(10, -$k); // Đặt epsilon theo giá trị k
        $result = 0.0;
        $term = 1.0;
        $n = 0;

        while (abs($term) > $epsilon) {
            $result += $term;
            $n++;
            $term = pow($x, $n) / self::factorial($n);
        }

        return round($result, 3); // Làm tròn kết quả đến ba chữ số thập phân
    }

    private static function factorial($n)
    {
        if ($n == 0) {
            return 1;
        } else {
            return $n * self::factorial($n - 1);
        }
    }
}

// Nhập giá trị x và k từ bàn phím
$x = 4;
$k = 7;

// Tính và in kết quả
$result = TaylorSeries::calculate($x, $k);
echo "Giá trị gần đúng của hàm số tại x = $x là $result." . PHP_EOL;
?>
