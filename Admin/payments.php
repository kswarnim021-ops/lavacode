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
                        <li class="active-bre"><a href="#">Driver Payments</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Driver payments</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i
                                            class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="payment_rec.php">Payment Records</a>
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
                                     <form method="post" action="../code/payments_code.php">
    <div class="row">
        <!-- Name Dropdown -->
        <div class="input-field col s6">
            <select class="browser-default" name="driver_id" required>
                <option value="" disabled selected>Select Driver</option>
               <?php 
                $check_driver=mysqli_query($conn,"SELECT * FROM drivers Order BY name ASC");
                while($driver=mysqli_fetch_array($check_driver,MYSQLI_BOTH))
                {
                    ?>
                    <option value="<?php echo $driver['id']?>"><?php echo $driver['name']?></option>
                    <?php
                }
               ?>
            </select>
           
        </div>

        <!-- License Dropdown -->
        <div class="input-field col s6">
            <select class="browser-default" name="license_no" required>
                <option value="" disabled selected>Select License</option>
                <?php
                 $check_license=mysqli_query($conn,"SELECT license_no  FROM drivers Order BY license_no ASC");
                while($license=mysqli_fetch_array($check_license,MYSQLI_BOTH))
                {
                    ?>
                    <option value="<?php echo $license['license_no']?>"><?php echo $license['license_no']?></option>
                    <?php
                }
                ?>
            </select>
          
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6">
            <input name="date" type="date" class="validate" required>
            <label for="time" style="margin-top: -20px;">Date</label>
        </div>
        <div class="input-field col s6">
            <input name="amount" type="number" class="validate" required>
            <label for="city">Amount(&#8377;)</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6">
            <select name="method" required>
                <option value="" disabled selected>--Select--</option>
                <option value="Cash">Cash</option>
                <option value="Bank Transfer">Bank Transfer</option>
                <option value="UPI">UPI</option>
                <option value="Cheque">Cheque</option>
            </select>
            <label>Payment Method</label>
        </div>
        <div class="input-field col s6">
            <input name="note" type="text" class="validate" placeholder="optional note">
            <label for="country">Note</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <input type="submit" name="payment" value="Save Payment" class="waves-effect waves-light btn-large">
            <input type="reset" value="Reset Form" class="waves-effect waves-light btn-large">
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
    <!-- Materialize CSS + jQuery already hona chahiye -->
<script>
    $(document).ready(function(){
        $('select').formSelect();  // Initialize Materialize select
    });
    
</script>

</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/user-all.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Aug 2025 06:22:12 GMT -->

</html>