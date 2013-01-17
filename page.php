<?php get_header(); ?>

	<div class="container">

		<div class="row">

			<div class="span12">

				<h3><?php the_title(); ?></h3>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_post(); ?>

					<?php the_content(); ?>

				</article>

			</div>

		</div>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>