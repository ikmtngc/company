<?php

include_once "../classes/User.php";

session_start();

$user = new User;
$user_list = $user->getUsers();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Dashboard</title>
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
<?= $_SESSION['user_id']?>
    <div class="container w-75 my-5">
        <h2 class="h4">User List</h2>
        <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($user_detail = $user_list->fetch_assoc()){
                ?>
                <tr>
                    <td><?=$user_detail['id'] ?></td>
                    <td><?=$user_detail['first_name'] ?></td>
                    <td><?=$user_detail['last_name'] ?></td>
                    <td><?=$user_detail['username'] ?></td>
                    <td>
                    <a href="edit-user.php?user_id=<?= $user_detail['id'] ?>" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                    <?php
                        if($_SESSION['user_id'] !==$user_detail['id']){
                    ?>
                    <a href="../actions/removeUser.php?user_id=<?= $user_detail['id'] ?>" class="btn btn-outline-danger btn-sm ms-2"><i class="fa-solid fa-trash"></i></a>
                    <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://kit.fontawesome.com/fb3163c208.js" crossorigin="anonymous"></script>
</body>
</html>