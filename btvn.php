<?php
//1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function isEven($number) {
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
$number = 4;
if (isEven($number)) {
    echo $number . " là số chẵn.";
} else {
    echo $number . " không phải là số chẵn.";
}
echo "<br>";
//2.Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function calculateSum($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 10;
$sum = calculateSum($n);
echo "Tổng của các số từ 1 đến " . $n . " là: " . $sum;
echo "<br>";
//3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function printMultiplicationTable() {
    for ($i = 1; $i <= 10; $i++) {
        echo "Bảng cửu chương của " . $i . ":\n";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo $i . " x " . $j . " = " . $result . "\n";
        }
        echo "\n";
    }
}
// Gọi hàm để in ra bảng cửu chương từ 1 đến 10
printMultiplicationTable();
echo "<br>";
//4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function checkWordInString($string, $word) {
    return strpos($string, $word);
}
if(strpos("Hello World", "Hello") !== false){
    echo "Có chứa từ đã tìm";
} else{
    echo "Không chứa từ đã tìm";
}
echo "<br>";
//5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function findMinMax($array) {
    $min = $array[0];
    $max = $array[0];
    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        }
        if ($value > $max) {
            $max = $value;
        }
    }
    return array("min" => $min, "max" => $max);
}
$numbers = array(5, 2, 9, 7, 1, 6);
$result = findMinMax($numbers);
echo "Giá trị nhỏ nhất trong mảng là: " . $result['min'] . "\n";
echo "Giá trị lớn nhất trong mảng là: " . $result['max'] . "\n";
echo "<br>";
//6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function sortAscending($arr) {
    sort($arr);
    return $arr;
}
$numbers = array(5, 2, 9, 7, 1, 6);
$sortedArray = sortAscending($numbers);
echo "Mảng được sắp xếp tăng dần: " . implode(", ", $sortedArray) . "\n";
echo "<br>";
//7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
$num = 5;
$result = factorial($num);
echo "Giai thừa của " . $num . " là: " . $result . "\n";
echo "<br>";
//8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
function findPrimes($start, $end) {
    $primes = array();
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}
$startNum = 1;
$endNum = 100;
$primeNumbers = findPrimes($startNum, $endNum);
echo "Các số nguyên tố từ " . $startNum . " đến " . $endNum . " là: " . implode(", ", $primeNumbers) . "\n";
echo "<br>";
//9. Viết chương trình PHP để tính tổng của các số trong một mảng:
function sumArray($arr) {
    $sum = 0;
    foreach ($arr as $num) {
        $sum += $num;
    }
    return $sum;
}
$numbers = array(1, 2, 3, 4, 5);
$totalSum = sumArray($numbers);
echo "Tổng của các số trong mảng là: " . $totalSum . "\n";
echo "<br>";
//11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không:
function isArmstrongNumber($num) {
    $digits = str_split($num);
    $numDigits = count($digits);
    $sum = 0;
    foreach ($digits as $digit) {
        $sum += pow($digit, $numDigits);
    }
    return ($sum == $num);
}
$number = 153;
if (isArmstrongNumber($number)) {
    echo $number . " là số Armstrong.\n";
} else {
    echo $number . " không là số Armstrong.\n";
}
echo "<br>";
//12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ:
function insertElement($arr, $element, $position) {
    array_splice($arr, $position, 0, $element);
    return $arr;
}
$array = array(1, 2, 3, 4, 5);
$newArray = insertElement($array, 10, 2);
echo "Mảng mới sau khi chèn phần tử: " . implode(", ", $newArray) . "\n";
echo "<br>";
//13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng:
function removeDuplicates($arr) {
    $uniqueArr = array_unique($arr);
    return array_values($uniqueArr);
}
$array = array(1, 2, 3, 2, 4, 3, 5);
$distinctArray = removeDuplicates($array);
echo "Mảng sau khi loại bỏ các phần tử trùng lặp: " . implode(", ", $distinctArray) . "\n";
echo "<br>";
//14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng
function findElementIndex($arr, $element) {
    $indexes = array_keys($arr, $element);
    return $indexes;
}
$array = array(1, 2, 3, 4, 5, 2, 6, 7, 2);
$searchElement = 2;
$elementIndexes = findElementIndex($array, $searchElement);
echo "Vị trí của phần tử " . $searchElement . " trong mảng: " . implode(", ", $elementIndexes) . "\n";
echo "<br>";
//15. Viết chương trình PHP để đảo ngược một chuỗi:
function reverseString($str) {
    return strrev($str);
}
$string = "Hello World!";
$reversedString = reverseString($string);
echo "Chuỗi đảo ngược: " . $reversedString . "\n";
echo "<br>";
//16. Viết chương trình PHP để tính số lượng phần tử trong một mảng:
function countElements($arr) {
    return count($arr);
}
$numbers = array(1, 2, 3, 4, 5);
$count = countElements($numbers);
echo "Số lượng phần tử trong mảng: " . $count . "\n";
echo "<br>";
//17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không:
function isPalindrome($str) {
    $reverseStr = strrev($str);
    return strtolower($str) === strtolower($reverseStr);
}
$string = "Madam";
if (isPalindrome($string)) {
    echo $string . " là chuỗi Palindrome.\n";
} else {
    echo $string . " không phải là chuỗi Palindrome.\n";
}
echo "<br>";
//18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng:
function countOccurrences($arr, $element) {
    return array_count_values($arr)[$element] ?? 0;
}
$numbers = array(1, 2, 3, 2, 4, 2, 5);
$element = 2;
$count = countOccurrences($numbers, $element);
echo "Số lần xuất hiện của " . $element . " trong mảng: " . $count . "\n";
echo "<br>";
//19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần:
function sortDescending($arr) {
    rsort($arr);
    return $arr;
}
$numbers = array(5, 2, 9, 7, 1, 6);
$sortedArray = sortDescending($numbers);
echo "Mảng được sắp xếp giảm dần: " . implode(", ", $sortedArray) . "\n";
echo "<br>";
//20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng:
function addElementToArray($arr, $element, $position = 'end') {
    if ($position === 'end') {
        $arr[] = $element;
    } elseif ($position === 'start') {
        array_unshift($arr, $element);
    }
    return $arr;
}
$numbers = array(1, 2, 3, 4, 5);
$newArray = addElementToArray($numbers, 6, 'end');
echo "Mảng sau khi thêm phần tử vào cuối: " . implode(", ", $newArray) . "\n";
$newArray = addElementToArray($numbers, 0, 'start');
echo "Mảng sau khi thêm phần tử vào đầu: " . implode(", ", $newArray) . "\n";
echo "<br>";
//21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng:
function findSecondLargest($arr) {
    $max1 = $arr[0];
    $max2 = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max1) {
            $max2 = $max1;
            $max1 = $arr[$i];
        } elseif ($arr[$i] > $max2 && $arr[$i] < $max1) {
            $max2 = $arr[$i];
        }
    }
    return $max2;
}
$numbers = array(5, 2, 9, 7, 1, 6);
$secondLargest = findSecondLargest($numbers);
echo "Số lớn thứ hai trong mảng: " . $secondLargest . "\n";
echo "<br>";
//22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương:
function findGCD($num1, $num2) {
    while ($num2 != 0) {
        $temp = $num2;
        $num2 = $num1 % $num2;
        $num1 = $temp;
    }
    return $num1;
}
function findLCM($num1, $num2) {
    $gcd = findGCD($num1, $num2);
    $lcm = ($num1 * $num2) / $gcd;
    return $lcm;
}
$a = 12;
$b = 18;
$gcd = findGCD($a, $b);
$lcm = findLCM($a, $b);
echo "Ước số chung lớn nhất của " . $a . " và " . $b . " là: " . $gcd . "\n";
echo "Bội số chung nhỏ nhất của " . $a . " và " . $b . " là: " . $lcm . "\n";
echo "<br>";
//23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function isPerfectNumber($n) {
    $sum = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $n;
}
if (isPerfectNumber(28)) {
    echo "là một số hoàn hảo.";
} else {
    echo "không phải là số hoàn hảo.";
}
echo "<br>";
//24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOddNumber($arr) {
    $largestOdd = null;
    foreach ($arr as $num) {
        if ($num % 2 != 0 && ($largestOdd === null || $num > $largestOdd)) {
            $largestOdd = $num;
        }
    }
    return $largestOdd;
}
$numbers = array(5, 2, 9, 7, 1, 6);
$firstLargest = findLargestOddNumber($numbers);
echo "Số lẻ lớn nhất trong mảng: " . $firstLargest . "\n";
echo "<br>";
//25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrimeNumber($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
if (isPrimeNumber(8)) {
    echo "là một số nguyên tố.";
} else {
    echo "không phải là số nguyên tố.";
}
echo "<br>";
//26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositiveNumber($arr) {
    $largestPositive = null;
    foreach ($arr as $num) {
        if ($num > 0 && ($largestPositive === null || $num > $largestPositive)) {
            $largestPositive = $num;
        }
    }
    return $largestPositive;
}
$numbers = array(5, -2, 9, 7, 1, 6);
$firstLargest = findLargestPositiveNumber($numbers);
echo "Số dương lớn nhất trong mảng: " . $firstLargest . "\n";
echo "<br>";
//27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegativeNumber($arr) {
    $largestNegative = null;
    foreach ($arr as $num) {
        if ($num < 0 && ($largestNegative === null || $num > $largestNegative)) {
            $largestNegative = $num;
        }
    }
    return $largestNegative;
}
$numbers = [1, -5, 3, -10, -2, 8];
$largestNegativeNumber = findLargestNegativeNumber($numbers);
echo "Số âm lớn nhất trong mảng là: " . $largestNegativeNumber;
echo "<br>";
//28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOfOddNumbers($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }
    return $sum;
}
$number = 10;
$sumOfOdd = sumOfOddNumbers($number);
echo "Tổng các số lẻ từ 1 đến $number là: " . $sumOfOdd;
echo "<br>";
//29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findPerfectSquareNumbers($start, $end) {
    $perfectSquareNumbers = [];
    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == (int) sqrt($i)) {
            $perfectSquareNumbers[] = $i;
        }
    }
    return $perfectSquareNumbers;
}
$startRange = 1;
$endRange = 20;
$perfectSquares = findPerfectSquareNumbers($startRange, $endRange);
echo "Các số chính phương từ $startRange đến $endRange là: " . implode(', ', $perfectSquares);
echo "<br>";
//30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function isSubstring($str, $substring) {
    return strpos($str, $substring) !== false;
}
$str = "Hello, world!";
$subString = "world";
if (isSubstring($str, $subString)) {
    echo "$subString là chuỗi con của $str";
} else {
    echo "$subString không là chuỗi con của $str";
}
?>