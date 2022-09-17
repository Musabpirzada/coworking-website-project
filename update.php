<?php
include 'connection.php';
if(count($_POST)>0){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $customer=$_POST['customer'];
  $service=$_POST['service'];
  $addservice=$_POST['addservice'];
  $location=$_POST['location'];

  $sql="UPDATE booking SET name='$name', email='$email', contact='$contact', customer='$customer', service='$service', addservice='$addservice', location='$location' order by booking_id desc limit 1";
  if(mysqli_query($conn,$sql)){
    header("Location: payment.php");
  }
  else {
    echo "<script>Not updated</script>";
  }
}
$abc="SELECT * FROM booking order by booking_id desc limit 1";
$result=(mysqli_query($conn,$abc));
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    body{
background-image: url('./image/bookpage.png');
background-size: cover;

    }
.block-row{
color: white;
padding: 2%;

}
.paymentbtn{
  color: white;
  background-color: #800000;
  border-radius: 10%;
  border-color: white;
}
input{
  background: none;
  border-color: white;
  color: white;
}
select{
  background: none;
  color: white;
}
option{
  color: black;
}
  </style>

  <body>

    <div class="container mt-5">
      <div class="row border border-4 rounded">
        <div class="col-md-6 block-row">
          <h1 class="font-italic text-center">Update Your Booking</h1>


<form class="" action="" method="post">
  <div class="row py-3">
    <div class="col-md-6 text-center">
      <label for="">Name: </label><br>
      <input type="text" name="name" value="<?php echo $row['name']; ?>" ><br>
    </div>
    <div class="col-md-6 text-center">
      <label for="">Email: </label><br>
      <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
    </div>
  </div>

<div class="row pb-3">
  <div class="col-md-6 text-center">
    <label for="">Contact: </label><br>
    <input type="text" name="contact" value="<?php echo $row['contact']; ?>"><br>
  </div>
  <div class="col-md-6 text-center">
    <label for="">You Are: </label><br>
    <select class="form-select" name="customer" size="1">
      <option value="<?php echo $row['customer']; ?>" selected>--Select Option--</option>
      <option value="Startup">Startup</option>
      <option value="Freelancer">Freelancer</option>
      <option value="Other">Other</option>
    </select>
  </div>
</div>


<div class="row pb-4">
  <div class="col-md-6 text-center">
    <label for="">Service: </label><br>
    <select class="form-select" name="service" size="1">
      <option selected value="<?php echo $row['service']; ?>">--Select Option--</option>
      <option value="Shared Desk">Shared Desk</option>
      <option value="Dedicated Desk">Dedicated Desk</option>
      <option value="Standard Office">Standard Office</option>
      <option value="Office Suite">Office Suite</option>
    </select>
  </div>
  <div class="col-md-6 text-center">
    <label for="">Additional Services: </label><br>
    <select class="form-select" name="addservice" size="1">
      <option selected value="<?php echo $row['addservice']; ?>">--Select Option--</option>
      <option value="conference room">Conference Room</option>
      <option value="meeting room">Meeting Room</option>
      <option value="both">Both</option>
      <option value="none">None</option>
    </select>
  </div>
</div>
<div class="row">
  <div class="col-md-12 text-center">
    <label for="">Location: </label><br>
    <select class="form-select" name="location" size="1">
      <option selected value="<?php echo $row['location']; ?>">--Select Option--</option>
      <option value="Johar Town, Lahore, Pakistan">Johar Town, Lahore, Pakistan</option>
      <option value="Gulberg, Lahore, Pakistan">Gulberg, Lahore, Pakistan</option>
      <option value="Sector G-9, Islamabad, Pakistan">Sector G-9, Islamabad, Pakistan</option>
      <option value="Nandi Hills, Bangalore, India">Nandi Hills, Bangalore, India</option>
      <option value="Capital colony, New Delhi, India">Capital colony, New Delhi, India</option>
    </select>
  </div>

</div>

<div class="row">
  <div class="col-md-12 text-center"><br>
   <input type="submit" name="submit" class="paymentbtn px-5 py-2" value="UPDATE">
  </div>
</div>

</form>


        </div>
        <div class="col-md-6 block-row text-center justify-content-center align-items-center">
  <img src="logotrans.png" alt="" height="80%" width="80%">
        </div>
      </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
