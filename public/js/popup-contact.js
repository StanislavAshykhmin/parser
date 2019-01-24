$(document).ready(function(){
    $('#submit-popup').click(function(e){

        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
            }
        });
        $.ajax({
            url: "{{route('contact')}}",
            method: 'post',
            data: {
                name: $('#name').val(),
                last_name: $('#last_name').val(),
                email: $('#email').val(),
                url: $('#url').val(),
                text: $('#text').val(),
            },
            success: function(data){
                $(data.success, function () {
                    $('.alert-danger').html('');
                    $('.alert-danger').hide();
                    $('.alert-success').show();
                    $('.alert-success').append('<p>'+data.success+'</p>');
                    setTimeout(function(){
                        $('.close-popup').click();
                    }, 3000);

                })
                $('.alert-danger').html('');
                $.each(data.errors, function(key, value){
                    console.log(value);
                    $('.alert-danger').show();
                    $('.alert-danger').append('<p>'+value+'</p>');
                });
            }

        });
    });
});
