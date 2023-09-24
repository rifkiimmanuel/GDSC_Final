

<?php  // include database connection file
include_once("config.php");

// check if form submitted
if (isset($_POST['Submit'])) {
    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];

    // check if username already exists
    $result = mysqli_query($conn, "SELECT * FROM login WHERE username='$user'");
    $result2 = mysqli_query($conn, "SELECT * FROM login WHERE email='$email'");
    if(mysqli_num_rows($result) > 0) {
      echo "<script>alert('Username already exists. Please choose a different username.')</script>";

    } else if(mysqli_num_rows($result2) > 0){
      echo "<script>alert('email already exists. Please choose a different username.')</script>";

    }
    
    
    else {
        // insert customer data into table
        $result = mysqli_query($conn, "INSERT INTO login (username, password, email, fullname, role)
        VALUES('$user','$pass', '$email', '$fullname', 'user')");

        // Show message when customer added
        echo "<script>alert('Account created successfully. Please login.');</script>";

    }

}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register </title>
</head>

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
<link href="assets/vendor/aos/aos.css" rel="stylesheet" />
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

<!-- Template Main CSS File -->
<link href="assets/css/main.css" rel="stylesheet" />

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div>
      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>EZREV<span>.</span></h1>
      </a>
      <!-- .navbar -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      
    </div>
    
  </header>
  <!-- End Header -->
  <style>
  /* Add some margin to the top of the body */
  body {
    margin-top: 100px;
  }

  /* Give fixed height to the header and add some padding */
  header {
    height: 90px;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  /* Set height and overflow-y to the registration table */
  table {
    height: 400px;
    overflow-y: scroll;
  }
  td {
    padding-left: 10px;
  }
  input[type="submit"] {
    background-color: #1E90FF;
    color: white;
    font-style: bold;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
</style>



<!-- Add the header and body HTML code here -->


  <form action="register.php" method="post" name="form1">
    <br />

    <div style="display: flex; justify-content: center;">
      <table
        width="60%"
        border="0"
        style="
          background-color: #fff;
          padding: 10px;
          box-shadow: 0px 0px 5px #ccc;
          border-radius: 5px;
        "
      > 
        <tr>
          <td>  Full Name</td>
          <td>
            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"
                ><i class="glyphicon glyphicon-user"></i
              ></span>
              <input
                type="text"
                placeholder="input your name"
                name="fullname"
                class="form-control"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td>  Username</td>
          <td>
            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"
                ><i class="glyphicon glyphicon-user"></i
              ></span>
              <input
                type="text"
                placeholder="input your username"
                name="username"
                class="form-control"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td>  Password</td>
          <td>
            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"
                ><i class="glyphicon glyphicon-user"></i
              ></span>
              <input
                type="password"
                placeholder="input your password"
                name="password"
                class="form-control"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td>  Email</td>

        <td>
          <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" placeholder="input your email" name="email">
          </div>
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <div style="margin-top:10px" class="form-group">
            <div class="col-sm-12 controls">
              <input type="submit" name="Submit" value="Register">
            </div>
          </div>
        </td>
      </tr>
      <tr>
    </table>
  </div>
</form>



<!-- <form action="register.php" method="post" name="form1">

<table width="25%" border="0">

 <tr>
    <td>Full Name</td>
    <td><input type="text" placeholder="input your name" name="fullname"></td>
 </tr>

 <tr>
    <td>Usename</td>
    <td><input type="text" placeholder="input your username" name="username"></td>
 </tr>

 <tr>
     <td>Password</td>
    <td><input type="password" placeholder="input your password" name="password"></td>
 </tr>

 <tr>
    <td>Email</td>
    <td><input type="text" placeholder="input your email" name="email"></td>
 </tr>

 <tr>
    <td></td>
    <td><input type="submit" name="Submit" value="Register"  href="login.php"></></td>
 </tr>
</table>
</form> -->


</body>
</html>
