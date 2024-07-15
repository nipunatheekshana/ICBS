<div class="topbar-one">
    <div class="container">
        <div class="topbar-one__left">
            <a href="#">info@icbsinternational.com</a>
            <a href="#">+9475-541 47 53</a>
        </div><!-- /.topbar-one__left -->
        <div class="topbar-one__right">
            @if (Auth::check())
                <a href="{{ route('logout') }}">{{ Auth::user()->email }}</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('student-register') }}">Register</a>
            @endif

        </div><!-- /.topbar-one__right -->
    </div><!-- /.container -->
</div><!-- /.topbar-one -->
<header class="site-header site-header__header-one ">
    @include('includes.navbar')
    <div class="site-header__decor">
        <div class="site-header__decor-row">
            <div class="site-header__decor-single">
                <div class="site-header__decor-inner-1"></div><!-- /.site-header__decor-inner -->
            </div><!-- /.site-header__decor-single -->
            <div class="site-header__decor-single">
                <div class="site-header__decor-inner-2"></div><!-- /.site-header__decor-inner -->
            </div><!-- /.site-header__decor-single -->
            <div class="site-header__decor-single">
                <div class="site-header__decor-inner-3"></div><!-- /.site-header__decor-inner -->
            </div><!-- /.site-header__decor-single -->
        </div><!-- /.site-header__decor-row -->
    </div><!-- /.site-header__decor -->
</header><!-- /.site-header -->
