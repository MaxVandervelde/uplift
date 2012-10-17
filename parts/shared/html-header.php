<!DOCTYPE html><!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 ie6" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width" ><meta property="og:title" content="CaringBridge SupportPlanner" />
    <link href="<?php bloginfo('template_directory'); ?>/css/screen.css" media="screen" rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
    <script src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
    <?php wp_head(); ?>
    <script>
        // This belongs in a separate file, but I need a path that comes
        // from calling a PHP function.
        jQuery(document).ready(function() {
            if (Modernizr.svg) {
                var svgPath = "<?php echo get_stylesheet_directory_uri(); ?>/img/uplift-logo.svg";
                jQuery('.uplift-logo-container a img').attr('src', svgPath);
            }
        });
    </script>
</head>
<body <?php body_class(); ?>>
