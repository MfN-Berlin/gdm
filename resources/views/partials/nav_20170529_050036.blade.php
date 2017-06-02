<nav class="navbar navbar-default navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" title="GDM - Generic Data Management">Projektmetadaten</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!--
                <li class="{{ (Request::is('/') ? 'active' : '') }}">
                    <a href="{{ URL::to('') }}"><i class="fa fa-home"></i> Start</a>
                </li>
                -->
                <li class="{{ (Request::is('projects') ? 'active' : '') }}">
                    <a href="{{ URL::to('projects') }}"><i class="fa fa-home"></i> Projekte</a>
                </li>
                <li class="{{ (Request::is('Dummies') ? 'active' : '') }}"><a href="{{ URL::to('dummies') }}">Dummies</a></li><li class="{{ (Request::is('Foobars') ? 'active' : '') }}"><a href="{{ URL::to('foobars') }}">Foobars</a></li></ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="{{ (Request::is('about') ? 'active' : '') }}">
                    <a href="{{ URL::to('about') }}">Über uns</a>
                </li>
                <li class="{{ (Request::is('contact') ? 'active' : '') }}">
                    <a href="{{ URL::to('contact') }}">Kontakt</a>
                </li>
                @if (Auth::guest())
                <li class="{{ (Request::is('auth/login') ? 'active' : '') }}"><a href="{{ URL::to('auth/login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
                <li class="{{ (Request::is('auth/register') ? 'active' : '') }}"><a href="{{ URL::to('auth/register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }} <i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        @if(Auth::check())
                        @if(Auth::user()->admin==1)
                        <li>
                            <a href="{{ URL::to('admin/dashboard') }}"><i class="fa fa-tachometer"></i> Admin Dashboard</a>
                        </li>
                        @endif
                        <li role="presentation" class="divider"></li>
                        @endif
                        <li>
                            <a href="{{ URL::to('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>