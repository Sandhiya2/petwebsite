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
                    <li class="active"><a href='behavioural.php'>BEHAVIOURAL</a></li>
                    <li><a href='parenting.php'>PET PARENTING</a></li>
					<li><a href='nutrition.php'>NUTRITION</a></li>
                    <li><a href='miscellaneous.php'>MISCELLANEOUS</a></li>
</h4>
</ul>
</div>
<div class="rub">
        <h1>Top Tips On How To Calm An Angry Cat</h1>
    <img src="img/parenting/angry.png" width="750" height="450">
    <p>Cats look small, cute, and playful. But imagine an angry little ball of fur. Are all cats bouncy all the time? Certainly not. While some cats may have angry episodes, some are aggressive by nature. Taming an angry cat can be challenging. It seems rather difficult to calm them down when the felines get annoyed. And that's the only thing that makes cats mysterious. They are playful and loving all the time, but they can get extremely aggressive when they get angry or upset. 

However, to calm them down, you have to find different approaches because what works for your cat may not work for your neighbour's cat. Different cats have different personalities, so there cannot be one solution that fits all. 

But here, we are going to share some tips that will help you understand how to calm a cat down when he is angry, aggressive, or furious with you. But first, we are going to look at the cause of his anxiety.

    </p>
<h3>What Makes a Cat Angry?</h3>
<p>
Sometimes why your cat is anxious, it depends on how s/he is feeling about the present situation or it could be something that has happened in the past. There could be a mix of different reasons. Sometimes it is fear, pain, or conflict with another cat that make them angry. Here are a few things you need to consider when you are trying to understand why your cat is upset:
</p>
<h3>
A Change in Routine</h3>
<p>
Cats are habitual creatures, and they do not like small changes in their routine because it makes them nervous. Sometimes, even a small change in the routine such as you coming in late because you were working late at night or have not returned home last night can make them mad! 
</p>
<h3>Poor Memory </h3>
<p>
Sometimes, age-related concerns can make your cat violent. As they age and as their memory gets worse, they might get aggressive. 
</p>
<h3>Your Long Absence</h3> 

<p>There are instances of cat owners noticing anger, when they travel for long periods of time. Even if they are well taken care of, your long absence can annoy them. 
</p>
<h3>Past trauma </h3>

<p>If something happens to your cat in the past and the current situation triggers that trauma, she can get anxious right away. Try to observe their mood when they are near certain people, hear a certain sound, or find a certain object. 
</p>
<h3>Illness </h3>
<p>
This one is a no-brainer. When your cat is not feeling well, he will show aggressiveness so that you can understand that he is not in himself right now. 

There are a few signs an angry cat can show, and that's when you recognize that your cat is not happy at all. If your cat matches these signs, it's time to move on to the next step and find out how to make him calm again. 
</p>
<ul>
<li>Frequent growling</li>
<li>Not showing interest in favourite toys anymore</li>
<li>Refusing to come out while hiding</li>
<li>Biting when you try to pet them</li>
<li>Clawing the furniture</li>
<li>Not eating their favourite meal</li>
<li>Twitching their tail</li>
<li>Their ears are flattened back or sticking out</li>
<li>Purring </li>
</ul>
        </div></body>
        </html>