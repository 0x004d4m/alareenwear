<nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-light" id="ftco-navbar">
    <div class="container" dir="ltr">
        <a class="navbar-brand" href="#"><img src="{{ url('logo/logo.png') }}" height="10%" width="30%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> {{__('content.menu')}}
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto" style="display: -webkit-box !important;">
                <li class="nav-item"><a href="/" class="nav-link">{{__('content.home')}}</a></li>
                <li class="nav-item"><a href="about" class="nav-link">{{__('content.about')}}</a></li>
                <li class="nav-item"><a href="products" class="nav-link">{{__('content.products')}}</a></li>
                <li class="nav-item"><a href="team" class="nav-link">{{__('content.team')}}</a></li>
                <li class="nav-item"><a href="blog" class="nav-link">{{__('content.blog')}}</a></li>
                <li class="nav-item"><a href="gallery" class="nav-link">{{__('content.gallery')}}</a></li>
                <li class="nav-item"><a href="contact" class="nav-link">{{__('content.contact')}}</a></li>
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
            </ul>
        </div>
    </div>
</nav>
