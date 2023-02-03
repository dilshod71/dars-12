<!doctype html>
<html lang="en">
<head>
   <?php include 'vendor/head.php'; ?>
    <title>Document</title>
</head>
<body>
<?php
    include 'vendor/navbar.php';
?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Portolio</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Portolio</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>
            <?php
            $content = array(
                "portfolio-1.jpg",
                "portfolio-2.jpg",
                "portfolio-3.jpg",
                "portfolio-4.jpg",
                "portfolio-5.jpg",
                "portfolio-6.jpg",
                "portfolio-7.jpg",
                "portfolio-8.jpg",
                "portfolio-9.jpg",
            );
            ?>
            <div class="row portfolio-container">
                <?php foreach ($content as $value){?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/<?php echo $value;?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/<?php echo $value;?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>

        </div>
    </section>

</main>
<?php
    include 'vendor/foother.php';
?>
</body>
</html>


