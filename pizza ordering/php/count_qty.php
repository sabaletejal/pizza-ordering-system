<?php
$conn = mysqli_connect('localhost','root','','pizza');
if(isset($_COOKIE['user_id'])){
$user_id = $_COOKIE['user_id'];

$query_count = "SELECT sum(p_qty) as total_product FROM cart WHERE user_id = '$user_id'";
$result = mysqli_query($conn,$query_count);

if(mysqli_num_rows($result) > 0 ){
	foreach ($result as $row) {
		echo $row['total_product'];
	}
}
}
else{
	echo "not";
}

?>