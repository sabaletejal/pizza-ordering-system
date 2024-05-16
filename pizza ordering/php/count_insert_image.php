<?php
$conn = mysqli_connect('localhost','root','','pizza');

$p_id = $_POST['p_id'];
$p_price = $_POST['p_price'];
$p_qty = $_POST['p_qty'];
$user_id = $_COOKIE['user_id'];
$total = $p_price * $p_qty;

$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
 $cart = json_decode($cart);

 $sql = "SELECT * FROM product WHERE p_id = '$p_id'";
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result) > 0){
//$cart = [];

// array_push($cart, array(
//     "p_id" => $p_id,
//     "quantity" => $p_price,
//     "product" => $p_qty
// ));


array_push($cart, array("p_id"=>$p_id, "p_price"=>$p_price, "p_qty"=>$p_qty, "total"=>$total,));


echo json_encode($cart);
//setcookie("cart", json_encode($cart));


setcookie("cart", json_encode($cart), time() + (86400 * 30), "/");
}

$sql = "SELECT * FROM cart where p_id = '$p_id' AND User_id = '$user_id'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0){



	
	$sql_upd = "UPDATE cart SET p_qty = p_qty + '$p_qty',total = p_qty * '$p_price' WHERE p_id = '$p_id' AND User_id = '$user_id'";
    if (mysqli_query($conn, $sql_upd)){
    	echo "Qty updadted";
    }	

}
else{

	$sql_ins = "INSERT INTO cart(p_id,p_price,p_qty,total,User_id) values ('$p_id','$p_price','$p_qty','$total','$user_id')";
	if (mysqli_query($conn, $sql_ins)) 	 
	{
		echo "product added";
	}
	else{
		echo "product not added";
	}

}

?>