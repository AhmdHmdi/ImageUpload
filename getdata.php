<?php
$host = 'localhost';
$user = 'root';
$pass = '';

mysql_connect($host, $user, $pass);

mysql_select_db('images');

//$mysqliconn = new mysqli("localhost","root","","images");

$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO imagestable (Path, Image) VALUES('$imagename','$imagetmp')";

mysql_query($insert_image);

?>
