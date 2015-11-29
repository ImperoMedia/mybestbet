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
					<h2>Welcome back, <?php echo do_shortcode( '[s2Get constant="S2MEMBER_CURRENT_USER_DISPLAY_NAME" /]' ) ?></h2>

					<!--Don't Use h3 tags in this box. They will be hidden to accommodate S2 widget title-->
					
					<a href="#">See Your Picks</a>
					<a href="#">Upgrade for more picks</a>

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

	<div id="pricing" class="row">
		<div id="pricing-table" class="clear">
		    <div class="plan">
		        <h3><?php the_field('sport_1') ;?>
		        	<span>$20/DAY</span>
	        	</h3>
		        
		         <ul>
		            <li>Access to Today's Top Pick</li>
		            <li>&nbsp;</li>
		            <li><a href="" class="btn-single">Buy Now</a></li>
		            <li><?php echo do_shortcode('[s2Member-PayPal-Button level="1" ccaps="" desc="Single Membership / description and pricing details here." ps="paypal" lc="" cc="USD" dg="0" ns="1" custom="macbook.local:8080" ta="0" tp="0" tt="D" ra="20" rp="1" rt="D" rr="BN" rrt="" rra="1" image="default" output="button" /]'); ?></li>

		        </ul>  

		    </div>
		    <div class="plan">
		        <h3><?php the_field('sport_2') ;?>
		        	<span>$25/DAY</span>
	        	</h3>
		        
		        <ul>
		            <li>Add a second pick for just $5!</li>
		            <li>&nbsp;</li>
		            <li><a href="" class="btn-single">Buy Now</a></li>

		        </ul>    

		    </div>
		    <div id="most-popular" class="plan">
		        <h3><?php the_field('sport_3') ;?>
		        	<span>$30/DAY</span>
	        	</h3>
		        
		         <ul>
		            <li>Our most popular plan</li>
		            <li>All 3 picks for one low price!</li>
		            <li><a href="" class="btn-single">Buy Now</a></li>
		        </ul>  

		    </div>
		    <div class="plan">
		        <h3><?php the_field('sport_4') ;?>
		        	<span>$XXX/MO</span>
	        	</h3>
		        
		         <ul>
		            <li>Access to all picks, all the time!</li>
		            <li>&nbsp;</li>
		            <li><a href="" class="btn-single">Buy Now</a></li>

		        </ul>  

		    </div> 	
		</div>
	</div>



</section>