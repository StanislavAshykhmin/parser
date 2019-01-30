@extends('layouts.dashboard')
@section('title', 'Tags')
@push('styles')
    @include('dashboard.styles.styles')
@endpush
<body>
@section('content')
</div>
<div class="col-12 col-xl-10">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Tags
                <button type="button" class="btn btn-primary float-right enter" data-toggle="modal"
                        data-target="#centeredModalPrimary">Create tag
                </button>
            </h5>
            @include('dashboard.notifications.message')
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Parser</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td><a style="color: black;"
                           href="{{route('tag', ['id' => $tag->id])}}">{{ucfirst($tag->name)}}</a></td>
                    <td>{{$tag->records_count}}</td>
                    <td><a style="text-decoration: none;color: white;"
                           href="{{route('content', ['name'=>$tag->name])}}">
                            <button class="btn btn-success">Parser now</button>
                        </a></td>
                    <td class="table-action">
                        <a href="{{route('tag', ['id' => $tag->id])}}"><i class="align-middle fas fa-fw fa-eye"></i></a>
                        <a href="" data-toggle="modal" data-target="#centeredModalDanger-{{$tag->id}}"><i
                                class="align-middle fas fa-fw fa-trash"></i></a>
                    </td>
                </tr>
                @include('dashboard.popup.delete-tag')
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('dashboard.popup.create-tag')
</div>
</div>
</main>
@endsection
@push('scripts')
    @include('dashboard.scripts.scripts')
@endpush
<svg width="0" height="0" style="position:absolute">
    <defs>
        <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
            <path
                d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z"></path>
        </symbol>
    </defs>
</svg>
</body>

</html>
