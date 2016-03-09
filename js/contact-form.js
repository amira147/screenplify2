(function ($) {

    "use strict";

    $("#contact").validate();
    
    /* =================================
    ===  CONTACT FORM               ====
    =================================== */
    $("#contact").submit(function (e) {
        e.preventDefault();
        var name = $("#form-name").val();
        var email = $("#form-email").val();
        // var subject = $("#form-subject").val();
        var tel = $("#form-tel").val();
        var message = $("#form-message").val();
        var captcha = $("#6_letters_code").val();
        var dataString = 'name=' + name + '&email=' + email + '&tel=' + tel + '&message=' + message + '&captcha=' + captcha;

        function validEmail(emailAddress) {
            var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
            return pattern.test(emailAddress);
        };

      

        if (validEmail(email) && (message.length > 1) && (name.length > 1)) {
            $.ajax({
                type: "POST",
                url: "send-mail.php",
                data: dataString,
                success: function (resp) {
                    console.log(resp);
                    if(resp == "email success"){
                        $('.successContent').fadeIn(1000);
                        $('.errorContent').fadeOut(500);
                        $('.contact-form-element').fadeOut(500);
                    }
                    else if(resp == "captcha fail"){
                        $('.errorContent').html('The captcha code does not match!');
                        $('.errorContent').fadeIn(1000);
                        $('.successContent').fadeOut(500);

                    }
                }
            });
        }
        else {
            $('.errorContent').html('There was a problem validating the form please check!');
            $('.errorContent').fadeIn(1000);
            $('.successContent').fadeOut(500);
        }
        return false;
    });



  
})(jQuery);

