<?php> wp_head();?>


<!DOCTYPE html>
<html lang="et">
<head>
	<meta charset="utf-8">
	<title>Kodutöö</title>
	<link rel="stylesheet" type="text/css" href="styles/my_style.css">
</head>

<body>
<div class="pagecontainer">
	<section class="header-grid">
		<header>
            <h1><?php echo get_bloginfo("name");?></h1>
		</header>
	</section>
	<section class="sisukord-grid" id="sisukord">
		<nav>
        <?php wp_nav_menu(array( 'theme_location' => 'links-menu' ));?>
		</nav>
	</section>