<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin login</title>
    <link rel="stylesheet" href="..\css\signin.css">
    <style>

</style>
  </head>
  <body>
    <div class="center">
      <h1>Admin Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" pattern="[0-9]{5}" required>
          <span></span>
          <label>Employee ID</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Forgot? <a href="signup.html">Contact</a>
        </div>
      </form>
    </div>

  </body>
</html>
