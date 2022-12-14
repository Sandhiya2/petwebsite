<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Shopping Portal Home Page</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">
        <link rel="stylesheet" href="css/body.css">
		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">
        <style>
.contact
{
  float:left;
}
.contact h2{
  color: #1847B6 ;
  font-size:30px;
  text-decoration: underline #EFCF0A;
  margin-top: 20%;
  margin-left: 15%;
}
.contact p
{
  color: #1C2833;
  font-size:25px;
}
.form{
  float: right;
  margin-right: 20%;
  margin-top: 4%;
}
.form h2{
  font-size: 30px;
   text-decoration: underline #E3E2E0;
}
.form p{
  font-size: 18px;
}
.form input[type=submit]{
font-size: 16px;
background:black;
color: white;
font-weight: bold;
cursor: pointer;
outline:none;
width: 40%;
}

  </style>

	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>
<div class="contact">
       <h2>Petz World</h2>
<p><i style="font-size:30px;padding-left: 90px;color:#1847B6 ;padding-top:10px;" class="fa">&#xf041;</i>Mumbai</p>
<p><i style="font-size:30px;padding-left: 90px;color:#1847B6 ;padding-top:10px;" class="fa">&#xf095;</i>+91 9840059834, 8123456790</p>
<p><i style="font-size:30px;padding-left: 90px;color:#1847B6 ;padding-top:10px;" class="fa">&#xf0e0;</i>info@petzworld.com</p>
     </div>
     <div class="form">
       <h2>Write Us</h2>
       <p>Have a question or comment? send us a message or contact us by mail at:</p><br>
       <form> 
<p> 
<label for="name">Name</label><br><br>
<input id="name" v-model="name" type="text" name="name"> 
</p> 
<p> 
<label for="phone">Phone Number</label><br><br>
<input id="phone" v-model="name" type="number" name="phone"> 
</p>
<p> 
<label for="mail">Email</label> <br><br>
<input id="mail" v-model="mail" type="text" name="mail"> 
</p> 
<p> 
<label for="comment">Your Comment</label> <br><br>
<textarea cols="50" row="50"> </textarea>
</p> <br>
<p> 
<input type="submit" value="SUBMIT CONTACT"> <br><br>
</p> 
</form>
  </div> 
    </body>
</html>
