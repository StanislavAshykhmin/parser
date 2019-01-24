<!-- jQuery and Bootstrap -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Plugins JS -->
<script src="js/owl.carousel.min.js"></script>
<!-- Custom JS -->
<script src="js/script.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!-- Enter popup windwo -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script src="js/popup-contact.js"></script>
<script type="text/javascript">

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
                    first_name: $('#name-popup').val(),
                    last_name: $('#last_name-popup').val(),
                    email: $('#email-popup').val(),
                    url: $('#url-popup').val(),
                    text: $('#text-popup').val(),
                },
                success: function(data){
                    $(data.success, function () {
                        $('.danger-popup').html('');
                        $('.danger-popup').hide();
                        $('.success-popup').show();
                        $('.success-popup').append('<p>'+data.success+'</p>');
                        setTimeout(function(){
                            $('.close-popup').click();
                        }, 4000);
                        setTimeout(function(){
                            $('.popup-form')[0].reset();
                            $('.success-popup').html('');
                            $('.success-popup').hide();
                        }, 4000);


                    })
                    $('.danger-popup').hide();
                    $('.danger-popup').html('');
                    $.each(data.errors, function(key, value){
                        if ( value.includes('first')) {
                            $('.danger-popup-name').show();
                            $('.danger-popup-name').append('<p>' + value + '</p>');
                        }
                        if ( value.includes('last')) {
                            $('.danger-popup-last').show();
                            $('.danger-popup-last').append('<p>' + value + '</p>');
                        }
                        if ( value.includes('email')) {
                            $('.danger-popup-email').show();
                            $('.danger-popup-email').append('<p>' + value + '</p>');
                        }
                        if ( value.includes('url')) {
                            $('.danger-popup-url').show();
                            $('.danger-popup-url').append('<p>' + value + '</p>');
                        }
                        if ( value.includes('text')) {
                            $('.danger-popup-text').show();
                            $('.danger-popup-text').append('<p>' + value + '</p>');
                        }
                    });
                }

            });
        });
    });
</script>
<script type="text/javascript">

    $(document).ready(function(){
        $('#submit-contact').click(function(e){
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
                    first_name: $('#name').val(),
                    last_name: $('#last_name').val(),
                    email: $('#email').val(),
                    url: $('#url').val(),
                    text: $('#text').val(),
                },
                success: function(data){
                    $(data.success, function () {
                        $('.danger-contact').html('');
                        $('.danger-contact').hide();
                        $('.success-contact').show();
                        $('.success-contact').append('<p>'+data.success+'</p>');
                        setTimeout(function(){
                            $('.form')[0].reset();
                            $('.success-contact').html('');
                            $('.success-contact').hide();
                        }, 4000);


                    })
                    $('.danger-contact').hide();
                    $('.danger-contact').html('');
                    $.each(data.errors, function(key, value){
                        if ( value.includes('first')) {
                            $('.danger-contact-name').show();
                            $('.danger-contact-name').append('<p>' + value + '</p>');
                        }
                        if ( value.includes('last')) {
                            $('.danger-contact-last').show();
                            $('.danger-contact-last').append('<p>' + value + '</p>');
                        }
                        if ( value.includes('email')) {
                            $('.danger-contact-email').show();
                            $('.danger-contact-email').append('<p>' + value + '</p>');
                        }
                        if ( value.includes('url')) {
                            $('.danger-contact-url').show();
                            $('.danger-contact-url').append('<p>' + value + '</p>');
                        }
                        if ( value.includes('text')) {
                            $('.danger-contact-text').show();
                            $('.danger-contact-text').append('<p>' + value + '</p>');
                        }
                    });
                }

            });
        });
    });
</script>
