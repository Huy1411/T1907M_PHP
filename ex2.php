<?php
//lay co so du lieu tu mysql tu php
include_once("lib/connect.php");
$products = getAll("products")
?>
</
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Danh sach san pham </title>
</head>
<body>
<h1>Thông tin sản phẩm </h1>
<table class="table table-bordered table-hover">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $p): ?>
        <tr>
            <th scope="row"><?php echo $p["id"] ?></th>
            <td><?php echo $p["name"] ?></td>
            <td><?php echo $p["description"] ?></td>
            <td><?php echo $p["price"] ?></td>
            <td><?php echo $p["quantity"] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
