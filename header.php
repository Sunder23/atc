<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ATC
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', '<?php the_field('gtm_code', 'options'); ?>');
	</script>
	<!-- End Google Tag Manager -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php the_field('gtm_code', 'options'); ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="page" class="wrapper">
		<div class="content">
			<!-- Section Header -->
			<header class="site_header">
				<div class="site_header__container">
					<div class="site_header__wrapper">
						<?php
						$logo = get_field('logo', 'options');
						if ($logo) :
						?>

							<a href="<?php home_url('/') ?>" class="header_logo">
								<?php echo wp_get_attachment_image($logo, 'full') ?>
							</a>
						<?php endif; ?>
						<div class="header_contacts">
							<?php if (have_rows('phone', 'options')) :
								while (have_rows('phone', 'options')) : the_row();
							?>
									<a href="<?php echo get_sub_field('link', 'options')['url'] ?>" target="_blank" class="header_contacts__item header_phone"><?php echo get_sub_field('link', 'options')['title'] ?></a>
							<?php endwhile;
							endif;
							?>
							<?php if (have_rows('mail', 'options')) :
								while (have_rows('mail', 'options')) : the_row();
									if (have_rows('links', 'options')) :
										while (have_rows('links', 'options')) : the_row();
							?>
											<a href="<?php echo get_sub_field('link')['url'] ?>" target="_blank" class="header_contacts__item header_mail"><?php echo get_sub_field('link', 'options')['title'] ?></a>
							<?php
										endwhile;
									endif;
								endwhile;
							endif;
							?>

						</div>
					</div>

				</div>


			</header>

			<!-- Section Header END -->