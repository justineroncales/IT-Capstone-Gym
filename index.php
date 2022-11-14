<?php
session_start();


?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign in || Fit Stop Gym Management </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./assets/images/img/muscle.ico" type="image/ico">
    <link rel="shortcut icon" type="image/png" href="./assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/metisMenu.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="./assets/css/typography.css">
    <link rel="stylesheet" href="./assets/css/default-css.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="./assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    

    <!--prevent Back start here-->
    <script type="text/javascript">
    function preventBack() {
        window.history.forward();
    }
    setTimeout("preventBack()", 0); {}
    window.onunload = function() {
        null;
    }
    </script>
    <!--Prevent Back ends here-->

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area"
        style="background-image: url(./assets/images/img/4.jpg); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;  position: fixed; width: 100%;">
        <div class="container">
            <div class="login-box ptb--100" style="margin: -70px auto;">
                <form id="login">
                    <div class="login-form-head">
                        <img src="./assets/images/author/Fitstop.jpg" alt=" " style="width: 90%;  margin-top: 40px; ">
                        <h4 style="color: black">Management System </h4>
                    </div>

                    <?php
                    if(isset($_GET['err'])){ // kaning $_GET na variable .. bali kita ka aning URL ganina ? kadtong ing ani, localhost/Web-Project/index.php?err="Invalid Username or Password" ?
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <?=$_GET["err"]?>
                    </div>
                    <?php }
                    ?>
                    
                    <div class="alert alert-danger" role="alert" id="alert" style="display: none;"> </div>

                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" id="username" name="username">
                            <i class="fa fa-user"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="password" name="password" >
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>

                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember
                                        Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="btn" type="submit">Login <i class="ti-arrow-right"></i></button>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="./assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/metisMenu.min.js"></script>
    <script src="./assets/js/jquery.slimscroll.min.js"></script>
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/scripts.js"></script>
    <script src="./js/login.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
<?php
?>