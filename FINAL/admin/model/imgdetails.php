<?php
include("../database/config.php");
$sql="SELECT * from cv ";
$result=mysqli_query($myconn,$sql);
echo '<table border="2px" width="100%">
		<tr><th> pic name</th>
		<th> Img_Name</th>
		<th> Img_path</th>
                <th> Img_type</th> 
		</tr>';
while($row=mysqli_fetch_array($result))
{
	$picname=$row['picname'];
	$name=$row['img_name'];
	$path=$row['img_path'];
        $type=$row['img_type'];
	$price=$row['price'];




echo'<tr><td height="100px" width="100px">'.$picname.'</td>
	<td height="100px" width="100px">'.$name.'</td>
	<td height="100px" width="100px"><img src="'.$path.'" height="100px" width="100px"></td>
	<td height="100px" width="100px">'.$type.'</td>
	<td height="100px" width="100px">'.$price.'</td>
	


			  
			  			  
			  </tr>';
}

?>