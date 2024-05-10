<header class="site-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg m-0">
            <a class="navbar-brand" href="#">Laravel Migration Seeder</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link { Route::currentRouteName() === 'guests.trains.index' ? 'active' : ''}} px-3"
                            href="{{ route('guests.index') }}">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link { Route::currentRouteName() === 'guests.trains.index' ? 'active' : ''}}"
                            href="{{ route('guests.trains.index') }}">Trains</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->
    </div>
    <!-- /.container -->
</header>
