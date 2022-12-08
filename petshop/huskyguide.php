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
        <h1>Dog Breed-Siberian Husky</h1>
    <img src="img/parenting/husky.png" width="750" height="450">
    <p>In 1925, a group of Siberian Huskies saved Nome, Alaska, where teams of Siberian Huskies led sledges to deliver serum to people suffering from diphtheria in the blizzard. So, what can this breed do? Pretty much anything. They're the strong aristocrats of the dog world known for their speed, intelligence, and exceptional charisma. 
    </p>
<h3>History</h3>
<p>
The Chukchi people in Siberia developed the Husky to work with them in harsh weather conditions to hunt, pull sledges, and guard villages. This is a breed that was built for the Arctic; hence, living in hot weather is most undesirable. 
</p>
<h2>About the Breed</h2>

<h3>Nutrition</h3>

<p>Huskies are a hardy breed that can thrive on almost any type of diet. However, in order to keep them in good shape in the long run, it is best to choose a diet that is made up of fresh, wholesome ingredients in adequate proportion for the dog's age and activity level. Some Huskies suffer from hip and eye problems due to bad breeding - feeding them multivitamin supplements in consultation with a veterinarian can help correct this.
</p>
<h3>Grooming</h3>
<p>
Huskies need a weekly brushing and deshedding to avoid fur getting on furniture and clothes. Although they do not need to go to a professional groomer, at-home grooming is a must. Monthly ear cleans, nail trims, and teeth brushes are essential in keeping a husky in good shape. Moreover, if your Husky lives in the city and walks on pavements often, cracked paws are a common problem that needs prompt attention with paw care balms. 
</p>
<h3>Exercise</h3>
<p>
A Husky is a breed that isn't tired even after three hours of playing fetch! If not given more than necessary exercise, a Husky has the potential to destroy your house in ways you wouldn't consider possible. Misbehaviours galore when there is a lack of sufficient mental and physical exercise for a husky, and you guessed it, they hate sitting idle! That said, this is a dog that needs to be working all day and, if possible, all night as well. 
</p>
<h3>Training</h3>
<p>
Huskies are not the easiest to train because of their independent nature. They need to be met at a common ground when it comes to rules and obedience. Huskies benefit from positive reinforcement training practised every day with patience and perseverance.
</p>
<h3>Health</h3>
<p>
Huskies are a robust breed with little to no health issues. With routine health checkups, nutritious food, and adequate exercise, your husky will live a long healthy life.
</p>
<h3>Temperament</h3>
<p>
Huskies are playful, gentle, calm, and loving with all kinds of people - big or small. However, they do not take well to a household with other pets like birds, cats, or hamsters.
</p>
        </div></body>
        </html>