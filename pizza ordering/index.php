<!-- https://preview.themeforest.net/item/meati-meat-restaurant-elementor-template-kit/full_screen_preview/49917699?_ga=2.149344308.325435984.1703243654-134545836.1701188577 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maria's Pizza</title>
  <link rel="icon" type="image/x-icon" href="https://the-pizza-home.myshopify.com/cdn/shop/files/logo_300x300.png?v=1630475226">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
    integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
    integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Carattere&family=Ephesis&family=Monoton&display=swap"
    rel="stylesheet">
  <script src="https://unpkg.com/scrollreveal"></script>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
  }

  .start_nav {
    display: flex;
    gap: 30px;
    margin-top: 15px;
    text-indent: 20px;
  }

  .hr_line {
    content: " ";
    width: 99%;
    border: 1px solid rgb(198, 196, 196);
  }

  .nav {
    width: 100%;
    height: 50px;
    display: grid;
    grid-template-columns: 30% 30% 30%;
    position: absolute;
    top: 25px;


  }

  .logo {
    padding: 2px 30px;
  }

  ul {
    display: flex;
    gap: 30px;
    margin-top: 10px;

  }

  li {
    list-style-type: none;
    color: white;

  }
  .nav a{
    color:white  ;
  }
  .nav a:hover{
    color:rgb(254,197,37) ;
  }
 .nav a::after {
            content: "";
            color: rgb(254,197,37);
            transition: all 3s;
        }

  .RESERVE_btn {
    width: 120px;
    height: 40px;
    border: none;
    background-color: transparent;
    color: white;
    margin-left: 100%;
    margin-top: 5px;
    border: 1px solid white;


  }

  .line::before {
    content: " ";
    height: 200px;
    border: 1px solid rgb(198, 196, 196);
  }

  .div_2_mean {
    width: 100%;
    height: 600px;
    background-color: white;
  }

  .Crispy_heding {
    font-size: 50px;
    position: relative;
    margin-top: -500px;
    color: white;
  }

  .div_2_mean_mob {
    display: none;
  }

  .img_text_web {
    color: rgb(235, 223, 212);
    text-indent: 150px;
    margin-top: -300px;
  }

  .CHEESE {
    font-size: 50px;
    font-weight: bolder;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: rgb(216, 39, 39);
  }

  .FUN {
    font-size: 50px;
    font-weight: bolder;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   color: rgb(254, 197, 37); 
  }

  .GET {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: rgb(216, 39, 39);
  }

  .Shop_btn {
    width: 120px;
    height: 50px;
    border-radius: 30px;
    border: 2px solid rgb(254, 197, 37);
    color: white;
    background-color: transparent;
    font-size: small;
    margin-left: 150px;
  }

  .img_text_mob {
    display: none;
  }

  .pizza_house {
    width: 100%;
    height: 600px;
    background-color: rgb(247, 247, 247);
    display: grid;
    grid-template-columns: 50% 50%;
    margin-top: 80px;
  }

  .WELCOME {
    font-family: cursive;
    font-weight: bold;
  }

  .circle {
    width: 15%;
    height: 105px;
    border-radius: 50%;
    background-color: white;
    border: 2px solid black;
    display: grid;
    justify-content: center;
    align-items: center;

  }

  .circle:hover {
    background-color: rgb(254, 197, 37);
    border: none;
  }

  .view_btn {
    width: 170px;
    height: 45px;
    border-radius: 30px;
    border: 2px solid rgb(254, 197, 37);
    background-color: white;
    font-size: small;

  }

  .div2 {
    width: 80%;
    height: 650px;
    position: relative;
    top: 0;
    margin-top: 100px;
    margin-left: 10%;
    display: grid;
    grid-template-columns: 30% 30% 30%;
    align-items: center;
    gap: 20px;
    justify-content: space-evenly;
    margin-top: -80px;


  }

  .button3 {
    background-color: white;
    border-radius: 50px;
    border: 2px solid rgb(254, 197, 37);
    font-size: small;
  }

  button:hover {
    background-color: rgb(254, 197, 37);
  }

  .shop {
    position: relative;
    margin-top: 40px;
    text-align: center;
    color: black;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 38px;

  }

  .img_box {
    width: 100%;
    height: 450px;

  }

  .transparent_img_div {
    width: 96%;
    height: 435px;
    background-color: rgba(255, 255, 255, 0);
    box-shadow: white 0px 0px 0px -1px, white 1px 0px 7px -1px;
    position: relative;
    margin-left: 7px;
    margin-top: -442px;
    text-align: right;
    color: white;
  }

  .Read_btn {
    width: 60px;
    background-color: rgb(210, 14, 4);
    color: white;
    font-family: 'Philosopher', sans-serif;
    font-size: 9px;
    border-radius: 0px 0px 10px 0px;

  }

  .Read_btn:hover {
    background-color: rgb(255, 157, 0);
  }

  .div3_img {
    border-radius: 10px 0px 0px 10px;
    margin-left: 442px;
    position: absolute;
    margin-top: -100px;

  }

  .dish_img {
    position: relative;
    left: 896px;
    margin-top: 100px;
    animation: rotate;
    transition: 2s;

  }

  .div2_mob {
    display: none;
  }

  .div_4 {
    width: 100%;
    height: 1000px;
    display: grid;
    grid-template-columns: 20% 20% 20% 20%;
    justify-content: center;
    gap: 20px;
  }

  .New {
    margin-top: 20px;
    text-align: center;
    color: black;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 38px;
  }

  .button_new {
    display: grid;
    grid-template-columns: 6% 8% 6%;
    grid-template-rows: 70%;
    justify-content: center;
    gap: 10px;
  }

  .product_box {
    position: relative;
    margin-top: 20px;
    height: 450px;
 box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    background-color: white;
  }

  .product_name {
    color: rgb(78, 63, 57);
    font-size: 18px;
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    margin-top: 10px;

  }

  .price {
    color: rgb(193, 4, 4);
    text-align: center;
    font-family: 'Times New Roman', Times, serif;

  }

  .addcard_btn {
    border: 1px solid white;
    width: 70px;
    height: 25px;
    background-color: rgb(210, 14, 4);
    color: white;
    font-family: 'Philosopher', sans-serif;
    font-size: 10px;
    border-radius: 0px 0px 15px 0px;
  }

  .addcard_btn:hover {
    background-color: rgb(255, 157, 0);
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





  @keyframes rotate {
    100% {
      transform: rotate(360deg);
    }
  }

  @media(max-width:400px) {
    .nav {
      display: none;
    }

    .div_2_mean {
      display: none;
    }

    .div_2_mean_mob {
      display: block;
    }

    .img_text_web {
      display: none;
    }
    .CHEESE {
    font-size: 20px;
    color: rgb(216, 39, 39);
  }
  .FUN {
    font-size:  20px;
  }
  .Shop_btn {
    margin-left: 0px;
  }


    .Royal {
      font-size: 70px;
      font-family: 'Poppins', sans-serif;
      font-weight: bolder;
    }

    .img_text_mob {
      display: block;
      text-align: center;
      margin-top: -350px;
      color: rgb(235, 223, 212);
    }

    .Royal {
      font-size: 50px;
      font-family: 'Poppins', sans-serif;
      font-weight: bolder;
    }


    .div3_img {
      border-radius: 0 0 0 0;
      margin-left: 10%;
      position: absolute;
      margin-top: 0px;
      height: 200px;
      width: 80%;

    }

    .div3_img {
      border-radius: 10px 0px 0px 10px;
      margin-left: 0px;
      position: absolute;
      margin-top: 150px;

    }

    .img_box {
      width: 0px;
      height: 200px;

    }

    .transparent_img_div {
      width: 97%;
      height: 450px;
      background-color: rgba(255, 255, 255, 0);
      box-shadow: white 0px 0px 0px -1px, white 1px 0px 7px -1px;
      position: relative;
      margin-left: 7px;
      margin-top: -442px;
    }

    .pizza_house {
      width: 100%;
      height: 900px;
      display: grid;
      grid-template-columns: 100%;
      margin-top: 100px;
    }

    .pizza_img {
      width: 100%;
      height: 300px;
    }

    .WELCOME {
      margin-top: -10px;
      text-align: center;
    }

    .circle {
      width: 30%;
      height: 110px;
    }

    .circle1 {
      margin-left: 40%;
    }
    .circle:hover {
      background-color: rgb(254, 197, 37);
      border: none;
    }

    .circle_info {
      text-align: center;
    }

    .view_btn {
      margin-left: 28%;

    }

    button:hover {
      background-color: rgb(254, 197, 37);
    }

    .div2 {
      display: none;
    }

    .shop {
      margin-top: 20px;
      font-size: 25px;
    }

    .New {
      font-size: 25px;
    }

    .div2_mob {
      display: block;
      margin-top: 10px;
    }


    .button_new {
      display: grid;
      grid-template-columns: 20% 20% 20%;
      grid-template-rows: 70%;
      justify-content: center;
      gap: 10px;
    }


    .div_4 {
      width: 100%;
      height: auto;
      background-color: rgb(233, 233, 229);
      display: 600px;
      grid-template-columns: 80%;
      grid-template-rows: auto;
      justify-content: center;
      gap: 0px;
    }

    .product_box {
      height: 470px;
    }

    .product_name {
      margin-top: 0px;
    }

    .addcard_btn {
      position: relative;
      margin-top: -20px;
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

<body>


  <!-- <div class="start_nav">
        <span>Call: +1 652 638 957</span>
        <li>Quote : price@mail.com</li>
        <li>Info : +1 393 493 573</li>
    </div>
    <br>
    <div class="hr_line"></div> -->




  <div class="div_2_mean">
    <img src="https://the-pizza-home.myshopify.com/cdn/shop/files/Slider_bg1.jpg?v=1630474086" width="100%"
      height="700px" alt="">
  </div>
  <div class="div_2_mean_mob">
    <img src="https://the-pizza-home.myshopify.com/cdn/shop/files/Slider_bg1.jpg?v=1630474086" width="100%"
    height="500px" alt="">
  </div>
  <div class="nav">
    <div class="logo">
      <img width="100px" src="https://the-pizza-home.myshopify.com/cdn/shop/files/logo_300x300.png?v=1630475226" alt="">
    </div>
    <div>
      <ul>
        <li><a href=""> Home</a></li>
        <div class="line"></div>
        <li><a href="">About</a></li>
        <div class="line"></div>
        <li><a href="">Pages</a></li>
        <div class="line"></div>
        <li><a href="">Prices</a></li>
        <div class="line"></div>
        <li><a href="">Blog</a></li>
        <div class="line"></div>
        <li><a href="">Contact</a></li>
      </ul>
    </div>
    <div>
      <button class="RESERVE_btn">RESERVE</button>
    </div>
  </div>



  <div class="img_text_web">
    <h5>FRESH INGREDIENTS SOURCED GLOBALLY</h5>
    <h2 class="CHEESE">DUBLE THE CHEESE</h2>
    <h2 class="FUN">DUBLE THE FUN</h2>
    <h4>BY ONE REGULAR &</h4>
    <h3 class="GET">GET ONE FREE</h3><br>
    <button class="Shop_btn">Shop now</button>
  </div>
  <div class="img_text_mob">
    <h6>FRESH INGREDIENTS SOURCED GLOBALLY</h6>
    <h2 class="CHEESE">DUBLE THE CHEESE</h2>
    <h2 class="FUN">DUBLE THE FUN</h2>
    <h6>BY ONE REGULAR &</h6>
    <h6 class="GET">GET ONE FREE</h6><br>
    <button class="Shop_btn">Shop now</button>
  </div>

  <div class="pizza_house">
    <div>
      <img class="pizza_img" height="600px"
        src="https://the-pizza-home.myshopify.com/cdn/shop/files/img-2-1_768X_7189c801-3259-4f38-89ed-011923d281fd_970x.jpg?v=1631683867"
        alt="">
    </div>
    <div class="circle_div">
      <br>
      <h3 class="WELCOME">Welcome to Pizza House</h3><br>
      <div class="circle circle1">
        <img src="https://the-pizza-home.myshopify.com/cdn/shop/files/icon-3_180x.png?v=1613572100" alt="">
      </div>
      <div class="circle circle2" style="margin-left: 80px;">
        <img src="https://the-pizza-home.myshopify.com/cdn/shop/files/icon-2_180x.png?v=1613572100" alt="">
      </div>
      <div class="circle circle3" style="margin-left: 160px;">
        <img src="https://the-pizza-home.myshopify.com/cdn/shop/files/icon-1_180x.png?v=1613572100" alt="">
      </div><br>
      <div class="circle_info">
        <span style="font-size: small;">Our chefs are working 24/7 and are ready to accept visitors<br> and at any time
          of
          the day and night</span>
      </div><br><br>
      <a href="#show_viwbtn">
      <button  class="view_btn">View all collection</button></a>
    </div>
  </div>



  <h2 class="shop">Shop Categories<img width="40px" src="img/pizzaicon.png" alt=""></h2>
  <div class="div2">
    <div>
      <img class="img_box" src="https://cdn.pixabay.com/photo/2021/02/11/02/44/pizza-6004079_1280.jpg" alt="">

      <div class="transparent_img_div">
        <span>
          <h1 style="color: rgb(255, 157, 0);">50% <span
              style="font-weight: 100;font-size: 20px;color: white;">OFF</span></h1>
        </span>
        <button class="Read_btn">Order Now</button>
      </div>
    </div>
    <div>
      <img class="img_box"
        src="https://images.pexels.com/photos/3762075/pexels-photo-3762075.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      <div class="transparent_img_div">
        <span>
          <h1 style="color: rgb(255, 157, 0);">50% <span
              style="font-weight: 100;font-size: 20px;color: white;">OFF</span></h1>
        </span>
        <button class="Read_btn">Order Now</button>
      </div>
    </div>
    <div>
      <img class="img_box"
        src="https://media.istockphoto.com/id/184946701/photo/pizza.jpg?s=612x612&w=0&k=20&c=97rc0VIi-s3mn4xe4xDy9S-XJ_Ohbn92XaEMaiID_eY="
        alt="">
      <div class="transparent_img_div">
        <span>
          <h1 style="color: rgb(255, 157, 0);">20% <span
              style="font-weight: 100;font-size: 20px;color: white;">OFF</span></h1>
        </span>
        <button class="Read_btn">Order Now</button>
      </div>
    </div>
  </div>



  <div class="div2_mob">
    <div class="owl-carousel owl-theme">
      <div class="item">
        <img class="img_box"
          src="https://media.istockphoto.com/id/184946701/photo/pizza.jpg?s=612x612&w=0&k=20&c=97rc0VIi-s3mn4xe4xDy9S-XJ_Ohbn92XaEMaiID_eY="
          alt="">
        <div class="transparent_img_div"></div>
      </div>
      <div class="item">
        <img class="img_box"
          src="https://images.pexels.com/photos/3738755/pexels-photo-3738755.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="">
        <div class="transparent_img_div"></div>
      </div>
      <div class="item">
        <img class="img_box"
          src="https://opencart.templatetrip.com/OPC07/OPC202_tomato/OPC02/image/cache/catalog/demo/banners/4-home-default-370x240.jpg"
          alt="">
        <div class="transparent_img_div"></div>
      </div>
    </div>
  </div>

  <div id="show_viwbtn" style="width: 100%;height: 160px;display: grid;">
    <h2 class="New">New Arrivals<img width="40px" src="img/pizzaicon.png" alt=""></h2>
    <div class="button_new">
      <button class="button3">Chiken</button>
      <button class="button3">Mushroom</button>
      <button class="button3">Bacon</button>
    </div>
  </div>
  <div  class="div_4">




<?php

$conn = mysqli_connect('localhost','root','','pizza');
$sql = "SELECT * FROM product WHERE p_id";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0){
  foreach ($result as  $row) {

?>

    <div class="product_box">
      <a href="view.php?image=<?=$row['p_img']?>&price=<?=$row['p_price']?>&name=<?=$row['p_name']?>&id=<?=$row['p_id']?>">
      <img width="100%" height="350px"
        src="img/<?=$row['p_img']?>" alt="">
        </a>
      <h6 class="product_name"><?=$row['p_name']?></h5-6>
      <h6 class="price">
        Rs.<?=$row['p_price']?>
        <button class="addcard_btn">Add to card</button>
      </h6>
    </div>
    


<?php
  }
}
?>






















  </div>
  <br><br><br><br><br>










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
    var owl = $('.owl-carousel');
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      responsive: {
        0: {
          items: 1
        },
        400: {
          items: 1
        },
        1000: {
          items: 5
        }
      }
    })
    owl.on('mousewheel', '.owl-stage', function (e) {
      if (e.deltaY > 0) {
        owl.trigger('next.owl');
      } else {
        owl.trigger('prev.owl');
      }
      e.preventDefault();
    });

  


      </script>




</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>

</html>

<script>
  // ScrollReveal().reveal('.dish_img',  { reveal: true, reset: true, delay: 200, distance: '20px', easing: 'ease-in', scale: 0.95, interval: 600,  } );

</script>