<?php  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Ezrev - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    

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
          href="indexowner.php"
          class="logo d-flex align-items-center me-auto me-lg-0"
        >
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1>EZREV<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="indexcustomer.php">Check Customer</a></li>
            <li><a href="indexfoodcat.php">Category Menu</a></li>
            <li><a href="indexfoodowner.php">Menu</a></li>
            <li><a href="indexpayment.php">Payment</a></li>
            <li><a href="indexreservation.php">Reservation</a></li>
              
            </li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
        <a class="btn-book-a-table" href="logout.php">Log out</a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>
        <!-- .navbar -->

        
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
      <div class="container">
        <div class="row justify-content-between gy-5">
          <div
            class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start"
          >
            <h2 data-aos="fade-up">Enjoy Your Food<br /> ~EzRev~ </h2>
            <p data-aos="fade-up" data-aos-delay="100">
             Easy way to do reservation on restaurant
            </p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a
                href="https://www.youtube.com/watch?v=BBJa32lCaaY"
                class="glightbox btn-watch-video d-flex align-items-center"
                ><i class="bi bi-play-circle"></i><span>Watch Video</span></a
              >
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
            <img
              src="assets/img/hero-img.png"
              class="img-fluid"
              alt=""
              data-aos="zoom-out"
              data-aos-delay="300"
            />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>About Us</h2>
            <p>Learn More <span>About Us</span></p>
          </div>

          <div class="row gy-4">
            <div
              class="col-lg-7 position-relative about-img"
              style="background-image: url(assets/img/about.jpg)"
              data-aos="fade-up"
              data-aos-delay="150"
            >
              <div class="call-us position-absolute">
                <h4>Book a Table</h4>
                <p>+62 895 8031 31159</p>
              </div>
            </div>
            <div
              class="col-lg-5 d-flex align-items-end"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="content ps-0 ps-lg-5">
                <p class="fst-italic">
                 How does our web work and can be used easily? here's the explanation
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check2-all"></i> You can enter your data as a customer before making a table reservation.
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i> You can make a table reservation by entering the requested data, and you will get your table number.
                  </li>
                  <li>
                    <i class="bi bi-check2-all"></i> Once you get a table number, you can make a reservation for a meal that already consists of several food categories.
                  </li>
                </ul>
                <p>
                 Conveniently, you can make a table reservation online easily through our website.
                </p>

                <div class="position-relative mt-4">
                  <img src="assets/img/about-2.jpg" class="img-fluid" alt="" />
                  <a
                    href="https://www.youtube.com/watch?v=BBJa32lCaaY"
                    class="glightbox play-btn"
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Step Section ======= -->
<section id="why-us" class="why-us section-bg">
  <div class="container" data-aos="fade-up">
    <div class="row gy-4" style="display: flex; flex-direction: row;">
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="why-box" style="background-image: url('');">

          <h3>Food</h3>
          <p>
            Add New Food here
          </p>
          <div class="text-center">
            <a href="addfood.php" class="more-btn">Click <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="why-box">
          <h3>Category</h3>
          <p>
            add new category here
          </p>
          <div class="text-center">
            <a href="addfoodcat.php" class="more-btn">Click <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="why-box" style="background-image: url('path/to/image-1.jpg');">

          <h3>Check Menu</h3>
          <p>
           This is where you can check the menu before you order food
          </p>
          <div class="text-center">
            <a href="indexfood.php" class="more-btn">Click <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div>
     <div class="col-lg-4 mx-auto" data-aos="fade-up" data-aos-delay="400">
  
  </div>
</div>

        </div>
      </div>
    </div>
  </div>
</section>

      <!-- ======= Menu Section ======= -->
      <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Our Menu</h2>
            <p>Check Our <span>Menu</span></p>
          </div>

          <ul
            class="nav nav-tabs d-flex justify-content-center"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <li class="nav-item">
              <a
                class="nav-link active show"
                data-bs-toggle="tab"
                data-bs-target="#menu-starters"
              >
                <h4>Indonesia Foods</h4>
              </a>
            </li>
            <!-- End tab nav item -->

            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-breakfast"
              >
                <h4>India Foods</h4> </a
              ><!-- End tab nav item -->
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                data-bs-target="#menu-lunch"
              >
                <h4>America & French Foods</h4>
              </a>
            </li>
            <!-- End tab nav item -->

           

              </a>
            </li>
            <!-- End tab nav item -->
          </ul>

          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-pane fade active show" id="menu-starters">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Indonesia</h3>
              </div>

              <div class="row gy-5">
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-1.png" class="glightbox"
                    ><img
                      src="Nasi goreng.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Nasi goreng</h4>               
                  <p class="price">Rp.30.000</p>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-2.png" class="glightbox"
                    ><img
                      src="otakotak.png"
                      class="menu-img img-fluid"
                      alt="otakotak.png"
                  /></a>
                  <h4>Otak-otak</h4>
                  <p class="price">Rp.60.000</p>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-3.png" class="glightbox"
                    ><img
                      src="Rendang.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Rendang</h4>
                  <p class="price">Rp.50.000</p>
                </div>
                <!-- Menu Item -->

                <div class="row justify-content-center">
  <div class="col-lg-4 menu-item text-center">
    <a href="assets/img/menu/menu-item-4.png" class="glightbox">
      <img src="Arsik.png" class="menu-img img-fluid" alt="">
    </a>
    <h4>Arsik</h4>
    <p class="price">Rp.45.000</p>
  </div>
</div>
                <!-- Menu Item -->                               
              </div>
            </div>
            <!-- End Starter Menu Content -->

            <div class="tab-pane fade" id="menu-breakfast">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>India</h3>
              </div>

              <div class="row gy-5">
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-1.png" class="glightbox"
                    ><img
                      src="Samosas.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Samosas</h4>
                  <p class="price">Rp.27.000</p>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-2.png" class="glightbox"
                    ><img
                      src="Aloo gobi.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Aloo gobi</h4>
                  
                  <p class="price">Rp.50.000</p>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-3.png" class="glightbox"
                    ><img
                      src="Rogan josh.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Rogan josh</h4>
                  
                  <p class="price">Rp.60.000</p>
                </div>
                <!-- Menu Item -->

               <div class="row justify-content-center">
  <div class="col-lg-4 menu-item text-center">
    <a href="assets/img/menu/menu-item-4.png" class="glightbox">
      <img src="Pulihora.png" class="menu-img img-fluid" alt="">
    </a>
    <h4>Pulihora</h4>
    
    <p class="price">Rp.60.000</p>
  </div>
</div>
                <!-- Menu Item -->                               
              </div>
            </div>
            <!-- End Breakfast Menu Content -->

            <div class="tab-pane fade" id="menu-lunch">
              <div class="tab-header text-center">
                <p>Menu</p>
                <h3>America & French</h3>
              </div>

              <div class="row gy-5">
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-1.png" class="glightbox"
                    ><img
                      src="Key lime pie.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Key lime pie</h4>
                 
                  <p class="price">Rp.60.000</p>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-2.png" class="glightbox"
                    ><img
                      src="Tater tots.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Tater tots</h4>
                  
                  <p class="price">Rp.70.000</p>
                </div>
                <!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-3.png" class="glightbox"
                    ><img
                      src="Beef jerky.png"
                      class="menu-img img-fluid"
                      alt=""
                  /></a>
                  <h4>Beef jerky</h4>
                 
                  <p class="price">Rp.50.000</p>
                </div>
                <!-- Menu Item -->

               <div class="row justify-content-center">
  <div class="col-lg-4 menu-item text-center">
    <a href="assets/img/menu/menu-item-4.png" class="glightbox">
      <img src="Croisant.png" class="menu-img img-fluid" alt="">
    </a>
    <h4>Croisant</h4>
   
    <p class="price">Rp.50.000</p>
  </div>
</div>

                <!-- Menu Item -->                               
              </div>
            </div>
            <!-- End Lunch Menu Content -->            
          </div>
        </div>
      </section>
      <!-- End Menu Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Testimonials</h2>
            <p>What Are They <span>Saying About Us</span></p>
          </div>

          <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          So easy to reserve table here, i can eat with my wife here without worrying about anything
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Kobeni</h3>
                        <h4>Cosplayer</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img
                        src="WhatsApp Image 2023-04-06 at 00.30.56.jpeg"
                        class="img-fluid testimonial-img"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                         yeeeheee, I love how easy it is to eat at a restaurant.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Om</h3>
                        <h4>Artist</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img
                        src="WhatsApp Image 2023-04-06 at 00.30.47.jpeg"
                        class="img-fluid testimonial-img"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          why even ask, obviously steady
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Jean</h3>
                        <h4>Teaching assistant</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img
                        src="WhatsApp Image 2023-04-06 at 00.24.48.jpeg"
                        class="img-fluid testimonial-img"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Good, but not as good as mine
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Mika Rahmat</h3>
                        <h4>Student</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i
                          ><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img
                        src="WhatsApp Image 2023-04-06 at 00.39.39.jpeg"
                        class="img-fluid testimonial-img"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- ======= Chefs Section ======= -->
      <section id="chefs" class="chefs section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Teams</h2>
            <p>Our <span>Proffesional</span> Teams</p>
          </div>

          <div class="row gy-4">
            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="chef-member">
                <div class="member-img">
                  <img
                    src="sanji.jpeg"
                    class="img-fluid"
                    alt=""
                  />
                 
                </div>
                <div class="member-info">
                  <h4>Vinsmoke Sanji</h4>
                  <span>Master Chef</span>
                  <p>
                   responsible for all kitchen-related activities, such as ingredient purchasing, menu creation, staff management, etc. I'll cook for you, pay later, but it's free for women and you don't have to pay.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Chefs Member -->

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="chef-member">
                <div class="member-img">
                  <img
                    src="WhatsApp Image 2023-04-06 at 01.21.16.jpeg"
                    class="img-fluid"
                    alt=""
                  />
                 
                </div>
                <div class="member-info">
                  <h4>Rifki Immanuel</h4>
                  <span>Manager</span>
                  <p>
                  effectively recruit and manage employees, oversee operations, handle customer complaints, and produce financial reports.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Chefs Member -->

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="chef-member">
                <div class="member-img">
                  <img
                    src="idon.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  
                </div>
                <div class="member-info">
                  <h4> Fitra Ramdhan Hafidz</h4>
                  <span>Administrator</span>
                  <p>
                  preparation and processing of documents, coordination with staff in other divisions and ensuring everything about the restaurant can run according to the schedule and planning that has been made by the restaurant manager.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Chefs Member -->
          </div>
        </div>
      </section>
      <!-- End Chefs Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Contact</h2>
            <p>Need Help? <span>Contact Us</span></p>
          </div>

          <div class="mb-3">
            <iframe
              style="border: 0; width: 100%; height: 350px"
              src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=President%20Univeristy+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
              frameborder="0"
              allowfullscreen
            ></iframe>
          </div>
          <!-- End Google Maps -->

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-map flex-shrink-0"></i>
                <div>
                  <h3>Our Address</h3>
                  <p>Jl. Ki Hajar Dewantara, Kota Jababeka, Cikarang Baru, Bekasi 17550 - Indonesia</p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>fitramiku@gmail.com</p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+62 895 8031 31159</p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-share flex-shrink-0"></i>
                <div>
                  <h3>Opening Hours</h3>
                  <div>
                    <strong>Mon-Sat:</strong> 8AM - 23PM;
                    <strong>Sunday:</strong> Closed
                  </div>
                </div>
              </div>
            </div>
            <!-- End Info Item -->
          </div>

         
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

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
