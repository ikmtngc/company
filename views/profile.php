<?php
include_once "../classes/User.php";
session_start();

$user = new User;
$user_details = $user->getUser($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Profile</title>
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

<div class="card w-50 mx-auto">
    <div class="card-header">
        <img src="../images/<?=$user_details['photo'] ?>" alt="username">
    </div>
    <div class="card-body">
        <form action="../actions/uploadPhoto.php" method="post" enctype="multipart/form-data">
            <p>Choose Photo</p>
            <input type="file" name="photo" id="" class="form-control">
            <input type="submit" value="Upload Photo" class="btn btn-outline-secondary mb-4">
        </form>
        <h3 class="h4"><?=$user_details['first_name']." ".$user_details['last_name'] ?></h3>
        <h4 class="h5"><?=$_SESSION['username'] ?></h4>
    </div>
</div>
</body>
</html>