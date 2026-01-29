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
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">Odometer Tracker</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Trip Odometer Readings</h4>
                                    <p>Record Odometer Reading</p>
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i
                                            class="material-icons">more_vert</i></a>
                                      <ul id="dr-users" class="dropdown-content">
                                        <li><a href="OdometerRecords.php">OdometerRecords</a>
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
                                     <form>
                                        <div class="row">
                                             <div class="input-field col s6">
                                                <input id="phone" type="text" class="validate" placeholder="UP 32 AB 4567">
                                                <label for="phone">Vehicle</label>
                                            </div>
                                           <div class="input-field col s6">
                                                <input id="first_name" type="text"  class="validate">
                                                <label for="first_name">Driver Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                              <div class="input-field col s6">
                                        <input id="number" type="number" class="validate">
                                         <label for="number">Odometer Before Trip</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="post" type="number" class="validate">
                                         <label for="post">Odometer After Trip</label>
                                    </div>
                                        </div>
                                    
                                       <div class="row">
                                          <div class="input-field col s6">
                                        <input id="time" type="date" class="validate">
                                         <label for="time" style="margin-top: -20px;">Date</label>
                                    </div>
                                     <div class="input-field col s6">
                                                <input id="remark" type="text" class="validate" >
                                                <label for="remark">Remarks</label>
                                            </div>
                                       </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" value="Save Record" class="waves-effect waves-light btn-large">
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