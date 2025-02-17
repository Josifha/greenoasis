<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: info.php"); // Redirect if already logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Green Oasis</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

   <!-- Favicon -->
   <link href="img/favicon.ico" rel="icon">

   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

   <!-- Icon Font Stylesheet -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   <!-- Libraries Stylesheet -->
   <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   <link href="lib/animate/animate.min.css" rel="stylesheet">
   <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

   <!-- Customized Bootstrap Stylesheet -->
   <link href="css/bootstrap.min.css" rel="stylesheet">

   <!-- Template Stylesheet -->
   <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
            <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>16th Street, Al Khobar,Kingdom of Saudi Arabia</small>
            <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+966 50 228 3403</small>
            <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@greenoasisaudia.com</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <div class="logo-container">
            <img src="img/icon-deal.png" alt="Icon" style="width: 80px; height: 70px;">
            <div class="logo-text">
                <h1 style="color: black;">Green Oasis</h1>
                <h2 class="arabic-text">الواحات الخضراء</h2>
            </div>
        </div>
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item text-primary nav-link active">Home</a>
                <a href="about.html" class="nav-item text-primary nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-primary" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu m-0">
                        <a href="equipment.html" class="dropdown-item text-primary">Equipment Rental</a>
                        <a href="manpower.html" class="dropdown-item text-primary">Manpower supply</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-primary" data-bs-toggle="dropdown">Products</a>
                    <div class="dropdown-menu m-0">
                        <a href="steel.html" class="dropdown-item text-primary">Steel</a>
                        <a href="wood.html" class="dropdown-item text-primary">Wood Supply</a>
                        <a href="Electrical.html" class="dropdown-item text-primary ">Electrical</a>
                        <a href="saftey.html" class="dropdown-item text-primary">Saftey Eqipment</a>
                    </div>
                </div>
                <a href="appointment.php" class="nav-item nav-link">Appointment</a>
            </div>
            <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            <a href="login.php" class="btn btn-primary py-2 px-4 ms-3">Admin Login</a>
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Appointment</h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Appointment</a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->

 <!-- Appointment Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="section-title">Contact US</h4>
                <h1 class="display-5 mb-4">Make An Appointment To communicate with our Executive </h1>
                <p class="mb-4">Please fill the details our executive will reach you, If you prefer face-to-face communication, our doors are open our Khobar office. We'd love to welcome you.</p>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                <i class="fa fa-2x fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Call Us Now</p>
                                <h3 class="mb-0">+966 50 228 3403</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                <i class="fa fa-2x fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Mail Us Now</p>
                                <h3 class="mb-0">info@greenoasisaudia.com</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <form method="post" action="appointmenting.php" role="form" >
                <div class="row g-3">
                    
                    <div class="col-12 col-sm-6">
                        <input type="text" class="form-control" name = name placeholder="Your Name" style="height: 55px;">
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="email" class="form-control" name = email  placeholder="Your Email" style="height: 55px;">
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="text" class="form-control" name = mobile placeholder="Your Mobile" style="height: 55px;">
                    </div>
                    <div class="col-12 col-sm-6">
                        <select class="form-select" name= services style="height: 55px;">
                            <option value="Civil Engineering">Civil Engineering</option>
                                    <option value="Maintenance & Facility Management">Maintenance & Facility Management</option>
                                    <option value="Premium Flooring Solutions">Premium Flooring Solutions</option>
                                    <option value="Asphalt & Paving Services">Asphalt & Paving Services</option>
                                    <option value="Global Trading & Procurement">Global Trading & Procurement</option>
                                    <option value="Construction Materials Supply">Construction Materials Supply</option>
                                    <option value="Industrial Safety Equipment">Industrial Safety Equipment</option>
                                    <option value="IT Networking & Infrastructure">IT Networking & Infrastructure</option>
                                    <option value="CCTV Surveillance Systems">CCTV Surveillance Systems</option>



                        </select>
                    </div>
                    <div class="col-12 ">
                        <label for="">Event Date & Time</label>
                            <input type="datetime-local" name="event_dt" class="form-control" style="height: 55px;">
                        </div>
                    

                    <div class="col-12">
                        <textarea class="form-control" name= message rows="5" placeholder="Message"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" name = submit type="submit">Book Appointment</button>
                    </div>
                
                </div>
            </div>
        </form>
        </div>
       
    </div>
</div>
<!-- Appointment End -->


  
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>16th Street, Al Khobar Janubiyah Dist,Al Khobar, Kingdom of Saudi Arabia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+966 50 228 3403</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@greenoasisaudia.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link text-white-50" href="">About Us</a>
                    <a class="btn btn-link text-white-50" href="">Contact Us</a>
                    <a class="btn btn-link text-white-50" href="">Our Services</a>
                    <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                    <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Photo Gallery</h5>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-4.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-5.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-6.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Subscribe for lastest updates.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="copyright text-center">
                        <p>&copy; 2024 <strong>Green Oasis</strong>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <!-- Footer End -->


    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>