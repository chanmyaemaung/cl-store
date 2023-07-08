<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">CL Store</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.dashboard') }}">General Dashboard</a></li>
                </ul>
            </li>
            <li class="menu-header">Manage Website</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Manage Website</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.slider.index') }}">Slider</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
