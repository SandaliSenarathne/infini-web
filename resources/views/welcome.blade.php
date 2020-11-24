<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.header')
    @section('title','Infini Solutions')

    <style>
        #intro {
            height: 100vh;
            background: url("images/intro.jpg") no-repeat center center fixed;
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
            <div class="mask rgba-black-strong">
                <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-md-10">

                            <!-- Heading -->
                            <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Travel</h2>

                            <!-- Divider -->
                            <hr class="hr-light">

                            <!-- Description -->
                            <h4 class="white-text my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Deleniti
                                consequuntur.</h4>
                            <button type="button" class="btn btn-outline-white">Read more<i class="fa fa-book ml-2"></i></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
        ==================================================
        Intro Section End
        ================================================== -->

    </main>

    @include('layouts.footer')

</body>
</html>