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


</style>

  </head>
  <body>
<?php include '../header.php';?>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
	<div class="search_box">
		<input type="number" class="input_search" placeholder="Enter your room number">
    <div class="search_btn"><i class="fas fa-search"></i></div>
  </div>
</div>

  </body>
</html>
