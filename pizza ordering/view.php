













<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Maria's Pizza</title>
  <link rel="icon" type="image/x-icon" href="https://the-pizza-home.myshopify.com/cdn/shop/files/logo_300x300.png?v=1630475226">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xzoom/1.0.15/xzoom.min.js"
        integrity="sha512-kKt0oznSOD4MQo2nWJDWggE968N4Bvwn1VRr0RfMx1ozdC2FLCVLJDuHoeMfbWZU/F50yANpekr6dNTVfaLKdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/xzoom/1.0.15/xzoom.css"
        integrity="sha512-3/KS4uz6rH0JEXfHAhg9iiVXUnNU0+oiDc43ZyeNRr1ENCTgDMUPEZImbfl0gRU3rNCRSi+4RHp7goPpabBE7g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    * {
        padding: 0;
        margin: 0;
    }

    .view_pro_div {
        width: 100%;
        height: auto;
        background-color: white;
        display: grid;
        grid-template-columns: 40% 40%;
        grid-template-rows: auto;
        justify-content: space-evenly;
        margin-top: 50px;

    }

    .Chickeroni {
        font-size: 30px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .xzoom-gallery:hover {
        border: 3px solid rgb(241, 191, 12);
    }

    .size_box {
        width: 40px;
        height: 30px;
        background-color: white;
        border: 2px solid rgb(241, 191, 12);
        font-size: small;
        color: rgb(137, 134, 134);
        border-radius: 5px;
    }

    .Crust_box {
        width: 100px;
        height: 30px;
        background-color: white;
        border: 2px solid rgb(241, 191, 12);
        color: rgb(241, 191, 12);
        border-radius: 5px;
    }

    span {
        font-family: "Manrope", sans-serif;
    }

    button:hover {

        background-color: rgb(254, 197, 37);

        border: none;
        color: rgb(73, 72, 72);
    }

    .button_add3 {
        display: grid;
        grid-template-columns: 20% 15% 25%;
        grid-template-rows: 40px;
        gap: 20px;
    }

    .Add_btn {
        background-color: white;
        border-radius: 20px;
        border: 2px solid rgb(241, 191, 12);
        font-family: inherit;
    }

    .Buy_btn {
        background-color: white;
        border-radius: 20px;
        border: 2px solid rgb(241, 191, 12);
        font-family: inherit;
    }

    .wishlist_btn {
        background-color: white;
        border-radius: 20px;
        border: 2px solid rgb(241, 191, 12);
        font-family: "Manrope", sans-serif;
        font-family: inherit;
    }

    .mean_div_rew {
        margin-left: 20%;
    }

    .review_info {
        width: 70%;
        height: 150px;
        border: 1px solid rgb(235, 232, 232);
        border-radius: 0px 10px 10px 10px;


    }

    .review_info_btn {
        width: 20%;
        height: 40px;
        border-radius: 0px 30px 0px 0px;
        border: 3px solid rgb(255, 200, 0);
        background-color: rgb(255, 200, 0);
        font-family: inherit;

    }

    .Customer_info {
        margin-left: 30px;
    }

    .Write_btn {
        width: 20%;
        height: 40px;
        border-radius: 20px;
        border: 3px solid rgb(255, 200, 0);
        background-color: rgb(255, 200, 0);
        margin-left: 75%;
        font-family: inherit;
    }


    input {
        width: 70%;
        height: 40px;
        border-radius: 20px;
        border: 2px solid lightgray;
        text-indent: 30px;
    }

    .Submit_btn {
        width: 15%;
        height: 40px;
        border-radius: 20px;
        border: 3px solid rgb(255, 200, 0);
        background-color: rgb(255, 200, 0);
        font-family: inherit;
    }

    #hide_div {
        width: 100%;
        height: 500px;
        border: 1px solid rgb(235, 232, 232);
        border-radius: 10px;

    }

    .review_div {
        margin-left: 30px;
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

    a {
        text-decoration: none;
        color: white;

    }

    .menu:hover {
        color: rgb(255, 200, 0);
    }

    .menu::after {
        content: "";
        width: 0%;
        height: 2px;
        background-color: rgb(255, 200, 0);
        display: block;
        transition: all 3s;
    }

    a:hover::after {
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
    .xzoom{
        box-shadow: none;
        border: none;
    }
    .xzoom-gallery{
        border: 3px solid rgb(255, 200, 0);
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
    }
</style>

<body>



    <div class="nav">

        <div style="margin-left: 40px;">
            <img onclick="goback_frist_page()" src="https://the-pizza-home.myshopify.com/cdn/shop/files/logo_300x300.png?v=1630475226" width="80px"
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
              

<a class="text-reset me-3" href="cart.php">
        <i style="color:white!important;"  class="fas fa-shopping-cart"></i>
        <span  class="badge rounded-pill badge-notification bg-danger count_produt">0</span>
      </a>

                <i class="fa-regular fa-heart"></i>
                <i class="fa-regular fa-circle-user"></i>
            </div>
        </ul>
    </div><br><br><br>








    <div class="view_pro_div">
        <div class="">

            <img class="xzoom" width="88%" height="500px" id="main_image"
                src="img/<?=$_GET['image']?>">

            <!-- Thumbnails -->
            <a
                href="img/pizza6.jpeg"><br><br>
                <img class="xzoom-gallery" width="123" height="100px"
                    src="img/<?=$_GET['image']?>">
            </a>

            <a
                href="img/pizza3.jpg">
                <img class="xzoom-gallery" width="120" height="100px"
                    src="img/pizzza7.jpg">
            </a>
            <a
                href="img/pizza4.jpeg">
                <img class="xzoom-gallery" width="120" height="100px"
                    src="img/pizzza8.jpg">
            </a>

            <a
                href="img/pizza5.jpg">
                <img class="xzoom-gallery"width="120" height="100px"
                    src="img/pizzza5.jpg">
            </a>
        </div>
        <div>
            <span class="Chickeroni">Chickeroni (Chicken Pepperoni)</span><br><br><br>
            <span><b>Price : </b></span><span>&nbsp;&nbsp;&nbsp;&nbsp; <?=$_GET['price']?>.00</span><br><br><br>
            <span><b>Size : </b></span><span>
                <div style="display: flex;gap: 5px;margin-left: 50px;margin-top: -25px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;<button class="size_box">M</button>
                    &nbsp;&nbsp;<button class="size_box">S</button>
                    &nbsp;&nbsp;<button class="size_box">L</button>
                </div>
            </span><br><br>
            <span><b>Crust : </b></span><span>
                <div style="display: flex;gap: 10px;margin-left: 50px;margin-top: -25px;">
                    &nbsp;&nbsp;&nbsp;<button class="Crust_box">Crust Brust</button>
                </div>
            </span><br><br>
            <span><b>Vender : </b></span><span>&nbsp;&nbsp;&nbsp;<?=$_GET['name']?></span><br><br><br>
            <span><b>Type : </b></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pizza Kitchen</span><br><br><br>
            <span><b>Availability : </b></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pizza
                Kitchen</span><br><br><br>
            <span><b>Quntity : </b></span>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input style="width:80px;height:30px;border-radius: 10px;border: 2px solid rgb(241, 191, 12);"
                    type="number" class="qty_text" min="1" name="" value="1">
                    <input type="hidden" name="" class="p_id_text" value="<?=$_GET['id']?>">
                    <input type="hidden" name="" class="p_price_text" value="<?=$_GET['price']?>">
            </span><br><br><br>

            <div class="button_add3">
                <button onclick="add_to_cart_btn()" class="Add_btn">Add to cart</button>
                <button class="Buy_btn">Buy it now</button>
                <button class="wishlist_btn">Add to wishlist</button>
            </div>

        </div>
    </div>
    </div><br><br><br><br><br><br>



    <div class="mean_div_rew">


        <button class="review_info_btn">Reviews</button>
        <div class="review_info">
            <div class="Customer_info">
                <br>
                <h2>Customer Reviews</h2><br>
                <i class="fa-regular fa-star star-icon" id="1"></i>
                <i class="fa-regular fa-star star-icon" id="2"></i>
                <i class="fa-regular fa-star star-icon" id="3"></i>
                <i class="fa-regular fa-star star-icon" id="4"></i>
                <i class="fa-regular fa-star star-icon" id="5"></i>
                <span style="color: rgb(116, 113, 113);"> &nbsp;&nbsp;&nbsp;Based on 1 review</span>
                <button class="Write_btn">Write a review</button>
                <br> <br>

            </div><br><br><br>


            <div id="hide_div">
                <div class="review_div">
                    <br>
                    <h2>Write a review</h2>
                    <br>
                    <label for=""><b>Name</b></label><br><br>
                    <input type="text" name="" id="" placeholder="Name">
                    <br><br>
                    <label for=""><b>Email</b></label><br><br>
                    <input class="input_rew" type="email" name="" id="" placeholder="Joins,smith@gmail.com">
                    <br><br>
                    <label for=""><b>Rating</b></label><br><br>

                    <i class="fa-regular fa-star star-icon" id="1"></i>
                    <i class="fa-regular fa-star star-icon" id="2"></i>
                    <i class="fa-regular fa-star star-icon" id="3"></i>
                    <i class="fa-regular fa-star star-icon" id="4"></i>
                    <i class="fa-regular fa-star star-icon" id="5"></i>
                    <br><br>
                    <label for=""><b>Reviwe Title</b></label><br><br>
                    <input type="text" name="" id="" placeholder="Give your review a title">
                    <br><br>
                    <button class="Submit_btn">Submit review</button>
                </div>

            </div><br><br>




            <script>
                // function goback_frist_page() {
                //     window.history.back();
                // }

                $(".Write_btn").click(function () {
                    $("#hide_div").toggle()

                })

                $(".xzoom, .xzoom-gallery").xzoom({
                    position: "lens",
                    mposition: "fullscreen",
                    lens: true,
                    zoomWidth: 200,
                    zoomHeight: 200,

                });






  function add_to_cart_btn(){
    alert("ok")
    
     var p_id = $('.p_id_text').val(); 
     var p_price = $('.p_price_text').val();
     var p_qty = $('.qty_text').val();

     $.ajax({
         url:'php/count_insert_image.php',
         method:'POST',
         data:{p_id:p_id, p_price:p_price, p_qty:p_qty},
         success:function(res){
          // alert(res);
         total_product_count() 
         }
     })

  }

  total_product_count();
  function total_product_count(){
    $.ajax({
      url:'php/count_qty.php',
      method:'POST',
      success:function(res){
        $('.count_produt').html(res);
      }
    })
  }


                $(".star-icon").click(function () {
                    var id = $(this).attr('id');
                    $('#1').addClass('active');
                    $('#1').removeClass('fa-regular');
                    $('#1').addClass('fa-solid');

                    $('#2').addClass('active');
                    $('#2').removeClass('fa-regular');
                    $('#2').addClass('fa-solid');

                    $('#3').addClass('active');
                    $('#3').removeClass('fa-regular');
                    $('#3').addClass('fa-solid');

                    $('#4').addClass('active');
                    $('#4').removeClass('fa-regular');
                    $('#4').addClass('fa-solid');

                    $('#5').addClass('active');
                    $('#5').removeClass('fa-regular');
                    $('#5').addClass('fa-solid');







                })

            </script>
</body>

</html>