<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signin</title>
    <link rel="stylesheet" href="..\css\signin.css">
    <script type="text/javascript">
      function back(){

          window.location.href ="admindashboard.php";
        
      }
    </script>
  </head>
  <body>
    <div class="center">
      <h1>Add Rooms</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Block name</label>
        </div>
        <div class="txt_field">
          <input type="number" required>
          <span></span>
          <label>No.of vacancies</label>
        </div>
        <input type="submit" value="Add">
      <input class="back" type="submit" value="Go back" onclick="back()">
      </form>
    </div>

  </body>
</html>
