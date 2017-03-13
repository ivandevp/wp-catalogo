<?php

get_header(); ?>
<div class="sombra">
    <section class="afiliate">
    	<div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-12">
		    	<?php
					if ( function_exists( 'ninja_forms_display_form' ) ) {
					  ninja_forms_display_form( 1 );
					}
				?>
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/borde-final.png">
    </section>
</div>    
<?php

get_footer(); ?>