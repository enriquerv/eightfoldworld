<div class="social row">
    <div class="col-6 ps-5 py-3">
        <img src="{{ env('APP_URL') }}/assets/images/logo.png" alt="logo" class="logo_nav">
    </div>
    <div class="col-6 ps-5 py-3 text-end">
        <img src="{{ env('APP_URL') }}/assets/images/home/icono_face.png" alt="facebook" class="icono_nav pt-3 me-4">
        <img src="{{ env('APP_URL') }}/assets/images/home/icono_insta.png" alt="instagram" class="icono_nav pt-3 me-5">
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse row" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item text-center col-2">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item text-center col-2">
                    <a class="nav-link" href="#">PILLARS</a>
                </li>
                <li class="nav-item text-center col-2 dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarProject"role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                        PROJECT
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarProject">
                        <li><a class="dropdown-item" href="#">LATAM</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">CANADA</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">USA</a></li>
                    </ul>
                </li>
                <li class="nav-item text-center col-2">
                    <a class="nav-link" href="#">CAMPESINO</a>
                </li>
                <li class="nav-item text-center col-2">
                    <a class="nav-link" href="#">STORE</a>
                </li>
                <li class="nav-item text-center col-2">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
