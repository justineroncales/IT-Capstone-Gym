 <!-- header area end -->
 <!-- page title area start -->

 <link rel="stylesheet" href="../time/realtime.css">
 <div class="page-title-area">
     <div class="row align-items-center">
         <div class="col-sm-6">
             <!--Time Start Here-->
             <div class="clock"></div>
             <div class="date"></div> 
             <!--  Time Ends Here -->
 
         </div>

         <div class="col-sm-6 clearfix">
             <div class="user-profile pull-right" class="dropdown-menu">
                 <img class="img-profile rounded-circle" src="../assets/images/author/Admin.png"
                     class="user-name dropdown-toggle" data-toggle="dropdown" width="30" style="margin-right: 10px;">
                 <h4 class="user-name dropdown-toggle" data-toggle="dropdown"> <?= $_SESSION['username']; ?> <i
                         class="fa fa-angle-down"></i></h4>

                 <!-- Dropdown - User Information -->
                 <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                     <a class="dropdown-item" href="#">
                         <i class="fa fa-user  fa-sm fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                         Profile
                     </a>
                     <a class="dropdown-item" href="#">
                         <i class="fa fa-cog fa-sm fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                         Settings
                     </a>
                     <a class="dropdown-item" href="#">
                         <i class="fa fa-history fa-sm fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                         Activity Log
                     </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                         <i class="fa fa-sign-out" aria-hidden="true"></i>
                         Logout
                     </a>
                 </div>
                 </li>
             </div>
         </div>
     </div>
 </div>
 <script src="../time/time.js"></script>
 <!-- page title area end -->