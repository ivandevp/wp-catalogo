<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!--	<section class="banner">
		<div id="banner-carousel" class="carousel slide" data-ride="carousel">
			<?php
				$args = array('post_type' => 'cat_banner', 'category_name' => 'inicio', 'nopaging' => true, 'orderby' => 'menu_order date', 'order' => 'ASC');
				$banners = new WP_Query($args);
				$listItems = ''; $slides = '';
				while ($banners->have_posts()): $banners->the_post();
					$i = $banners->current_post;
					$listItems .= '<li ' . ($i == 0 ? 'class="active"' : '') . ' data-target="#banner-carousel" data-slide-to="' . $i . '"></li>'; 
					$image_url = 'http://radioincorso.it/wp-content/uploads/2016/01/banner-placeholder.jpg';
					if (has_post_thumbnail()):
						$image_url = get_the_post_thumbnail_url();
					endif;
					$image_alt = get_the_title();
					$slides .= '<div class="item' . ($i == 0 ? ' active"' : '"'). '><img src="' . $image_url . '" alt="' . $image_alt . '"/></div>'; ?>
			<?php endwhile; ?>
			<ol class="carousel-indicators">
				<?php echo $listItems; ?>
			</ol>
			<div class="carousel-inner" role="listbox">
				<?php echo $slides; ?>
			</div>

		<a class="left carousel-control" href="#banner-carousel" data-slide="prev" style="background: transparent; padding-top: 18%; width: 6%; background-color: transparent !important;"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_flecha_izqv2.png"/></a>
	    <a class="right carousel-control" href="#banner-carousel" data-slide="next" style="background: transparent; padding-top: 18%; width: 6%; background-color: transparent !important;"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_flechav2.png"/></a>

		</div>
	</section> -->

<!-- nuevo slider principal -->
<section>
	<div class="banner">
		<div class="owl-principal owl-theme">
		    <?php
				$args = array('post_type' => 'cat_banner', 'category_name' => 'inicio', 'nopaging' => true, 'orderby' => 'menu_order date', 'order' => 'ASC');
				$banners = new WP_Query($args); 
				while ($banners->have_posts()): $banners->the_post(); 
		            $i = $banners->current_post + 1; 
		            	if (($i + 2) % 2 === 0) : ?>
				             
					<div class="item <?php if ($i === 1) echo "active"; ?>">
				<?php endif; ?>
				<?php 
				    $image_url = 'http://geniussys.com/img/placeholder/blogpost-placeholder-100x100.png';
						if (has_post_thumbnail()):
							$image_url = get_the_post_thumbnail_url();
						endif;
					$image_alt = get_the_title(); ?>

		            <div>
		                <img  src="<?php echo $image_url; ?>"  alt="<?php echo $image_alt; ?>" />
		            </div>
		        <?php if ($i % 2 === 0 || $i === $banners->found_posts) : ?>
				    </div>
					
				<?php endif; ?>
				<?php endwhile; ?>

	</div>
</div>
</section>
<!-- nuevo slider principal -->

<!-- Politica -->
<section class="politica diagonal-pos">
    <?php
		$args = array('post_type' => 'cat_politica', 'nopaging' => true, 'orderby' => 'menu_order date', 'order' => 'ASC');
		$politica = new WP_Query($args); 
			while ($politica->have_posts()): $politica->the_post(); 
	            	$i = $politica->current_post + 1; 
	            	if (($i + 3) % 4 === 0) : ?>
			    <?php endif; ?>
				<?php endwhile; ?>
	        <h2 class="text-center"><?php the_title(); ?></h2>
	        <div class="row ">
				<div>
	                <div class="text-center contenido-politica">
	                    <img class="img-politica" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
	                </div>
	            </div>
	        </div>
	</section>
<!-- fin de politica -->

	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/borde-banner.png" class="section-arrow-upper"/>
    <!-- <section class="beneficios diagonal-pos"> -->
	<section class="diagonal-pos">
    	<div class="diagonal-neg">
	        <h2 class="text-center">BENEFICIOS</h2>
	        <div class="row ">
	            <?php
					$args = array('post_type' => 'cat_beneficios', 'nopaging' => true, 'orderby' => 'menu_order date', 'order' => 'ASC');
					$beneficios = new WP_Query($args); 
					while ($beneficios->have_posts()): $beneficios->the_post(); 
	        		$i = $beneficios->current_post + 1; 
	        		if (($i + 3) % 4 === 0) : ?>
	        			<div class="row">
	        		<?php endif; ?>
	                <div class="col-md-3 col-xs-6">
	                    <div class="text-center contenido-beneficio">
	                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
	                        <div class="triang-arriba"></div>
	                        <p><?php echo get_the_content(); ?></p>
	                    </div>
	                </div>
	                <?php if ($i % 4 === 0) : ?>
	                	</div>
	                	<hr style="box-shadow: none; margin: 20px 0; background-color: #dedede;">
	                <?php endif ?>
				<?php endwhile; ?>
	        </div>
		          
	    </div>    
    </section>
	

  <!-- producto seleccionados -->
  <section>
  <div class="container">
  <h2 class="text-center">DESTACADOS DE LA SEMANA <BR/> SEDE HIGUERETA</h2>
          <div class="owl-prodselec owl-theme">
            <?php
          $args = array('post_type' => 'cat_prodselec', 'nopaging' => true, 'orderby' => 'menu_order date', 'order' => 'ASC');
          $prodselec = new WP_Query($args); 
          while ($prodselec->have_posts()): $prodselec->the_post(); 
                  $i = $prodselec->current_post + 1; 
                  if (($i + 2 ) % 2 === 0) : ?>
                      <div class="item  <?php if ($i === 1) echo "active"; ?>">
  
                  <?php endif; ?>
                  <?php 
                    $image_url = 'http://geniussys.com/img/placeholder/blogpost-placeholder-100x100.png';
              if (has_post_thumbnail()):
                $image_url = get_the_post_thumbnail_url();
              endif;
              $image_alt = get_the_title(); ?>
                          <div >
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"/>
                            <span><p style="text-align: center;"><?php echo get_the_content(); ?></p></span>
                          </div>
                      <?php if ($i % 2 === 0 || $i === $prodselec->found_posts) : ?>
                          
                      </div>
                  <?php endif; ?>
        <?php endwhile; ?>
          </div>
  </div>
</section>

<!-- producto seleccionados -->



<!-- nueva seccion -->
<section>
  <div class="container">
<h2 class="text-center">NOVEDADES</h2>
<div>
<div class="owl-carousel owl-theme"> 
		    <?php
				$args = array('post_type' => 'cat_novedades', 'nopaging' => true, 'orderby' => 'menu_order date', 'order' => 'ASC');
				$novedades = new WP_Query($args); 
				while ($novedades->have_posts()): $novedades->the_post(); 
		            $i = $novedades->current_post + 1; 
		            	if (($i + 2) % 2 === 0) : ?>
				                
					<div class="item center <?php if ($i === 1) echo "active"; ?>">
				<?php endif; ?>
				<?php 
				    $image_url = 'http://geniussys.com/img/placeholder/blogpost-placeholder-100x100.png';
						if (has_post_thumbnail()):
							$image_url = get_the_post_thumbnail_url();
						endif;
					$image_alt = get_the_title(); ?>

		            <div>
		                <img  src="<?php echo $image_url; ?>"  alt="<?php echo $image_alt; ?>" />
		            </div>
		        <?php if ($i % 2 === 0 || $i === $novedades->found_posts) : ?>
				    </div>
					
				<?php endif; ?>
				<?php endwhile; ?>
</div>
</div>
</div>
</section>
<!-- fin de seccion -->

<section>
	<div class="container">
	<h2 class="text-center">NUESTRAS MARCAS</h2>
	        <div class="owl-marcas owl-theme">
	        	<?php
					$args = array('post_type' => 'cat_marcas', 'nopaging' => true, 'orderby' => 'menu_order date', 'order' => 'ASC');
					$marcas = new WP_Query($args); 
					while ($marcas->have_posts()): $marcas->the_post(); 
	            		$i = $marcas->current_post + 1; 
	            		if (($i + 2	) % 2 === 0) : ?>
			                <div class="item center <?php if ($i === 1) echo "active"; ?>">
	
			            <?php endif; ?>
			            <?php 
			            	$image_url = 'http://geniussys.com/img/placeholder/blogpost-placeholder-100x100.png';
							if (has_post_thumbnail()):
								$image_url = get_the_post_thumbnail_url();
							endif;
							$image_alt = get_the_title(); ?>
	                        <div >
	                        	<img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"/>
	                        </div>
	                    <?php if ($i % 2 === 0 || $i === $marcas->found_posts) : ?>
			                    
			                </div>
			            <?php endif; ?>
				<?php endwhile; ?>
	        </div>
	</div>
	</section>
	
<?php get_footer(); ?>
