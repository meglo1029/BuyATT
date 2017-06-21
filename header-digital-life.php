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

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/digital-life-styles.css">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/vnd.microsoft.icon" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php if ( empty($SEM_DATA['phone']) ) { ?>
            <script type='text/javascript' src='https://af.qologydirect.com/assets/js/af.min.js' async='async'></script>
        <?php } ?>
        <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 100%;
            margin: auto;
        }
        </style>

    	<!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M2D5DM');</script>
        <!-- End Google Tag Manager -->
    </head>

    <body> 
        <section class="section-header section-header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 logo-header">
                        <img src="http://buyatt.com/themes/att/images/logo-att-digital-life.png" alt="AT&T Digital Life" class="">
                    </div>
                    <div class="col-sm-7 phone-header">
                        <div class="hidden-md hidden-lg">
                                <div class="cta-button-header">
                                    <span class="nobreak">
                                        <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
                                        <a href="tel:<?php echo $advertiser['phone']; ?>" ringpoolid="<?php echo $advertiser['ringpool']; ?>" placeholder="<?php echo $advertiser['phone']; ?>" class="deco-no dp_phone_container_<?php echo $advertiser['aid']; ?> phone_bg cfnumber phone-color">
                                        <span class="af-tel qd-tel"><?php echo $advertiser['phone']; ?></span>
                                        </a>
                                    </span>
                                </div>
                            
                        </div>
                        <div class="hidden-xs hidden-sm">
                            <a href="tel:<?php echo $advertiser['phone']; ?>" ringpoolid="<?php echo $advertiser['ringpool']; ?>" placeholder="<?php echo $advertiser['phone']; ?>" class="deco-no dp_phone_container_<?php echo $advertiser['aid']; ?> phone_bg cfnumber phone-color">
                                <span class="f-phone-header-light">Call </span>
                                <span class="nobreak f-phone-header-medium">
                                    <span class="af-tel qd-tel"><?php echo $advertiser['phone']; ?></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>