
var errors;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

(function ($) {
    "use strict";


    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })
    })


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $(document).on('click','#login',function(e){
        e.preventDefault();
        $('#login-alert').empty().hide();
        errors = 0;
        $("[required]").each(function (row, value) {
            if ($(this).val() == '') {
                $(this).css('border', '2px solid rgba(255, 124, 163, 0.98)');
                errors++;
            }
            $(this).change(function () {
                if ($(this).val() == '') {
                    errors++;
                    $(this).css('border', '2px solid rgba(255, 124, 163, 0.98)');
                }
                else {
                    $(this).css('border', '');
                }
            });
        });

        if (errors == 0) {
            var url = $(this).data('url');
            var input = $('#loginForm').serialize();
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'JSON',
                data: input,

                success: function (response) {
                    $('#loginForm')[0].reset();
                    $('#infoTable').replaceWith(response.view);
                    window.location = response.redirect;
                    console.log(response);
                },

                error: function (response) {
                    console.log(response);
                    $.each(response.responseJSON.errors, function(index,value){
                        $('#login-alert').append(value + '<br>').show();
                    });
                }
            });
        }
    });





    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }

    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).addClass('active');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).removeClass('active');
            showPass = 0;
        }

    });


})(jQuery);
