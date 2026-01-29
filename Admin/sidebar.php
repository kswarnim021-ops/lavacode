

<?php
    include "./code/db_connect.php";
    ?>
    <div class="sb2-1">
        <!--== USER INFO ==-->
        <div class="sb2-12">
            <ul>
                <li><img src="images/placeholder.jpg" alt="">
                </li>
                <li>

                    <h5>Welcome <?php echo $_SESSION['name'] ?><span> Admin, Lava</span></h5>
                </li>
                <li></li>
            </ul>
        </div>
        <!--== LEFT MENU ==-->
        <div class="sb2-13">
            <ul class="collapsible" data-collapsible="accordion">
                <li><a href="./dashboard.php" class="menu-active">
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
                <li><a href="avascript:void(0)" class="collapsible-header"><i class="uil uil-user"></i> Driver Profiles</a>
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
                <li><a href="user-leave.php"><i class="uil uil-notes"></i> Leave Requests</a>
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
                <li><a href="payments.php"><i class="uil uil-invoice"></i> Driver Payments</a>
                    <!-- <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="sight-see-all.php">All Sight Seeings</a>
                                    </li>
                                    <li><a href="sight-see-add.php">Add New Sight Seeing</a>
                                    </li>
                                </ul>
                            </div> -->
                </li>
                <li><a href="trip.php"><i class="uil uil-backpack"></i> Trip Assignment</a>
                    <!-- <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="event-all.php">All Events</a>
                                    </li>
                                    <li><a href="event-add.php">Add New Event</a>
                                    </li>
                                </ul>
                            </div> -->
                </li>
                <li><a href="vehicle.php"><i class="uil uil-car"></i> Vehicle Details</a>
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
                <li><a href="vehicle_maintenance.php"><i class="uil uil-paint-tool"></i> Vehicle Maintenance</a>
                    <!-- <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="discount.php">All Discounts</a>
                                    </li>
                                    <li><a href="discount-add.php">Add New Discounts</a>
                                    </li>
                                </ul>
                            </div> -->
                </li>
                <li><a href="odometer_tracker.php"><i class="uil uil-tachometer-fast"></i>Odometer Tracker</a>
                    <!-- <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="offers.php">All Offers</a>
                                    </li>
                                    <li><a href="offers-add.php">Add New Offers</a>
                                    </li>
                                </ul>
                            </div> -->
                </li>
                <li><a href="VehicleExpenses.php"><i class="uil uil-football"></i> Vehicle Expenses</a>
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
                <li><a href="vehicle_Tracking.php"><i class="uil uil-map"></i> Vehicle Tracking</a>
                    <!-- <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="blog-all.php">All Blogs</a>
                                    </li>
                                    <li><a href="blog-add.php">Add Blog</a>
                                    </li>
                                </ul>
                            </div> -->
                </li>
                <li><a href="trip_record.php"><i class="uil uil-history"></i> Trip & Duty History</a>
                </li>
                <li><a href="report.php"><i class="uil uil-file-alt"></i> Reports</a>
                </li>
                <li><a href="" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i>
                        Login</a>
                </li>
            </ul>
        </div>
    </div>