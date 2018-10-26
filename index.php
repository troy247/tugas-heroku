  <!DOCTYPE html>
  <html lang="">
  	<head>
  		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<title>My Web</title>
  
  		<!-- Bootstrap CSS -->
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  		<!-- Google Fonts -->
  		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
  		<!-- Font Awesome -->
  		<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
  		<!-- Style -->
  		<link href='www/css/style.css' rel='stylesheet' type='text/css'>
  
  		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  		<!--[if lt IE 9]>
  			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  		<![endif]-->

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(34.063911, -118.293192), // 3251 W. 6th Street., Suite 420 Los Angeles, CA 90020

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(37.774929, -122.419416),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>
  	</head>
  	<body>
  		<nav id="home" class="navbar navbar-default">
  			<div class="container">
  				<!-- Brand and toggle get grouped for better mobile display -->
  				<div class="navbar-header">
  					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
  						<span class="sr-only">Toggle navigation</span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  					</button>
  					<a class="navbar-brand" href="#">ACE</a>
  				</div>
  		
  				<!-- Collect the nav links, forms, and other content for toggling -->
  				<div class="collapse navbar-collapse navbar-ex1-collapse">
  					<ul class="nav navbar-nav navbar-right">
  						<li><a href="#home">Home</a></li>
  						<li><a href="#about">About Me</a></li>
  					</ul>
  				</div><!-- /.navbar-collapse -->
  			</div>
  		</nav>
		
		<!-- START SECTION -->
  		<div class="section hero big background-brand dark-bg">
  			<div class="background-image" style="background: url(www/images/hero.jpg) no-repeat center center; background-size: cover; opacity: .2;"></div>
  			<div class="container">
  				<div class="row">
  					<div class="col-md-6">
  						<h2>WELCOME TO MY WEB..</h2>
  					</div>
  				</div>
  			</div>
  		</div>
  		<!--/.section -->

  		<!-- START SECTION -->
  		<div id="about" class="section hero background-light">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-6 col-md-offset-6">
  						<h2 class="section-title">ABOUT ME</h2>
  						<table>
  							<tr>
              					<td>Nama</td>
              					<td>: Tri Kurniawan Paputungan</td>
              				</tr>
              				<tr>
              					<td>NIM</td>		
              					<td>: 135410162</td>
              				</tr>
              				<tr>
              					<td>Jurusan &nbsp;</td>	
              					<td>: Teknik Informatika</td>
              				</tr>
              			</table>
  					</div>
  				</div>
  			</div>
        <div class="absolute-md absolute-wrapper zero-col hidden-sm">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-5">
                <div class="background-image" style="background: url(images/about.jpg) no-repeat center center; background-size: cover;"></div>
              </div>
            </div>
          </div>
        </div>
  		</div>
  		<!--/.section -->
      <!-- START SECTION -->
      <div class="section hero background-dark dark-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="section-title">Lorem ipsum dolor</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id ex est. Nullam mattis mauris quis ipsum elementum, ac egestas velit suscipit. Duis condimentum ut enim ac vehicula. Suspendisse hendrerit orci turpis, eget rhoncus nunc hendrerit ut. Quisque nec accumsan nisi. In facilisis erat a leo vehicula tempor. Mauris cursus, ante non ornare tincidunt, dolor dolor luctus enim, quis porttitor diam arcu id purus.</p>
            </div>
          </div>
        </div>
      </div>
      <!--/.section -->

  		

  		<!-- START SECTION -->
  		<div class="section footer background-brand dark-bg">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-3">
  					</div>
  					
  					<div class="col-md-12 margin-top-md text-center letter-spacing-md font-size-sm text-upercase">
  						<p>COPYRIGHT © 2016</p>
  					</div>
  				</div>
  			</div>
  		</div>
  		<!--/.section -->
  
  		<!-- jQuery -->
  		<script src="//code.jquery.com/jquery.js"></script>
  		<!-- Bootstrap JavaScript -->
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  	</body>
  </html>