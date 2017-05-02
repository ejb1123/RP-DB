<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@extends('layouts.head')
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                  @if (Auth::guest())
                  &nbsp;
                  @else
                      <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button">Characters<span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/characters')}}" >List</a></li>
                                <form><input type="text" class="form-control" placeholder="Fuzzy Search"></form>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button">Tickets<span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="">List</a></li>
                                <form><input type="text" class="form-control" placeholder="Fuzzy Search"></form>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button">Incidents<span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="">List</a></li>
                                <form><input type="text" class="form-control" placeholder="Fuzzy Search"></form>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button">Department<span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Officers</a></li>
                                <li><a href="">Vehicles</a></li>
                                <form><input type="text" class="form-control" placeholder="Fuzzy Search"></form>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button">Warents<span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="">List</a></li>
                                <form><input type="text" class="form-control" placeholder="Fuzzy Search"></form>
                            </ul>
                        </li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <li>
                                    <a href="/dashboard">DashBoard</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
