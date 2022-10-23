<section class="bg-azure">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container d-flex gap-20">

            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

            <div class="flex between i-center grow">
                <div class="flex gap-20 i-center">
                    <div class="bold">
                        Developed by: <strong class="ml-2">TEAM 2</strong>
                    </div>

                    <ul class="list-style-none flex gap-10">
                        @foreach (config('developers') as $sviluppatore)
                            <li
                                class="bg-gray-1-H px-2 py-1 rounded-3 bold scale-3-H traansition-transform duration-2 ease-in-out c-default">
                                {{ $sviluppatore }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="flex gap-20 i-center">
                    <div>
                        <a class="btn btn-primary shadow" href="{{ route('admin.students.index') }}">Students</a>
                    </div>

                    <div>
                        <a class="btn btn-primary shadow" href="{{ route('admin.students.create') }}">ADD NEW
                            STUDENT</a>
                    </div>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</section>
