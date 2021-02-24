<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/mobile.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    
    </script>
    <style>

    </style>
    <title>EduOne</title>
</head>
<body class="container-fluid mx-auto">
<header class="">
    <nav class="navbar navbar-expand-sm fixed-top scrolling-navbar shadow-none bg-white">
        <!--Open_Nav_Button-->
        <a href="#" class="navbar-brand text-decoration-none text-muted" id="nav_btn"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i>&nbsp;<span class="explore">Explore</span></a>
        <!--Company Logo-->
        <a href="#" class="navbar-brand mx-auto text-decoration-none text-muted" id="logo" ><strong>EduOne</strong></a>
        <!--search_bar-->
            <div class="input-group w-50 mx-auto" id="search_bar" style="display:none;">
                <input type="search" id="search" class="w-75" placeholder="search here..."/>
                <div class="input-group-append">
                    <span class="bg-none border-none" style="border-bottom:1px solid #111;cursor:pointer;"><i class="fa fa-search"></i></span>
                </div>
            </div>
        <!--search_btn-->
        <a href="#" class="navbar-brand text-decoration-none nav_button" id="search_btn" style="position:absolute;right:25px;"><span class="fa fa-search text-dark"></span></a>
        <!--Notification_btn-->
        <a href="#" class="navbar-brand text-decoration-none " id="notification_btn" style="position:absolute;right:0%;"><span class="fa fa-bell text-dark"></span></a>
    </nav>

<!--Navigation-->
</header>
    <!--This part opens on click nav_btn-->
    <div class="container-fluid nav_container">
        
        <div class="container border border-top-0 shadow" id="nav_slide">
        <span class="close float-left mt-5 ml-5" id="close_nav_slide"><i class="fa fa-long-arrow-alt-left"></i></span>
        <span class="close mt-3" id="close_nav_slide_mobile">&times;</span>
            <div class="main_menu mx-auto mt-5">
            <!--navigation tab-->
            <!--use flex-column for vertical-pills-->
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item w-25">
                    <a class="nav-link active text-center text-monospace" data-toggle="pill" href="#explore">Explore</a>
                </li>
                <li class="nav-item w-25 text-center text-monospace">
                    <a class="nav-link" data-toggle="pill" href="#board">Board</a>
                </li>
                <li class="nav-item w-25 text-center text-monospace">
                    <a class="nav-link" data-toggle="pill" href="#collection">Collection</a>
                </li>
                <li class="nav-item w-25 text-center text-monospace">
                    <a class="nav-link" data-toggle="pill" href="#profile">Profile</a>
                </li>
            </ul>
            <!--Tab Panel-->
            <div class="tab-content">
                <div id="explore" class="container tab-pane active">
                    <div class="panel1">
                        <div class="text-center pt-5 justify-content-center">
                            <p class="mb-5">
                                <a href="#" class="btn btn-outline-dark">Explore This</a>
                            </p>
                            <div>
                                <nav class="row mb-5">
                                    <div class="col-6 text-center">
                                        <a href="#" class="MenuItem">Content 1</a>
                                        <a href="#" class="MenuItem">Content 2</a>
                                        <a href="#" class="MenuItem">Content 3</a>
                                        <a href="#" class="MenuItem">Content 4</a>
                                    </div>
                                    <div class="col-6 text-center">
                                        <a href="#" class="MenuItem">Content 5</a>
                                        <a href="#" class="MenuItem">Content 6</a>
                                        <a href="#" class="MenuItem">Content 7</a>
                                        <a href="#" class="MenuItem">Content 8</a>
                                    </div>
                                </nav>
                            </div>
                            <!--collection-->
                            <h2 id="heading" class="heading">Collection</h2>
                            <ul class="collection_ul row display-flex" aria-labelledby="heading" role="presentation">
                                <li class="mb-5 col-4">
                                    <a href="" aria-labelledby="content1">
                                        <img src="/img/1.jpg" alt="" class="img-fluid">
                                        <span id="content1" class="mt-3">New  Styles</span>
                                    </a>
                                </li>
                                <li class="mb-5 col-4">
                                    <a href="" aria-labelledby="content2">
                                        <img src="/img/2.png" alt="" class="img-fluid">
                                        <span id="content2" class="mt-3">New  Styles</span>
                                    </a>
                                </li>
                                <li class="mb-5 col-4">
                                    <a href="" aria-labelledby="content3">
                                        <img src="/img/3.jpg" alt="" class="img-fluid">
                                        <span id="content3" class="mt-3">New  Styles</span>
                                    </a>
                                </li>
                                <li class="mb-5 col-4">
                                    <a href="" aria-labelledby="content4">
                                        <img src="img/1.jpg" alt="" class="img-fluid">
                                        <span id="content4" class="mt-3">New  Styles</span>
                                    </a>
                                </li>
                                <li class=" col-4">
                                    <a href="" aria-labelledby="content5">
                                        <img src="/img/2.png" alt="" class="img-fluid">
                                        <span id="content5" class="mt-3">New  Styles</span>
                                    </a>
                                </li>
                                <li class=" col-4">
                                    <a href="" aria-labelledby="content6">
                                        <img src="/img/3.jpg" alt="" class="img-fluid">
                                        <span id="content6" class="mt-3">New  Styles</span>
                                    </a>
                                </li>
                            </ul>
                            <!--features-->
                            <div class="e_features mt-0">
                                <div>
                                    <h2 class="heading">FEATURES</h2>
                                    <div class="grid row" role="list" aria-label="features">
                                        <div class="col-6 mb-5">
                                            <a href="">
                                                <img src="/img/3.jpg" alt="" class="img-fluid">
                                                <span class="mt-3">Features 1</span>
                                            </a>
                                        </div>
                                        <div class="col-6 mb-5">
                                            <a href="">
                                                <img src="/img/1.jpg" alt="" class="img-fluid">
                                                <span class="mt-3">Features 2</span>
                                            </a>
                                        </div>
                                        <div class="col-6 mb-5">
                                            <a href="">
                                                <img src="/img/3.jpg" alt="" class="img-fluid">
                                                <span class="mt-3">Features 3</span>
                                            </a>
                                        </div>
                                        <div class="col-6 mb-5">
                                            <a href="">
                                                <img src="/img/1.jpg" alt="" class="img-fluid">
                                                <span class="mt-3">Features 4</span>
                                            </a>
                                        </div>
                                    </div>
                                    <p>
                                        <a href="" class="btn btn-outline-dark shadow-none w-50 py-n3">
                                            View All
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <!--explore bottom-->
                            <div>
                                <div class="text-center">
                                    <nav class="bottom_nav navbar shadow-none justify-content-center">
                                        <a href="" class="MenuItem">Sign In</a>
                                        <a href="" class="MenuItem ml-5">Gift Cards</a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="board" class="container tab-pane fade">
                    <h2>Board</h2>
                </div>
                <div id="collection" class="container tab-pane fade">
                    <h2>Collection</h2>
                </div>
                <div id="profile" class="container tab-pane fade">
                    <h2>Profile</h2>
                </div>
            </div>
            </div>
        </div>
    </div>

<!--search page-->
<div class="container-fluid">
    <div class="container">
        <ul class="nav"></ul>
    </div>
</div>
<!--Notification-->
<div class="notification_container Toggle_body" id="notif_container" style="position:fixed;right:1%;z-index:5;display:none;margin-top:56px">
    
</div>

<!--HomePage Content-->
<main class="mt-3 main">
    <section class="first">
    <div class="container-fluid content">
        <!--carousel-->
        <div class="container-fluid rounded shadow p-0 m-0">
            <div class="carousel slide carousel-fade" id="homeCarousel" data-ride="carousel" data-interval="3000" data-keyboard="true">
                <!--carousel indicator-->
                <ul class="carousel-indicators">
                    <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#homeCarousel" data-slide-to="1"></li>
                    <li data-target="#homeCarousel" data-slide-to="2"></li>
                </ul>
            
                <!--carousel-inner-content-->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/1.jpg" class="img-fluid rounded" style="position: relative;"/>
                        <div class="carousel-caption">
                            <div class="container justify-content-center">
                            <button class="btn btn-primary btn-sm">click here</button>
                            <h3 class="text-dark">put your content here</h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/2.png" class="img-fluid rounded" style="position: relative;">
                        <div class="carousel-caption">
                            <div class="container justify-content-center text-dark w-50 float-left">
                                <h3 class="text-lg">Get Benefits of Offers</h3>
                                <h4>Only for limited Time</h4>
                                <h3 class="text-lg">Get Benefits of Offers</h3>
                                <h4>Only for limited Time</h4>
                                <h3 class="text-lg">Get Benefits of Offers</h3>
                                <h4>Only for limited Time</h4>
                                <h3 class="text-lg">Get Benefits of Offers</h3>
                                
                                <button class="btn btn-light btn-sm">&plus;Create Offers</button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/img/3.jpg" class="img-fluid rounded" style="position: relative;">
                        <div class="carousel-caption">
                            <div class="container justify-content-center">
                                <button class="btn btn-primary btn-sm">click here</button>
                                <h3 class="text-white">Put your content here</h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!--left and right arrow button-->
                <a href="#homeCarousel" class="carousel-control-prev text-primary" data-slide="prev"><span class="fa fa-angle-left" style="font-size:30px;"></span></a>
                <a href="#homeCarousel" class="carousel-control-next text-primary" data-slide="next"><span class="fa fa-angle-right" style="font-size:30px;"></span></a>
        
            </div>
        </div>
    </div>
    </section><!--section 1 end-->
    <!--content-tray-->
    <!--section 2 start-->
    <section class="second">
        <div class="content">
            <div class="copy"></div>
        </div>
    </section><!--section 2 end-->
    
    <!--section 3 start-->
    <section class="third">
        <div class="content">
            <div class="copy"></div>
        </div>
    </section><!--section 3 end-->

    <!--section 4 start-->
    <section class="fourth">
        <div class="container-fluid content">
<!--footer-->
<footer class="container-fluid copy" style="bottom:0;">
    <!--grid-container-->
    <div class="row w-100">
        
        <div class="col-auto col-4 text-center">
            <!--footer-section-1-->
            <!--About us-->
            <div class="mb-4">
                <strong>About US</strong>
                <pre>content</pre>
            </div>
            <!--footer-section-2-->
            <!--contact US-->
            <div class="mb-4">
                <strong class="">Contact US</strong><br>
                <!--facebook-->
                <a href="#" class="btn btn-outline-light btn-floating m-1" role="button">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <!--Twitter-->
                <a href="#" class="btn btn-outline-light btn-floating m-1" role="button">
                    <i class="fab fa-twitter"></i>
                </a>
                <!--Google-->
                <a href="#" class="btn btn-outline-light btn-floating m-1" role="button">
                    <i class="fab fa-google"></i>
                </a>
                <!--Instagram-->
                <a href="#" class="btn btn-outline-light btn-floating m-1" role="button">
                    <i class="fab fa-instagram"></i>
                </a>
                <!--LinkedIn-->
                <a href="#" class="btn btn-outline-light btn-floating m-1" role="button">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <!--Github-->
                <a href="#" class="btn btn-outline-light btn-floating m-1" role="button">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!--footer-section-3-->
            <!--subscribe-->
            <div>
                <form action="">
                    <div class="row">
                        <div class="col-auto text-center">
                            <p class="pt-2">
                                <strong class="">Subscribe our newslater</strong>
                            </p>

                            <div class="input-group m-0">
                                <input type="email" id="form5example2" class="form-control border-light p-4"/>
                                    <div class="input-group-append p-0">
                                        <!--submit button-->
                                        <button class="btn btn-light rounded-sm m-0">Subscribe</button>
                                    </div>
                            </div>
                        </div>
                        
                    </div> 
                </form>
            </div>
        </div>

        <!--column-2>-->
        <div class="col-auto col-4 text-center">
            <!--footer-section-1-->
            <div>
                <strong>EduOne</strong>
            </div>
            <!--footer-section-2-->
            <div>
                <strong>Feedback</strong>
            </div>
        </div>

        <!--footer column 3-->
        <div class="col-auto col-4 text-center">
            <!--footer-section-1-->
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1s8nQgBOm-A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>>
            </div>
            <!--footer-section-2-->
            <div>
                <strong>Introduction</strong>
            </div>
        </div>
    </div><br>
    <!--copyright claim-->
    <div class="text-center p-3" style="background-color:rgba(0, 0, 0,0.2)">
        <div class="text-light">
            © 2021 Copyright:
            <a href="#">EduOne.com</a>
        </div>
    </div>
</footer>
        </div>
</section><!--section 4 end-->
</main>
    <script type="text/javascript" src="js/app.js"></script>
</body>
  
</html>
