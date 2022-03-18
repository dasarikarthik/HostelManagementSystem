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
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" pattern="[0-9]{2}[A-Z]{3}[0-9]{4}" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Go Back"onclick="back()" style="margin-bottom:5px;">
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="signup.html">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
