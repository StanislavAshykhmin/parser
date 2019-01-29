@if (session('message'))
    <div class="alert alert-primary alert-dismissible" role="alert">
        <div class="alert-message" style="font-size: 100px">
            {{ session('message') }}
        </div>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <script>
        setTimeout(function(){
            $('.close').click();
        }, 4000);
    </script>
@endif
