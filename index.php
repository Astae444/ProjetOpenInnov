<?php
include "header.php";
?>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- COL GAUCHE -->
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <!-- SIDEBAR -->
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="index.php"
                       class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">^^</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="w-100">
                            <a href="" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <span class="d-none d-sm-inline">Home</span> </a>
                        </li>
                        <li class="w-100">
                            <a href="" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <span class="d-none d-sm-inline">Tendances</span> </a>
                        </li>
                        <li class="w-100">
                            <a href="" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <span class="d-none d-sm-inline">Recommandé pour vous</span> </a>
                        </li>
                        <li class="w-100 mt-5">
                            <a href="" class="nav-link px-0">
                                <span class="d-none d-sm-inline">Ma musique</span> </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#submenu2" data-bs-toggle="collapse"
                               class="nav-link px-0 align-middle dropdown-toggle">
                                <i class="fs-4 bi-bootstrap"></i> <span
                                        class="ms-1 d-none d-sm-inline">Mes playlists</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">La légendre</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0 text-white"> <span
                                                class="d-none d-sm-inline">Incr</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Une dingz</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Nightcore Keen'v (10 hours)</span></a>
                                </li>
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Compilation Sexion d'assaut</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <a href="#" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span>
                    </a>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                           id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="" width="30" height="30"
                                 class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Pseudo UwU</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Paramètres</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- COL DROITE -->
            <div class="col p-0 text-white" style="background-color: #4d4d4d;">
                <!-- NAVBAR -->
                    <div class="container-fluid p-2">
                        <form class="d-flex justify-content-end" role="search">
                            <input class="form-control me-2" type="search" placeholder="recherche de banger"
                                   aria-label="Search">
                            <button class="btn btn-success" type="submit">lezgongue</button>
                        </form>
                    </div>
                <!-- CONTENT -->
                <div class="m-3">
                    Content area...
                </div>
            </div>
        </div>
    </div>

<?php
include "footer.php";
?>