var errors;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function () {
    $(document).on('click', '#addShipment', function (e) {
        e.preventDefault();
        $('#addModal').modal('show');
    });

    $(document).on('click', '#addButton', function(e){
        e.preventDefault();
        $('#add-alert').empty().hide();
        errors = 0;
        // if($(this).data('type') == 'add'){
        //     $("[for=add]").each(function (row, value) {
        //         if ($(this).val() == '') {
        //             $(this).css('border', '2px solid rgba(232, 9, 11, 0.611765)');
        //             errors++;
        //         }
        //         $(this).change(function () {
        //             if ($(this).val() == '') {
        //                 errors++;
        //                 $(this).css('border', '2px solid rgba(232, 9, 11, 0.611765)');
        //             }
        //             else {
        //                 $(this).css('border', '');
        //             }
        //         });
        //     });
        // }
        if (errors == 0) {
            var url = $(this).data('url');
            var input = $('#addForm').serialize();
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'JSON',
                data: input,

                success: function (response) {
                    $('#addForm')[0].reset();
                    $('#infoTable').replaceWith(response.view);
                    $('#addModal').modal('hide');
                    console.log(response);
                },

                error: function (response) {
                    console.log(response);
                    $.each(response.responseJSON.errors, function (index, value) {
                        $('#add-alert').append(value + '<br>').show();
                    });
                }
            });
        }
        else{
            $('#add-alert').html('You have errors in some of your fields. Correct them and resubmit').show();
        }
    });

    $(document).on('click', '.editTracking', function (e) {
        e.preventDefault();
        console.log($(this).data());
        $('#destination').val($(this).data('destination'));
        $('#features').val($(this).data('features'));
        $('#postal').val($(this).data('postal'));
        $('#editId').val($(this).data('id'));
        $('#sender').val($(this).data('sender'));
        $('#sender_address').val($(this).data('saddress'));
        $('#receiver').val($(this).data('receiver'));
        $('#receiver_address').val($(this).data('raddress'));
        $('#editModal').modal('show');
    });

    $(document).on('click', '#editButton', function (e) {
        e.preventDefault();
        $('#edit-alert').empty().hide();
        errors = 0;
        if ($(this).data('type') == 'editTracking') {
            console.log('here');
            $("[for=editTracking]").each(function (row, value) {
                console.log($(this));
                if ($(this).val() == '') {
                    $(this).css('border', '2px solid rgba(232, 9, 11, 0.611765)');
                    errors++;
                }
                $(this).change(function () {
                    if ($(this).val() == '') {
                        errors++;
                        $(this).css('border', '2px solid rgba(232, 9, 11, 0.611765)');
                    }
                    else {
                        $(this).css('border', '');
                    }
                });
            });
        }
        console.log(errors)
        if (errors == 0) {
            var url = $(this).data('url');
            var input = $('#editForm').serialize();
            console.log(input);
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'JSON',
                data: input,

                success: function (response) {
                    $('#addForm')[0].reset();
                    $('#infoTable').replaceWith(response.view);
                    $('#editModal').modal('hide');
                    console.log(response);
                },

                error: function (response) {
                    console.log(response);
                    $.each(response.responseJSON.errors, function (index, value) {
                        $('#add-alert').append(value + '<br>').show();
                    });
                }
            });
        }

    });

    $(document).on('click', '.deleteTracking', function (e) {
        e.preventDefault();
        $('#deleteModal').modal('show');
        $('#deleteId').val($(this).data('id'));
    });

    $(document).on('click', '#confirmDelete', function (e) {
        e.preventDefault();
        var id = $('#deleteId').val();
        var url = $(this).data('url');
        $('#deleteModal').modal('hide');

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
            data: { id: id},

            success: function (response) {
                $('#infoTable').replaceWith(response.view);
                console.log(response);
            },
        });
    });

    $(document).on('click', '.deleteDetail', function (e) {
        e.preventDefault();
        $('#deleteDetailModal').modal('show');
        $('#detailId').val($(this).data('id'));
    });

    $(document).on('click', '#confirmDeleteDetail', function (e) {
        e.preventDefault();
        var id = $('#detailId').val();
        var url = $(this).data('url');
        $('#deleteDetailModal').modal('hide');

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'JSON',
            data: { id: id },

            success: function (response) {
                $('#detailsTable').replaceWith(response.view);
                console.log(response);
            },
        });
    });

    $(document).on('click', '#addDetail', function (e) {
        e.preventDefault();
        $('#detailModal').modal('show');
    });

    $(document).on('click', '#detailButton', function (e) {
        e.preventDefault();
        $('#detail-alert').empty().hide();
        errors = 0;
        // if ($(this).data('type') == 'detail') {
        //     $("[for=detail]").each(function (row, value) {
        //         if ($(this).val() == '') {
        //             console.log('empty here');
        //             console.log($(this));
        //             $(this).css('border', '2px solid rgba(232, 9, 11, 0.611765)');
        //             errors++;
        //         }
        //         $(this).change(function () {
        //             if ($(this).val() == '') {
        //                 console.log('change here');
        //                 console.log($(this).val());
        //                 errors++;
        //                 $(this).css('border', '2px solid rgba(232, 9, 11, 0.611765)');
        //             }
        //             else {
        //                 $(this).css('border', '');
        //             }
        //         });
        //     });
        // }
        
        // console.log(errors);

        if (errors == 0) {
            var url = $(this).data('url');
            var input = $('#detailForm').serialize();
            console.log(input);
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'JSON',
                data: input,

                success: function (response) {
                    $('#detailForm')[0].reset();
                    $('#detailsTable').replaceWith(response.view);
                    $('#detailModal').modal('hide');
                    console.log(response);
                },

                error: function (response) {
                    console.log(response);
                    $.each(response.responseJSON.errors, function (index, value) {
                        $('#detail-alert').append(value + '<br>').show();
                    });
                }
            });
        }
        else {
            $('#detail-alert').html('You have errors in some of your fields. Correct them and resubmit').show();
        }
    });

    $(document).on('click', '.editDetail', function (e) {
        e.preventDefault();
        $('#note').val($(this).data('note'));
        $('.description').html($(this).data('description'));
        $('#current_status').val($(this).data('status'));
        $('#current_destination').val($(this).data('destination'));
        $('.detailId').val($(this).data('id'));
        $('.date').val($(this).data('date'));
        $('#time').val($(this).data('time'));
        $('#editDetailModal').modal('show');
    });

    $(document).on('click', '#editDetailButton', function (e) {
        e.preventDefault();
        $('#edit-detailAlert').empty().hide();
        errors = 0;
        if ($(this).data('type') == 'edit') {
            console.log('here');
            $("[for=edit]").each(function (row, value) {
                console.log($(this));
                if ($(this).val() == '') {
                    $(this).css('border', '2px solid rgba(232, 9, 11, 0.611765)');
                    errors++;
                }
                $(this).change(function () {
                    if ($(this).val() == '') {
                        errors++;
                        $(this).css('border', '2px solid rgba(232, 9, 11, 0.611765)');
                    }
                    else {
                        $(this).css('border', '');
                    }
                });
            });
        }
        console.log(errors)
        if (errors == 0) {
            var url = $(this).data('url');
            var input = $('#editDetailForm').serialize();
            console.log(input);
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'JSON',
                data: input,

                success: function (response) {
                    $('#editDetailForm')[0].reset();
                    $('#detailsTable').replaceWith(response.view);
                    $('#editDetailModal').modal('hide');
                    console.log(response);
                },

                error: function (response) {
                    console.log(response);
                    $.each(response.responseJSON.errors, function (index, value) {
                        $('#edit-detailAlert').append(value + '<br>').show();
                    });
                }
            });
        }

    });

    $('.datetimepicker1').datetimepicker({
        format: 'YYYY-MM-DD'
    });

    $(document).on('click', '.change', function (e) {
        e.preventDefault();
        console.log('here');
        $('#changePassword').modal('show');
    });

    $(document).on('click', '#changePasswordButton', function (e) {
        e.preventDefault();
        $('#password-alert').empty().hide();
        errors = 0;
        if ($(this).data('type') == 'password') {
            $("[for=password]").each(function (row, value) {
                if ($(this).val() == '') {
                    $(this).css('border', '2px solid rgba(232, 9, 11, 0.611765)');
                    errors++;
                }
                $(this).change(function () {
                    if ($(this).val() == '') {
                        errors++;
                        $(this).css('border', '2px solid rgba(232, 9, 11, 0.611765)');
                    }
                    else {
                        $(this).css('border', '');
                    }
                });
            });
        }
        console.log(errors);
        if (errors == 0) {
            var url = $(this).data('url');
            var input = $('#passwordForm').serialize();
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'JSON',
                data: input,

                success: function (response) {
                    $('#passwordForm')[0].reset();
                    $('#changePassword').modal('hide');
                    swal({
                        title: "Successful",
                        icon: 'success',
                        text: response.message,
                        closeOnClickOutside: false,
                    });
                    console.log(response);
                },

                error: function (response) {
                    console.log(response);
                    $.each(response.responseJSON.errors, function (index, value) {
                        $('#password-alert').append(value + '<br>').show();
                    });
                }
            });
        }
        else {
            $('#password-alert').html('You have errors in some of your fields. Correct them and resubmit').show();
        }
    });
});
