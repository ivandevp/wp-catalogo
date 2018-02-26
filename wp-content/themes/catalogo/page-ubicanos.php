<?php

get_header(); ?>
    <section class="banner">
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>"/>
    </section>
    <section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <?php endif; ?>
    </section>



<?php

get_footer(); ?>