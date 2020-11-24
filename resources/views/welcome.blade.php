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
    </style>

</head>
<body>

    <header>
        @include('layouts.navbar')
    </header>

    <main>

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


        <!--
        ==================================================
        About Section Start
        ================================================== -->
        <div id="about" class="pt-5 pb-5 d-flex align-items-center" style="height:100vh;">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-8 col-sm-8">
                        <div class="animated fadeInLeft">
                            <h2>
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
                            <img src="images/logo.jpg" width="100%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
        ==================================================
        About Section End
        ================================================== -->

    </main>

    @include('layouts.footer')

</body>
</html>