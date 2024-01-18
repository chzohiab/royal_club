<div class="topbar">
    <div class="topbar-left">
        <h2>RCC</h2>
    </div>
    <div class="topbar-right">
        {{-- <ul class="topbar-menu">
            @guest('admin')
                <a href="{{ route('admin.login') }}">Login</a>
            @else
                <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::guard('admin')->user()->name }}
                </div>
                <ul class="dropdown-menu">
                    <li>
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <a :href="route('admin.logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            @endguest
        </ul> --}}
    </div>
</div>
