<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/user-all.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Aug 2025 06:22:11 GMT -->

<head>
    <title>Lava Material - Web Application and Website Multipurpose Admin Panel Template</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-6 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="index.php" class="logo"><img src="images/logo1.png" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <!-- <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </div> -->
            <!--== NOTIFICATION ==-->
            <!-- <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href='#'><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                </div>
            </div> -->
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-6 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img
                        src="images/user/6.png" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="setting.php" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin
                            Setting</a>
                    </li>
                    <li><a href="listing-all.php" class="waves-effect"><i class="fa fa-list-ul" aria-hidden="true"></i>
                            Listings</a>
                    </li>
                    <li><a href="hotel-all.php" class="waves-effect"><i class="fa fa-building-o"
                                aria-hidden="true"></i> Hotels</a>
                    </li>
                    <li><a href="package-all.php" class="waves-effect"><i class="fa fa-umbrella"
                                aria-hidden="true"></i> Tour Packages</a>
                    </li>
                    <li><a href="event-all.php" class="waves-effect"><i class="fa fa-flag-checkered"
                                aria-hidden="true"></i> Events</a>
                    </li>
                    <li><a href="offers.php" class="waves-effect"><i class="fa fa-tags" aria-hidden="true"></i>
                            Offers</a>
                    </li>
                    <li><a href="user-add.php" class="waves-effect"><i class="fa fa-user-plus" aria-hidden="true"></i>
                            Add New User</a>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="fa fa-undo" aria-hidden="true"></i> Backup Data</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i>
                            Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="images/placeholder.jpg" alt="">
                        </li>
                        <li>
                            <h5>Victoria Baker <span> Santa Ana, CA</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="index.php">
                                <i class="fa fa-bar-chart"></i>Dashboard</a>
                        </li>
                        <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-list-ul"
                                    aria-hidden="true"></i> Listing</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="listing-all.php">All listing</a>
                                    </li>
                                    <li><a href="listing-add.php">Add New listing</a>
                                    </li>
                                    <li><a href="listing-cat-all.php">All listing Categories</a>
                                    </li>
                                    <li><a href="listing-cat-add.php">Add listing Categories</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <li><a href="avascript:void(0)" class="collapsible-header"><i
                                    class="uil uil-user"></i> Driver Profiles</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="user-all.php">All Drivers</a>
                                    </li>
                                    <li><a href="user-add.php">Add New Driver</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li><a href="#" class="collapsible-header"><i class="fa fa-umbrella"
                                    aria-hidden="true"></i> Driver Attendance</a> -->
                        <!-- <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="package-all.php">All Packages</a>
                                    </li>
                                    <li><a href="package-add.php">Add New Package</a>
                                    </li>
                                    <li><a href="package-cat-all.php">All Package Categories</a>
                                    </li>
                                    <li><a href="package-cat-add.php">Add Package Categories</a>
                                    </li>
                                </ul>
                            </div> -->
                        <!-- </li> -->
                          <li><a href="user-atend.php"><i class="uil uil-server-connection"></i> Driver Attendance</a>
                        <li><a href="user-leave.php" ><i class="uil uil-notes"></i> Leave
                                Requests</a>
                            <!-- <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="hotel-all.php">All Hotels</a>
                                    </li>
                                    <li><a href="hotel-add.php">Add New Hotel</a>
                                    </li>
                                    <li><a href="hotel-room-type-all.php">Room Type</a>
                                    </li>
                                    <li><a href="hotel-room-type-add.php">Add Room Type</a>
                                    </li>
                                </ul>
                            </div> -->
                        </li>
                        <li><a href="payments.php"  ><i class="uil uil-invoice"></i>
                                Driver Payments</a>
                            <!-- <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="sight-see-all.php">All Sight Seeings</a>
                                    </li>
                                    <li><a href="sight-see-add.php">Add New Sight Seeing</a>
                                    </li>
                                </ul>
                            </div> -->
                        </li>
                        <li><a href="trip.php"  ><i class="uil uil-backpack"></i>
                                Trip Assignment</a>
                            <!-- <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="event-all.php">All Events</a>
                                    </li>
                                    <li><a href="event-add.php">Add New Event</a>
                                    </li>
                                </ul>
                            </div> -->
                        </li>
                        <li><a href="vehicle.php" ><i class="uil uil-car"></i> Vehicle
                                Details</a>
                            <!-- <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="ui-form.php">ui-form</a>
                                    </li>
                                    <li><a href="ui-kit.php">ui-kit</a>
                                    </li>
                                    <li><a href="ui-table.php">ui-table</a>
                                    </li>
                                    <li><a href="ui-pre-load.php">ui-pre-load</a>
                                    </li>
                                    <li><a href="ui-tab.php">ui-tab</a>
                                    </li>
                                    <li><a href="ui-icons.php">ui-icons</a>
                                    </li>
                                    <li><a href="ui-collapsible.php">ui-collapsible</a>
                                    </li>
                                </ul>
                            </div> -->
                        </li>
                        <li><a href="javascript:void(0)" ><i class="uil uil-paint-tool"></i>
                                Vehicle Maintenance</a>
                            <!-- <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="discount.php">All Discounts</a>
                                    </li>
                                    <li><a href="discount-add.php">Add New Discounts</a>
                                    </li>
                                </ul>
                            </div> -->
                        </li>
                        <li><a href="odometer_tracker.php" class=" menu-active" ><i
                                    class="uil uil-tachometer-fast"></i>Odometer Tracker</a>
                            <!-- <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="offers.php">All Offers</a>
                                    </li>
                                    <li><a href="offers-add.php">Add New Offers</a>
                                    </li>
                                </ul>
                            </div> -->
                        </li>
                        <li><a href="VehicleExpenses.php"><i class="uil uil-football"></i>
                                Vehicle Expenses</a>
                            <!-- <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="hotel-booking-all.php">Hotel</a>
                                    </li>
                                    <li><a href="package-booking-all.php">Package</a>
                                    </li>
                                    <li><a href="sight-see-booking-all.php">Sight Seeings</a>
                                    </li>
                                    <li><a href="event-booking-all.php">Events</a>
                                    </li>
                                </ul>
                            </div> -->
                        </li>
                        <li><a href="vehicle_Tracking.php"><i class="uil uil-map"></i> Vehicle
                                Tracking</a>
                            <!-- <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="blog-all.php">All Blogs</a>
                                    </li>
                                    <li><a href="blog-add.php">Add Blog</a>
                                    </li>
                                </ul>
                            </div> -->
                        </li>
                        <li><a href="trip.php"><i class="uil uil-history"></i> Trip & Duty History</a>
                        </li>
                        <li><a href="report.php"><i class="uil uil-file-alt"></i> Reports</a>
                        </li>
                        <li><a href="login.php" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                Login</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">Odometer Records</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Odometer Records</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i
                                            class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="">Export PDF</a>
                                        </li>
                                        <!-- <li><a href="user-edit.php">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li>
                                        <li><a href="user-view.php"><i class="material-icons">subject</i>View All</a>
                                        </li> -->
                                    </ul>

                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                       <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Vehicle</th>
                                                    <th>Driver</th>
                                                    <th>Before Trip</th>
                                                    <th>After Trip</th>
                                                    <th>Date</th>
                                                    <th>Remarks</th>
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>MH 12 AB 4567</td>
                                                    <td>Ravi Kumar</td>
                                                    <td>12,350 km</td>
                                                    <td>12,520 km</td>
                                                    <td>2025-08-25</td>
                                                    <td>Trip to Pune</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                   <td>MH 12 AB 4567</td>
                                                    <td>Ravi Kumar</td>
                                                    <td>12,350 km</td>
                                                    <td>12,520 km</td>
                                                    <td>2025-08-25</td>
                                                    <td>Trip to Pune</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>MH 12 AB 4567</td>
                                                    <td>Ravi Kumar</td>
                                                    <td>12,350 km</td>
                                                    <td>12,520 km</td>
                                                    <td>2025-08-25</td>
                                                    <td>Trip to Pune</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                  <td>MH 12 AB 4567</td>
                                                    <td>Ravi Kumar</td>
                                                    <td>12,350 km</td>
                                                    <td>12,520 km</td>
                                                    <td>2025-08-25</td>
                                                    <td>Trip to Pune</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                     <td>MH 12 AB 4567</td>
                                                    <td>Ravi Kumar</td>
                                                    <td>12,350 km</td>
                                                    <td>12,520 km</td>
                                                    <td>2025-08-25</td>
                                                    <td>Trip to Pune</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>MH 12 AB 4567</td>
                                                    <td>Ravi Kumar</td>
                                                    <td>12,350 km</td>
                                                    <td>12,520 km</td>
                                                    <td>2025-08-25</td>
                                                    <td>Trip to Pune</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                  <td>MH 12 AB 4567</td>
                                                    <td>Ravi Kumar</td>
                                                    <td>12,350 km</td>
                                                    <td>12,520 km</td>
                                                    <td>2025-08-25</td>
                                                    <td>Trip to Pune</td>
                                                </tr>
                                                <tr>
                                                    <td>8 </td>
                                                    <td>MH 12 AB 4567</td>
                                                    <td>Ravi Kumar</td>
                                                    <td>12,350 km</td>
                                                    <td>12,520 km</td>
                                                    <td>2025-08-25</td>
                                                    <td>Trip to Pune</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                   <td>MH 12 AB 4567</td>
                                                    <td>Ravi Kumar</td>
                                                    <td>12,350 km</td>
                                                    <td>12,520 km</td>
                                                    <td>2025-08-25</td>
                                                    <td>Trip to Pune</td>
                                                </tr>
                                                <tr>
                                                    <td>10 </td>
                                                   <td>MH 12 AB 4567</td>
                                                    <td>Ravi Kumar</td>
                                                    <td>12,350 km</td>
                                                    <td>12,520 km</td>
                                                    <td>2025-08-25</td>
                                                    <td>Trip to Pune</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>MH 12 AB 4567</td>
                                                    <td>Ravi Kumar</td>
                                                    <td>12,350 km</td>
                                                    <td>12,520 km</td>
                                                    <td>2025-08-25</td>
                                                    <td>Trip to Pune</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                     <td>MH 12 AB 4567</td>
                                                    <td>Ravi Kumar</td>
                                                    <td>12,350 km</td>
                                                    <td>12,520 km</td>
                                                    <td>2025-08-25</td>
                                                    <td>Trip to Pune</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                     <td>MH 12 AB 4567</td>
                                                    <td>Ravi Kumar</td>
                                                    <td>12,350 km</td>
                                                    <td>12,520 km</td>
                                                    <td>2025-08-25</td>
                                                    <td>Trip to Pune</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                   <td>MH 12 AB 4567</td>
                                                    <td>Ravi Kumar</td>
                                                    <td>12,350 km</td>
                                                    <td>12,520 km</td>
                                                    <td>2025-08-25</td>
                                                    <td>Trip to Pune</td>
                                                </tr>
                                                <tr>
                                                    <td>15 </td>
                                                    <td>MH 12 AB 4567</td>
                                                    <td>Ravi Kumar</td>
                                                    <td>12,350 km</td>
                                                    <td>12,520 km</td>
                                                    <td>2025-08-25</td>
                                                    <td>Trip to Pune</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/user-all.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Aug 2025 06:22:12 GMT -->

</html>