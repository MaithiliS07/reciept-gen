<?php

$showError = "false";
$method = $_SERVER['REQUEST_METHOD'];
@include 'config.php';

if($method=='POST'){

   $email = $_POST['email'];
   $pass = $_POST['password'];
   
   $sql = "SELECT * FROM `admin_form` WHERE email = '$email' && password = '$pass'";
   $result = mysqli_query($conn, $sql);
   $numRows = mysqli_num_rows($result);
   if ($numRows==1) {
       $row = mysqli_fetch_assoc($result);
       if (password_verify($pass, $row['password'])) {
           session_start();
           $_SESSION['loggedin']= true;
           $_SESSION['id']= $row['id']; 
           $_SESSION['email']= $row['email']; 
           $_SESSION['email'] = $email;
           echo "logged in ". $email;
       }

       header("Location:admin_page.php");
   }

   else{
       $showError = true;
       $error[] = 'incorrect email or password!';

   }
  

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
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
      <h3>Admin Login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
   </form>
   <a href="login_form.php"><input type="submit" name="submit" value="User Login" class="admin-btn"></a>
</div>
</body>
</html>