<?php 
global $SEM_DATA;
global $advertiser;
if(!empty($_GET['cookiereset'])){
        unset($_COOKIE["cpidform"]);
        setcookie("cpidform", "" , time() -1);
    }
    if (!empty($_GET['phone'])) {
        $advertiser['phone'] = $_GET['phone'];
    }

 ?>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <meta name="keywords" content="att at&t internet tv speed phone customer service uverse call center new support service order" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <link href="<?php bloginfo('stylesheet_directory'); ?>/landing/css/bootstrap.css" rel="stylesheet">
        <!-- Latest compiled and minified JavaScript -->
        <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"></script>
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/all.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/vnd.microsoft.icon" />

        
<!-- This site is optimized with the Yoast SEO plugin v3.2.5 - https://yoast.com/wordpress/plugins/seo/ -->
<title>Business - ATT Deals</title>
<link rel="canonical" href="http://www.buyatt.com/business/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Business - ATT Deals" />
<meta property="og:url" content="http://www.buyatt.com/business/" />
<meta property="og:site_name" content="ATT Deals" />
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='//af.qologydirect.com' />
<link rel='dns-prefetch' href='//www.googleadservices.com' />
<link rel='dns-prefetch' href='//ajax.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='minstyles-css'  href='<?php bloginfo('stylesheet_directory'); ?>/assets/css/app.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='<?php bloginfo('stylesheet_directory'); ?>/style.css?ver=4.7.2' type='text/css' media='all' />
<!--<link rel='stylesheet' id='qdt-global-css-css'  href='http://www.buyatt.com/addons/qd_toolkit/assets/css/global.min.css' type='text/css' media='all' />-->
<!--<link rel='stylesheet' id='qdt-client-css-css'  href='http://www.buyatt.com/addons/qd_toolkit/assets/css/qdt-client.min.css' type='text/css' media='all' />-->
<script type='text/javascript'>
/* <![CDATA[ */
var AF = {"loc":{"city":"","state":"Arizona","zip":"","country":"United States","timezone":"America\/Phoenix","lat":33.4484,"lng":-112.074},"remote":"https:\/\/af.qologydirect.com\/"};
/* ]]> */
</script>
<?php if ( empty($SEM_DATA['phone']) ) { ?>
    <script type='text/javascript' src='https://af.qologydirect.com/assets/js/af.min.js' async='async'></script>
<?php } ?>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<link rel='https://api.w.org/' href='http://www.buyatt.com/wp-json/' />
<link rel='shortlink' href='http://www.buyatt.com/?p=1622' />
<link rel="alternate" type="application/json+oembed" href="http://www.buyatt.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.buyatt.com%2Fbusiness%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://www.buyatt.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.buyatt.com%2Fbusiness%2F&#038;format=xml" />

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M2D5DM');</script>
        <!-- End Google Tag Manager -->
    </head>

    <body class="page-template page-template-templates page-template-page-business page-template-templatespage-business-php page page-id-1622">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2D5DM"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->


        <div class="section-header-master">
            <div class="container">
                <div class="row">
                    <div class="col-xs-5 col-sm-3 col-md-2">
                        <a><img class="img-responsive header-logo" src="<?php bloginfo('stylesheet_directory'); ?>/landing/images/att-logo.svg" alt="at&amp;t"></a>
                    </div>
                    <div class="col-sm-7 col-md-10 block-header-phone hidden-xs hidden-sm">
                        <a class="nobreak header-phone black" href="tel:<?php echo $advertiser['phone']; ?>"><span>Call Now <span class="af-tel qd-tel"><?php echo $advertiser['phone']; ?></span></span></a>
                    </div>
                    <div class="col-xs-7 col-sm-9 hidden-md hidden-lg nogutter">
                        <div class="block-button-phone-header">
                            <a class="button-phone-header" href="tel:<?php echo $advertiser['phone']; ?>"><i class="fa fa-phone" aria-hidden="true"><span class="af-tel qd-tel"></span></i> Click to Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-navbar-master section-navbar-master--business">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <a href="#">
                            <div class="col-xs-2 col-xs-offset-10 menu-responsive-button">
                                <!-- <i class="fa fa-bars" aria-hidden="true"></i> -->
                                <div id="nav-icon1">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </a>
                        <div class="menu-main-menu-container">
                            
                                  <?php 

                                wp_nav_menu(
                                        array(
                                            'menu' => 'main_nav',
                                            'theme_location' => 'main_menu',
                                            'container' => 'ul',
                                            'container_class' => 'nav',
                                            'menu_class' => 'navbar-master navbar-master--business',
                                            'menu_id' => 'menu-main-menu'
                                        )
                                    );

                                ?>


                        </div>                        

<ul class="navbar-master hidden">
                            <li><a href="#home">Bundles</a></li>
                            <li><a href="#news">Internet</a></li>
                            <li><a href="#contact">U-verse TV</a></li>
                            <li><a href="#about">Phone</a></li>
                            <li><a href="#about">Digital Life</a></li>
                            <li><a href="#about">Best Deals</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>