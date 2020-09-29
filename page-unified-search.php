<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/unified-search.css?v=1" rel="stylesheet">
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/groupware-video.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/groupware-video.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/groupware-video.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/groupware-video.png">
<meta name=”Description” content="Integrated email communication in Nextcloud.">
</head>
<div class="background unified-search-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Unified search');?></h1>
				<h2><?php echo $l->t('Find what you are looking for');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--features">
	<div class="container">
        <div class="row ">
            <div class="col-md-6 image--floated image--feature">
                    <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/unified_search.gif"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/unified_search.gif" alt="Unified search in action" /></a>
            </div>
            <div class="col-md-6 featureblock">
                <h3 class="section--paragraph__tittle"><?php echo $l->t('Find everything in one place');?></h3>
                <p class="section--paragraph"><?php echo $l->t('On the top-right of your Nextcloud window, a search glass shows search results from all over Nextcloud. Additional search providers can be installed and over a dozen different search providers can offer you results.');?></p>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6 image--feature new-img">
                    <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/search_moodle_course_module.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/search_moodle_course_module.png" alt="Searching Moodle courses and modules" /></a>
            </div>
            <div class="col-md-6 featureblock">
                <h3 class="section--paragraph__tittle"><?php echo $l->t('Integrated and third party options');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Core Nextcloud apps like Files, Calendar, Contacts, Talk, Mail and Deck provide results in unified search. A number of integration apps provide results from third parties like source code management and ticketing systems, e-learning platforms and more. Developers can build their own additions easily and many apps are available in our app store.');?></p>
            </div>
        </div>
	</div>
</section>