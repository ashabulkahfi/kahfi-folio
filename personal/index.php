
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>KAHFI PORTOFOLIO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>

	<?php
	function getAge($then) {
		$then = date('Ymd', strtotime($then));
		$diff = date('Ymd') - $then;
		return substr($diff, 0, -4);
	}
	?>
	<body style="background-image: url(images/bg_img.jpg);">
	
	<div id="fh5co-main">
		<div class="fh5co-tab-wrap">
			<ul class="fh5co-tab-menu">
				<li class="active"><a href="#" data-tab="1"><span class="icon icon-glass"></span><span class="menu-text">Profile</span></a></li>
				<li><a href="#" data-tab="2"><span class="icon icon-graduation-cap"></span><span class="menu-text">Education</span></a></li>
				<li><a href="#" data-tab="3"><span class="icon icon-black-tie"></span><span class="menu-text">Experience</span></a></li>
				<li><a href="#" data-tab="4" data-pie="yes"><span class="icon icon-fighter-jet"></span><span class="menu-text">Skills</span></a></li>
				<li><a href="#" data-tab="5"><span class="icon icon-gamepad"></span><span class="menu-text">Portofolio</span></a></li>
			</ul>
			<div class="fh5co-tab-content active" data-content="1">
				<div class="fh5co-content-inner text-center">
					<div class="row row-bottom-padded-sm">
						<div class="col-md-12">
							<figure>
								<img src="images/oldprofile_img.png" width="150" alt="Ashabul Kahfi" style="border-radius: 5px;">
							</figure>
							<h1>Ashabul Kahfi</h1>
							<p>Born and raised in <a href="#">Palopo, South Sulawesi in 1993</a>. moved in to Jakarta in 2011 due to continue my study at a private college. And I started my professional career as a programmer in 2015.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 fh5co-counter">
							<div class="fh5co-number fh5co-left"><?php 
							$age = '2015-06-01';
							$nowdate = date('Ymd', strtotime($age));
							$diff = date('Ymd') - $nowdate;
							$res = substr($diff, 0, - 4);
							echo $res;
							?></div>
							<div class="fh5co-text">
								<h3 class="border-bottom">Years of experience</h3>
								<h3 class="border-bottom">in Web Developer.</h3>
							</div>
						</div>
					</div>
					<ul class="fh5co-social">
						<li><a href="mailto:ashabul.kahfi@gmail.com" target="_blank"><i class="icon-envelope"></i></a></li>
						<li><a href="https://twitter.com/ashabulkahfi_y" target="_blank"><i class="icon-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/ashabulkahfi_y/" target="_blank"><i class="icon-instagram"></i></a></li>
						<!-- <li><a href="#"><i class="icon-google"></i></a></li> -->
						<li><a href="https://www.linkedin.com/in/ashabulkahfi/" target="_blank"><i class="icon-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="fh5co-tab-content" data-content="2">
				<div class="fh5co-content-inner">
					<div class="row">
						<div class="col-md-12">
							<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-graduation-cap"></i>
								</div>
								<div class="fh5co-text">
									<h2>1999-2005</h2>
									<p>SD Negeri 81 Langkanae.</p>
								</div>
							</div>

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-graduation-cap"></i>
								</div>
								<div class="fh5co-text">
									<h2>2005-2008</h2>
									<p>SMP Negeri 3 Palopo.</p>
								</div>
							</div>

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-graduation-cap"></i>
								</div>
								<div class="fh5co-text">
									<h2>2008-2011</h2>
									<p>SMA Negeri 1 Palopo.</p>
								</div>
							</div>

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-graduation-cap"></i>
								</div>
								<div class="fh5co-text">
									<h2>2011-2015</h2>
									<p>Informatics Engineering, Sekolah Tinggi Teknik-PLN Jakarta.</p>
								</div>
							</div>

						</div>
						
					</div>
				</div>
			</div>
			<div class="fh5co-tab-content" data-content="3">
				<div class="fh5co-content-inner">
					<div class="row">
						<div class="col-md-12">

							<p>I have the privilege to work with these cool companies.</p>

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-black-tie"></i>
								</div>
								<div class="fh5co-text">
									<h2>2021 - Present</h2>
									<h3>PT. Sucofindo(PERSERO).</h3>
									<p>As Web Programmer</p>
								</div>
							</div>

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-black-tie"></i>
								</div>
								<div class="fh5co-text">
									<h2>2020-2021</h2>
									<h3>PT. Sucofindo Episi.</h3>
									<p>As Web Programmer</p>
								</div>
							</div>

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-black-tie"></i>
								</div>
								<div class="fh5co-text">
									<h2>2018-2020</h2>
									<h3>PT. PNM(PERSERO).</h3>
									<p>As Web and Android Programmer</p>
								</div>
							</div>

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-black-tie"></i>
								</div>
								<div class="fh5co-text">
									<h2>2015-2018</h2>
									<h3>PT. AMP Securetech.</h3>
									<p>As Programmer</p>
								</div>
							</div>

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-black-tie"></i>
								</div>
								<div class="fh5co-text">
									<h2>2015</h2>
									<h3>Pusat Pendidikan dan Pelatihan PLN Coorporate Univeristy.</h3>
									<p>As Web developer Freelance</p>
								</div>
							</div>

							<div class="fh5co-feature">
								<div class="fh5co-icon">
									<i class="icon-black-tie"></i>
								</div>
								<div class="fh5co-text">
									<h2>2015</h2>
									<h3>PT. PLN Persero Area Cengkareng.</h3>
									<p>Internship Employee</p>
								</div>
							</div>

						</div>
						
					</div>
				</div>
			</div>
			<div class="fh5co-tab-content" data-content="4">
				<div class="fh5co-content-inner">
					<div class="row">
						<div class="col-md-12">
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="90"><span><strong>HTML5</strong>90%</span></div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="90"><span><strong>CSS</strong>90%</span></div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="90"><span><strong>jQuery</strong>90%</span></div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="90"><span><strong>PHP</strong>90%</span></div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="85"><span><strong>MySQL</strong>85%</span></div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="90"><span><strong>React Native</strong>90%</span></div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="95"><span><strong>CodeIgniter</strong>90%</span></div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="95"><span><strong>Laravel</strong>90%</span></div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center">
							<div class="chart" data-percent="70"><span><strong>AngularJS</strong>70%</span></div>
						</div>

					</div>
				</div>
			</div>
			<div class="fh5co-tab-content" data-content="5">
				<div class="fh5co-content-inner">
					<div class="row">
						<div class="col-md-12" style="text-align: center;">
							<a href="../index.php"><button class="btn btn-primary">GO TO PORTOFOLIO</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="fh5co-footer">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<small>
						&copy; 2021 Personal Portofolio. All Rights Reserved.
					</small>
				</div>
			</div>
		</footer>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Easy PieChart -->
	<script src="js/jquery.easypiechart.min.js"></script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

