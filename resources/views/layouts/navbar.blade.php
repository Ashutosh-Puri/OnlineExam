
 <div>
    <!-- Nav Bar Start -->
    <nav class="navbar navbar-expand-md z-index-5 bg-custom  pb-0 fw-bold  w-100 ">
        <div class="container-fluid ">
            <a  class=" brand navbar-brand fs-5 text-white fw-bold" href="{{ url('user') }}">
                {{ config('app.name', 'Online Exam') }}
            </a>
            <button class="navbar-toggler bg-white " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto ">
                    
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link  {{ (request()->is('aboutus')) ? 'active' : '' }} " href="{{ url('aboutus') }}">{{ __('About Us') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  {{ (request()->is('contactus')) ? 'active' : '' }} " href="{{ url('contactus') }}">{{ __('Contact Us') }}</a>
                                </li>
                          
                            <li class="nav-item">
                                <a class="nav-link  {{ (request()->is('login')) ? 'active' : '' }} " href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        @if (Auth::user()->role=='0')  
                        <li class="nav-item">                   
                            <a class="nav-link {{ (request()->is('user')) ? 'active' : '' }}" href="{{ url('user') }}">{{ __('Home') }}</a>                     
                        </li>
                            @endif
                        <li class="nav-item">
                            <a class="nav-link  {{ (request()->is('aboutus')) ? 'active' : '' }} " href="{{ url('aboutus') }}">{{ __('About Us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ (request()->is('contactus')) ? 'active' : '' }} " href="{{ url('contactus') }}">{{ __('Contact Us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ (request()->is('result')) ? 'active' : '' }} " href="{{ route('result.index') }}">{{ __('Result') }}</a>
                        </li>
  
                        <li class="nav-item dropdown">
                           
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu bg-custom dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->role=='1')                     
                                    <a class="nav-link {{ (request()->is('admin/1')) ? 'active' : '' }}" href="{{ route('admin.show',1) }}">{{ __('A Dashboard') }}</a>
                                    <a id="udashboard" class="nav-link {{ (request()->is('user')) ? 'active' : '' }}" href="{{ url('user') }}">{{ __('U Dashboard') }}</a>                         
                                @endif
                                <a id="logout" class="dropdown-item nav-link" href="{{ route('logout') }}"
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
    <!-- Nav Bar End -->
</div>
