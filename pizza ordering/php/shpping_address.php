<?php
$conn = mysqli_connect('localhost','root','','pizza');

$email = $_POST['email'];
$country = $_POST['country'];
$state = $_POST['state'];
$full_name = $_POST['full_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$pin = $_POST['pin'];


$query_shi_ins = "INSERT INTO shipping_address(email,country,state,full_name,address,city,pin) values ('$email' , '$country','$state','$full_name','$address','$city','$pin')";
if(mysqli_query($conn,$query_shi_ins)){
	echo "inset";
}
else{
	echo "not inset";
}

// if(mysqli_query($conn,$query_shi_ins)){
// 	 $shipping_id = $conn->insert_id;
// 	setcookie('shipping_id', $shipping_id, time() + (86400 * 30), "/");

// 	//header('location:../view_product.php');
// 	echo "1";

// }
?>