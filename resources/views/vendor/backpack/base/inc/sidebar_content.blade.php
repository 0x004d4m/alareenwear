{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

@if(backpack_user()->can('View Hero'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('hero') }}"><i class="nav-icon la la-question"></i> Heroes</a></li>
@endif

@if(backpack_user()->can('View Services'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('service') }}"><i class="nav-icon la la-question"></i> Services</a></li>
@endif

@if(backpack_user()->can('View Video'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('video') }}"><i class="nav-icon la la-question"></i> Videos</a></li>
@endif

@if(backpack_user()->can('View Counters'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('counter') }}"><i class="nav-icon la la-question"></i> Counters</a></li>
@endif

@if(backpack_user()->can('View Products'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('product') }}"><i class="nav-icon la la-question"></i> Products</a></li>
@endif

@if(backpack_user()->can('View Gallery'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('gallery') }}"><i class="nav-icon la la-question"></i> Galleries</a></li>
@endif

@if(backpack_user()->can('View Team'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('team') }}"><i class="nav-icon la la-question"></i> Teams</a></li>
@endif

@if(backpack_user()->can('View Certifications'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('certification') }}"><i class="nav-icon la la-question"></i> Certifications</a></li>
@endif

@if(backpack_user()->can('View Partners'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('partner') }}"><i class="nav-icon la la-question"></i> Partners</a></li>
@endif

@if(backpack_user()->can('View Testimonies'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('testimony') }}"><i class="nav-icon la la-question"></i> Testimonies</a></li>
@endif

@if(backpack_user()->can('View Blogs'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('blog') }}"><i class="nav-icon la la-question"></i> Blogs</a></li>
@endif

@if(backpack_user()->can('View Contact Requests'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('contact-request') }}"><i class="nav-icon la la-question"></i> Contact requests</a></li>
@endif

@if(backpack_user()->can('Manage About'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('about') }}"><i class="nav-icon la la-question"></i> Abouts</a></li>
@endif

@if(backpack_user()->can('Manage Logs'))
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i> Logs</a></li>
@endif

@if(backpack_user()->can('Manage Authentication'))
    <!-- Users, Roles, Permissions -->
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
        </ul>
    </li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-globe"></i> Translations</a>
        <ul class="nav-dropdown-items">
            {{-- <li class="nav-item"><a class="nav-link" href="{{ backpack_url('language') }}"><i class="nav-icon la la-flag-checkered"></i> Languages</a></li> --}}
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('language/texts') }}"><i class="nav-icon la la-language"></i> Site texts</a></li>
        </ul>
    </li>
@endif
