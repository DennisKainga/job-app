{{-- NAVBAR --}}
<nav id="nav-menu-container">
    <ul class="nav-menu">
        <x-ui.NavItem label="Home" link="{{ route('pages.home') }}" />
        <x-ui.NavItem label="About" link="{{ route('pages.about') }}" />
        <x-ui.NavItem label="Jobs" link="{{ route('pages.jobs.index') }}" />
        <x-ui.NavItem label="Blogs" link="{{ route('pages.blog.index') }}" />
        <x-ui.NavItem label="Contact us" link="{{ route('pages.contact') }}" />

        @guest
        <x-ui.NavItem label="Login" link="{{ route('login') }}" />
        @endguest
        @auth
        <li>
            <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" method="POST" action="{{ route('auth.logout') }}" style="display: none;">
                @csrf
            </form>
        </li>
        @endauth
    </ul>
</nav>