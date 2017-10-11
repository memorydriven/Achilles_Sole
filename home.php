<?

    $conn = mysqli_connect('localhost', 'da861727', 'l00kbeh1ndy0u','da861727');

  
    
    $query = "SELECT Name, Description, Category, SKU, Stock, Cost, Price, Image FROM shoes";
        ;
   
$result = mysqli_query( $conn, $query);
$row = mysqli_fetch_assoc($result);
    
  
       

?>




<!DOCTYPE html>
<html>
	<head>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--Google Icon Fonts-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css"> <!--Materialize CSS-->
         <link rel="stylesheet" href="../css/styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- Let browser know website is optimized for mobile--> 
        
         <link rel="stylesheet" href="css/styles.css">
        <meta charset="UTF-8">
		<title>Achilles Sole Home - Daniel McDonald</title>
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
  
   <div class="parallax-container">
    <div class="parallax"><img src="img/hero_image.jpg" alt="home page hero"></div>
  </div>
  <div class="section white" id="home_middle" >
    <div class="row">
          <div class="container">
      <div class="col s12">
            <div class = "header_box_below" >
           <div class = "header_box_top">
            <h1 class="page_header">FEATURED</h1>
      </div>
      </div>
      </div>
        
        
   
      
        
         <div class = "col s12 center-align">
		<div class = "catalog_item">
			<img class="responsive-img" src="<?
                echo $row['Image'];
                ?>" alt="product image">
			<p><?
                echo $row['Name'];
                ?></p>
			<p>$<?
                echo $row['Price'];
                ?></p>
            <p>
			 <i class="material-icons">star</i>
			 <i class="material-icons">star</i>
			 <i class="material-icons">star</i>
			 <i class="material-icons">star</i>
			 <i class="material-icons">star_half</i>
            </p>
			<p>So strong and stylish, the greeks would have worn them.</p>
            </div>
            </div>
            
       </div>
        
        </div>
        </div>
         <div class="parallax-container">
    <div class="parallax"><img src="img/home_logo.png" alt="home page hero"></div>
  </div>
  
 
  <? include 'footer.php'; ?>
            
	
	
	
	<!--JS is loaded at the end of the body to reduce page load time-->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script> <!--jQuery-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script> <!--Materialize JS-->
	<script>
	
	
	  $(document).ready(function(){
		
	  
				  $('.parallax').parallax();			

	 
    });
	
	

 
	
	
	
	</script>
