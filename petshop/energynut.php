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
        <h1>Puppy's Energy Requirements</h1>
    <img src="img/parenting/energy.png" width="750" height="450">
    <p>The growth of the puppy is a delicate stage because it includes: growth in size, evolution of weight, building of the skeleton and development of muscles and organs.

In puppies, the need for energy is much greater than in adult dogs because their growth and maintenance needs add up. At the start of its growth, the total energy requirement is at least doubled compared to that of an adult dog.


To function, the animal's body needs energy of animal or plant origin, which it draws from the food it consumes. The amount of energy needed to compensate for the body's daily energy losses varies according to age, lifestyle, breed, physical activity or even physiological state 

The puppy requires the most energy at the start of its growth ; however, as his digestive system gradually develops, he is not yet ready to assimilate large amounts of food. It is therefore necessary to provide him with a food of growth which contains a maximum of calories in a volume of restricted ration in order to avoid him digestive disorders which could lead to diarrhea.

Depending on the dog's adult size, the growth period varies: it is shorter in puppies of small breeds (10/12 months), and extends up to 18/24 months for large and very large puppies. . A large breed puppy reaches 80% of its adult weight around the age of 8 months, then growth slows down markedly. Because of this, nutritional errors during growth have much more serious consequences in a large breed puppy than in a small breed puppy. The owner will have to take care to control the daily ration well so as not to encourage a too rapid weight gain having incidences on the risks of osteo-articular disorders.


To best meet the dietary requirements of your puppy and promote his maintenance in good health, it is essential to offer him a growth food that will cover his high energy needs while containing all the other nutrients perfectly adjusted to the needs of his growth.</p></div></body></html>