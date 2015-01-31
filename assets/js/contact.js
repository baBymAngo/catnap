(function(){
    $('#contact-form').submit(function(){
    
        $(this).serialize();

        var firstName = $('input.first-name').val(),
            lastName = $('input.last-name').val(),
            address = $('input.email').val(),
            message = $('textarea.message').val();

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
                        swal("???", "??????");
                        break;
                }
            },
            error: function(error){
                // There seems to be something wrong with our servers
                alert('Error! Could not connect to process-email.php');
            }
       });
        
        function clear(){
            $('input.first-name').val("");
            $('input.last-name').val("");
            $('input.email').val("");
            $('textarea.message').val("");
        }

        return false;
    });
    
})();