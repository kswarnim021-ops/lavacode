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
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">Driver Attendance</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Driver Attendance</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i
                                            class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="#">Export PDF</a>
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
                                                    <th>Sr.No.</th>
                                                    <th>Driver_DL</th>
                                                    <th>Driver Name</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>in-Time</th>
                                                    <th>out-Time</th>
                                                    <!-- <th>View</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <!-- <td><span class="list-img"><img src="images/user/1.png"
                                                                alt=""></span>
                                                    </td> -->
                                                    <td>1</td>
                                                    <td>DL-2312546</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span
                                                                class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>2025-08-29</td>
                                                    <td>Present</td>
                                                    <td>09:00 AM</td>
                                                    <td>06:00 PM</td>
                                                    <!-- <td>
                                                        <span class="label label-primary">02</span>
                                                    </td> -->
                                                    <!-- <td>
                                                       
                                                        <a href="user-view.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.php"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                   <td>1</td>
                                                    <td>DL-2312546</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span
                                                                class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>2025-08-29</td>
                                                    <td>Present</td>
                                                    <td>09:00 AM</td>
                                                    <td>06:00 PM</td>
                                                    <!-- <td>
                                                        <span class="label label-primary">02</span>
                                                    </td> -->
                                                    <!-- <td>
                                                        <a href="user-view.php"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.php"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                   <td>1</td>
                                                    <td>DL-2312546</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span
                                                                class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>2025-08-29</td>
                                                    <td>Present</td>
                                                    <td>09:00 AM</td>
                                                    <td>06:00 PM</td>
                                                    <!-- <td>
                                                        <span class="label label-primary">02</span>
                                                    </td> -->
                                                    <!-- <td>
                                                        <a href="user-view.php"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.php"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                   <td>1</td>
                                                    <td>DL-2312546</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span
                                                                class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>2025-08-29</td>
                                                    <td>Present</td>
                                                    <td>09:00 AM</td>
                                                    <td>06:00 PM</td>
                                                    <!-- <td>
                                                        <span class="label label-primary">02</span>
                                                    </td> -->
                                                    <!-- <td>
                                                        <a href="user-view.php"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.php"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                   <td>1</td>
                                                    <td>DL-2312546</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span
                                                                class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>2025-08-29</td>
                                                    <td>Present</td>
                                                    <td>09:00 AM</td>
                                                    <td>06:00 PM</td>
                                                    <!-- <td>
                                                        <span class="label label-primary">02</span>
                                                    </td> -->
                                                    <!-- <td>
                                                        <a href="user-view.php"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.php"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>DL-2312546</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span
                                                                class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>2025-08-29</td>
                                                    <td>Present</td>
                                                    <td>09:00 AM</td>
                                                    <td>06:00 PM</td>
                                                    <!-- <td>
                                                        <span class="label label-primary">02</span>
                                                    </td> -->
                                                    <!-- <td>
                                                        <a href="user-view.php"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.php"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                   <td>1</td>
                                                    <td>DL-2312546</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span
                                                                class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>2025-08-29</td>
                                                    <td>Present</td>
                                                    <td>09:00 AM</td>
                                                    <td>06:00 PM</td>
                                                    <!-- <td>
                                                        <span class="label label-primary">02</span>
                                                    </td> -->
                                                    <!-- <td>
                                                        <a href="user-view.php"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.php"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                   <td>1</td>
                                                    <td>DL-2312546</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span
                                                                class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>2025-08-29</td>
                                                    <td>Present</td>
                                                    <td>09:00 AM</td>
                                                    <td>06:00 PM</td>
                                                    <!-- <td>
                                                        <span class="label label-primary">02</span>
                                                    </td> -->
                                                    <!-- <td>
                                                        <a href="user-view.php"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.php"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>DL-2312546</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span
                                                                class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>2025-08-29</td>
                                                    <td>Present</td>
                                                    <td>09:00 AM</td>
                                                    <td>06:00 PM</td>
                                                    <!-- <td>
                                                        <span class="label label-primary">02</span>
                                                    </td> -->
                                                    <!-- <td>
                                                        <a href="user-view.php"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.php"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                   <td>1</td>
                                                    <td>DL-2312546</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span
                                                                class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>2025-08-29</td>
                                                    <td>Present</td>
                                                    <td>09:00 AM</td>
                                                    <td>06:00 PM</td>
                                                    <!-- <td>
                                                        <span class="label label-primary">02</span>
                                                    </td> -->
                                                    <!-- <td>
                                                        <a href="user-view.php"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.php"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>DL-2312546</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span
                                                                class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>2025-08-29</td>
                                                    <td>Present</td>
                                                    <td>09:00 AM</td>
                                                    <td>06:00 PM</td>
                                                    <!-- <td>
                                                        <span class="label label-primary">02</span>
                                                    </td> -->
                                                    <!-- <td>
                                                        <a href="user-view.php"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.php"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td> -->
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

    

    <!-- ======== SCRIPT FILES =========--> 
 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/user-all.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Aug 2025 06:22:12 GMT -->

</html>