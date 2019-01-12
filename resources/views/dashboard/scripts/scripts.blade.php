<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('js/charts.js') }}"></script>
<script src="{{ asset('js/forms.js') }}"></script>
<script src="{{ asset('js/maps.js') }}"></script>
<script src="{{ asset('js/tables.js') }}"></script>
@if($errors->all())
    <script>
        $('.enter').click();
    </script>
@endif
@if(session('messageCreateError'))
    <script>
        $('.enter').click();
    </script>
@endif
