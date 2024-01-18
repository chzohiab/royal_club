<div class="rc-header">
    <div class="container">
        <div class="rc-head">
            <div class="rc-logo">
                <a href="">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="">
                </a>
            </div>
            <div class="rc-nav">
                <ul class="rc-menu">
                    <li class="rc-nav-item">
                        <a href="" class="rc-nav-link">Home</a>
                    </li>
                    <li class="rc-nav-item">
                        <a href="" class="rc-nav-link">Club</a>
                    </li>
                    <li class="rc-nav-item">
                        <a href="" class="rc-nav-link">Teams</a>
                    </li>
                    <li class="rc-nav-item">
                        <a href="" class="rc-nav-link">Contact</a>
                    </li>
                    {{-- @if(Auth::check())
                    <li class="rc-nav-item dropdown">
                            <div class="rc-nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </div>
                            <ul class="dropdown-menu">
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('login') }}" class="btn btn-primary">{{ __('Log In') }}</a>
                    </li>
                    @endif --}}

                </ul>
            </div>
        </div>
    </div>
</div>