<?php
$conn = mysqli_connect('localhost','root','','pizza')
$cart_id = $_POST['cart_id'];

$query = "DELETE FROM cart WHERE cart_id = '$cart_id'";
if(mysqli_query($conn,$query)){
	echo "delete";
}
?>