<?php
include'koneksi.php';
?>
<?php
$query="SELECT News FROM t_strip";
$sql= mysqli_query($konekdb,$query);
$hasil= mysqli_fetch_array($sql);
//$News=stripslashes($hasil['News']);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<!-- BASICS -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>GreenDay</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />	
		<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<link href="css/responsive-slider.css" rel="stylesheet">
		<link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/style.css">

		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- skin -->
		<link rel="stylesheet" href="skin/default.css">
        <!-- =======================================================
            Theme Name: Green
            Theme URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
            Author: BootstrapMade
            Author URL: https://bootstrapmade.com
        ======================================================= -->
    </head>
	 
    <body>
	
	
	<div class="header">
	<section id="header" class="appear">
		
		<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
			
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php" data-0="line-height:90px;" data-300="line-height:50px;">Refresh					</a></h1>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
						<li class="active"><a href="#index">News</a></li>
						<li><a href="#section-about">Profil</a></li>
						<li><a href="#services">Service</a></li>
						<li><a href="#team">Guest Book</a></li>
						<li><a href="#section-works">Portofolio</a></li>
						<li><a href="#section-contact">Contact</a></li>
					</ul>
				</div><!--/.navbar-collapse -->
	  </div>
		
		
	</section>
	</div>
	

<div class="slider">		
		<div id="about-slider">
        
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>
                <section id="index">
				<div class="carousel-inner">
					<div class="item active">
                    <div class="wow bounceIn">						
						<img src="img/1.jpg" class="img-responsive" alt=""> 
						<div class="carousel-caption">							
								<h2><span><?php echo $hasil['News']; ?></span></h2>
					  </div>
                      </div>
                      </div>
                      </div>
				  </div>

			</div> <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->

		</div>
        </section><br><br><br><br><br><br>

	<!--about-->

	<section id="section-about">
<?php
$query="SELECT Profil FROM t_strip";
$sql= mysqli_query($konekdb,$query);
$hasil= mysqli_fetch_array($sql);
//$Profil=stripslashes($hasil['Profil']);
?>
		<div class="carousel-inner">
					<div class="item active">						
						<img src="img/we.jpg" alt="" width="1550" class="img-responsive"> 
						<div class="carousel-caption">							
						  <h3><span><?php echo $hasil['Profil']; ?></span></h3>
					  </div>
          </div>
      </div>
        </section>
	<!--/about-->

		<!-- services -->
		<section id="services" class="section pad-bot5 bg-white">
<?php
$query="SELECT Service FROM t_strip";
$sql= mysqli_query($konekdb,$query);
$hasil= mysqli_fetch_array($sql);
//$Profil=stripslashes($hasil['Service']);
?>
		<div class="carousel-inner">
					<div class="item active">						
						<img src="img/bisa.jpg" alt="" width="1550" height="644" class="img-responsive"> 
					  <div class="carousel-caption">							
						  <h3><?php echo $hasil['Service']; ?></h3>
			</div>
          </div>
      </div>
    </section>
 <?php
$query="SELECT Guest FROM t_strip";
$sql= mysqli_query($konekdb,$query);
$hasil= mysqli_fetch_array($sql);
//$Profil=stripslashes($hasil['Guest']);
?>
<section id="team" class="team-section appear clearfix">
  <div class="carousel-inner">
    <div class="item active"> <img src="img/Guestbook.jpg" alt="" width="1550" height="344" class="img-responsive">
      <div class="carousel-caption">
        <h3><?php echo $hasil['Guest']; ?></h3>
      </div>
    </div>
  </div>
</section>
        		
		<!-- section works -->
<?php
$query="SELECT Portofolio FROM t_strip";
$sql= mysqli_query($konekdb,$query);
$hasil= mysqli_fetch_array($sql);
//$Profil=stripslashes($hasil['Portofolio']);
?>
		<section id="section-works" class="section appear clearfix">
			<div class="container">
				
				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
						<h1><?php echo $hasil['Portofolio']; ?></h1>
                        <img src="img/11.jpg">
                        <img src="img/12.jpg">
                        <img src="img/13.jpg">
                        <img src="img/14.jpg">
                        <img src="img/15.jpg">
						</div>
					</div>
				</div>
					
                       
		</section>
        
		<!-- contact -->
<?php
$query="SELECT Contact FROM t_strip";
$sql= mysqli_query($konekdb,$query);
$hasil= mysqli_fetch_array($sql);
//$Profil=stripslashes($hasil['Contact']);
?>
		<section id="section-contact" class="section appear clearfix">
			<div class="container">
				
				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
						<h1><?php echo $hasil['Contact']; ?></h1>	

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
                        <div id="sendmessage"></div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div> 
                            
                            <div class="text-center"><button type="submit" class="line-btn green">Send Message</button></div>
                        </form>
					</div>
					<!-- ./span12 -->
				</div>
				
			</div>
		</section>
		<!-- map -->
		
	<section id="footer" class="section footer">
		<div class="container">
			<div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
				<div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>				
				</div>
			</div>

			<div class="row align-center copyright">
					<div class="col-sm-12">
					   <h1><p>KRS</p></h1>
                        <div class="credits">
                        </div>
                    </div>
			</div>
		</div>

	</section>
	<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>	

	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/skrollr.min.js"></script>		
	<script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="js/jquery.localscroll-1.2.7-min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/responsive-slider.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/grid.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
	<script>wow = new WOW({}).init();</script>
    <script src="contactform/contactform.js"></script>
    
    
</body>
</html>

