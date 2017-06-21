<?php
	global $SEM_DATA;
    global $advertiser;

    
    if(!empty($_GET['cookiereset'])){
        unset($_COOKIE["cpidform"]);
        setcookie("cpidform", "" , time() -1);
    }
    

      $pageID = get_the_ID();

 	switch ($pageID) {
    case "337":
        $promoCode = "I3783";
        break;
    case "19":
        $promoCode = "T3784";
        break;
    case "21":
        $promoCode ="P3785";
        break;
    case "345":
        $promoCode = "U3787";
        break;
    default:
        $promoCode = "B3782";
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta charset="UTF-8" />
	<meta http-equiv="expires" content="Sat, 13 May 2017 09:53:30">
	<meta name="google-site-verification" content="OeyVgFbrWg1tEvcA1gySs3L6UW7CXoboCrPJ6Kt0L00" />
	
	<link rel="alternate" href="http://www.buyatt.com/" hreflang="en-us" />
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/vnd.microsoft.icon" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<style> #menu-item-1520 {display: none;} </style>
	<style> .nobreak {white-space: nowrap;}</style>

	
<!-- This site is optimized with the Yoast SEO plugin v3.2.5 - https://yoast.com/wordpress/plugins/seo/ -->
<title>AT&amp;T U-verse Bundles</title>
<meta name="description" content="AT&amp;T bundles give you the convenience, entertainment, and savings you expect from your services. Call 866-611-5980 to find out about bundle packages"/>
<meta name="robots" content="noodp"/>
<meta name="keywords" content="att uverse bundles, tv and internet bundles, att bundle deals"/>
<link rel="canonical" href="http://www.buyatt.com/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="AT&amp;T U-verse Bundles" />
<meta property="og:description" content="AT&amp;T bundles give you the convenience, entertainment, and savings you expect from your services. Call 866-611-5980 to find out about bundle packages" />
<meta property="og:url" content="http://www.buyatt.com/" />
<meta property="og:site_name" content="ATT Deals" />
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","url":"http:\/\/www.buyatt.com\/","name":"ATT Deals","potentialAction":{"@type":"SearchAction","target":"http:\/\/www.buyatt.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<meta name="msvalidate.01" content="0240325FA624240A22BADE7B10D771FC" />
<meta name="google-site-verification" content="ONVGzJgZppf-wCKSpT1Bgp2dw6gs7u_jtLWAZcdjLhY" />
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='//af.qologydirect.com' />
<link rel='dns-prefetch' href='//www.googleadservices.com' />
<link rel='dns-prefetch' href='//ajax.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='minstyles-css'  href='<?php bloginfo('stylesheet_directory'); ?>/assets/css/app.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='<?php bloginfo('stylesheet_directory'); ?>/style.css' type='text/css' media='all' />
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
<link rel='shortlink' href='http://www.buyatt.com/' />
<link rel="alternate" type="application/json+oembed" href="http://www.buyatt.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.buyatt.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://www.buyatt.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.buyatt.com%2F&#038;format=xml" />

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-M2D5DM');</script>
	<!-- End Google Tag Manager -->

	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/mbox.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/templates/bootstrap/js/carousel.js"></script>


	<script src="//cdn.optimizely.com/js/594280132.js"></script>


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2D5DM"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	
	

	<!-- container start -->
	<div class="full-w-section">
			<!-- header start -->
			<div id="header">
				<div class="container padright">
					<div class="row">
						<div class="logo">
							<a href="<?php bloginfo('url'); ?>" title="BuyATT.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/templates/images/att-logo.png" alt="AT&amp;T Authorized Retailer" /></a>
						</div>

						<div class="signage">
							<span>BuyATT.com</span><br />Powered by Qology Direct
						</div>

						<div class="phone-hours">

							<p class="phone"><span>Call Now:</span> 
							<a href="tel:<?php echo $advertiser['phone']; ?>" ringpoolid="<?php echo $advertiser['ringpool']; ?>" placeholder="<?php echo $advertiser['phone']; ?>" class="deco-no dp_phone_container_<?php echo $advertiser['aid']; ?> phone_bg cfnumber">
								<span class="af-tel qd-tel phone-number-size">
									<?php echo $advertiser['phone']; ?>
								</span>
							</a>
							</p>

							<p class="promo-code hidden-xs"><strong>Use Promo Code: <?php echo $promoCode; ?> </strong></p>
						</div>
					</div>
				</div>
			</div>
			<!-- header end -->

   			<div class="clear"></div>
			<!-- menu -->
			<div class="menubox orange-bg-menu">
				<div class="container">
					<div class="row">
										<div class="menu-main-menu-container">


                                 <?php 

                                wp_nav_menu(
                                        array(
                                            'menu' => 'main_nav',
                                            'theme_location' => 'main_menu',
                                            'container' => 'ul',
                                            'container_class' => 'nav',
                                            'menu_class' => 'nav-menu nav',
                                            'menu_id' => 'menu-main-menu'
                                        )
                                    );

                                ?>
										</div>				
										<div class="clear"></div>

		   		<button type="button" id="btn-navbar">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
					</div>
				</div>
   			</div>
   			<!-- end of menu -->
   			<div class="clear"></div>