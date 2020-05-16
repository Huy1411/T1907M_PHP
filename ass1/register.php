<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Register</h1>
        <form action="post_register.php" method="post">
              <div class="form-group">
                  <input class="form-control" name="name" type="text" placeholder="Name" />
              </div>
              <div class="form-group">
                  <input class="form-control" name="email" type="text" placeholder="Email" />
              </div>
              <div class="form-group">
                  <input class="form-control" name="password" type="text" placeholder="Password" />
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-outline-danger" > Register </button>
              </div>
          </form>
    </div>
</div>

</body>
</html>

