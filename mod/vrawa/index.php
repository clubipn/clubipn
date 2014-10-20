<?php

if (elgg_is_logged_in())
{
forward ('activity');
}
?>
<!DOCTYPE HTML>
<!--
	
-->
<html>
	<head>
		<title>Vrawa Theme | Elgg 1.8</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="mod/vrawa/js/jquery.min.js"></script>
		<script src="mod/vrawa/js/jquery.dropotron.min.js"></script>
		<script src="mod/vrawa/js/jquery.scrollgress.min.js"></script>
		<script src="mod/vrawa/js/skel.min.js"></script>
		<script src="mod/vrawa/js/skel-layers.min.js"></script>
		<script src="mod/vrawa/js/init.js"></script>
		 <link rel="stylesheet" type="text/css" href="mod/vrawa/css/form_style.css" />
			<link rel="stylesheet" href="mod/vrawa/css/skel.css" />
			<link rel="stylesheet" href="mod/vrawa/css/style.css" />
			<link rel="stylesheet" href="mod/vrawa/css/style-wide.css" />
		
		<!--[if lte IE 8]><link rel="stylesheet" href="mod/vrawa/css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="#">My Network</a> Powered by elgg</h1>
				<nav id="nav">
					<ul>
						<li><a href="register/">Register</a></li>
						
						<li><a href="forgotpassword/" class="button">Forgot Password?</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				
				<h2>Welcome</h2>
                                
			<section class="main">
				<form class="form-3" action="action/login" method="post">
<?php
$ts = time();
$token = generate_action_token($ts);
?>
				    <p class="clearfix">
				        <label for="login">Username</label>
				        <input type="text" name="username" id="login" placeholder="Username">
				    </p>
				    <p class="clearfix">
				        <label for="password">Password</label>
				        <input type="password" name="password" id="password" placeholder="Password"> 
				    </p>

<input type="hidden" name="__elgg_token" value="<?php echo $token; ?>"/>
<input type="hidden" name="__elgg_ts" value="<?php echo $ts; ?>" />
    
				    <p class="clearfix">
                                      <center>
				        <input type="submit" name="submit" value="Entrar">
                                          </center>
				    </p>       
				</form>​
			</section>
				
			</section>

		<!-- Main -->
			<section id="main" class="container">
		
				<section class="box special">
					<header class="major">
						<h2>Another amazing responsive and clean theme
</br>
For Elgg 1.8
</h2>
					
					</header>
					<span class="image featured"><img src="mod/vrawa/images/pic01.jpg" alt="" /></span>
				</section>
						
				<section class="box special features">
					<div class="features-row">
						<section>
							<span class="icon major fa-bolt accent2"></span>
							<h3>Modern</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo</p>
						</section>
						<section>
							<span class="icon major fa-area-chart accent3"></span>
							<h3>Robust</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo</p>
						</section>
					</div>
					<div class="features-row">
						<section>
							<span class="icon major fa-cloud accent4"></span>
							<h3>In the Cloud</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo</p>
						</section>
						<section>
							<span class="icon major fa-lock accent5"></span>
							<h3>Security</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo</p>
						</section>
					</div>
				</section>
					
				<div class="row">
					<div class="6u">

						<section class="box special">
							<span class="image featured"><img src="mod/vrawa/images/pic01.jpg" alt="" /></span>

							<h3>Featured Post #1</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo... </p>

							<ul class="actions">
								<li><a href="#" class="button alt">Leer Más</a></li>
							</ul>
						</section>
						
					</div>
					<div class="6u">

						<section class="box special">
							<span class="image featured"><img src="mod/vrawa/images/pic01.jpg" alt="" /></span>

							<h3>Featured Post #2</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo...</p>
							<ul class="actions">
								<li><a href="#" class="button alt">Leer Más</a></li>
							</ul>
						</section>

					</div>
				</div>

			</section>
			
		<!-- CTA -->
			<section id="cta">
				
				<h2>Aenean commodo ligula eget dolor. Aenean massa. In enim justo, rhoncus ut, imperdiet a?</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit!</p>
			      
				
			</section>
			
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					
				</ul>
				<ul class="copyright">
					<li>&copy; Elgg . All rights reserved.</li><li>Designed by: <a href="http://www.swsocialweb.com">SW Social Web</a></li>
				</ul>
			</footer>

	</body>
</html>