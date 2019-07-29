<?php
include("config.php");
//customer table 
$tbl_customer="CREATE TABLE IF NOT EXISTS customer(
c_id INT(11) NOT NULL,
PRIMARY KEY(c_id),
name VARCHAR(50) NOT NULL,
email VARCHAR(50)NOT NULL)";
$customer=mysqli_query($myconn,$tbl_customer);
if($customer===TRUE)
{
	echo"<br>customer table reated happy codding (:";
}
else
{
		echo"<br>customer table not reate ):";

}
//Product table 
$tbl_product="CREATE TABLE IF NOT EXISTS product(
picname VARCHAR (50) NOT NULL,
img_name VARCHAR (50) NOT NULL,
img_path VARCHAR (50) NOT NULL,
img_type VARCHAR (50) NOT NULL)";

$cv=mysqli_query($myconn,$tbl_product);
if($cv===TRUE)
{
	echo"<br>cv table reated happy codding (:";
}
else
{
		echo"<br>cv table not reate ):";

}


?>