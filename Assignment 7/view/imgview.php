<?php
include("../database/config.php");
$sql="SELECT * FROM cv";
$result=mysqli_query($myconn,$sql);
while($row=mysqli_fetch_array($result))
{
	        $imgID=$row['imgID'];
		$name=$row['picname'];
		$imgname=$row['img_name'];
		$imgpath=$row['img_path'];

	echo '<a href="../model/imgdetails.php"> <img src="'.$imgpath.'" height="100px" width="100px" <br></a>';
}

?>