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
            <h1 class="mx-5 text-white">Service</h1>
        </div>
    </div>
    <!-- breadcurmb end -->
    
    <!-- Services Start -->
    <?php include 'index-service.php'; ?>
    <!-- Services End -->

    <!-- Appointment Start -->
    <?php include 'index-appointment.php'; ?>
    <!-- Appointment End -->

    <!-- Testimonial Start -->
    <?php include 'index-testimonial.php'; ?>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

</body>

</html>