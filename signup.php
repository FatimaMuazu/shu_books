<?php
include (shubooks_access.php);
$tbl_name="users";

$myconnect= mysql_connect("homepages.shu.ac.uk","b5040106","Ol0lade2")or die
("cannot connect");
echo "connected";
echo "<br>";

$firstname= $_POST ['firstname'];
$lastname= $_POST ['lastname'];
$email= $_POST['email'];
$password= $_POST['password'];
$age= $_POST['age'];
$sex= $_POST['sex'];
$phonenumber= $_POST['phonenumber'];
$address= $_POST['address'];
// databse fields comes first, then the VALUES is the textfield on the html code or form, they are arranged according to the database structure
$sqlquerry="INSERT into users
(firstname,lastname,email,password,age,sex,phonenumber,address) 
VALUES ('$firstname', '$lastname' , '$email', '$password', '$age', '$sex', '$phonenumber', '$address')";

mysql_select_db ("b5040106_db1") or die
("cannot select DB");
$feedback= mysql_query($sqlquerry, $myconnect);
if (! $feedback)
{
	die ('could not enter data:' . mysql_error());	
}
echo "Enter data successfully\n";
echo "<a href='signup.html'> <br> Click here to continue</a>"
?>

<?php
//close connection 
mysql_close();
?>


