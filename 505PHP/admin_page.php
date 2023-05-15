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
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<style>
    .container{
        background-image:url(https://img.freepik.com/premium-vector/call-center-operator-cartoon-character-with-headset-desk-working-office-customer-support-info-center-concept-vector-illustration-call-center-manager-consulting-consultation-clients_176516-1656.jpg?w=2000);
        background-position: left;
        background-repeat: no-repeat;
        background-color: white;
        background-size: 500px;
    }
</style>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>