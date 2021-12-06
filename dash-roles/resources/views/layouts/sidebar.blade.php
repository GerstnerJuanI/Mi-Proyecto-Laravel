<aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/home') }}">
                <img class="navbar-brand-full app-header-logo" src="{{ asset('img/logo.png') }}" width="65"
                alt="Infyom Logo">
                <small class="text-muted">{{\Illuminate\Support\Facades\Auth::user()->name}}</small></a>
        </div>
    


    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/home') }}" class="small-sidebar-text">
            <img class="navbar-brand-full" src="{{ asset('img/logo.png') }}" width="45px" alt=""/>
        </a>
    </div>
    <ul class="sidebar-menu">
        @include('layouts.menu')
    </ul>
</aside>
