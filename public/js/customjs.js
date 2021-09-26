var errors;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#tracking-form').on('submit',function(e){
    e.preventDefault();
    swal({
        title: "Please wait...",
        icon: $(this).data('image'),
        text: 'Wait while we track your shipment',
        closeOnClickOutside: false,
        buttons: false,
    });
    var url = $(this).data('url');
    var input = $(this).serialize();
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        data: input,

        success: function(response){
            swal.close();
            window.location = response.redirect;
            console.log(response);
        },

        error: function(response){
            swal.close();
            swal({
                title: "OOPS!",
                icon: 'error',
                text: response.responseJSON.error,
                closeOnClickOutside: false,
            });
            console.log(response);
        }
    });
});

$(document).on('click', '#sendContact', function(e){
    e.preventDefault();
    errors = 0;
    $("[required]").each(function (row, value) {
        if ($(this).val() == '') {
            $(this).css('border', '2px solid rgba(232, 9, 11, 0.611765)');
            errors++;
        }
        if ($(this).attr('type') == 'email') {
            if (isEmail($(this).val())) {
                $(this).css('border', '');
            }
            else {
                errors++;
                $(this).css('border', '2px solid rgba(232, 9, 11, 0.611765)');
            }
        }
        $(this).change(function () {
            if ($(this).val() == '') {
                errors++;
                $(this).css('border', '2px solid rgba(232, 9, 11, 0.611765)');
            }
            else{
                $(this).css('border', '');
            }
        });
    });

    if(errors == 0){
        swal({
            title: "Please wait...",
            icon: $(this).data('image'),
            text: 'Wait while we send your message',
            closeOnClickOutside: false,
            buttons: false,
        });
        var url = $(this).data('url');
        var input = $('#contactForm').serialize();
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
            data: input,

            success: function (response) {
                swal.close();
                swal({
                    title: "Message Sent",
                    icon: 'success',
                    text: response.message,
                    closeOnClickOutside: false,
                });
                $('#contactForm')[0].reset();
                console.log(response);
            },

            error: function (response) {
                swal.close();
                swal({
                    title: "OOPS!",
                    icon: 'error',
                    text: response.responseJSON.error,
                    closeOnClickOutside: false,
                });
                console.log(response);
            }
        });
    }
});

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
