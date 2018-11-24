<?php
include 'php/header.php';
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
    <title>Smart Hospital na kraji města</title>
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
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Pacient 25/5  </span> potřebuje Vaši pomoc!!
                                                        <div class="notification-date">30 seconds ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Pacient 18/3 </span> má zvýšený tep
                                                        <div class="notification-date">12 minutes ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Pacient 77/11</span> žádá sestru o asistenci
                                                        <div class="notification-date">24 minutes ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Pacient 69/7</span> má dostat obvyklé léky
                                                        <div class="notification-date">36 minutes ago</div>
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
                                <a class="nav-link" href="food.php" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-utensil-spoon"></i>Stravování</a>
                                
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
                <div class="container-fluid  dashboard-content">
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
             
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Zadejte informace o pacientovi</h5>
                                <div class="card-body">

                                    <form class="needs-validation" novalidate="" action="php/newpatient.php" method="POST">
                                        <div class="row"><div class="form-group col-12">
                                            <label for="inputUserName">Křestní Jméno</label>
                                            <input name="first" id="inputUserName" type="text" data-parsley-trigger="change" required="" placeholder="Vložte křestní jméno pacienta" autocomplete="off" class="form-control">
                                        </div><div class="form-group col-12">
                                            <label for="inputUserName">Příjmení</label>
                                            <input name="last" id="inputUserName" type="text" data-parsley-trigger="change" required="" placeholder="Vložte příjmení pacienta" autocomplete="off" class="form-control">
                                        </div><div class="form-group col-12">
                                            <label for="inputUserName">Datum narození</label>
                                            <input name="birth" id="inputUserName" type="date" data-parsley-trigger="change" required="" placeholder="Datum narození pacienta ve formátu dd/mm/rrrr/" autocomplete="off" class="form-control">
                                        </div><div class="form-group col-12">
                                            <label for="inputUserName">Důvod Hospitalizace</label>
                                            <input name="reason" id="inputUserName" type="text" data-parsley-trigger="change" required="" placeholder="Napište důvod přijetí pacienta" autocomplete="off" class="form-control">
                                        </div><div class="form-group col-12">
                                            <label for="inputUserName">VZP</label>
                                            <input name="vzp" id="inputUserName" type="text" data-parsley-trigger="change" required="" placeholder="Napište pacientovu pojišťovnu" autocomplete="off" class="form-control">
                                        </div><div class="form-group col-12">
                                            <label for="inputUserName">Číslo pokoje</label>
                                            <input name="room_number" id="inputUserName" type="text" data-parsley-trigger="change" required="" placeholder="Na kterém pokoji bude pacient ubytován" autocomplete="off" class="form-control">
                                        </div>

<div class="form-group col-12">
                                            <label for="inputUserName">Léčba</label>
                                            <input name="treatment" id="inputUserName" type="text" data-parsley-trigger="change" required="" placeholder="Napište první léčbu, která bude aplikována" autocomplete="off" class="form-control">
                                        </div>
<div class="form-group col-12">
                                            <label for="inputUserName">Stravování</label>
                                            <input name="diet" id="inputUserName" type="text" data-parsley-trigger="change" required="" placeholder="Napište zda bude pacient potřebovat speciální úpravu stravy" autocomplete="off" class="form-control">
                                        </div>
<div class="form-group col-12">
                                            <label for="inputUserName">Komentář</label>
                                            <input name="comment" id="inputUserName" type="text" data-parsley-trigger="change" required="" placeholder="Napište cokoliv co je potřebova o pacientovi vědět" autocomplete="off" class="form-control">
                                        </div>

    
                                            
                                            
                                          
    
                                        </div>
                                        <div class="form-row">
                                            
                                            
                                            
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </div>
                                        </div>
                                    </form>
    
                                            
                                            
                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
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
</body>
 
</html>