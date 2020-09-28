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
    <link rel="stylesheet" type="text/css" href="css/about.css">
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
                            <img class="d-block w-100" src="imagenes/main/banner2.jpg"
                                 alt="Summer collection banner">
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block w-100" src="imagenes/main/banner3.jpg"
                                 alt="Summer collection banner">
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block w-100" src="imagenes/main/banner4.jpg"
                                 alt="Summer collection banner">
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="imagenes/main/banner1.jpg" alt="Month's brand banner">
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

            <div class="cities-preview">

                <div class="row">
                    <div class="col">

                        <a href="ensenada.php">
                            <div class="preview-container">
                                <label class="preview-label">ENSENADA</label>
                                <img class="preview-img" src="imagenes/intro/banners/ensenada.jpg">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm">
                        <a href="mexicali.php">

                            <div class="preview-container">
                                <label class="preview-label">MEXICALI</label>
                                <img class="preview-img" src="imagenes/intro/banners/mexicali.jpg">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm">
                        <a href="rosarito">

                            <div class="preview-container">
                                <label class="preview-label">ROSARITO</label>
                                <img class="preview-img" src="imagenes/intro/banners/rosarito.jpg">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm">
                        <a href="tecate">

                            <div class="preview-container">
                                <label class="preview-label">TECATE</label>
                                <img class="preview-img" src="imagenes/intro/banners/tecate.jpg">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm">
                        <a href="tijuana">
                            <div class="preview-container">
                                <label class="preview-label">TIJUANA</label>
                                <img class="preview-img" src="imagenes/intro/banners/tijuana.jpg">
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
    <section id="aboutus" class="about-section">
        <div class="container about-container">
            <div class="row">

                <div class="col-6">
                    <h3>¡HOLA AMIGO! &nbsp;</h3>
                    <p style="text-align: justify">
                        We are a company dedicated to tourism in Baja California. With more than 25 years working to
                        make your
                        experience unforgettable, we can offer you a very wide catalog of activities to do on your trip
                        to any
                        of the wonderful destinations that BC offers you. Follow us in all our social media.
                        <br><br>
                        Fell free to contact us for any question we'll be happy to help you :)
                        <br>


                    </p>
                    <br>
                    <div class="address-container">
                        <p>
                            <label>Mexicali</label>

                        <div class="row">
                            <div class="col-11">
                                Simón Bolívar # 232-12, Col. Centro<br>
                                C.P. 44140, Mexicali, Baja California.<br>
                            </div>
                            <div class="col-1">
                                <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                                +52 (686)-537-###<br>
                            </div>
                            <div class="col-1">
                                <i class="fa fa-phone" aria-hidden="true"></i>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                                contact@bajadiscover.com<br>
                            </div>
                            <div class="col-1">
                                <i class="fa fa-envelope" aria-hidden="true"></i>

                            </div>
                        </div>
                        </p>
                        <hr>

                        <p>
                            <label>Tijuana</label>
                        <div class="row">
                            <div class="col-11">
                                Av. Chapultepec No. 536 - PH Col. Roma Norte<br>
                                C.P. 06700 Tijuana, Baja California.</label><br>
                            </div>
                            <div class="col-1">
                                <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                                +52 (664)-123-###<br>
                            </div>
                            <div class="col-1">
                                <i class="fa fa-phone" aria-hidden="true"></i>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-11">
                                contact@bajadiscover.com<br>
                            </div>
                            <div class="col-1">
                                <i class="fa fa-envelope" aria-hidden="true"></i>

                            </div>
                        </div>
                        </p>
                        <br>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-container">
                        <form id="survey-form">
                            <div class="form-contain">
                                <div class="s-padding">
                                    <div class="subtitle">CONTACT US</div>
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label id="name-label" for="name">First name</label>
                                            <input id="name" class="form-control" type="text" name="name-label"
                                                   placeholder="First name" required/>
                                        </div>

                                        <div class="col">
                                            <label id="lastname-label" for="lastname">Last name</label>
                                            <input id="lastname" class="form-control" type="text" name="lastname-label"
                                                   placeholder="Last name" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label id="email-label" for="email">Email</label>
                                            <input id="email" class="form-control" type="email" name="email-label"
                                                   placeholder="Email" required/>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="row">

                                        <div class="col">
                                            <label id="phonenumber-label" for="phonenumber">Phone number</label>
                                            <input id="phonenumber" class="form-control" type="text"
                                                   name="phonenumber-label" placeholder="Phone number" required/>
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <label for="exampleFormControlTextarea1">Write anything we should know</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="float-right">

                                <button type="button" class="btn ">

                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>

                                    SEND
                                </button>
                            </div>
                            <br>
                            <br>
                            <br>
                        </form>
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