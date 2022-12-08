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
        <h1>How To Exercise Your Dog With Joint Problems?</h1>
    <img src="img/parenting/exercise.png" width="750" height="450">
    <p>Does your dog suffer from painful joint problems? As he stretches every bit of his leg to keep in tandem with your footsteps, you can most easily notice the pain in his eyes. Joint problems are almost too common in dogs these days - dogs anywhere between three to fifteen years can suffer from joint inflammation. However, a rather harmful myth that dog parents follow is the fact that dogs with joint problems need to stop exercising. 

Exercising, regardless of whether your dog has joint problems, is as essential to their well-being as nutrition. The only problem lies in what kind of exercises your dog is indulging in and for how long. 
    </p>
<h3>Why is it important to exercise your dog with joint problems?</h3>
<p><b>
Better Mobility </b>- Imagine a car that is left to rust with absolutely no use. Over time, the car has trouble starting and getting from place to place, right? It's the same with the animal body. The more it sits idle, the far more likely it is to stop working smoothly. Exercising a dog when they have joint problems is always beneficial, so long as you choose the right type of exercise and how long it has to be done for.
</p>
<p><b>Lesser Pain </b>- Activities like swimming, i.e. hydrotherapy, is known and appreciated around the world for their benefits in helping dogs with joint problems ease their pain. Since swimming is a no-impact exercise, it puts no pressure on a dog's joints and encourages movement without pain. 
</p>
<p><b>Decreases chances of obesity</b> - Obesity and joint problems are by far the worst combination of pain. When dogs with joint problems are exercised regularly, they have less of a chance of becoming obese.
</p>
<p><b>Keeps body active</b> A body that is active has all organs working at their best as opposed to no exercise when organs work at a sluggish pace. 
</p>
<p>Steer clear of destructive behaviour: Exercising encourages calmer behaviour because a dog has expended all of its energy through exercise. In addition to this, playing with interactive toys can help to beat boredom and stop destructive behaviour. 
</p>
<h2>How to exercise a dog with joint problems?</h2>

<h3>Swimming</h3>
<p>Swimming is a no-impact activity and non-concussive activity. It allows your dog to enjoy exercising without putting stress or pressure on joints and tendons. This is because when underwater, the water bears most of your dog's weight and supports his/her body, thereby relieving their skeletal and muscular system from the jarring impact that could occur from exercising on land. In addition to this, swimming encourages movement of the whole body, i.e. all the muscles, as opposed to the unidirectional movement of muscles when a dog walks, runs, jogs, fetches etc. This multi-directional movement of muscles improves overall range of motion and is an excellent rehabilitation exercise for dogs with arthritis, hip dysplasia, joint inflammation, bone cancer, or neurological injury.
</p>
<h3>Slow, yet frequent walks</h3>
<p>Walk your dog slowly for half an hour every three hours. Slow walks are a low impact exercise that can benefit a dog when done correctly. It would be best for your dog to walk on a soft surface like that of grass or wet mud as opposed to hard surfaces like tarred roads or slippery floors.
</p>
<h3>Obedience Training</h3>
<p>Obedience training is a classic way of exercising a dog with joint problems. You can teach your dog commands that encourage moving his body in different directions for a short period of time, such as 'come', 'leave it. 'drop it', etc. Remember not to engage in unidirectional training exercises like sit, lay down, fetch etc.
</p>
<h3>Scent Work</h3>
<p>Hide treats around your garden or inside your house in easily accessible yet challenging places like bookshelves, beneath the mud in pots, under the carpet, behind the sofa etc. Then ask your dog to 'go find' all the treats. This way, your dog is using all of his/her muscles, including those that work his/her brain, to find the treats. 
</p></div></body></html>