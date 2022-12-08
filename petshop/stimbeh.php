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
        <h1>Tips For Keeping Your Indoor Cat Mentally Stimulated</h1>
    <img src="img/parenting/stim.png" width="750" height="450">
  <p>  If you have a cat at home, then you know that it is the safest place to keep your feline pet there. But safety is not everything that your cat wants. He wants entertainment from you, things that keep them mentally stimulated. Because indoor cats are easily bored since they are not in contact with other creatures of their species. It is easy to get stressed out when you are not meeting your friends. And since you are their mother and best friend, you need to do something to keep them from being mentally frustrated. In this post, we are going to share 5 vital mental stimulation tips for indoor cats to make them happy. 
  </p>
<h3>Talk to Your Cat</h3>
<p>
Some cats don't like it when you touch them, and in those cases, talking to your cat will be really thoughtful. Talking to your cat might sound silly to some non-cat owners, but it creates a bond between the pet and the owner. You should talk to your cat like you talk to a child or a little baby, bending to his level and keeping yourself at the normal distance where he can listen to what you are saying. You don't have to say meaningful things to him, but make sure to talk softly and not in a high pitched voice, keep your tone relaxed and don't always stare into his eyes because that could make him feel threatened. Also, try to blink when your cat has blinked at you after what you just said because it would show that you are relaxed, just like him.
</p>
<h3>Play Hide n Seek</h3>
<p>
It's easy to place the food in his bowl and ask him to eat it. But you know, cats are natural hunters, and if you can hide the food somewhere and ask him to find out, it will make him happier. Don't hide the food somewhere you know he can’t find, or in an obvious place where you know she can obviously find it. Start playing the game from their napping spots to a branch of a tree or somewhere a little unexpected. You can play puzzles with the foods and treat them with something bigger when they win the game. 
</p>
<h3>Adopt Another Cat</h3>
<p>
Another best way to make your cat happy is to bring home another feline beauty. It is natural that you cannot spend enough time with your friend because of course, you have a lot of things to do. But your cat feels lonely sometimes, and if you gift him with another cat, then she will like the company and will be thankful to you for it. Moreover, cats are more comfortable with each other; they play with each other and mentally challenge each other. But when they fight, that’s all on you.
</p>
<h3>Give Them New Toys Regularly</h3>
<p>
If you want to keep your cat happy, then you will have to change the toys regularly. There are toys that are specially created for cats with feathers, like balls, mice, wands, etc., and they make sounds too, which makes your cat satisfied. You can play with their toys with them or show them how to play with one, and it is going to keep them entertained for a while until you need to replace those toys with the new ones. Also, if you are giving them paper toys, make sure to dispose of those later; otherwise, they will make your cat sad.
</p>
<h3>Provide New Space to Your Cat</h3>
<p>
When your cat is staying inside of your house most of the time, it is important to provide him with new space so that she does not get bored. You can also create hiding spots for your young cat because they like the excitement of being invisible. Some cats also want to stay at a higher place from the ground so that they can watch what's going on the ground. You can create a scratching post for trees for cats and invite your pet to stay there. Otherwise, they will find the top of your refrigerator or doors to take a nap. 

But keep in mind that when you are doing all these things for your cat, they are not going to go in vain. 

Cats are smart. That's why they need regular mental stimulation to live, and if they don’t get enough from the place they are in, then they will find their own things to do. They can fight with neighbourhood cats or with your favourite furniture, which is not cool. That's why we want you to play with your cat every now and then or if you can’t, then at least give them something to play with, like a new toy or some mentally stimulating games. 
</p>
        </div></body>
        </html>