<!DOCTYPE html>
<?php
include 'navbar.php';
include 'libs.php';

?>

<html>
<head>
    <title>Baja Discover | Home </title>
    <link rel="stylesheet" type="text/css" href="css/intro.css">
    <link rel="stylesheet" type="text/css" href="css/info.css">
</head>
<body>

<main id="main-content">
    <section class="intro-section">
        <div class="intro-banner">
            <div id="intro-container">
                <label class="intro-lbl">VISIT BC </label><br>
                <a href="#home" class="btn"><i class="fa fa-plus" aria-hidden="true"></i>
                    INFORMATION</a>
            </div>
            <div id="intro-carousel">
                <div id="headerBannerCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#intro-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#intro-carousel" data-slide-to="1"></li>
                        <li data-target="#intro-carousel" data-slide-to="2"></li>
                        <li data-target="#intro-carousel" data-slide-to="3"></li>

                    </ol>

                    <div class="carousel-inner">

                        <div class="carousel-item ">
                            <img class="d-block w-100" src="imagenes/main/carousel/banner2.jpg">
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block w-100" src="imagenes/main/carousel/banner3.jpg">
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block w-100" src="imagenes/main/carousel/banner4.jpg">
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="imagenes/main/carousel/banner1.jpg">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#headerBannerCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#headerBannerCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="ad-preview">

                <div class="row no-gutters">

                    <div class="col-sm-3">

                        <a href="">
                            <div class="preview-container">
                                <img class="preview-img" src="imagenes/main/ad/ad4.jpg">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">

                        <a href="taco-experience.php">
                            <div class="preview-container">
                                <img class="preview-img" src="imagenes/main/ad/ad3.jpg">
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="puerto-nuevo.php">
                            <div class="preview-container">
                                <img class="preview-img" src="imagenes/main/ad/ad2.jpg">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">

                        <a href="rosarito.php">
                            <div class="preview-container">
                                <img class="preview-img" src="imagenes/main/ad/ad6.jpg">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="home" class="home-section ">
        <div class="container home-container">
            <div class="row">
                <div class="col-8">
                    <h1>BAJA CALIFORNIA</h1>
                    <p>With over 3 million residents, Baja is the fourteenth most populated state in Mexico.
                        Of
                        which, Tijuana, claims more than a third of those residents with 1,600,000 people.</p>

                    <p>The state of Baja California is known for many charming small villages. In contrast,
                        are
                        the large towns of Tijuana, Mexicali, Ensenada, Tecate, and Rosarito. These towns offer many
                        historical and cultural attractions but are also known for their entertainment venues,
                        restaurants,
                        and fun..</p>

                    <p>While there are many populated parts of Baja like Tijuana, there are also remote
                        sections
                        that add to the charm. In contrast, aside from the beach activities along the coast of the
                        state,
                        there are also eco-tourism opportunities. For example, whale watching, environmental tours, and
                        rock
                        climbing adventures name a few. In addition, visitors find luxury hotels as well as affordable
                        travel lodges.</p>
                    <p><a href="bc.php">Read more...</a></p>

                    <h1>Our tours</h1>
                    <p>With more than a thousand positive reviews in tripadvisor we are your best option. Make your BC experiencie unforgetable.</p>
                    <p><a href="tours.php">Read more...</a></p>

                </div>
                <div class="col-4">
                    <img id="map-background" src="imagenes/intro/bajamap2.png">
                </div>
            </div>
        </div>


    </section>



</main>

</body>
</html>


<?php
include 'footer.php';

?>