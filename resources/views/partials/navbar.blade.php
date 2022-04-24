<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" style="">
    <div class="container">

        <a class="navbar-brand" href="/home"><img class="" src="img/ai landscape.png" alt="" width="100%"
                height="18"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Order' ? 'active' : '' }}" href="/order">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Media' ? 'active' : '' }}" href="/media">Media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Contact Us' ? 'active' : '' }}" href="/contactus">Contact
                        Us</a>
                </li>

            </ul>
            <a href="/login" class="btn rounded-pill me-4 text-light" role="button" style="background-color: #54429a"><small
                    class="fw-bold px-4">Login</small></a>
        </div>
    </div>
</nav>
