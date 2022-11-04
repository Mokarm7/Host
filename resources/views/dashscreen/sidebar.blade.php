<div class="offcanvas-body p-0">
    <nav class="navbar-dark">
        <ul class="navbar-nav">
            <li>
                <a href="#" class="nav-link px-3 active">
                    <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <div class="collapse" id="layouts">
                    <ul class="navbar-nav ps-3">
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{route('b.create')}}" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-plus-square"></i></span>
                    <span>Add New Book</span>
                </a>
            </li>
            <li>
                <a href="{{route('b.index')}}" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-book-fill"></i></span>
                    <span>Show All Books</span>
                </a>
            </li>

            <li class="my-4">
                <hr class="dropdown-divider bg-light" />
            </li>

            <li>
                <a href="#" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-gear"></i></span>
                    <span>Setting</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link px-3">
                    <span class="me-2"><i class="bi bi-box-arrow-left"></i></span>
                    <span>Log-out</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
