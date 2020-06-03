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
						<center><h1 style="color:#fd5c63;">Create Geofence</h1></center><br><br>
					
				   <!-- <div class="sign-up-row widget-shadow"> -->

				       <form action="geofences/insert" method="post">
					<div class="sign-u">
								<input type="text" name="name" placeholder="Provide Address" required="">
								{{@csrf_field()}}
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="text" name="radius"  placeholder="Set Limit" required="">
						<div class="clearfix"> </div>
					</div>
					
						<div class="clearfix"> </div>
					<div class="sub_home">
							<input type="submit" name="submit" value="Set Now">
						<div class="clearfix"> </div>
					</div>
					
			        	</form>
				   <!-- </div> -->
					
				</div>					
			</div>
		</div>
		</div>
	
	    </div>
		</div>	
		
@include('inc.footer')
	
</body>
</html>