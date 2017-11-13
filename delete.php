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
	
    $query_delete = "DELETE FROM catalog WHERE SKU='".($_GET["SKU"])."'"; 
    $mysqli->query($query_delete); 
    header('Location: admin.php'); 
		
	?> 

    <body> 
	
    </body> 
</html> 