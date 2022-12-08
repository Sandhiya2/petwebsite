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
        <h1>Dog Breed-Indian Spitz</h1>
    <img src="img/parenting/splitz.png" width="750" height="450">
        <p>Clever, charismatic, and content, the Indian Spitz is one happy-go-lucky pupper! The Indian Spitz is a dog that always looks like it is smiling and is known for its intelligence, loyalty, and sensitivity. A breed unlike others, the Indian Spitz is one of the few breeds that made it to the silver screen in a Bollywood movie titled 'Hum Aapke Hain Kaun', where an Indian Spitz by the name of 'Tuffy'. </p>
        <h2>About the breed</h2>
        <h3>Nutrition</h3>
        <p>Indian Spitz are a hardy breed that thrives on any diet - wet or dry. They must be fed a good-quality diet that is nutritious, balanced, and wholesome, with all required nutrients in appropriate balance for their age, size, and activity level. You can choose to start them on supplements as early as six months old or wait for them to transition into an adult dog diet. Supplements help with growth, repair, and maintenance of tissues and organs, hence preventing infection and illness.</p>
        <h3>Grooming</h3>
        <p>Indian Spitz are hard to groom during the shedding season, which is when they need to be taken to a professional groomer. Otherwise, they do well with daily brushing and weekly deshedding. It is also important to clean their ears, brush their teeth, and trim their nails once a week.
</p>
<h3>Exercise</h3>
<p>They get yappy if not exercised. That tiny body comes with boundless energy; the Indian Spitz thrives on different types of exercise - running, walking, swimming, agility, flyball, hiking etc. As long as they get out for more than two hours a day to spend all that energy, they will be calm indoors. When they aren't exercised, Indian Spitz tends to channel unused their energy onto being destructive and vocal - chewing, nipping, barking, howling etc.

</p>
<h3>Training
</h3>
<p>They enjoy training, but at times, they are stubborn because of their intelligence and independent thinking. With patient, consistent, and short training sessions, the Indian Spitz can be taught the rules of the house. 
</p>
<h3>
    Health
</h3>
<p>
Indian Spitz are a hardy breed that suffers from minimal health complications. However, as they age and if not taken for regular checkups, they can develop cataracts, obesity, floating kneecaps, skin infections, and cancer.

</p>
<h3>
Temperament

</h3>
<p>
Gentle enough to not hurt a fly, the Indian Spitz makes one great family pet. They enjoy the company of adults and children alike and do not mind other household pets too. 

Is this the right pooch for me?</p>
<ul>
<li>They are perfect for apartment living</li>
<li>Indian Spitz do not require much exercise</li>
<li>They are perfect for Indian weather</li>
<li>They're playful, affectionate, and gentle pets</li>
<li>Indian Spitz are a hardy, long-lived breed</li>
</ul>
    </body>
</html>