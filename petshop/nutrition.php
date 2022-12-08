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
					<li class="active"><a href='nutrition.php'>NUTRITION</a></li>
                    <li><a href='miscellaneous.php'>MISCELLANEOUS</a></li>
</h4>
</ul>
</div>
<div class="parent">
                <h2>NUTRITION</h2>
            </div>
            <div class="gui1">
  <div class="gui">
    <a href="allergynut.php"><img src="img/parenting/allergy.png"></a>
    <h4><a href="allergynut.php">Puppy Allergy</a></h4>
    </div>
     <div class="gui">
     <a href="energynut.php"><img src="img/parenting/energy.png"></a>
      <h4><a href="energynut.php">Puppy's energy requirements</a></h4>
 </div>
  <div class="gui">
      <a href="nutrinut.php"><img src="img/parenting/kittennut.png"></a>
      <h4><a href="nutrinut.php">Kitten's Nutritional Needs</a></h4>
  </div>
      <div class="gui">
      <a href="infectionnut.php"><img src="img/parenting/tact.png"></a>
      <h4><a href="infectionnut.php">Urinary tract infection</a></h4>
</div>
</div>
<div class="gui1">
  <div class="gui">
    <a href="balancednut.php"><img src="img/parenting/balance.png"></a>
    <h4><a href="balancednut.php">Balanced Nutrition</a></h4>
    </div>
     <div class="gui">
     <a href="growthnut.php"><img src="img/parenting/growth.png"></a>
      <h4><a href="growthnut.php">Kitten Growth</a></h4>
 </div>
  <div class="gui">
      <a href="bonenut.php"><img src="img/parenting/bones.png"></a>
      <h4><a href="bonenut.php">Are bones safe for puppies?</a></h4>
  </div>
      <div class="gui">
      <a href="foodnut.php"><img src="img/parenting/foodallergy.png"></a>
      <h4><a href="foodnut.php">Ways to manage food allergies in dogs</a></h4>
</div>
</div>
        </body>
		<?php include('includes/footer.php');?>
</html>