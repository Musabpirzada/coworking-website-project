<?php
include 'connection.php';
if(isset($_POST['checkout'])){
  $account_holder=$_POST['account_holder'];
  $card_number=$_POST['card_number'];
  $expiry_date=$_POST['expiry_date'];
  $cvc=$_POST['cvc'];
  if(!empty($account_holder) && !empty($card_number) && !empty($expiry_date) && !empty($cvc)){
      $query = "INSERT INTO credit(account_holder,card_number,expiry_date,cvc) VALUES('$account_holder','$card_number','$expiry_date','$cvc')";
      $result = mysqli_query($conn,$query);
      if($result){
        header("Location: finish.html");
      }
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style media="screen">
    .ff{
background-color: #800000;
    }
    .bs{
      color: black;
      background-color: white;
      padding: 3%;
    }
    .icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}
.checkoutit{
  margin-top: 5%;
  padding-top: 3%;
  padding-bottom: 3%;
  padding-left: 40%;
  padding-right: 40%;
  background-color: #800000;
  color: white;
  font-weight: bold;
  border-style: hidden;
}
  </style>
  <body>
    <div class="container-fluid p-5 ff">

  <div class="row">
    <div class="col-md-6 bs">
      <h4>Card Accepted</h4>
      <div class="icon-container text-white">

                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-paypal" style="color: #142C8E;"></i>
                  </div>
<form class="" action="" method="post">

          <div class="row">
            <div class="col-md-12">
              <h4>Name on Card</h4>
              <input type="text" name="account_holder" value="" size="30" required="">
            </div>
          </div><br>
          <div class="row">
            <div class="col-md-12">
              <h4>Credit Card Number</h4>
              <input type="text" name="card_number" value="" placeholder="1111-2222-3333-4444" required="">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <h4>Expiry Date</h4>
              <input type="text" name="expiry_date" value="" placeholder="MM/YYYY" required="">
            </div>
          </div><br>
          <div class="row">
            <div class="col-md-12">
              <h4>CVV</h4>
              <input type="text" name="cvc" value="" placeholder="xxx" size="4" required="">

            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button type="submit" name="checkout" class="checkoutit">Checkout →</button>
            </div>

          </div>
        </form>
    </div>
    <div class="col-md-6 bg-white d-flex">
<img src="./image/payment.png" alt="">
    </div>
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
