<?php
include 'php/header.php';
include 'php/connect.php';


if (!isset($_GET["id"]))
	header("location: patients.php");

$id = $_GET['id'];


$sql = "SELECT * FROM patients WHERE id = '$id'";
$result = mysqli_query($conn,$sql);
$pacient = mysqli_fetch_assoc($result);

$birthDate = array_reverse(explode("-", $pacient["birth"]));

?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Pacient Detail</title>

</head>

<body>
     <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">Smart Hospital</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title">Události</div>
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div class="notification-list" style="overflow: hidden; width: auto; height: 250px;">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 181.686px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">Zobrazit vše</a></div>
                                </li>
                            </ul>
                        </li>
                        
                        
                    </ul>
                </div>
                </div>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link  collapsed" href="index.php" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-exclamation-circle"></i>Události<span class="badge badge-success">6</span></a>
                                
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="patients.php" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-bed"></i>Pacienti</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="schedule.php" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-list"></i>Rozpis Služeb</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="food.php" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-list"></i>Stravování</a>
                                
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../prihlaseni.php" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fas fa-cog"></i>Log Out</a>
                                
                            </li>
 
                            
                        </ul>
                    </div>
                           
            
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <a href="patients.php" class="btn btn-primary">
                <i class="fa fa-arrow-left fa-lg"></i>
            </a>
                               
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- profile -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- card profile -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="text-center">
                                        <h2><?= $pacient["first_name"] ?> <?= $pacient["last_name"] ?></h2>
                                        
                                    </div>
                                </div>
                                
<div class="card-body border-top">
                                    <h3 class="font-16">Narození</h3>
                                    <div class="">
                                        <ul class="list-unstyled mb-0">
                                        
                                        <li class="mb-0"><i class="fas fa-fw fa-calendar mr-2"></i><?= $pacient["birth"] ?> (věk <?= (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y") - $birthDate[2]) - 1) : (date("Y") - $birthDate[2])); ?>)</li> </ul>
                                    </div>
                                </div><div class="card-body border-top">
                                    <h3 class="font-16">VZP</h3>
                                    <div class="">
                                        <ul class="list-unstyled mb-0">
                                        
                                        <li class="mb-0"><i class="fas fa-fw fa-info-circle mr-2"></i><?= $pacient["vzp"] ?></li>
                                    </ul>
                                    </div>
                                </div>

                                <div class="card-body border-top col-12">
                                <div class="card border-3 border-top border-top-primary" style="border-top-color: #ff0000 !important;">
                                    <div class="card-body">
                                        <h5 class="text-muted">EKG</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1" id="ekg"></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <img src="./assets/images/ekg.gif" style="width: 100%; "> </div>
                                    </div>
                                </div>
                            </div>
                                
                                
                                
                            </div>
                            <!-- ============================================================== -->
                            <!-- end card profile -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- end profile -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- campaign data -->
                        <!-- ============================================================== -->
                        <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- campaign tab one -->
                            <!-- ============================================================== -->
                            <div class="influence-profile-content pills-regular">
                                
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                                        
                                        <div class="section-block">
                                            <h3 class="section-title">Ubytování</h3>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="media influencer-profile-data d-flex align-items-center p-2">
                                                            <div class="mr-4">
                                                                
                                                            </div>
                                                            <div class="media-body ">
                                                                <div class="influencer-profile-data">
                                                                    <h3 class=" m-b-10">Pokoj č. <?= $pacient["room_number"] ?> 

<a href="detail.php?id=1" class="float-right btn btn-warning" style="
    font-size: 14px;
    padding: 10px 13px;
    border-radius: 5px;
">
                <i class="fa fa-edit fa-lg"></i>
            </a>
</h3>
                                                                    <p>
                                                                        <span class="m-r-20 d-inline-block">Postel <span class="m-l-10 text-primary"><?= $pacient["unit_id"] ?></span>
                                                                        </span>
                                                                        
                                                                            
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row"><div class="card-body col-6">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Teplota Místnosti</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1" id="temp"></h1>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div><div class="card-body col-6">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Vlhkost Vzduchu</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1" id="hum"></h1>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                    </div>
                                   
                                    
                                </div>
                            </div><div class="influence-profile-content pills-regular">
                                
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                                        
                                        <div class="section-block">
                                            <h3 class="section-title">Důvod hospitalizace a léčba</h3>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="media influencer-profile-data d-flex align-items-center p-2">
                                                            <div class="mr-4">
                                                                
                                                            </div>
                                                            <div class="media-body ">
                                                                <div class="influencer-profile-data">
                                                                    <h3 class="m-b-10"><?= $pacient["reason"] ?>
<a href="detail.php?id=1" class="float-right btn btn-warning" style="
    font-size: 14px;
    padding: 10px 13px;
    border-radius: 5px;
">
                <i class="fa fa-edit fa-lg"></i>
            </a>


</h3>
                                                                    <p>
                                                                        <span class="m-r-20 d-inline-block"><span class="m-l-10 text-primary"><?= $pacient["treatment"] ?>
   </span>
                                                                        </span>
                                                                        
                                                                            
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                    </div>
                                   
                                </div>
                            </div><div class="influence-profile-content pills-regular">
                                
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                                        
                                        <div class="section-block">
                                            <h3 class="section-title">Ostatní informace</h3>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="media influencer-profile-data d-flex align-items-center p-2">
                                                            <div class="mr-4">
                                                                
                                                            </div>
                                                            <div class="media-body ">
                                                                <div class="influencer-profile-data">
                                                                    <h3 class="m-b-10">Dieta

<a href="detail.php?id=1" class="float-right btn btn-warning" style="
    font-size: 14px;
    padding: 10px 13px;
    border-radius: 5px;
">
                <i class="fa fa-edit fa-lg"></i>
            </a>
</h3>
                                                                    <p>
                                                                        <span class="m-r-20 d-inline-block"><?= $pacient["diet"] ?></span>
                                                                        
                                                                            
                                                                    </p>
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
                            <!-- ============================================================== -->
                            <!-- end campaign tab one -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- end campaign data -->
                        <!-- ============================================================== -->
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>



    <script type="text/javascript">
    	
		$(document).ready(function($) {

	    	var updateStats =  function () {
	    		console.log("gettingdata");
	    		$.ajax({
					  url: "./php/getdata.php?id=<?= $pacient['id'] ?>"
				})
				.done(function( data ) {
				      data = data.split(",");
				      $("#temp").text(data[0]);
				      $("#hum").text(data[1]);
				      $("#ekg").text(data[2]);
				});
	    	}

	    	setInterval(updateStats, 2000);

	    	
		});

    </script>
</body>
 
</html>