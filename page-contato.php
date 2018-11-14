<?php get_header(); ?>
<div class="content">
	<main>

		<section class="temas">
			<div class="container">
				<div class="row">
					<div class="temas-titulo col-md-12 col-lg-12 col-sm-12">
						<h3>WORDPRESS THEMES</h3>
						<p class="temas">
							Checkout the latest entries in our theme collection - <a href="<?php get_site_url(); ?>category/temas-wordpress">View all themes</a>
						</p>
					</div>
					<div class="posts-temas col-md-4 col-lg-4">
						<?php if(have_posts()) : while (have_posts()) : the_post();	?>
						<a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
						<h1>
							<a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h1>
						<p>
							<?php the_tags('Tags: ', ', '); ?>
						</p>
						<p>
							<?php the_excerpt(); ?>
						</p>
					<?php endwhile;	else: ?>
						<p>Nao tem nada ainda pra mostrar</p>
					<?php endif; ?>
									
					</div>
				</div>
			</div>
		</section>
		<section class="posts">
			<div class="container">
				<div class="row">
					<div class="blog-titulo col-md-12 col-lg-12 col-sm-12">
						<h3>FROM THE BLOG</h3>
						<p>
							Checkout the latest entries from my blog - <a href="<?php get_site_url(); ?>category/blog">Go to my blog</a>
						</p>
					</div>
					<div class="col-md-4 col-lg-4 col-xs-12">
											<?php 
						// Se houver algum post
						if(have_posts()) :
							// Enquanto houver algum post, chame o post de determinada maneira
							while (have_posts()) : the_post();
					?>
						<a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<h1><a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<p><?php the_tags('Tags: ', ', '); ?></p>
						<p><?php the_excerpt(); ?></p>
					<?php 
					endwhile;
					else:
					 ?>
						<p>Nao tem nada ainda pra mostrar</p>
					<?php 
					endif;
					?>									
					</div>
				</div>
			</div>
		</section>
	</main>	
</div>
<?php get_footer(); ?>
