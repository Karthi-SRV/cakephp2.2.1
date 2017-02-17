//Validation starts here
	jQuery.validator.setDefaults({
		errorPlacement : function(error, element) {
			element.removeClass('has-success').addClass('has-error');
		}
	});

	$('#login').validate( {
		submitHandler : function(form) {
			form.submit();
		},
		rules : {
			email : {
				required : true,
				email : true							
			},
			password :{
				required : true		
			}
		},
		messages : {
			email : {
				required : "Please enter email"								
			},
			password :{
				required : "Please enter password"
			}
		},
		highlight : function(element) {
			$(element).removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			 $(element).removeClass('has-error').addClass('has-success');
		}
	});
	
	
	
	
