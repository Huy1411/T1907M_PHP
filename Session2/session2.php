<?php
// array php: k gioi han so luong phan tu -- giong JS
// array php la su ket hop giua array JS va hashmap cua Java

$ary = []; // khai bao mang
$ary[0] = 10;
$ary[1] = "T1907M";
$ary[] = 3.14; // tu dong nap vao vi tri index tiep theo
for ($i = 0; $i < count($ary); $i++) {
    echo $ary[i];
}
foreach ($ary as $e) {  // nguoc lai voi Java, C# -  array as element
    echo $e;
}

$ary["point"] = 1000; // giong hashmap cua java
$ary[] = 11;
var_dump($ary);

$arr = [];
$arr[] = 1;
$arr[] = $ary;
$arr[] = "Hello";
foreach ($arr as $e) {
    echo $e;
}

$student = [
    "name" => "Nguyen Xuan Huy",
    "age" => 15,
    "id" => 1,
]; // mang kieu hashmap -> hay dung de dinh nghia du lieu cho phan tu

$student["point"] = 10;
var_dump($student);
if ($student["point"] > 5) {
    echo $student["name"];
} else {
    echo "khong co sinh vien";
}

alert();
sendMessage();

//ding nghia 1 ham - giong het JS
function alert()
{
    echo "Thong bao khan cap";
}

function sendMessage($msg = "haha")
{ // tham so co the nap gia tri mac dinh ban dau
    echo "$msg";
}

// thong dich (runtime) xong file


