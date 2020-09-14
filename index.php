<!DOCTYPE html>

<html>
<head>

    <title>Baja Discover | Home </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/general.css">

    <link rel="stylesheet" type="text/css" href="css/intro.css">
    <link rel="stylesheet" type="text/css" href="css/info.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">

    <script type="text/javascript" src="js/navbar.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

</head>
<body>

<header>
    <nav id="main-navbar" class="navbar navbar-expand-lg">
        <div class="container">

            <img id="logo" src="imagenes/logo/lightlogo.png" alt="Logo">

            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Info
                    </a>
                    <div id="info-droplist" class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"><i class="fa fa-cutlery" aria-hidden="true"></i>
                            Gastronomy</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-paint-brush" aria-hidden="true"></i> Art and
                            culture</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-shield" aria-hidden="true"></i> Security</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-sun-o" aria-hidden="true"></i> Weather</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">About us</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Discover
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Ensenada</a>

                        <a class="dropdown-item" href="#">Mexicali</a>
                        <a class="dropdown-item" href="#">Tecate</a>
                        <a class="dropdown-item" href="#">Tijuana</a>
                        <a class="dropdown-item" href="#">Rosarito</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">TOURS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutus">CONTACT</a>
                </li>
            </ul>
        </div>

    </nav>
</header>
<main id="main-content">
    <section class="intro-section">
        <div id="intro-container">
            <label class="intro-lbl">VISIT BC </label><br>
          <a href="#home" class="btn"><i class="fa fa-plus" aria-hidden="true"></i>
                     INFORMATION</a>
        </div>
        <div id="intro-carousel">
            <div id="headerBannerCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="imagenes/main/banner1.jpg" alt="Month's brand banner">
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="imagenes/main/banner2.jpg" alt="Summer collection banner">
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="imagenes/main/banner3.jpg" alt="Summer collection banner">
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
    </section>
    <section id="home" class="home-section">

        <div class="home-container">
            <div class="float-right">

                <img id="map-background" src="imagenes/intro/bajamap.png">
            </div>
            <div class="home-info">
                <h1>BAJA CALIFORNIA</h1>
                <p class="p1">With over 3 million residents, Baja is the fourteenth most populated state in Mexico. Of
                    which, Tijuana, claims more than a third of those residents with 1,600,000 people.</p>

                <p class="p2">The state of Baja California is known for many charming small villages. In contrast, are
                    the large towns of Tijuana, Mexicali, Ensenada, Tecate, and Rosarito. These towns offer many
                    historical and cultural attractions but are also known for their entertainment venues, restaurants,
                    and fun..</p>

                <p class="p3">While there are many populated parts of Baja like Tijuana, there are also remote sections
                    that add to the charm. In contrast, aside from the beach activities along the coast of the state,
                    there are also eco-tourism opportunities. For example, whale watching, environmental tours, and rock
                    climbing adventures name a few. In addition, visitors find luxury hotels as well as affordable
                    travel lodges.</p>
                <br>
                <div class="cities-preview">
                    <div class="row">
                        <div class="col">
                            <a href="ensenada">
                                <div class="preview-container">
                                    <label class="preview-label">ENSENADA</label>
                                    <img class="preview-img" src="imagenes/intro/banners/ensenada.jpg">
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="mexicali">

                                <div class="preview-container">
                                    <label class="preview-label">MEXICALI</label>
                                    <img class="preview-img" src="imagenes/intro/banners/mexicali.jpg">
                                </div>
                            </a>

                        </div>
                        <div class="col">
                            <a href="rosarito">

                                <div class="preview-container">
                                    <label class="preview-label">ROSARITO</label>
                                    <img class="preview-img" src="imagenes/intro/banners/rosarito.jpg">
                                </div>
                            </a>

                        </div>
                        <div class="col">
                            <a href="tecate">

                                <div class="preview-container">
                                    <label class="preview-label">TECATE</label>
                                    <img class="preview-img" src="imagenes/intro/banners/tecate.jpg">
                                </div>
                            </a>

                        </div>
                        <div class="col">
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
        </div>
    </section>
    <section id="aboutus" class="about-section">
        <br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-1 "></div>

                <div class="col-5">
                    <h3>¡HOLA AMIGO! &nbsp;	<i class="fa fa-globe" aria-hidden="true"></i>
                    </h3>
                    <p>
                        We are a company dedicated to tourism in Baja California. With more than 25 years working to
                        make your
                        experience unforgettable, we can offer you a very wide catalog of activities to do on your trip
                        to any
                        of the wonderful destinations that BC offers you. Follow us in all out social media.
                        <br><br>
                        Fell free to contact us for any question we'll be happy to help you :)
                        <br>


                    </p>
                    <br>
                    <div class="address-container">
                        <p>
                            Simón Bolívar # 232-12,<br>
                            Col. Centro, C.P. 44140, Mexicali, Baja California.<br>
                            <label class="phone-lbl"> +52 (686)-537-###</label><br>
                        </p>
                        <br>
                        <p>
                            Av. Chapultepec No. 536 - PH<br>
                            Col. Roma Norte, C.P. 06700<br>
                            Tijuana, Baja California.</label><br>
                            <label class="phone-lbl">+52 (664)-123-###<br>
                        </p><br>
                        <p>
                            Calle 12 x 11 No. 301.<br>
                            Fracc. Residencial Cámara de Comercio Norte, C.P. 97133<br>
                            Rosarito, Baja California.<br>
                            <label class="phone-lbl"> +52 (661)-312-###</label><br>
                        </p></div>
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
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="float-right">

                            <button type="button" class="btn " data-toggle="tooltip" data-placement="left"
                                    title="Tooltip on left">

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

