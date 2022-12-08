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
        <h1>Dog Breed-Samoyed</h1>
    <img src="img/parenting/samoyed.png" width="750" height="450">
    <p>Smiling Sammies. Fluffy White Dog. Eskimo Dog. Polar Bear Dog.....the Samoyed has many adorable nicknames that are true to his personality. This people-loving pooch is just one happy-go-lucky charismatic canine to share your home with. 
    </p>
<h3>History</h3>

<p>Samoyed's are members of the Spitz group. They come from Siberia, where people used them to pull sledges, hunt game, and keep warm. When the Samoyed would shed, people spun the fur into yarn and made articles of clothing out of it to stay warm in the blistering cold. 
</p>
<h3>Nutrition</h3>
<p>
A Samoyed must be fed in accordance with their daily exercise to keep them from putting on unnecessary weight. That said, meals must consist of protein and fibre rather than carbohydrates and fats. Protein can keep them full for a longer time instead of feeling hungry every two hours after eating food primarily made of carbohydrates. You can also supplement your Samoyed's diet with vitamin and mineral supplements (pay special attention to calcium to prevent arthritis) to keep them physically and mentally healthy.
</p>
<h3>Grooming</h3>

<p>Sammies shed twice a year and need to be taken to a professional groomer during these times. Apart from this, Samoyeds need their coat brushed every day and their nails trimmed every week. Bathing a Samoyed can be done once or twice in a month depending on how dirty the dog's coat is - do not bathe your Sammie too often as this would strip his coat off its natural oils. 
</p>
<h3>Exercise</h3>
<p>
You can never give a Samoyed enough exercise. They enjoy exercising so much that apartment living sometimes does more harm than good. A Samoyed needs vigorous exercise that gets his heart pumping and his muscles working - hiking, jogging, running, fetching, swimming etc. They also need to challenge their mind through puzzles and agility. 
</p>
<h3>Training</h3>
<p>
Samoyeds are easy to train if you start early. They can also be challenged through obedience training and be taught advanced commands. 
</p>
<h3>Health</h3>
<p>
Samoyeds are fairly healthy, but they tend to suffer from obesity, hip dysplasia, diabetes, hypothyroidism, and kidney disease. Routine medical checkups and healthy, wholesome diets can help keep them at bay. 
</p>
<h3>Temperament</h3>
<p>
You'd never find a better companion for your children. Samoyeds are born nannies and enjoy spending time with children and other pets. Their even-tempered, calm, docile nature makes them perfect for any family.
</p>
        </div>
    </body>
    </html>