<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title></title>
  <link rel="stylesheet" href="..\css\mhreg.css">
  </head>
  <body>
    <?php       session_start(); ?>
<?php include '../header.php';?>


<form class="" action="lhregistration.php" method="post">
    <section class="cards">
<article class="card card--1">
  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">Q block</h3>
    <!-- <span class="card__by"> <a href="#" class="card__author" title="author">select</a></span> -->
    <input type="submit" name="dblock" id="dblock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--2">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">A block</h3>
    <input type="submit" name="ablock" id="ablock" class="card__by" value="submit">
  </div>
</article>

<article class="card card--3">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">B block</h3>
      <input type="submit" name="bblock" id="bblock" class="card__by" value="submit">
  </div>
</article>
<article class="card card--4">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">C block</h3>
      <input type="submit" name="cblock" id="cblock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--5">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">D block</h3>
      <input type="submit" name="dblock" id="dblock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--6">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">E block</h3>
    <input type="submit" name="eblock" id="eblock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--7">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">F block</h3>
      <input type="submit" name="fblock" id="fblock" class="card__by" value="submit">
  </div>
</article>


<article class="card card--8">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> LH Hostel</span>
    <h3 class="card__title">G block</h3>
    <input type="submit" name="gblock" id="gblock" class="card__by" value="submit">
  </div>
</article>


  </section>
</form>

  <?php

  if($_SERVER["REQUEST_METHOD"]=="POST"){
require_once('../dbConnect.php');
    $regno =  $_SESSION['regno'];
if(isset($_POST["ablock"])){
  $blockname="Ablock";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}
else{
    $roomno=$largestNumber+1;
}
}
if(isset($_POST["bblock"])){
  $blockname="Bblock";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}
else{
    $roomno=$largestNumber+1;
}
}
if(isset($_POST["cblock"])){
  $blockname="Cblock";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}
else{
    $roomno=$largestNumber+1;
}
}
if(isset($_POST["Dblock"])){
  $blockname="dblock";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}
else{
    $roomno=$largestNumber+1;
}
}
if(isset($_POST["eblock"])){
  $blockname="Eblock";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}
else{
    $roomno=$largestNumber+1;
}
}
if(isset($_POST["fblock"])){
  $blockname="Fblock";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}
else{
    $roomno=$largestNumber+1;
}
}

if(isset($_POST["gblock"])){
  $blockname="Gblock";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}
else{
    $roomno=$largestNumber+1;
}
}
if(isset($_POST["hblock"])){
  $blockname="Hblock";
  $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `users` WHERE block='$blockname' AND gender='female';" );
  $row = mysqli_fetch_array( $rowSQL );
  $largestNumber = $row['max'];
  $result=mysqli_query($conn,"SELECT count($largestNumber) as total from users where block='$blockname' AND gender='female';");
$data=mysqli_fetch_assoc($result);
$count= $data['total'];
if($count<6){
  $roomno=$largestNumber;
}
else{
    $roomno=$largestNumber+1;
}
}


$sql="UPDATE `users` SET `block`='$blockname' where regno='$regno'";
$query=mysqli_query($conn,$sql);
$sql="UPDATE `users` SET `roomno`='$roomno' where regno='$regno'";
$query1=mysqli_query($conn,$sql);
if($query && $query1){
  echo 'Entry successful';
  header('Location: studentdashboard.php');
}
else{
  echo "error occoured";
}
}
   ?>
  </body>
</html>
