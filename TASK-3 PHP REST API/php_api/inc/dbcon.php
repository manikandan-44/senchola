<?php
$conn=mysqli_connect("localhost","root","","phpapi");
$sql="select * from students";
$res=mysqli_query($conn,$sql);
if(!$conn)
{
 die("connection error".mysqli_connect_error());
}

?>