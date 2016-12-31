<?php

get_header(); ?>
    <section class="banner">
		<div id="banner-carousel" class="carousel slide" data-ride="carousel">
			<?php
				$args = array('post_type' => 'cat_banner', 'category_name' => 'catalogo', 'nopaging' => true, 'orderby' => 'menu_order date');
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
		</div>
	</section>
	<section id="fs-container" class="fs-container"></section>
	<section class="catalog active">
		<div class="buttons">
			<button type="button" class="prev">Prev</button>
			<button type="button" class="next">Next</button>
			<select class="slide-to">
				<option data-slide-to="0">Pag 1</option>
				<option data-slide-to="1">Pag 2-3</option>
				<option data-slide-to="2">Pag 4-5</option>
				<option data-slide-to="3">Pag 6-7</option>
				<option data-slide-to="4">Pag 8-9</option>
				<option data-slide-to="5">Pag 10-11</option>
				<option data-slide-to="6">Pag 12-13</option>
				<option data-slide-to="7">Pag 14-15</option>
				<option data-slide-to="8">Pag 16-17</option>
				<option data-slide-to="9">Pag 18-19</option>
				<option data-slide-to="10">Pag 20-21</option>
				<option data-slide-to="11">Pag 22-23</option>
				<option data-slide-to="12">Pag 24-25</option>
				<option data-slide-to="13">Pag 26-27</option>
			</select>
			<button type="button" class="fullscreen">Fullscreen</button>
		</div>
		<ol class="content">
			<li data-image="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_001.jpg" class="current">
				<img class="lazy" data-original="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_001.jpg" alt=" Image 1" />
			</li>
			<li data-image="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_002.jpg">
				<img class="lazy" data-original="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_002.jpg" alt=" Image 2" />
			</li>
			<li data-image="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_003.jpg">
				<img class="lazy" data-original="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_003.jpg" alt=" Image 3" />
			</li>
			<li data-image="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_004.jpg">
				<img class="lazy" data-original="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_004.jpg" alt=" Image 4" />
			</li>
			<li data-image="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_005.jpg">
				<img class="lazy" data-original="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_005.jpg" alt=" Image 5" />
			</li>
			<li data-image="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_006.jpg">
				<img class="lazy" data-original="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_006.jpg" alt=" Image 6" />
			</li>
			<li data-image="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_007.jpg">
				<img class="lazy" data-original="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_007.jpg" alt=" Image 7" />
			</li>
			<li data-image="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_008.jpg">
				<img class="lazy" data-original="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_008.jpg" alt=" Image 8" />
			</li>
			<li data-image="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_009.jpg">
				<img class="lazy" data-original="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_009.jpg" alt=" Image 9" />
			</li>
			<li data-image="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_010.jpg">
				<img class="lazy" data-original="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_010.jpg" alt=" Image 10" />
			</li>
			<li data-image="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_011.jpg">
				<img class="lazy" data-original="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_011.jpg" alt=" Image 11" />
			</li>
			<li data-image="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_012.jpg">
				<img class="lazy" data-original="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_012.jpg" alt=" Image 12" />
			</li>
			<li data-image="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_013.jpg">
				<img class="lazy" data-original="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_013.jpg" alt=" Image 13" />
			</li>
			<li data-image="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_014.jpg">
				<img class="lazy" data-original="http://catalogothn.com.pe/images/catalogos/catalogo6/CATALOGO%20DEPORTIVOS_Page_014.jpg" alt=" Image 14" />
			</li>
		</ol>
	</section>
	<p>*Para hacer <strong>zoom</strong>, pasar el puntero del mouse sobre la imagen.</p>
<?php

get_footer('catalogo'); ?>