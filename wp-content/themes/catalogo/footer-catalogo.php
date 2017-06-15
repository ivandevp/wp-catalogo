
        
    </div>
    <div style="box-shadow: inset 0 -14px 35px -13px rgba(0, 0, 0, 0.53); height: 30px; margin-top: -30px; position: relative; z-index: 1;"></div>
    <footer>
        <div class="text-center">
            <span>CENTRAL: <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-telefono2.png" style="height: 23px; margin-top: -8px;"><strong style="font-size: 23px; padding-right: 10px;">418-3838</strong></span>
            <span> ANEXOS: Provincias(12-13-15); Lima: (18 y 16-21)</span>
        </div>
        <div class="text-center" style="font-size: 12px; margin: 1em 0 0;">
            Triathlon Catálogos Deportivos | Todos los derechos reservados | <?php echo date("Y"); ?>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
    
	<script src="//code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	<script type="text/javascript">
	    $(document).ready(function() {
	        var $ultimoCatalogo = $(".catalogo").first();
	        var urlValidation = 'http://181.65.237.229/thn/api/receipt/';
	        $ultimoCatalogo.click(function (e) {
	            var redirection = $(this).find("a").attr("href");
	            e.preventDefault();
	            swal({
                  title: "Validación de Catálogo",
                  text: "Ingresa el código del ticket de compra del catálogo",
                  type: "input",
                  showCancelButton: true,
                  closeOnConfirm: false,
                  showLoaderOnConfirm: true,
                },
                function(receipt){
                  $.getJSON(urlValidation + receipt)
                    .done(function (response) {
                        if (response == null) {
                            swal("Oops...", "No se ha encontrado el ticket ingresado.", "error");
                            return;
                        } else {
                            swal("Gracias!", "Compra de catálogo validada correctamente", "success");
                            location.href = redirection;
                        }
                    })
                    .fail(function (error) {
                        console.log("error", error);
                            swal("Oops...", "Ha ocurrido un error, vuelva a intentar y si persiste contacte a alguien de soporte por favor.", "error");
                    })
            // });
                });
	        });
        });
	</script>
</body>
</html>