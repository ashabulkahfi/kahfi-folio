<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Metro, a sleek, intuitive, and powerful framework for faster and easier web development for Windows Metro Style.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='../favicon.ico' />
    <title>KAHFI PORTOFOLIO - SUCOFINDO</title>

    <link href="assets/docs/css/metro.css" rel="stylesheet">
    <link href="assets/docs/css/metro-icons.css" rel="stylesheet">
    <!--<link href="assets/docs/css/metro-responsive.css" rel="stylesheet">-->

    <script src="assets/docs/js/jquery-2.1.3.min.js"></script>
    <script src="assets/docs/js/metro.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?sensor=false"></script>

    <style>
		.dialog{
			width:50% !important;
			height:30% !important;
		}
		.textImage{
			position: relative;
			text-align: center;
			z-index: 999;
			top: 70px;
			font-size: 18px;
			left: 32%;
			color: white;
			font-weight: 600;
			text-shadow: 0 0 WHITE;    
			background: #00000030;
			padding: 2px;
			padding-left: 10px;
			border-radius: 5px;
			padding-right: 12px;
		}
		.customImg{
			margin-top: -20px;
		}
		.tile-content{
			opacity:0.3;
		}
        .tile-area-controls {
            position: fixed;
            right: 40px;
            top: 40px;
        }

        .tile-group {
            left: 100px;
        }

        .tile, .tile-small, .tile-sqaure, .tile-wide, .tile-large, .tile-big, .tile-super {
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }

        #charmSettings .button {
            margin: 5px;
        }

        .schemeButtons {
            /*width: 300px;*/
        }

        @media screen and (max-width: 640px) {
            .tile-area {
                overflow-y: scroll;
            }
            .tile-area-controls {
                display: none;
            }
        }

        @media screen and (max-width: 320px) {
            .tile-area {
                overflow-y: scroll;
            }

            .tile-area-controls {
                display: none;
            }

        }
    </style>

    <script>

        /*
         * Do not use this is a google analytics fro Metro UI CSS
         * */
        if (window.location.hostname !== 'localhost') {

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-58849249-3', 'auto');
            ga('send', 'pageview');

        }

    </script>

    <script>
        (function($) {
            $.StartScreen = function(){
                var plugin = this;
                var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

                plugin.init = function(){
                    setTilesAreaSize();
                    if (width > 640) addMouseWheel();
                };

                var setTilesAreaSize = function(){
                    var groups = $(".tile-group");
                    var tileAreaWidth = 80;
                    $.each(groups, function(i, t){
                        if (width <= 640) {
                            tileAreaWidth = width;
                        } else {
                            tileAreaWidth += $(t).outerWidth() + 80;
                        }
                    });
                    $(".tile-area").css({
                        width: tileAreaWidth
                    });
                };

                var addMouseWheel = function (){
                    $("body").mousewheel(function(event, delta, deltaX, deltaY){
                        var page = $(document);
                        var scroll_value = delta * 50;
                        page.scrollLeft(page.scrollLeft() - scroll_value);
                        return false;
                    });
                };

                plugin.init();
            }
        })(jQuery);

        $(function(){
            $.StartScreen();

            var tiles = $(".tile, .tile-small, .tile-sqaure, .tile-wide, .tile-large, .tile-big, .tile-super");

            $.each(tiles, function(){
                var tile = $(this);
                setTimeout(function(){
                    tile.css({
                        opacity: 1,
                        "-webkit-transform": "scale(1)",
                        "transform": "scale(1)",
                        "-webkit-transition": ".3s",
                        "transition": ".3s"
                    });
                }, Math.floor(Math.random()*500));
            });

            $(".tile-group").animate({
                left: 0
            });
        });

        $(function(){
            var current_tile_area_scheme = localStorage.getItem('tile-area-scheme') || "tile-area-scheme-dark";
            $(".tile-area").removeClass (function (index, css) {
                return (css.match (/(^|\s)tile-area-scheme-\S+/g) || []).join(' ');
            }).addClass(current_tile_area_scheme);

            $(".schemeButtons .button").hover(
                    function(){
                        var b = $(this);
                        var scheme = "tile-area-scheme-" +  b.data('scheme');
                        $(".tile-area").removeClass (function (index, css) {
                            return (css.match (/(^|\s)tile-area-scheme-\S+/g) || []).join(' ');
                        }).addClass(scheme);
                    },
                    function(){
                        $(".tile-area").removeClass (function (index, css) {
                            return (css.match (/(^|\s)tile-area-scheme-\S+/g) || []).join(' ');
                        }).addClass(current_tile_area_scheme);
                    }
            );

            $(".schemeButtons .button").on("click", function(){
                var b = $(this);
                var scheme = "tile-area-scheme-" +  b.data('scheme');

                $(".tile-area").removeClass (function (index, css) {
                    return (css.match (/(^|\s)tile-area-scheme-\S+/g) || []).join(' ');
                }).addClass(scheme);

                current_tile_area_scheme = scheme;
                localStorage.setItem('tile-area-scheme', scheme);

                showSettings();
            });
        });
    </script>

</head>
<body style="overflow-y: hidden;">
    <div class="tile-area tile-area-scheme-dark fg-white" style="height: 100%; max-height: 100% !important;background-image: url('assets/img/background.png');background-size:contain;">
        <h1 class="tile-area-title">Kahfi Dashboard</h1>
        <div class="tile-area-controls">
            <a href="./personal"><button class="image-button icon-right bg-transparent bg-hover-dark no-border"><span class="sub-header no-margin text-light">Ashabul Kahfi</span> <span class="icon mif-user"></span></button></a>
			<a href="http://localhost/phpmyadmin" target="_blank" class="square-button bg-transparent bg-hover-dark no-border" style="color: black;"><span class="mif-database"></span></a>
			<a href="http://10.110.1.192/dbm" target="_blank" alt="http://10.110.1.192/dbm" class="square-button bg-transparent bg-hover-dark no-border" style="color: white;background: #09ca09;"><span class="mif-database"></span></a>
			<!--a href="http://localhost/phpmyadmin" target="_blank" class="square-button bg-transparent bg-hover-dark no-border" style="color: white;background: #097dca;"><span class="mif-database"></span></a-->
        </div>
		
        <div class="tile-group double">
            <span class="tile-group-title">E-OFFICE</span>
			<?php
				$url_local = 'http://localhost/eoffice/index.php/login';
				$url_dev_110 = 'http://10.110.1.192/eoffice/index.php/login';
				$url_prod = 'https://eoffice.sucofindo.co.id/';
			?>
			<br>
            <div class="tile-container">
                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #3053a4 !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/1.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/2.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/3.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/4.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/5.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/6.png" data-role="fitImage" data-format="fill"></a>
                    </div>
					<span class="textImage" style="">E-OFFICE</span>
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Localhost</div>
                </div> 

                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #3053a4 !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/1.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/2.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/3.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/4.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/5.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/6.png" data-role="fitImage" data-format="fill"></a>
                    </div>
					<span class="textImage" style="">E-OFFICE</span>
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Development 10.110.1.192</div>
                </div> 		

                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #3053a4 !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/1.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/2.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/3.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/4.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/5.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/eoffice/6.png" data-role="fitImage" data-format="fill"></a>
                    </div>
					<span class="textImage" style="">E-OFFICE</span>
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Production</div>
                </div>
            </div>
			
        </div>
		
        <div class="tile-group double">
            <span class="tile-group-title">Tindak Lanjut Rapat</span>
			<?php
				$url_local = 'http://localhost/tindaklanjutrapat/index.php/login';
				$url_dev = '#';
				$url_prod = 'https://tlrapat.sucofindo.co.id/';
			?>
			<br>
            <div class="tile-container">
                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #3053a4 !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/tindaklanjutrapat/1.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/tindaklanjutrapat/2.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/tindaklanjutrapat/3.png" data-role="fitImage" data-format="fill"></a>
                    </div>
					<span class="textImage" style="left: 20% !important;">Tindak Lanjut Rapat</span>
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Localhost</div>
                </div>	

                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #445ede !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_dev; ?>" onclick="metroDialog.toggle('#dialog9')" class="live-slide"><img src="assets/img/portofolio/not_available/na.png" data-role="fitImage" data-format="fill">
						</a>
                    </div>
					<span class="textImage" style="left: 20% !important;">Tindak Lanjut Rapat</span>
					
					<!--div class="tile-content iconic" style="display:block;">
                        <span class="textImage icon mif-envelop"></span>
                    </div-->
					
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Development</div>
                </div>
				
                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #3053a4 !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/tindaklanjutrapat/1.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/tindaklanjutrapat/2.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/tindaklanjutrapat/3.png" data-role="fitImage" data-format="fill"></a>
                    </div>
					<span class="textImage" style="left: 20% !important;">Tindak Lanjut Rapat</span>
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Production</div>
                </div>
            </div>
			
        </div>
		
		
        <div class="tile-group double">
            <span class="tile-group-title">Monitoring Implementasi Kesisteman(MIK)</span>
			<?php
				$url_local = 'http://localhost/msr/';
				$url_dev_110 = 'http://10.110.1.192/msr/';
				$url_prod = 'https://msr.sucofindo.co.id/';
			?>
			<br>
            <div class="tile-container">
                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #421bc1 !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/mik/1.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/mik/2.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/mik/3.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/mik/4.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/mik/5.png" data-role="fitImage" data-format="fill"></a>
                    </div>
					<span class="textImage" style="left: 40% !important;">MIK</span>
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Localhost</div>
                </div> 

                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #421bc1 !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/mik/1.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/mik/2.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/mik/3.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/mik/4.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/mik/5.png" data-role="fitImage" data-format="fill"></a>
                    </div>
					<span class="textImage" style="left: 40% !important;">MIK</span>
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Development 10.110.1.192</div>
                </div> 		

                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #421bc1 !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/mik/1.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/mik/2.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/mik/3.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/mik/4.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/mik/5.png" data-role="fitImage" data-format="fill"></a>
                    </div>
					<span class="textImage" style="left: 40% !important;">MIK</span>
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Production</div>
                </div>
            </div>
			
        </div>
		
		
        <div class="tile-group double">
            <span class="tile-group-title">Kriteria Penilaian Kinerja Unggul(KPKU)</span>
			<?php
				$url_local = 'http://localhost/kpku/';
				$url_dev_110 = 'http://10.110.1.192/msr/';
				$url_prod = 'https://kpku.sucofindo.co.id/';
			?>
			<br>
            <div class="tile-container">
                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #2c3240 !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/kpku/1.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/kpku/2.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/kpku/3.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/kpku/4.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/kpku/5.png" data-role="fitImage" data-format="fill"></a>
                    </div>
					<span class="textImage" style="left: 40% !important;">KPKU</span>
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Localhost</div>
                </div>

                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #2c3240 !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/kpku/1.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/kpku/2.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/kpku/3.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/kpku/4.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_110; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/kpku/5.png" data-role="fitImage" data-format="fill"></a>
                    </div>
					<span class="textImage" style="left: 40% !important;">KPKU</span>
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Development 10.110.1.192</div>
                </div>

                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #2c3240 !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/kpku/1.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/kpku/2.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/kpku/3.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/kpku/4.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_prod; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/kpku/5.png" data-role="fitImage" data-format="fill"></a>
                    </div>
					<span class="textImage" style="left: 40% !important;">KPKU</span>
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Production</div>
                </div>
            </div>
			
        </div>
		
		
        <div class="tile-group double">
            <span class="tile-group-title">Risiko Vendor</span>
			<?php
				$url_local = 'http://localhost/risiko_vendor/index.php/login';
				$url_dev_172 = 'http://172.16.100.66/risiko_vendor/index.php/login';
				$url_prod = '#';
			?>
			<br>
            <div class="tile-container">
                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #2c3240 !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/risiko_vendor/1.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/risiko_vendor/2.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/risiko_vendor/3.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/risiko_vendor/4.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/risiko_vendor/5.png" data-role="fitImage" data-format="fill"></a>
                    </div>
					<span class="textImage" style="">Risiko Vendor</span>
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Localhost</div>
                </div> 

                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #2c3240 !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_dev_172; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/risiko_vendor/1.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_172; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/risiko_vendor/2.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_172; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/risiko_vendor/3.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_172; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/risiko_vendor/4.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_dev_172; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/risiko_vendor/5.png" data-role="fitImage" data-format="fill"></a>
                    </div>
					<span class="textImage" style="">Risiko Vendor</span>
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Development 172.16.100.66</div>
                </div> 		

                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #445ede !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_prod; ?>" onclick="metroDialog.toggle('#dialog9')" class="live-slide"><img src="assets/img/portofolio/not_available/na.png" data-role="fitImage" data-format="fill">
						</a>
                    </div>
					<span class="textImage" style="">Risiko Vendor</span>
					
					<!--div class="tile-content iconic" style="display:block;">
                        <span class="textImage icon mif-envelop"></span>
                    </div-->
					
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Production</div>
                </div>
            </div>
			
        </div>
		
		<div class="tile-group double">
            <span class="tile-group-title">Cuan On Progress</span>
			<?php
				$url_local = 'http://localhost/simfast_iainpalopo/index.php/login';
				$url_prod = '#';
			?>
			<br>
            <div class="tile-container">
                <div class="tile-wide" data-role="tile" data-effect="slideLeft" style="background-color: #2c3240 !important;">
                    <div class="tile-content">
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/simfast/1.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/simfast/2.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/simfast/3.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/simfast/4.png" data-role="fitImage" data-format="fill"></a>
                        <a href="<?php echo $url_local; ?>" target="_blank" class="live-slide"><img src="assets/img/portofolio/simfast/5.png" data-role="fitImage" data-format="fill"></a>
                    </div>
					<span class="textImage" style="left: 18% !important;">SIMFAST IAIN PALOPO</span>
                    <div class="tile-label" style="font-weight: 600;font-size: 16px;">Localhost</div>
                </div> 
            </div>
			
        </div>

    </div>
	
<div class="cell" data-role="dialog" id="dialog9" data-overlay="true" data-overlay-color="op-dark" data-overlay-click-close="true">
	<div class="window">
		<div class="window-caption bg-cyan fg-white">
			<span class="window-caption-icon"><img src="assets/docs/images/home.png"></span>
			<span class="window-caption-title">Console</span>
			<span data-close-button="true" class="btn-close bg-red fg-white" onclick="metroDialog.close('#dialog9')"></span>
		</div>
		<div class="window-content bg-dark fg-white" style="height: 250px">
			ALERT:\>BELUM TERSEDIA_
		</div>
	</div>
</div>
</body>
</html>