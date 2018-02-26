var validateCatalogPurchase = function(willRedirect, redirectUrl, redirectHomeUrl) {
    swal({
            title: "Validación de Catálogo",
            text: "Ingresa el Nro. Documento del ticket de compra del catálogo",
            input: "text",
            width: "478px",
            padding: 17,
            showCancelButton: true,
            confirmButtonText: 'Aceptar',
            confirmButtonColor: "rgb(140, 212, 245)",
            cancelButtonText: 'Aún no soy accesora.',
            cancelButtonColor: "#c<1c1c1",
            showCloseButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
            reverseButtons: true
        }).then(function(receipt) {
            if (receipt.value) {
                var urlValidation = 'http://170.0.82.214/catalogos/api/receipt/';
                $.getJSON(urlValidation + receipt.value)
                    .done(function(response) {
                        if (response == null) {
                            swal("Oops...", "No se ha encontrado Nro. Documento del ticket ingresado.", "error");
                            if (redirectHomeUrl) {
                                location.href = redirectHomeUrl;
                            }
                            return;
                        }
                        else {
                            sessionStorage.setItem("catalogValidation", "true");
                            swal("Gracias!", "El Nro. Documento del ticket fue ingresado correctamente", "success");
                            if (willRedirect) {
                                location.href = redirectUrl;
                            }
                        }
                    })
                    .fail(function(error) {
                        console.log("error", error);
                        swal("Oops...", "Ha ocurrido un error, vuelva a intentar y si persiste contacte a alguien de soporte por favor.", "error");
                        if (redirectHomeUrl) {
                            location.href = redirectHomeUrl;
                        }
                    });
            } else {
                if (redirectHomeUrl) {
                    //location.href = redirectHomeUrl;
                    location.href = 'http://catalogothn.com.pe/afiliate/';
                }
            }
        });
};

var callCatalogValidation = function(willRedirect, redirectUrl, redirectHomeUrl) {
    var catalogValidated = Boolean(sessionStorage.getItem("catalogValidation"));
    if (!catalogValidated) {
        validateCatalogPurchase(willRedirect, redirectUrl, redirectHomeUrl);
    } else {
        if (redirectUrl !== null) {
            location.href = redirectUrl;
        }
    }
};