<?php
// check if form submitted
if (isset($_POST['Submit'])) {
    // $customer_id = $_POST['customer_id'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // include database connection file
    include_once("config.php");

    if (!$name || !$phone_number || !$email || !$address) {
      echo '<script type ="text/JavaScript">';  
      echo 'alert("FIll all the data")';  
      echo'</script>';
    } else {
        // insert customer data into table
        $result = mysqli_query($conn, "INSERT INTO customer (customer_id, name, phone_number, email, address)
        VALUES('NULL','$name','$phone_number','$email','$address')");

        // Show message when customer added
        echo "Customer added successfully. <a href='index.php'>View Customers</a><br><br>";
        $new_customer_id = mysqli_insert_id($conn);
        $new_customer_id2 = mysqli_insert_id($conn);
        header('Location: addreservation.php?id=' . $new_customer_id);
    }
}


// // check if form submitted
// if (isset($_POST['Submit'])) {
//     // $customer_id = $_POST['customer_id'];
//     $name = $_POST['name'];
//     $phone_number = $_POST['phone_number'];
//     $email = $_POST['email'];
//     $address = $_POST['address'];

//     // include database connection file
//     include_once("config.php");

//     if (!$name || !$phone_number || !$email || !$address) {
//         echo "Please fill in all required fields.";
//     } else {
//         // insert customer data into table
//         $result = mysqli_query($conn, "INSERT INTO customer (name, phone_number, email, address)
//         VALUES('$name','$phone_number','$email','$address')");
        

//         // Show message when customer added
//         echo "Customer added successfully. <a href='index.php'>View Customers</a><br><br>";
//         $new_customer_id = mysqli_insert_id($conn);
//         header('Location: addreservation.php?id=' . $new_customer_id);
//     }
// }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Ezrev - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />

   
  </head>

  <body>
    <!-- ======= Header ======= -->

    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <a
          href="index.html"
          class="logo d-flex align-items-center me-auto me-lg-0"
        >
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1>EZREV<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="addcust.php">Reservation</a></li>
            <li><a href="reservation_detail2.php">Check Your Reservation</a></li>
            <li><a href="indexfood.php">Check Menu</a></li>
</header>
<section id="book-a-table" class="book-a-table">
  <div class="container aos-init aos-animate" data-aos="fade-up">
    <div class="section-header">
      <p>Let's <span>Add Your</span> Data First</p>
    </div>
    <div class="row g-0">
      <div class="col-lg-4 reservation-img aos-init aos-animate" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>
      <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
        <form action="addcust.php" method="post" role="form" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div  style="font-weight: bold; border-radius : 10px">Name

              <input type="text" name="name" class="form-control" id="name" placeholder="Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div style="font-weight:bold;"> Phone Number
              <input type="text" class="form-control" name="phone_number" id="" placeholder="Phone Number" data-rule="number" data-msg="Please enter a valid number">
              <div class="validate"></div>
            </div>
            <div style="font-weight: bold;"> Email
              <input type="text" class="form-control" name="email" id="email" placeholder="Email" data-rule="minlen:4" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div >
            <div style="font-weight: bold;"> Address
              <input type="text" name="address" class="form-control" id="address" placeholder="Address" data-rule="minlen:4" data-msg="Please enter your address">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
  <input type="submit" name="Submit" value="Next" href="indexcustomer.php" style="background-color: red; color: white; border-radius: 10px; padding: 10px 20px; transition: background-color 0.1s;">
</div>

        </form>
        
      </div>
    </div>
  </div>
</section>


    <!-- End Hero Section -->
     <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row gy-3">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div>
              <h4>Address</h4>
              <p>
               Jl. Ki Hajar Dewantara, Kota Jababeka, Cikarang Baru, Bekasi 17550 - Indonesia<br />
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Reservations</h4>
              <p>
                <strong>Phone:</strong> +62 895 8031 31159<br />
                <strong>Email:</strong> fitramiku@gmail.com<br />
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Opening Hours</h4>
              <p>
                <strong>Mon-Sat: 11AM</strong> - 23PM<br />
                Sunday: Closed
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Follow Us</h4>
            <div class="social-links d-flex">
              <a href="https://twitter.com/home" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/fitra.r.hafidz.7" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/fr_ysviel/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/rifki-immanuel-sinaga-131919238/?originalSubdomain=id" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
       
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <!-- End Footer -->
</body>
</html>
