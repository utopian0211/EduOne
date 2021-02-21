<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" type="text/css" href="../css/mobile.css">
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
<header>
    <nav class="navbar navbar-expand-sm bg-light navbar-dark fixed-top scrolling-navbar shadow-sm border border-top-0">
        <!--Open_Nav_Button-->
        <a href="#" class="navbar-brand text-decoration-none text-muted" id="nav_btn"><span class="fa fa-bars"></span>&nbsp;Explore</a>
        <!--Company Logo-->
        <a href="#" class="navbar-brand mx-auto text-decoration-none text-muted" id="logo" ><strong>EduOne</strong></a>
        <!--search_bar-->
            <div class="input-group w-50 mx-auto shadow-sm" id="search_bar" style="display:none;">
                
                <div class="input-group-prepend">
                    <span class="input-group-text border-primary"><i class="fa fa-search"></i></span>
                </div>
                <input type="search" id="search" class="form-control p-4 border-primary" placeholder="search here..."/>
                <div class="input-group-append input-group-btn p-0">
                    <button class="btn btn-primary border rounded-sm-right border-primary shadow-none m-0">go</button>
                </div>
            </div>
        <!--search_btn-->
        <a href="#" class="navbar-brand text-decoration-none " id="search_btn" style="position:absolute;right:3%;"><span class="fa fa-search text-dark"></span></a>
        <!--Notification_btn-->
        <a href="#" class="navbar-brand text-decoration-none " id="not_btn" style="position:absolute;right:0%;"><span class="fa fa-bell text-dark"></span></a>
    </nav>

<!--Navigation-->
</header>
    <!--This part opens on click nav_btn-->
    <div class="container-fluid nav_container">
        <span class="close">&times;</span>
        <div class="container border border-top-0 shadow" id="nav_slide">
            <div class="main_menu">
            <!--navigation tab-->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item w-25">
                    <a class="nav-link active text-center" data-toggle="tab" href="#explore">Explore</a>
                </li>
                <li class="nav-item w-25 text-center">
                    <a class="nav-link" data-toggle="tab" href="#board">Board</a>
                </li>
                <li class="nav-item w-25 text-center">
                    <a class="nav-link" data-toggle="tab" href="#collection">Collection</a>
                </li>
                <li class="nav-item w-25 text-center">
                    <a class="nav-link" data-toggle="tab" href="#profile">Profile</a>
                </li>
            </ul>
            <!--Tab Panel-->
            <div class="tab-content">
                <div id="explore" class="container tab-pane active">
                    <!--Trending videos-->
                    <h3>Trending Videos</h3>
                    <!--Trending slide nav-->
                    <h2>Trending slides</h2>
                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row mx-0">
                                    <div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
                                       <img src="https://source.unsplash.com/Pn6iimgM-wo/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-1" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
                                        <img src="https://source.unsplash.com/tXqVe7oO-go/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-2" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="2">
                                        <img src="https://source.unsplash.com/qlYQb7B9vog/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-3" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="3">
                                        <img src="https://source.unsplash.com/QfEfkWk1Uhk/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-4" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="4">
                                        <img src="https://source.unsplash.com/CSIcgaLiFO0/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-5" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="5">
                                        <img src="https://source.unsplash.com/a_xa7RUKzdc/600x400/" class="img-fluid" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row mx-0">
                                    <div id="carousel-selector-6" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="6">
                                        <img src="https://source.unsplash.com/uanoYn1AmPs/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-7" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="7">
                                        <img src="https://source.unsplash.com/_snqARKTgoc/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-8" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="8">
                                        <img src="https://source.unsplash.com/M9F8VR0jEPM/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-9" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="9">
                                        <img src="https://source.unsplash.com/Q1p7bh3SHj8/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div class="col-2 px-1 py-2"></div>
                                    <div class="col-2 px-1 py-2"></div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
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
<div class="not_container"></div>

<!--HomePage Content-->
<main>
    <section class="first">
    <div class="container-fluid content">
        <!--carousel-->
        <!--<div class="container-fluid rounded shadow p-0" style="margin-top:90px;">
            <div class="carousel slide" id="homeCarousel" data-ride="carousel" data-interval="3000" data-keyboard="true">
                <!--carousel indicator--
                <ul class="carousel-indicators">
                    <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#homeCarousel" data-slide-to="1"></li>
                    <li data-target="#homeCarousel" data-slide-to="2"></li>
                </ul>
            
                <!--carousel-inner-content--
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/1.jpg" class="img-fluid rounded" style="position: relative;"/>
                        <div class="carousel-caption">
                            <div class="container justify-content-center">
                            <button class="btn btn-primary btn-sm">click here</button>
                            <h3 class="text-dark">I will do nothing!</h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/2.png" class="img-fluid rounded" style="position: relative;">
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
                        <img src="img/3.jpg" class="img-fluid rounded" style="position: relative;">
                        <div class="carousel-caption">
                            <div class="container justify-content-center">
                                <button class="btn btn-primary btn-sm">click here</button>
                                <h3 class="text-white">Put your content here</h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!--left and right arrow button--
                <a href="#homeCarousel" class="carousel-control-prev text-primary" data-slide="prev"><span class="fa fa-angle-left" style="font-size:30px;"></span></a>
                <a href="#homeCarousel" class="carousel-control-next text-primary" data-slide="next"><span class="fa fa-angle-right" style="font-size:30px;"></span></a>
        
            </div>
        </div>-->
                    <div class="carousel-container position-relative row copy" style="margin-top:90px;">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1500">
                           <div class="carousel-inner">
                                <div class="carousel-item active" data-slide-number="0">
                                    <img src="https://source.unsplash.com/Pn6iimgM-wo/1600x500/" class="d-block w-100 position-relative"  data-type="video" data-toggle="lightbox" data-gallery="example-gallery">
                                    <div class="carousel-caption bg-dark w-25" style="position:absolute;left:0;bottom:0;height:100%;">
                                        <span class="display-3">Put Your Content Here</span>
                                        <br>
                                        <button class="btn btn-primary">click me</button>
                                    </div>
                                </div>
                                <div class="carousel-item" data-slide-number="1">
                                    <img src="https://source.unsplash.com/tXqVe7oO-go/1600x500/" class="d-block w-100"  data-type="video" data-toggle="lightbox" data-gallery="example-gallery">
                                    <div class="carousel-caption">
                                        <span class="display-4 ml-0">Put Your Content Here</span>
                                    </div>
                                </div>
                                <div class="carousel-item" data-slide-number="2">
                                    <img src="https://source.unsplash.com/qlYQb7B9vog/1600x500/" class="d-block w-100"  data-type="video" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="3">
                                    <img src="https://source.unsplash.com/QfEfkWk1Uhk/1600x500/" class="d-block w-100"  data-type="video" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="4">
                                    <img src="https://source.unsplash.com/CSIcgaLiFO0/1600x500/" class="d-block w-100"  data-type="video" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="5">
                                    <img src="https://source.unsplash.com/a_xa7RUKzdc/1600x500/" class="d-block w-100"  data-type="video" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="6">
                                    <img src="https://source.unsplash.com/uanoYn1AmPs/1600x500/" class="d-block w-100" data-type="video" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="7">
                                    <img src="https://source.unsplash.com/_snqARKTgoc/1600x500/" class="d-block w-100" data-type="video" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="8">
                                    <img src="https://source.unsplash.com/M9F8VR0jEPM/1600x500/" class="d-block w-100" data-type="video" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item" data-slide-number="9">
                                    <img src="https://source.unsplash.com/Q1p7bh3SHj8/1600x500/" class="d-block w-100" data-type="video" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                            </div>
                        </div>
                        <div id="home-carousel-thumbs" class="carousel slide" data-ride="carousel" data-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row mx-0">
                                        <div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
                                       <img src="https://source.unsplash.com/Pn6iimgM-wo/600x400/" class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-1" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
                                        <img src="https://source.unsplash.com/tXqVe7oO-go/600x400/" class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-2" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="2">
                                            <img src="https://source.unsplash.com/qlYQb7B9vog/600x400/" class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-3" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="3">
                                            <img src="https://source.unsplash.com/QfEfkWk1Uhk/1600x900/" class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-4" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="4">
                                            <img src="https://source.unsplash.com/CSIcgaLiFO0/600x400/" class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-5" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="5">
                                            <img src="https://source.unsplash.com/a_xa7RUKzdc/600x400/" class="img-fluid" alt="...">
                                        </div>
                                    </div>
                                </div>
                            <div class="carousel-item">
                                <div class="row mx-0">
                                    <div id="carousel-selector-6" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="6">
                                        <img src="https://source.unsplash.com/uanoYn1AmPs/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-7" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="7">
                                        <img src="https://source.unsplash.com/_snqARKTgoc/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-8" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="8">
                                        <img src="https://source.unsplash.com/M9F8VR0jEPM/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-9" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="9">
                                        <img src="https://source.unsplash.com/Q1p7bh3SHj8/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div class="col-2 px-1 py-2"></div>
                                    <div class="col-2 px-1 py-2"></div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#home-carousel-thumbs" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#home-carousel-thumbs" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
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
<footer class="container-fluid" style="bottom:0;">
    <!--grid-container-->
    <div class="row w-100 copy">
        
        <div class="col-4 text-center">
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
                        <div class="col-auto">
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
        <div class="col-4 text-center">
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
        <div class="col-4 text-center">
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
