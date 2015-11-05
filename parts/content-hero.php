<?php
/**
 * Hero section for home page
 *
 * @package mybestbet
 */
?>

<?php
if ( !is_user_logged_in( ) ) {
    get_template_part( 'parts/home', 'out' );
} else {
    get_template_part( 'parts/home', 'in' );
}
?>