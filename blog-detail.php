<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MEDINOVA - Hospital Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <?php include 'links.php'; ?>
</head>

<body>
    <!-- Header Start -->
    <?php include 'header.php'; ?>
    <!-- Header End -->

<!-- breadcrumd start -->
    <div>
        <img src="img/breadcrumb.jpg" width="100%" alt="">
        <div class="breadcumb">
            <h1 class="mx-5"><a class="text-white" href="index.php">Home</a></h1>
            <i class="bi bi-arrow-right text-white fs-2"></i>
            <h1 class="mx-5"><a class="text-white" href="blog.php">Blog</a></h1>
            <i class="bi bi-arrow-right text-white fs-2"></i>
            <h1 class="mx-5 text-white">Blog Detail Page</h1>
        </div>
    </div>
    <!-- breadcurmb end -->

    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="img/blog-detail.jpg" alt="">
                    <h1 class="mb-4">Overcoming COVID-19 A Success Story from Medinova</h1>
                    <p>In the midst of the global pandemic, Medinova has been at the forefront, providing exemplary medical services and support to countless individuals battling COVID-19. Today, we share an inspiring story of resilience, recovery, and the relentless dedication of our healthcare professionals.</p>
                    <p>Meet John Doe John Doe, a 45-year-old entrepreneur, was diagnosed with COVID-19 in March 2020. His condition rapidly deteriorated, leading to severe respiratory issues. John’s journey from being critically ill to a full recovery is a testament to the extraordinary care and medical expertise at Medinova.</p>
                    <p>The Initial Struggle John was admitted to Medinova with severe symptoms, including high fever, persistent cough, and shortness of breath. Upon arrival, our medical team promptly conducted comprehensive tests, including a chest X-ray and a CT scan, which revealed significant lung involvement. John was immediately transferred to our intensive care unit (ICU) for close monitoring and treatment.</p>
                    <!-- <div class="d-flex justify-content-between bg-light rounded p-4 mt-4 mb-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle me-2" src="img/user.jpg" width="40" height="40" alt="">
                            <span>John Doe</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="ms-3"><i class="far fa-eye text-primary me-1"></i>12345</span>
                            <span class="ms-3"><i class="far fa-comment text-primary me-1"></i>123</span>
                        </div>
                    </div> -->
                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                <!-- <div class="mb-5">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 mb-4">3 Comments</h4>
                    <div class="d-flex mb-4">
                        <img src="img/user.jpg" class="img-fluid rounded-circle" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <img src="img/user.jpg" class="img-fluid rounded-circle" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="d-flex ms-5 mb-4">
                        <img src="img/user.jpg" class="img-fluid rounded-circle" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                </div> -->
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <div class="bg-light rounded p-5">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-white mb-4">Leave a comment</h4>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-white border-0" placeholder="Website" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <!-- <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-3"><i class="fa fa-search"></i></button>
                    </div>
                </div> -->
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 mb-4">Categories</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Cardiology</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Physiotherapy</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Sycretic</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Homeopathic</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Allopathic</a>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom px-4 border-5 mb-4">Recent Post</h4>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/blog01.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="blog.php" class="h5 d-flex align-items-center bg-light px-3 mb-0">Dive into articles designed to help you maintain a healthy lifestyle. 
                        </a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/blog06.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="blog.php" class="h5 d-flex align-items-center bg-light px-3 mb-0">Explore the cutting-edge advancements in medical technology and treatments.
                        </a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/blog03.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="blog.php" class="h5 d-flex align-items-center bg-light px-3 mb-0">Real-life stories can be inspiring and informative. In this section.
                        </a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/blog04.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="blog.php" class="h5 d-flex align-items-center bg-light px-3 mb-0">Dive into our comprehensive collection of articles covering the latest in medical research.
                        </a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="img/blog05.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="blog.php" class="h5 d-flex align-items-center bg-light px-3 mb-0">Discover strategies for maintaining optimal health and preventing illnesses. 
                        </a>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <!-- <div class="mb-5">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 mb-4">Tag Cloud</h4>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-primary m-1">Design</a>
                        <a href="" class="btn btn-primary m-1">Development</a>
                        <a href="" class="btn btn-primary m-1">Marketing</a>
                        <a href="" class="btn btn-primary m-1">SEO</a>
                        <a href="" class="btn btn-primary m-1">Writing</a>
                        <a href="" class="btn btn-primary m-1">Consulting</a>
                        <a href="" class="btn btn-primary m-1">Design</a>
                        <a href="" class="btn btn-primary m-1">Development</a>
                        <a href="" class="btn btn-primary m-1">Marketing</a>
                        <a href="" class="btn btn-primary m-1">SEO</a>
                        <a href="" class="btn btn-primary m-1">Writing</a>
                        <a href="" class="btn btn-primary m-1">Consulting</a>
                    </div>
                </div> -->
                <!-- Tags End -->

                <!-- Plain Text Start -->
                <!-- <div>
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 mb-4">Plain Text</h4>
                    <div class="bg-light rounded text-center" style="padding: 30px;">
                        <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                        <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                    </div>
                </div> -->
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

</body>

</html>