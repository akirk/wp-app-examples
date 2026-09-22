<!DOCTYPE html>
<html <?php wp_app_language_attributes(); ?>>
<head>
	<title><?php wp_app_the_title( 'Minimal App' ); ?></title>
	<?php wp_app_head(); ?>
</head>
<body class="wp-app-body minimal-app-card">
<?php wp_app_body_open(); ?>

<main class="card">
	<p class="card-eyebrow">Card theme</p>
	<h1>Minimal App</h1>
	<p>A focused alternative home page supplied by a partial app theme.</p>
	<nav class="card-nav" aria-label="App pages">
		<a href="<?php echo esc_url( home_url( '/minimal/about' ) ); ?>">About</a>
	</nav>
	<p class="card-note">The About page is not included in this theme, so WpApp loads it from the default template directory.</p>
</main>

<?php wp_app_body_close(); ?>
</body>
</html>
