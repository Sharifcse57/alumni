


<!DOCTYPE HTML>
<html>
<head>
    <title> Pharmacy Management System </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Bootstrap Core CSS -->
    <link href="csss/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="csss/style.css" rel='stylesheet' type='text/css' />
    <link href="csss/font-awesome.css" rel="stylesheet"> 
    <!-- jQuery -->
    <script src="jss/jquery.min.js"></script>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="jss/bootstrap.min.js"></script>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> Pharmacy Management System  </a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png" alt=""/><span class="badge">9</span></a>
                    <ul class="dropdown-menu">
                        <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>	
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="admin.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i> Pharmacist <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin_pharmacist.php"> Add Phamacist </a>
                                    <a href="admin_view_pharmacist.php"> View Phamacist Info </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i> Manager <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin_manager.php"> Add Manager </a>
                                    <a href="admin_view_manager.php"> View Manager Info </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i> Cashier <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin_cashier.php"> Add Cashier  </a>
                                    <a href="admin_view_cashier.php"> View Cashier Info  </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">
        <div class="graphs">
            <div class="xs">
                <h3>Welcome You to Your Admin Pannel. Now You Can Manage Your User</h3>
            </form>
        </div>
    </div>
    <div class="copy_layout">

    </div>
</div>
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Nav CSS -->
<link href="csss/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="jss/metisMenu.min.js"></script>
<script src="jss/custom.js"></script>
</body>
</html>
