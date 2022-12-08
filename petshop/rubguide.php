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
        <h1>Know Your Pet: Why Do Dogs Like Belly Rub?</h1>
    <img src="img/parenting/bellyrub.png" width="750" height="450">
        
        <p>One of the most blissful things about being a pet owner is cuddling and belly rubbing. Belly rubs are to dogs what hugs are to humans – a more intimate form of physical contact. 

Does your dog like belly rubs? Does your dog flip over and ask you to rub its belly as soon as you scratch its ears? It is an indication that they love you. Dogs like it as much as they want to chew on a bone or chase a cat. But ever wondered why. Why do they love it so much? Why do some dogs never ask for it? Is there any scientific logic? This article will answer all your questions.
</p>
<h2>Is it Submissive Behaviour?</h2>
<p>Well, many people label it as submissive behaviour. But do not forget that dogs show this behaviour only to those whom they love or trust. So, you can call it a sign that your dog trusts you if it asks you for a belly rub. Belly rub means that they are ready for social grooming, and they are showing their vulnerability, and it means they trust you. When they don’t sense any threat from you, they offer it this way.
From your dog’s posture, you can understand if it shows submissiveness or is asking for a belly rub. Dogs that actually want a belly rub will show you the following signs:  </p>
<ul>
    <li>Overall wiggly body postures</li>
    <li>Relaxed or open mouth</li>
    <li>Open or squinty eyes; they wouldn’t be staring at anything</li>
    <li>Light panting sounds or a quiet laugh </li>
</ul>
<h2>Why Do Dogs Love Belly Rub?</h2>
<p>First, because it feels good. Duh! Second, it is a place they can’t scratch or rub on their own. Third, it causes stimulation in hair follicles.<br>
The signs that a dog show for a belly rub is-</p>
<ul>
<li>They wiggle a lot, their tail fanning behind them.</li>
<li>They will come smiling at you, their mouth wide open and tongue flicking out.</li>
<li>Their eyes look bright and happy as if they are happy seeing you and want to show you some affection.</li>
<li>You can hear the dog making happy sounds, and you will understand that the dog is ready for a rub.</li>
<li>Their tail is the most tell-tale sign. If it’s tucked under, don’t touch the dog, and let it judge you. </li>
</ul>
<h2>How To Give a Good Belly Rub?</h2>

<p>Not that your dog will complain, but some dogs just give up on the habit if their parents do not know what their pet needs. Make sure that you are doing it right. Here are the steps to give your dog a nice belly rub.</p>
<ul>
<li>See if your dog is asking for one. The above signs will tell you if your pet is ready.</li>
<li>Look into your dog’s eyes. They know if you are relaxed and happy and, in a mood, to show some love. Sit in front of your furry friend. </li>
<li>Start rubbing their belly in slow circular motions, with your palms open. Don’t use nails. </li>
<li>If your dog loves it, it will lie down on its back. If it doesn’t, stop petting.</li>
<li>If your pet asks for it again by giving you its paw, it likes what you did. Do it again and use different motions to see what they love best. </li>
</ul>
<p>It is something personal between you and your furry pet. </p>

        </div>
        </body>
</html>