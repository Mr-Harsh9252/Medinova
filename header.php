<style>
    .dropdown-menu {
        display: flex;
        display: none;
        position: absolute;
        top: 100%;
        left: -200px;
        background: white;
        list-style: none;
        padding: 25px;
        margin: 0;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .nav-item:hover .dropdown-menu {
        display: block;
    }

    .blog-detail{
        border-radius: 8px;
        position: absolute;
        left: 10px;
        background-color: white;
        padding: 10px;
        width: 180%;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);  
        display: none;
    }

    .dropdown:hover .blog-detail{
        display: block;
    }
    
    .blog-detail:hover .blog-page{
        display: block;
    }
    .blog-page{
        border-radius: 8px;
        position: absolute;
        top: 10px;
        left: 160px;
        background-color: white;
        padding: 10px;
        width: 100%;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        display: none;
    }
</style>

<header>

    <section class="d-flex justify-content-around align-items-center p-2">
        <div class="logo">
            <a href="index.php">
                <h1 class="text-uppercase"><i class="fa fa-clinic-medical me-2"></i>Medinova</h1>
            </a>
        </div>
        <div class="navbar fs-5">
            <ul class="d-flex justify-content-around list-unstyled">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="about.php"
                        id="navbarDropdown">About Us</a>
                    <div class="dropdown-menu">
                        <div class="d-flex justify-content-around p-3">
                            <ul class="list-unstyled" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item " href="why-chooseus.php">Why Choose Us</a></li>
                                <li><a class="dropdown-item" href="our-mission.php">Our Mission</a></li>
                                <li><a class="dropdown-item" href="our-vision.php">Our Vision</a></li>
                            </ul>
                            <ul class="list-unstyled" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="why-chooseus.php">Why Choose Us</a></li>
                                <li><a class="dropdown-item" href="our-mission.php">Our Mission</a></li>
                                <li><a class="dropdown-item" href="our-vision.php">Our Vision</a></li>
                            </ul>
                            <ul class="list-unstyled" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="why-chooseus.php">Why Choose Us</a></li>
                                <li><a class="dropdown-item" href="our-mission.php">Our Mission</a></li>
                                <li><a class="dropdown-item" href="our-vision.php">Our Vision</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="service.php">Service</a></li>
                <li class="nav-item"><a class="nav-link" href="service-area.php">Service Area</a></li>
                
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="blog.php">Blog</a>
                    <ul class="blog-detail">
                        <li class="d-flex align-items-center justify-content-between"><a href="blog-detail.php" class="dropdown-item">Blog Detail</a> <i class="bi bi-caret-right-fill fs-6 pe-4"></i>
                            <ul class="blog-page">
                                <li><a href="#" class="dropdown-item">Blog Page</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="dropdown-item">Blog Grid</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="appointment.php">Appointment</a></li>
                <li class="nav-item"><a class="nav-link " href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </section>

</header>













<!-- Topbar Start -->
<!-- <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i>+012 345 6789</a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"></i>info@example.com</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-body ps-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Topbar End -->


<!-- Navbar Start -->
<!-- <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.php" class="navbar-brand" >
                    <h1 class="m-0 text-uppercase" style="color: #1D2A4D;"><i class="fa fa-clinic-medical me-2" ></i>Medinova</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <div class="nav-item ">
                            <a href="about.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About </a>
                            <div class="dropdown-menu about-dropdown-menu m-0 ">
                                <div class="megamenu">
                                    <h4>Mega Menu</h4>
                                </div>
                                <div class="d-flex justify-content-evenly py-4">
                                    <div class="about-dropdown-menu-item">
                                        <a href="about.php" class="fw-bold dropdown-item">About Us </a>
                                        <a href="why-choose-us.php" class="fw-bold dropdown-item">Why Choose Us </a>
                                        <a href="our-mission.php" class="fw-bold dropdown-item">Our Mission</a>
                                        <a href="our-vision.php" class="fw-bold dropdown-item">Our Vision</a>
                                        <a href="blog-detail.php" class="fw-bold dropdown-item">Service Detail</a>
                                    </div>
                                    <div class="about-dropdown-menu-item">
                                        <a href="about.php" class="fw-bold dropdown-item">About Us </a>
                                        <a href="why-choose-us.php" class="fw-bold dropdown-item">Why Choose Us </a>
                                        <a href="our-mission.php" class="fw-bold dropdown-item">Our Mission</a>
                                        <a href="our-vision.php" class="fw-bold dropdown-item">Our Vision</a>
                                        <a href="blog-detail.php" class="fw-bold dropdown-item">Service Detail</a>
                                    </div>
                                    <div class="about-dropdown-menu-item">
                                        <a href="about.php" class="fw-bold dropdown-item">About Us </a>
                                        <a href="why-choose-us.php" class="fw-bold dropdown-item">Why Choose Us </a>
                                        <a href="our-mission.php" class="fw-bold dropdown-item">Our Mission</a>
                                        <a href="our-vision.php" class="fw-bold dropdown-item">Our Vision</a>
                                        <a href="blog-detail.php" class="fw-bold dropdown-item">Service Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="service.php" class="nav-item nav-link">Service </a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Service</a>
                            <div class="dropdown-menu m-0">
                                <a href="service.php" class="fw-bold dropdown-item">Service </a>
                                <a href="blog-detail.php" class="fw-bold dropdown-item">Service Detail</a>
                            </div>
                        </div>
                        <a href="service-location.php" class="nav-item nav-link">Service Location</a>
                        
                        

                        <a href="price.php" class="nav-item nav-link">Pricing</a>
                        <div class="nav-item ">
                            <a href="about.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog </a>
                            <div class="dropdown-menu service-dropdown-menu m-0 ">
                                <div class="megamenu">
                                    <h4>Mega Menu</h4>
                                </div>
                                <div class="d-flex justify-content-evenly py-4">
                                    <div class="about-dropdown-menu-item">
                                        <a href="blog.php" class="fw-bold dropdown-item">Blog Page </a>
                                        <a href="blog-detail.php" class="fw-bold dropdown-item">Blog Detail Page </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="blog.php" class="nav-item nav-link">Blog</a>
                        <a href="appointment.php" class="nav-item nav-link">Appointment</a>
                        

                        <div class="nav-item dropdown">
                          a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="blog.php" class="dropdown-item">Blog Grid</a>
                                <a href="detail.php" class="dropdown-item">Blog Detail</a>
                                <a href="team.php" class="dropdown-item">The Team</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                <a href="appointment.php" class="dropdown-item">Appointment</a>
                                <a href="search.php" class="dropdown-item">Search</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div> -->
<!-- Navbar End -->