<script>
	$(document).ready(function() {
	    $('#formValidation').formValidation({
        	locale: '{{ \App::getLocale() == 'es' ? 'es_ES' : 'en_US' }}',
	        fields: {
	            name: {
	                validators: {
	                    notEmpty:{},
	                    stringLength: {
	                    	min: 6,
	                    	max: 255
	                    }
	                }
	            },
                email: {
                    validators: {
                        notEmpty: {},
                        emailAddress: {}
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {},
                        numeric: {
                            message: "Introduce un teléfono válido"
                        },
                        stringLength: {
                            min: 10,
                            max: 20
                        }
                    }
                },
                message: {
                    validators: {
                        notEmpty: {},
                        stringLength: {
                            min: 3,
                            max: 1000
                        }
                    }
                }
	        }
	    });

        {{-- Para ejecutar recaptcha --}}
        $("#message").focus(function(){
            grecaptcha.ready(function() {
                console.log("{{ env("GRECAPTCHA_PUBLIC") }}");
                // do request for recaptcha token
                // response is promise with passed token
                grecaptcha.execute('{{ env("GRECAPTCHA_PUBLIC") }}', {action: 'get_in_touch'}).then(function(token) {
                    // add token to form
                    $('form#formValidation').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
                    $('form#formValidation').prepend('<input type="hidden" name="action" value="get_in_touch">');
                });
            });
        });
	});
</script>
