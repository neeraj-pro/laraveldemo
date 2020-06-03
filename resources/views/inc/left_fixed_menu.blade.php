<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            
            <a href="index.php"><img src="{{url('/images/companies_logo/logo5.PNG')}}" width="100%" height="100px" /></a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <!--<li class="header">MAIN NAVIGATION</li>-->
               <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Home</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="about_us.php"><i class="fa fa-angle-right"></i>About Us</a></li>
                  <li><a href="contact_us.php"><i class="fa fa-angle-right"></i>Contact Us</a></li>
                  <li><a href="feedback.php"><i class="fa fa-angle-right"></i>FeedBack</a></li>
                </ul>
              </li>
              
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Geofence</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ URL('/geofences') }}"></i>Create Geofenc</a></li> 
                  <li><a href="{{ URL('/geofences/view') }}"></i>View Geofenc</a></li>
                  <li><a href="{{ URL('/geofences/check') }}"></i>Check Geofenc</a></li>
                </ul>
              </li>
              
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Speed</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="create_speed.php"><i class="fa fa-angle-right"></i>Create Speed</a></li>
                  <li><a href="view_speed.php"><i class="fa fa-angle-right"></i>  View   Speed</a></li>
                  <li><a href="check_speed.php"><i class="fa fa-angle-right"></i> Check  Speed</a></li>
                </ul>
              </li>
              
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Brake Oil Status</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="create_oil.php"><i class="fa fa-angle-right"></i>Create Oil</a></li>
                  <li><a href="view_oil.php"><i class="fa fa-angle-right"></i>  View   Oil</a></li>
                  <li><a href="check_oil.php"><i class="fa fa-angle-right"></i> Check  Oil</a></li>
                </ul>
              </li>
              
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Seat Belt Status</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="view_seatbelt.php"><i class="fa fa-angle-right"></i>  View Seat Belt Status</a></li>
                  <!--<li><a href="check_seatbelt.php"><i class="fa fa-angle-right"></i> Check  Oil</a></li>-->
                </ul>
              </li>
              
              
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Coolant</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <!--<li><a href="create_oil.php"><i class="fa fa-angle-right"></i>Create Oil</a></li>-->
                  <li><a href="view_coolant.php"><i class="fa fa-angle-right"></i>  View Coolant Status</a></li>
                  <!--<li><a href="check_oil.php"><i class="fa fa-angle-right"></i> Check  Oil</a></li>-->
                </ul>
              </li>
             
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>AC Status</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <!--<li><a href="create_oil.php"><i class="fa fa-angle-right"></i>Create Oil</a></li>-->
                  <li><a href="view_ac.php"><i class="fa fa-angle-right"></i>  View AC Status</a></li>
                  <!--<li><a href="check_oil.php"><i class="fa fa-angle-right"></i> Check  Oil</a></li>-->
                </ul>
              </li>
              
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Engine Tempreture</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <!--<li><a href="create_oil.php"><i class="fa fa-angle-right"></i>Create Oil</a></li>-->
                  <li><a href="view_ac.php"><i class="fa fa-angle-right"></i>View Engine Tempreture Status</a></li>
                  <!--<li><a href="check_oil.php"><i class="fa fa-angle-right"></i> Check  Oil</a></li>-->
                </ul>
              </li>
              
               <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Any Malfunction</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <!--<li><a href="create_oil.php"><i class="fa fa-angle-right"></i>Create Oil</a></li>-->
                  <li><a href="view_ac.php"><i class="fa fa-angle-right"></i>View Any Malfunction Status</a></li>
                  <!--<li><a href="check_oil.php"><i class="fa fa-angle-right"></i> Check  Oil</a></li>-->
                </ul>
              </li>
              
              <li class="treeview">
                <a href="more_links.php">
                <i class="fa fa-pie-chart"></i>
                <span>Our Services</span>
                <span class="label label-primary pull-right">new</span>
                </a>
              </li>
              
              
              <li class="treeview">
                <a href="more_links.php">
                <i class="fa fa-pie-chart"></i>
                <span>Our Services</span>
                <span class="label label-primary pull-right">new</span>
                </a>
              </li>
             
             
             
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>