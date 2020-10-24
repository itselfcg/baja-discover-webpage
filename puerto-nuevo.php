<?php

include 'libs.php';

?>

    <html>
    <head>
        <title>Baja Discover | Tours </title>
        <link rel="stylesheet" type="text/css" href="css/general/pricing-table.css">
        <link rel="stylesheet" type="text/css" href="css/general/tours.css">

    </head>
    <header>
        <?php
        include 'navbar.php';
        ?>
    </header>
    <body>

    <main id="puerto-nuevo">
        <section class="intro">
            <div class="container">
                <div class="info">

                    <h2>The best restaurants are in </h2>
                    <h1>PUERTO NUEVO</h1>
                    <hr>

                    <p class="text-center text-dark">
                        <i class="fa fa-clock-o" aria-hidden="true"></i> 2h - 4h&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-car" aria-hidden="true"></i>Transportation included&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-users" aria-hidden="true"></i> Private group&nbsp;&nbsp;&nbsp;
                    </p>
                    <p class="text-justify">
                        Morbi et fermentum magna. Quisque lorem massa, accumsan sed metus et, vestibulum gravida ex.
                        Nullam a sem cursus eros pellentesque efficitur ac a turpis. Maecenas ac orci fringilla,
                        pharetra nunc sit amet, bibendum tellus. Sed ac ex at leo consequat auctor faucibus et urna. In
                        blandit metus vitae felis iaculis lobortis. Vivamus malesuada, nisi ac ultrices feugiat, justo dolor mattis mi, in tempor dui ante ut
                        mauris.

                    </p>


                    <br>
                    <p class="text-right">
                        <a href="#pricing" class="btn bg-green text-light"><i class="fa fa-address-book"
                                                                              aria-hidden="true"></i>


                            BOOK NOW</a>
                        <a href="#pricing" class="btn btn-pink"><i class="fa fa-usd" aria-hidden="true"></i>

                            PRICING</a>&nbsp;&nbsp;

                    </p>
                </div>

            </div>


        </section>


        <section id="pricing" class="pricing-section container">
            <h2>Live the EXPERIENCE with our </h2>
            <h1>Packages</h1>
            <hr>

            <div class=" row">
                <div class="col-md-4 product-box">


                    <div class="product">

                        <div class="product-title">Basic</div>
                        <div class="price bg-orange">$50<sup>/ Person</sup></div>
                        <ul class="table-list">
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Popular restaurant
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Lobster
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Transport
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Private guide
                            </li>
                        </ul>

                        <div class="product-footer">
                            <button class="btn bg-green text-light">Book now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-box">
                    <div class="product">
                        <div class="product-title">Standard</div>
                        <div class="price bg-orange">$120<sup>/ Person</sup></div>
                        <ul class="table-list">
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Exclusive restaurant
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Lobster
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Drinks
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Transport
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Private guide
                            </li>

                        </ul>
                        <div class="product-footer">
                            <button class="btn bg-green text-light">Book now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-box">
                    <div class="product">

                        <div class="product-title">Premium</div>
                        <div class="price bg-orange">$180<sup>/ Person</sup></div>

                        <ul class="table-list">

                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Exclusive restaurant
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Lobster <span class="unlimited bg-pink">Unlimited</span></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Drinks <span class="unlimited bg-pink">Unlimited</span></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                VIP Transport
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>
                                Private guide
                            </li>


                        </ul>
                        <div class="footer">
                            <div class="product-footer">
                                <button class="btn bg-green text-light">Book now</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <br>
            <div >
                <p class="text-center">
                    Not what you were looking for? <a href="contact.php">Contact us</a> for custom packages

                </p>
            </div>

        </section>
    </main>
    </body>


<?php
include 'footer.php';

?>