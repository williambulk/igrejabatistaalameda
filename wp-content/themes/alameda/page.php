<?php
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<style type="text/css">
	.invisible {
		background-color: rgba(0, 0, 0, 0.7) !important;
	}
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="container">
				<div class="row pb50 pb50m">
					<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
					<img src="<?php echo $featured_img_url; ?>);" class="responsive-img">
					<div class="col s12 m8 push-m2 pt30m pt50 pb50">
						<h1 class="turquesa-alameda-text center f30m f40 pb50 pb30m mg0 mg0m"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>