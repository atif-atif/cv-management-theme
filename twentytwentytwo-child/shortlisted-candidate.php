<?php
/* 
Template Name: shortlist
*/
?>

<?php
get_header();

$testing = do_shortcode( '[shortlisted_candidate]' );
echo $testing;
get_footer();