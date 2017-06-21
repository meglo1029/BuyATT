<?php 
	setsessiondata(); // set SEM cookie and lineup
	global $SEM_DATA;
	$advertiser = findadvertiser(1); // Get data for current advertiser Verizon!!!
	$rating_num = findadvertiser($advertiser['aid'], 'return') + 1;
	global $advertisers;
	global $advertiser;
	// var_dump($advertiser);
	// include ABSPATH . "/version_redirect.php"; // Version Redirect 

    get_header();

    get_template_part('/template-parts/content-tv'); // content from template-parts
	
	get_footer();
?>