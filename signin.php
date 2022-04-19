<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signin</title>
    <link rel="stylesheet" href="css\signin.css">
    <script type="text/javascript">
      function back(){
        window.location.href ="index.php";
      }
    </script>
  <?php
    $errmsg="";
  if ($_SERVER['REQUEST_METHOD']=='POST'){

       session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  require_once('dbConnect.php');
  $sql= "SELECT * FROM users WHERE regno = '$username' AND password = '$password' ";
  $result = mysqli_query($conn,$sql);
  $check = mysqli_fetch_array($result);
  if(isset($check)){
        $_SESSION['regno'] = $username;
    header('Location: student\studentdashboard.php');

  }

  else{
  $errmsg="*Username or password is wrong";
  }
  }

   ?>

  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="signin.php" >
        <div class="txt_field">
          <input name="username" type="text" pattern="[0-9]{2}[A-Z]{3}[0-9]{4}" required>
          <span></span>
          <label>Regno</label>
        </div>
        <div class="txt_field">
          <input name="password" type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Go Back"onclick="back()" style="margin-bottom:5px;">
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="registration.php">Signup</a>
        </div>
        <span style="color:red "><?php echo "$errmsg"; ?></span>
      </form>
    </div>

  </body>
</html>
