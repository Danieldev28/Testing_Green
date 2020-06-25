$(document).ready(function() {

    // Hide error message
    $(function() {

        $("#fname_error_message").hide();
        $("#lname_error_message").hide();
        $("#email_error_message").hide();
        $("#phone_error_message").hide();
        $("#city_error_message").hide();
        $("#pcode_error_message").hide();


        //  Set each form entry class to false
        var fname_error = false;
        var lname_error = false;
        var email_error = false;
        var phone_error = false;
        var city_error = false;
        var pcode_error = false;
        var size_error = false;
        var heard_error = false;
        var price_error = false;
        var inlineRadioOptions_error = false;

        // call focusout function for eacch piece of personal information entered
        $("#mail-fname").focusout(function() {
            // alert("here!");
            check_fname();
        });

        $("#mail-lname").focusout(function() {
            // alert("here!");
            check_lname();
        });

        $("#mail-email").focusout(function() {
            // alert("here!");
            check_email();
        });

        $("#mail-phone").focusout(function() {
            // alert("here!");
            check_phone();
        });

        $("#mail-city").focusout(function() {
            // alert("here!");
            check_city();
        });

        $("#mail-pcode").focusout(function() {
            // alert("here!");
            check_pcode();
        });


        // Check each personal information entry against function regex regular expression
        function check_fname() {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#mail-fname").val()
            if (pattern.test(fname) && fname !== '') {
                $("#fname_error_message").hide();
                $("#mail-fname").css("border-bottom", "2px solid #34F458");

            }
            else {
                $("#fname_error_message").html("Should contain only characters");
                $("#fname_error_message").show();
                $("#mail-fname").css("border-bottom", "2px solid #F90A0A");
                fname_error = true;
            }
        };

        function check_lname() {
            var pattern = /^[a-zA-Z]*$/;
            var lname = $("#mail-lname").val()
            if (pattern.test(lname) && lname !== '') {
                $("#lname_error_message").hide();
                $("#mail-lname").css("border-bottom", "2px solid #34F458");

            }
            else {
                $("#lname_error_message").html("Should contain only characters");
                $("#lname_error_message").show();
                $("#mail-lname").css("border-bottom", "2px solid #F90A0A");
                lname_error = true;
            }
        };

        function check_email() {
            var pattern = /^([a-zA-Z0-14_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var email = $("#mail-email").val();
            if (pattern.test(email) && email !== '') {
                $("#email_error_message").hide();
                $("#mail-email").css("border-bottom", "2px solid #34F458");

            }
            else {
                $("#email_error_message").html("Invalid Email");
                $("#email_error_message").show();
                $("#mail-email").css("border-bottom", "2px solid #F90A0A");
                email_error = true;

            }
        };

        function check_phone() {
            var pattern = /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/;
            var phone = $("#mail-phone").val();
            if (pattern.test(phone) && phone !== '') {
                $("#phone_error_message").hide();
                $("#mail-phone").css("border-bottom", "2px solid #34F458");

            }
            else {
                $("#phone_error_message").html("Invalid phone number");
                $("#phone_error_message").show();
                $("#mail-phone").css("border-bottom", "2px solid #F90A0A");
                phone_error = true;

            }
        };

        function check_city() {
            var pattern = /^[a-zA-Z',.\s-]{1,25}$/;
            var city = $("#mail-city").val();
            if (pattern.test(city) && city !== '') {
                $("#city_error_message").hide();
                $("#mail-city").css("border-bottom", "2px solid #34F458");

            }
            else {
                $("#city_error_message").html("Invalid City Name");
                $("#city_error_message").show();
                $("#mail-city").css("border-bottom", "2px solid #F90A0A");
                city_error = true;

            }
        };

        function check_pcode() {
            var pattern = /^[A-Za-z]\d[A-Za-z]?\d[A-Za-z]\d$/;
            var pcode = $("#mail-pcode").val();
            if (pattern.test(pcode) && pcode !== '') {
                $("#pcode_error_message").hide();
                $("#mail-pcode").css("border-bottom", "2px solid #34F458");

            }
            else {
                $("#pcode_error_message").html("Invalid Postal Code Format");
                $("#pcode_error_message").show();
                $("#mail-pcode").css("border-bottom", "2px solid #F90A0A");
                pcode_error = true;

            }
        };
        // Call all check field variables set them to false, call all functions to check for regex pattern
        $("#registration-form").submit(function() {
            fname_error = false;
            lname_error = false;
            email_error = false;
            phone_error = false;
            city_error = false;
            pcode_error = false;
            size_error = false;
            heard_error = false;
            price_error = false;
            inlineRadioOptions_error = false;

            check_fname();
            check_lname();
            check_email();
            check_phone();
            check_pcode();
            check_city();

            // Onclick of submit, ensure all error variables are set to false, before proceeding to process the form  and show registration message
            if (fname_error === false && lname_error === false && email_error === false && phone_error === false && city_error === false && pcode_error === false && size_error === false && heard_error === false && price_error === false && inlineRadioOptions_error === false) {
                $("#message_user").show();
                return true;
            }
            else {
                alert("Please Fill All Fields Correctly");
                return false;
            }

        });
    });
});
