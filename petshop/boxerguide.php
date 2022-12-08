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
        <h1>Dog Breed-Boxer</h1>
    <img src="img/parenting/boxer.png" width="750" height="450">
    <p>Do you know how the Boxer got its name? Watch a Boxer jump up with his forepaws in the air - it reminds you of a boxer in the ring. Boxers are mischievous, cheerful, lively dogs who enjoy life to the fullest - no regrets!</p>

<h3>History</h3> 

<p>The Boxer’s history can be traced back to the early 20th century where they were bred down from the German Bullenbeisser. The Bullenbeisser was used for hunting large game like boar, elk, bear, and bison. The Boxer, today, is as versatile as his ancestor. They are used as police dogs, war dogs, cattle dogs, guide dogs, and watchdogs. 
</p>

<h2>About the Breed</h2>

<h3>Nutrition </h3>

<p>High-quality diets that are wholesome, balanced and nutritious can help a Boxer grow well into adulthood. Remember, however, that diets must be age-appropriate to ensure optimum growth and in accordance with activity level to avoid obesity. In addition to diets, it is best to add calcium supplements to a Boxer’s daily meals to prevent osteoarthritis. 
</p>
<h3>Grooming </h3>

<p>A Boxer’s short coat requires very little attention. A bi-weekly brushing and a weekly de-shedding should keep him looking his best. Bathing is occasionally needed since they are generally relatively clean and odourless. Unless worn down on a hard surface, nails need to be trimmed once a month along with a monthly teeth brushing to prevent the build-up of tartar.
</p>
<h3>Exercise</h3>

<p> Boxers thrive on exercise to let out all their unused energy. In fact, Boxers are best known for their endless energy, so much so that they won’t feel tired even after three hours of fetch! That said, Boxers cannot live in apartments or small houses. They need room to roam even if you give them sufficient daily exercise. Boxers excel at all kinds of sports - agility, fly ball, drafting, herding, swimming, running etc.
</p>
<h3>Training</h3>

<p>Start training them, and they’ll give you the ‘I’m not doing it’ look. Boxers are, by nature, independent and rather carefree. As stubborn as they are, they are excellent problem solvers and very intelligent. Training a Boxer isn’t easy, especially if they’re older than six months. But, with consistency and positive reinforcement, you can have a well-behaved dog. 
</p>
<h3>Health</h3>
<p>
Boxers can overheat easily and hence need to be kept indoors with lots of water or fed a wet food diet during hot days. They are prone to hip and elbow dysplasia, cataracts, thyroid deficiency, heart disease, respiratory problems, and cancer. 
</p>
<h3>Temperament </h3>
<p>
Boxers need good socialisation from day one to be mild-mannered house dogs. They can be good family dogs if introduced to everything from a young age. 
</p>
<h3>Is the Boxer right for me?</h3>
<ul>
<li>Boxers are versatile breeds</li>
<li>They are low maintenance </li>
<li>They make excellent watchdogs</li>
<li>Boxers are always entertaining to watch</li>
<li>They are loyal to a fault</li>
</ul>
<h3>Why might this breed be unsuitable for my lifestyle?</h3>
<ul>
<li>Boxers need to be exercised often </li>
<li>They can be boisterous and stubborn at times</li>
<li>They need room to roam</li>
<li>Boxers are aggressive chewers </li>
<li>They can suffer from respiratory and other health complications</li> 
</ul>
<p>Boxers are affectionate, intelligent, enthusiastic and rather interesting breeds who take pride in being one of a kind!</p>
        </div>
    </body></html>