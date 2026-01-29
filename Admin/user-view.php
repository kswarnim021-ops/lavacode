<?php
 session_start();
include 'code/db_connect.php';

if (!isset($_GET['id'])) {
    die("Driver ID not specified.");
}

$id = (int)$_GET['id'];

// Fetch driver details
$stmt = $conn->prepare("SELECT * FROM drivers WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die("Driver not found.");
}

$driver = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/user-view.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Aug 2025 06:22:17 GMT -->

<head>
    <title>Lava Material - Web Application and Website Multipurpose Admin Panel Template</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <style>
        .img-section {
            display: flex;
            justify-content: center;
            box-shadow: none;
            padding: 15px;
        }

        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;


        }
    </style>
</head>

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
                        <li class="active-bre"><a href="#"> Ui Form</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>View Driver Details</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                </div>
                                <div class="tab-inn">
                                    <div class="box">
                                        <div class="line"></div>
                                        <div class="profile-container">
                                            <div class="profile-card">
                                                <div class="profile-image">
                                                    <img src="assets/images/driver_image/<?php echo !empty($driver['profile_image']) ? htmlspecialchars($driver['profile_image']) : 'images/avatar.png'; ?>" alt="Profile Photo">
                                                </div>
                                                <div class="profile-info">
                                                    <h1 class="name"><?php echo htmlspecialchars($driver['name']); ?></h1>
                                                    <p class="info"><strong>Email:</strong> <?php echo htmlspecialchars($driver['email']); ?></p>
                                                    <p class="info"><strong>Phone:</strong> <?php echo htmlspecialchars($driver['phone']); ?></p>
                                                    <p class="info"><strong>Address:</strong> <?php echo htmlspecialchars($driver['address']); ?></p>
                                                    <p class="info"><strong>Driving License No:</strong> <?php echo htmlspecialchars($driver['license_no']); ?></p>
                                                </div>

                                                <a href="user-edit.php?id=<?php echo $driver['id']; ?>" class="btn"><i class="fa fa-pencil-alt"></i> Edit</a>
                                                <a href="user_all.php" class="btn"><i class="fa fa-arrow-left"></i> Back</a>
                                            </div>
                                        </div>
                                        <!-- upload imgage -->
                                        <div class="upload-doc">
                                            <div class="card" style="width:20rem;" onclick="openModal()">
                                                <img src="assets/images/driver_license/<?php echo $driver['license_image']?>" id="license-img" class="card-img-overlay" alt="dl"
                                                    style="width: 18rem;">

                                            </div>
                                        </div>
                                        <!-- Modal -->
                                        <div id="modal" class="modal">
                                            <span class="close" onclick="closeModal()">&times;</span>
                                            <img class="modal-content" id="modal-img">
                                        </div>



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
        <script>
            function openModal() {
                const modal = document.getElementById("modal");
                const modalImg = document.getElementById("modal-img");
                const licenseImg = document.getElementById("license-img");

                modal.style.display = "block";
                modalImg.src = licenseImg.src;
            }

            function closeModal() {
                document.getElementById("modal").style.display = "none";
            }

            // Close on outside click
            window.onclick = function(event) {
                const modal = document.getElementById("modal");
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            }
        </script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/user-view.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Aug 2025 06:22:17 GMT -->

</html>