<nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
    <div class="container clearfix">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="logo-box clearfix">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo-icbs.jpg') }}" class="main-logo" width="168"
                    alt="Awesome Image" />
            </a>
            <div class="header__social">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="{{ url('https://www.facebook.com/icbsinternational2017') }}"><i
                        class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div><!-- /.header__social -->
            <button class="menu-toggler" data-target=".main-navigation">
                <span class="kipso-icon-menu"></span>
            </button>
        </div><!-- /.logo-box -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="main-navigation">
            <ul class=" navigation-box">
                <li class="current">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('teachers') }}">Teachers</a></li>
                        <li><a href="{{ route('career') }}">Careers</a></li>
                        <li><a href="{{ route('news') }}">News Page</a></li>
                        <li><a href="{{ route('faq') }}">FAQ'S</a></li>
                        <!--<li><a href="gallery.html">Gallery</a></li>
                        -->
                    </ul><!-- /.sub-menu -->
                </li>
                <li>
                    <a href="{{ route('departments') }}">Departments</a>
                    <ul class="sub-menu">
                        @foreach (App\Http\Controllers\DepartmentController::index() as $department)
                            <li><a href="{{ route('courseslist', $department->id) }}">{{ $department->name }}</a></li>
                        @endforeach
                        {{-- <li><a href="{{ route('courseslist-IT') }}">School of Information Technology</a></li>
                        <li><a href="{{ route('courseslist-bm') }}">School of Business & Finance</a></li>
                        <li><a href="{{ route('course-details') }}">School of Languages</a></li>
                        <li><a href="{{ route('courseslist-kids') }}">School of Kids Studies</a></li> --}}
                    </ul><!-- /.sub-menu -->
                </li>


                <li>
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
                <li>
                    <a href="{{ url('https://www.studysolutions.lk/?demotype=agntclient&agntclient=TWpBeU5EQTBNalV4TURRMk16QllVbGhCUkc1U1l3PT0=') }}">Study abroad</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
        <div class="right-side-box">
            <a class="header__search-btn search-popup__toggler" href="#"><i
                    class="kipso-icon-magnifying-glass"></i>
                <!-- /.kipso-icon-magnifying-glass --></a>
        </div><!-- /.right-side-box -->
    </div>
    <!-- /.container -->
</nav>
