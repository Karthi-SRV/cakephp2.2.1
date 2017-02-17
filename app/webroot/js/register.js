$(document).ready(function(){
	jQuery.validator.setDefaults({
		errorPlacement : function(error, element) {
			element.removeClass('has-success').addClass('has-error');
		}
	});
	
	base_path = $('#base_path').val();
	
	$("#register").validate({
		submitHandler : function(form) {
			form.submit();
		},
		onfocusout: function (element) {
	        $(element).valid();
	    },
		rules : {
			name : {
				required : true
			},
			email : {
				required : true,
				email: true,
				remote: {
					url: base_path+"users/check_email",
					type: "post",
					data: {
						email: function() {
							return $( "#email" ).val();
						}
					}
				}
			},
			password : {
				required : true
			},
			confirm_password : {
				required : true,
				equalTo: "#password"
			}
		},
		messages : {
			name : {
				required : "Please enter name"
			},
			email : {
				required : "Please enter email",
				remote : "Email already exists"
			},
			password : {
				required : "Please enter password"
			},
			confirm_password : {
				required : "Please enter confirm password",
				equalTo: "Password and confirm password doesn't match"
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