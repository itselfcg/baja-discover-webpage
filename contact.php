<?php
include 'navbar.php';
include 'libs.php';

?>

    <html>
    <head>
        <title>Baja Discover | Tours </title>
        <link rel="stylesheet" type="text/css" href="css/about.css">
    </head>
    <body>

    <main id="tours-main">
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


<?php
include 'footer.php';

?>