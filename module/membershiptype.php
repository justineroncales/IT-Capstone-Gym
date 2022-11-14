
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gym Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
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
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="dashboard.php"><h3>GmSystem</h3></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li >
                                <a href="dashboard.php"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="databasebackup.php"><i class="fa fa-database"></i><span>Database Backup</span></a>
                            </li>
                            <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-folder-open"></i><span>Management Form</span></a>
                                <ul class="collapse">
                                    <li ><a href="workplan.php">Workout Plan </a></li>
                                    <li><a href="workout.php">Workout</a></li>
                                    <li><a href="promotionalmaterial.php">Promotional Material</a></li>
                                </ul>
                            </li>
                            <li  class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-keyboard-o"></i><span>Encoding Form</span></a>
                                <ul class="collapse">
                                    <li><a href="user.php">User</a></li>
                                    <li><a href="membership.php">Membership</a></li>
                                    <li  class="active"><a href="membershiptype.php">Membership Type </a></li>
                                    <li><a href="gyminstructor.php">Gym Instructor</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="payment.php"><i class="fa fa-money"></i><span>Payment</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content" style="background-image: url(img/4.jpg); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Membership Type</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">User <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- Primary table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body"><button type="button" class="btn btn-success btn-xs mb-3" data-toggle="modal" data-target="#add" style="margin-left: 95%;"><i class="fa fa-plus"></i>Add</button>
                                <h4 class="header-title">Data Table</h4>
                                <div class="data-tables datatable-primary">
                                    <table id="dataTable2" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Name</th>
                                                <th>Membership Period</th>
                                                <th>Membership Amount</th>
                                                <th>Signup Fee</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Student Membership</td>
                                                <td>30 Days</td>
                                                <td>50$</td>
                                                <td>200</td>
                                                <td><button type="button" class="btn btn-info btn-xs mb-3" data-toggle="modal" data-target="#edit"><i class="fa fa-edit" ></i> Edit</button></td>
                                            </tr>
                                            <tr>
                                                <td>Family Membership</td>
                                                <td>20 Days</td>
                                                <td>10$</td>
                                                <td>200</td>
                                                <td><button type="button" class="btn btn-info btn-xs mb-3" data-toggle="modal" data-target="#edit"><i class="fa fa-edit" ></i> Edit</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="modal fade" id="add" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <form action="">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add Membership Type</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="card-body">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Name</span>
                                                </div>
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Enter Type Name">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Period</span>
                                                </div>
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Enter Membership Period">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Amount</span>
                                                </div>
                                                <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Enter Membership Amount">
                                            </div>
                                              <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Fee</span>
                                                </div>
                                                <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Enter Signup Fee">
                                            </div>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-right: 65%"><i class="fa fa-times"></i> Close</button>
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>

                                    <div class="modal fade" id="edit" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                         <form action="">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Update Membership Type</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="card-body">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Name</span>
                                                </div>
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Enter Type Name">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Period</span>
                                                </div>
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Enter Membership Period">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Amount</span>
                                                </div>
                                                <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Enter Membership Amount">
                                            </div>
                                              <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Fee</span>
                                                </div>
                                                <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Enter Signup Fee">
                                            </div>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-right: 65%"><i class="fa fa-times"></i> Close</button>
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Primary table end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
