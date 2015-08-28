<?php
/**
 * @package mybestbet
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php mybestbet_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

			<p style="font-size: 40px;">Content-Single</p>

				<div class="pick-content">
					<?php the_field('nhl'); ?>
					<?php the_field('nba'); ?>
					<?php the_field('mlb'); ?>
					<?php the_field('nfl'); ?>
					<?php the_field('pga'); ?>
				</div>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'mybestbet' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php mybestbet_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
