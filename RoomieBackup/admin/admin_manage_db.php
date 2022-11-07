addUser()
{

}

modifyUser()
{

}

deleteUser()
{

}

<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Mangage</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3><span>admin</span></h3>
      <p>Select Options</p>
      <a href="admin_manage_db.php" class="btn">Add User</a>
      <a href="admin_view_database.php" class="btn">Modify User</a>
      <a href="admin_view_database.php" class="btn">Delete User</a>
      <a href="logout.php" class="btn">Logout</a>
   </div>

</div>

</body>
</html>