<?php

get_header(); ?>
<div class="reclamaciones">
	<div>
	<img class="reclamaciones-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/libro-de-reclamaciones.png">        
        <div class="encabezado">
            <div class="reclamacion">Hoja de Reclamación Nº <?php echo str_pad($result, 6, "0", STR_PAD_LEFT); ?></div>
            <div><span class="fechatxt">Fecha de reclamo o queja:</span><span class="fecha" id="hoy"></span></div> 
        </div>
		<?php $postid = the_ID();

		?>

		

    <section class="">
    	<div class="row">
            <div class="col-xs-12">
		    	<?php
					if ( function_exists( 'ninja_forms_display_form' ) ) {
					  ninja_forms_display_form( 7 );
					}
				?>
			</div>
		</div>
		
	</section>		
</div>
</div>
 
<script type="text/javascript">
function makeArray() {
for (i = 0; i<makeArray.arguments.length; i++)
this[i + 1] = makeArray.arguments[i];}
var months = new makeArray('Enero','Febrero','Marzo','Abril','Mayo',
'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
var date = new Date();
var day = date.getDate();
var month = date.getMonth() + 1;
var yy = date.getYear();
var year = (yy < 1000) ? yy + 1900 : yy;
document.getElementById("hoy").innerHTML  = (day + " de " + months[month] + " del " + year);
</script>


<?php
get_footer(); ?>