<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu One</title>

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--font-awsome-icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-dark fixed-top shadow-sm border border-top-0">
        <!--Open_Nav_Button-->
        <a href="#" class="navbar-brand text-decoration-none text-muted" id="nav_btn"><span class="fa fa-bars"></span>&nbsp;Explore</a>
        <!--Company Logo-->
        <a href="#" class="navbar-brand text-decoration-none mx-auto text-dark">EduOne</a>
        <!--search_bar-->
        <div class="form-group m-0" style="display: none;" id="search_bar">
            <input type="search" placeholder="search here..." class="form-control border-top-0">
        </div>
        <!--search_btn-->
        <a href="#" class="navbar-brand text-decoration-none float-right" id="search_btn"><span class="fa fa-search text-dark"></span></a>
        <!--Notification_btn-->
        <a href="#" class="navbar-brand text-decoration-none float-right"><span class="fa fa-bell text-dark"></span></a>
    </nav>

    <!--This part opens on click nav_btn-->
    <div class="container-fluid nav_container">
        <span class="close">&times;</span>
        <div class="container w-75 border border-top-0 shadow" id="nav_slide">
            <div class="main_menu">
            <!--navigation tab-->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab2">Tab1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab2">Tab2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab3">Tab3</a>
                </li>
            </ul>
            <!--Tab Panel-->
            <div class="tab-content">
                <div id="home" class="container tab-pane active">
                    <h2>Home</h2>
                    <h5 class="text-monospace">
                        Welcome To EduOne
                        One platform for every educational service provider and learners
                    </h5>
                </div>
                <div id="tab1" class="container tab-pane fade">
                    <h2>Tab 1</h2>
                </div>
                <div id="tab2" class="container tab-pane fade">
                    <h2>Tab 2</h2>
                </div>
                <div id="tab3" class="container tab-pane fade">
                    <h2>Tab 3</h2>
                </div>
            </div>
            </div>
        </div>
    </div>


    <script src="js/app.js"></script>
</body>
</html>