<!doctype html>
<html lang="en" data-bs-theme="light">


<!-- Mirrored from codervent.com/matoxi/demo/vertical-menu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Dec 2023 07:46:56 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'My Site')</title>
    <!--favicon-->



    <!--bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->

    <link href="sass/main.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap4.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    {{-- <link rel="stylesheet" href="{{ asset('assets/css/styleus.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/stylets.css') }}"> --}}









</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        .list .list-item {
            list-style: none !important;
            text-decoration: none;
            width: 100%;
            height: 50px;
            margin: 5px 0;
            line-height: 50px;

        }

        .list .list-item a {
            display: flex;
            align-items: center;
            font-size: 18px;
            color: #fff;
            text-decoration: none;
            border-radius: 28px;
            border-radius: 31px 0 0 31px;
            white-space: nowrap;


        }


        .list-item:hover a {
            background-color: #ffffff;
        }

        .list-item:hover a i,
        .list-item:hover a .link-name {
            color: #008ea1 !important;
        }

        .list .list-item a:hover {
            background: #fff;
        }

        .list .list-item {
            position: relative;
        }

        .list .list-item a::before {
            content: '';
            position: absolute;
            right: -6px;
            width: 50px;
            height: 50px;
            background: transparent;
            /* background: red; */
            border-radius: 50%;
            box-shadow: 35px 35px 0 10px var(--white);
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .list .list-item a::after {
            content: '';
            position: absolute;
            right: -6px;
            width: 56px;
            height: 50px;
            background: transparent;
            /* background: red; */
            border-radius: 50%;
            box-shadow: 35px -35px 0 10px var(--white);
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .list .list-item a::before {
            top: -50px;
        }

        .list .list-item a::after {
            bottom: -50px;
        }

        .list .list-item:hover a::before,
        .list .list-item:hover a::after {
            opacity: 1;
        }

        :root {
            --white: #fff;
            --red: #464646;
        }

        .mg {
            margin-top: 21px;
            margin-bottom: 10px;
            width: 215px;
            height: 150px;
            padding-inline: 6px;
            border-radius: 30px;
            margin-left: 12px;
            list-style: none;
        }

        .logo-menu img {}

        .img-list li {
            list-style: none;
        }

        .sidebar-nav {
            overflow-x: hidden;
            overflow-y: scroll;
        }

        /* jksdak */
        .sidebar-nav::-webkit-scrollbar {
            width: 5px;
        }

        .sidebar-nav::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .sidebar-nav:-webkit-scrollbar-thumb {
            background-color: white;
            outline: 1px solid red;
        }

        /* hsdjfshfj */
        .logo-namesecond {
            display: none;
        }

        @media(max-width:1200px) {
            .logo-name {
                display: none !important;
            }

            .logo-namesecond {
                margin-left: auto;
                display: block;
                margin-right: auto;
            }
        }

        .logo-img {
            width: 32px;
            z-index: 1000 !important;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #11726c !important;
            min-width: 160px;
            z-index: 1;
        }

        .dropdown-menu a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>

    <!--start header-->
    <header class="top-header d-none ">
        <nav class="navbar navbar-expand align-items-center gap-4">

        </nav>
    </header>
    <!--end top header-->


    <!--start sidebar-->
    <aside class="sidebar-wrapper">
        <div class="sidebar-header">

            <div class="ms-5 mt-5  ">
                <div class="logo-icon logo-name ">
                    <img src="./assets/images/Logo.jpeg" class="logo-img mt-5  rounded-pill w-100   " alt="">
                </div>
                <div class="logo-namesecond   ">
                    <img src="./assets/images/Logo.jpeg" class="logo-img rounded-pill" alt=""
                        style="width: 130px;">
                </div>
            </div>
            <div class="btn-toggle px-4 ">
                <a href="javascript:;"><i
                        class="material-icons-outlined text-white   search-content notify-list">menu</i></a>
            </div>
        </div>
        <div class="sidebar-nav" data-simplebar="true">

            <!--navigation-->
            <ul class="metismenu list  " id="sidenav">
                <li class="py-2 list-item">
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bxs-home'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>


                <li class="py-2 ">
                    <div class="dropdown">
                        <button
                            class="btn btn-secondary dropdown-toggle d-flex align-items-center gap-2 bg-transparent border-0"
                            type="button" id="dropdownMenuButton">
                            <div class="parent-icon"><i class='bx bxs-user'></i></div>
                            <div class="menu-title">Supervisor Selection</div>
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-white" href="{{ route('supervisor.index') }}">Supervisor
                                List</a>
                            {{-- <a class="dropdown-item text-white" href="#">Edit</a>
                            <a class="dropdown-item text-white" href="#">Delete</a> --}}
                        </div>
                    </div>
                </li>




                <li class="py-2 list-item">
                    <a href="/finalizesupervisor" class="has-arrow">
                        <div class="parent-icon"><i class='bx bxs-user-rectangle'></i>
                        </div>
                        <div class="menu-title">Finalized Supervisor</div>
                    </a>
                </li>
                <li class="py-2 list-item">
                    <a href="/title-selection" class="has-arrow">
                        <div class="parent-icon"><i class='bx bxs-notepad'></i>
                        </div>
                        <div class="menu-title">Title Selection</div>
                    </a>
                </li>
                <li class="py-2 list-item">
                    <a href="/peercollaborationproject" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-male-female'></i>
                        </div>
                        <div class="menu-title">Peer Collaboration</div>
                    </a>
                </li>
                <li class="py-2 list-item">
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-upload'></i>
                        </div>
                        <div class="menu-title">Work Submission</div>
                    </a>
                </li>
                <li class="py-2 ">
                    <div class="dropdown">
                        <button
                            class="btn btn-secondary dropdown-toggle d-flex align-items-center gap-2 bg-transparent border-0"
                            type="button" id="dropdownMenuButton">
                            <div class="parent-icon"><i class='bx bxs-volume-full'></i></div>
                            <div class="menu-title">Announcement</div>
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-white" href="{{ route('announcement.index') }}">Announcement List</a>
                           
                        </div>
                    </div>
                </li>



                {{-- <li class="py-2 list-item">
                    <a href="{{ route('announcement') }}" class="has-arrow">
                        <div class="parent-icon"><i class='bx bxs-volume-full'></i></div>
                        <div class="menu-title">Announcement</div>
                    </a>
                </li> --}}
                
                <li class="py-2 list-item">
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bxs-bar-chart-square'></i>
                        </div>
                        <div class="menu-title">Analytics</div>
                    </a>
                </li>
                <li class="py-2 list-item">
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-stats'></i>
                        </div>
                        <div class="menu-title">Livestats</div>
                    </a>
                </li>
                <li class="py-2 list-item">
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-user-pin'></i>
                        </div>
                        <div class="menu-title">RBAC</div>
                    </a>
                </li>
                <li class="py-2 list-item">
                    <a href="/usersupport" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-cog'></i>
                        </div>
                        <div class="menu-title">User Support</div>
                    </a>
                </li>
                <li class="py-2 ">
                    <div class="dropdown">
                        <button
                            class="btn btn-secondary dropdown-toggle d-flex align-items-center gap-2 bg-transparent border-0"
                            type="button" id="dropdownMenuButton">
                            <div class="parent-icon"><i class='bx bxs-user'></i></div>
                            <div class="menu-title">User Data</div>
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-white" href="{{ route('data.index') }}">User List</a>
                            {{-- <a class="dropdown-item text-white" href="#">Edit</a>
                            <a class="dropdown-item text-white" href="#">Delete</a> --}}
                        </div>
                    </div>
                </li>



                <!-- New logout list item -->
                <li class="py-2 list-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="btn btn-secondary d-flex align-items-center gap-2 bg-transparent border-0">
                            <div class="parent-icon"><i class="bx bx-log-out"></i></div>
                            <div class="menu-title">{{ __('Log Out') }}</div>
                        </button>
                    </form>
                </li>

            </ul>

            <ul class="img-list mx-3">
                <li>
                    <div class="logo-icon logo-name my-3">
                        <img src="./assets/images/mng.jpg" class="logo-img  w-75  " alt="">
                    </div>
                    <div class="logo-namesecond  mt-4 ">
                        <img src="./assets/images/mng.jpg" class="logo-img " alt="" style="width: 130px;">
                    </div>
                    <!-- <img class="mg" src="./assets/images/mng.jpg" alt=""> -->
                </li>
            </ul>
            <!--end navigation-->
        </div>


    </aside>
    <!--end sidebar-->



    <div class="main-wrapper">
        <div class="main-content">
            <div class="content">
                @yield('content')
            </div>

        </div>
    </div>

    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <!--plugins-->
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

    <script src="assets/js/index.js"></script>


    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap4.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>


<!-- Mirrored from codervent.com/matoxi/demo/vertical-menu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Dec 2023 07:46:56 GMT -->

</html>
