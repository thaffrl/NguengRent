@php 
    $currentRouteName = Route::currentRouteName(); 
@endphp 
 
 
 
<nav class="navbar navbar-expand-md navbar-dark bg-black"> 
    <div class="container"> 
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1" style="color: #FFD700;">
            Nguengg
        </a>
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1" style="color: #FFFFFF;">
            Rent
        </a>
        <button type="button" class="navbar-toggler" data-bs
toggle="collapse" data-bs-target="#navbarSupportedContent"> 
            <span class="navbar-toggler-icon"></span> 
        </button> 
 
        <div class="collapse navbar-collapse" 
id="navbarSupportedContent"> 
            <hr class="d-md-none text-white-50"> 
 
            <ul class="navbar-nav flex-row flex-wrap"> 
                <li class="nav-item col-2 col-md-auto"><a href="{{ 
route('home') }}" class="nav-link @if($currentRouteName == 'home') active 
@endif">Home</a></li> 
                <li class="nav-item col-2 col-md-auto"><a href="{{ 
route('customers.index') }}" class="nav-link @if($currentRouteName == 
'customers.index') active @endif">Customer</a></li> 
            </ul> 
 
            <hr class="d-md-none text-white-50"> 
 
            <div class="dropdown ms-md-auto">
                <button class="btn btn-outline-light dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-person-circle me-1"></i> My Profile
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav> 
