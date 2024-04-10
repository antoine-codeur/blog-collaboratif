<input id="click" type="checkbox" class="responsive-Menu">
    <label for="click">
        <svg class="burgerMenu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path class="top" d="M4 6h16" />
            <path class="middle" d="M4 12h16" />
            <path class="bottom" d="M4 18h16" />
            {{-- <line x1="18" y1="6" x2="6" y2="18" />
            <line x1="6" y1="6" x2="18" y2="18" /> --}}
        </svg>              
    </label>
<div class="dashboard">
    <!-- Primary Navigation Menu -->
    <div class="sidebar">
        <!-- Logo -->
        <div class="logo">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="icon" />
                <div class="title">Bubblog</div>
            </a>
        </div>
        <div class="menuText">
            <p>Menu</p>
        </div>
        <!-- Navigation Links 1 -->
        <div class="menuList">
            <nav>
                <ul>
                    <li class="active">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            <svg class="menu-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 10v9h4v-6h4v6h4v-9"/>
                                <path d="M4 11l8-7 8 7"/>
                            </svg>
                            <div class="navA">{{ __('Dashboard') }}</div>
                        </x-nav-link> 
                    </li>
                    <li>
                        <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">
                            <svg class="menu-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="8" height="8" rx="1"/>
                                <rect x="14" y="2" width="8" height="8"/>
                                <rect x="14" y="14" width="8" height="8" rx="2"/>
                                <rect x="2" y="14" width="8" height="8"/>
                            </svg>
                            <div class="navA">{{ __('Posts') }}</div>
                        </x-nav-link>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="menuText">
            <p>Config</p>
        </div>
        <!-- Navigation Links 2 -->
        <div class="menuList">
            <nav>
                <ul>
                    <li>
                        <x-dropdown-link :href="route('profile.edit')">
                            <svg class="menu-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                            <div class="navA">{{ Auth::user()->name }}</div>
                        </x-dropdown-link>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <svg class="menu-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M15,13l4-4M19,9l-4-4M19,9H5M11,13v1c0,1.66-1.34,3-3,3h-4c-1.66,0-3-1.34-3-3V4c0-1.66,1.34-3,3-3h4c1.66,0,3,1.34,3,3v1"/>                                                </svg>
                                <div class="navA">{{ __('Déconexion') }}</div>
                            </x-dropdown-link>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
