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

        #services {

        }
    </style>

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
                            <h2 class="font-weight-bold">
                            ABOUT US
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
        <section id="services" class=" pt-5 pb-5 text-center info-color" style="height:100vh;">

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
                                <h4 class="card-title">Card title</h4>
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
                                <h4 class="card-title">Card title</h4>
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
                                <h4 class="card-title">Card title</h4>
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

    </main>

    @include('layouts.footer')

</body>
</html>