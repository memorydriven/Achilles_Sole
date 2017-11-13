<!DOCTYPE html>
<html> 
    <head> 
        <meta charset="UTF-8"> 
        <title>Delete Page - Alex Andersen</title>
		<link rel="stylesheet" href="css/styles.css"> 
    </head> 
    
	<? 
    session_start(); 
	
	$mysqli = new mysqli("localhost","dig4530c_group12","knights4321!","dig4530c_group12");
	
	$select_query_sku = "SELECT Product, Description, Category, SKU, Stock, Cost, Price, Image, Weight FROM catalog WHERE SKU='".($_GET["SKU"])."'"; 
    $select_result_sku = $mysqli->query($select_query_sku);
		
	if(isset($_POST['submit'])) { 
	
		if(empty($_POST['Product'])|| empty($_POST['Description'])|| empty($_POST['Category'])|| empty($_POST['SKU'])|| empty($_POST['Stock'])|| empty($_POST['Cost'])|| empty($_POST['Price'])|| empty($_POST['Image'])|| empty($_POST['Weight'])){
			print"\t<div class=\"form\">\n";
				echo "Please enter all forms";
			print"\t</div>\n";	
		}
		
		else{
			$query_insert = "UPDATE catalog SET Product = '".$_POST['Product']."', Description = '".$_POST['Description']."', Category = '".$_POST['Category']."', SKU = '".$_POST['SKU']."', Stock = '".$_POST['Stock']."', Cost = '".$_POST['Cost']."', Price = '".$_POST['Price']."', Image = '".$_POST['Image']."', Weight = '".$_POST['Weight']."' WHERE SKU = '".($_GET["SKU"])."'"; 
			
			if ($mysqli->query($query_insert) === TRUE) {
				echo "Record updated successfully";
			} else {
				echo "Error updating record: " . $mysqli->error;
}
			header('Location: admin.php');
		}
    }

	if(isset($_POST['cancel'])) {
		header('Location: admin.php');
	}
		
	?> 

    <body> 
	
		<div class="form_edit">
			<form method="post" action="">
				<?
					while($row = $select_result_sku->fetch_array(MYSQLI_ASSOC)) {

						print "<label for=\"Product\">Product</label>";
						print "<input name=\"Product\" id=\"Product\" type=\"text\" value=\"".$row['Product']."\"><br>";
						print "<label for=\"Description\">Description</label>";
						print "<input name=\"Description\" id=\"Description\" type=\"text\" value=\"".$row['Description']."\"><br>";
						print "<label for=\"Category\">Category</label>";
						print "<input name=\"Category\" id=\"Category\" type=\"text\" value=\"".$row['Category']."\"><br>";
						print "<label for=\"SKU\">SKU</label>";
						print "<input name=\"SKU\" id=\"SKU\" type=\"text\" value=\"".$row['SKU']."\"><br>";
						print "<label for=\"Stock\">Stock</label>";
						print "<input name=\"Stock\" id=\"Stock\" type=\"text\" value=\"".$row['Stock']."\"><br>";
						print "<label for=\"Cost\">Cost</label>";
						print "<input name=\"Cost\" id=\"Cost\" type=\"text\" value=\"".$row['Cost']."\"><br>";
						print "<label for=\"Price\">Price</label>";
						print "<input name=\"Price\" id=\"Price\" type=\"text\" value=\"".$row['Price']."\"><br>";
						print "<label for=\"Image\">Image</label>";
						print "<input name=\"Image\" id=\"Image\" type=\"text\" value=\"".$row['Image']."\"><br>";
						print "<label for=\"Weight\">Weight</label>";
						print "<input name=\"Weight\" id=\"Weight\" type=\"text\" value=\"".$row['Weight']."\"><br>";

					}
					$mysqli->close();
				?>
			<input name="submit" id="submit" type="submit" value="Confirm">
			<input name="cancel" id="cancel" type="submit" value="Cancel">
			</form>
		</div>

		
		
    </body> 
</html> 