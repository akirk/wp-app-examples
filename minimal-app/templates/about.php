<!DOCTYPE html>
<html <?php wp_app_language_attributes(); ?>>
<head>
	<title><?php wp_app_the_title( 'About' ); ?></title>
	<?php wp_app_head(); ?>
</head>
<body class="wp-app-body">
<?php wp_app_body_open(); ?>

<main>
	<h1>About the Minimal App</h1>
	<p>This page comes from the default template directory, even when the Compact theme is selected.</p>
	<p><a href="<?php echo esc_url( home_url( '/minimal/' ) ); ?>">Back to the app</a></p>
</main>

<?php wp_app_body_close(); ?>
</body>
</html>
