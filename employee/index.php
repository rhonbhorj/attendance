<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Qr- Attendance</title>


    <style>
        @media only screen and (max-width: 768px) {
            #navbar-logo {
                display: none !important;
            }

            #navbar-logo-mob {
                display: block !important;
            }
        }

        @media only screen and (min-width: 769px) {
            #navbar-logo-mob {
                display: none !important;
            }
        }
    </style>

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" id="navbar-logo" style="display: none;" href="#page-top"><img src="../assets/logoinv.png" alt="" style="width:2em; margin: 0% 5%;">Attendance</a>
            <a class="navbar-brand js-scroll-trigger" id="navbar-logo-mob" href="#page-top"><img src="../assets/logoinv.png" alt="" style="width:2em; margin: 0% 5%;">Attendance</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                &#9776;
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#start">Start</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#status">Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <img style="height: 20%;width: 20% margin-bottom 40px;" src="../assets/logoinv.png">
                        <div class="brand-heading">




                            <div class="col-md-6">
                                <h1 style="font-size:1em; position: relative; top: 50%; transform: translateY(-50%);">Attendance</h1>
                            </div>
                        </div>

                        <p class="intro-text" style="font-size: 2em;">Let's Start</p>
                        <a href="#start" class="btn btn-circle js-scroll-trigger">&#x21e3;</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Contact Section -->
    <section id="start" class="content-section text-center">
        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>login</h2>
                    <div class="justify-content-sm-center">
                        <div class="col-sm-8">
                            <a href="#" class="btn btn-default btn-lg" style="padding: 1em 3em; margin-top:1em;">
                                <span class="network-name">Teacher</span>
                            </a>
                        </div>
                      
                    </div>
                </div>
            </div>



        </div> -->


        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="brand-heading">
                        <h2>login</h2>
                    </div>
                    <a href="#" class="btn btn-default btn-lg" style="padding: 1em 3em; margin-top:1em;">
                        <span class="network-name">Teacher</span>
                    </a>
                </div>
            </div>
        </div>


    </section>
    <section>


    </section>
    <!-- Status Section -->
    <!-- <section id="status" class="download-section content-section text-center">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h2>Attendance</h2>
                <p>version: 1.0 </p>
                <a class="btn btn-default btn-lg" style="background-color: #42dca3; animation: fadeInCss 1s infinite alternate ;">Testing</a>
            </div>
        </div>
    </section> -->



    <!-- About Section -->
    <section id="about" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- <h2>About QrAtt</h2> -->
                    <p></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <!--  <p>QrAtt 2019</p> -->
        </div>
    </footer>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic|Cabin:700" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../css/grayscale.min.css" rel="stylesheet">

    <!-- Plugin JavaScript -->
    <script src="../js/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/grayscale.min.js"></script>

    <script>
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 300) {
                $("#navbar-logo").fadeIn("slow");
                $("#mySelector").animate({
                    height: 0,
                    opacity: 0
                }, 'slow');
            } else {
                $("#navbar-logo").fadeOut("slow");
            }
        });
    </script>

</body>

</html>