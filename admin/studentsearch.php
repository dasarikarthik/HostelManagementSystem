<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
	<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	 font-family: helvetica;
}



.wrapper{
  margin-top: 85px;
	/* min-height: 100vh; */
	display: flex;
	justify-content: center;
	/* align-items: center; */
}

.search_box{
	background: #643fef;
	/* position: relative; */
  height: 80px;
	padding: 15px;
	border-radius: 50px;
	display: flex;
}

.search_box .search_btn .btn{
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

.search_box .input_search {
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

/* *{
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: "Encode Sans Expanded",sans-serif;
} */
table {
width: 750px;
border-collapse: collapse;
margin:50px auto;
}

/* Zebra striping */
tr:nth-of-type(odd) {
background: #eee;
}

th {
background: #3498db;
color: white;
font-weight: bold;
}

td, th {
padding: 10px;
border: 1px solid #ccc;
text-align: left;
font-size: 18px;
}
.approvebtn{
  border-radius: 50px;
  background: #01bf71;
  whitespace: nowrap;
  padding: 10px 22px;
  color: #010606;
  font-size: 16px; */
   outline: none;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
  text-decoration: none;

}
/*
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

table {
    width: 100%;
}

/* Force table to not be like tables anymore */
table, thead, tbody, th, td, tr {
  display: block;
}

/* Hide table headers (but not display: none;, for accessibility) */
thead tr {
  position: absolute;
  top: -9999px;
  left: -9999px;
}

tr { border: 1px solid #ccc; }

td {
  /* Behave  like a "row" */
  border: none;
  border-bottom: 1px solid #eee;
  position: relative;
  padding-left: 50%;
}

td:before {
  /* Now like a table header */
  position: absolute;
  /* Top/left values mimic padding */
  top: 6px;
  left: 6px;
  width: 45%;
  padding-right: 10px;
  white-space: nowrap;
  /* Label the data */
  content: attr(data-column);

  color: #000;
  font-weight: bold;
}


}

/* .btn{
  background: #7A5CF0;
} */


</style>

  </head>
  <body>
<?php include 'header.php';?>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<form class="" action="studentsearch.php" method="post">
<div class="wrapper">
	<div class="search_box">
		<input type="text" name="regno" id="regno" class="input_search" placeholder="Enter student regno" pattern="[0-9]{2}[A-Z]{3}[0-9]{4}">
    <div class="search_btn"><input class="btn"  type="submit" name="submit" value="find"> </div>
<!--
    <i type="submit" name="submit" class="fas fa-search"></i> -->
  </div>
</div>
</form>

<table>
<thead>
  <!-- <tr>
    <th style="text-align: center;" colspan="6">Male</th>
  </tr> -->
  <tr>
    <th>Reg No</th>
    <th>Name</th>
    <th>Phone no</th>
    <th>Email</th>
    <th>Block</th>
    <th>Room no</th>
  </tr>
</thead>
<tbody>
  <?php
  if ($_SERVER['REQUEST_METHOD']=='POST'){
  $regno= $_POST['regno'];
  require_once('../dbConnect.php');
  $sql="SELECT name,regno,email,phoneno,block,roomno FROM users WHERE regno='$regno';";
  $query=mysqli_query($conn,$sql);
 while($rows=mysqli_fetch_assoc($query))
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
           }
        ?>










</tbody>
</table>

  </body>
</html>
