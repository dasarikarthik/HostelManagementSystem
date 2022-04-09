<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <script type="text/javascript">

     function goback(){
         window.location.href ="studentdashboard.php";
     }
   </script>
<link rel="stylesheet" href="..\css\applyleave.css">

<?php       session_start(); ?>
<?php

  $regno = $_SESSION['regno'];
  require_once('../dbConnect.php');
  $sql="SELECT name,block,roomno FROM users WHERE regno='$regno';";
  $query1=mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($query1);
  $name=$row['name'];
  $block=$row['block'];
  $roomno=$row['roomno'];
$errmsg="";
$sucmsg="";
// $result=mysqli_query($conn,"SELECT count($regno) as total from leave where regno='$regno' AND status='Pending';");
// $data=mysqli_fetch_assoc($result);
// $count= $data['total'];


 ?>


 <?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
 if( isset($_POST['fromdate']) && isset($_POST['todate']) && isset($_POST['reason']) ){

 $fromdate=$_POST['fromdate'];
 $todate=$_POST['todate'];
 $reason=$_POST['reason'];
 date_default_timezone_set('Asia/Kolkata');
 $date = date('d-m-y');
 list($pday, $pmonth, $pyear) = explode('-', $date);
list($year1, $month1, $day1) = explode('-', $fromdate);
list($year2, $month2, $day2) = explode('-', $todate);

$sql = "SELECT * FROM leaverequests WHERE regno='$regno' AND status='Pending'";
if ($result=mysqli_query($conn,$sql)) {
    $count=mysqli_num_rows($result);

}

if($month2<$month1 || $day2<$day1 || $day1<$pday || $day2<$pday || $month1<$pmonth || $month2<$pmonth ){
$errmsg="*You entered wrong information";
}
else{
  if($count>=1){
  $errmsg="*You already had a leave";
  }
  else{

   require_once('../dbConnect.php');
 $sql="INSERT INTO `leaverequests` (`name`,`regno`,`block`,`roomno`,`fromdate`,`todate`,`reason`,`status`)VALUES ('$name','$regno','$block','$roomno','$fromdate','$todate','$reason','Pending')";
 $query=mysqli_query($conn,$sql);
 if($query){
   $sucmsg= '*Entry successful';
 }
 else{
   $errmsg= "*Error occoured";
 }
}
}
 }
 }


  ?>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="applyleave.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" pattern="[a-z A-Z]*" value="<?php echo $name; ?>" required disabled>
          </div>
          <div class="input-box">
            <span class="details">Reg No</span>
            <input type="text" placeholder="Enter your regno" pattern="[0-9]{2}[A-Z]{3}[0-9]{4}" value="<?php echo $regno; ?>" disabled required>
          </div>
          <div class="input-box">
            <span class="details">Block Name</span>
            <input type="text" placeholder="Enter your block name" value="<?php echo $block; ?>" disabled required>
          </div>
          <div class="input-box">
            <span class="details">Room no</span>
            <input type="number" placeholder="Enter your room " value="<?php echo $roomno; ?>" disabled required>
          </div>
          <div class="input-box">
            <span class="details">From</span>
            <input type="date" name="fromdate" id="fromdate" placeholder="Enter from date " required>
          </div>
          <div class="input-box">
            <span class="details">To</span>
            <input type="date" name="todate" id="todate" placeholder="Enter to date"  required>
          </div>
          <div class="input-box">
            <span class="details">Reason</span>
            <input type="textarea" name="reason" id="reason" placeholder="Reason"  required>
          </div>
        </div>

        <div class="button">
          <input type="button" value="Go Back" onclick="goback()">
          <input type="submit" name="submit" style="margin-left:85px;" >
        </div>
      </form>
      <span style="color: red;"><?php echo $errmsg; ?></span>
        <span style="color: green;"><?php echo $sucmsg; ?></span>
    </div>
  </div>

</body>
</html>
