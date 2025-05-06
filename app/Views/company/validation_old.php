<script type="text/javascript">
    $(document).ready(function() {
        // Define validation rules
        const validationRules = {
            company_name: {
                required: true
            },     
            company_email: {
                required: true
            },
            address: {
                required: true,
                maxlength: 100
            },
            company_gstin: {
                required: true,
                minlength: 15,
                maxlength: 15
            },
            city: {
                required: true,
            },
            state: {
                required: true,
            },       
            state_code: {
                required: true,
            },
            zipcode: {
                required: true,
                digits: true,
                minlength: 6,
                maxlength: 6
            },
            bank_name: {
                required: true,
            },
            account_holder_name: {
                required: true,
            },
            account_number: {
                required: true,
            },
            c_account_number: {
                required: true,
                equalTo: "#account_number",
            },
            ifsc_code: {
                required: true,
            },
            branch_name: {
                required: true
            },

        };

        // Define validation messages
        const validationMessages = {
            company_name: {
                required: "Please enter company name"
            },     
            company_email: {
                required: "Please enter company email"
            },
            address: {
                required: "Please enter address",
                maxlength: "Maximum 100 characters are allowed"
            },
            company_gstin: {
                required: "Please enter GSTIN",
                minlength: "GSTIN must be 15 characters",
                maxlength: "GSTIN must be 15 characters",
            },
            city: {
                required: "Please enter city"
            },
            state: {
                required: "Please enter state"
            },       
            state_code: {
                required: "Please enter state code"
            },
            zipcode: {
                required: "Please enter zipcode",
                digits: "Please enter only digits",
                minlength: "Zipcode must be 6 digits",
                maxlength: "Zipcode must be 6 digits",
            },
            bank_name: {
                required: "Please enter bank name"
            },
            account_holder_name: {
                required: "Please enter bank account holder name"
            },
            account_number: {
                required: "Please enter account number"
            },
            c_account_number: {
                required: "Please confirm account number",
                equalTo: "Account number does not match."
            },
            ifsc_code: {
                required: "Please enter IFSC code"
            },
            branch_name: {
                required: "Please enter bank branch"
            },
        };

        // Initialize validation for both forms
        $("#fCompanyDetails").validate({
            rules: validationRules,
            messages: validationMessages,
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>