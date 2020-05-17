</
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<h1>Thong tin sinh vien</h1>
<?php
$students = [];
$students[] = [
    "id" => 1,
    "name" => "Nguyen Van A",
    "age" => 18,
    "point" => 10,
    "address" => "Ha Noi",
    "phone" => "0912345678"
];
$students[] = [
    "id" => 2,
    "name" => "Nguyen Van A",
    "age" => 18,
    "point" => 10,
    "address" => "Ha Noi",
    "phone" => "0912345678"
];
$students[] = [
    "id" => 3,
    "name" => "Nguyen Van A",
    "age" => 18,
    "point" => 10,
    "address" => "Ha Noi",
    "phone" => "0912345678"
];
$students[] = [
    "id" => 4,
    "name" => "Nguyen Van A",
    "age" => 18,
    "point" => 10,
    "address" => "Ha Noi",
    "phone" => "0912345678"
];
?>
<table class="table table-bordered table-hover">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Point</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $s): ?>
        <tr>
            <th scope="row"><?php echo $s["id"] ?></th>
            <td><?php echo $s["name"] ?></td>
            <td><?php echo $s["age"] ?></td>
            <td><?php echo $s["point"] ?></td>
            <td><?php echo $s["address"] ?></td>
            <td><?php echo $s["phone"] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
