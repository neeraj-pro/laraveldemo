@include('inc.header')

<body class="cbp-spmenu-push">
	<div class="main-content">
	    
    @include('inc.left_fixed_menu')
	
		<!--left-fixed -navigation-->
		
        <!-- header-starts -->
        
    @include('inc.header_menu')
	
		<!-- //header-ends -->
		
		
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	
					
	
	<!-- for amcharts js -->
			<script src="js/amcharts.js"></script>
			<script src="js/serial.js"></script>
			<script src="js/export.min.js"></script>
			<link rel="stylesheet" href="css/export.css" type="text/css" media="all" />
			<script src="js/light.js"></script>
	<!-- for amcharts js -->

    <script  src="js/index1.js"></script>
	
		<div class="charts">		
			<div class="mid-content-top charts-grids">
				<div class="middle-content">
						<center><h1 style="color:#fd5c63;">Main Menu</h1></center><br><br>
					<!-- start content_slider -->
					<div id="owl-demo" class="owl-carousel text-center">
						<div class="item">
						<a href="geofence.php"><img class="lazyOwl img-responsive" data-src="images/geofence.png" alt="name"><br><h4>Geofence Deatils</h4><br>
							<p>some text some text some text some text</p></a>
						</div>
						<div class="item">
						<a href="brake_oil.php"><img class="lazyOwl img-responsive" data-src="images/brake_oil.png" alt="name"><br><h4>Brake Oil Status</h4><br>
							<p>some text some text some text some text</p></a>
						</div>
						<div class="item">
						<a href="engine.php">	<img class="lazyOwl img-responsive" data-src="images/engine.png" alt="name"><br><h4>Engine Tempreture</h4><br>
							<p>some text some textsome text some text</p></a>
						</div>
						<div class="item">
						<a href="coolant.php"><img class="lazyOwl img-responsive" data-src="images/coolant.jpg" alt="name"><br><h4>Coolant Status</h4><br>
							<p>Some Text Some Text Some Text Some Text</p></a>
						</div>
						<div class="item">
						<a href="seat_belt.php"><img class="lazyOwl img-responsive" data-src="images/seat_belt.jpg" alt="name"><br><h4>Seat Belt Status</h4><br>
							<p>Some Text Some Text Some Text Some Text </p></a>
						</div>
						<div class="item">
						<a href="ac.php"><img class="lazyOwl img-responsive" data-src="images/ac.jpg" alt="name"><br><h4>AC Status</h4><br>
							<p>Some Text Some Text Some Text Some Text </p></a>
						</div>
						<div class="item">
						<a href="mal.php">	<img class="lazyOwl img-responsive" data-src="images/mal.jpg" alt="name"><br><h4>Malfunction Details If Any</h4><br>
							<p>Some Text Some Text Some Text Some Text </p></a>
						</div>
						<div class="item">
						<a href="speed.php"><img class="lazyOwl img-responsive" data-src="images/speed.jpg" alt="name"><br><h4>Speed Details</h4><br>
							<p>Some Text Some Text Some Text Some Text Some</p></a>
						</div>
					</div>
				</div>
					<!--//sreen-gallery-cursual---->
			</div>
		</div>
		</div>
	
	    </div>
		</div>	
		
@include('inc.footer')
	
</body>
</html>