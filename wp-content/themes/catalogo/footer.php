
        
    </div>
    <footer
        <div class="text-center">
            <span>CENTRAL: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-telefono2.png" style="height: 23px; margin-top: -8px;"><strong style="font-size: 23px; padding-right: 10px;">418-3838</strong></span>
            <span> ANEXOS: Provincias(12-13-15); Lima: (18 y 16-21)</span>
        </div><hr style="margin: 10px 0;"></hr>
        <div class="text-center">
            Triathlon Catálogos Deportivos | Todos los derechos reservados | <?php echo date("Y"); ?>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
    
	<script src="//code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	    $(document).ready(function() {
            $("#modal-ads").modal('show');
            $('#carousel-marcas').carousel({
        	    interval: 3000
        	});
            $('#carousel-novedades').carousel({
        	    interval: 3000
        	});
            $('#carousel-catalogos').carousel({
        	    interval: 3000
        	});
        });
	</script>
</body>
</html>