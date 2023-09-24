<?php 
include_once("config.php");
if(isset($_GET['id'])) {
    $customer_id = $_GET['id'];

    // retrieve reservation data from database based on reservation ID
    $result = mysqli_query($conn, "SELECT * FROM customer WHERE customer_id = '$customer_id'");
    $row = mysqli_fetch_assoc($result);

    // display reservation details
    echo "this is your customer id, enter this number in column customer id : " . $row['customer_id'] . "<br>";
}

?>
<?php  
// check if form submitted
if (isset($_POST['Submit'])) {
   // $reservation_id = $_POST['reservation_id'];
    $Name_cust = $_POST['Name_cust'];
    $reservation_date = $_POST['reservation_date'];
    $reservation_time = $_POST['reservation_time'];
    $number_of_guests = $_POST['number_of_guests'];
    $customer_id = $_POST['customer_id'];
    $table_id = $_POST['table_id'];
    //mengambil data dari add customer


    // check if all required fields are filled
    if (!$Name_cust || !$reservation_date || !$reservation_time || !$number_of_guests || !$customer_id || !$table_id) { 
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Please fill in all required fields ")';  
        echo '</script>';
    } else {
        // check if the customer_id exists in the customer table
        $customer_check = mysqli_query($conn, "SELECT * FROM customer WHERE customer_id = '$customer_id'");
        if (mysqli_num_rows($customer_check) == 0) {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Invalid customer ID, check your customer id ")';  
            echo '</script>';
            exit;
        }
        
        // condition to avoid duplicate reservation
        $q = mysqli_query($conn, "SELECT * FROM reservation WHERE reservation_date ='$reservation_date' AND reservation_time ='$reservation_time' AND table_id ='$table_id'");
        $cek = mysqli_num_rows($q);

        if($cek == 0) {
            $result = mysqli_query($conn, "INSERT INTO reservation (reservation_id, Name_cust, reservation_date, reservation_time, number_of_guests, customer_id, table_id)
            VALUES('NULL','$Name_cust','$reservation_date','$reservation_time', '$number_of_guests', '$customer_id', '$table_id')");
             $new_reservation_id = mysqli_insert_id($conn);
             header('Location: reservation_detail.php?id=' . $new_reservation_id);
            //header('Location: addorderdetail.php');
            exit;
        } else {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("The table is not available at the selected time")';  
            echo '</script>';
        }
    }
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
    <div class="container aos-init aos-animate" data-aos="fade-up">
         <form action="addreservation.php" method="post" name="form1">
         <div class="section-header">
            <p> Add <span>Your Reservation</span>Here !!!</p>
        </div>
<div>

</div>
        <div class="row g-0">

            <div class="col-lg-4 reservation-img aos-init aos-animate" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

            <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
              <div>
              <div>
          <?php 
        include_once("config.php");
        if(isset($_GET['id'])) {
            $customer_id = $_GET['id'];

            // retrieve reservation data from database based on reservation ID
            $result = mysqli_query($conn, "SELECT * FROM customer WHERE customer_id = '$customer_id'");
            $row = mysqli_fetch_assoc($result);

            // display reservation details
            echo "this is your customer id, enter this number in column customer id : " . $row['customer_id'] . "<br>";
        }
        ?>

        
              </div>
                <form action="addpayment.php" method="post" role="form" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md-7">
                            <input type="text" name="Name_cust" class="form-control" id="id" placeholder="Enter your name again" data-rule="minlen:4" data-msg="Please enter ID">
                            <div class="validate"></div>
                        </div>
                         <div class="col-lg-4 col-md-7">
                            <input type="date" name="reservation_date" class="form-control" id="id" placeholder="Reservation date" data-rule="minlen:4" data-msg="Please enter ID">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-7">
                            <select class="form-control" name="reservation_time" id="time" data-rule="name">
                <option value="">Choose Time</option>
                <option value="08:00">08:00</option>
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
                <option value="20:00">20:00</option>
                <option value="21:00">21:00</option>
                </select>
                        <div class="validate"></div>
                        </div>
                         <div class="col-lg-4 col-md-7">
                            <!-- <input type="text" name="number_of_guests" class="form-control" id="id" placeholder="Total Guests" data-rule="minlen:4" data-msg="Please enter ID">
                            <div class="validate"></div> -->
                            <select class="form-control" name="number_of_guests" id="time" data-rule="name">
                <option value="">Number Of Guest</option>
                <option value="1">1 guest</option>
                <option value="2">2 guest</option>
                <option value="3">3 guest</option>
                <option value="4">4 guest</option>
                <option value="5">5 guest</option>
                <option value="6">6 guest</option>
                </select>
                        </div>
                        <div class="col-lg-4 col-md-7">
                            <input type="text" name="customer_id" class="form-control" id="id" placeholder="Customer ID" data-rule="minlen:4" data-msg="Please enter ID">
                            <div class="validate"></div>
                        </div>
                        <select class="form-control" name="table_id" id="time" data-rule="name">
                <option value="">Table</option>
                <option value="1">001</option>
                <option value="2">002</option>
                <option value="3">003</option>
                <option value="4">004</option>
                <option value="5">005</option>
                <option value="6">006</option>
                <option value="7">007</option>
                <option value="8">008</option>
                <option value="9">009</option>
                <option value="10">010</option>
                <option value="11">011</option>
                <option value="12">012</option>
                <option value="13">013</option>
                <option value="14">014</option>
                <option value="15">015</option>
                <option value="16">016</option>
                <option value="17">017</option>
                <option value="18">018</option>
                <option value="19">019</option>
                <option value="20">020</option>
                 <div class="validate"></div>
                    </div>
                    <div class="form-group mt-3">
                    </div>
                   <td style="text-align: center;">
                      <input type="submit" name="Submit" value="Add" href="indexcustomer.php" style="background-color: red; color: white; border-radius: 50px; padding: 10px 20px; transition: background-color 0.5s;">
                   </td>

                      <style>
                          input[type="submit"]:hover {
                          background-color: black !important;
                          }

                      </style>

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
