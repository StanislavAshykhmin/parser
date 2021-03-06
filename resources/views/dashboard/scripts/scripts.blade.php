<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('js/charts.js') }}"></script>
<script src="{{ asset('js/forms.js') }}"></script>
<script src="{{ asset('js/maps.js') }}"></script>
<script src="{{ asset('js/tables.js') }}"></script>
<script src="{{ asset('js/select.js') }}"></script>
<script async src="{{ asset('js/update.js') }}"></script>
<script>
    window.addEventListener("beforeunload", function(){
        $('#create-message').hide();
        $('.splash').addClass('active');
    });

</script>
@if($errors->all() || session('messageCreateError'))
    <script>
        $('.enter').click();
    </script>
@endif
@if($errors->create->all())
    <script>
        $('.create').click();
    </script>
@endif

@if($errors->update->all())
    <script>
        $('.update').click();
    </script>
@endif
