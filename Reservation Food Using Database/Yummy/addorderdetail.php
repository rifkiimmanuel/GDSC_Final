<?php
// check if form submitted
if (isset($_POST['Submit'])) {
    $total = $_POST['total_order'];
    $food_id = $_POST['food_id'];
    $reservation_id = $_POST['reservation_id'];

    // include database connection file
    include_once("config.php");

    // check if 'total_order' is empty
    if (empty($total)) {
      echo '<script type ="text/JavaScript">';  
            echo 'alert("please fill the column")';  
            echo'</script>';
    } else {
        // retrieve food price from database based on food id
        $result = mysqli_query($conn, "SELECT food_price FROM food WHERE food_id='$food_id'");
        $row = mysqli_fetch_assoc($result);
        $food_price = $row['food_price'];

        // convert values to numbers
        $food_price = floatval($food_price);
        $total = floatval($total);

        // calculate order unit price
        $order_unit_price = $food_price * $total;

        // insert order detail data into table
        $result = mysqli_query($conn, "INSERT INTO order_detail (total_order, order_unit_price, food_id,reservation_id)
        VALUES('$total','$order_unit_price','$food_id','$reservation_id')");
        $new_order_detail = mysqli_insert_id($conn);

        if ($result) {
            // Show message when order detail added
            echo "Order detail added successfully. <a href='indexorderdetail.php'>View Order Details</a><br><br>";
            header('Location: order_detail.php?id=' . $new_order_detail);
        } else {
            echo "Error: " . mysqli_error($conn);
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
        <div class="section-header">
            <p> Order <span>Your Food</span> Here</p>
        </div>
        <div class="row g-0">
            <div class="col-lg-4 reservation-img aos-init aos-animate" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>
            <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                <form action="addorderdetail.php" method="post" role="form" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">
                       <div class="col-lg-12 col-md-6">
                       <label for="food_id" class="col-form-label">Choose ur food :</label>
                            <select class="form-control" name="food_id" id="Food ID" data-rule="name" data-msg="Please choose food id">
                                <option value="">Food</option>
                                <option value="1">Rendang</option>
                                <option value="2">Otak-otak</option>
                                <option value="3">Nasi Goreng</option>
                                <option value="4">Ayam Betutu</option>
                                <option value="5">Risol Mayo </option>
                                <option value="6">Key lime pie  </option>
                                <option value="7">Tater tots</option>
                                <option value="8">Jerky </option>
                                <option value="9">Samosas</option>
                                <option value="10">Aloo Gobi</option>
                                <option value="11">Matar Paneer </option>
                                <option value="12">Rogan Josh </option>
                                <option value="13">Tandoori Chicken </option>
                                <option value="14">Pulihora</option>
                                <option value="15">Masala Dosa </option>
                                <option value="16">Gulab Jamun</option>
                                <option value="17">Fajitas</option>
                                <option value="18">Byrek</option>
                                <option value="19">Escudella</option>
                                <option value="20">Croissant</option>
                            </select>
                            <div class="validate"></div>
                        </div>
                        <!-- <div class="form-row">
                          <div class="col-lg-4 col-md-6">
                              <input type="text" name="total_order" class="form-control" id="id" placeholder="Total Order" data-rule="minlen:4" data-msg="The total order">
                              <div class="validate"></div>
                          </div>
                        <div class="col-lg-4 col-md-6">
                      
                         <h1> <input type="text" name="reservation_id" class="form-control" id="id" placeholder="Reservation " data-rule="minlen:4" data-msg="The total order">
                            <div class="validate"></div>
                        </div>
                    </div> -->
                    <div class="form-group">
    <label for="food_name" class="col-form-label">Total Order</label>
    <div class="col">
        <input type="text" name="total_order" class="form-control" id="id" placeholder="total order" data-rule="minlen:4" data-msg="The food name">
        <div class="validate"></div>
    </div>
</div>
<div class="form-group">
    <label for="reservation_id" class="col-form-label">Enter your reservation number:</label>
    <div class="col">
        <input type="text" name="reservation_id" class="form-control" id="id" placeholder="Reservation ID" data-rule="minlen:4" data-msg="The reservation ID">
        <div class="validate"></div>
    </div>
</div>













                    <div class="form-group mt-3" style="display:flex; justify-content:center;">
                        <td>
                            <input type="submit" name="Submit" value="Next" href="indexorderdetail.php" style="background-color: red; color: white; border-radius: 50px; padding: 10px 20px; transition: background-color 0.5s;">
                        </td>
                    </div>
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
