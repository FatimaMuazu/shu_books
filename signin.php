
<?php

include "shubooks_access.php";
$tbl_name="users";

$myconnect= mysql_connect ("homepages.shu.ac.uk", "b5040106", "Ol0lade2")or die
("cannot connect");

$email= $_POST ['email'];
 $password= $_POST['password'];
 
mysql_select_db ("$db_name") or die("cannot select DB");
 
 
 $querry  = "SELECT * FROM `users` WHERE email = '$email'";

$result = mysql_query($querry,$myconnect);
if(mysql_num_rows($result) > 0) 
{
//$row = mysql_fetch_assoc($result);
$row = mysql_fetch_array($result);
if(($row["email"]==$email).( $row["password"]==$password))
	{
		
		echo"You have been validated! ";
echo "<a href='homepage.html'> Click here to continue </a>";
		//$email= $row['email'];
	//	setcookie ("email", "$email", time() +3600);
		
	}
else
	{
		//ho"Sorry, your credentials are not valid, Please try again.";
		die('Error in email or password: ' . mysql_error());
	}
}
else
{
	die('No Record found: ' . mysql_error());
	
	}

?>

<?php
//close connection 
mysql_close();

?>
