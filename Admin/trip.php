<?php
 
 include 'csslinks.php';
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
                        <li><a href="index"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">Trip Assignment</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Assign trips and duties to drivers</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i
                                            class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="trip_record.php">Trip and duties Records</a>
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
                                    <!-- </ul> -->

                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                     <form>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="first_name" type="text"  class="validate">
                                                <label for="first_name">Name</label>
                                            </div>
                                           <div class="input-field col s6">
                                                <input id="phone" type="text" class="validate" placeholder="UP 32 AB 4567">
                                                <label for="phone">Vehicle</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                              <div class="input-field col s6">
                                        <input id="post-auth" type="date" class="validate">
                                         <label for="time" style="margin-top: -20px;">Date</label>
                                    </div>
                                              <div class="input-field col s6">
                                        <select>
                                            <option value="" disabled selected>--Select--</option>
                                            <option value="1">Morning</option>
                                            <option value="2">Evening</option>
                                            <option value="3">Night</option>
                                           
                                           
                                        </select>
                                        <label>Shift</label>
                                    </div>
                                        </div>
                                        <div class="row">
                                           <div class="input-field col s6">
                                        <select>
                                            <option value="" disabled selected>--Select--</option>
                                            <option value="1">Trip</option>
                                            <option value="2">Airport Pickup</option>
                                            <option value="3">Delivery</option>
                                            <option value="4">Standby</option>
                                           
                                        </select>
                                        <label>Duty Type</label>
                                    </div>
                                            <div class="input-field col s6">
                                                <input id="country" type="text" class="validate" placeholder="e.g., Lucknow &rarr; Delhi">
                                                <label for="country">Route/Loaction</label>
                                            </div>
                                        </div>
                                       <div class="row">
                                         <div class="input-field col s6">
                                        <input id="time" type="time" class="validate">
                                         <label for="time" style="margin-top: -20px;">Start Time</label>
                                    </div>
                                      <div class="input-field col s6">
                                        <input id="time-end" type="time" class="validate">
                                         <label for="time-end" style="margin-top: -20px;">End Time</label>
                                    </div>
                                       </div>
                                       <div class="row">
                                         <div class="input-field col s6">
                                        <input id="description" type="text" class="validate">
                                         <label for="description" >Trip Details / Instructions</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <select>
                                            <option value="" disabled selected>--Select--</option>
                                            <option value="1">Completed</option>
                                            <option value="2">Pending</option>
                                            <option value="3">	Cancelled</option>
                                        </select>
                                        <label>Status</label>
                                    </div>
                                       </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" value="Assign Now" class="waves-effect waves-light btn-large">
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