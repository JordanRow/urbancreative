<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <link rel="shortcut icon" href="images/logo.png">

	<?php wp_head(); ?>
</head>

<body>

    <header>
          <div class="container p-3 d-flex justify-content-between align-items-center flex-wrap">
              <?php if (function_exists("the_custom_logo")) {
              	$custom_logo_id = get_theme_mod("custom_logo");
              	$logo = wp_get_attachment_image_src($custom_logo_id);
              } ?>
			<img class="logo" src="<?php echo $logo[0]; ?>" alt="logo" >

            <nav class="navbar position-relative d-flex justify-content-between flex-wrap">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-bars"></i>
				</button>

				<div id="navigation-mobile" >
				    <div class="mobile-header-title">
						<div class="cross-container">
						   <i class="fa fa-times"></i>
					   </div>
				        <i class="fas fa-bars mr-1"></i>Menu
				    </div>
					<?php wp_nav_menu([
     	"menu" => "mobile",
     	"container" => "",
     	"theme_location" => "mobile",
     	"items_wrap" => '<ul id="" class="navbar-content-mobile d-flex ">%3$s</ul>',
     ]); ?>
				</div>

				<div id="navigation" class="" >
					<?php wp_nav_menu([
     	"menu" => "primary",
     	"container" => "",
     	"theme_location" => "primary",
     	"items_wrap" => '<ul id="" class="navbar-content">%3$s</ul>',
     ]); ?>
				</div>
		    </nav>
		   <?php dynamic_sidebar("header-area-1"); ?>
          </div>
    </header>

      <div class="main-wrapper">
