<!DOCTYPE html>
<?php
include 'navbar.php';
include 'libs.php';

?>

<html>
<head>
    <title>Baja Discover | Home </title>
    <link rel="stylesheet" type="text/css" href="css/page-style/baja-discover.css">
    <link rel="stylesheet" type="text/css" href="css/general/general.css">

</head>
<body>

<main id="bajadiscover">
    <section class="intro">
        <div id="header">
            <div class="title">
                <label class="t1">ESCAPE FROM REALITY</label><br>
                <label class="t2">Explore Baja California today!</label><br>
                <div>
                    <a href="#info" class="btn btn-custom "><i class="fa fa-calendar" aria-hidden="true"></i>

                        reservationS</a>
                    <a href="#info" class="btn btn-white"><i class="fa fa-plus" aria-hidden="true"></i>
                        INFORMATION</a>
                </div>
            </div>
            <div class="cover">

                <img class="d-block w-100" src="imagenes/main/header/banner2.jpg">

            </div>

            <div class="ad-preview">

                <div class="row no-gutters">

                    <div class="col-sm-3">

                        <a href="">
                            <div class="preview">
                                <img src="imagenes/main/ad/ad4.jpg">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">

                        <a href="taco-experience.php">
                            <div class="preview">
                                <img src="imagenes/main/ad/ad3.jpg">
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="puerto-nuevo.php">
                            <div class="preview">
                                <img src="imagenes/main/ad/ad2.jpg">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">

                        <a href="rosarito.php">
                            <div class="preview">
                                <img src="imagenes/main/ad/ad6.jpg">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="info" class="info pt-5">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div><h1>Why Baja California</h1><br>
                        <article>
                            <p>With over 3 million residents, Baja is the fourteenth most populated state in Mexico.
                                Of
                                which, Tijuana, claims more than a third of those residents with 1,600,000 people.</p>

                            <p>The state of Baja California is known for many charming small villages. In contrast,
                                are
                                the large towns of Tijuana, Mexicali, Ensenada, Tecate, and Rosarito. These towns offer
                                many
                                historical and cultural attractions but are also known for their entertainment venues,
                                restaurants,
                                and fun..</p>

                            <p>While there are many populated parts of Baja like Tijuana, there are also remote
                                sections
                                that add to the charm. In contrast, aside from the beach activities along the coast of
                                the
                                state,
                                there are also eco-tourism opportunities. For example, whale watching, environmental
                                tours,
                                and
                                rock
                                climbing adventures name a few. <a href="https://en.wikipedia.org/wiki/Baja_California"
                                                                   target="_blank">Read
                                    more.</a></p>
                        </article>
                    </div>

                </div>
                <div class="col-1">
                </div>
                <div class="col align-self-center ">

                    <div id="bc-carousel">
                        <div id="carousel-pictures" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-pictures" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-pictures" data-slide-to="1"></li>
                                <li data-target="#carousel-pictures" data-slide-to="2"></li>
                                <li data-target="#carousel-pictures" data-slide-to="3"></li>
                                <li data-target="#carousel-pictures" data-slide-to="4"></li>
                                <li data-target="#carousel-pictures" data-slide-to="5"></li>
                                <li data-target="#carousel-pictures" data-slide-to="6"></li>

                            </ol>

                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="imagenes/main/carousel/10.png">
                                    
                                </div>
                                <div class="carousel-item ">
                                    <img class="d-block w-100" src="imagenes/main/carousel/9.png">


                                </div>
                                <div class="carousel-item ">
                                    <img class="d-block w-100" src="imagenes/main/carousel/8.png">


                                </div>
                                <div class="carousel-item ">
                                    <img class="d-block w-100" src="imagenes/main/carousel/7.png">


                                </div>
                                <div class="carousel-item ">
                                    <img class="d-block w-100" src="imagenes/main/carousel/6.png">


                                </div>
                                <div class="carousel-item ">
                                    <img class="d-block w-100" src="imagenes/main/carousel/5.png">


                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-pictures" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-pictures" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="text-center pt-4"><img class="w-75" src="imagenes/main/logos2.png">
                    </div>

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