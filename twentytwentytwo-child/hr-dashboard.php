<?php
/* 
Template Name: hrdashboard 
*/
?>

<?php
get_header();

$testing = do_shortcode( '[follow_us]' );
echo $testing;
get_footer();