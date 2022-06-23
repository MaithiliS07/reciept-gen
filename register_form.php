<?php
$method = $_SERVER['REQUEST_METHOD'];
@include 'config.php';

if($method=='POST'){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['password'];
   $cpass = $_POST['cpassword'];

   $existSql = " SELECT * FROM user_form WHERE email = '$email'";
   $result = mysqli_query($conn,$existSql);
   $numRows = mysqli_num_rows($result);
   if($numRows>0){
      $error[] = 'Email is already in use';
   }

else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }
      else{
         $insert = "INSERT INTO `user_form` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pass')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/styles.css">

</head>
<body>
<nav class="navbar navbar-light navbar-expand-md" style="color: var(--bs-indigo);background: var(--bs-indigo);">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="color: rgba(255,255,255,0.9);">Receipt Generator&nbsp;</a></div>
</nav>
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>