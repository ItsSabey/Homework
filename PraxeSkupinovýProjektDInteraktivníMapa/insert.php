<?php
require("Config.php");
$con = mysqli_connect($host, $username, $password,$database);
if(!$con)
{
echo 'Ripec';
}
if(!mysqli_select_db($con,$database))
{
    echo 'Funguje';

}


$name= $_POST["name"];
$longitude= $_POST["longitude"];
$latitude= $_POST["latitude"];

$sql = "INSERT INTO place (name,longitude,latitude) VALUES ('$name','$longitude','$latitude')'";
if(!mysqli_query($con,$sql))
{
    echo 'nefungujeaaaaaaaaaaaaaaa';
   

}
else
{
    echo 'Jej funguje';
}
header("referesh:2; url=databaze.html");

?>