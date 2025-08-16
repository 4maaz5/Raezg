@extends('admin.dashboard.layout.main')
@section('main')
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-bell"></i>
                            <div class="notification bg-primary rounded-circle"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                            <div class="message-body">
                                <a href="javascript:void(0)" class="dropdown-item">
                                    Item 1
                                </a>
                                <a href="javascript:void(0)" class="dropdown-item">
                                    Item 2
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('Admin\images\profile\user-1.jpg') }}" alt="" width="35"
                                    height="35" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="message-body">
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-user fs-6"></i>
                                        <p class="mb-0 fs-3">My Profile</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-mail fs-6"></i>
                                        <p class="mb-0 fs-3">My Account</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-list-check fs-6"></i>
                                        <p class="mb-0 fs-3">My Task</p>
                                    </a>
                                    <a href="./authentication-login.html"
                                        class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--  Header End -->
        <div class="body-wrapper-inner">
            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">

                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Create Blog</h4>
                                    <p class="card-subtitle">

                                    </p>
                                </div>
                                <div class="ms-auto mt-3 mt-md-0">
                                    <a href="{{ route('admin-blog') }}">
                                        <button class="btn btn-primary">Back</button>
                                    </a>
                                </div>

                            </div>
                            <br>
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Title">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Slug">
                                    </div>
                                </div><br>
                                <div class="col">
                                    <textarea type="text" rows="7" class="form-control" placeholder="Description"></textarea>
                                </div><br>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control">
                                            <option>Category 1</option>
                                            <option>Category 2</option>
                                            <option>Category 3</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <input type="file" class="form-control">
                                    </div>

                                </div><br>
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
