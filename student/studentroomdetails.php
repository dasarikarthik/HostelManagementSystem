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
text-align: center;
}
.room{
  margin-left: 45%;
}
hr{
  /* border: 0;
  height: 3px;
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(9, 84, 132), rgba(0, 0, 0, 0)); */

}
</style>
</head>
<body>
  <?php       session_start(); ?>
  <?php

    $regno = $_SESSION['regno'];
    require_once('../dbConnect.php');
    $sql="SELECT name,email,phoneno,block,roomno FROM users WHERE regno='$regno';";
      // $sql="SELECT regno,name,email,phoneno,block,roomno FROM users WHERE ";
    $query=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);
    $name=$row['name'];
    $email=$row['email'];
    $phoneno=$row['phoneno'];
    $block=$row['block'];
    $roomno=$row['roomno'];



   ?>

<?php include '../header.php';?>

<div class="room">
  <br><br>
  <h2 >Room Details</h2>
  <br>
</div>
<div class="card">

  <img class="avatar"src="..\images\gowtham.jpeg" alt="Avatar" >
  <br>
  <br>
  <div class="container">
    <h4><b><?php echo $name; ?></b></h4>
    <br>
    <p><b><?php echo $regno; ?></b></p>

    <br>
    <p><b><?php echo $phoneno; ?></b></p>

    <br>
    <p><b><?php echo $block; ?></b></p>

    <br>
    <p><b><?php echo $roomno; ?></b></p>

    <br>

  </div>
</div>

</body>
</html>
