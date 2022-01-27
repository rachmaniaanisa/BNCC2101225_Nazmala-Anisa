<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="uil uil-star me-1"></i>StarOne</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}"><i
                            class="uil uil-estate"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/books') }}"><i
                            class="uil uil-book-open me-1"></i>Books</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ url('/books/manage') }}"><i
                            class="uil uil-create-dashboard me-1"></i>Manage
                        Books</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
