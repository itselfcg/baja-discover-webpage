<?php
include 'libs.php';

?>

    <html>
    <head>
        <title>Baja Discover | Tours </title>
        <link rel="stylesheet" type="text/css" href="css/general/tours.css">
        <link rel="stylesheet" type="text/css" href="css/general/pricing-table.css">


    </head>
    <header>
        <?php
        include 'navbar.php';
        ?>
    </header>
    <body>

    <main id="tacoexperience">
        <section class="intro">
            <div class="container ">
                <div class="info">

                    <h2>ENJOY THE BEST</h2>
                    <h1>Taco experience</h1>
                    <hr>

                    <p class="text-center text-dark">
                        <i class="fa fa-clock-o" aria-hidden="true"></i> 2h - 12h&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-car" aria-hidden="true"></i>Transportation included&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-users" aria-hidden="true"></i> Private group&nbsp;&nbsp;&nbsp;
                    </p>
                    <p class="text-justify">
                        Visit the 4 most famous taquerias in Tijuana. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nam a leo eu tortor blandit gravida. Quisque porttitor tellus ex, et
                        fringilla arcu scelerisque a. Donec volutpat, massa sit amet iaculis volutpat, nisi metus
                        malesuada metus, ut dapibus quam augue eget tellus. Nullam eu odio nec ipsum gravida
                        fermentum non et eros. Etiam accumsan nec augue pretium pretium.


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
                    <div class="price bg-purple">$25<sup>/ Person</sup></div>
                    <ul class="table-list">
                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            3 Popular restaurants</li>

                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            Transport</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            Private guide</li>

                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            Tacos</li>
                    </ul>
                    <div class="footer">

                    <div class="product-footer">
                        <button class="btn text-light bg-green">Book now</button>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4 product-box">

                <div class="product">
                    <div class="product-title">Standard</div>
                    <div class="price bg-purple">$100<sup>/ Person</sup></div>
                    <ul class="table-list">
                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            Popular restaurants</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            Exclusive restaurants</li>

                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            Transport</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            Private guide</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            Drinks</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            Tacos  <span class="unlimited bg-pink">Unlimited</span></li>
                    </ul>
                    <div class="footer">
                    <div class="product-footer">
                        <button class="btn text-light bg-green">Book now</button>
                    </div>
                    </div>

                </div>
                </div>
                <div class="col-md-4 product-box">

                <div class="product">

                    <div class="product-title">Premium</div>
                    <div class="price bg-purple">$200<sup>/ Person</sup></div>

                    <ul class="table-list">
                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            Popular restaurants</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            Exclusive restaurants</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            VIP restaurants</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            VIP Transport</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            Private guide</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            Drinks  <span class="unlimited bg-pink">Unlimited</span></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>
                            Tacos  <span class="unlimited bg-pink">Unlimited</span></li>
                    </ul>
                    <div class="footer">
                    <div class="product-footer">
                        <button class="btn text-light bg-green">Book now</button>
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