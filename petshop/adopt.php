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
        <style>
#wrapper {
    display: inline-block;
    width: calc(100vw - 10vw - 250px);
    max-width: 900px;
    background: white;
    min-height: 90vh;
    border-radius: 5px;
    box-shadow: 0 3px 6px rgb(0 0 0 / 16%), 0 3px 6px rgb(0 0 0 / 23%);
    box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
    padding: 20px;
    margin-left: 22%;
}
.filter select {
    height: 38px;
    padding: 6px 10px;
    background-color: #fff;
    border: 1px solid #068DE7;
    border-radius: 4px;
    box-shadow: none;
    box-sizing: border-box;
}
.adopt-section hr {
  margin-top: 10px !important;
  margin-bottom: 10px !important;
  display: none;
}
.adopt-section #content a {
  text-decoration: none;
}
.adopt-section .row {
  width: 36%;
  border-radius: 4px;
  padding: 32px;
  margin-bottom: 20px;
  display: inline-block;
}
.adopt-section .row a {
  margin-top: 10px;
  display: block;
  margin-left: 0px;
  text-decoration: none;
  font-weight: bold;
  font-size: 18px;
  text-align: center;
}
.adopt-section .row p {
  font-size: 16px;
  text-align: center;
}
@media (min-width: 600px) {
  .adopt-section .image img {
    display: none;
  }
  .adopt-section .image {
    height: 270px;
    background-size: cover;
    background-repeat: no-repeat;
    display: inline-block;
    width: 100%;
    background-position: center;
    border-radius: 3px;
    margin-right: 20px;
    margin-bottom: 0px;
  }
}
@media (max-width: 600px) {
  .adopt-section .row {
    width: 95%;
  }
  .adopt-section .image img {
    display: block;
  }
  .adopt-section .image {
    max-width: 100%;
    background: none;
    margin: 0 auto;
  }
}
.adopt-section .filters p {
  width: 49%;
  display: inline-block;
  margin: 0px;
}
.adopt-section .filters p select {
  margin-top: 5px;
  display: block;
  width: 100%;
}
.adopt-section .title {
  margin: 5px 0px;
  font-weight: bold;
}
.adopt-section .gender,
.adopt-section .ageGroup {
  font-size: 14px;
  color: #444;
  padding: 5px;
  border-radius: 3px;
  font-weight: normal;
}
.adopt-section .specs {
  margin-top: 3px;
}
.adopt-section .specs i {
  font-size: 10px;
}
.adopt-section .adopt {
  background:#068DE7;
  color: white;
  border-radius: 3px;
  padding: 10px 5px;
  margin-top: -5px;
  display: block;
  width: 100%;
  height: auto;
  font-size: 14px;
  line-height: 0px;
}
.adopt-section .adopt:hover {
  color: white;
}
.adopt-section .afterLanding {
  padding-top: 20px;
}
.adopt-section .landingImage {
  background-image: url(/static/peepalfarm/adopt%20happiness%20vintage%20red%20transparent.png);
  position: absolute;
  width: 100%;
  left: 0px;
  right: 0px;
  min-height: 200px;
  margin-top: 10px;
  background-size: 600px;
  background-repeat: no-repeat;
  background-position: center center;
  background-color: #fff;
}
select {
    height: 38px;
    padding: 6px 10px;
    background-color: #fff;
    border: 1px solid #068DE7;
    border-radius: 4px;
    box-shadow: none;
    box-sizing: border-box;
}
@media (max-width: 600px) {
  .adopt-section .landingImage {
    background-size: 100%;
  }
}
.adopt-section .map-container iframe {
  border: none;
  border-radius: 5px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}
.callus{
      margin: 0;
    padding: 5px;
    text-align: center;
    background: #068DE7;
    color: white;
    font-size: 14px;
    font-weight: normal;
    border-radius: 3px;
}
.callus a{
    color: black;
    text-decoration: none;
}
.callus a:hover{
    color: white;
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
<div id="wrapper">
  <section id="main_content">
    <article id="content" class="markdown-body">
<div class="adopt-section">
<div class="afterLanding">
  <h1>Animals for adoption</h1><br>
  <p class="callus">Adoption Helpline - <a href="tel:9585556668">9585556668</a></p><br>
  <div class="filters"> 
    <p>
      Gender
      <select id="gender_filter" onchange="filter()">
        <option value="all" selected="">All</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </p>
    <p>
      Age Group
      <select id="age_filter" onchange="filter()">
        <option value="all" selected="">All</option>
        <option value="Baby">Baby (under 9 months)</option>
        <option value="Adult">Adult (1 - 6 years)</option>
        <option value="Senior">Senior (6+ years)</option>
      </select>
    </p>
  </div>
  
  <a href="pet1.php" data-gender="Female" data-agegroup="Adult" class="adoptions-list" >
  <div class="row">
    <div class="image" style="background-image: url('https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/616c0e8d172f384e7c7397d8/thumbnail.jpg');">
      <img src="https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/616c0e8d172f384e7c7397d8/thumbnail.jpg" alt="Kangana">
    </div>
    <p class="title">Kangana</p>
    <p class="specs">
      <span class="gender">Female</span>
      <i class="fa fa-circle" aria-hidden="true"></i>
      <span class="ageGroup">Adult</span>
    </p>
    <button type="button" class="adopt">Adopt</button>
  </div>
  </a>
  
  <a href="/adoptions/616c0f7e172f384e7c739879/Bhindi" data-gender="Female" data-agegroup="Adult" class="adoptions-list" >
  <div class="row">
    <div class="image" style="background-image: url('https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/616c0f7e172f384e7c739879/thumbnail.jpg');">
      <img src="https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/616c0f7e172f384e7c739879/thumbnail.jpg" alt="Bhindi">
    </div>
    <p class="title">Bhindi</p>
    <p class="specs">
      <span class="gender">Female</span>
      <i class="fa fa-circle" aria-hidden="true"></i>
      <span class="ageGroup">Adult</span>
    </p>
    <button type="button" class="adopt">Adopt</button>
  </div>
  </a>
  
  <a href="/adoptions/616c0f83172f384e7c739880/Lily" data-gender="Female" data-agegroup="Senior" class="adoptions-list">
  <div class="row">
    <div class="image" style="background-image: url('https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/616c0f83172f384e7c739880/thumbnail.jpg');">
      <img src="https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/616c0f83172f384e7c739880/thumbnail.jpg" alt="Lily">
    </div>
    <p class="title">Lily</p>
    <p class="specs">
      <span class="gender">Female</span>
      <i class="fa fa-circle" aria-hidden="true"></i>
      <span class="ageGroup">Senior</span>
    </p>
    <button type="button" class="adopt">Adopt</button>
  </div>
  </a>
  
  <a href="/adoptions/616c0f89172f384e7c73988a/Dove" data-gender="Female" data-agegroup="Baby" class="adoptions-list" >
  <div class="row">
    <div class="image" style="background-image: url('https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/616c0f89172f384e7c73988a/thumbnail.jpg');">
      <img src="https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/616c0f89172f384e7c73988a/thumbnail.jpg" alt="Dove">
    </div>
    <p class="title">Dove</p>
    <p class="specs">
      <span class="gender">Female</span>
      <i class="fa fa-circle" aria-hidden="true"></i>
      <span class="ageGroup">Baby</span>
    </p>
    <button type="button" class="adopt">Adopt</button>
  </div>
  </a>
  
  <a href="/adoptions/616c0f8e172f384e7c739890/Tikli" data-gender="Female" data-agegroup="Adult" class="adoptions-list">
  <div class="row">
    <div class="image" style="background-image: url('https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/616c0f8e172f384e7c739890/thumbnail.jpg');">
      <img src="https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/616c0f8e172f384e7c739890/thumbnail.jpg" alt="Tikli">
    </div>
    <p class="title">Tikli</p>
    <p class="specs">
      <span class="gender">Female</span>
      <i class="fa fa-circle" aria-hidden="true"></i>
      <span class="ageGroup">Adult</span>
    </p>
    <button type="button" class="adopt">Adopt</button>
  </div>
  </a>
  
  <a href="/adoptions/619b8a4fff3bca31ce2ca192/Baarish" data-gender="Female" data-agegroup="Baby" class="adoptions-list" >
  <div class="row">
    <div class="image" style="background-image: url('https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/619b8a4fff3bca31ce2ca192/thumbnail.jpg');">
      <img src="https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/619b8a4fff3bca31ce2ca192/thumbnail.jpg" alt="Baarish">
    </div>
    <p class="title">Baarish</p>
    <p class="specs">
      <span class="gender">Female</span>
      <i class="fa fa-circle" aria-hidden="true"></i>
      <span class="ageGroup">Baby</span>
    </p>
    <button type="button" class="adopt">Adopt</button>
  </div>
  </a>
  
  <a href="/adoptions/6209d9ebf44c63107d3b4d32/Tinda" data-gender="Female" data-agegroup="Baby" class="adoptions-list" >
  <div class="row">
    <div class="image" style="background-image: url('https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/6209d9ebf44c63107d3b4d32/thumbnail.jpg');">
      <img src="https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/6209d9ebf44c63107d3b4d32/thumbnail.jpg" alt="Tinda">
    </div>
    <p class="title">Tinda</p>
    <p class="specs">
      <span class="gender">Female</span>
      <i class="fa fa-circle" aria-hidden="true"></i>
      <span class="ageGroup">Baby</span>
    </p>
    <button type="button" class="adopt">Adopt</button>
  </div>
  </a>
  
  <a href="/adoptions/620a3be7d98b7b3958425a72/Dhaniya" data-gender="Female" data-agegroup="Baby" class="adoptions-list" >
  <div class="row">
    <div class="image" style="background-image: url('https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/620a3be7d98b7b3958425a72/thumbnail.jpg');">
      <img src="https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/620a3be7d98b7b3958425a72/thumbnail.jpg" alt="Dhaniya">
    </div>
    <p class="title">Dhaniya</p>
    <p class="specs">
      <span class="gender">Female</span>
      <i class="fa fa-circle" aria-hidden="true"></i>
      <span class="ageGroup">Baby</span>
    </p>
    <button type="button" class="adopt">Adopt</button>
  </div>
  </a>
  
  <a href="/adoptions/62299f127005bc1071483935/Chutki" data-gender="Female" data-agegroup="Baby" class="adoptions-list">
  <div class="row">
    <div class="image" style="background-image: url('https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/62299f127005bc1071483935/thumbnail.jpg');">
      <img src="https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/62299f127005bc1071483935/thumbnail.jpg" alt="Chutki">
    </div>
    <p class="title">Chutki</p>
    <p class="specs">
      <span class="gender">Female</span>
      <i class="fa fa-circle" aria-hidden="true"></i>
      <span class="ageGroup">Baby</span>
    </p>
    <button type="button" class="adopt">Adopt</button>
  </div>
  </a>
  
  <a href="/adoptions/622af48337e7ab72d561d695/Chunmun" data-gender="Female" data-agegroup="Baby" class="adoptions-list" >
  <div class="row">
    <div class="image" style="background-image: url('https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/622af48337e7ab72d561d695/thumbnail.jpg');">
      <img src="https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/622af48337e7ab72d561d695/thumbnail.jpg" alt="Chunmun">
    </div>
    <p class="title">Chunmun</p>
    <p class="specs">
      <span class="gender">Female</span>
      <i class="fa fa-circle" aria-hidden="true"></i>
      <span class="ageGroup">Baby</span>
    </p>
    <button type="button" class="adopt">Adopt</button>
 
  </div>
  </a>
  
  <a href="/adoptions/6234754f201a3e2a041c6b04/Devi" data-gender="Female" data-agegroup="Adult" class="adoptions-list" >
  <div class="row">
    <div class="image" style="background-image: url('https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/6234754f201a3e2a041c6b04/thumbnail.jpg');">
      <img src="https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/6234754f201a3e2a041c6b04/thumbnail.jpg" alt="Devi">
    </div>
    <p class="title">Devi</p>
    <p class="specs">
      <span class="gender">Female</span>
      <i class="fa fa-circle" aria-hidden="true"></i>
      <span class="ageGroup">Adult</span>
    </p>
    <button type="button" class="adopt">Adopt</button>
  </div>
  </a>
  
  <a href="/adoptions/62b6e370a4b03c325020f756/Baghira" data-gender="Male" data-agegroup="Baby" class="adoptions-list" >
  <div class="row">
    <div class="image" style="background-image: url('https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/62b6e370a4b03c325020f756/thumbnail.jpg');">
      <img src="https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/62b6e370a4b03c325020f756/thumbnail.jpg" alt="Baghira">
    </div>
    <p class="title">Baghira</p>
    <p class="specs">
      <span class="gender">Male</span>
      <i class="fa fa-circle" aria-hidden="true"></i>
      <span class="ageGroup">Baby</span>
    </p>
    <button type="button" class="adopt">Adopt</button>
  </div>
  </a>
</div>
<p></p><center><a href="/adopted">Checkout our <b>Adopted Animals</b></a></center><p></p>

</div>
<script type="text/javascript">
function filter(){
    var gender = document.querySelector("#gender_filter").value
    var ageGroup = document.querySelector("#age_filter").value
    var aEles = document.querySelector("#content").querySelectorAll(".adoptions-list");
    aEles.forEach(function(y){
        var yGender = y.getAttribute("data-gender") 
        var yAgeGroup = y.getAttribute("data-agegroup")
        if(gender == "all" && ageGroup == "all"){
            y.style.display = ""
        }else if(gender == "all" && ageGroup != "all"){
            if(ageGroup == yAgeGroup)
        y.style.display = ""
            else
                y.style.display  = "none"
        }else if(gender != "all" && ageGroup == "all"){
            if(gender == yGender)
                y.style.display = ""
            else
                y.style.display  = "none"
        }else if(gender != "all" && ageGroup != "all"){
            if(gender == yGender && ageGroup == yAgeGroup)
                y.style.display = ""
            else
                y.style.display = "none"
        }
    })
}
</script>
    </article>
  </section>
</div>
<?php include('includes/footer.php');?>
    </body>
</html>