<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light justify-content-between">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </ul>
    <ul class="navbar-nav mr-3">
        <li class="nav-item d-none d-sm-inline-block">
            <span class="font-weight-bold">@yield('title')</span>
        </li>
    </ul>
</nav>
<!-- /.navbar -->