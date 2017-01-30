<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        
        <a class="navbar-brand" href="admin.php"> Alumni Management System  </a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li >
       
            <!-- <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li> -->
            <li class="m_2"><a href="logout.php?id=<?php echo $usid; ?>"><h3>Logout</h3></a></li>	
         
        </li>
      </ul>
     

      <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
            <li>
              <a href="admin.php">Dashboard</a>
            </li>
            <li>
              <a href="#">  Alumni </a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="admin_2.php"> View Alumni </a>
                  <a href="admin_3.php"> Add Alumni </a>
                </li>
              </ul>

            </li>
            <li>
              <a href="#">  Student </a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="admin_8.php"> View Students </a>
                  <!-- <a href="admin_9.php"> Add Students </a> -->
                </li>
              </ul>

            </li>
            <li>
              <a href="#"> Jobs </a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="admin_6.php"> Add Job </a>
                  <a href="admin_4.php"> View Job </a>
                </li>
              </ul>
              <!-- /.nav-second-level -->
            </li>
            <li>
              <a href="#"> Event</a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="admin_7.php"> Add Event  </a>
                  <a href="admin_5.php"> View Event  </a>
                </li>
              </ul>

            </li>

          </li>
        </ul>
      </div>
      <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
  </nav>