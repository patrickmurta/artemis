<?php get_header(); ?>
<div class="content">
	<main>
		<section class="banner">
			<div class="container">
				<div class="row">
					<h3 class="text-center">
							Hello
					</h3>
					<h2 class="text-center">
						I'm Patrick Murta
					</h2>
					<p class="text-center">
						I am a freelance wordpress developer from Vila Velha, Brazil. I love to work with HTML, CSS, jQuery, PHP, Photoshop, and digital marketing. You can find my works, tutorials, freebies and my occasional ramblings on this site.
					</p>
					<?php 
					if(is_active_sidebar('redes-sociais')){
						dynamic_sidebar('redes-sociais');
					}
					?>
				</div>
			</div>
		</section>
		<?php get_template_part('temas-home'); ?>
		<?php get_template_part('blog-home'); ?>
	</main>	
</div>
<?php get_footer(); ?>
