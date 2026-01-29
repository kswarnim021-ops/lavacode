<?php
  include("csslinks.php");
 include("../Admin/code/db_connect.php");
  if(isset($_REQUEST['id'])) {
  
    $id = $_REQUEST['id'];
    // Fetch existing driver details
        $select = "SELECT * FROM drivers WHERE id='$id'";
        $result = mysqli_query($conn, $select);
        $driver = mysqli_fetch_array($result, MYSQLI_BOTH);
       
        if(isset($_POST['upd_btn'])) {
    
     
        // Retrieve form data
         $name=$_POST['name'];
        $phone=$_POST['phone'];
        $license_no=$_POST['license_no'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $address=$_POST['address'];

       

   // Profile Image
$profile_image = $driver['profile_image'];
if (!empty($_FILES['profile_image']['name'])) {
    $target_dir = "assets/images/driver_image/"; // folder jaha upload karna hai
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true); // folder banado agar nahi hai
    }
    $profile_image = time() . "_" . basename($_FILES['profile_image']['name']);
    if (!move_uploaded_file($_FILES['profile_image']['tmp_name'], $target_dir . $profile_image)) {
        die("Error: Profile image not uploaded. Code: " . $_FILES['profile_image']['error']);
    }
}

// License Image
  $license_image = $driver['license_image'];
if (!empty($_FILES['license_image']['name'])) {
    $target_dir = "assets/images/driver_license/"; // folder jaha upload karna hai
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $license_image =  time() . "_" . basename($_FILES['license_image']['name']);
    if (!move_uploaded_file($_FILES['license_image']['tmp_name'],  $target_dir .$license_image)) {
        die("Error: License image not uploaded. Code: " . $_FILES['license_image']['error']);
    }
}

         //update query
        
            $update = "UPDATE drivers SET name='$name', phone='$phone', license_no='$license_no', password='$password', email='$email', address='$address', profile_image='$profile_image', license_image='$license_image' WHERE id='$id'";
            if(mysqli_query($conn, $update)) {
                echo "<script>alert('Driver Details Updated Successfully'); window.location.href='user-all.php';</script>";
            } else {
                echo "<script>alert('Error Occurred'); window.location.href='user-edit.php?id=$id';</script>";
            }
        }   
  }
?>

<body>
    <!--== MAIN CONTRAINER ==-->
    
<?php include 'topbar.php'; ?>
    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
              <?php include 'sidebar.php'; ?> 
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Ui Form</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Edit Driver Details</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                </div>
                                <div class="tab-inn">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                 <input id="first_name" type="text" name="name" value="<?php echo htmlspecialchars($driver['name']); ?>" class="validate" required>
                                                <label for="first_name">Name</label>
                                            </div>
                                           <div class="input-field col s6">
                                                <input id="phone" type="text" value="<?php echo htmlspecialchars($driver['phone']); ?>" name="phone" class="validate">
                                                <label for="phone">Phone</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                             <div class="input-field col s6">
                                                <input id="city" type="text" value="<?php echo htmlspecialchars($driver['license_no']); ?>" name="license_no" class="validate">
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
                                                <input id="password" type="password" value="<?php echo htmlspecialchars($driver['password']); ?>" name="password" class="validate">
                                                <label for="password">Password</label>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" value="<?php echo htmlspecialchars($driver['email']); ?>" name="email" class="validate">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="address" type="text" value="<?php echo htmlspecialchars($driver['address']); ?>" name="address" class="validate">
                                                <label for="aadress">Address</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="input-field col s6">
                                            <img src="../Admin/assets/images/driver_image/<?php echo htmlspecialchars($driver['profile_image']); ?>" alt="profile-pic" style="max-width:150px;">
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
                                            <img src="../Admin/assets/images/driver_license/<?php echo htmlspecialchars($driver['license_image']); ?>" alt="DL" style="max-width:150px;">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>File</span>
                                                    <input type="file" name="license_image">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" placeholder="Upload Driving License" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" name="upd_btn" class="waves-effect waves-light btn-large">
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

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/user-edit.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Aug 2025 06:22:17 GMT -->
</html>