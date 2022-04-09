<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
	<!-- <style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Montserrat', sans-serif;
}



.wrapper{
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
}

.search_box{
	background: #643fef;
	position: relative;
	padding: 15px;
	border-radius: 50px;
	display: flex;
}

.search_box .search_btn{
	width: 50px;
	height: 50px;
	border-radius: 50%;
	background: #7a5cf0;
	display: flex;
	justify-content: center;
	align-items: center;
	color: #fff;
	margin-left: 15px;
	cursor: pointer;
}

.search_box .input_search{
	outline: none;
	border: 0;
	background: #7a5cf0;
	border-radius: 50px;
	padding: 15px 20px;
	width: 300px;
	height: 50px;
	color: #fff;

}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

::placeholder {
  color: #fff;
}

::-webkit-input-placeholder {
  color: #fff;
}

:-ms-input-placeholder {
  color: #fff;
}


</style> -->
<?php       session_start(); ?>
<?php

  $regno = $_SESSION['regno'];
  require_once('../dbConnect.php');
  $sql="SELECT gender,block,roomno FROM users WHERE regno='$regno';";
    // $sql="SELECT regno,name,email,phoneno,block,roomno FROM users WHERE ";
  $query1=mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($query1);
  $gender=$row['gender'];
  $block=$row['block'];
  $roomno=$row['roomno'];
  $sql="SELECT regno,name,email,phoneno,block,roomno FROM users WHERE gender='$gender' AND block='$block' AND roomno='$roomno'";
  $query=mysqli_query($conn,$sql);


 ?>

<style media="screen">
table {
    border-collapse:separate;
    border:solid black 1px;
    border-radius:6px;
    margin-left: 30%;
    margin-top: 15px;

}

td, th {
    border-left:solid black 1px;
    border-top:solid black 1px;
        padding: 10px;
}

th {
    background-color: #292929;
    border-top: none;
    color: white;
}

td:first-child, th:first-child {
     border-left: none;
}
</style>
  </head>
  <body>
<?php include '../header.php';?>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<div class="tablediv">


<table align="center" >
	<tr>
		<th colspan="6"><h2>Student Record</h2></th>
		</tr>
			  <th> RegNo</th>
			  <th> Name </th>
			  <th> Email </th>
			  <th> Phone no </th>
        <th> Block </th>
        <th> Room no </th>

		</tr>

		<?php while($rows=mysqli_fetch_assoc($query))
		{
		?>
		<tr> <td><?php echo $rows['regno']; ?></td>
		<td><?php echo $rows['name']; ?></td>
		<td><?php echo $rows['phoneno']; ?></td>
		<td><?php echo $rows['email']; ?></td>
    	<td><?php echo $rows['block']; ?></td>
      	<td><?php echo $rows['roomno']; ?></td>
		</tr>
	<?php
               }
          ?>

	</table>
</div>
  </body>
</html>
