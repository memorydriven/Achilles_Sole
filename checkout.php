<!DOCTYPE html>
<html>
	<head>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--Google Icon Fonts-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css"> <!--Materialize CSS-->
         <link rel="stylesheet" href="../css/styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- Let browser know website is optimized for mobile--> 
        
         <link rel="stylesheet" href="css/styles.css">
        <meta charset="UTF-8">
		<title>Achilles Sole Checkout - Daniel McDonald</title>
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
      <div class="container">
       <div class="col s12">
            <div class = "header_box_below" >
           <div class = "header_box_top">
            <h1 class="page_header ">CHECKOUT</h1>
      </div>
      </div>
      </div>
      <div class="col s3 valign-wrapper">
          <div class="col s12">
          <div class="col s12  sidebar_header center-align"><h5>Progress</h5></div>
          <div class="col s12 center-align sidebar_body"><p>Billing Address</p></div>
          <div class="col s12 center-align sidebar_body"><p>Shipping Address</p></div>
          <div class="col s12 center-align sidebar_body"><p>Shipping Method</p></div>
          <div class="col s12 center-align sidebar_body"><p>Payment Method</p></div>
          
          </div>
          
    
      </div>
      <div class="col s9 ">
       <div class="col s12 content_header center-align ">
      <h4>Checkout</h4>
      </div>
        <div id= "checkout_content_body" 
             class="col s12 content_body valign-wrapper ">
          <div class="col s6 ">
            <p class="center-align">I have a profile</p>
        <div class="input-field">
          <input id="checkout_email" type="text" class="validate">
          <label for="checkout_email">Email</label>
        </div>
              <div class="input-field">
          <input id="checkout_password" type="text" class="validate">
          <label for="checkout_password">Password</label>
        </div>
              <a class="waves-effect waves-light blue  lighten-2 btn">Log in</a>
            </div>
            <div class="col s2">
            <h4>OR</h4>
            </div>
            
        
            <div id="checkout_guest_container" class=" col s4">
            
                <a href = "checkout_guest.php" class="center-align waves-effect waves-light blue lighten-2 btn">Guest</a>
                
                </div>

          </div>
      </div>
     
        </div>
        </div>

  <? include 'footer.php' ?>
 
  
	
	
	
	<!--JS is loaded at the end of the body to reduce page load time-->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script> <!--jQuery-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script> <!--Materialize JS-->
	<script>
	
	
	  $(document).ready(function(){
		
		 
	 
      $('.parallax').parallax();
	  
							

	 
    });
	
	

 
	
	
	
	</script>
