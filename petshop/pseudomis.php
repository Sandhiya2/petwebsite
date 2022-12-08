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
        <h1>Pseudopregnancy In Dogs</h1>
    <img src="img/parenting/pesudo.png" width="750" height="450">
    <p>Also known as false pregnancy, phantom pregnancy, pseudo-pregnancy or pseudocyesis is a condition occurring in un-spayed female dogs. It usually occurs 4-9 weeks post last oestrus or heat period and symptoms are similar to real pregnancy.  Symptoms may also occur in spayed females with ovarian remnants.
    </p>
    <p>Therapeutic management of pseudopregnancy is done on a cases to case basis- mild cases with minimal symptoms usually subside in 2-3 weeks. Mild anxiolytics or sedatives may be used in dogs with aggression and anxiety. Application of cool ice packs to mammary glands may also prove helpful. Diuretics can be used in dogs with excessive mammary swelling and fluid retention. In case of mastitis (infection of mammary glands) antibiotics maybe prescribed. Do not massage or milk the teats during false pregnancy as this will only encourage more milk production. Use e-collars in dogs to avoid licking of mammary glands.  In rare cases, hormonal treatment i.e. prolactin inhibitors may be required. Homeopathic medications may also be prescribed to stop the symptoms.</p>
    <p>Luckily, most cases of first-time pseudo-pregnancies are mild and don’t require treatment, but these cases predispose the dog to future cases of pseudopregnancy. This may also lead to further complications such as pyometra (pus in the uterus), ovarian cysts, mammary tumours and neoplasia of the reproductive tract. Hence, it is advisable to spay your pet between the age group of 1-5 years. Ideally, this surgical sterilization should be performed after all signs have resolved. If she is surgically sterilized while she is experiencing signs of pseudopregnancy, signs may continue for several weeks despite the fact she has been spayed.</p></div></body>
    </html>