(function(){
    $('#contact-form').submit(function(){
    
        $(this).serialize();

        var firstName = $('input.contact-form--firstname').val(),
            lastName = $('input.contact-form--lastname').val(),
            address = $('input.contact-form--email').val(),
            message = $('textarea.contact-form--message').val();

        $.ajax({
            url: $('#contact-form').attr('action'),
            type: "POST",
            data: { 'firstName' : firstName, 'lastName' : lastName, 'address' : address, 'message': message },
            dataType: 'text',
            success: function(data) {
                switch(data) {
                    case 'success':
                        clear();
                        swal("Awesome!", "Your message has been sent. You will receive a confirmation email within a few minutes. Talk to you soon!", "success");
                        break;
                    case 'user error':
                        swal("Hmm...", "There was a problem with your submission. Double check to make sure your email address is spelled correctly and that you haven't left any areas blank.", "error");
                        break;
                    case 'fail':
                        swal(":(", "Computer is having a bad day. We can't send your message right now, but if you email bonjour@catnap.co with another application, that will probably work. Sorry about that!", "error");
                        break;
                    default:
                        swal("Unknown Error", "A wild Missingno attacked! We don't really know what's going on right now, so it's probably best to just send us an email with the link at the top.");
                        break;
                }
            },
            error: function(error){
                // There seems to be something wrong with our servers
                alert('Error! Could not connect to process-email.php');
            }
       });
        
        function clear(){
            $('input.contact-form--firstname').val("");
            $('input.contact-form--lastname').val("");
            $('input.contact-form--email').val("");
            $('textarea.contact-form--message').val("");
        }

        return false;
    });
    
})();