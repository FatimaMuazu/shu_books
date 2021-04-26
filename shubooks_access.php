<?php

$host="homepages.shu.ac.uk"; //host name
$username="b5040106"; // MySql admin user
$password="Ol0lade2"; // Admin Password
$db_name="b5040106_db1"; // Database name

//connect to server and database
$myconnect= mysql_connect ("homepages.shu.ac.uk", "b5040106", "Ol0lade2")or die
("cannot connect");


/*if ($myconnect)
{
	echo "connected";
}
else 
{
	echo "not connected";
}
*/


mysql_select_db("$db_name") or die
("cannot connect DB");
?>