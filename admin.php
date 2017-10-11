<!DOCTYPE html>
<html>
	<head>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--Google Icon Fonts-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css"> <!--Materialize CSS-->
         <link rel="stylesheet" href="../css/styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- Let browser know website is optimized for mobile--> 
        
         <link rel="stylesheet" href="css/styles.css">
        <meta charset="UTF-8">
		<title>Achilles Sole Admin - Daniel McDonald</title>
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
            <h1 class="page_header">ADMIN</h1>
      </div>
      </div>
      </div>
	  
	  
	  
	  <div class="col s3">
          <div class="col s12 sidebar_header center-align">
          <h5>MENU</h5>
          </div>
           <div class="col s12 sidebar_body center-align ">
               <p>Accounts</p>
           </div>  
          <div class="col s12 sidebar_body center-align " id= "sidebar_checkpoint">
               <p>Add</p>
           </div> 
           <div class="col s12 sidebar_body center-align">
               <p>Mail</p>
          </div>
           <div class="col s12 sidebar_body center-align">
               <p>Orders</p>
	  </div>
           <div class="col s12 sidebar_body center-align">
               <p>Settings</p>
	  </div>
           <div class="col s12 sidebar_body center-align">
               <p>Update</p>
	  </div>
	  </div> 
	  
	  <div class="col s9 ">
         
        
         <div class = "col s12 content_header center-align">
          <h4>ADD PRODUCT</h4>
             </div>

          
         <div class = "col s12 content_body" id="checkout_content_body">
          <div class="input-field col s12">
          <input  id="product_name" type="text" class="validate">
          <label for="product_name">Product Name</label>
            </div>
        
        
        

       <div class="col s3" >
           
            <div class="input-field col s12">
            <select>
              <option value="1">Boots</option>
            </select>
            <label>Category</label>
          </div>
           
           
      <div class="input-field col s12">
          <input  id="product_stock" type="text" class="validate">
          <label for="product_stock">Stock</label>
        </div>
             
      <div class="input-field col s12">
          <input  id="product_price" type="text" class="validate">
          <label for="product_price">Price</label>
        </div>
           <a class="waves-effect waves-light btn blue lighten-2">Submit</a>
          
      </div>
              
      <div class="col s9">
              <img class="responsive-img" alt ="upload image" src="img/upload.png">
              
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
		
		 
	 
      $('select').material_select();
	  
							

	 
    });
	
	

 
	
	
	
	</script>
