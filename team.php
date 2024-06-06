<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MEDINOVA - Hospital Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php include 'links.php'; ?>
</head>

<body>
    <!-- Topbar Start -->
    <?php include 'header.php'; ?>
    <!-- Navbar End -->
    <!-- breadcrumd start -->
    <div>
        <img src="img/breadcrumb.jpg" width="100%" alt="">
        <div class="breadcumb">
            <h1 class="mx-5"><a class="text-white" href="index.php">Home</a></h1>
            <i class="bi bi-arrow-right text-white fs-2"></i>
            <h1 class="mx-5 text-white">Meet Our Team</h1>
        </div>
    </div>
    <!-- breadcurmb end -->
   <!-- OUR DOCTORS Start -->
   <?php include 'index-our-doctor.php';?>
    <!-- OUR DOCTORS End -->

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

</body>

</html>