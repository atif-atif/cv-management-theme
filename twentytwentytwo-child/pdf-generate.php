<?php
/* 
Template Name: pdfgenerate
*/
?>

<?php
get_header();

$testing = do_shortcode( '[pdf_generation]' );
echo $testing;
get_footer();