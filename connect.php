<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit"])){
$conn= mysqli_connect('localhost','root','','hms') or die("Connection failed:" .mysqli_connect_error());
if(isset($_POST['name']) && isset($_POST['regno']) && isset($_POST['email']) && isset($_POST['phoneno']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_POST['gender']) ){

$name=$_POST['name'];
$email=$_POST['email'];
$regno=$_POST['regno'];
$phoneno=$_POST['phoneno'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword']
$gender=$_POST['gender'];
    session_start();
$sql="INSERT INTO `users` (`name`,`regno`,`email`,`phoneno`,`password`,`gender`,`block`)VALUES ('$name','$regno','$email','$phoneno','$password','$gender','NULL')";
$query=mysqli_query($conn,$sql);
if($query){
  echo 'Entry successful';
  $_SESSION['regno'] = $regno;
  if( $gender=="male"){
    header('Location: student\mhregistration.php');
  }
  else if($gender=="female"){
      header('Location: student\lhregistration.php');
  }
}
else{
  echo "error occoured";
}

}
}



 ?>
