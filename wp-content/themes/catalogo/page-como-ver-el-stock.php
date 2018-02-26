<?php
get_header(); ?>

<section>
<div class="col-xs-12">
    <h1 style="padding-top: 25px;padding-bottom: 25px;text-align: center;"><?php the_title(); ?></h1>
    <div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <?php endif; ?>
    </div>
</div>
</section>


<?php
get_footer(); ?>