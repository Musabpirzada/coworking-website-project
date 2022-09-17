<?php
include 'connection.php';
$xyz="SELECT * FROM booking order by booking_id desc limit 1";
$result=mysqli_query($conn,$xyz); //add bracket
$rows=mysqli_fetch_array($result);
// if($result){
//   header("Location: payment.php");
// }

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Confirm booking</title>
   </head>
   <body>
     <style media="screen">
     body{


     }
     .concolor{
       background-color: #800000;
       padding-top: 7%;
       padding-bottom: 7%;
     }
       .block{
         padding: 5%;
         color: black;
       }
       label{
         font-weight: bolder;
         font-size: 18px;
         color: #800000;
       }
       input{
         background: none;
         border: none;
       }
.btn1{
  background-color: #800000;
  color: white;
  border: none;
  padding-left: 8%;
  padding-right: 8%;
  padding-top: 5%;
  padding-bottom: 5%;
  border-top-left-radius: 50px;
  border-bottom-left-radius: 50px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}
.btn2{
  background-color: #800000;
  color: white;
  border: none;
  padding-left: 8%;
  padding-right: 8%;
  padding-top: 5%;
  padding-bottom: 5%;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}
.btn3{
  background-color: #800000;
  color: white;
  border: none;
  padding-left: 8%;
  padding-right: 8%;
  padding-top: 5%;
  padding-bottom: 5%;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  border-top-right-radius: 50px;
  border-bottom-right-radius: 50px;
}
     </style>

     <div class="container-fluid concolor">
       <div class="container">
         <div class="row">
           <div class="col-md-12 block bg-warning text-center">
             <form method="post">
               <div class="row">
                 <div class="col-md-4">
                   <label for="">Name: </label><br>
                   <input type="text" name="" value="<?php echo $rows['name']; ?>" size="40" class="text-center">
                 </div>
                 <div class="col-md-4">
                   <label for="">Email: </label><br>
                   <input type="text" name="" value="<?php echo $rows['email']; ?>" size="40" class="text-center">
                 </div>
                 <div class="col-md-4">
                   <label for="">Contact: </label><br>
                   <input type="text" name="" value="<?php echo $rows['contact']; ?>" size="40" class="text-center">
                 </div>
               </div>
               <br>
               <div class="row">
                 <div class="col-md-4">
                   <label for="">You Are: </label><br>
                   <input type="text" name="" value="<?php echo $rows['customer']; ?>" size="40" class="text-center">
                 </div>
                 <div class="col-md-4">
                   <label for="">Service: </label><br>
                   <input type="text" name="" value="<?php echo $rows['service']; ?>" size="40" class="text-center">
                 </div>
                 <div class="col-md-4">
                   <label for="">Additional Service: </label><br>
                   <input type="text" name="" value="<?php echo $rows['addservice']; ?>" size="40" class="text-center">
                 </div>
               </div>
               <br>
               <div class="row">
                 <div class="col-md-12">
                   <label for="">Location: </label><br>
                   <input type="text" name="" value="<?php echo $rows['location']; ?>" size="40" class="text-center">
                 </div>

               </div>
<br>
</form>
<div class="row">
  <div class="col-md-4">
     <a href="delete.php"> <button type="button" name="button" class="btn1">CANCEL Booking</button> </a>
  </div>
  <div class="col-md-4">
      <a href="payment.php"> <button type="submit" name="" value="" class="btn2">Confirm Booking & Go to Payment</button></a>
  </div>
  <div class="col-md-4">
      <a href="update.php"> <button type="submit" name="button" value="" class="btn3">Update Booking</button></a>
  </div>
</div>





           </div>
         </div>
         </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
 </html>
