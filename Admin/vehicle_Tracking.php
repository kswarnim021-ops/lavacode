<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/user-all.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Aug 2025 06:22:11 GMT -->

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
    <style>
        /* Layout */
        .dashboard {
            display: flex;
            flex: 1;
            padding: 20px;
            gap: 20px;
        }

        /* Sidebar (Vehicles) */
        .sidebar {
            width: 280px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 15px;
        }

        .card h2 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #2a5298;
            border-left: 4px solid #2a5298;
            padding-left: 8px;
        }

        .search-box input {
            width: 90%;
            padding: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        .vehicle-card {
            padding: 12px;
            border-radius: 10px;
            background: #f9fafc;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            transition: 0.3s;
        }

        .vehicle-card:hover {
            background: #eef3ff;
            border-color: #2a5298;
        }

        .vehicle-card .top {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .vehicle-card .name {
            font-weight: 600;
            font-size: 15px;
            color: black;
        }

        .status {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .online {
            background: #4caf50;
        }

        .offline {
            background: #f44336;
        }

        .idle {
            background: #ffc107;
        }

        .details {
            font-size: 12px;
            margin-top: 5px;
            color: #555;
        }

        .main {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .map-card {
            flex: 2;
        }

        iframe {
            width: 100%;
            height: 400px;
            border: none;
            border-radius: 12px;
        }
        .info-card .info-item {
      font-size: 14px;
      margin: 8px 0;
    }

    .info-card .info-item span {
      font-weight: 600;
      color: #2a5298;
    }

    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
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
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">Vehicle Live Tracking</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Live Vehicle Monitoring</h4>
                                    <!-- <p>Add Expense</p> -->
                                   

                                </div>
                                <div class="tab-inn">
                                    <div class="dashboard">
                                        <!-- Sidebar -->
                                        <div class="sidebar">
                                            <!-- Search -->
                                            <div class="card search-box">
                                                <h2>Search</h2>
                                                <input type="text" placeholder="Search Vehicle...">
                                            </div>

                                            <!-- Vehicles -->
                                            <div class="card">
                                                <h2>Vehicles</h2>
                                                <div class="vehicle-card">
                                                    <div class="top">
                                                        <span class="name">Truck #101</span>
                                                        <span class="status online"></span>
                                                    </div>
                                                    <div class="details">Driver: Rajesh | Last Update: 2 min ago</div>
                                                </div>
                                                <div class="vehicle-card">
                                                    <div class="top">
                                                        <span class="name">Van #205</span>
                                                        <span class="status idle"></span>
                                                    </div>
                                                    <div class="details">Driver: Amit | Last Update: 5 min ago</div>
                                                </div>
                                                <div class="vehicle-card">
                                                    <div class="top">
                                                        <span class="name">Car #330</span>
                                                        <span class="status offline"></span>
                                                    </div>
                                                    <div class="details">Driver: Sunil | Last Update: 15 min ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- main -->
                                        <div class="main">
                                            <!-- Map -->
                                            <div class="card map-card">
                                                <h2>Live Map</h2>
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.217420529939!2d-122.41941508468202!3d37.774929279759704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c5a3d6abf%3A0x89e6e48e6d20e3!2sSan%20Francisco!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus"
                                                    allowfullscreen="" loading="lazy">
                                                </iframe>
                                            </div>
                                            <!-- Vehicle Info -->
                                            <div class="card info-card">
                                                <h2>Vehicle Details</h2>
                                                <div class="info-item"><span>ID:</span> Truck #101</div>
                                                <div class="info-item"><span>Driver:</span> Rajesh Kumar</div>
                                                <div class="info-item"><span>Status:</span> Online</div>
                                                <div class="info-item"><span>Speed:</span> 60 km/h</div>
                                                <div class="info-item"><span>Fuel Level:</span> 75%</div>
                                                <div class="info-item"><span>Location:</span> Near MG Road, Delhi</div>
                                                <div class="info-item"><span>Last Update:</span> 2 min ago</div>
                                            </div>
                                        </div>
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