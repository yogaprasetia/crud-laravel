<aside class="main-sidebar elevation-4">

    <a href="#" class="brand-link bg-primary">
        <strong class="ml-3">Laravel Crud</strong>
    </a>

    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">

                <li class="nav-item">
                    <a href="{{ route('questions.index') }}"
                        class="nav-link {{ Request::is('pertanyaan') ? 'active' : '' }}">
                        <p>Pertanyaan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('questions.create') }}"
                        class="nav-link {{ Request::is('pertanyaan/create') ? 'active' : '' }}">
                        <p>Tanya Disini</p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>
</aside>