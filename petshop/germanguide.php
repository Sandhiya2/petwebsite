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
                    <li class="active"><a href='parenting.php'>PET PARENTING</a></li>
					<li><a href='nutrition.php'>NUTRITION</a></li>
                    <li><a href='miscellaneous.php'>MISCELLANEOUS</a></li>
</h4>
</ul>
</div>
<div class="rub">
        <h1>Dog Breed-German Shepherd</h1>
    <img src="img/parenting/german.png" width="750" height="450">
	<p>Could there be another dog who can do it all? German Shepherds are what we call canine rocket scientists - they're intelligent, courageous, affectionate, playful, and loyal like no other! 
	</p>
<h3>History </h3>

<p>Deutsche Schäferhund, or the German Shepherd Dog, hails from Germany, where they were used to herd livestock. Soon, the breeds intelligence, agility, speed, endurance, and formidable courage was used in police work. During the second world war, GOD'S were used by Nazis to round up Jews into concentration camps. In fact, Hitler's most beloved dog was a German Shepherd. Over the years, the GSD's have found their way to fame in almost every country, especially America, as Rin Tin Tin and Strongheart. 
</p>
<h2>About the Breed</h2>

<h3>Nutrition</h3>

<p>German Shepherds have diets tailored to meet their nutritional needs. However, you can also choose to feed them non-breed specific diets that are wholesome, balanced, and nutritious. Remember to pay special attention to feeding them calcium supplements to prevent arthritis and hip dysplasia as they grow older. Like with many large breeds, overfeeding and under exercising can do more harm than good - it leads to life-threatening obesity and supplementary problems like diabetes, hypothyroidism, and joint inflammation. Hence, keep treats to a minimum and feed in accordance with activity level and age. 
</p>
<h3>Grooming</h3>

<p>GSDs require bi-weekly de-shedding and a daily coat brushing to keep their fur from falling all over the place. They also need their nails trimmed to avoid bad posture and their ears cleaned to prevent ear infections. 
</p>
<h3>Exercise</h3>
<p>German Shepherds thrive on exercise. Think of it this way - exercising with you is what makes them want to wake up and look forward to the day! German Shepherds benefit from four hours (2 + 2) of daily aerobic exercise and two hours of mental stimulation. Physical exercising can take the form of running, agility, flyball, drafting, swimming, herding, hide and seek, playing with rope toys, fetch, and hiking. On the other hand, mental exercise can take the form of scent work, treasure hunts, obedience training, chew toys and puzzle toys.
</p>
<h3>Training</h3>
<p>GSDs are quick to learn and always eager to please. However, training is not optional and must be consistent and encouraged throughout a GSD's life. Since the breed can turn aggressive, training must begin early so that the dog understands what he is allowed to do and what he isn't. 
</p>
<h3>Health</h3>

<p>GSDs that are adopted from backyard breeders or puppy mills, i.e. those who do not have certified papers of adoption, tend to develop more health problems than others. However, the breed is predisposed to hip dysplasia, degenerative myelopathy, cancer, allergies, bloat, arthritis, and osteosarcoma. These health complications can be prevented with good calcium supplementation, frequent veterinary check-ups, and adoption from a reputable breeder.
</p>
<h3>Temperament</h3>

<p>GSDs need to be socialized from a young age if you want them to be calm and gentle around children, guests, and household pets. Since they are incredibly protective of their people, it is imperative to teach them who to be nice to, i.e. who is part of the family. 
</p>
<h3>Is this the right breed for me?</h3>
<ul>
<li>GSDs are an all-round working breed who are happiest when working with their parents. </li>
<li>They are loyal to a fault and easy to train.</li>
<li>GSDs are wonderful companions to children and other pets when socialized from a young age.</li>
<li>They are fiercely protective of their families.</li>
<li>They are extremely intelligent and always excited to play. </li></ul>
<p>
When you have so many qualities in one breed, it's hard not to fall in love with it over and over again. But remember to do your due homework on whether you'd be able to raise this breed with all its personality before deciding to adopt one
</p>
		</div>
	</body>
	</html>