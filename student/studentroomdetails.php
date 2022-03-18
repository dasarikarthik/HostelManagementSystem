<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  margin: 0 auto;

  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.avatar {
  border-radius: 5px 5px 0 0;
  width: 100%;
  height: 400px;
}

.container {
  padding: 2px 16px;
}
.room{
  margin-left: 45%;
}
</style>
</head>
<body>
<?php include '../header.php';?>

<div class="room">
  <br><br>
  <h2 >Room Details</h2>
  <br>
</div>
<div class="card">

  <img class="avatar"src="..\images\img_avatar.png" alt="Avatar" >
  <div class="container">
    <h4><b>Manjula</b></h4>
    <br>
    <p>19MIS08421</p>
    <br>
    <p>Q block</p>
  </div>
</div>

</body>
</html>
