<?php

get_header(); ?>

	<section class="banner">
		<img class="nosotros-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>"/>
	</section>

    <section class="afiliate">
    	<div class="row">
            <div class="col-md-6">
            	<h1 style="color:#00b0e9;"><?php the_title(); ?></h1>
            	<div class="nosotros">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<?php endif; ?>

            	</div>
			</div>

            <div class="col-md-6">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-nosotros2.png" width="100%">
			</div>

		</div>
    </section>
<?php

get_footer(); ?>