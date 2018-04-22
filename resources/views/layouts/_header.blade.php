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
                <li><a href="#">登录</a></li>
                <li><a href="#">注册</a></li>
            </ul>

        </div>
    </div>
</nav>
