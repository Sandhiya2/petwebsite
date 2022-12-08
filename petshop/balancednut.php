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
					<li class="active"><a href='nutrition.php'>NUTRITION</a></li>
                    <li><a href='miscellaneous.php'>MISCELLANEOUS</a></li>
</h4>
</ul>
</div>
<div class="rub">
        <h1>Balanced Nutrition</h1>
    <img src="img/parenting/balance.png" width="750" height="450">
    <p>Can my dog eat the same food as I can? How do I make sure I give my dog everything it  needs? How do I even know what my dog needs? 

These are some of the questions so many pet parents ask themselves - questions we get all  the time when they look for guidance.

There is not  one right way to feed your dog - there are many ways to make sure your dog's nutrient  needs are met. 

But today instead of looking at what different foods do in the body and which nutrients they  supply, let us look at how our dogs bodies actually work first. That way we can understand  which functions we need to support our dogs’ diet and find our own way to make the  diet work long term! 


Another reason why it helps to understand your dogs’ body from the inside out first, is that  this understanding will enable you to make more confident decisions on your own and not  always rely on outside advice that might confuse you even more or is from doubtful  sources. Getting to know your puppy takes a lot of effort but it is so very rewarding as well  in the long run! 


Getting to the actual topic: First we will talk about our dog's jaw - how is it build and what  does that teach us about the food we should feed? A dogs’ jaw gives us a lot of insight into the perfect diet - they have long and pointy teeth in  the front and sharp molars in the back. 

That actually is the typical anatomy of an animal that is meant to eat meat protein in their  diet. The basic functions of the teeth are to tear the food apart. </p>
<p>ALA is found in green leafy vegetables as well as flax, hemp, chia and other plant oils.  The ALA needs to be converted to eicosapentaenoic acid, EPA, and docosahexaenoic  acid, or DHA. EPA and DHA are the active forms of Omega-3 fatty acids.  Herbivores and omnivores can convert plant based ALA sources to EPA and DHA through  a series of enzymatic reactions. Dogs can only convert approximately 5 to 15 percent of  the ALA sources so they need animal sources of Omega 3. 

This is just another example of why offering different sources of different and the ‘same’  nutrients is important, whether you mix it in one meal or over time. There is no one food that he has to eat to be healthy, there just have to be certain aspects  and nutrients / textures provided and you will find the ones that suit him and you.</p>
        </div></body></html>