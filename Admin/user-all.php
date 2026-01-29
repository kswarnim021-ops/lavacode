<?php
include("csslinks.php");
include 'code/db_connect.php';

// Fetch all drivers
$sql = "SELECT * FROM drivers ORDER BY created_at DESC";
$result = $conn->query($sql);

?>



<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-6 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="./dashboard.php" class="logo"><img src="images/logo1.png" alt="" />
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
            <?php include "./sidebar.php"?>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">All drivers</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Driver Details</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i
                                            class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="user-add.php">Add New Driver</a>
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
                                                    <th>Driver</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>License Number</th>
                                                    <th>View</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($result->num_rows > 0): ?>
                                                    <?php while ($row = $result->fetch_assoc()): ?>
                                                        <tr>
                                                            <td>
                                                                <span class="list-img">
                                                                    <?php if(!empty($row['profile_image']) && file_exists("assets/images/driver_image/".$row['profile_image'])): ?>
                                                                        <img style="height: 80px; width:80px; object-fit:cover;" src="assets/images/driver_image/<?php echo htmlspecialchars($row['profile_image']); ?>" alt="Driver Image" >
                                                                    <?php else: ?>
                                                                        <img src="images/avatar.png" alt="No Image" width="50" height="50">
                                                                    <?php endif; ?>

                                                                </span>
                                                            </td>

                                                            <!-- Name + Address -->
                                                            <td>
                                                                <a href="#">
                                                                    <span class="list-enq-name"><?php echo $row['name']; ?></span><br>
                                                                    <!-- <span class="list-enq-city"><?php echo $row['address']; ?></span> -->
                                                                </a>
                                                            </td>

                                                            <!-- Phone -->
                                                            <td><?php echo $row['phone']; ?></td>

                                                            <!-- Email -->
                                                            <td><?php echo $row['email']; ?></td>

                                                            <!-- Address -->
                                                            <td><?php echo $row['address']; ?></td>

                                                            <!-- License -->
                                                            <td><?php echo $row['license_no']; ?></td>

                                                            <!-- Actions -->
                                                            <td><a href="user-view.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                                            <td><a href="user-edit.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                                            <td><a href="../Admin/code/driver-delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?');"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                                        </tr>
                                                    <?php endwhile; ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="9" class="text-center">No drivers found.</td>
                                                    </tr>
                                                <?php endif; ?>
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


    <!-- 
    ======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/user-all.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Aug 2025 06:22:12 GMT -->

</html>