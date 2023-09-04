<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ATC
 */

?>

<footer class="footer">
	<div class="footer__container">
		<div class="footer__wraper">
			<div class="footer_top">
				<div class="footer_title small_title">Contact</div>
				<div class="footer_items">
					<?php if (have_rows('phone', 'options')) :
						while (have_rows('phone', 'options')) : the_row();
					?>
							<div class="footer_item footer_contact">
								<?php if (get_sub_field('label')) : ?>
									<div class="footer_item__title">
										<?php the_sub_field('label') ?>
									</div>
								<?php endif; ?>
								<a href="<?php echo get_sub_field('link')['url'] ?>" target="_blank" class="footer_item__link"><?php echo get_sub_field('link')['title'] ?></a>
							</div>
					<?php endwhile;
					endif;
					?>
					<?php if (have_rows('mail', 'options')) :
						while (have_rows('mail', 'options')) : the_row();
					?>
							<div class="footer_item footer_contact">
								<?php if (get_sub_field('label')) : ?>
									<div class="footer_item__title">
										<?php the_sub_field('label') ?>
									</div>
								<?php endif; ?>
								<div class="footer_item__email">
								<?php if (have_rows('links', 'options')) :
									while (have_rows('links', 'options')) : the_row();
								?>

										<a href="<?php echo get_sub_field('link', 'options')['url'] ?>" target="_blank" class="footer_item__link"><?php echo get_sub_field('link', 'options')['title'] ?></a>
								<?php endwhile;
								endif;
								?>
								</div>		
							</div>
					<?php endwhile;
					endif;
					?>
					<?php if (have_rows('linkedin', 'options')) :
						while (have_rows('linkedin', 'options')) : the_row();
					?>
							<div class="footer_item footer_link">
								<a href="<?php echo get_sub_field('link', 'options')['url'] ?>" target="_blank">
									<?php
									$image = get_sub_field('image');
									if (isset($image)) : ?>
										<?php echo wp_get_attachment_image($image, 'full'); ?>
									<?php endif; ?>
								</a>
							</div>
					<?php endwhile;
					endif;
					?>
				</div>
			</div>
			<div class="footer_bottom">
				<?php if (get_field('footer_title', 'options')) : ?>
					<div class="footer_bottom__title section_title">
						<?php the_field('footer_title', 'options') ?>
					</div>
				<?php endif; ?>
				<div class="footer_bottom__wrapper">
					<div class="footer_left">
						<div class="footer_left__items">
							<?php if (have_rows('footer_contact', 'options')) :
								while (have_rows('footer_contact', 'options')) : the_row();
							?>
									<div class="footer_left__item">
										<?php if (get_sub_field('label')) : ?>
											<div class="footer_item__title">
												<?php the_sub_field('label') ?>
											</div>
										<?php endif; ?>
										<a href="<?php echo get_sub_field('link', 'options')['url'] ?>" target="_blank" class="footer_item__link"><?php echo get_sub_field('link', 'options')['title'] ?></a>
									</div>
							<?php endwhile;
							endif;
							?>
							<div class="footer_left__bottom">
								<?php if (get_field('pic', 'options')) : ?>
									<div class="footer_left__title">
										<?php the_field('pic', 'options') ?>
									</div>
								<?php endif; ?>
								<?php if (have_rows('contcat_table', 'options')) : ?>
									<div class="footer_left__table">
										<?php while (have_rows('contcat_table', 'options')) : the_row(); ?>
											<div class="footer_left__row">
												<div class="footer_item__title">
													<?php the_sub_field('label') ?>
												</div>
												<a href="<?php echo get_sub_field('link', 'options')['url'] ?>" target="_blank" class="footer_item__link"><?php echo get_sub_field('link', 'options')['title'] ?></a>
											</div>
										<?php endwhile; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php if (get_field('map', 'options')) : ?>
						<div class="footer_right">
							<?php the_field('map', 'options') ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>