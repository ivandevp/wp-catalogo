<?php

get_header(); ?>

<style>

iframe {
    border: 0px solid #838383;}

.mob-cat18{
display:none;}
.cat18{
display:block;}

@media only screen and (max-width: 768px) {
.cat18{
display:none !important;}

.mob-cat18{
display:block !important;}}

</style>
<!-- 
	<section class="banner">
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>"/>
	</section>-->

    <section class="afiliate">
    	<div class="row">
            <div class=" col-xs-12">
            	<h1 style="color:#00b0e9;"><?php the_title(); ?></h1>
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