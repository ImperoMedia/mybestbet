<?php
/**
 * Hero section - LOGGED OUT
 *
 * @package mybestbet
 */
?>

<section id="hero">
	<div class="container-fluid hero_box">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-7 hero_module hero_module_left">
				<h1>My Best Bet</h1>
				<ul>
					<li><i class="fa fa-arrow-right"></i>Get Free Picks Every Day</li>
					<li><i class="fa fa-arrow-right"></i>Sign Up for Premium for Access to ALL Picks</li>
				</ul>

				<div class="btn-go"><a href="#pricing">View Pricing</a></div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-5 hero_module hero_module_right">
				<div class="inner">
					<h2><?php echo do_shortcode( '[s2Get constant="S2MEMBER_CURRENT_USER_DISPLAY_NAME" /]' ) ?></h2>
					<h2>Sign Up for Free!</h2>

					<!--Don't Use h3 tags in this box. They will be hidden to accommodate S2 widget title-->
					
					<h4>Upgrade to Premium for all picks</h4>

					<?php echo s2member_pro_login_widget(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="second">

	<h2>Why My Best Bet?</h2>
	<h3>See historical picks and the proven track record</h3>
	
</section>

<section id="third">

	<div class="row">
		<div id="pricing-table" class="clear">
		    <div class="plan">
		        <h3><?php the_field('sport_1') ;?><span>From $30</span></h3>
		         <ul>
		            <li><a class="btn-single" href="<?php the_field('sport_1_1_day') ;?>"><b>1</b> Day Pass</a></li>
		            <li><a class="btn-week" href="<?php the_field('sport_1_7_day') ;?>"><b>7</b> Day Pass</a></li>
		            <li><a class="btn-month" href="<?php the_field('sport_1_30_day') ;?>"><b>30</b> Day Pass</a></li>
					<li><a class="btn-season" href="<?php the_field('sport_1_season') ;?>"><b>Season</b> Pass</a></li>
		        </ul>  
		    </div>
		    <div class="plan">
		        <h3><?php the_field('sport_2') ;?><span>From $30</span></h3>
		        <ul>
		            <li><a class="btn-single" href="<?php the_field('sport_2_1_day') ;?>"><b>1</b> Day Pass</a></li>
		            <li><a class="btn-week" href="<?php the_field('sport_2_7_day') ;?>"><b>7</b> Day Pass</a></li>
		            <li><a class="btn-month" href="<?php the_field('sport_2_30_day') ;?>"><b>30</b> Day Pass</a></li>
					<li><a class="btn-season" href="<?php the_field('sport_2_season') ;?>"><b>Season</b> Pass</a></li>
		        </ul>    
		    </div>
		    <div class="plan">
		        <h3><?php the_field('sport_3') ;?><span>From $20</span></h3>
		         <ul>
		            <li><a class="btn-single" href="<?php the_field('sport_3_1_day') ;?>"><b>1</b> Day Pass</a></li>
		            <li><a class="btn-week" href="<?php the_field('sport_3_7_day') ;?>"><b>7</b> Day Pass</a></li>
		            <li><a class="btn-month" href="<?php the_field('sport_3_30_day') ;?>"><b>30</b> Day Pass</a></li>
					<li><a class="btn-season" href="<?php the_field('sport_3_season') ;?>"><b>Season</b> Pass</a></li>
		        </ul>  
		    </div>
		    <div class="plan">
		        <h3><?php the_field('sport_4') ;?><span>From $30</span></h3>
		         <ul>
		            <li><a class="btn-single" href="<?php the_field('sport_4_1_day') ;?>"><b>1</b> Day Pass</a></li>
		            <li><a class="btn-week" href="<?php the_field('sport_4_7_day') ;?>"><b>7</b> Day Pass</a></li>
		            <li><a class="btn-month" href="<?php the_field('sport_4_30_day') ;?>"><b>30</b> Day Pass</a></li>
					<li><a class="btn-season" href="<?php the_field('sport_4_season') ;?>"><b>Season</b> Pass</a></li>
		        </ul>  
		    </div> 	
		</div>
	</div>

</section>