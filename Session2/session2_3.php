<?php //lay co so du lieu tu mysql tu php
include_once("lib/connect.php");
$students = getAll("students")
?>
</
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach sinh vien</title>
</head>
<body>
<h1>Thông tin sinh viên</h1>
<?php foreach ($students as $s): ?>
    <ul>
        <li><a href="#"> <?php echo $s["id"] ?></a></li>
        <li><?php echo $s["name"] ?></li>
        <li><?php echo $s["age"] ?></li>
        <li><?php echo $s["mark"] ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>