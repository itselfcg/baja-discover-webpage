<?php
include 'navbar.php';
include 'libs.php';

?>

    <html>
    <head>
        <title>Baja Discover | Tours </title>
        <link rel="stylesheet" type="text/css" href="css/page-style/contact.css">
        <link rel="stylesheet" type="text/css" href="css/general/general.css">

    </head>
    <body>

    <main id="contact">
        <section class="intro">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="about">
                            <div><h1>¡Hola amigo! &nbsp;</h1>
                                <p style="text-align: justify">
                                    We are a company dedicated to tourism in Baja California. With more than 25 years
                                    working to
                                    make your
                                    experience unforgettable, we can offer you a very wide catalog of activities to do
                                    on your
                                    trip
                                    to any
                                    of the wonderful destinations that BC offers you. Follow us in all our social media.
                                    <br><br>
                                    Fell free to contact us for any question we'll be happy to help you :)
                                    <br>


                                </p>
                                <br>
                            </div>
                            <div class="address">
                                <div>
                                    <label>Mexicali</label>

                                    <p>

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
                                </div>
                                <hr>
                                <div>
                                    <label>Tijuana</label>

                                    <p>
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
                                    </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div id="map" class="float-right"></div>

                    </div>


                </div>

            </div>


        </section>
        <section  class="contact">
            <div class="container">

                <div class="row">
                    <div class="col-6">
                        <img src="imagenes/discover/Rosarito/rosarito1.png">
                        <img src="imagenes/discover/Rosarito/rosarito4.png">

                    </div>

                    <div id="form" class="col-6">
                        <h1><i class="fa fa-envelope" aria-hidden="true"></i>
                            Contact us</h1>
                        <hr>

                        <form id="survey-form">
                            <div class="form-contain">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label id="name-label" for="name">First name</label>
                                            <input id="name" class="form-control" type="text" name="name-label"
                                                   placeholder="First name" required/>
                                        </div>

                                        <div class="col">
                                            <label id="lastname-label" for="lastname">Last name</label>
                                            <input id="lastname" class="form-control" type="text"
                                                   name="lastname-label"
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

                                        <div class="col-6">
                                            <label id="phonenumber-label" for="phonenumber">Phone number</label>
                                            <input id="phonenumber" class="form-control" type="text"
                                                   name="phonenumber-label" placeholder="Phone number" required/>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">

                                    <div class="row">

                                        <div class="col">
                                            <label id="subject-label" for="subject">Subject</label>

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

                                        <label for="exampleFormControlTextarea1">Comments
                                            know</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows=5"></textarea>
                                    </div>
                                </div>

                            </div>
                            <hr>

                            <div class="text-right">

                                <button type="button" class="btn btn-green ">

                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>

                                    SEND
                                </button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var rosarito = {lat: 32.35, lng: -117.05};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 15, center: rosarito});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: rosarito, map: map});
        }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZTz68ypGGK_mkWHA3IYZwY9RTWQyLBHE&callback=initMap">
    </script>

    </body>


<?php
include 'footer.php';

?>