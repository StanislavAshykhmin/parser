@if (session('message'))
    <div class="alert alert-light" style="text-align: center; color: #919191">
        {{ session('message') }}
    </div>
@endif