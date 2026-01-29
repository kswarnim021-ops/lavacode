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
            </div>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">Report</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Report Generator</h4>
                                    <p>Generate reports by Date, Vehicle, or Driver</p>
                                   

                                </div>
                                <div class="tab-inn">
                                     <form>
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <input id="first_name" type="text"  class="validate">
                                                <label for="first_name">Driver</label>
                                            </div>
                                           <div class="input-field col s4">
                                                <input id="phone" type="text" class="validate" placeholder="UP 32 AB 4567">
                                                <label for="phone">Vehicle</label>
                                            </div>
                                              <div class="input-field col s4">
                                        <input id="post-auth" type="date" class="validate">
                                         <label for="time" style="margin-top: -20px;">Date</label>
                                    </div>
                                        </div>
                                     
                                       
                                      
                                       
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" value="Generate Report" class="waves-effect waves-light btn-large">
                                                 <!-- <input type="reset" value="Reset" class="waves-effect waves-light btn-large"> -->
                                            </div>
                                        </div>
                                        
                                    </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                     <h4>Report</h4>
                                   
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No.</th>
                                                    <th>Driver</th>
                                                    <th>Vehicle</th>
                                                    <th>Date</th>
                                                    <th>Riute/Location</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                
                                                    <td><a href="#"><span class="list-enq-name">Domestic Help Services</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>DL 04 CD 8899</td>
                                                     <td>2025-09-01 </td>
                                                    <td>Patna → Gaya</td>
                                                    <td>Completed </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                   
                                                    <td><a href="#"><span class="list-enq-name">Home Appliances Repair & Services</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                     <td>DL 04 CD 8899</td>

                                                    <td>2025-09-01</td>
                                                    <td>Patna → Gaya</td>
                                                    <td>Completed</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><a href="#"><span class="list-enq-name">Packers and Movers</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                     <td>DL 04 CD 8899</td>
                                                    <td>  2025-09-01</td>
                                                    <td>Lucknow → Delhi</td>
                                                    <td>Pending</td>
                                                </tr>
                                                <!-- <tr>
                                                    <td>4
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Security System Dealers</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>DL 04 CD 8899</td>
                                                    <td>Airport Pickup</td>
                                                    <td>Patna → Gaya</td>
                                                    <td>
                                                        2025-09-01
                                                      
                                                    </td>
                                                    <td>
                                                        06:30 – 08:30
                                                       
                                                    </td>
                                                    <td>
                                                     Pending  
                                                    </td>
                                                </tr> -->
                                                <!-- <tr>
                                                    <td>5
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Skin Care & Treatment</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                     <td>DL 04 CD 8899</td>
                                                    <td>Airport Pickup</td>
                                                    <td>Patna → Gaya</td>
                                                    <td>
                                                        2025-09-01
                                                      
                                                    <td>
                                                        06:30 – 08:30
                                                       
                                                    </td>
                                                    <td>
                                                      Pending
                                                    </td>
                                                </tr> -->
                                                <!-- <tr>
                                                    <td>6
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Domestic Help Services</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>DL 04 CD 8899</td>
                                                    <td>Airport Pickup</td>
                                                    <td>Patna → Gaya</td>
                                                    <td>
                                                        2025-09-01
                                                        
                                                    </td>
                                                    <td>
                                                        06:30 – 08:30
                                                    
                                                    </td>
                                                    <td>
                                                        Pending
                                                    </td>
                                                </tr> -->
                                                <!-- <tr>
                                                    <td>7
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Home Appliances Repair & Services</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                     <td>DL 04 CD 8899</td>
                                                    <td>Airport Pickup</td>
                                                    <td>Patna → Gaya</td>
                                                    <td>
                                                        2025-09-01
                                                   
                                                    </td>
                                                    <td>
                                                        06:30 – 08:30
                                                       
                                                    </td>
                                                    <td>
                                                      	Cancelled
                                                    </td>
                                                </tr> -->
                                                <!-- <tr>
                                                    <td>8
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Packers and Movers</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>DL 04 CD 8899</td>
                                                    <td>Airport Pickup</td>
                                                    <td>Patna → Gaya</td>
                                                    <td>
                                                        2025-09-01
                                                        
                                                    </td>
                                                    <td>
                                                        06:30 – 08:30
                                                       
                                                    </td>
                                                    <td>
                                                      Completed
                                                    </td>
                                                </tr> -->
                                                <!-- <tr>
                                                    <td>9
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Security System Dealers</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>DL 04 CD 8899</td>
                                                    <td>Airport Pickup</td>
                                                    <td>Patna → Gaya</td>
                                                    <td>
                                                        2025-09-01
                                                     
                                                    </td>
                                                    <td>
                                                        06:30 – 08:30
                                                       
                                                    </td>
                                                    <td>
                                                        Completed
                                                    </td>
                                                </tr> -->
                                                <!-- <tr>
                                                    <td>10
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Skin Care & Treatment</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>DL 04 CD 8899</td>
                                                    <td>Airport Pickup</td>
                                                    <td>Patna → Gaya</td>
                                                    <td>
                                                        2025-09-01
                                                      
                                                    </td>
                                                    <td>
                                                        06:30 – 08:30
                                                       
                                                    </td>
                                                    <td>
                                                       Completed
                                                    </td>
                                                </tr> -->
                                                <!-- <tr>
                                                    <td>11
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Domestic Help Services</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                     <td>DL 04 CD 8899</td>
                                                    <td>Airport Pickup</td>
                                                    <td>Patna → Gaya</td>
                                                    <td>
                                                        2025-09-01
                                                      
                                                    </td>
                                                    <td>
                                                        06:30 – 08:30
                                                        
                                                    </td>
                                                    <td>
                                                       Completed
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Home Appliances Repair & Services</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                     <td>DL 04 CD 8899</td>
                                                    <td>Airport Pickup</td>
                                                    <td>Patna → Gaya</td>
                                                    <td>
                                                        2025-09-01

                                                    </td>
                                                    <td>
                                                        06:30 – 08:30
                                                        
                                                    </td>
                                                    <td>
                                                       Completed
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>13
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Packers and Movers</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                   <td>DL 04 CD 8899</td>
                                                    <td>Airport Pickup</td>
                                                    <td>Patna → Gaya</td>
                                                    <td>
                                                        2025-09-01
                                                       
                                                    </td>
                                                    <td>
                                                        06:30 – 08:30
                                                       
                                                    </td>
                                                    <td>
                                                       Completed
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>14
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Security System Dealers</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                   <td>DL 04 CD 8899</td>
                                                    <td>Airport Pickup</td>
                                                    <td>Patna → Gaya</td>
                                                    <td>
                                                        2025-09-01
                                                     
                                                    </td>
                                                    <td>
                                                        06:30 – 08:30
                                                        
                                                    </td>
                                                    <td>
                                                     Completed
                                                    </td>
                                                </tr> -->
                                                <!-- <tr>
                                                    <td>15
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Skin Care & Treatment</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>DL 04 CD 8899</td>
                                                    <td>Airport Pickup</td>
                                                    <td>Patna → Gaya</td>
                                                    <td>
                                                        2025-09-01
                                                        
                                                    </td>
                                                    <td>
                                                        06:30 – 08:30
                                                        
                                                    </td>
                                                    <td>
                                                        Completed
                                                    </td>
                                                </tr> -->
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