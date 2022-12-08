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
        <h1>Early Signs Of Dog Arthritis You Shouldn’t Miss</h1>
    <img src="img/parenting/signs.png" width="750" height="450">
   <p> If you think that arthritis is a disease that only attacks humans, you couldn’t be more wrong. Your beloved pets are as prone as you or any older person to be affected by this problem. It is known as osteoarthritis or simply dog arthritis, and it affects your dog’s joints and affects its daily life. Sadly, it can’t be treated. But if you see early signs of dog arthritis, you can take proper care of your furball. 
   </p>
<h2>What is Arthritis?</h2>
<p>
Bones are not directly connected, but they have soft cushions like padding at their ends where they meet each other. This soft tissue is known as cartilage. When this cartilage starts wearing off or gets damaged over time, it causes pain as joints are not as smooth as they were. It causes swelling and pain as the pets move. The disease affects the joints such as knees, hips, legs, shoulders, etc. It is only by noticing the early signs of dog arthritis that you can stop your pet’s suffering. 
</p>
<h2>Some Early Signs of Dog Arthritis</h2>

<p>Dogs don’t always show their pain. They are very good at hiding it. Thus, you will have to look for subtle and behavioral signs to see if your dog is suffering from the early stages of arthritis.
</p>

<h2>Limping</h2>

<p>If the disease affects your dog’s legs, you will often see it limping or walking on one leg more than the other. Depending on the areas affected, you will see them walking slowly or showing stiffness in getting up or sitting down. 
</p>

<h2>Lesser Movement</h2>

<p>If they feel pain while walking, sitting, or running, they will stop moving. While once your dog doesn’t stop chasing you around the house, they will start looking at you with sleepy eyes. You can see them reluctant to get up the stairs, climb upon your bed, get on the sofa, jump into the car trunk, etc., which were some of his favourite things to do earlier. If you see them sitting in a place, reluctant to move, blame arthritis and make an appointment with the vet. 
</p>

<h2>Changed Behaviour</h2>
<p>
You are the best judge of your dog. If it starts playing less than earlier, prefers less noisy areas of the house, or keeps sitting in its bed near the fire, it’s time to see what’s wrong. When dogs know something is wrong, they don’t tell you. Instead, they get silent, bearing the pain alone. 
</p>

<h2>Biting Or Whining on Touch</h2>

<p>Constant pain causes sensitivity in the affected body parts. If you suspect your dog is suffering from arthritis, touch its joints. If the dog yelps, tries to shoo you away or bite you, your suspicion is confirmed. There is a problem.  
</p>

<h2>Licking</h2>

<p>While licking is a part of the grooming process, it is also a sign that there is a problem and your dog is trying to fix it by licking it. Dogs try to lick their wounds or irritating surfaces to heal them. If you see your dog chewing or licking particular areas more often, take it to the vet.
</p>
<h2>Irritation</h2>

<p>In a healthy body resides a happy mind. But, if your dog is not healthy, how can it be happy? They may sound irritating or try to ward you off or bite you if you touch affected spots.
</p>
<h2>Tired-looking Eyes</h2>

<p>Constant pain wears off your dog’s energy and makes them look tired all the time. If your dog is constantly tired, it’s time to take the problem seriously.
</p>
<h2>What Causes Dog Arthritis?</h2>

<p>Apart from the cartilage damage, some other factors can also cause arthritis in dogs. 

A fracture in the past
Obesity, if your dog gains unusual weight with age, causes joints to bear extra pressure, which causes wear and tear in the cartilage.
Dysplasia causes improper development of joints and arthritis at a later stage.
A past ligament rupture.</p>
        </div>
    </body></html>