<section class="barra-posts">
	<div class="container">
		<div class="row">
			<section id="banner">
				<div class="container">
					<h3>FROM THE BLOG</h3>
					<p>
						Checkout the latest entries from my blog - <a href="<?php get_site_url(); ?>category/blog">Go to my blog</a>
					</p>
					<br />
					<?php query_posts('posts_per_page=3&cat=blog'); ?>
					<div class="row">
					    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				        <div class="posts col-sm-4">
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


