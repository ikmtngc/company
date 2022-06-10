<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="card mx-auto w-50 my-5">
        <div class="card-body">
           <h1 class="display-6 text-center ">LOGIN</h1>
           <form action="../actions/login.php" method="post">

                <input type="text" name="username" id="" placeholder="USERNAME" class="form-control mt-3">

                <input type="password" name="password" id="" placeholder="PASSWORD" class="form-control mt-3">

                <input type="submit" value="Log in" class="btn btn-primary w-100 my-4">
            </form>    

           <p class="text-center"> <a href="register.php" class="text-decoration-none text-center">Create account</a></p>

        </div>
    </div>
</body>
</html>