<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//ex1
$string = "Xin chào, thế giới!";
$length = strlen($string);
echo "Chuỗi '$string' có số ký tự là: $length".'<br>';
//ex2
$string = "Xin chào, thế giới!";
$wordCount = str_word_count($string);
echo "Chuỗi '$string' có số từ là: $wordCount".'<br>';
//ex3
$string = "hello";
$strrev = strrev($string);
echo "Chuỗi '$string' sẽ được đảo lại : $strrev".'<br>';
//ex4
$originalString = "Xin chào, thế giới!";//chuổi bắt đầu 
$searchString = "thế giới";//chuỗi tìm kiếm
$position = strpos($originalString, $searchString);
echo "Chuỗi '$searchString' được tìm thấy tại vị trí: $position".'<br>';
//ex5
// Chuỗi gốc
$originalString = "Xin chào, thế giới!";

// Chuỗi con cần thay thế
$search = "thế giới";

// Chuỗi mới sẽ thay thế
$replace = "mọi người";

// Thực hiện thay thế
$newString = str_replace($search, $replace, $originalString);

// In ra kết quả
echo"Chuỗi sau khi thay thế: $newString".'<br>';
//ex6 
function startsWith($string, $substring) {
    // So sánh độ dài chuỗi con với độ dài chuỗi cần kiểm tra
    if (strncmp($string, $substring, strlen($substring)) === 0) {
        return true;
    } else {
        return false;
    }
}

$string = "Hello, World!";
$substring = "Hello";

if (startsWith($string, $substring)) {
    echo "Chuỗi '$string' bắt đầu bằng '$substring'.";
} else {
    echo "Chuỗi '$string' không bắt đầu bằng '$substring'.".'<br>';
}

//ex7

function convertToUppercase($string) {
    return strtoupper($string);
}

$string = "Hello, World!";
$uppercaseString = convertToUppercase($string);

echo "Chuỗi gốc: $string\n";
echo "Chuỗi sau khi chuyển đổi thành chữ hoa: $uppercaseString".'<br>';
//ex8
function convertToLowercase($string) {
    return strtolower($string);
}

$string = "Hello, WORLD!";
$lowercaseString = convertToLowercase($string);

echo "Chuỗi gốc: $string\n";
echo "Chuỗi sau khi chuyển đổi thành chữ thường: $lowercaseString".'<br>';
//ex9 
function convertToTitleCase($string) {
    return ucwords($string);
}

$string = "hello, world! welcome to php programming.";
$titleCaseString = convertToTitleCase($string);

echo "Chuỗi gốc: $string\n";
echo "Chuỗi sau khi chuyển đổi: $titleCaseString".'<br>';
//ex10
function trimString($string) {
    return trim($string);
}

$string = "   Hello, World!   ";
$trimmedString = trimString($string);

echo "Chuỗi gốc: '$string'\n";
echo "Chuỗi sau khi loại bỏ khoảng trắng: '$trimmedString'".'<br>';
//ex11
function removeFirstCharacter($string) {
    return ltrim($string, $string[0]);
}

$string = "Hello, World!";
$modifiedString = removeFirstCharacter($string);

echo "Chuỗi gốc: '$string'\n";
echo "Chuỗi sau khi loại bỏ ký tự đầu tiên: '$modifiedString'".'<br>';
//ex12
function removeLastCharacter($string) {
    // Loại bỏ ký tự cuối cùng bằng cách cắt chuỗi
    return substr($string, 0, -1);
}

$string = "Hello, World!";
$modifiedString = removeLastCharacter($string);

echo "Chuỗi gốc: '$string'\n";
echo "Chuỗi sau khi loại bỏ ký tự cuối cùng: '$modifiedString'".'<br>';
//ex13
function splitStringIntoArray($string, $delimiter) {
    return explode($delimiter, $string);
}
$string = "Hello,World,Welcome,To,PHP";
$delimiter = ","; // Ký tự phân tách là dấu phẩy
$array = splitStringIntoArray($string, $delimiter);

// In ra mảng kết quả
print_r($array).'<br>';
//ex14
$array = array("PHP", "is", "awesome");
$string = implode(" ", $array);
echo $string.'<br>';
//ex15 
$originalString = "example";
$prependString = "start_";
$resultPrepend = str_pad($originalString, strlen($originalString) + strlen($prependString), $prependString, STR_PAD_LEFT);

$appendString = "_end";
$resultAppend = str_pad($originalString, strlen($originalString) + strlen($appendString), $appendString, STR_PAD_RIGHT);

echo "Chuỗi sau khi thêm vào đầu: " . $resultPrepend . "\n".'<br>';
echo "Chuỗi sau khi thêm vào cuối: " . $resultAppend.'<br>';
//ex16

$originalString = "hello_world";
$substring = "world";
$foundSubstring = strrchr($originalString, $substring[0]);

if ($foundSubstring === $substring) {
    echo "Chuỗi '$originalString' kết thúc bằng chuỗi con '$substring'.".'<br>';
} else {
    echo "Chuỗi '$originalString' không kết thúc bằng chuỗi con '$substring'.".'<br>';
}
//ex17
$originalString = "Hello, welcome to the PHP world!";
$substring = "PHP";

if (strstr($originalString, $substring)) {
    echo "Chuỗi '$originalString' có chứa chuỗi con '$substring'.".'<br>';
} else {
    echo "Chuỗi '$originalString' không chứa chuỗi con '$substring'.".'<br>';
}
//ex18
$originalString = "Hello, welcome to the PHP world! 2024";
$modifiedString = preg_replace('/[^a-zA-Z0-9]/', '-', $originalString);
echo "Chuỗi sau khi thay thế: " . $modifiedString.'<br>';
//ex19
$string = "12345";
$number = filter_var($string, FILTER_VALIDATE_INT);

if (is_int($number)) {
    echo "Chuỗi '$string' là một số nguyên.".'<br>';
} else {
    echo "Chuỗi '$string' không phải là một số nguyên.".'<br>';
}
//ex20
$email = "example@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Chuỗi '$email' là một địa chỉ email hợp lệ.".'<br>';
} else {
    echo "Chuỗi '$email' không phải là một địa chỉ email hợp lệ.".'<br>';
}
?>
</body>
</html>