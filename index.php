<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
// select logged in users detail
$res = $conn->query("SELECT * FROM users WHERE id=" . $_SESSION['user']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Hello,<?php echo $userRow['email']; ?></title>

   
 <!-- <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 
<meta content="width=device-width, initial-scale=1.0" name="viewport">
 
 
 -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files
  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
  -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="inner-page.html"><span>InfraCell</span></a></h1>

        <!-- <a href="index.html"><img src="assets/img/11.jpg" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#home">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          
   <li><a class="nav-link scrollto" href="blog.php">Blog</a></li>
          
            <li><a class="nav-link scrollto" href="#testimonials">Clients</a></li>
       <li class="dropdown"><a href="#"><span>&nbsp;Logged
                        in: <?php echo $userRow['email']; ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
          
              <li class="dropdown"><a href="logout.php?logout"><span>logout</span> </i></a>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> </a>
              </li>

            </ul>
          </li>

          <li><a class="nav-link scrollto" href="blog.php">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
   <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Better digital experience with InfraCell</h1>
          <h2>We are team of Unlocking Connectivity, Powering Possibilities.</h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/cpanel.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section> 
  
  
  <!-- End Hero -->

  <main id="main">
    
        <!-- ======= Home Section ======= -->
    <section id="about" class="about">
      <div class="container">
   <div class="section-title">
          <h2>Home</h2>
          <p></p>
        </div>
        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="assets/img/in1.jpeg" class="img-fluid" alt="" >
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 >Welcome to InfraCell</h3>
            <p  >
     At InfraCell™, we are the architects of connectivity, dedicated to building the foundations that connect communities, empower businesses, and bridge the digital divide.
            </p>
            <div class="row">
              <div class="col-md-6" >
                <i class="bx bx-receipt"></i>
                <h4>Our Commitment</h4>
                <p><span style="color:#212529;">Innovation:</span> Pioneering solutions that drive the future of cellular infrastructure.<br>
<span style="color:#212529;">Expertise:</span> Decades of experience translating into excellence in every project.<br>
<span style="color:#212529;">Partnership:</span> Your vision is our mission; we're with you every step of the way.</p>
              </div>
              <div class="col-md-6" >
                <i class="bx bx-cube-alt"></i>
                <h4>Explore Our World</h4>
                <p><span style="color:#212529;">Services:</span> Discover our comprehensive suite of services, from site acquisition to network integration.<br>
<span style="color:#212529;">Blog:</span> Stay informed with industry insights, best practices, and the latest trends.<br>
<span style="color:#212529;">Contact:</span> Connect with our team of experts and let's embark on your next project together.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->
    
    
    
    
    <!-- =======About/Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p></p>
        </div>

        <div class="row" >
          <div class="col-md-5">
            <img src="assets/img/in4.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3></h3>
            <p class="fst-italic">
            </p>
            <ul>
              <li><i class="bi bi-check"></i> 
              At InfraCell™, we're more than just a name; we're your partners in building the future of cellular infrastructure. With a relentless commitment to innovation and excellence, we offer turnkey solutions that power connectivity and transform communities.
</li>
              <li><i class="bi bi-check"></i> Who We Are: As industry leaders, our expertise spans site acquisition, site design, tower erection, civil works, telecom equipment installation, commissioning and integration. We specialize in creating seamless experiences for telecom equipment vendors, mobile operators, and regional construction companies.</li>
                            <li><i class="bi bi-check"></i> Our Commitment: We're driven by a vision of connecting the unconnected, powering the networks of tomorrow, and making cellular infrastructure accessible to all. Our team of experts thrives on challenges and turns visions into reality.</li>
            </ul>
          </div>
        </div>

        <div class="row" >
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/in5.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
             <h3>Why Choose Us</h3>
            <p>
</p>
            <ul>
              <li><i class="bi bi-check"></i> Experience: With a proven track record of successful projects, we bring decades of experience to every endeavor.</li>
              <li><i class="bi bi-check"></i> Innovation: We stay at the forefront of industry advancements, leveraging cutting-edge technology to optimize your network.</li>
              <li><i class="bi bi-check"></i> Client-Centric: Your success is our priority. We collaborate closely with you, ensuring tailored solutions that align with your goals.</li>
               <li><i class="bi bi-check"></i> Reliability: Count on us for on-time project delivery and unwavering support, every step of the way.</li>
            </ul>
          </div>
        </div>

        <div class="row" >
          <div class="col-md-5">
            <img src="assets/img/in4.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Join Us in Building Tomorrow's Connectivity</h3>
            <p>
              Ready to embark on your next cellular infrastructure project or explore new possibilities? Let's start the journey together. Choose your path </p>
            <ul>
              <li><i class="bi bi-check"></i> 
              Discover Services: Explore our comprehensive services and learn how we can elevate your projects.
              
</li>
              <li><i class="bi bi-check"></i><span style="color:#212529;"> Get In Touch:</span> Ready for a consultation or have questions? Contact us, and our experts will guide you.
</li>

            </ul>
          </div>
        </div>

      <div class="row" >
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/in10.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>At InfraCell™</h3>
            <p class="fst-italic">
              we're committed to shaping the digital landscape, one project at a time. Join us in the quest for a more connected world.

            </p>
            <p>
              
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- End Features Section -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Unlocking the Power of Cellular Infrastructure </p>
<span style="color:#565758;">At InfraCell™, we offer a comprehensive suite of services designed to revolutionize cellular infrastructure projects. Our expertise covers every aspect, ensuring seamless, efficient, and future-ready solutions. Explore our services</span>


        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#"> Site Acquisition</a></h4>
          
              <p><span style="color:#565758;">Turning Visions Into Locations</span><br>
Lay the foundation for your network with precision site selection. Our site acquisition experts handle site searches, line-of-sight surveys, and lease negotiations. Discover the potential of your project.</p>
 

          
            </div>
  
            
            
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Site Design</a></h4>
              <p>
  <span style="color:#565758;">Blueprints for Connectivity</span><br>
From structural analysis to soil testing, our site design team creates the blueprints for robust infrastructure. Tower foundations, guard houses, and more — we design for success.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">

              
<i class="bi bi-bricks"></i>
              <h4><a href="#">Civil Works</a></h4>
              <p>
              <span style="color:#565758;">Foundations for the Future</span><br>
Our civil works division delivers the groundwork for reliable networks. Fencing, guard houses, and tower foundations built to last.</p>
            </div>
          </div>
          
          <div class="col-md-6 mt-4">
            <div class="icon-box">
<i class="bi bi-tools"></i>
              <h4><a href="#">Tower Erection</a></h4>
              <p>
                            <span style="color:#565758;">Reaching New Heights</span><br>
Erecting towers with precision and safety. We ascend to new heights, ensuring your network coverage soars.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Power System Installation & Commissioning</a></h4>
              <p>
                              <span style="color:#565758;">Powering the Network</span><br>
Reliable power is the backbone of communication. Our experts install and commission generators and solar solutions for uninterrupted service</p>
            </div>
          </div>
             <div class="col-md-6 mt-4">
            <div class="icon-box">
<i class="bi bi-broadcast-pin"></i>
              <h4><a href="#">Telecom Equipment Installation & Commissioning</a></h4>
              <p>
                              <span style="color:#565758;">Seamless Integration</span><br>
Your equipment, perfectly integrated. From base transceiver stations to optical cable interconnections, we ensure your network's heart beats strong.</p>
            </div>
          </div>
          
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a href="#">Site Integration & Service Test</a></h4>
              <p>
                              <span style="color:#565758;">The Network Conductor</span><br>
Bringing it all together. Site integration and comprehensive testing to ensure a harmonious network performance</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    
    <!-- End Services Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/in1.jpeg" alt="">
              <h4> </h4>
              <span>Marketing </span>
              <p> </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/in2.jpeg" alt="">
              <h4></h4>
              <span>Product Manager</span>
              <p> </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/in2.jpeg" alt="">
              <h4></h4>
              <span>Business Manager</span>
              <p> </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Team Section -->


    <!-- Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Client Testimonials </h2>
         <span>Hear from Our Satisfied Clients
              </span>
          <p>
"Discover what our clients have to say about their experiences partnering with Infra-Cell. Our commitment to excellence is reflected in their words.."</p>
        </div>

 <div class="testimonials-slider swiper" >
          <div class="swiper-wrapper">

         <div class="swiper-slide">
        <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "InfraCell delivered beyond our expectations. Their expertise and dedication made all the difference in our project."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/sxe.png" class="testimonial-img" alt="">
                <h3>XMG Business Group PLC</h3>
                <h4>  </h4>
              </div>
            </div>
            <!-- End testimonial item -->

        <div class="swiper-slide">
             <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             "Working with InfraCell was a game-changer. They guided us every step of the way, ensuring a seamless project."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/AddisBiz-Logo-2018.png" class="testimonial-img" alt="">
                <h3>GLOBAL TELECOM CONSTRUCTION</h3>
                <h4> </h4>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               "InfraCell's innovative solutions transformed our network performance. We're thrilled with the results."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/alkan.png" class="testimonial-img" alt="">
                <h3>Alkan CIT</h3>
                <h4> </h4>
              </div>
            </div>
            <!-- End testimonial item -->
     
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Exceptional service, unwavering support, and outstanding results. InfraCell is our trusted partner."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/" class="testimonial-img" alt="">
                <h3>wooam Corporation</h3>
                <h4> </h4>
              </div>
            </div>
     
     
          </div>
    <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->




<!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" >

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Let's Start the Conversation</p>
          <span style="color:#565758;">Have questions, need assistance, or want to explore partnership opportunities? We're here to help. Reach out to our experts, and let's begin the journey together.</span>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" >
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>22 Bole street, Adiss Ababa City, Ethiopia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@infra-cell.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+251 91 151 0196</p>
              </div>

              <iframe src="https://maps.google.com/maps?width=600&amp;height=1917&amp;hl=en&amp;q=HF technologies &amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" >
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Us Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">

        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
           <h4>InfraCell</h4>
            <p>
              Your journey with InfraCell™ begins here. We look forward to hearing from you.</p>
          <span>General Inquiries</span>
      <p>Got a general question or need more information about our services? We're just an email away.<br>
          <span style="color:#040405; font-size:15px;"> Email Us:</span>info@infra-cell.com
          <span style="color:#040405;">Phone:</span> +251 91 151 0196<br>

         </p>

        </div>
          
       

         <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>

            </ul>
          </div>
       
     <div class="col-lg-3 col-md-6 footer-links">
            <h4>Contact Us</h4>
            
            <ul>

              <li><a href="#">Sales and Partnerships</a></li><p>Ready to discuss a project, explore collaborations, or join forces with Infracell™ ? Our sales team is eager to connect. <br> <span style="color:#212529;">Contact Sales: </span>sales@infra-cell.com</p>
              <li> <a href="#">Customer Support</a></li>
              
              <p>Already a client and need assistance? Our support team is ready to assist you.<span style="color:#212529;"><br>Support Center:</span> support@infra-cell.com
 </p>
              

          
             
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
<strong>Visit Us:</strong>
              
  <p> Prefer face-to-face interactions? We welcome you to our offices.
 <br>
<span style="color:#212529;"> Location:</span>123 Main Street, City, Zip Code, pin to maps .</p>
            <h4>Our Social Networks</h4>
            <p>Connect on Social Media: Stay updated on our latest news, projects, and industry insights by following us on social media</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          
          </div>


        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>InfraCell</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#InfraCell">InfraCell</a>
      </div>
    </div>
  </footer>
  
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!--  JS Files  -->



  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>

</html>