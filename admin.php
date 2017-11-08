<?
    session_start(); 
	
	$mysqli = new mysqli("localhost","dig4530c_group12","knights4321!","dig4530c_group12");
    
	$select_query = "SELECT id, email, password, shipping_address, shipping_address_city, shipping_address_state, shipping_address_zip, billing_address, billing_address_city, billing_address_state, billing_address_zip, username, level FROM users";
    $select_result = $mysqli->query($select_query);
	
	$select_query_data = "SELECT Product, Description, Category, SKU, Stock, Cost, Price, Image, Weight FROM catalog";
    $select_result_data = $mysqli->query($select_query_data);
	
	if($mysqli->error) {
        print ("Error connecting!  Message: ".$mysqli->error);
    }
	
		while($row = $select_result->fetch_object()) { 
            if ((($_POST['username']) == ($row->username)) && (md5($_POST['password']) == ($row->password))) {
                $_SESSION['logged_in'] = true;
				$_SESSION['logged_in_user_access'] = $row->level;
            } else { 
                // do nothing 
            } 
        } 
?>

<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8"> 
        <title>Login Page - Alex Andersen</title>
		<link rel="stylesheet" href="css/styles.css"> 
    </head> 
     
    <body> 
	<table>
		<thead>
			<tr>
	
				<th>Product</th>
				<th>Description</th>
				<th>Category</th>
				<th>SKU</th>
				<th>Stock</th>
				<th>Cost</th>
				<th>Price</th>
				<th>Image</th>
				<th>Weight</th>
				<?
					if($_SESSION['logged_in_user_access'] == 0) {
						print "\t\t<th>Delete</th>\n";
					}	
				?>
			</tr>	
		</thead>
				
		<tbody>
			<?
				while($row = $select_result_data->fetch_array(MYSQLI_ASSOC)) {

					print "\t<tr>\n";
					print "\t\t<td>".$row['Product']."</td>\n";
					print "\t\t<td>".$row['Description']."</td>\n";
					print "\t\t<td>".$row['Category']."</td>\n";
					print "\t\t<td>".$row['SKU']."</td>\n";
					print "\t\t<td>".$row['Stock']."</td>\n";
					print "\t\t<td>".$row['Cost']."</td>\n";
					print "\t\t<td>".$row['Price']."</td>\n";
					//print "\t\t<td><img src=\"".$row['Image']."\" alt=\"Game Picture\" height=\"225\" width=\"150\"></td>\n";
					print "\t\t<td>".$row['Weight']."</td>\n";
					print "\t\t<td><a href=\"delete.php?SKU=".$row['SKU']."\">delete</a></td>\n";
					print "\t</tr>\n";

				}
				$mysqli->close();
			?>
		</tbody>
    </body> 
</html>