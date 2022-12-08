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
                    <li><a href='parenting.php'>PET PARENTING</a></li>
					<li><a href='nutrition.php'>NUTRITION</a></li>
                    <li class="active"><a href='miscellaneous.php'>MISCELLANEOUS</a></li>
</h4>
</ul>
</div>
<div class="rub">
        <h1>What Should I Play With My Kitten?</h1>
    <img src="img/parenting/playkit.png" width="750" height="450">
    <p>Kittens love to play, and it's great for their physical and mental balance.

No need to spend large sums  of money on the purchase of fancy toys: the kitten will have fun with nothing. Next to the classic ball of paper or the ping-pong ball, behind which the kitten can run for hours, there is the ball of wool and the famous fishing rod (a simple stick to which you hang a string with at the end a small object, for example a cork stopper, to shake in front of the kitten's nose).

Otherwise, kittens love tunnels.  If you have old boxes that are long enough, open both ends and the kitten will squeeze in. It's even better if you hide a little treat in the middle.

Kittens also like to jump and hide in large paper bags (especially not plastic).</p>
<p>If your cat doesn't go out, set up a cat tree near a window . It will serve as an observation post, a scratching post, a hiding place for the kitten.

Finally, you can buy or make a food or treat dispenser toy: the kitten has access to the food when it rolls the toy. It is ideal to keep the line!

Be sure to keep out of the kitten's reach anything that could be stinging, injuring, cutting, toxic  (including household products, green plants, medicines, etc.) Check regularly that the toys are not damaged.

Even if playing with your kitten is a moment of joy, try to remain firm on one rule : the kitten must not bite or scratch you. Teach him to control himself, saying a firm "no" and immediately stopping the activity if he exceeds the allowed limits.
</p></div></body>
</html>