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
                        swal("Awesome!", "You're message has been sent successfully", "success");
                        break;
                    case 'user error':
                        swal("Oops!", "There was a problem with your submission. Please complete the form and try again.", "error");
                        break;
                    case 'fail':
                        swal("Oops...!", "Something went wrong and we couldn't send your message.", "error");
                        break;
                    default:
                        swal("I Don't know");
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