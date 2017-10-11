<!DOCTYPE html>
<html>
	<head>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--Google Icon Fonts-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css"> <!--Materialize CSS-->
         <link rel="stylesheet" href="../css/styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- Let browser know website is optimized for mobile--> 
        
         <link rel="stylesheet" href="css/styles.css">
        <meta charset="UTF-8">
		<title>Achilles Sole Cart - Daniel McDonald</title>
	</head>

	<body>
		
	<div class="row">
      <div class="col s12 center-align valign-wrapper header">
        <div class="col s2"><a href="home.php"><img class="responsive-img" src="img/logo.png" alt="Company Logo">
            </a></div>
          <div class="col s8">
          <div class="input-field">
            <input id="search" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          
          </div>
          </div>
            <div class="col s2"><a href="cart.php">1<i class="material-icons medium">shopping_cart</i></a></div>
        </div>
    </div>  	
  
        <nav >
    <div class="nav-wrapper blue darken-4">
      
      <ul id="nav-mobile" class="left ">
        <li><a href="catalog_womens.php">Women's</a></li>
        <li><a href="catalog_mens.php">Men's</a></li>
        <li><a href="catalog_kids.php">Kid's</a></li>
        <li><a href="catalog.php">Brands</a></li>
        <li><a href="#">Sales</a></li> 
      </ul>
        <ul class= "right">
        <li><a href="client.php">My Account</a></li>
        <li><a href="admin.php">Admin</a></li>
        </ul>
    </div>
  </nav>
  
  
  <div class="row">
      <div class = "container">
      <div class="col s12">
            <div class = "header_box_below" >
           <div class = "header_box_top">
            <h1 class="page_header">CART</h1>
      </div>
      </div>
      </div>
      <div class="col s12">
      <div class="col s12 content_header">
          <div class="col s7">
              <h4>Product</h4>
          </div>
          <div class="col s1">
          </div>
          <div class="col s2">
              <div id ="center-align"> <h4>Price</h4> </div>
          </div>
          <div class="col s2 center-align">
              <h4>Qty.</h4>
          </div>
          </div>
          <div class = "col s12 content_body valign-wrapper">
          <div class="col s2"><img class="responsive-img" src="img/men1.png" alt="product_image"></div>
          <div class="col s5">
          <p>6-INCH PREMIUM WATERPROOF BOOTS</p>
          </div>
          <div class="col s1">
             <a id = "cart_remove" href="#"><h4><i class="material-icons">remove_circle_outliner</i></h4></a> 
              
          </div>
          <div class="col s2 center-align">
              <p>$155.55</p>
          </div>
          <div class="col s2 center-align">
              <p>1</p>
          </div>
          </div>
      </div>
      
      <div class="col s8"></div>
      <div class= "col s4">
      <div class="col s6 content_body"><p>SubTotal</p></div>
      <div class="col s6 content_body"><p>$155.55</p></div>     
    
      <div class="col s6 content_body"><p>Total</p></div>
      <div class="col s6 content_body"><p>$155.55</p></div>
      <a href = "checkout.php"><div class="col s12 waves-effect waves-light btn blue lighten-2 ">
      Checkout
          </div></a>
      </div>
      </div>
      
  </div>
  
 <? include 'footer.php' ?>
  
	
	
	
	<!--JS is loaded at the end of the body to reduce page load time-->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script> <!--jQuery-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script> <!--Materialize JS-->
	<script>
	
	
	  $(document).ready(function(){
		
		 
	 
    
	  
							

	 
    });
	
	

 
	
	
	
	</script>
