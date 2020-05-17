<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Lồng ghép html - php</title>
</head>
<body>
<h1>Thông tin sinh viên</h1>
<?php
include_once("students.php") // nap file php vao 1 file khac  include -> nap file
?>
<?php foreach ($students as $s): ?> // ket hop HTML - PHP
    <ul>
        <li><a href="#"> <?php echo $s -> name ?></a></li> // goi thuoc tinh cua doi tuong dung ky hieu ->
        <li><?php echo $s -> age ?> tuổi</li>
        <li><?php echo $s -> point ?> điểm</li>
    </ul>
<?php endforeach; ?>

</body>
</html>

