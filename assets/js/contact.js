$(document).ready(function() {

    /* ======= jQuery form validator ======= */
    /* Ref: http://jqueryvalidation.org/documentation/ */
    $("#contact-form").validate({
		messages: {

		    name: {
    			required: 'Porfavor Ingrese su nombre' //You can customise this message
			},
			email: {
				required: 'Por favor Ingrese su email' //You can customise this message
			},
			message: {
				required: 'Por favor ingrese su mensaje' //You can customise this message
			}

		}

	});


});
