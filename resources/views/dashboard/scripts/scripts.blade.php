<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('js/charts.js') }}"></script>
<script src="{{ asset('js/forms.js') }}"></script>
<script src="{{ asset('js/maps.js') }}"></script>
<script src="{{ asset('js/tables.js') }}"></script>
@if($errors->all() || session('messageCreateError'))
    <script>
        $('.enter').click();
    </script>
@endif

