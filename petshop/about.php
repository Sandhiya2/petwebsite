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
<style>
 
 .about{
     margin-left: 13%;
     margin-top: 4%;
     color:black;
 }
 hr.line{
     border: 2px solid #F4CD30 ;
     width:22%;
     margin-left: 10%;
 }
.abt {
  background-color: #eef4f7;
  width: 70%;
  border: 3px solid #F4CD30 ;
  padding: 50px;
  margin-left: 13%;
  font-size: 16px;
}
</style>
	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>
<div class="abut">
    <div class="about">
        <h1>About Petz World</h1></div>
        <hr class="line">
        <div class="abt">
            <p>PetzWorld is an eminent online pet food shop that caters to needs of growing pet owners all over India.
            Driven with zeal to excel in this domain, we have been constantly exercising our rich domain expertise by 
            providing best-in-class pet care products and accessories at the market leading prices. At our online retail pet shop, 
            you can explore a whole new array of food products, accessories, grooming kits, apparels and many more for different pets
            like dogs, cats, birds and other small pets.<br><br>At our online portal, we provide our esteemed customers optimum quality dry dog food,
            dog collars, leashes & accessories and  dog grooming products. In order to ensure superior quality, all these pet care products
            are procured from leading brands such as Royal Canin, Pedigree, Drools, and Kong Dog, to name a few.<br><br>We are enriched with a keen
            understanding of variegated demands of cat lovers; hence, we also provide cat care products at highly discounted price. We never
            compromise on quality; therefore, we only source these products from trusted brands such as Whiskas, Kong Cat, Royal Canin, Karlie,
            and Penn Plax.<br><br>If you want to enhance the ambience of your home or office with enchanting fish aquariums, then you can explore a
            wide range of fish foods and aquarium accessories from our online shop. You can choose from quality fish food, fascinating
            fish aquariums & tanks, aquarium air pumps and filters, heaters and accessories, aquarium maintenance products and salt water/marine
            tanks. We can assure you that all these products confirm to the optimum quality, as these are procured from leading brands such as 
            Tropical, Fluval, Hikari, and Sabor.<br><br>Committed to exceed customers’ expectations, we also offer best-in-class products for the birds
            and small pets. If you are a proud owner of birds and small pets, you can order daily feed and treats, cages and accessories, small 
            animal bedding, health and wellness products and bowls and feeding accessories. Our desire to stay ahead in the market and remain 
            competitive has compelled us to offer only quality products; therefore, we source these products from the renowned and trusted brands 
            such as Imac and Savic.<br><br>
            <b>So, Get Started ! and feel free to contact us on - 0120-4052647 or email us on "support@petsworld.in" on all week days (10AM - 7PM)</b>
            </p>
            </div>
            <?php include('includes/footer.php');?>
</div></body></html>