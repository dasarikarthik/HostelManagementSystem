<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;700&display=swap" rel="stylesheet">
	<style>
  *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: "Encode Sans Expanded",sans-serif;
  }
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
</style>
<?php

  require_once('../dbConnect.php');
  $sql="SELECT name,regno,email,phoneno,block,roomno FROM users WHERE gender='male';";
    // $sql="SELECT regno,name,email,phoneno,block,roomno FROM users WHERE ";
  $query=mysqli_query($conn,$sql);


 ?>
</head>
  <body>
    <?php include 'header.php';?>
  <table>
  <thead>
    <tr>
      <th style="text-align: center;" colspan="6">Male</th>
    </tr>
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


  </tbody>
</table>
<!--
female -->
<?php

  require_once('../dbConnect.php');
  $sql="SELECT name,regno,email,phoneno,block,roomno FROM users WHERE gender='female';";
    // $sql="SELECT regno,name,email,phoneno,block,roomno FROM users WHERE ";
  $query=mysqli_query($conn,$sql);


 ?>
<table>
<thead>
  <tr>
    <th style="text-align: center;" colspan="6">female</th>
  </tr>
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


</tbody>
</table>



  </body>
</html>
