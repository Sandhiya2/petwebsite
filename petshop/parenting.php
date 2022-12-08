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
<div class="parent">
                <h2>PET PARENTING GUIDE</h2>
            </div>
            <div class="gui1">
  <div class="gui">
    <a href="rubguide.php"><img src="img/parenting/bellyrub.png"></a>
    <h4><a href="rubguide.php">Know Your Pet: Why Do Dogs Like Belly Rub?</a></h4>
    </div>
     <div class="gui">
     <a href="splitzguide.php"><img src="img/parenting/splitz.png"></a>
      <h4><a href="splitzguide.php">Dog Breed-Indian Spitz</a></h4>
 </div>
  <div class="gui">
      <a href="mythsguide.php"><img src="img/parenting/myths.png"></a>
      <h4><a href="mythsguide.php">Neutering Myths</a></h4>
  </div>
      <div class="gui">
      <a href="medicalguide.php"><img src="img/parenting/medical.png"></a>
      <h4><a href="medicalguide.php">Medical Advancement in Pet Treatments</a></h4>
</div>
</div>
<div class="gui1">
  <div class="gui">
    <a href="boxerguide.php"><img src="img/parenting/boxer.png"></a>
    <h4><a href="boxerguide.php">Dog Breed-Boxer</a></h4>
    </div>
     <div class="gui">
     <a href="germanguide.php"><img src="img/parenting/german.png"></a>
      <h4><a href="germanguide.php">Dog Breed-German Shepherd</a></h4>
 </div>
  <div class="gui">
      <a href="sunguide.php"><img src="img/parenting/sun.png"></a>
      <h4><a href="sunguide.php">Know your Pet: Why Do Dogs Lay in The Sun?</a></h4>
  </div>
      <div class="gui">
      <a href="signsguide.php"><img src="img/parenting/signs.png"></a>
      <h4><a href="signsguide.php">Early Signs of Dog Arthritis You Shouldn’t Miss</a></h4>
</div>
</div>
<div class="gui1">
  <div class="gui">
    <a href="samoyedguide.php"><img src="img/parenting/samoyed.png"></a>
    <h4><a href="samoyedguide.php">Dog Breed-Samoyed</a></h4>
    </div>
     <div class="gui">
     <a href="chowguide.php"><img src="img/parenting/chow.png"></a>
      <h4><a href="chowguide.php">Dog Breed-Chow Chow</a></h4>
 </div>
  <div class="gui">
      <a href="huskyguide.php"><img src="img/parenting/husky.png"></a>
      <h4><a href="huskyguide.php">Dog Breed-Siberian Husky</a></h4>
  </div>
      <div class="gui">
      <a href="shihguide.php"><img src="img/parenting/shih.png"></a>
      <h4><a href="shihguide.php">Dog Breed-Shih Tzu</a></h4>
</div>
</div>
        </body>
        <?php include('includes/footer.php');?>
</html>