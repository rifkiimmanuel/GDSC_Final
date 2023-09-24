<?php
include_once("config.php");

if(isset($_GET['id'])){
    // get ID from URL parameter
    $reservation_id = $_GET['id'];

    // retrieve reservation data from database based on reservation ID
    $result = mysqli_query($conn, "SELECT * FROM reservation WHERE reservation_id = '{$reservation_id}'");
    $row = mysqli_fetch_assoc($result);

    // display reservation details if row is not null
    if ($row) {

    } else {
        echo "<center>No reservation found with ID {$reservation_id}.</center>";
    }
} else {
    // display error message if ID parameter is not set
    echo "<h3>ID parameter not set.</h3>";
    // echo "<a class='button' href='addorderdetail.php'>Next to next reservation step</a>";
}
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
    <div class="container">
        <div class="section-header">
            <p><span>Reservation Detail</span></p>
        </div>

        <div class="row">
            
        <div class="col-lg-4 reservation-img aos-init aos-animate" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

                <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                <div class="container mt-5">
                    <table>
                        <div> </div>
                        <h1>Your Reservation Info
                        </h1>
                        <tr>
                            <td>Reservation Number</td>
                            <td><?php echo $row['reservation_id']; ?></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><?php echo $row['Name_cust']; ?></td>
                        </tr>
                        <tr>
                            <td>Reservation Date</td>
                            <td><?php echo  $row['reservation_date']; ?></td>
                        </tr>
                        <tr>
                            <td>Reservation Time</td>
                            <td><?php echo $row['reservation_time']; ?></td>
                        </tr>
                        
                    </table>
                    <div class="buttons">
        <a href="addorderdetail.php" class="btn btn-secondary">Next</a>

                </div>
            </div>
        </div>
    </div>
</section>
<style>
       .judul{
            display: flex;
            font-size: 18px;
           font-family: Arial, Helvetica, sans-serif;
          }

          .buttons {
            display: flex;
            flex-direction: column;
            gap: 10px;
          }

          .btn {
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            display: inline-block;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
          }

          .btn:hover {
            opacity: 0.3;
          }

    
</style>

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

