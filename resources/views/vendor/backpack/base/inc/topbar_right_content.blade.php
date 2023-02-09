{{-- This file is used to store topbar (right) items --}}


{{-- <li class="nav-item d-md-down-none"><a class="nav-link" href="#"><i class="la la-bell"></i><span class="badge badge-pill badge-danger">5</span></a></li>
<li class="nav-item d-md-down-none"><a class="nav-link" href="#"><i class="la la-list"></i></a></li>
<li class="nav-item d-md-down-none"><a class="nav-link" href="#"><i class="la la-map"></i></a></li> --}}
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{Backpack\LangFileManager\app\Models\Language::where('abbr',Session::get('locale'))->first()->native}}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        @foreach (Backpack\LangFileManager\app\Models\Language::where('active',1)->get() as $Language)
            <a class="dropdown-item @if(Session::get('locale')==$Language->abbr)active @endif" href="{{url('set-language/'.$Language->abbr)}}">{{$Language->native}}</a>
        @endforeach
    </div>
</li>
