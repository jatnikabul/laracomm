 <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div  class="mr-2 d-none d-lg-inline text-gray-600 small" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</div>
                            <img src="{{ asset('themes/sbadmin2/img/avatar.png') }}" width="48" height="48" />

                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            {{--<a class="dropdown-item" href="#">--}}
                                {{--<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                {{--Profile--}}
                            {{--</a>--}}
                            {{--<a class="dropdown-item" href="#">--}}
                                {{--<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                {{--Settings--}}
                            {{--</a>--}}
                            {{--<a class="dropdown-item" href="#">--}}
                                {{--<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                {{--Activity Log--}}
                            {{--</a>--}}
                            {{--<div class="dropdown-divider"></div>--}}
                            <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

