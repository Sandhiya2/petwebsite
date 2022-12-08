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
        <h1>Dog Breed-Shih Tzu</h1>
    <img src="img/parenting/shih.png" width="750" height="450">
    <p>This precious package of a dog is one of the top breeds in India. So, what makes these lovable dogs so popular? A Shih Tzu's luscious coat that even humans envy? Or her dark brown eyes that make you fall in love every time? It's hard not to fall for a Shih Tzu. Did you know - a Shih Tzu is more closely related to the wolf than a majority of dog breeds?
    </p>
<h3>History</h3>

<p>Shih Tzus were bred in Tibet as lap dogs where they crossed a Pekinese with the Lhasa Apso. The result was a dog who earned the title of 'Lion Dog' or Shih Tzu in the Chinese imperial court. 
</p>
<h2>About the Breed </h2>

<h3>Nutrition</h3>

<p>Shih Tzus do well on a diet that meets their dietary requirements according to age. Some of them are prone to obesity, so it is important to count calories and watch your Shih Tzus weight. Obesity can have ugly consequences on the dog's health and shorten its quality of life. Start your pup on supplements as early as possible to prevent issues like arthritis, skin infections, cataracts etc. 
</p>
<h3>Grooming</h3>

<p>Their long coat requires daily brushing with a slicker brush or a double-sided brush with flexible pins to remove layers of dirt. You can bathe your Shih Tzu once in 21 days unless visibly dirty or smelly. It is best to take your Shih Tzu to a professional groomer during shedding season to get her fur clipped, nails trimmed, and ears cleaned. You can choose to do this at home as well, along with brushing her teeth. 
</p>
<h3>Exercise</h3>
<p>
Two brisk one hour walks a day should keep a Shih Tzu physically healthy. If they don't enjoy walks, you can exercise them indoors with toys, treasure hunts, agility etc. 
</p>
<h3>Training</h3>
<p>
If you start early, they are a pleasure to train. If you start late, they begin to show their stubborn side. When it comes to training Shih Tzus, praise and patience is key to getting them to understand and listen to what you're saying.
</p>
<h3>Health</h3>
<p>
Shih Tzus are fairly healthy but occasionally suffer from hip dysplasia and floating knee caps. Some Shih Tzus also experience problems with the eye - retinal atrophy, corneal dryness, cataracts, and retinal detachment from excessive exposure to air because their eyelids are unable to close entirely. 
</p>
<h3>Temperament</h3>

<p>Shih Tzus are known to be wonderful house pets for their personality and temperament. They enjoy being with their family and won't have anything but that! A Shih Tzus goofy, adorable, gentle, and calm temperament is most loved by people who share their homes with it. 
</p></div></body>
</html>