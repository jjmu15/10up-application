<?php
/**
 * @package MurphyUp
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
  <link rel="stylesheet" href=""
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="header">
	<img class="logo" alt="MurphyUp" src="<?php echo get_template_directory_uri(); ?>/assets/icons/site_logo.svg" />
	<div id="menu-container">Menu Will Generate Here</div>
</div>
