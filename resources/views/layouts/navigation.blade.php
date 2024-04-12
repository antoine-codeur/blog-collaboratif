<input id="click" type="checkbox" class="responsive-Menu" checked>
    <label for="click" class="click">
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
        <!-- Navigation Links Menu -->
        @if (Auth::check())
        <div class="menuList">
            <nav>
                <ul>
                    <li>
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            <svg class="menu-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 10v9h4v-6h4v6h4v-9"/>
                                <path d="M4 11l8-7 8 7"/>
                            </svg>
                            <div class="navA">{{ __('Dashboard') }}</div>
                        </x-nav-link> 
                    </li>
                    @if (Auth::user()->hasRole('admin'))
                    <li>
                        <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">
                            <svg class="menu-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="8" height="8" rx="1"/>
                                <rect x="14" y="2" width="8" height="8"/>
                                <rect x="14" y="14" width="8" height="8" rx="2"/>
                                <rect x="2" y="14" width="8" height="8"/>
                            </svg>
                            <div class="navA">{{ __('Catégories') }}</div>
                        </x-nav-link>
                    </li>
                    @else
                    @endif
                    <li>
                        <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">
                            <svg class="menu-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.99 512.11" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M498.11,5.6c10.1,7,15.4,19.1,13.5,31.2l-64,416c-1.5,9.7-7.4,18.2-16,23s-18.9,5.4-28,1.6l-119.6-49.7-68.5,74.1c-8.9,9.7-22.9,12.9-35.2,8.1s-20.3-16.7-20.3-29.9v-83.6c0-4,1.5-7.8,4.2-10.7l167.6-182.9c5.8-6.3,5.6-16-.4-22s-15.7-6.4-22-.7l-203.4,180.7-88.3-44.2C7.11,311.3.31,300.7.01,288.9s5.9-22.8,16.1-28.7L464.11,4.2c10.7-6.1,23.9-5.5,34,1.4h0Z"/>
                            </svg>
                            <div class="navA">{{ __('Posts') }}</div>
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('my.posts')" :active="request()->routeIs('my.posts')">
                            <svg class="menu-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.99 512.11" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M360,74.33c-24.4-24.4-64-24.4-88.4,0l-184,184c-42.1,42.1-42.1,110.3,0,152.4,42.1,42.1,110.3,42.1,152.4,0l152-152c10.9-10.9,28.7-10.9,39.6,0s10.9,28.7,0,39.6l-152,152c-64,64-167.6,64-231.6,0s-64-167.6,0-231.6L232,34.72c46.3-46.3,121.3-46.3,167.6,0,46.3,46.3,46.3,121.3,0,167.6l-176,176c-28.6,28.6-75,28.6-103.6,0s-28.6-75,0-103.6l144-144c10.9-10.9,28.7-10.9,39.6,0s10.9,28.7,0,39.6l-144,144c-6.7,6.7-6.7,17.7,0,24.4s17.7,6.7,24.4,0l176-176c24.4-24.4,24.4-64,0-88.4h0Z"/>
                            </svg>                            
                            <div class="navA">{{ __('myPosts') }}</div>
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('posts.create')" :active="request()->routeIs('posts.create')">
                            <svg class="menu-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.99 512.11" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M262.55,215.6L7.05,471c-9.4,9.4-9.4,24.6,0,33.9,9.4,9.3,24.6,9.4,33.9,0l57-57h68c49.7,0,97.9-14.4,139-41,11.1-7.2,5.5-23-7.8-23-5.1,0-9.2-4.1-9.2-9.2,0-4.1,2.7-7.6,6.5-8.8l81-24.3c2.5-.8,4.8-2.1,6.7-4l22.4-22.4c10.1-10.1,2.9-27.3-11.3-27.3h-32.2c-5.1,0-9.2-4.1-9.2-9.2,0-4.1,2.7-7.6,6.5-8.8l112-33.6c4-1.2,7.4-3.9,9.3-7.7,10.8-21,16.4-44.5,16.4-68.6,0-41-16.3-80.3-45.3-109.3l-5.5-5.5C416.35,16.3,377.05,0,336.05,0s-80.3,16.3-109.3,45.3l-103.7,103.7c-48,48-75,113.1-75,181v55.3l189.6-189.5c6.2-6.2,16.4-6.2,22.6,0,5.4,5.4,6.1,13.6,2.2,19.8h.1Z"/>
                            </svg>                            
                            <div class="navA">{{ __('Create') }}</div>
                        </x-nav-link>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="menuText">
            @if (Auth::user()->hasRole('admin'))
                <p>Admin</p>
            @elseif (Auth::user()->hasRole('user'))
                <p>Config</p>
            @else
                <p>Config</p>
            @endif
        </div>
        <!-- Navigation Links Config -->
        <div class="menuList">
            <nav>
                <ul>
                    <li>
                        <x-dropdown-link :href="route('profile.edit')">
                            <svg class="menu-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                            @if(Auth::check())
                                <div class="navA">{{ Auth::user()->name }}</div>
                            @else
                                <div class="navA">Profile</div>
                            @endif                
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
        @else
        <div class="menuList">
            <nav>
                <ul>
                    <li>
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                            <div class="navA">{{ __('Login') }}</div>
                        </x-nav-link>
                    </li>
                </ul>
            </nav>
        </div>
    @endif
    </div>
</div>
