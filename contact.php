<?php
include 'libs.php';

?>

    <html>
    <head>
        <title>Baja Discover | Tours </title>
        <link rel="stylesheet" type="text/css" href="css/page-style/contact.css">
        <link rel="stylesheet" type="text/css" href="css/general/general.css">
        <script src="js/contact.js">
        </script>
        <script defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZTz68ypGGK_mkWHA3IYZwY9RTWQyLBHE&callback=initMap">
        </script>
    </head>
    <body>

    <main id="contact">
        <section class="intro">
            <div class="row no-gutters">

                <div class="col-lg-6 bg-green">
                    <div class=" half-container">
                        <div class="address ">
                            <div>
                                <label>MEXICALI</label>

                                <p>

                                <div class="row">
                                    <div class="col-lg-11 col-md-10">
                                        Simón Bolívar # 232-12, Col. Centro<br>
                                        C.P. 44140, Mexicali, Baja California.<br>
                                    </div>
                                    <div class="col-lg-1 col-md-2">
                                        <i class="fa fa-map-marker fa-lg text-yellow" aria-hidden="true"></i>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-11 col-md-10">
                                        +52 (686)-537-###<br>
                                    </div>
                                    <div class="col-lg-1 col-md-2">
                                        <i class="fa fa-phone text-purple" aria-hidden="true"></i>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-11 col-md-10">
                                        contact@bajadiscover.com<br>
                                    </div>
                                    <div class="col-lg-1 col-md-2">
                                        <i class="fa fa-envelope text-light" aria-hidden="true"></i>

                                    </div>
                                </div>
                                </p>
                            </div>
                            <Br>
                            <div>
                                <label>ROSARITO</label>

                                <p>
                                <div class="row">
                                    <div class="col-lg-11 col-md-10">
                                        Av. Niño heroes No. 521 Col. Independecia<br>
                                        C.P. 22290 Rosarito, Baja California.</label><br>
                                    </div>
                                    <div class="col-lg-1 col-md-2">
                                        <i class="fa fa-map-marker fa-lg text-yellow" aria-hidden="true"></i>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-11 col-md-10">
                                        +52 (661)-123-###<br>
                                    </div>
                                    <div class="col-lg-1 col-md-2">
                                        <i class="fa fa-phone text-purple" aria-hidden="true"></i>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-11 col-md-10">
                                        contact@bajadiscover.com<br>
                                    </div>
                                    <div class="col-lg-1 col-md-2">
                                        <i class="fa fa-envelope text-light" aria-hidden="true"></i>

                                    </div>
                                </div>
                                </p>
                            </div>

                            <Br>
                            <div>
                                <label>TIJUANA</label>

                                <p>
                                <div class="row">
                                    <div class="col-lg-11 col-md-10">
                                        Av. Chapultepec No. 536 - PH Col. Roma Norte<br>
                                        C.P. 06700 Tijuana, Baja California.</label><br>
                                    </div>
                                    <div class="col-lg-1 col-md-2">
                                        <i class="fa fa-map-marker fa-lg text-yellow" aria-hidden="true"></i>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-11 col-md-10">
                                        +52 (664)-123-###<br>
                                    </div>
                                    <div class="col-lg-1 col-md-2">
                                        <i class="fa fa-phone text-purple" aria-hidden="true"></i>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-11 col-md-10">
                                        contact@bajadiscover.com<br>
                                    </div>
                                    <div class="col-lg-1 col-md-2">
                                        <i class="fa fa-envelope text-light" aria-hidden="true"></i>

                                    </div>
                                </div>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form half-container">
                        <div class="title pb-2">

                            <h1><i class="fa fa-envelope" aria-hidden="true"></i>
                                Contact US
                                &nbsp;</h1>
                            <hr>

                        </div>

                        <form id="survey-form">
                            <div class="form-contain">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label id="name-label" for="name">First name</label>
                                            <input id="name" class="form-control" type="text" name="name-label"
                                                   required/>
                                        </div>

                                        <div class="col">
                                            <label id="lastname-label" for="lastname">Last name</label>
                                            <input id="lastname" class="form-control" type="text"
                                                   name="lastname-label"
                                                   required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label id="email-label" for="email">Email</label>
                                            <input id="email" class="form-control" type="email" name="email-label"
                                                   placeholder="e.g. hello@example.com" required/>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="row">

                                        <div class="col-6">
                                            <label id="phonenumber-label" for="phonenumber">Phone number</label>
                                            <input id="phonenumber" class="form-control" type="text"
                                                   name="phonenumber-label" placeholder="(###) ###-####" required/>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">

                                    <div class="row">

                                        <div class="col">
                                            <label id="subject-label" for="subject">Message subject</label>

                                            <select id="subject" class="form-control" name="business">
                                                <option value="1">Custom package</option>
                                                <option value="2">Reservation changes</option>
                                                <option value="3">Payment problem</option>
                                                <option value="4">Cancel reservation</option>
                                                <option value="4">Other</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col">

                                        <label for="exampleFormControlTextarea1">Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  placeholder="Enter your message for us here. We will get back to you as soon as posible."
                                                  rows=3"></textarea>
                                    </div>
                                </div>

                            </div>
                            <hr>

                            <div class="">

                                <button type="button" class="w-100 btn bg-purple text-light ">

                                    <i class="fa fa-paper-plane" aria-hidden="true"></i> SEND
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>


        </section>
        <section class="location ">
            <div class="map">
                <div class="row">

                    <div class="col-md">
                        <div id="google-map"></div>

                    </div>
                </div>
            </div>
        </section>

    </main>


    </body>


<?php
include 'footer.php';

?>