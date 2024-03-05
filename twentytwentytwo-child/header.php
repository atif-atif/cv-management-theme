<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cvmanagement
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <title>CV Management System</title>
    <style>
        footer {
            text-align: center;
            padding: 10px;
            background-color: #2c3e50;
            color: #fff;
            position: static;
            bottom: 0;
            width: 100%;
        }
    </style>


    <style>
        body{
    overflow-x: hidden;
}
        header {
            background-color: #2c3e50;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 28px;
        }

        header p {
            margin-top: 5px;
            font-size: 16px;
            opacity: 0.8;
        }

        .wrap {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
        }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <h1>CV Management System</h1>
    <p>Combined Platform for HRs and Candidates.</p>
</header>
