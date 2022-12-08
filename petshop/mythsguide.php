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
        <h1>Neutering Myths</h1>
    <img src="img/parenting/myths.png" width="750" height="450">

<p>Neutering is the common term for the surgical removal of both testicles of the male dog, making the dog sterile. In short, it’s the male equivalent of spaying. Neutering is a comparatively minor procedure when compared to a spay, as we don’t need to open up the abdomen to do it. That being said, neutering still requires general anaesthesia and about a week (at least) of post-operative care, and has its own sets of risks and complications.  

Unfortunately, myths and misinformation about this procedure abound, and today let’s bust some of them, both good and bad!

</p>
<h2>It's not natural</h2>
<p>We agree with you. However, it is beneficial. However, the benefits of neutering far outweigh the risks of the procedure. Neutering prevents the dog from siring potentially unwanted puppies, prevents diseases like perineal hernia (which is most commonly seen in intact dogs) and decreases the risk of certain types of reproductive, and hormone-linked cancers.</p>
<h2>Dogs need to “experience” mating first!</h2>
<p>While it’s perfectly fine to have your dog sire a litter (or multiple litters) before neutering him, it’s also perfectly fine to neuter him without having him sire one too. It will honestly make no difference to your dog healthwise. More often than not, this is often the effect of pet parents “humanising” their dogs and reflecting their own thoughts on their fur-babies!</p>
<h2>My dog will become overweight!</h2>
<p>This one is entirely in your hands. The testicles are responsible for secretion of the major male hormone, testosterone. Testosterone is what brings out the sexual drive and the “maleness” of your dog. Once the testicles are removed, the hormone is gone, and although there will be no difference in the health and well-being of your dog, it will decrease your dog’s metabolism. This means that your dog might put on weight if fed the same amount of food as before. So controlling your dog’s portion sizes with the help of your vet will prevent your dog from becoming overweight/ obese.
</p>
<h2>My dog will become calmer after the procedure
</h2>
<p>This one is partially true. Neutering will reduce aggression related to reproduction. This means that the instincts which make him rush out when a female dog is in heat, and fight other dogs for a chance to mate with a female in heat, will go away, since he just won’t want to (and can’t) reproduce anymore.


However, “aggression” is a blanket term with many causes. For example, if your dog is aggressive when it comes to food, or with other dogs, or with other humans, or even just has an aggressive personality in general, these things cannot be magically cured just by neutering your dog. These things need to be addressed by finding the cause and working with a vet or a behaviourist to eliminate them if the behaviours are causing serious problems. To sum it up, neutering gets rid of reproductive aggression, and not other types!

</p>

<h2>The surgery is risk free!</h2>
<p>
How I wish it was true. Although a minor surgery, it does involve going under general anaesthesia, and just like any other surgery, has a set of risks and complications. Your doctors warn you of the risks of anaesthesia when you have surgery, and it’s the same for your pets. It’s always a good thing to sit down with your primary vet and the surgeon (if they are different - a lot of times your primary vet will be doing the surgery themselves) and have a good long talk about the risks of the surgery anaesthesia and the things you need to do before and after the procedure. This is the best way to reduce the chances of anything going wrong, and having a smooth recovery.
</p>
    </body>
</html>