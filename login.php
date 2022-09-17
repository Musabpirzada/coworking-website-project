<?php

include 'connection.php';

session_start();

error_reporting(0);

if (isset($_SESSION['email'])) {
    header("Location: login.php");
}

if (isset($_POST['submits'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['name'] = $row['name'];
		header("Location: home.html");
	} else {
		echo "<script>alert('Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

  body{
    background: url(./image/bg.png) no-repeat center fixed;
    background-size: cover;
}
.block{
  color: white;
}
.block-1{
  padding-top: 0;
  margin: auto;
  opacity: 1;
  color: white;
  font-style: italic;
}
.block-2{
  padding-top: 15%;
}
.labeluser{
  font-size: 20px;
  font-weight: bold;
}
.usernameinput{
    background: none;
    width: 50%;
    padding: 5px 10px;
    font-size: 20px;
    border: none;
    outline:none;
    color: white;
    outline-style: solid;
    outline-color: white;
}
.passwordinput{
    background: none;
    width: 50%;
    padding: 5px 10px;
    font-size: 20px;
    border: none;
    outline:none;
    color: white;
    outline-style: solid;
    outline-color: white;
}
.headinglogin{
  padding-bottom: 5%;
  margin-left: 30%;
}
.images{
  margin-left: 30%
}
.loginbtn{
  margin-left: 30%;
}
h2{
  margin-left: 35%;
}
.signup{
margin-left: 25%
}

    </style>
    <!-- <script type="text/javascript">
      function validatelogin(){
        var username=document.forms["loginform"]["username"].value;
        var password=document.forms["loginform"]["password"].value;
        if (username=="") {
          alert("Username can't be blank");
          return false;
        }
        else if (password=="") {
          alert("Please Enter Password");
          return false;
        }
      }
    </script>
    <script type="text/javascript">
      window.alert("Enter Details");
    </script> -->
  </head>
  <body >
    <div class="row">
      <div class="col-md-6 block text-right block-2">

      </div>
      <div class="col-md-6 text-left block block-1">
        <img src="logotrans.png" alt="logo" height="100px" width="100px" class="mt-3 images">
        <h2 class="headinglogin mt-3">LOG<span class="text-warning">IN</span></h2>

        <form  name="loginform" action="" method="post">
          <label for="" class="labeluser pl-4">Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <input type="email" name="email" value="" placeholder="email" class="usernameinput" required="required"><br><br>

          <label for="" class="labeluser">Password</label>&nbsp;&nbsp;&nbsp;

          <input type="password" name="password" value="" placeholder="password" class="passwordinput" required="required">
          <br><br>
          <input type="submit" name="submits" value="LOGIN →" class="btn loginbtn bg-white my-3 px-4 py-2">
        </form>
        <h2 class="text-white">OR</h2>
        <a href="signup.php"><input type="submit" name="submits" value="Create Account →" class="btn bg-white px-4 py-2 signup"></a>

      </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
