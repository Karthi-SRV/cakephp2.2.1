$(document).ready(function(){
	jQuery.validator.setDefaults({
		errorPlacement : function(error, element) {
			element.removeClass('has-success').addClass('has-error');
		}
	});
	
	base_path = $('#base_path').val();
	$("#forgetpassword").validate({
		submitHandler : function(form) {
			$('#password_btn').attr('disabled','disabled');
	        form.submit();
		},
		onfocusout: function (element) {
	        $(element).valid();
	    },
		rules : {
			email : {
				required : true,
				email: true,
				remote: {
					url: base_path+"users/check_email_exists",
					type: "post",
					data: {
						email: function() {
							return $( "#email" ).val();
						}
					}
				}
			}
		},
		messages : {
			email : {
				required : "Please enter email",
				remote : "Email not exists"
			}
		},
		errorPlacement : function(error, element) {
			$(element).closest('div').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('div').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			 $(element).closest('div').removeClass('has-error').addClass('has-success');
			 $(element).closest('div').find('.help-block').html('');
		}
	});
	
	
});