<?php
 $order_id_iva = "IWA".rand();
setcookie('order_id',$order_id_iva ,time() + (86400 * 30), "/");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
rel="stylesheet"
/>


    <style>
        * {
            margin: 0%;
            padding: 0;
        }

        .nav {
            background-color: rgb(8, 8, 8);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        li {
            list-style-type: none;
            padding: 20px;
        }

        .menu_list {
            display: flex;

        }

        .nav a {
            text-decoration: none;
            color: white;

        }

        .nav a:hover {
            color: rgb(255, 200, 0);
        }

        .nav a::after {
            content: "";
            width: 0%;
            height: 2px;
            background-color: rgb(255, 200, 0);
            display: block;
            transition: all 3s;
        }

        .nav a:hover::after {
            width: 100%;
        }

        .Service {
            position: relative;
        }

        .Service:hover .dropdown {
            display: block;
        }

        .dropdown {
            display: none;
            width: 200px;
            position: absolute;
            background-color: rgb(255, 200, 0);
            top: 60px;
            right: -60px;
        }

        .fa-bars {
            display: none;
        }

        .nav input {
            display: none;
        }

        .all_cat {
            display: none;
        }

        .fa-plus {
            display: none;
        }

        .fa-heart {
            margin-left: 20px;
        }

        .fa-circle-user {
            margin-left: 20px;
        }

        .nav i {
            color: white;
        }

        .parent {
            width: 100%;
            height: auto;
            display: grid;
            grid-template-columns: 50% 20%;
            justify-content: center;
            gap: 20px;

        }

        .product_div {
            height: 250px;
            border: 1px solid lightgray;
            border-radius: 5px;
            display: grid;
            grid-template-columns: 40% 52% 8%;
            gap: 20px;
        }

        .fa-circle-xmark {
            color: rgb(255, 200, 0);
            margin-top: 5px;
        }

        button:hover {
            background-color: rgb(254, 197, 37);
        }
        .add_note_btn{
            width: 230px;
            height: 50px;
            border-radius: 30px;
            border: 2px solid rgb(254, 197, 37);
            background-color: white;

        }
        .footer {
    width: 100%;
    height: 350px;
    background-color: rgb(11, 11, 11);
    color: white;
  }

  .footer_div {
    font-size: small;
    display: grid;
    align-items: center;
    justify-content: center;
  }
  .footer_div p:hover{
    color:rgb(190, 5, 5);
  }

  .footer_logo {
    position: relative;
    margin-top: -100px;
    margin-left: 44%;
  }

  .footer_grid {
    width: 100%;
    display: grid;
    grid-template-columns: 10% 10% 40% 10%;
    justify-content: center;
    font-size: small;
  }




        @media (max-width:400px) {
            .menu_list {
                display: none;

            }

            input:checked~.menu_list {
                display: block;
                position: absolute;
                top: 1px;
                width: 70%;
                margin-top: 75px;
                margin-left: 30%;
                background-color: rgb(255, 200, 0);
            }

            .all_cat {
                display: block;

            }

            a::after {

                background-color: rgb(255, 200, 0);
            }

            a:hover::after {
                width: 25%;
            }

            .Service {
                position: relative;
            }

            .Service:hover .dropdown {
                display: block;
            }

            li {
                border-bottom: 1px solid rgb(166, 165, 165);
            }

            .fa-xmark {
                margin-left: 122px;
            }

            .fa-plus {
                display: block;
                margin-left: 210px;
            }

            .fa-bars {
                display: block;
                padding: 30px;
            }

            a:hover {
                color: white;
            }

            .dropdown {
                display: none;
                width: 280px;
                position: absolute;
                background-color: rgb(255, 200, 0);
                top: 70px;
                left: 1px;
            }
            .footer {
      width: 100%;
      height: 900px;
      background-color: rgb(11, 11, 11);
      color: white;
    }

    .footer_logo {
      position: relative;
      margin-top: -100px;
      margin-left: 25%;
    }

    .footer_div {
      display: grid;
      align-items: center;
      justify-content: center;
    }

        }
    </style>


</head>

<body>
    <div class="nav">

        <div style="margin-left: 40px;">
            <img src="https://the-pizza-home.myshopify.com/cdn/shop/files/logo_300x300.png?v=1630475226" width="80px"
                alt="">
        </div>

        <input type="checkbox" name="" id="menu_check">
        <label for="menu_check"><i class="fa-solid fa-bars"></i></label>


        <ul class="menu_list">
            <li><a class="all_cat" href="">
                    <b>All Category</b><i class="fa-solid fa-xmark"></i></a>
            </li>
            <li><a class="menu" href="">Home<i class="fa-solid fa-plus"></i></a></li>
            <li><a class="menu" href="">Pizza<i class="fa-solid fa-plus"></i></a></li>
            <li class="Service">
                <a href="">Menu <i style="font-size: small;" class="fa-solid fa-angle-down"></i>
                    <input class="plus_check" type="checkbox" name="" id="plus_service">

                    <label for="plus_service"><i class="fa-solid fa-plus"></i></label></a>
                <ul class="dropdown">
                    <li style=" border-bottom: 1px solid rgb(166, 165, 165);">
                        <a href="">Onion Blossom Pizza</a>
                    </li>
                    <li style=" border-bottom: 1px solid rgb(166, 165, 165);">
                        <a href="">Spicy Chees Piza</a>
                    </li>
                    <li style=" border-bottom: 1px solid rgb(166, 165, 165);">
                        <a href="">Four Chesse Pizza</a>
                    </li>
                    <li style=" border-bottom: 1px solid rgb(166, 165, 165);">
                        <a href="">Chicken Sausage Pizza </a>
                    </li>
                </ul>

            </li>
            <li><a class="menu" href="">Shop<i class="fa-solid fa-plus"></i></a></li>
            <li><a class="menu" href="">Pages<i class="fa-solid fa-plus"></i></a></li>
            <li><a class="menu" href="">Contact<i class="fa-solid fa-plus"></i></a></li>
            <div style="padding: 20px;margin-right: 60px;">
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-regular fa-heart"></i>
                <i class="fa-regular fa-circle-user"></i>
            </div>
        </ul>
    </div><br><br><br><br>

    <div class="parent">
        <h1 style="  font-family: Prompt, sans-serif;">Product</h1><br>


        <div>
                       <?php
          $conn = mysqli_connect('localhost','root','','pizza');
          $user_id = $_POST['user_id'];
          $sub_total = 0;
          $query = "SELECT cart.*,cart.p_qty as total_qty, Product.* FROM cart INNER JOIN Product ON cart.p_id = Product.p_id WHERE user_id = '$user_id'";
          $result = mysqli_query($conn,$query);

          if(mysqli_num_rows($result) > 0){
            foreach ($result as $row) {
              // code...
           
          ?>
        <div class="product_div">
   
            <div>
                <img style="border-radius: 5px 0px 0px 5px ; " width="100%" height="250px"
                    src="img/<?=$row['p_img']?>"
                    alt="">
            </div>
            <div>
                <br>
                <h3><?=$row['p_name']?></h3>
                <p style="font-size: 10px;">M / Pan pizza / Veg</p>
                <span><b style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Price : </b></span><span>&nbsp;&nbsp;&nbsp;&nbsp; <?=$row['p_price']?>.00</span><br>
                <span><b style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Quntity : </b></span>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                    <input style="width:80px;height:30px;border-radius: 10px;border: 2px solid rgb(241, 191, 12);"
                        type="number" class="qty_text p_qty<?=$row['cart_id']?>" min="1" name="" value="<?=$row['total_qty']?>" id="<?=$row['cart_id']?>">
                                      <input type="hidden"  name="p_id" value="<?=$row['p_id']?>" class="p_id<?=$row['cart_id']?>">
                 <input type="hidden" name="p_price" value="<?=$row['p_price']?>" class="p_price<?=$row['cart_id']?>">


                </span><br><br>
                <span><b  style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 20px;color: rgb(241, 191, 12);;">Total : </b></span><span>&nbsp;&nbsp;&nbsp;&nbsp; <?=$row['total']?>.00</span><br><br>
            </div>
            <div>
                <i class="fa-regular fa-circle-xmark delete delete<?=$row['cart_id']?>" id="<?=$row['cart_id']?>"></i>
            </div>


        </div><br>

    <?php
    $sub_total += $row['total'];
  }
}
?>
    </div>




        <div class="order_sum">
            <h1 style="  font-family: Prompt, sans-serif;">Order Summery</h1><br>
            <p style="color: rgb(255, 200, 0);font-size: 20px;"><b>Subtotal : <?=$sub_total?>.00</b></p>
            <button class="add_note_btn">Add a note to your order</button><br>
            <i>Shipping, taxes, and discounts will be calculated at checkout.</i><br><br>

     

            <a href="shipping.php?image=<?=$row['p_img']?>&price=<?=$row['p_price']?>&name=<?=$row['p_name']?>&subtotal<?=$sub_total?>">
            <button class="add_note_btn">Proceed to check out</button><br><br>
            </a>
        </div>

    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



    <div class="footer">
        <img class="footer_logo" src="https://cdn.shopify.com/s/files/1/0046/1615/9347/files/footer-logo.png?v=1532332716"
          alt="">
    
        <section class="footer_div">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-pizza-slice"></i> &nbsp;Maria's Pizza
                </h6>
                <p>
                  Get the best Pizza made to taste better and linger the memories in your mouth. Create a menu and serve yourself the best pizza in your area.
                </p>
              </div>
              <!-- Grid column -->
    
              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  support
                </h6>
                <p>
                  <a href="#!" class="text-reset">Contact</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">About</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Refunds & Returns</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Deliveries</a>
                </p>
              </div>
              <!-- Grid column -->
    
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Contact
                </h6>
                <p><i class="fas fa-home me-3"></i>Maria's Pizza Wada</p>
                <p>
                  <i class="fas fa-envelope me-3"></i>
                  info@example.com
                </p>
                <p>
                  <i class="fas fa-phone me-3"></i> + 01 234 567 88
                </p>
    
                <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
    
              </div>
              <!-- Grid column -->
    
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
    
                <h6 class="text-uppercase fw-bold mb-4">Social links</h6>
                <div style="display: grid;grid-template-columns: 10% 10% 10%; gap: 10px;">
                  <i style="width: 30px;height: 30px;color: white; display: grid;align-items: center;justify-content: center;"
                    class="fab fa-facebook-f"></i>
                  <i style="width: 30px;height: 30px; display: grid;align-items: center;justify-content: center;"
                    class="fab fa-google"></i>
                  <i style="width: 30px;height: 30px;color:white; display: grid;align-items: center;justify-content: center;"
                    class="fab fa-instagram"></i>
    
                </div>
    
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
      </div>













<script>
    $('.delete').click(function(){
  //alert("okk");
  var id = $(this).attr('id');
  //alert(id);
  $.ajax({
    url:"php/delete_cart.php",
    method:"POST",
    data:{cart_id:id},
    success:function(res){
      //alert(res);
      location.reload();
    }
  })

})
</script>









</body>

</html>