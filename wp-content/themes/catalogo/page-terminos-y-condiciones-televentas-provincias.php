<?php

get_header(); ?>
    <section class="afiliate">
    	<div class="row">
            <div class=" col-xs-12">
            	<h1><?php the_title(); ?></h1>
            	<div class="terminos-condiciones">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<?php endif; ?>

            	</div>
			</div>
		</div>
    </section>
<?php

get_footer(); ?>