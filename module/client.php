<?php
session_start();


?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gym Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <link rel="icon" href="../assets/images/img/muscle.ico" type="image/ico">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- style css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/hide-show.css">
    <link rel="stylesheet" href="../assets/css/deleteModal.css">
    <link rel="stylesheet" href="../assets/css/note.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--Delete Modal CSS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</head>

<body>
    <!--PAWALA SA ARROW SA INPUT NUMBER START NGARI-->
    <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
    </style>
    <!--PAWALA SA ARROW SA INPUT NUMBER END NGARI-->
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
        <!-- Sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="../Dashboard/dashboard.php">
                        <h3>
                            <strong> Fit Stop Gym </strong>
                        </h3>
                    </a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="">
                                <a href="../Dashboard/dashboard.php"><i
                                        class="ti-dashboard"></i><span>Dashboard</span></a>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true" data-toggle="collapse"><i
                                        class="fa fa-folder-open"></i><span>File Maintenance</span></a>
                                <ul class="collapse show" data-parent="#accordionSidebar">
                                    <li><a href="../module/workoutclass.php">Program</a></li>
                                    <li class="active"><a href="../module/client.php">Customers</a></li>
                                    <li><a href="../module/event.php">Event</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" aria-expanded="true"><i class="fa fa-wrench"
                                        data-parent="#accordionSidebar"></i><span>Utilities</span></a>
                                <ul class="collapse show">
                                    <li><a href="../module/instructor.php">Instructor </a></li>
                                    <li><a href="../module/promo.php">Promos</a></li>
                                    <li><a href="../module/discount.php">Discount</a></li>
                                    <li><a href="../module/equipment.php">Equipment</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="../module/databasebackup.php"><i class="fa fa-database"></i><span>Database
                                        Backup</span></a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="fa fa-keyboard-o"></i><span>Encoding Form</span></a>
                                <ul class="collapse">
                                    <li><a href="user.php">User</a></li>
                                    <li><a href="membership.php">Membership</a></li>
                                    <li><a href="membershiptype.php">Membership Type </a></li>
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
        <div class="main-content"
            style="background-image: url(../assets/images/img/4.jpg); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
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
                        <div class="breadcrumbs-area clearfix" style="margin-top: 10px;">
                            <h4 class="page-title pull-left">Customer List</h4>
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
            <!--Navbar area start here-->
            <?php
        include '../includes/theme/navbar.php';
        ?>
            <!--Navbar area ends here-->

            <!-- Logout Modal start here-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" id="logout">Logout</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Logout Modal end here-->

            <!-- page title area end -->
            <div class="main-content-inner"
                style="background-image: url(../assets/images/img/4.jpg); height: 200%; background-position: fixed; background-repeat: no-repeat; background-size: cover;">
                <div class="row">
                    <!-- Primary table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body"><button type="button" class="btn btn-success btn-xs mb-3"
                                    data-toggle="modal"  data-target="#add" style="margin-left: 90%;"><i
                                        class="fa fa-plus"></i> New</button>
                                <h4 class="header-title" style="margin-top: -30px;">Customer List</h4>
                                <?php
                                    $pdo = New PDO ('mysql:host=localhost;port=3306;dbname=fitstop_db', 'root', '' );
                                    $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                        $statement = $pdo->prepare('SELECT * FROM tbl_client');
                                        $statement->execute();
                                        $clientclasses = $statement->fetchAll(PDO::FETCH_ASSOC);
                                    ?>
                                <div class="data-tables datatable-" style=" white-space: nowrap;">
                                <?php 
                                function decrypt_message($key, $message){
                                    $ciphering = "AES-128-CTR";

                                    $iv_length = openssl_cipher_iv_length($ciphering);
                                    $option = 0;

                                    $decryption_iv = '1234567891011121';

                                    $decryption_key =$key;
                                    return openssl_decrypt($message, $ciphering, $decryption_key, $option, $decryption_iv);
                                }
                                ?>
                                    <?php
                                if(@$_GET['success'] == true)
                                {
                            ?>
                                    <div id="customer"
                                        class="mdi mdi-close-circle-outline mr-1 alert alert-success text-center my-3"
                                        class="alert alert-danger alert-dismissible" role="alert">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong> <?php echo decrypt_message("success", preg_replace('/\s+/', '+', $_GET['success'])) ?></strong>
                                    </div>
                                    <?php
                                }
                            ?>
                                    <?php
                                if(@$_GET['error'] == true)
                                {
                            ?>
                                    <div id="customer"
                                        class="mdi mdi-close-circle-outline mr-1 alert alert-danger text-center my-3"
                                        class="alert alert-danger alert-dismissible" role="alert">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong> <?php echo decrypt_message("error", preg_replace('/\s+/', '+', $_GET['error'])) ?></strong>
                                    </div>
                                    <?php
                                }
                            ?>

                                    <table id="example" style="width:100%">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Complete Name</th>
                                                <th>Email</th>
                                                <th>Birthdate</th>
                                                <th>Contact</th>
                                                <th>Cust.Type</th>
                                                <th>Class</th>
                                                <th>Status</th>
                                                <th>Qr Code</th>
                                                <th><strong>Action:</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($clientclasses as $i => $clientclass): ?>
                                            <tr>
                                                <td>
                                                    <div class="readmore less" id="desc">
                                                        <?php echo $clientclass['client_name'].' '. $clientclass['client_middlename'].' '. $clientclass['client_lastname'];?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="readmore less" id="desc">
                                                        <?php echo $clientclass['client_email'];?>
                                                    </div>
                                                </td>

                                                <td><?php echo $clientclass['client_birthdate'];?></td>
                                                <td><?php echo $clientclass['client_contactNumber'];?></td>
                                                <td><?php echo $clientclass['client_type'];?></td>
                                                <td><?php echo $clientclass['client_class'];?></td>
                                                <td><?php echo $clientclass['client_status'];?></td>
                                                <td><img src="<?php echo $clientclass['client_code'];?>"></td>

                                                <td>
                                                    <!--View button start here-->
                                                    <button type="button" class="btn btn-success btn-xs mb-3"
                                                        data-toggle="modal" data-toggle="tooltip" data-placement="top"
                                                        title="View"
                                                        data-target="#view-<?php echo $clientclass['client_id'];?>"><i
                                                            class="fa fa-eye"> </i> </button>
                                                    <!--View button ends here-->

                                                    <!-- View MODAL STARTS HERE -->
                                                    <div class="modal fade" data-backdrop="static" data-keyboard="false"
                                                        aria-labelledby="staticBackdropLabel"
                                                        id="view-<?php echo $clientclass['client_id'];?>"
                                                        aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog modal-lg" style="max-width: 1000px;">
                                                            <form novalidate action="" method="post">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="staticBackdropLabel"> Viewing
                                                                            <?php echo $clientclass['client_name'] ?>'s
                                                                            Data
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"><span>×</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="card-body">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span
                                                                                        class="input-group-text">Customer
                                                                                        ID</span>
                                                                                </div>
                                                                                <input type="text" class="form-control"
                                                                                    aria-describedby="basic-addon3"
                                                                                    id="clientclass" name=""
                                                                                    value="<?php echo $clientclass['client_id'] ?>"
                                                                                    disabled>

                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text">
                                                                                                First Name</span>
                                                                                        </div>
                                                                                        <input type="text" 2
                                                                                            placeholder="First Name"
                                                                                            class="form-control"
                                                                                            name="client_name"
                                                                                            value="<?php echo $clientclass['client_name'] ?>"
                                                                                            disabled
                                                                                            aria-describedby="basic-addon3">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text">
                                                                                                Middle Name</span>
                                                                                        </div>
                                                                                        <input type="text" 2
                                                                                            placeholder="N/A"
                                                                                            class="form-control"
                                                                                            name="client_middlename"
                                                                                            value="<?php echo $clientclass['client_middlename'] ?>"
                                                                                            disabled
                                                                                            aria-describedby="basic-addon3">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text">
                                                                                                Last Name</span>
                                                                                        </div>
                                                                                        <input type="text" 2
                                                                                            placeholder="N/A"
                                                                                            class="form-control"
                                                                                            name="client_lastname"
                                                                                            value="<?php echo $clientclass['client_lastname'] ?>"
                                                                                            disabled
                                                                                            aria-describedby="basic-addon3">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text">Contact
                                                                                                Number</span>
                                                                                        </div>
                                                                                        <input type="number" 2
                                                                                            placeholder="Contact Number"
                                                                                            class="form-control"
                                                                                            name="contact_number"
                                                                                            value="<?php echo $clientclass['client_contactNumber'] ?>"
                                                                                            disabled
                                                                                            aria-describedby="basic-addon3">

                                                                                        <div class="valid-feedback">
                                                                                        </div>
                                                                                        <div class="invalid-feedback">
                                                                                            This field is required.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text">
                                                                                                Birthdate</span>
                                                                                        </div>
                                                                                        <input type="date" 2
                                                                                            placeholder="Birthdate"
                                                                                            class="form-control"
                                                                                            name="client_birthdate"
                                                                                            value="<?php echo 
                                                                                            $clientclass['client_birthdate'] ?>"
                                                                                            disabled
                                                                                            aria-describedby="basic-addon3">

                                                                                        <div class="valid-feedback">
                                                                                        </div>
                                                                                        <div class="invalid-feedback">
                                                                                            This field is required.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text">
                                                                                                Email</span>
                                                                                        </div>
                                                                                        <input type="email" 2
                                                                                            placeholder="example@gmail.com"
                                                                                            class="form-control"
                                                                                            name="client_email" disabled
                                                                                            value="<?php echo $clientclass['client_email'] ?>"
                                                                                            aria-describedby="basic-addon3">

                                                                                        <div class="valid-feedback">
                                                                                        </div>
                                                                                        <div class="invalid-feedback">
                                                                                            This field is required.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text">Customer
                                                                                                Type</span>
                                                                                        </div>
                                                                                        <input type="text" 2
                                                                                            placeholder="Client Type"
                                                                                            class="form-control"
                                                                                            name="client_type" disabled
                                                                                            value="<?php echo $clientclass['client_type'] ?>"
                                                                                            required
                                                                                            aria-describedby="basic-addon3">

                                                                                        <div class="valid-feedback">
                                                                                        </div>
                                                                                        <div class="invalid-feedback">
                                                                                            This field is required.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text">Class</span>
                                                                                        </div>
                                                                                        <input type="text" 2
                                                                                            placeholder="Class Type"
                                                                                            class="form-control"
                                                                                            name="class_type" disabled
                                                                                            value="<?php echo $clientclass['client_class'] ?>"
                                                                                            aria-describedby="basic-addon3">

                                                                                        <div class="valid-feedback">
                                                                                        </div>
                                                                                        <div class="invalid-feedback">
                                                                                            This field is required.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span
                                                                                        class="input-group-text">Status
                                                                                    </span>
                                                                                </div>
                                                                                <input type="text" 2
                                                                                    placeholder="Status "
                                                                                    class="form-control"
                                                                                    name="status_type" disabled
                                                                                    value="<?php echo $clientclass['client_status'] ?>"
                                                                                    aria-describedby="basic-addon3">

                                                                                <div class="valid-feedback">
                                                                                </div>
                                                                                <div class="invalid-feedback">
                                                                                    This field is required.
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal"><i
                                                                                class="fa fa-times"></i>
                                                                            Close</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!--View MODAL ENDS HERE-->

                                                    <!--Edit button start here-->
                                                    <button type="button" class="btn btn-primary btn-xs mb-3"
                                                        data-toggle="modal" data-toggle="tooltip" data-placement="top"
                                                        title="Edit"
                                                        data-target="#edit-<?php echo $clientclass['client_id'];?>"><i
                                                            class="fa fa-edit"> </i> </button>
                                                    <!--Edit button ends here-->

                                                    <!-- Edit Modal Start here -->
                                                    <div class="modal fade" data-backdrop="static" data-keyboard="false"
                                                        aria-labelledby="staticBackdropLabel"
                                                        id="edit-<?php echo $clientclass['client_id'];?>"
                                                        aria-hidden="true" style="display: none;" tabindex="-1"
                                                        role="dialog">
                                                        <div class="modal-dialog modal-lg" style="max-width: 1000px;"
                                                            role="document">
                                                            <form class="needs-validation" novalidate
                                                                action="../client_class/editClient.php" method="post">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5>
                                                                            <strong class="modal-title"
                                                                                id="staticBackdropLabel">Update
                                                                                <?php echo $clientclass['client_name'] ?>'s
                                                                                Data
                                                                            </strong>
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"><span>×</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="sign">
                                                                            <span class="closebtn"
                                                                                onclick="this.parentElement.style.display='none';">&times;</span>
                                                                            <strong>Note:</strong> Make sure you fill up
                                                                            those marked
                                                                            with the ' <span style="color:red;">*</span>
                                                                            ' symbol.
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span
                                                                                        class="input-group-text">Customer
                                                                                        ID</span>
                                                                                </div>
                                                                                <input type="text" class="form-control"
                                                                                    aria-describedby="basic-addon3"
                                                                                    id="client_id" disabled
                                                                                    value="<?php echo $clientclass['client_id'];?>">
                                                                                <input type="hidden"
                                                                                    class="form-control"
                                                                                    aria-describedby="basic-addon3"
                                                                                    id="client_id" name="client_id"
                                                                                    value="<?php echo $clientclass['client_id'];?>">
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text">
                                                                                                First
                                                                                                Name<span>&nbsp;</span><span
                                                                                                    style="color: red;">
                                                                                                    *
                                                                                                </span></span>
                                                                                        </div>
                                                                                        <input type="text" 2
                                                                                            placeholder="First Name"
                                                                                            class="form-control"
                                                                                            name="client_name" required
                                                                                            aria-describedby="basic-addon3"
                                                                                            value=" <?php echo $clientclass['client_name']; ?>">

                                                                                        <div class="valid-feedback">
                                                                                        </div>
                                                                                        <div class="invalid-feedback">
                                                                                            This field is required.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text">
                                                                                                Middle Name</span>
                                                                                        </div>
                                                                                        <input type="text" 2
                                                                                            placeholder="Middle Name"
                                                                                            class="form-control"
                                                                                            name="client_middlename"
                                                                                            aria-describedby="basic-addon3"
                                                                                            value=" <?php echo $clientclass['client_middlename']; ?>">

                                                                                        <div class="valid-feedback">
                                                                                        </div>
                                                                                        <div class="invalid-feedback">
                                                                                            This field is required.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text">
                                                                                                Last
                                                                                                Name<span>&nbsp;</span><span
                                                                                                    style="color: red;">
                                                                                                    *
                                                                                                </span></span>
                                                                                        </div>
                                                                                        <input type="text" 2
                                                                                            placeholder="Last Name"
                                                                                            class="form-control"
                                                                                            name="client_lastname"
                                                                                            required
                                                                                            aria-describedby="basic-addon3"
                                                                                            value=" <?php echo $clientclass['client_lastname']; ?>">

                                                                                        <div class="valid-feedback">
                                                                                        </div>
                                                                                        <div class="invalid-feedback">
                                                                                            This field is required.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text">Contact
                                                                                                Number</span>
                                                                                        </div>
                                                                                        <input type="number"
                                                                                            onKeyPress="if(this.value.length==11)return false;"
                                                                                            placeholder="Contact Number"
                                                                                            class="form-control"
                                                                                            name="contact_number"
                                                                                            aria-describedby="basic-addon3"
                                                                                            value="<?php echo $clientclass['client_contactNumber']; ?>">


                                                                                        <div class="valid-feedback">
                                                                                        </div>
                                                                                        <div class="invalid-feedback">
                                                                                            This field is required.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text">
                                                                                                Birthdate<span>&nbsp;</span><span
                                                                                                    style="color: red;">
                                                                                                    *
                                                                                                </span></span>
                                                                                        </div>
                                                                                        <input type="date" 2
                                                                                            placeholder="Birthdate"
                                                                                            class="form-control"
                                                                                            name="client_birthdate"
                                                                                            required
                                                                                            aria-describedby="basic-addon3"
                                                                                            value="<?php echo $clientclass['client_birthdate']; ?>">

                                                                                        <div class="valid-feedback">
                                                                                        </div>
                                                                                        <div class="invalid-feedback">
                                                                                            This field is required.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text">
                                                                                                Email<span>&nbsp;</span><span
                                                                                                    style="color: red;">
                                                                                                    *
                                                                                                </span></span>
                                                                                        </div>
                                                                                        <input type="email" 2
                                                                                            placeholder="example@gmail.com"
                                                                                            class="form-control"
                                                                                            name="client_email" required
                                                                                            aria-describedby="basic-addon3"
                                                                                            value="<?php echo $clientclass['client_email']; ?>">

                                                                                        <div class="valid-feedback">
                                                                                        </div>
                                                                                        <div class="invalid-feedback">
                                                                                            This field is required.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text">Customer
                                                                                                Type</span>
                                                                                        </div>
                                                                                        <select class="form-select"
                                                                                            name="client_type">
                                                                                            <option selected disabled>
                                                                                                <?php echo $clientclass['client_type']; ?>
                                                                                            </option>
                                                                                            <optgroup
                                                                                                label="Select Customer Type">
                                                                                                <option>Member</option>
                                                                                                <option>Walk-in</option>
                                                                                            </optgroup>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="input-group mb-3">
                                                                                        <div
                                                                                            class="input-group-prepend">
                                                                                            <span
                                                                                                class="input-group-text"
                                                                                                style="width: 80px;">Class</span>
                                                                                        </div>
                                                                                        <input type="text" 2
                                                                                            placeholder="Class Type"
                                                                                            class="form-control"
                                                                                            name="class_type"
                                                                                            aria-describedby="basic-addon3"
                                                                                            value="<?php echo $clientclass['client_class']; ?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"
                                                                                        style="width: 80px;">Status
                                                                                    </span>
                                                                                </div>
                                                                                <input type="text" 2
                                                                                    placeholder="Status "
                                                                                    class="form-control"
                                                                                    name="status_type"
                                                                                    aria-describedby="basic-addon3"
                                                                                    value="<?php echo $clientclass['client_status']; ?>">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal"><i
                                                                                class="fa fa-times"></i>
                                                                            Cancel</button>
                                                                        <button class="btn btn-primary" type="submit"
                                                                            name="submit"><i class="fa fa-check"></i>
                                                                            Save</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- Edit Modal Ends here -->

                                                    <!--Delete button start here-->
                                                    <button type="button" class="btn btn-danger btn-xs mb-3"
                                                        data-toggle="modal" data-toggle="tooltip" data-placement="top"
                                                        title="Delete"
                                                        data-target="#delete-<?php echo $clientclass['client_id'];?>"><i
                                                            class="fa fa-trash"> </i> </button>
                                                    <!--Delete button start here-->

                                                    <!-- DELETE MODALS START HERE -->

                                                    <div id="delete-<?php echo $clientclass['client_id'];?>"
                                                        class="modal fade" data-backdrop="static" data-keyboard="false"
                                                        aria-labelledby="staticBackdropLabel">
                                                        <div class="modal-dialog modal-confirm">
                                                            <div class="modal-content">
                                                                <div class="modal-header flex-column">
                                                                    <div class="icon-box">
                                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                                    </div>
                                                                    <h4 class="modal-title w-100"
                                                                        id="staticBackdropLabel">Are you sure?
                                                                    </h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal"
                                                                        aria-hidden="true">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Do you really want to delete these
                                                                        records?</p>
                                                                    <p>This process cannot
                                                                        be
                                                                        undone.</p>
                                                                </div>
                                                                <div class="modal-footer justify-content-center">
                                                                    <form class="d-inline"
                                                                        action="../client_class/deleteClient.php"
                                                                        method="post">
                                                                        <input type="hidden" name="id"
                                                                            value="<?php echo $clientclass['client_id']; ?>">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Cancel</button>
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Delete</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--DELETE MODAL ENDS HERE-->

                                                </td>
                                            </tr>


                                                    </div>
                                                </div>
                                            </div>


                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <!-- ADD MODAL STARTS HERE -->
                                    <div class="modal fade" id="add" data-backdrop="static" data-keyboard="false"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg" style="max-width: 1000px;"
                                            style="margin: auto;">
                                            <form class="needs-validation" novalidate
                                                action="../client_class/addClient.php" method="post">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <?php
                                                    include '../includes/connection/admin.php';
                                                    $a = new Admin();
                                                    ?>
                                                        <h5 class="modal-title" id="staticBackdropLabel">Add new
                                                            customer
                                                        </h5>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal"><span>×</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="sign">
                                                            <span class="closebtn"
                                                                onclick="this.parentElement.style.display='none';">&times;</span>
                                                            <strong>Note:</strong> Make sure you fill up those marked
                                                            with the ' <span style="color:red;">*</span> ' symbol.
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Customer
                                                                        ID</span>
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                    aria-describedby="basic-addon3" id="clientclass"
                                                                    name="" value="<?php 
                                                    echo $a->generateClientId();?>" disabled>
                                                                <input type="hidden" id="client_id" class="form-control"
                                                                    aria-describedby="basic-addon3" id="clientclass"
                                                                    name="client_id" value="<?php 
                                                    echo $a->generateClientId();?>">

                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">
                                                                                First Name<span>&nbsp;</span><span
                                                                                    style="color: red;"> *
                                                                                </span></span>
                                                                        </div>
                                                                        <input type="text" 2 placeholder="First Name"
                                                                            class="form-control" name="client_name"
                                                                            required aria-describedby="basic-addon3">

                                                                        <div class="valid-feedback">
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            This field is required.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">
                                                                                Middle Name</span>
                                                                        </div>
                                                                        <input type="text" 2 placeholder="Middle Name"
                                                                            class="form-control"
                                                                            name="client_middlename"
                                                                            aria-describedby="basic-addon3">

                                                                        <div class="valid-feedback">
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            This field is required.
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">
                                                                                Last Name<span>&nbsp;</span><span
                                                                                    style="color: red;"> *
                                                                                </span></span>
                                                                        </div>
                                                                        <input type="text" 2 placeholder="Last Name"
                                                                            class="form-control" name="client_lastname"
                                                                            required aria-describedby="basic-addon3">

                                                                        <div class="valid-feedback">
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            This field is required.
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">Contact
                                                                                Number</span>
                                                                        </div>
                                                                        <input type="number"
                                                                            onKeyPress="if(this.value.length==11)return false;"
                                                                            placeholder="Contact Number"
                                                                            class="form-control" name="contact_number"
                                                                            aria-describedby="basic-addon3">


                                                                        <div class="valid-feedback">
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            This field is required.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">
                                                                                Birthdate<span>&nbsp;</span><span
                                                                                    style="color: red;"> *
                                                                                </span></span>
                                                                        </div>
                                                                        <input type="date" 2 placeholder="Birthdate"
                                                                            id="txtDate" class="form-control"
                                                                            name="client_birthdate" required
                                                                            aria-describedby="basic-addon3">

                                                                        <div class="valid-feedback">
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            This field is required.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">

                                                                <div class="col">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">
                                                                                Email<span>&nbsp;</span><span
                                                                                    style="color: red;"> *
                                                                                </span></span>
                                                                        </div>
                                                                        <input type="email" 2
                                                                            placeholder="example@gmail.com"
                                                                            class="form-control" name="client_email"
                                                                            required aria-describedby="basic-addon3">

                                                                        <div class="valid-feedback">
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            This field is required.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">Customer
                                                                                Type</span>
                                                                        </div>
                                                                        <select class="form-select" name="client_type">
                                                                            <option selected disabled>Choose
                                                                                Class Type</option>
                                                                            <option>Member</option>
                                                                            <option>Walk-in</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"
                                                                                style="width: 80px;">Class</span>
                                                                        </div>
                                                                        <input type="text" 2 placeholder="Class Type"
                                                                            class="form-control" name="class_type"
                                                                            aria-describedby="basic-addon3">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"
                                                                        style="width: 80px;">Status </span>
                                                                </div>
                                                                <input type="text" 2 placeholder="Status "
                                                                    class="form-control" name="status_type"
                                                                    aria-describedby="basic-addon3">
                                                            </div>
                                                            <div class="hidden">
                                                                <input type="hidden" id="client_code" name="client_code" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal" style="margin-left: 75%;"><i
                                                                class="fa fa-times"></i>
                                                            Close</button>
                                                        <button class="btn btn-primary" type="submit" name="submit"><i
                                                                class="fa fa-check"></i>
                                                            Save</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <!--ADD MODAL ENDS HERE-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Primary table end -->

            </div>
            <!-- footer area start-->
            <?php
       include '../includes/theme/footer.php'
       ?>
            <!-- footer area end-->

        </div>
    </div>
    <!-- main content area end -->

    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    <script src="../assets/js/dataTable.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsbarcode/3.11.3/JsBarcode.all.min.js"></script>
    <!--Script sa validation sa dile maka save-->
    <script src="../assets/js/validation.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <script src="../logout/logout.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(function() {
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();

        var maxDate = year + '-' + month + '-' + day;

        $('#txtDate').attr('max', maxDate);

    });
    </script>

    <script>
    $(".alert").show(() => {
        setTimeout(() => {
            $(".alert").fadeTo(300, 1).slideUp(300, () => {

                $(customer).hide();
            })
        }, 5000)
    });
    </script>
</body>

</html>