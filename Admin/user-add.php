<?php 
 include("csslinks.php");
?>

<body>
    <!--== MAIN CONTRAINER ==-->
    <?php include 'topbar.php'; ?>
    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <?php include './sidebar.php' ?>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="./dashboard.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">Add New Driver</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Add New Driver</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                </div>
                                <div class="tab-inn">
                                    <form action="code/driver_register.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="first_name" type="text" name="name" class="validate">
                                                <label for="first_name">Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="phone" type="number" name="phone" class="validate">
                                                <label for="phone">Phone</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="city" type="text" name="license_no" class="validate">
                                                <label for="city">License Number</label>
                                            </div>
                                            <!-- <div class="input-field col s6">
                                                <input id="city" type="text" class="validate">
                                                <label for="city">City</label>
                                            </div> -->
                                        </div>
                                        <!-- <div class="row">
                                            <div class="input-field col s6">
                                                <input id="city" type="text" class="validate">
                                                <label for="city">City</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="country" type="text" class="validate">
                                                <label for="country">Country</label>
                                            </div>
                                        </div> -->
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="password" type="password" name="password" class="validate">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="password1" name="cpassword" type="password" class="validate">
                                                <label for="password1">Confirm Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" name="email" class="validate">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="address" name="address" type="text" class="validate">
                                                <label for="aadress">Address</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <div class="file-field input-field">
                                                    <div class="btn">
                                                        <span>File</span>
                                                        <input type="file" name="profile_image">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text" placeholder="Upload Profile Image">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-field col s6">
                                                <div class="file-field input-field">
                                                    <div class="btn">
                                                        <span>File</span>
                                                        <input type="file" name="license_image">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text" placeholder="Upload Driving License">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" class="waves-effect waves-light btn-large" name="driver_btn">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- ======== SCRIPT FILES ========= -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/user-add.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Aug 2025 06:22:10 GMT -->

</html>