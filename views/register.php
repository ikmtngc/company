<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="card w-50 mx-auto my-5">
        <div class="card-body">
            <h1 class="display-6 px-auto text-center">REGISTER</h1>
            <form action="../actions/register.php" method="post">
                <label for="first-name" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control">

                <label for="last-name" class="form-label">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control">


                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control">

                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">

                <input type="submit" value="Register" class="btn btn-success mt-4 w-100" >
                <p class="text-center">Registered already? <a href="index.php">Log in</a> . </p>
            </form>
        </div>
    </div>
</body>
</html>