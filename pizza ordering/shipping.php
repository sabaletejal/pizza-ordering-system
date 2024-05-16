






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
*{
    margin: 0%;
    padding: 0;
}
.parent_contact{
    width: 100%;
    height: auto;
    background-color: lightgray;
    display: grid;
    grid-template-columns: 60% 40%;

}
.contact_div{
    margin-left: 10%;
}
.input_width{
    width: 70%;
    height: 50px;
    border: none;
    border-radius: 5px;
    font-size: 12px;
    text-indent: 20px;
}
.input_flex{
    width: 35%;
    height: 50px;
    border: none;
    border-radius: 5px;
    font-size: 12px;
    text-indent: 20px;  
}

select{
    width: 70%;
    height: 50px;
    border: none;
    border-radius: 5px;
    font-size: 12px;
    text-indent: 20px;
    color: rgb(119, 118, 118);
}
button{
    width: 35%;
    height: 40px;
    border: none;
    background-color: rgb(255, 204, 0);
    border-radius: 5px;
    
}

    </style>
</head>
<body>
    
    <div class="parent_contact">
        <div class="contact_div">
            <br><br><br>
           <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Contact</h2><br>
           <input class="input_width email_text" type="text" placeholder="Email or mobile phone number"> <br><br><br>




           <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Delivery</h2><br>
           <select class="country_text"   id="country">
            <option value="volvo">Country/Region</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Canada">Canada</option>
            <option value="France">France</option>
            <option value="India">India</option>
            <option value="Iran">Iran</option>
            <option value="Japan">Japan</option>
            <option value="Nepal">Nepal</option>
          </select><br><br>
          <select class="state_text"   id="State">
            <option value="State">State</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Bihar">Bihar</option>
            <option value="Goa">Goa</option>
            <option value="France">Gujrat</option>
            <option value="Karntaka">Karntaka</option>
            <option value="Kerla">Kerla</option>
            <option value="Japan">Maharashtra</option>
            <option value="Uttar pradesh">Uttar pradesh</option>
          </select><br><br>
          <input class="input_width full_name_text" type="text" placeholder="Full name"><br><br>
          <input  class="input_width address_text" type="text" placeholder="Adress"> <br><br>
          <input class="input_flex city_text" type="text" placeholder="City">
          <input class="input_flex pin_text" type="text" placeholder="PIN code"> <br><br><br>


         
           

        </div>
      
        <div>
    
            <br><br><br>
    
          <div>
            <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Order summary</h2><br><br>
                                               <?php
          $conn = mysqli_connect('localhost','root','','pizza');
          $user_id = $_COOKIE['user_id'];
          $sub_total = 0;
          $query = "SELECT cart.*,cart.p_qty as total_qty, Product.* FROM cart INNER JOIN Product ON cart.p_id = Product.p_id WHERE user_id = '$user_id'";
          $result = mysqli_query($conn,$query);

          if(mysqli_num_rows($result) > 0){
            foreach ($result as $row) {
              // code...
           
          ?>

            <p><b><?=$_GET['name']?></b> </p><br>  
            <img style="border: 1px solid rgb(173, 169, 169);border-radius: 8px;" width="20%" height="15%" src="img/<?=$_GET['image']?>" alt=""><br><br>
            <p style="font-size: 15px;">M / Pan pizza / Veg</p><br>
                              <?php
    $sub_total += $row['total'];
  }
}
?>
            <h3 style="color: rgb(56, 56, 55);font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Subtotal : <?=$sub_total?>.00</h3><br>

 

            <br><br>
            <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Payment</h2><br>
            <button onclick="place_order()">Place order</button>
        
    
       
     
        </div>


    </div>


    <script>
        function place_order(){



  var email = $('.email_text').val();
  var country = $('.country_text').val();
  var state = $('.state_text').val();
  var full_name = $('.full_name_text').val();
  var address = $('.address_text').val();
  var city = $('.city_text').val();
  var pin = $('.pin_text').val();
//   var payment_option = $('input[name="dbt"]:checked').val();
  // alert("ok");

  if(email == '' || country == '' || state == '' || full_name == '' || address == '' || city == '' || pin == '' )
  {
    alert('all filed requride');
  }


  else{

  $.ajax({
    url:"php/shpping_address.php",
    method:"POST",
    data:{email:email,country:country,state:state,full_name:full_name,address:address,city:city,pin:pin},
    success:function(res){
      // alert(res);
 location.href = 'success.php'
    }
  })
  }
}

    </script>
</body>
</html>