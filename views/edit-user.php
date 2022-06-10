<?php
include_once "../classes/User.php";

session_start();

$user = new User;
$user_details = $user->getUser($_GET['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Edit User</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="dashbaord.php">The company</a>
    <button class="navbar-toggler" type ="button" data-bs-toggle="collapse" data-bs-target="#">
        <span class="navbar-text text-light"></span>
    </button>
    <div class="ms-auto" id="navbarTeXt">
        <span class="navbar-text text-light">
            <a href="profile.php" class="text-muted text-decoration-none"><?=$_SESSION['username'] ?></a>
            <a href="../actions/logout.php" class="text-danger text-decoration-none ms-2">Log out</a>
        </span>
    </div>
  </div>
</nav>

<form action="../actions/editUser.php" method="post" class="container w-50 my-5">
    <h2 class="display-6 text-center">EDIT USER</h2>

    <label for="first-name" class="form-label">First Name</label>
    <input type="text" name="first_name" value="<?=$user_details['first_name'] ?>" id="first-name" class="form-control">

    <label for="last-name" class="form-label">Last Name</label>
    <input type="text" name="last_name" value="<?=$user_details['last_name'] ?>" id="last-name" class="form-control">

    <label for="username" class="form-label fw-bold">Username</label>
    <input type="text" name="username" value="<?=$user_details['username'] ?>" id="username" class="form-control">

    <input type="hidden" name="user_id" value="<?=$user_details['id'] ?>"> 
    <div class="mt-3">
        <input type="submit" value="Save" class="btn btn-warning me-2">
        <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
    </div>
</form>
</body>
</html>