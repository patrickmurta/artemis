<section class="barra-temas">
	<div class="container">
		<div class="row">
			<section id="banner">
				<div class="container">
					<h3>WORDPRESS THEMES</h3>
					<p>
						Checkout the latest entries in my theme collection - <a href="<?php get_site_url(); ?>category/temas-wordpress"><strong>View all themes</strong></a>
					</p>
					<br />
					<?php query_posts('posts_per_page=3&cat=temas-wordpress'); ?>
					<div class="row">
					    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				        <div class="temas col-sm-4">
							<?php if ( has_post_thumbnail()) { $url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
						    <a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>"> <img src="<?php echo $url; ?>" alt="<?php the_title() ?>"></a>
				            <h3><a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>" ><?php the_title() ?></a></h3>
				            <p><?php the_excerpt() ?></p>
				            <p><?php the_tags('Tags: ', ', '); ?></p>
				        </div><!-- col -->
				        <?php } ?>
				        <?php endwhile; endif; ?>
			        </div><!-- row -->
			    </div><!-- container -->
			</section><!-- services -->
			<?php wp_reset_query(); ?>
		</div>
	</div>
</section>