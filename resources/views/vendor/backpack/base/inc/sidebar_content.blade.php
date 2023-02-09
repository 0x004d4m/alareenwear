{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

@if(backpack_user()->can('View Hero'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('hero') }}"><i class="nav-icon la la-question"></i> {{__('sidebar.Heroes')}}</a></li>
@endif

@if(backpack_user()->can('View Services'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('service') }}"><i class="nav-icon la la-question"></i> {{__('sidebar.Services')}}</a></li>
@endif

@if(backpack_user()->can('View Video'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('video') }}"><i class="nav-icon la la-question"></i> {{__('sidebar.Videos')}}</a></li>
@endif

@if(backpack_user()->can('View Counters'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('counter') }}"><i class="nav-icon la la-question"></i> {{__('sidebar.Counters')}}</a></li>
@endif

@if(backpack_user()->can('View Products'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('product') }}"><i class="nav-icon la la-question"></i> {{__('sidebar.Products')}}</a></li>
@endif

@if(backpack_user()->can('View Gallery'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('gallery') }}"><i class="nav-icon la la-question"></i> {{__('sidebar.Galleries')}}</a></li>
@endif

@if(backpack_user()->can('View Team'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('team') }}"><i class="nav-icon la la-question"></i> {{__('sidebar.Teams')}}</a></li>
@endif

@if(backpack_user()->can('View Certifications'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('certification') }}"><i class="nav-icon la la-question"></i> {{__('sidebar.Certifications')}}</a></li>
@endif

@if(backpack_user()->can('View Partners'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('partner') }}"><i class="nav-icon la la-question"></i> {{__('sidebar.Partners')}}</a></li>
@endif

@if(backpack_user()->can('View Testimonies'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('testimony') }}"><i class="nav-icon la la-question"></i> {{__('sidebar.Testimonies')}}</a></li>
@endif

@if(backpack_user()->can('View Blogs'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('blog') }}"><i class="nav-icon la la-question"></i> {{__('sidebar.Blogs')}}</a></li>
@endif

@if(backpack_user()->can('View Contact Requests'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('contact-request') }}"><i class="nav-icon la la-question"></i> {{__('sidebar.Contact_requests')}}</a></li>
@endif

@if(backpack_user()->can('Manage About'))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('about') }}"><i class="nav-icon la la-question"></i> {{__('sidebar.Abouts')}}</a></li>
@endif

@if(backpack_user()->can('Manage Logs'))
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i> {{__('sidebar.Logs')}}</a></li>
@endif

@if(backpack_user()->can('Manage Authentication'))
    <!-- Users, Roles, Permissions -->
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> {{__('sidebar.Authentication')}}</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>{{__('sidebar.Users')}}</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>{{__('sidebar.Roles')}}</span></a></li>
        </ul>
    </li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-globe"></i> {{__('sidebar.Translations')}}</a>
        <ul class="nav-dropdown-items">
            {{-- <li class="nav-item"><a class="nav-link" href="{{ backpack_url('language') }}"><i class="nav-icon la la-flag-checkered"></i> Languages</a></li> --}}
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('language/texts') }}"><i class="nav-icon la la-language"></i> {{__('sidebar.Site_texts')}}</a></li>
        </ul>
    </li>
@endif
