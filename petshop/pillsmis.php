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
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">
        </head>
        <body>
        <header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
</header>
<div class="main-nav">
<ul>
    <h4>
                    <li><a href='index.php'>HOME</a></li>
                    <li><a href='behavioural.php'>BEHAVIOURAL</a></li>
                    <li><a href='parenting.php'>PET PARENTING</a></li>
					<li><a href='nutrition.php'>NUTRITION</a></li>
                    <li class="active"><a href='miscellaneous.php'>MISCELLANEOUS</a></li>
</h4>
</ul>
</div>
<div class="rub">
        <h1>Tablets, Pills Or Liquids</h1>
    <img src="img/parenting/pills.png" width="750" height="450">
    <p>The Doctor has just prescribed treatment for your companion. How to go about administering it in optimal conditions?
    </p>
<h3>Tablets</h3>
<p>
Many medicines come in the form of tablets or capsules and are not always easy to administer. Some recalcitrant animals are fiercely opposed to it.To give a solid medicine, with the left hand open its mouth, with the right hand, block the lower jaw and place the tablet behind the tongue. 

Do not make the mistake of lifting his head to make him swallow; keep it in a low or horizontal position.

If you do not succeed, you have the solution to wrap the capsule or the tablet of a food that it will consume easily. Watch for it, as a number of dogs tend to spit out if the taste is not to their liking. If you decide to mix the tablet in the kibble bowl, you are likely to find it at the bottom, intact without the dog having touched it.
</p>
<h3>Liquids</h3>

<p>
It is easier to give medicine in liquid form. No need to open the animal's mouth. You can pour the potion with a spoon at the intersection of the lower and upper lip, then run it down the throat. You can also introduce the liquid in a syringe (having previously removed the needle!) And proceeding in the same way as with the spoon.
</p>
<h3>Drops in the eyes</h3>
<p>
Lower the lower eyelid and put the eye drops in the eye, in the pocket area formed. Whatever treatment you wish to administer, always follow your veterinarian's instructions.</p>
        </div></body></html>