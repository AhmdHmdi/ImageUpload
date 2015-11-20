<?php

header("content-type:image/jpg");

$host = 'localhost';
$user = 'root';
$pass = '';

mysql_connect($host, $user, $pass);

mysql_select_db('images');

$name=$_GET['name'];

//$select_image="select * from imagestable where ID=1";
$select_image="select * from imagestable where ID='".$name."'";

$var=mysql_query($select_image);

if($row=mysql_fetch_array($var))
{
    $image_name=$row["Path"];
    $image_content=$row["Image"];
}
//echo $image;
echo $image_content;

?>