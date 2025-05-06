<script type="text/javascript">
	$(document).ready(function() {
		$.validator.addMethod("floatNumber", function(value, element) {
            return this.optional(element) || /^-?\d+(\.\d+)?$/.test(value);
        }, "Please enter a valid float number.");
	    // Define validation rules
	    const validationRules = {
	        gst: {
	            required: true,
				floatNumber: true,
	        },
	        cgst: {
	            required: true,
	            floatNumber: true,
	        },
	        sgst: {
	            required: true,
				floatNumber: true,
	        }
	    };

	    // Define validation messages
	    const validationMessages = {
	        gst: {
	            required: "Please enter the GST.",
	            floatNumber: "Please enter a valid GST",
	        },
	        cgst: {
	            required: "Please enter the CGST",
	            floatNumber: "Please enter a valid CGST",
	        },
	        sgst: {
				required: "Please enter the SGST",
				floatNumber: "Please enter a valid SGST",
	        },
	    };

	    // Initialize validation for both forms
	    $("#fAddConfiguration").validate({
	        rules: validationRules,
	        messages: validationMessages,
	        errorElement: 'span',
		    errorPlacement: function (error, element) {
		      	error.addClass('invalid-feedback');
		      	element.closest('.form-group').append(error);
		    },
		    highlight: function (element, errorClass, validClass) {
		      	$(element).addClass('is-invalid');
		    },
		    unhighlight: function (element, errorClass, validClass) {
		      	$(element).removeClass('is-invalid');
		    }
	    });
	});
</script>
