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
        <h1>Ways To Manage Food Allergies In Dogs</h1>
    <img src="img/parenting/foodallergy.png" width="750" height="450">
   <h3> What does a food allergy look like?</h3>

<p>Food allergy is defined as an immune-mediated reaction following food intake. Allergies are exaggerated immune responses to food particles. Food allergies often look like skin diseases. Food allergies usually do not affect a dog’s respiratory system, but manifest as something similar to atopic dermatitis. 
</p>

<h3>Signs of Food Allergies:</h3>
<p>
Itching & scratching (generalized or focal), bumps on skin, odor, red sore skin and secondary infections
Swelling & inflammation, with or without secondary infection
Bacterial or Yeast infections – as dogs scratch their itchy skin, they can get relapsing secondary infections when bacteria or yeast comes in contact with the inflamed skin. 
If corticosteroid treatment does not help beat the symptoms, it can mean that the issue is food allergy related. No response to other treatments is also one of the signs of adverse food reaction.  
Recurrent ear infection 
Diarrhea, Vomiting, or subtle manifestations such as increased frequency of defecation, soft-formed stool, flatulence etc
Certain comorbidities are also reported such as nasal discharge, respiratory distress, hypersalivation</p>
<h3>What causes food allergy in dogs:</h3>

<p>Food induced diseases can be due to hypersensitivities (IgE mediated), toxic reactions after ingestion of substances such as mycotoxins, xylitol etc, or metabolic reactions (from lactose intolerance, gluten sensitivity etc). Food induced hypersensitivity reactions can occur due to poorly digested protein. You might think your dog is a carnivore and cannot be allergic to meat. But most often dogs are allergic to animal meat protein sources such as chicken, beef as well as eggs, cow’s milk, soy, wheat etc. Beef, dairy products and wheat are most commonly reported as ingredients causing adverse food reactions in dogs. Proteins are changed into substances and recognized by the immune system as foreign invaders to be attacked. The resulting inflammation leads to gut issues, and skin disorders.</p>
        </div></body>
    </html>