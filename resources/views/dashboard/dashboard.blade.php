@extends('layouts.dashboard')
@section('title', 'Dashboard')
@push('styles')
    @include('dashboard.styles.styles')
@endpush
<body>
@section('content')
</div>
<div class="col-12 col-md-8 col-lg-9 col-xl-10 pl-lg-4">
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title mb-0">Top Questions today</h5>
                </div>
                <table id="datatables-dashboard" class="table table-striped my-0">
                    <thead>
                    <tr>
                        <th style="width:40%;">Title</th>
                        <th>Tag</th>
                        <th>Vote</th>
                        <th>Answer</th>
                        <th>View</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($records as $record)
                        <tr>
                            <td><a href="https://stackoverflow.com/{{$record->url}}"
                                   style="text-decoration: none;color: black;">{{$record->title}}</a></td>
                            <td>{{$record->tag->name}}</td>
                            <td>{{$record->vote}} @if($record->vote == 1) vote @else votes @endif</td>
                            <td>{{$record->answer}} @if($record->answer == 1) answer @else answers @endif</td>
                            <td>{{$record->view}} @if($record->view == 1) view @else views @endif</td>
                            <td>
                                <a href="https://stackoverflow.com/{{$record->url}}"
                                   style="text-decoration: none;color: white;">
                                    <button type="button" class="btn btn-secondary btn-lg disabled">
                                        Visit
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-12 d-flex">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        From <input class="from form-control" style="width: 20%; display: inline;" type="date">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Before <input class="before form-control" style="width: 20%; display: inline" type="date">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Tag
                        <select class="form-control" style="width: 10%; display: inline;" name="tag" id="tag">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{ucfirst($tag->name)}}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-primary btn-pill float-right" id="tag-button" type="submit">Print
                            Graphic
                        </button>
                    </h5>
                </div>
                <div class="card-body">
                </div>
            </div>
            @include('dashboard.scripts.charts')
        </div>
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
