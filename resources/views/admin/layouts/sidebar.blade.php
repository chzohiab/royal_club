<div class="sidebar">
    <div class="side-menu">
        <ul class="menu">
            <li class="nav-item">
                <a href="" class="nav-link {{ request()->routeIs('Dashboard') ? 'active' : '' }} " >
                    <div class="icon">
                        <i class="ri-home-7-line"></i>
                    </div>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link {{ request()->routeIs('clubs') ? 'active' : '' }}">
                    <div class="icon">
                        <i class="ri-building-4-line"></i>
                    </div>
                    <span>Clubs</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link {{ request()->routeIs('teams') ? 'active' : '' }}">
                    <div class="icon">
                        <i class="ri-team-line"></i>
                    </div>
                    <span>Teams</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-bg">
        <img src="{{ asset('assets/images/sidebarbg.jpg') }}" alt="">
    </div>
</div>
