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
        <h1>Dog Breed-Chow Chow</h1>
    <img src="img/parenting/chow.png" width="750" height="450">
    <p>Loyalty, charisma, and a whole lotta love make up a Chow's personality. A face so smushy, it makes you want to cuddle all day long! This bona fide head-turner is born with 44 teeth compared to the average dog, who have 42 teeth - a trait the Chows share with another mammal - the bear. So, are you ready to bring this warm, loving, free-spirited dog home? 
    </p>
<h3>History</h3>

<p>Some people like to believe that Chows are a cross between and lion and a bear because of their looks and personality. But, Chows originated in ancient China over 2000 years ago, making it one of the oldest dog breeds known. In fact, Chows are an integral part of pottery from the Han Dynasty. The Chow was bred from the Samoyed, Elk Hound, Pomeranian, and Keeshond to be a versatile all-round working breed. The Chinese used them for hunting, drafting, guarding, and warding off evil spirits. 
</p>
<h2>About the Breed</h2>
<h3>Nutrition</h3>

<p>Chow Chows need around 1000 to 1300 calories a day and do well on a wholesome, nutritious diet consisting of protein, fat, fibre, vitamins, minerals in optimum quantities. They genetically differ from other breeds in the way that they need three small meals instead of two large meals. Since the breed is prone to hip dysplasia, it is best to start them on calcium supplements from puppyhood. Besides this, you can choose to feed your Chow multivitamin supplements that help with eye and skin health. 
</p>
<h3>Grooming</h3>
<p>
Grooming a Chow is going to take significant effort on your part. Because they are heavy shedders, Chows need frequent trips in a year to the groomers. At home, they require a daily brushing and a weekly de-shedding, teeth brush, nail clip and ear clean.  
</p>
<h3>Exercise</h3>
<p>
Chows are avid athletes and need sufficient exercise to keep them from gaining unnecessary weight. You can choose to rotate your activities or stick to one that your Chow loves best. Beneath all the fluff, it is hard to know whether your dog is at the right weight for her age, which is why it is best to weigh her once in three months. Never skip out on exercise because obesity can predispose your Chow to several health problems - some of which are irreversible and shorten the dog's life. 
</p>
<h3>Training</h3>
<p>
They need someone with good experience in handling independent-minded dogs. Chows, as obedient as they are, need patience and positive reinforcement training to get them to understand why following rules are important. Apart from this, Chows must be socialised from puppyhood to keep them from becoming aggressive around unfamiliar things or people. 
</p>
<h3>Health</h3>
<p>
Hip and elbow dysplasia, obesity, cancer, cataracts, and entropion (where the eyelids roll inwards) are common health problems most Chows face. It is essential to have routine checkups done at the vet, exercise your Chow sufficiently, and start early on supplements to prevent or slow the progression of such diseases. 
</p>
<h3>Temperament</h3>
<p>
They are best-suited for families with children above twelve years old since Chows do not take well to the energy of young children. They are also not recommended for families with other pets like cats and birds because of the breed's high prey drive. Chow Chows are instinctive, protective, and aloof when it comes to strangers, but with the family, they are gentle, calm, and even-tempered cuddly teddy bears! 
</p></div>
    </body>
    </html>