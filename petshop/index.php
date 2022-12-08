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

	    <title>Petz World</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
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
		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>

<!-- ============================================== HEADER : END ============================================== -->

<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
		<div class="furniture-container homepage-container">
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
				<!-- ================================== TOP NAVIGATION ================================== -->

<!-- ================================== TOP NAVIGATION : END ================================== -->
			</div>
  
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/banner1.png" style="width:100%;">
        
      </div>

      <div class="item">
        <img src="img/banner2.png" style="width:100%;">
        
      </div>
    
      <div class="item">
        <img src="img/banner3.png" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="img/banner4.png" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="img/banner5.png" style="width:100%;">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only" >Previous</span>
    </a>
    <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- /.products -->	
<div class="mid">
   <center><h1>SHOP FOR DOGS</h1></center>
  <div class="column">
    <a href="category.php?cid=3"><img src="img/dveg.jpg"></a>
    <h2>Food & Treats</h2>
    </div>
     <div class="column">
     <a href="category.php?cid=3"><img src="img/dgroom.png"></a>
      <h2>Grooming Products</h2>
 </div>
  <div class="column">
     <a href="category.php?cid=3"><img src="img/dbed.png"></a>
      <h2>Accessories</h2>
</div>
</div>
<div class="box">
<img src="img/adopt.png" width="300" height="250">
<h1>Pets Adoption<br><br>
Adopt , Rescue , Rejoice<br><br>Every Pet Deserves a Good Home.</h1>
<a href="adopt.php"><input type="submit" value="Adopt a Pet"></a>
<a href="sell.php"><input type="submit" value="Sell Your Pet"></a>
</div>
  <div class="mid2">
   <center><h1>SHOP FOR CATS</h1></center>
  <div class="col">
    <a href="category.php?cid=4"><img src="img/gravyfood.jpeg"></a>
    <h2>Food & Treats</h2>
    </div>
     <div class="col">
     <a href="category.php?cid=4"><img src="img/catgroom.jpg"></a>
      <h2>Grooming Products</h2>
 </div>
  <div class="col">
      <a href="category.php?cid=4"><img src="img/catacc.png"></a>
      <h2>Accessories</h2>
</div>
</div>
<div class="box2">
<img src="img/parenting.png" width="500" height="250">
<h1>Pet Parenting Guide<br><br>Know Your Pet</h1>
<a href="parenting.php"><input type="submit" value="Learn More"></a>
</div>
		<h2 class="brand">SHOP FROM TOP BRANDS</h2>
        <div class="sli">
			<div class="sli-track">
				<div class="slid">
					<img src="img/pedigree.png"/>
				</div>
				<div class="slid">
					<img src="img/drools.png"/>
				</div>
				<div class="slid">
					<img src="img/royal.png"/>
				</div>
				<div class="slid">
					<img src="img/whiskas.png"/>
				</div>
				<div class="slid">
					<img src="img/temptations.png"/>
				</div>
				<div class="slid">
					<img src="img/farmina.png"/>
				</div>
				<div class="slid">
					<img src="img/pedigree.png"/>
				</div>
				<div class="slid">
					<img src="img/drools.png"/>
				</div>
				<div class="slid">
					<img src="img/royal.png"/>
				</div>
				<div class="slid">
					<img src="img/temptations.png"/>
				</div>
				<div class="slid">
					<img src="img/farmina.png"/>
				</div>
				<div class="slid">
					<img src="img/whiskas.png"/>
				</div>
			</div>
		</div>
		<?php include('includes/footer.php');?>

</body>
</html>