<nav class="navbar nav-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            {{-- Collapsed Hamburge --}}
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#app-navbar-collapse">
                <span> class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            {{-- Branding Image --}}
            <a class="navbar-brand" href="{{ url('/') }}">
                LaraBBS
            </a>
        </div>

        <div class="collapsed navbar-collapse" id="app-navbar-collapse">
            {{-- Left Side Of Navbar --}}
            <ul class="nav navbar-nav">

            </ul>
            {{-- Right Side Of Navbar --}}
            <ul class="nav navbar-nav navbar-right">
                {{-- Authentication Links --}}
            @guest
                <li><a href="{{ route('login') }}">登录</a></li>
                <li><a href="{{ route('register') }}">注册</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="">
                        <span class="user-avatar pull-left" style="margin-right:8px;margin-top:-5px;">
                            <img src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60">
                        </span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();doctment.getElementById('logout-form').submit()">
                                退出登录
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;" >
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
            </ul>

        </div>
    </div>
</nav>
