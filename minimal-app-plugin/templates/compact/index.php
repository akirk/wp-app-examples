<!DOCTYPE html>
<html <?php wp_app_language_attributes(); ?>>
<head>
	<title><?php wp_app_the_title( 'My Minimal App' ); ?></title>
	<?php wp_app_head(); ?>
</head>
<body class="wp-app-body minimal-app-compact">

<?php wp_app_body_open(); ?>

<main class="compact-card">
	<p class="compact-eyebrow">Compact theme</p>
	<h1>My Minimal App</h1>
	<p>A focused alternative home page supplied by a partial app theme.</p>
	<nav class="compact-nav" aria-label="App pages">
		<a href="<?php echo esc_url( home_url( '/my-minimal-app/about' ) ); ?>">About</a>
		<a href="<?php echo esc_url( home_url( '/my-minimal-app/contact' ) ); ?>">Contact</a>
	</nav>
	<p class="compact-note">The About page is not included in this theme, so WpApp loads it from the default template directory.</p>
</main>

<?php wp_app_body_close(); ?>
</body>
</html>
