<?php
session_start();
  include("csslinks.php");
?>

<body>
    <!--== MAIN CONTRAINER ==-->
  <?php include 'topbar.php'; ?>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
          <?php include 'sidebar.php'; ?>
            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">Vehicle Details</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Vehicle Details Management</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i
                                            class="material-icons">more_vert</i></a>
                                      <ul id="dr-users" class="dropdown-content">
                                        <li><a href="VehicleRecords.php">VehicleRecords</a>
                                        <!-- </li> -->
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
                                     <form action="../Admin/code/vehicle_details_code.php" method="POST">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="first_name" type="text"  class="validate" placeholder="e.g., UP 32 AB 4567" name="registration_no" required>
                                                <label for="first_name">Registration Number</label>
                                            </div>
                                           <div class="input-field col s6">
                                                <input id="phone" type="text" class="validate" placeholder="e.g., Tata Winger" name="vehicle_model" required>
                                                <label for="phone">Vehicle Model</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                              <div class="input-field col s6">
                                        <input id="post-auth" type="date" class="validate" name="insurance_expiry" required>
                                         <label for="time" style="margin-top: -20px;">Insurance Expiry</label>
                                    </div>
                                     <div class="input-field col s6">
                                        <input id="post-auth" type="date" class="validate" name="permit_expiry" required>
                                         <label for="time" style="margin-top: -20px;">Permit Expiry</label>
                                    </div>
                                             
                                        </div>
                                        <div class="row">
                                           <div class="input-field col s6">
                                        <input id="post-auth" type="date" class="validate" name="certificate_expiry" required>
                                         <label for="time" style="margin-top: -20px;">Fitness Certificate Expiry</label>
                                    </div>
                                             <div class="input-field col s6">
                                        <input id="post-auth" type="date" class="validate" name="pollution_expiry" required >
                                         <label for="time" style="margin-top: -20px;">Pollution Certificate Expiry</label>
                                    </div>
                                        </div>
                                       
                                       <div class="row">
                                         <div class="input-field col s12">
                                        <input id="description" type="text" class="validate" name="description" required>
                                         <label for="description" >Additional Notes</label>
                                    </div>
                                       </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" value="Save Vehicle" class="waves-effect waves-light btn-large" name="submit">
                                                 <input type="reset" value="Reset" class="waves-effect waves-light btn-large">
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

    

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/user-all.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Aug 2025 06:22:12 GMT -->

</html>