<!DOCTYPE html>  

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php echo $site_name; ?></title>
  <meta name="description" content="Community information for the Christchurch Earthquake of 22 Feb 2011">
  <meta name="author" content="CrisisCampNZ">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php echo $header_block; ?>
	
	<?php
	// Action::header_scripts - Additional Inline Scripts from Plugins
	Event::run('ushahidi_action.header_scripts');
	?>
  <link href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" rel="stylesheet">	
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <meta property="og:type" content="cause"/>
  <meta property="og:image" content="/themes/ccnz/images/redandblack400x400.png"/>
  <meta property="og:site_name" content="Christchurch Recovery Map"/>
  <meta property="fb:admins" content="197359766958104"/>
  <meta property="og:locality" content="Christchurch"/>
  <meta property="og:region" content="Canterbury"/>
  <meta property="og:country-name" content="New Zealand"/>

</head>

<body id="page">
	<!-- wrapper -->
	<div class="rapidxwpr floatholder">

		<!-- header -->
		<div id="header">

			<!-- searchbox -->
			<div id="searchbox">
					<ul class="useful_links">
						<li><a class="skip-link" href="#main" title="Skip to content" accesskey="[">Skip to content</a></li>						
						<li>Useful Links:</li>
						<?php nav::secondary_tabs($this_page); ?>
					</ul>

				<!-- searchform -->
				<?php echo $search; ?>
				<!-- / searchform -->

			</div>
			<!-- / searchbox -->
			
			<!-- logo -->
			<div id="logo">
				<h1><a href="/"><?php echo $site_name; ?></a></h1>
				<span><?php echo $site_tagline; ?></span>
			</div>
			<!-- / logo -->
			
			<!-- submit incident -->
			<?php echo $submit_btn; ?>
			<!-- / submit incident -->
			
		</div>
		<!-- / header -->

		<!-- main body -->
		<div id="middle">
			<div class="background layoutleft">

				<!-- mainmenu -->
				<div id="mainmenu" class="clearingfix">
					<ul>
						<?php nav::main_tabs($this_page); ?>
					</ul>

				</div>
				<!-- / mainmenu -->
