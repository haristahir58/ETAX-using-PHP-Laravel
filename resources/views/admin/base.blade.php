<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ETax Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- External Stylesheet -->
    <link rel="stylesheet" href="/css/admin.css" />
</head>

<body>
    <div class="d-flex">
        <!-- Siderbar -->
        <div class="sidebar col-xl-2 col-0">
            <div class="d-lg-flex d-none flex-column h-100 pt-3">
                <div class="p-2">
                    <a class="fw-bold fs-4 text-white text-decoration-none ms-3" href="/admin">
                        E-Tax Admin
                      </a>
                      <hr />
                      <div class="d-flex justify-content-between flex-column" style="height: 86vh !important;">
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center flex-column link-light text-decoration-none dropdown-toggle"
                                id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="/img/profile.png" alt="" width="100px" height="100px"
                                    class="rounded-circle me-2" />
                                <strong class="me-2 mt-2">Admin</strong>
                            </a>
                            
                            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <form action="/admin/logout" method="post">
                                        @csrf
                                        <button class="dropdown-item" type="submit">Sign out</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <ul class="nav nav-pills flex-column mb-auto mt-5">
                          <li class="nav-item">
                            <div class="nav-link fs-6" aria-current="page">
                                <small class="links-heading fw-bold">USERS AND AUTHS</small>
                            </div>
                          </li>
                          <li class="nav-item">
                            <a href="/admin" class="nav-link {{ $current == 'home' ? 'active': ''}} link-sidebar fs-6" aria-current="page">
                                <i class="bi bi-house-door me-3"></i>
                                <span class="">Home</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="/admin/users" class="nav-link {{ $current == 'users' ? 'active': ''}} link-sidebar fs-6" aria-current="page">
                                <i class="bi bi-card-heading me-3"></i>
                                <span class="">Users</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="/admin/formsubmitted" class="nav-link {{ $current == 'forms' ? 'active': ''}} link-sidebar fs-6" aria-current="page">
                                <i class="bi bi-cash-coin me-3"></i>
                                <span class="">Forms Submitted</span>
                            </a>
                          </li>
                        </ul>
                        <hr />
                      </div>
                </div>
            </div>
        </div>
        <!-- END Siderbar -->
        <!-- Content -->
        <div class="container-fluid col-xl-10 col-12">
          <div class="d-flex align-items-center">
              <!-- Small Screen Offcanvas Btn -->
              <div id="bars-button" class="d-block d-lg-none">
                  <button class="btn btn-transparent" type="button" data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                      <i class="bi bi-list text-white"></i>
                  </button>
                  <div class="offcanvas offcanvas-start" style="width: 280px" tabindex="-1" id="offcanvasExample"
                      aria-labelledby="offcanvasExampleLabel">
                      <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                              ETax Admin
                          </h5>
                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                              aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body sidebar">
                        <div class="d-flex justify-content-between flex-column" style="height: 86vh !important;">
                          <div class="dropdown">
                              <a href="#" class="d-flex align-items-center flex-column link-light text-decoration-none dropdown-toggle"
                                  id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                  <img src="/img/profile.png" alt="" width="100px" height="100px"
                                      class="rounded-circle me-2" />
                                  <strong class="me-2 mt-2">Admin</strong>
                              </a>
                              
                              <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                                  <li><a class="dropdown-item" href="#">Settings</a></li>
                                  <li><a class="dropdown-item" href="#">Profile</a></li>
                                  <li>
                                      <hr class="dropdown-divider" />
                                  </li>
                                  <li><a class="dropdown-item" href="/admin/logout">Sign out</a></li>
                              </ul>
                          </div>
                          <ul class="nav nav-pills flex-column mb-auto mt-5">
                            <li class="nav-item">
                              <div href="#" class="nav-link fs-6" aria-current="page">
                                  <small class="links-heading fw-bold">USERS AND AUTHS</small>
                              </div>
                            </li>
                            <li class="nav-item">
                              <a href="#" class="nav-link link-sidebar fs-6" aria-current="page">
                                  <i class="bi bi-house-door me-3"></i>
                                  <span class="">Home</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="#" class="nav-link link-sidebar fs-6" aria-current="page">
                                  <i class="bi bi-card-heading me-3"></i>
                                  <span class="">Tax Payers</span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="#" class="nav-link link-sidebar fs-6" aria-current="page">
                                  <i class="bi bi-cash-coin me-3"></i>
                                  <span class="">Tax Filers</span>
                              </a>
                            </li>
                          </ul>
                          <hr />
                        </div>
                      </div>
                  </div>
              </div>
              <!-- END Small Screen Offcanvas Btn -->
              <!-- Search Bar -->
              <input class="mx-5 form-control me-1 search-input" id="myInput" type="text" placeholder="Search..">
              <button type="button" class="btn btn-transparent me-5">
                  <i class="bi bi-search text-white"></i>
              </button>
              <!-- END Search Bar -->
          </div>
          <!-- Stats -->
          @yield('content')
          <!-- END Stats -->
      </div>
        
        <!-- END Content -->
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

</html>