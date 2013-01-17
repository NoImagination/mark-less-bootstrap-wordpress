<?php get_header(); ?>

	<div class="container">

		<div class="row">

			<div class="span12">

				<h3><?php single_tag_title(); ?></h3>

				<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<a id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>" title="Link permanente para <?php the_title_attribute(); ?>">

								<h4><?php the_title(); ?></h4>

							</a>

							<?php the_content('Continuar lendo ' . get_the_title('', '', false)); ?>

							<ul>
								<li>Por <?php the_author_posts_link(); ?></li>
								<!-- <li>Site: <?php the_author_link(); ?></li> -->
								<!-- <li>Email: <?php the_author_email(); ?></li> -->
								<!-- <li>Todos os <?php the_author_posts(); ?> posts de <?php the_author_posts_link(); ?></li> -->
								<li>Postado em: <?php the_time('d/m/Y'); ?> às <?php the_time(); ?></li>
								<li>Arquivado em: <?php the_category(', '); ?></li>
								<li><?php the_tags('Tags: ', ', ', '.'); ?></li>
								<!-- <li><?php edit_post_link('Editar'); ?></li> -->
								<!-- <li><?php comments_rss_link('Feed dos comentários deste post'); ?></li> -->
								<!-- <li><a href="<?php comments_link(); ?>" title="Ir para os comentários deste post">Comentários deste post</a></li> -->
								<li><?php comments_popup_link('Nenhum comentário', '1 comentário', '% comentários'); ?></li>
							</ul>

							<!-- <?php trackback_rdf(); ?> -->

						</article>

					<?php endwhile; ?>

					<?php previous_posts_link('Posts anteriores') ?> <?php next_posts_link('Próximos posts','') ?>

					<?php else : ?>

					<h3>Ops!</h3>

					<?php _e("<p>Desculpe, mas você está procurando por algo que não está aqui.</p>"); ?>

				<?php endif; ?>

			</div>

		</div>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>