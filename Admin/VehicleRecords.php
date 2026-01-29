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
                        <li class="active-bre"><a href="#">Vehicle Records</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Vehicle Records</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i
                                            class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="">Export PDF</a>
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
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Registration</th>
                                                    <th>Model</th>
                                                    <th>Insurance</th>
                                                    <th>Permit</th>
                                                    <th>Fitness</th>
                                                    <th>Pollution</th>
                                                    <!-- <th>Status</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>MH 12 AB 4567</td>
                                                    <td>Tata Winger</td>
                                                    <td>2025-12-01</td>
                                                    <td>2026-01-15</td>
                                                    <td>2025-11-30</td>
                                                    <td>2025-09-10</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>MH 12 AB 4567</td>
                                                    <td>Tata Winger</td>
                                                    <td>2025-12-01</td>
                                                    <td>2026-01-15</td>
                                                    <td>2025-11-30</td>
                                                    <td>2025-09-10</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>MH 12 AB 4567</td>
                                                    <td>Tata Winger</td>
                                                    <td>2025-12-01</td>
                                                    <td>2026-01-15</td>
                                                    <td>2025-11-30</td>
                                                    <td>2025-09-10</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>MH 12 AB 4567</td>
                                                    <td>Tata Winger</td>
                                                    <td>2025-12-01</td>
                                                    <td>2026-01-15</td>
                                                    <td>2025-11-30</td>
                                                    <td>2025-09-10</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                     <td>MH 12 AB 4567</td>
                                                    <td>Tata Winger</td>
                                                    <td>2025-12-01</td>
                                                    <td>2026-01-15</td>
                                                    <td>2025-11-30</td>
                                                    <td>2025-09-10</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>MH 12 AB 4567</td>
                                                    <td>Tata Winger</td>
                                                    <td>2025-12-01</td>
                                                    <td>2026-01-15</td>
                                                    <td>2025-11-30</td>
                                                    <td>2025-09-10</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>MH 12 AB 4567</td>
                                                    <td>Tata Winger</td>
                                                    <td>2025-12-01</td>
                                                    <td>2026-01-15</td>
                                                    <td>2025-11-30</td>
                                                    <td>2025-09-10</td>
                                                </tr>
                                                <tr>
                                                    <td>8 </td>
                                                     <td>MH 12 AB 4567</td>
                                                    <td>Tata Winger</td>
                                                    <td>2025-12-01</td>
                                                    <td>2026-01-15</td>
                                                    <td>2025-11-30</td>
                                                    <td>2025-09-10</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>MH 12 AB 4567</td>
                                                    <td>Tata Winger</td>
                                                    <td>2025-12-01</td>
                                                    <td>2026-01-15</td>
                                                    <td>2025-11-30</td>
                                                    <td>2025-09-10</td>
                                                </tr>
                                                <tr>
                                                    <td>10 </td>
                                                    <td>MH 12 AB 4567</td>
                                                    <td>Tata Winger</td>
                                                    <td>2025-12-01</td>
                                                    <td>2026-01-15</td>
                                                    <td>2025-11-30</td>
                                                    <td>2025-09-10</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                     <td>MH 12 AB 4567</td>
                                                    <td>Tata Winger</td>
                                                    <td>2025-12-01</td>
                                                    <td>2026-01-15</td>
                                                    <td>2025-11-30</td>
                                                    <td>2025-09-10</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                     <td>MH 12 AB 4567</td>
                                                    <td>Tata Winger</td>
                                                    <td>2025-12-01</td>
                                                    <td>2026-01-15</td>
                                                    <td>2025-11-30</td>
                                                    <td>2025-09-10</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                     <td>DL 04 CD 8899</td>
                                                    <td>Force Traveller</td>
                                                    <td>2025-12-01</td>
                                                    <td>2026-01-15</td>
                                                    <td>2025-11-30</td>
                                                    <td>2025-09-10</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>DL 04 CD 8899</td>
                                                    <td>Force Traveller</td>
                                                    <td>2025-12-01</td>
                                                    <td>2026-01-15</td>
                                                    <td>2025-11-30</td>
                                                    <td>2025-09-10</td>
                                                </tr>
                                                <tr>
                                                    <td>15 </td>
                                                     <td>DL 04 CD 8899</td>
                                                    <td>Force Traveller</td>
                                                    <td>2025-12-01</td>
                                                    <td>2026-01-15</td>
                                                    <td>2025-11-30</td>
                                                    <td>2025-09-10</td>
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