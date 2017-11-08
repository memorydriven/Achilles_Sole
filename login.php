<?
    session_start(); 
	
	$mysqli = new mysqli("localhost","dig4530c_group12","knights4321!","dig4530c_group12");
    
	if(isset($_POST['submit']) && (!isset($_SESSION['logged_in']))) { 
	
	$select_query = "SELECT id, email, password, shipping_address, shipping_address_city, shipping_address_state, shipping_address_zip, billing_address, billing_address_city, billing_address_state, billing_address_zip, username, level FROM users";
    $select_result = $mysqli->query($select_query);
	if($mysqli->error) { 
            print "Select query error!  Message: ".$mysqli->error; 
        } 
	
	if($mysqli->error) {
        print ("Error connecting!  Message: ".$mysqli->error);
    }
	
		while($row = $select_result->fetch_object()) { 
            if ((($_POST['username']) == ($row->username)) && (md5($_POST['password']) == ($row->password))) {
                $_SESSION['logged_in'] = true;
				$_SESSION['logged_in_user_access'] = $row->access_level;
            } else { 
                // do nothing 
            } 
        } 
	}
	
	if (isset($_SESSION['logged_in'])) { 
        header("Location: signup.php"); 
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
		<div class="form_delete">
			<form method="post" action="#"> 
				<label for="username">Username</label> 
				<input name="username" id="username" type="text"><br> 
				<label for="password">Password</label> 
				<input name="password" id="password" type="password"><br> 
				<input name="submit" id="submit" type="submit" value="Login">
			</form>
		</div>
    </body> 
</html>