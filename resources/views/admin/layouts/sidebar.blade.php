<!-- Sidebar -->
<ul class="navbar-nav bg-Green-success sidebar sidebar-blue accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-1">Stay</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
        <li class="nav-item" {{Route::is('home')? 'class=active':''}} >
            <a class="nav-link" href="/home">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
    <!-- Heading -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        USER
    </div>

    {{--@if (checkGroupAccess(['users', 'roles', 'menus']) )--}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>User Access</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{--@if (checkAccess('roles') )--}}
                <a class="collapse-item" href="/role">Role</a>
                {{--@endif--}}
                {{--@if (checkAccess('users') )--}}
                <a class="collapse-item" href="/user">User</a>
                {{--@endif--}}
                {{--@if (checkAccess('menus') )--}}
                <a class="collapse-item" href="/menu">Menu</a>
                {{--@endif--}}
            </div>
        </div>
    </li>
    {{--@endif--}}
</ul>
<!-- End of Sidebar -->
