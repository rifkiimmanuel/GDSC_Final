
<?php

// create database connection using config file
include_once("config.php");

// check if form is submitted
if (isset($_POST['update'])) {
    $category_id = $_POST['category_id'];
    $name_category = $_POST['name_category'];
    

    // update food data in database
    $result = mysqli_query($conn, "UPDATE food_category SET name_category='$name_category' WHERE category_id=$category_id");

    // redirect to homepage
    header("Location: indexfoodcat.php");
}

// get food ID from URL
$category_id = $_GET['ID'];

// fetch food data from database
$result = mysqli_query($conn, "SELECT * FROM food_category WHERE category_id=$category_id");

while ($food_category = mysqli_fetch_array($result)) {
    $name_category = $food_category['name_category'];
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
            <li><a href="indexowner.php">Home</a></li>
            <li><a href="indexcustomer.php">Customer Detail</a></li>
            <li><a href="indexfoodowner.php">Food Detail</a></li>
            <li><a href="indexorderdetail.php">Order Detail</a></li>
            <li><a href="indexpayment.php">Payment Detail</a></li>
            <li><a href="indexreservation.php">Check Reservation</a></li>
</header>

            <section id="book-a-table" class="book-a-table">
    <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-header">
            <p><span>Edit Food Category</span></p>
        </div>

        <div class="row g-0">

            <div class="col-lg-4 reservation-img aos-init aos-animate" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

           <html lang="en">
<body>

   <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
    <form name="update_food" method="post" action="editfoodcat.php" role="form" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <div class="form-group">
            <label for="name">Category ID</label>
            <input type="text" class="form-control" name="category_id" id="name" placeholder="Name" value="<?php echo $category_id;?>" style="text-align: center; border-bottom: 1px solid #ccc; width: 650px;">
        </div>
        <br> </br>
        <div class="form-group">
            <label for="category_name">Name Category</label>
            <input type="text" class="form-control" name="name_category" id="category_name" placeholder="Category" value="<?php echo  $name_category;?>" style="text-align: center; border-bottom: 1px solid #ccc; width: 650px;">
        </div>
        <div class="form-group mt-3">
            <input type="hidden" name="category_id" value="<?php echo $category_id;?>">
            <input type="submit" name="update" value="Update" style="background-color: red; color: white; border-radius: 50px; padding: 10px 20px; transition: background-color 0.5s;">
        </div>
    </form>
</div>


</body>
</html>
    </form>
</div>
</div>
</div>
</section>

                 
       

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
