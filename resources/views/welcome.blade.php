<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.header')
    @section('title','Infini Solutions')

    <style>
        #intro {
            height: 100vh;
            background: url("{{ asset('images/intro.jpg') }}") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        html {
            scroll-behavior: smooth;
            max-width:100vw;
        }
    </style>

    <script >
        // Regular map
        function regular_map() {
            var var_location = new google.maps.LatLng(40.725118, -73.997699);

            var var_mapoptions = {
                center: var_location,
                zoom: 14
            };

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "New York"
            });
        }

        // Initialize maps
        google.maps.event.addDomListener(window, 'load', regular_map);
    </script>

</head>
<body>

    <header>

        @include('layouts.navbar')

        <!--
        ==================================================
        Intro Section Start
        ================================================== -->
        <div id="intro" class="view">
            <div class="mask rgba-white-strong">
                <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-md-10">

                            <!-- Heading -->
                            <h2 class="display-4 font-weight-bold dark-text pt-5 mb-2 animated fadeInUp">Welcome to Infini Solutions</h2>

                            <!-- Divider -->
                            <hr class="hr-dark">

                            <!-- Description -->
                            <h4 class="dark-text my-4 animated fadeInUp">Fathemless Novelty</h4>
                            <button type="button" class="btn btn-outline-dark animated fadeInUp">More</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
        ==================================================
        Intro Section End
        ================================================== -->

    </header>

    <main>

        <!--
        ==================================================
        About Section Start
        ================================================== -->
        <section id="about" class="pt-5 pb-5 d-flex align-items-center" style="height:100vh;">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-8 col-sm-8">
                        <div class="animated fadeInLeft">
                            <h2 class="font-weight-bold dark-text">
                            About Us
                            </h2>
                            <p>
                                <blockquote>
                                    Our mission is to make Colombo the right type of city!
                                </blockquote>
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, adipisci voluptatum repudiandae, natus impedit repellat aut officia illum at assumenda iusto reiciendis placeat. Temporibus, vero.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="animated fadeInRight">
                            <img src="{{ asset('images/logo.jpg') }}" width="100%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        ==================================================
        About Section End
        ================================================== -->


        <!--
        ==================================================
        Our Services Section Start
        ================================================== -->
        <section id="services" class="pt-5 pb-5 text-center info-color" style="height:100vh;">

            <div class="container">
                <!-- Heading -->
                <h2 class="mb-5 mt-5 font-weight-bold white-text">Our Services</h2>

                <div class="row">

                    <div class="col-md-4 mb-5">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay dusty-grass-gradient" style="max-height:30vh; width:100%;">
                                <img 
                                    class="card-img-top img-fluid center-cropped"
                                    style="height:30vh; object-fit: cover; object-position: center;"
                                    src="{{ asset('images/infini-greens-logo-white.png') }}">
                            </div>

                            <!-- Card content -->
                            <div class="card-body"  style="height:30vh;">
                                <!-- Title -->
                                <h4 class="card-title">Infini Greens</h4>
                                <!-- Text -->
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>
                                <!-- Button -->
                                <!-- <a href="#" class="btn btn-primary">Button</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-5">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay tempting-azure-gradient" style="max-height:30vh; width:100%;">
                                <img 
                                    class="card-img-top img-fluid center-cropped"
                                    style="height:30vh; object-fit: cover; object-position: center;"
                                    src="{{ asset('images/infini-greens-logo-white.png') }}">
                            </div>

                            <!-- Card content -->
                            <div class="card-body"  style="height:30vh;">
                                <!-- Title -->
                                <h4 class="card-title">Infini Greens</h4>
                                <!-- Text -->
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>
                                <!-- Button -->
                                <!-- <a href="#" class="btn btn-primary">Button</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-5">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <div class="view overlay winter-neva-gradient" style="max-height:30vh; width:100%;">
                                <img 
                                    class="card-img-top img-fluid center-cropped"
                                    style="height:30vh; object-fit: cover; object-position: center;"
                                    src="{{ asset('images/infini-greens-logo-white.png') }}">
                            </div>

                            <!-- Card content -->
                            <div class="card-body"  style="height:30vh;">
                                <!-- Title -->
                                <h4 class="card-title">Infini Greens</h4>
                                <!-- Text -->
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>
                                <!-- Button -->
                                <!-- <a href="#" class="btn btn-primary">Button</a> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!--
        ==================================================
        Our Services Section End
        ================================================== -->



        <!--
        ==================================================
        Our Team Section Start
        ================================================== -->
        <section id="team" class="pt-5 pb-5 font-weight-bold text-center" style="height:100vh;">

            <!-- Section heading -->
            <h2 class="mb-5 mt-5 font-weight-bold dark-text">Our Amazing Team</h2>
            <!-- Section description -->
            <p class="grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
                eum porro a pariatur veniam.</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
                    <div class="avatar mx-auto">
                        <img 
                            src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" 
                            class="rounded-circle z-depth-1"
                            alt="Avatar"
                            style="max-height:30vh">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Sachitha Hirushan</h5>
                    <p class="text-uppercase blue-text"><strong>Chief Executive Officer</strong></p>
                    <ul class="list-unstyled mb-0">
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f blue-text"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="p-2 fa-lg tw-ic">
                        <i class="fab fa-twitter blue-text"> </i>
                        </a>
                        <!-- Instagram -->
                        <a class="p-2 fa-lg ins-ic">
                        <i class="fab fa-instagram blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
                    <div class="avatar mx-auto">
                        <img src="{{ asset('images/sandali.jpg') }}" 
                            class="rounded-circle z-depth-1" 
                            alt="Avatar"
                            style="max-height:30vh">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Sandali Senarathne</h5>
                    <p class="text-uppercase blue-text"><strong>Co-founder</strong></p>
                    <ul class="list-unstyled mb-0">
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f blue-text"> </i>
                        </a>
                        <!-- Instagram -->
                        <a class="p-2 fa-lg ins-ic">
                        <i class="fab fa-instagram blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
                    <div class="avatar mx-auto">
                        <img 
                            src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" 
                            class="rounded-circle z-depth-1"
                            alt="Avatar"
                            style="max-height:30vh">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Dumindu Kasun</h5>
                    <p class="text-uppercase blue-text"><strong>Software Developer</strong></p>
                    <ul class="list-unstyled mb-0">
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f blue-text"> </i>
                        </a>
                        <!-- Instagram -->
                        <a class="p-2 fa-lg ins-ic">
                        <i class="fab fa-instagram blue-text"> </i>
                        </a>
                        <!-- Dribbble -->
                        <a class="p-2 fa-lg ins-ic">
                        <i class="fab fa-dribbble blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6">
                    <div class="avatar mx-auto">
                        <img 
                            src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" 
                            class="rounded-circle z-depth-1"
                            alt="Avatar"
                            style="max-height:30vh">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3">Chalangani Senanayake</h5>
                    <p class="text-uppercase blue-text"><strong>Software Developer</strong></p>
                    <ul class="list-unstyled mb-0">
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic">
                        <i class="fab fa-facebook-f blue-text"> </i>
                        </a>
                        <!-- Github -->
                        <a class="p-2 fa-lg ins-ic">
                        <i class="fab fa-github blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!--
        ==================================================
        Our Team Section End
        ================================================== -->


        <!--
        ==================================================
        Contact Us Section Start
        ================================================== -->
        <section id="contact" class="pt-5 pb-5 special-color-dark white-text">
            
            <div class="container">
                
                <!-- Heading -->
                <h2 class="mb-5 mt-5 font-weight-bold text-center white-text">Contact us</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="pt-5 col-lg-7 col-md-12">
                        <p><i class="fa fa-map fa-1x mr-2 white-text"></i>No.02,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First Lane,
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Road,
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thisawewa,
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anuradhapura.</p>
                        <p><i class="fa fa-building fa-1x mr-2 white-text"></i> Mon - Fri, 8:00-22:00</p>
                        <p><i class="fa fa-phone fa-1x mr-2 white-text"></i> + 94 71 559 1137
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+ 94 71 927 4111</p>
                        <p><i class="fa fa-envelope fa-1x mr-2 white-text"></i> adminmail@infini.com</p>

                        <!-- Google map
                        <div id="map-container" class="z-depth-1-half map-container mb-5" style="height: 300px"></div> -->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-5 col-md-12">
                        <!-- Form contact -->
                        <form class="grey-text">
                            <div class="md-form form-sm"> <i class="fa fa-user prefix white-text"></i>
                                <input type="text" id="form3" class="form-control form-control-sm">
                                <label class="white-text" for="form3">Your name</label>
                            </div>
                            <div class="md-form form-sm"> <i class="fa fa-envelope prefix white-text"></i>
                                <input type="text" id="form2" class="form-control form-control-sm">
                                <label class="white-text" for="form2">Your email address</label>
                            </div>
                            <div class="md-form form-sm"> <i class="fa fa-tag prefix white-text"></i>
                                <input type="text" id="form32" class="form-control form-control-sm">
                                <label class="white-text" for="form34">Subject</label>
                            </div>
                            <div class="md-form form-sm"> <i class="fa fa-pencil prefix white-text"></i>
                                <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="2"></textarea>
                                <label class="white-text" for="form8">Your message</label>
                            </div>
                            <div class="text-center mt-4">
                                <button class="btn white black-text">Send <i class="fa fa-paper-plane ml-1 black-text"></i></button>
                            </div>
                        </form>
                        <!-- Form contact -->
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>

        </section>
        <!--
        ==================================================
        Contact Us Section End
        ================================================== -->

    </main>

    @include('layouts.footer')

</body>
</html>