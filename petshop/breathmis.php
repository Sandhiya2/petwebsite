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
        <h1>What Does Bad Breath In Dogs Mean?</h1>
    <img src="img/parenting/breath.png" width="750" height="450">
   <p> In 85% of cases, halitosis is a consequence of an infection of the oral cavity . It is caused by the activity of bacteria that multiply using sulfur-containing amino acids found in proteins in saliva, flaky cells and food debris. Bacterial metabolism is thus the source of volatile sulfur compounds responsible for the foul odour.

Also, the exhaled air can come directly from the digestive tract during belching. But most often, these are substances dissolved in the blood during digestion which diffuse from the pulmonary capillaries into the exhaled air. This is the explanation for the particular breath exhaled after consuming spices or garlic.
   </p>
<h3>How to prevent</h3>

<h3>Oral hygiene</h3>

<p>
The best is obviously to prevent bacterial multiplication . This can only be achieved by brushing several times a week in order to remove dental plaque as it goes, or by applying antiseptics in the form of gels or adhesive tablets.When halitosis exists, a sign that periodontal disease is more advanced, treatment involves surgical care. The goal is not simply to remove visible tartar as is often believed. This involves cleaning and disinfecting the pockets that form under the gum line , where food debris collects and where bacteria attack the supporting tissues of the tooth . The treatment ends with a polishing of the enamel to prevent the rapid reformation of the plaque.
</p>
<h3>Diet/Food</h3>
<p>
Wet foods have a soft structure that promotes the deposition of food particles . On the other hand, toys and hard and very fibrous foods to chew take part in the prevention of dental plaque thanks to the mechanical brushing that they allow, but unfortunately always in an incomplete way.

The likelihood of developing halitosis increases as the life expectancy of dogs and cats increases due to the diseases that accompany ageing. But bad breath is not an inevitable phenomenon: in this area as in all others, good hygiene and regular health check-ups can limit its incidence .
</p></div></body>
</html>