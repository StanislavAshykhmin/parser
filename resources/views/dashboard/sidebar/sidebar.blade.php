<main class="content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                <a class="card d-block d-md-none mt-4" data-toggle="collapse" data-target="#sidebar">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Menu</h5>
                    </div>
                </a>

                <nav id="sidebar" class="collapse collapse-disabled-md sidebar sidebar-sticky">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Main</h5>
                        </div>
                        <div class="sidebar-content">
                            <a href="{{route('dashboard')}}" class="sidebar-item">
                                <i class="align-middle mr-1 fas fa-fw fa-home"></i> <span
                                    class="align-middle">Dashboard</span>
                            </a>
                            <a href="{{route('tags')}}" class="sidebar-item">
                                <i class="align-middle mr-2 fas fa-fw fa-table"></i></i> <span
                                    class="align-middle">Tags</span>
                            </a>
                        </div>
                    </div>
                </nav>
