<?php
/**
 * @package mybestbet
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1>Picks for <?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<div class="pick_content">

			<?php if (current_user_is("s2member_level1")){ ?> 
				<div class="pick_block">
					<h2>NHL Picks</h2>
					<p><?php the_field('nhl'); ?></p>
				</div>
			<?php } if (current_user_is("s2member_level2")){ ?>
				<div class="pick_block">
					<h2>NBA Picks</h2>
					<p><?php the_field('nba'); ?></p>
				</div>
			<?php } if (current_user_is("s2member_level3")){ ?>
				<div class="pick_block">
					<h2>MLB Picks</h2>
					<p><?php the_field('mlb'); ?></p>
				</div>
			<?php } if (current_user_is("s2member_level4")){ ?>
				<div class="pick_block">
					<h2>NFL Picks</h2>
					<p><?php the_field('nfl'); ?></p>
				</div>
			<?php } if (current_user_is("s2member_level5")){ ?>
				<div class="pick_block">
					<h2>PGA Tour Picks</h2>
					<p><?php the_field('pga'); ?></p>
				</div>
			<?php } if (current_user_is("subscriber")){ ?>
				<div class="pick_block">
					<h2>Free Pick of the Day</h2>
					<p><?php the_field('free_pick'); ?></p>
				</div>
			
			<?php } else if(is_user_not_logged_in()) { ?>
				<div class="pick_block">
					<h4>Not a Member?</h4>
					<p>It doesn't look like you are a member. <a href="/register">Click here</a> to sign up.</p>
					<?php } ?>
				</div>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'mybestbet' ),
				'after'  => '</div>',
			) );
		?>
		<div class="entry-meta">
			<?php mybestbet_posted_on(); ?>
		</div><!-- .entry-meta -->
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php mybestbet_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
