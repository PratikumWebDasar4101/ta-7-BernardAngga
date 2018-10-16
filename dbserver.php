<?php
$conn = mysqli_connect("localhost","root","","data");

if(!$conn){
	die("gagal terhubung".mysqli_error($conn));
}
?>
