<div class="dashboard_sidebar">
    <span class="close_icon">
        <i class="far fa-bars dash_bar"></i>
        <i class="far fa-times dash_close"></i>
    </span>
    <a href="/" class="dash_logo"><img src="{{ asset('frontend/images/logo.png') }}" alt="logo"
            class="img-fluid"></a>
    <ul class="dashboard_link">
        <li><a class="active" href="{{ route('vendor.dashboard') }}"><i class="fas fa-tachometer"></i>Dashboard</a></li>
        <li><a href="#"><i class="fas fa-list-ul"></i> Orders</a></li>
        <li><a href="#"><i class="far fa-cloud-download-alt"></i> Downloads</a></li>
        <li><a href="#><i class="far fa-star"></i> Reviews</a></li>
        <li><a href="#"><i class="far fa-heart"></i> Wishlist</a></li>
        <li><a href="{{ route('vendor.profile') }}"><i class="far fa-user"></i> My Profile</a></li>
        <li><a href="#"><i class="fal fa-gift-card"></i> Addresses</a></li>
        <li>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                this.closest('form').submit();">
                    <i class="far fa-sign-out-alt"></i> Log out</a>
            </form>
        </li>
    </ul>
</div>
