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
#main_content {
    margin: 0 auto;
    max-width: 600px;
    padding: 10px;
}
.markdown-body {
    word-wrap: break-word;
}
#main_content p{
    font-size: 20px;
    line-height: 1.7;
	margin-left: 6%;
}
#main_content h1 {
    color: #5c4528;
    margin-top: 0;
}
#main_content img {
    width: 100%;
}
.lister img{
	margin-left: 5%;
}
.lister .metadata {
    clear: both;
    margin-top: 10px;
    width: 100%;
}
.lister .adopt {
    text-align: center;
}
tbody {
    display: table-row-group;
    vertical-align: middle;
    border-color: inherit;
}
tr {
    display: table-row;
    vertical-align: inherit;
    border-color: inherit;
}
.lister .metadata th {
    color: #555;
}
.lister .metadata td {
    color:  #068DE7;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
	margin-left: 20%;
}
.lister .adopt a {
    background:#068DE7;
    color: white;
    padding: 5px 10px;
    margin: 0 auto;
    display: inline-block;
    width: fit-content;
    border-radius: 3px;
    font-weight: bold;
    text-decoration: none;
    text-align: center;
    padding: 10px 30px;
    margin-top: 30px;
    font-size: 18px;
    margin-bottom: 20px;
}
.lister .related_dogs h3 {
    text-align: center;
    color: #068DE7;
    margin-bottom: 0px;
}
.lister .related_dogs .row {
    width: 36%;
    border-radius: 4px;
    padding: 25px;
    margin-bottom: 20px;
    display: inline-block;
}
.lister .related_dogs .image {
    height: 180px;
    background-size: cover;
    background-repeat: no-repeat;
    display: inline-block;
    width: 100%;
    background-position: center;
    border-radius: 3px;
    margin-right: 20px;
    margin-bottom: 0px;
	margin-left: 9%;
}
.lister .related_dogs .image img {
    display: none;
}
.lister .related_dogs .row p {
    font-size: 16px;
    text-align: center;
}
.lister .related_dogs .gender, .lister .ageGroup {
    font-size: 14px;
    color: #444;
    padding: 5px;
    border-radius: 3px;
    font-weight: normal;
}
.lister .related_dogs .specs i {
    font-size: 10px;
}
		</style>
	</head>
        <header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>
<body>
<div id="wrapper">
  <section id="main_content">
    <article id="content" class="markdown-body">

<div class="lister">
				<h1>Kangana</h1>
				<img src="img/kangana.jpg">
				<table class="metadata" style="margin-bottom: -10px;">
				<tbody><tr width="100%"><th width="45%">Gender</th><td width="55%">Female</td><br></tr>
				<tr width="100%"><th width="45%">Age</th><td width="55%">2 years</td></tr>
				</tbody></table>
				
				<table class="metadata">
				
				<tbody><tr width="100%">
					<th width="45%">Incoming Date</th>
					<td width="55%">22 December, 2020</td>
				</tr>
				
				<tr width="100%">
					<th width="45%">Coat Length</th>
					<td width="55%">Medium</td>
				</tr>
				
				<tr width="100%">
					<th width="45%">Leash trained?</th>
					<td width="55%">No</td>
				</tr>
				
				<tr width="100%">
					<th width="45%">Good with other dogs?</th>
					<td width="55%">Yes</td>
				</tr>
				
				<tr width="100%">
					<th width="45%">Good with cats?</th>
					<td width="55%">Not Known</td>
				</tr>
				
				<tr width="100%">
					<th width="45%">Good with children?</th>
					<td width="55%">Not known</td>
				</tr>
				
				<tr width="100%">
					<th width="45%">Sterilized</th>
					<td width="55%">Yes</td>
				</tr>
				
				</tbody></table>
<br>

				<p>Kangana was hit by a vehicle which partially paralysed one of her legs. She was forced to drag it every time she walked so to prevent any further injuries , we had to amputate it. Now that her surgery is done she is moving around fine and is healed completely. She was extremely anxious and scared of people initially when she had just arrived at the farm, but we have seen her open up gradually with the other doggos and our team. (Treats are her weakness!)

She has been through so much and before Peepal Farm she has never met a kind human and so, she has a lot to learn about being a pet!
Kangana is a very special girl who deserves a family that'd love her unconditionally and be patient with her to help develop confidence in her. We are sure that with enough affection and lots of treats she will eventually come around and will find out that hoomans aren't that bad after all. Do you think you can be the one to show her ?

Click "ADOPT" to bring her home :)</p>				
           <p class="adopt">
		   <a id="adopt-button" href="reg.php">Adopt</a>
           </p>
		   <div class="related_dogs">
            	<h3>More Adoptable Animals</h3>
          		
              <a href="/adoptions/616c0f83172f384e7c739880/Lily" class="adoptions-list">
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
              </div>
              </a>
              
              <a href="/adoptions/616c0f89172f384e7c73988a/Dove" class="adoptions-list">
              <div class="row">
                <div class="image" style="background-image: url('https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/616c0f89172f384e7c73988a/thumbnail.jpg');">
                  <img src="https://s3.ap-south-1.amazonaws.com/lister.peepalfarm.org/616c0f89172f384e7c73988a/thumbnail.jpg" alt="Dove">
                </div>
                <p class="title">Dove</p>
                <p class="specs">
                  <span class="gender">Female</span>
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <span class="ageGroup">Puppy</span>
                </p>
              </div>
              </a>
              
              <a href="/adoptions/616c0f8e172f384e7c739890/Tikli" class="adoptions-list">
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
              </div>
              </a>
              
            </div>
	</div>
	</article>
  </section>
</div>
<?php include('includes/footer.php');?>
</body>
</html>