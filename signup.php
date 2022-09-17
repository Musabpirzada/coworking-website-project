
<?php

include 'connection.php';

error_reporting(0);

session_start();

if (isset($_SESSION['name'])) {
    header("Location: login.php");
}


if (isset($_POST['button'])) {


	$name = $_POST['name'];
	$email = $_POST['email'];
  $contact=$_POST['contact'];
  $cnic=$_POST['cnic'];
  $address=$_POST['address'];
	$password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);


  if ($password == $cpassword) {
		$sql = "SELECT * FROM signup WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO signup (name, email, contact, cnic, address, password) VALUES('$name', '$email','$contact','$cnic','$address', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				header("Location: login.php");
				$name = "";
				$email = "";
        $contact = "";
        $cnic = "";
        $address = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Something Wrong.')</script>";
			}
		} else {
			echo "<script>alert('Please Enter Another Email.')</script>";
		}

	} else {
		echo "<script>alert('Enter Same Password')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    body{
      background-color: red;
/* background-image: url('signupimg.png'); */
    }
.block-row{
color: white;
padding: 2%;
background-color: black;

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

textarea{
  background: none;
  color: white;
  border-color: white;
}
  </style>

<body>

    <div class="container mt-5">
      <div class="row border border-4 rounded">
        <div class="col-md-2 block-row">

        </div>
        <div class="col-md-8 block-row">
          <h1 class="font-italic text-center">SignUp Your Account</h1>
<form class="" action=""  method="POST">
  <div class="row py-3">
    <div class="col-md-6 text-center">

      <label for="">Name: </label><br>
      <input type="text" name="name" value="<?php echo $name; ?>" required="required"><br>
    </div>
    <div class="col-md-6 text-center">


      <label for="">Email: </label><br>
      <input type="email" name="email" value="<?php echo $email; ?>" required="required" ><br>
    </div>
  </div>

<div class="row pb-3">
  <div class="col-md-6 text-center">


    <label for="">Contact: </label><br>
    <input type="text" name="contact" value="<?php echo $contact; ?>" required="required"><br>
  </div>


  <div class="col-md-6 text-center">
    <label for="">CNIC: </label><br>
    <input type="text" name="cnic" value="<?php echo $cnic; ?>" placeholder="without dashes" required="required"><br>

  </div>
</div>
<div class="row">


  <div class="col-md-12 text-center">
    <label for="">Address: </label><br>
    <textarea type="text" name="address" rows="1" cols="75" required="required" value="<?php echo $address; ?>"></textarea>
  </div>

</div>

<div class="row">


  <div class="col-md-6 text-center">
    <label for="">Password: </label><br>
    <input type="password" name="password" required="required" value="<?php echo $_POST['password']; ?>">
  </div>
  <div class="col-md-6 text-center">
    <label for="">Confirm Password: </label><br>
    <input type="password" name="cpassword" required="required" value="<?php echo $_POST['cpassword']; ?>">
  </div>

</div>


<div class="row">
  <div class="col-md-12 text-center"><br>
   <input type="submit" name="button" class="paymentbtn px-5 py-2" value="Submit">
  </div>
</div>

<div class="row">
  <div class="col-md-12 text-center"><br>
    <div class="text-center">Already have an account? <a href="login.php" style="color: #800000;">Sign in</a></div>
  </div>
</div>


  </form>
        </div>
        <div class="col-md-2 block-row">

        </div>
      </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
