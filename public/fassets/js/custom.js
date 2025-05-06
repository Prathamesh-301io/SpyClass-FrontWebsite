$(document).ready(function () {
        $("#contactForm").submit(function (event) {
            event.preventDefault(); // Prevent default form submission

            // Show the loader
            $("#preloader-active").show();

            $.ajax({
                url: site_url + "/home/submitForm",
                type: "POST",
                data: {
                    name: $("#name").val(),
                    email: $("#email").val(),
                    message: $("#message").val(),
                    school_name: $("#school_name").val(),
                    mobile: $('#mobile').val()
                },
                dataType: "json",
                success: function (response) {
                    // Hide the loader
                    $("#preloader-active").hide();

                    if (response.status === "success") {
                        alert("Message sent successfully!");
                        $("#contactForm")[0].reset(); // Reset the form
                    } else {
                        alert("Error: " + response.message);
                    }
                },
                error: function () {
                    // Hide the loader
                    $("#preloader-active").hide();

                    alert("Something went wrong. Please try again.");
                }
            });
        });
    });