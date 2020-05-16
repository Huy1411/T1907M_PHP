<?php
require_once"User.php";
?>
<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Danh sach nguoi dung</title>
</head>
<body>
<h1>Thông tin người dùng</h1>
<?php
$user = new \ass1\User();
?>
<?php foreach ($user->getUsers() as $u): ?>
    <ul>
        <li><a href="edit.php?id=<?php echo $u["id"]; ?>"> <?php echo $u["name"] ?></a></li>

        <li><?php echo $u["email"] ?></li>
        <li><?php echo $u["password"] ?></li>
        <li><a href="delete.php?id=<?php echo $u["id"]; ?>"> delete </a></li>
    </ul>
<?php endforeach; ?>

</body>
</html>

