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
<div class="parent">
                <h2>MISCELLANEOUS</h2>
            </div>
            <div class="gui1">
  <div class="gui">
    <a href="dirtmis.php"><img src="img/parenting/dirt.png"></a>
    <h4><a href="dirtmis.php">Why is my dog eating dirt?</a></h4>
    </div>
     <div class="gui">
     <a href="playkitmis.php"><img src="img/parenting/playkit.png"></a>
      <h4><a href="playkitmis.php">What should I play with my Kitten?</a></h4>
 </div>
  <div class="gui">
      <a href="odoursmis.php"><img src="img/parenting/odours.png"></a>
      <h4><a href="odoursmis.php">Dog Odours</a></h4>
  </div>
      <div class="gui">
      <a href="pseudomis.php"><img src="img/parenting/pesudo.png"></a>
      <h4><a href="pseudomis.php">Pseudopregnancy in dogs</a></h4>
</div>
</div>
<div class="gui1">
<div class="gui">
    <a href="breathmis.php"><img src="img/parenting/breath.png"></a>
    <h4><a href="breathmis.php">What does bad breath in dogs mean?</a></h4>
    </div>
     <div class="gui">
     <a href="painmis.php"><img src="img/parenting/pain.png"></a>
      <h4><a href="painmis.php">How to assess if my dog is in pain</a></h4>
 </div>
  <div class="gui">
      <a href="dentalmis.php"><img src="img/parenting/dental.png"></a>
      <h4><a href="dentalmis.php">Dental Issues in puppies</a></h4>
  </div>
      <div class="gui">
      <a href="pillsmis.php"><img src="img/parenting/pills.png"></a>
      <h4><a href="pillsmis.php">Tablets, pills or liquids</a></h4>
</div>
</div>
        </body>
		<?php include('includes/footer.php');?>
</html>