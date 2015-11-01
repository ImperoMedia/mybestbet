<?php
/**
 * Hero section - LOGGED IN
 *
 * @package mybestbet
 */
?>

<div id="hero">
	<div class="container-fluid hero_box">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-7 hero_module hero_module_left">
			<h1>Welcome to MyBestBet.com</h1>
			<ul>
				<li><i class="fa fa-arrow-right"></i>Join Today for this reason</li>
				<li><i class="fa fa-arrow-right"></i>Another reason to join</li>
				<li><i class="fa fa-arrow-right"></i>An even better reason!</li>
			</ul>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-5 hero_module hero_module_right">
			<div class="inner">
				<h2>Sign Up for Free!</h2>
				<h3>Free Picks Daily!</h3>
				<h3>Go Premium for ALL Picks!</h3>
				<?php dynamic_sidebar( 'home_login' ); ?>
			</div>
		</div>
	</div>
</div>
</div>