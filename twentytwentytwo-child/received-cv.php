<?php
/* 
Template Name: receivedcvdata 
*/
?>

<?php
get_header();

$testing = do_shortcode( '[received_cvv]' );
echo $testing;
get_footer();