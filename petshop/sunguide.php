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
        <h1>Know Your Pet: Why Do Dogs Lay In The Sun?</h1>
    <img src="img/parenting/sun.png" width="750" height="450">
    <p>You must have seen your dog panting, but still sitting under the sun, enjoying the warmth and taking a nap. It fills your heart with contentment. More often, people wonder why dogs lay in the sun. They have fur, and they get hot so quickly. But Mother Nature and its beautiful creatures know it all. But to answer your question, here are some reasons why dogs lay in the sun and how it is good for them. 
    </p>
<h2>Sun is Good for Health</h2>
<p>
Well, it is no secret that the sun is a good source of Vitamin D. Not only humans, but your furry friends also need a good amount of the health booster vitamin. Humans absorb the sun’s rays through the skin. But dogs have fur, and it takes them time to let it pass and absorb it. 

Dogs are very intelligent animals, and they know that the sun is good for them. They lick their fur and orally take in Vitamin D3, which is left on their skin and does not penetrate. You must have noticed your dog lazily licking itself and wetting its fur. This grooming process allows them to clean themselves and effectively absorb the vitamin. 

Vitamin D plays a very important role in a dog’s life. It not only works as a vitamin but also as a hormone. It is found in the dog’s liver and fatty tissues. As a hormone, it helps in producing calcium in a dog’s body. Calcium is crucial for bones’ health, and a dog’s body makes it with the help of the Vitamin D hormone. 
</p>
<h2>It Makes Them Happy</h2>
<p>
A warm sunny day makes everyone happy, and your dog is no exception. It wags its tails in front of you and loves to play after a nice, long nap under the sun. The sun regulates their body temperature, and it also releases a hormone called serotonin, a mood enhancer. It makes them feel good and releases stress. A warm sun, a good book, a nice cup of coffee, and your happy friend will relieve you of all of your focus and enhance your mood. Also, a lazy nap under the sun will bring a smile to your dog’s face as well. As your dog gets older, they start spending more time in the sun. It helps increase melatonin which contributes to better sleep. 
</p>
<h2>But What If the Dog Is Panting? </h2>

<p>Trust your canine friend. It knows about its health more than you sometimes do. No one ever taught them that sunshine is good, but they know it. They also know that they need to move if the sun is too much. Leave them be. What you can do is to ensure that there is enough shade as well, so your dog can sit in the shade when it’s too hot for it.
</p>

<h2>Can My Dog Suffer a Sunshine Overdose?</h2>
<p>
Yes. It is easy for a pup or dog to get overheated. Sunshine is good, but its dosage should be limited. Just like you tan under too much sun, your dog can also suffer health injuries. Their exposed mouth, footpads, ears, and the area around their eyes may get sunburned. Prolonged sun exposure can also cause skin cancer. The risk is higher in dogs with light-coloured fur or a thin coat.  If you live in an area where the sun is harsh, using dog sunscreen is recommended. Do not use human sunscreen as it contains zinc. Several products in the market will help keep your pet safe and reduce the danger of skin cancer.  
</p>
<h2>How Much Sun Does a Dog Need Daily?</h2>
<p>
Experts usually recommend somewhere between 25 to 30 minutes of sunlight twice a day. However, the number varies as per the breed of the dog. Larger breeds might need 10-15 extra minutes in the sun. Also, it is important to note the time of the day when your pooch gets his dose of the sun. As you may already be aware, the sun produces different levels of UV and UVB light during different parts of the day. The types play a significant role in your dog’s circadian rhythm. 


Most experts and vets recommend taking your dog out in the sun in the morning, then for 15 minutes or so in the afternoon and then for about the same time during the evening. 
</p>
<h2>Can I Use Supplements?</h2>

<p>Most busy pet parents who do not have time to see if their dog sits in the sun or sleeps in its bed all day wonder if they can fulfil the Vitamin D requirements with supplements. First thing, take your dog to the vet and let them test the Vitamin D in your dog’s blood. Instead of starting a supplement, find a spot for your dog where it can receive ample sunlight. If your house does not have such a spot, then you can ask the vet if supplements are a good idea. 
</p>

<h2>Should I Find My Dog A Sunlight Spot?</h2>
<p>
Exposure to the sun is important not just for your dog but for yourself too. Take time out each day to take a short walk to get your dose of Vitamin D. However, if because of work or other compulsions you and your dog cannot go out in sunlight for a walk, it is better to find them a spot in the house. While a terrace is your best bet, it can be a corner where the sunshine warms the place, or it can be a porch with enough sunlight and shade. Make them sit there for a few days, and they will make it a habit.
</p>

<p>If your dog is lying under the sun, feel good about it. Don’t disturb its peace and let mother nature work its magic on your dog’s health.  At the same time, make sure he does not get too much sun. Excessive exposure to sunlight can lead to heat exhaustion and, at worst, heatstroke. 
</p></div>
    </body>
    </html>