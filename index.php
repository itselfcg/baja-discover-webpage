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
    <script src="js/index.js"></script>
</head>
<body>

<main id="bajadiscover">
    <section class="intro">
        <div class="header">
            <div class="title">
                <label class="t1">ESCAPE FROM REALITY</label><br>
                <label class="t2">Explore Baja California today!</label><br>
                <div>
                    <a href="#info" class="btn p-4 bg-green text-light"><i class="fa fa-calendar"
                                                                           aria-hidden="true"></i>

                        reservationS</a>
                    <a href="#us" class="btn btn-white"><i class="fa fa-plus" aria-hidden="true"></i>
                        INFORMATION</a>
                </div>
            </div>
            <div class="header-picture">
            </div>
        </div>
    </section>
    <!--<section>

        <div class="container">

            <div class="row no-gutters">


                <div class="col-lg-4  col-md-6">

                    <a href="taco-experience.php">
                        <div class="preview">
                            <img src="imagenes/main/ad/ad3.jpg">
                        </div>
                    </a>
                </div>

                <div class=" col-lg-4  col-md-6 ">
                    <a href="puerto-nuevo.php">
                        <div class="preview">
                            <img src="imagenes/main/ad/ad2.jpg">
                        </div>
                    </a>
                </div>
                <div class=" col-lg-4  col-md-6 ">

                    <a href="rosarito.php">
                        <div class="preview">
                            <img src="imagenes/main/ad/ad6.jpg">
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>
    -->
    <section id="us" class="us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img class=" w-100" src="imagenes/main/banners/3.png">


                </div>
                <div class="col-lg-8 info-us pb-5">
                    <div class="about"><h2>We're the best travel agency </h2>
                        <h1> Baja Discover</h1>
                        <hr>
                        <article>
                            <p>Pellentesque quam leo, consequat id scelerisque vitae, mollis et erat. Cras laoreet augue
                                nec velit accumsan, sed ultrices diam semper. Nullam ut auctor lorem, sit amet sagittis
                                nisi. Nam rhoncus cursus turpis quis placerat. Morbi et mauris id felis fermentum
                                rutrum. Aenean a consequat tellus, cursus rutrum ex. Phasellus tincidunt erat id elit
                                vestibulum, at pretium justo malesuada.

                            </p>

                            <p>Suspendisse ac gravida sem, sed consectetur nunc. Vestibulum volutpat lacus nec nisi
                                pharetra, ut luctus metus interdum. Vestibulum interdum venenatis lobortis. Donec felis
                                eros, lacinia tristique nulla nec, ornare rutrum nisl. Integer id tristique massa, vel
                                fringilla nisl. Vestibulum libero libero, sodales non facilisis vitae, porta id dolor.
                                Nam dignissim ex nulla, non vestibulum turpis maximus non. </p>
                        </article>
                    </div>

                </div>

            </div>
            <div class="row  no-gutters">
                <div class="col-md-4">
                    <div class="info-section bg-purple text-light">
                        <label><i class="fa fa-map fa-3x" aria-hidden="true"></i>

                            <br>
                            BEST EXPERIENCE</label>
                        <p>Cras sed justo eleifend,
                            hendrerit ex consectetur, ornare tellus. Nam a suscipit dui. Fusce
                            et efficitur ante. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-section bg-orange text-light">
                        <label><i class="fa fa-street-view fa-3x" aria-hidden="true"></i>

                            <br>


                            BEST Guides</label>
                        <p>Donec iaculis arcu lectus,
                            et condimentum enim hendrerit in. Integer bibendum risus.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-section bg-blue text-light">
                        <label><i class="fa fa-star fa-3x" aria-hidden="true"></i>

                            <br>


                            Best rated
                        </label>
                        <p>Sed lacinia velit eu augue tincidunt, quis
                            ultrices lectus lacinia. Maecenas maximus facilisis mi ac aliquet.</p>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section>

        <div class="sponsors">
            <img class="w-50" src="imagenes/main/logos2.png"></div>
    </section>

    <section id="ad" class="ad">
        <div>
            <div id="carousel-section" class="carousel " data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-section" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-section" data-slide-to="1"></li>
                    <li data-target="#carousel-section" data-slide-to="2"></li>


                </ol>

                <div class="carousel-inner">

                    <div class="carousel-item ">
                        <img class="d-block w-100" src="imagenes/main/ad2/background.png">
                        <div class="carousel-caption">
                            <div class="pn-description">
                                <div>
                                    <span class="type"><i class="fa fa-plane"
                                                          aria-hidden="true"></i>&nbsp;&nbsp;TOUR</span>
                                </div>

                                <hr>
                                <div class="text-center">


                                    <label>Puerto Nuevo</label>
                                    <p>Taste the best lobster in México </p>

                                </div>
                                <br>
                                <div class="text-center">

                                    <a class="btn bg-blue text-light" href="puerto-nuevo.php" role="button">Starting at
                                        $50</a>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item active ">
                        <img class="d-block w-100" src="imagenes/main/ad2/background2.png">
                        <div class="carousel-caption">

                            <div class="te-description">
                                <div>
                                    <span class="type"><i class="fa fa-plane"
                                                          aria-hidden="true"></i>&nbsp;&nbsp;TOUR</span>
                                </div>

                                <hr>
                                <div class="text-center">
                                    <label>Taco<br>experience</label>
                                    <p>Visit the most exclusive taquerias</p>
                                </div>
                                <br>
                                <div class="text-center">

                                    <a class="btn bg-green text-light" href="taco-experience.php" role="button">Starting
                                        at
                                        $25</a>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item ">
                        <img class="d-block w-100" src="imagenes/main/ad2/background4.png">
                        <div class="carousel-caption">

                            <div class="rb-description">

                                <div>
                                    <span class="type"><i class="fa fa-info-circle"
                                                          aria-hidden="true"></i>&nbsp;&nbsp;INFO</span>
                                </div>

                                <hr>
                                <div class="text-center">

                                    <label>Rosarito </label>

                                    <p>Enjoy the astonishing beachfront</p>

                                </div>
                                <br>
                                <div class="text-center">

                                    <a class="btn bg-pink text-light" href="rosarito.php" role="button">LEARN MORE </a>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <a class="carousel-control-prev" href="#carousel-section" role="button"
                   data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-section" role="button"
                   data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


    </section>

    <section id="info" class="info pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div><h2>The beautiful state of</h2>
                        <h1>Baja California</h1>
                        <hr>
                        <article>


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
                                there are also eco-tourism opportunities.<a
                                        href="https://en.wikipedia.org/wiki/Baja_California"
                                        target="_blank">Read
                                    more.</a></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et luctus enim, et
                                interdum mauris. Aliquam erat volutpat. Ut interdum viverra arcu ac ultricies.
                                Suspendisse ac rutrum turpis, id imperdiet enim. Sed eu arcu eget dui varius sodales
                                consectetur nec risus. Etiam maximus elit id velit molestie, nec condimentum nisl
                                cursus. Vestibulum efficitur risus nec aliquet feugiat. Vestibulum ante ipsum primis in
                                faucibus orci luctus et ultrices posuere cubilia curae; Etiam vel orci velit. </p>
                            <p></p>
                            <p></p>

                            <p></p>
                        </article>
                    </div>

                    <div class="btn-format">

                        <button onclick="toggleMoreInfo(this);" id="show-hide-btn" class="btn btn-pink w-25"><i
                                    class="fa fa-plus"
                                    aria-hidden="true"></i> Show more
                        </button>
                    </div>                <br>

                </div>

                <div class="col-lg-4 text-center ">
                    <img class=" w-100" src="imagenes/main/map1.png">
                    <ul class="legend">

                        <li>
                            <div class="bg-pink"></div>
                            Ensenada
                        </li>
                        <li>
                            <div class="bg-yellow"></div>
                            Mexicali
                        </li>

                        <li>
                            <div class="bg-green"></div>
                            Rosarito
                        </li>
                        <li>
                            <div class="bg-blue"></div>
                            Tecate
                        </li>
                        <li>
                            <div class="bg-purple"></div>
                            Tijuana
                        </li>

                    </ul>


                </div>
            </div>
            <div id="bcMoreInfo">
                <div class="row">
                    <div class="col-lg-8"><h3><i class="fa fa-bicycle" aria-hidden="true"></i>
                            Activities</h3>
                        <hr>
                        <div class="row">
                            <div class="col-lg">
                                <p>Cras sit amet iaculis ante, a porttitor est. Donec ut odio at dolor tempus volutpat.
                                    Aliquam
                                    dictum sem purus. Aliquam tristique nunc nec ante ultricies, vestibulum feugiat
                                    risus
                                    tristique.
                                </p>

                                <figure>

                                    <img class=" w-100" src="imagenes/main/info/activities1.png">
                                    <figcaption class="text-center"> Fig.# - Vestibulum ultrices.</figcaption>
                                </figure>

                                <p>In interdum, magna sed tincidunt eleifend, magna elit elementum arcu, et blandit leo
                                    quam
                                    in
                                    ante.Quisque congue iaculis libero eu mollis. .</p>
                                <figure>

                                    <img class=" w-100" src="imagenes/main/info/activities2.png">
                                    <figcaption class="text-center"> Fig.# - Vestibulum ultrices.</figcaption>
                                </figure>

                                <p>
                                    Pellentesque tempus nec tortor fermentum faucibus. Vivamus dui diam, dictum vel
                                    tristique at, euismod eget sem.
                                </p>
                            </div>
                            <div class="col-lg">

                                <p>Morbi a faucibus felis. Donec elementum, eros quis ornare convallis, odio
                                    justo
                                    maximus
                                    velit, at faucibus massa ipsum sed lectus. Vestibulum ultrices, enim pharetra
                                    tincidunt
                                    sagittis, lectus leo dignissim enim, vel consequat metus neque id magna. </p>
                                <figure>

                                    <img class=" w-100" src="imagenes/main/info/culture.png">
                                    <figcaption class="text-center"> Fig.# - Vestibulum ultrices.</figcaption>
                                </figure>
                                <p>
                                    Fusce est ipsum, finibus ac feugiat gravida, efficitur a sem. Donec eleifend magna
                                    id suscipit tincidunt. Fusce ultricies tristique sapien, ut hendrerit massa
                                    facilisis et. Donec dapibus metus elit, vitae porttitor urna faucibus a. In ultrices
                                    libero id purus mattis, a ultrices lectus ullamcorper.Fusce hendrerit, ex at
                                    tincidunt egestas, lorem sem tempus leo, non tempor eros massa
                                    id mauris.ut hendrerit massa
                                    facilisis et. </p>

                                <br><br>
                                <div class="btn-format">
                                    <a href="" class="btn btn-blue disabled" aria-disabled="true"><i class="fa fa-plus"
                                                                                                     aria-hidden="true"></i>
                                        More info</a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg"><h3><i class="fa fa-cutlery" aria-hidden="true"></i>
                            Gastronomy</h3>
                        <hr>
                        <p>Ut posuere sed augue vitae dictum. Praesent ut porta ligula. Sed sed erat eleifend,
                            consequat
                            dolor et, porttitor velit. Donec dapibus diam sed viverra molestie. </p>
                        <figure>

                            <img class=" w-100" src="imagenes/main/info/gastronomy2.png">
                            <figcaption class="text-center"> Fig.# - Vestibulum ultrices.</figcaption>
                        </figure>
                        <p>Ut posuere sed augue vitae dictum. Praesent ut porta ligula. Sed sed erat eleifend,
                            consequat
                            dolor et, porttitor velit. Donec dapibus diam sed viverra molestie. Donec elementum at
                            felis sed
                            suscipit. </p>
                        <figure>

                            <img class=" w-100" src="imagenes/main/info/gastronomy2.jpg">
                            <figcaption class="text-center"> Fig.# - Vestibulum ultrices.</figcaption>
                        </figure>
                        <p> Fames ac ante ipsum primis in faucibus. </p><br>
                        <div class="btn-format">

                            <a href="" class="btn btn-blue disabled" aria-disabled="true"><i class="fa fa-plus"
                                                                                             aria-hidden="true"></i>
                                More info</a>
                        </div>

                    </div>
                </div>
                <div class="row">

                    <div class="col-lg"><h3><i class="fa fa-glass" aria-hidden="true"></i>

                            Nightlife</h3>
                        <hr>
                        <p>In erat lacus, aliquam sit amet laoreet a, gravida ac nunc. Ut sit amet est leo. Etiam vel
                            lacinia est, at fringilla urna. Morbi sit amet metus ultricies, lobortis ligula vitae,
                            molestie
                            sem. </p>

                        <figure>

                            <img class=" w-100" src="imagenes/main/info/nightlife.jpg">
                            <figcaption class="text-center"> Fig.# - Vestibulum ultrices.</figcaption>
                        </figure>

                        <p>

                            Donec molestie diam sit amet risus eleifend, vel gravida justo aliquet. Nam suscipit
                            ullamcorper vehicula. Vestibulum faucibus urna eget arcu consectetur accumsan. Cras vitae
                            purus vestibulum, molestie felis non, sollicitudin nulla. Donec imperdiet justo ac erat
                            luctus, sit amet sollicitudin lacus iaculis. Integer lobortis velit ante.
                        </p>


                        <br>
                        <div class="btn-format">

                            <a href="" class="btn btn-blue disabled" aria-disabled="true"><i class="fa fa-plus"
                                                                                             aria-hidden="true"></i>
                                More info</a>
                        </div>
                    </div>


                    <div class="col-lg">
                        <h3><i class="fa fa-shopping-bag" aria-hidden="true"></i>

                            Shopping</h3>
                        <hr>
                        <p>Vestibulum mattis risus vitae nisl gravida, eget faucibus urna commodo. Nulla eu velit leo.
                            Integer eget sem consequat, varius tellus eu, semper purus.Etiam et augue id libero faucibus
                            malesuada. Vestibulum scelerisque libero id tempor lacinia. Class aptent taciti sociosqu ad
                            litora torquent per conubia nostra, per inceptos himenaeos. Proin sagittis porta neque eget
                            interdum. Cras dapibus nisi ut leo scelerisque, a lobortis turpis convallis. Suspendisse id
                            pellentesque tellus, non fringilla enim. </p>

                        <figure>

                            <img class=" w-100" src="imagenes/main/info/shopping2.jpg">
                            <figcaption class="text-center"> Fig.# - Vestibulum ultrices.</figcaption>
                        </figure>

                        <br>
                        <div class="btn-format">

                            <a href="" class="btn btn-blue disabled" aria-disabled="true"><i class="fa fa-plus"
                                                                                             aria-hidden="true"></i>
                                More info</a>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <div class="btn-format">

                            <button onclick="hideMoreInfo();" class="btn btn-pink "><i
                                        class="fa fa-eye-slash"
                                        aria-hidden="true"></i> Hide section
                            </button>
                        </div>
                    </div>
                </div>                            <br>

            </div>
            <div class="row">

                <div class="col-lg"><h3><i class="fa fa-cloud" aria-hidden="true"></i>
                        Weather</h3>
                    <hr>
                    <p> Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis eu vulputate purus.
                        Integer
                        eu urna vel ipsum iaculis mattis nec at erat. </p></div>
                <div class="col-lg"><h3><i class="fa fa-shield" aria-hidden="true"></i>
                        Safety tips</h3>
                    <hr>
                    <p>Cras sit amet iaculis ante, a porttitor est. Donec ut odio at dolor tempus volutpat. Aliquam
                        dictum sem purus.
                    </p></div>
                <div class="col-lg"><h3><i class="fa fa-info-circle" aria-hidden="true"></i>

                        Other</h3>
                    <hr>
                    <p>In interdum, magna sed tincidunt eleifend, magna elit elementum arcu, et blandit leo quam in
                        ante. Morbi a faucibus felis. </p></div>

            </div>

        </div>


    </section>


</main>

</body>
</html>


<?php
include 'footer.php';

?>