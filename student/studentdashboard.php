<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="..\css\studentdashboard.css">

    <script type="text/javascript">
      function applyleave(){
        window.location.href ="applyleave.php";
      }
      function roomdetails(){
        window.location.href ="studentroomdetails.php";

      }
      function searchroommates(){
        window.location.href ="roommatesearch.php";

      }
    </script>
  </head>
  <body>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- about -->

<?php include '../header.php';?>


<!-- end about -->
<div class="wrapper">

   <div class="content">
      <!-- card -->
      <div class="card" onclick="searchroommates()">

            <div class="icon"><i class="material-icons md-36">search</i></div>
            <p class="title">Find Roommates</p>
            <p class="text">Know your roommates.</p>

      </div>
      <!-- end card -->
      <!-- card -->
      <div class="card" onclick="roomdetails()">

            <div class="icon"><i class="material-icons md-36">description</i></div>
            <p class="title">My Room Details</p>
            <p class="text">Check your room details.</p>

      </div>
      <!-- end card -->


      <!-- card -->
      <div class="card"  onclick="applyleave()">

            <div class="icon"><i class="material-icons md-36">add</i></div>
            <p class="title">Apply Leave</p>
            <p class="text">Apply for leave.</p>

      </div>
      <!-- end card -->

   </div>

</div>



  </body>
</html>
