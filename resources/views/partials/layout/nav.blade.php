{{-- NAVBAR --}}
<nav id="nav-menu-container">
    <ul class="nav-menu">
        <x-ui.NavItem label="Home" link="{{ route('pages.home') }}" />
        <x-ui.NavItem label="About" link="{{ route('pages.about') }}" />
        <x-ui.NavItem label="Jobs" link="{{ route('pages.jobs.index') }}" />
        <x-ui.NavItem label="Blogs" link="{{ route('pages.blog.index') }}" />
        <x-ui.NavItem label="Contact us" link="{{ route('pages.contact') }}" />
    </ul>
</nav>