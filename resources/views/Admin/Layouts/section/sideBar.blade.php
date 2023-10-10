<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li>
                    <a href="{{ route('admin:home') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>{{-- <span class="badge rounded-pill bg-warning float-end">04</span> --}}
                        <span key="t-dashboard">{{ __('Dashboard') }}</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">Gestion Blog</li>
                <li class="facturis_menu">
                    <a href="{{route('admin:post:list')}}" class="waves-effect">
                        {{-- <span class="badge rounded-pill bg-success float-end" key="t-new">New</span> --}}
                        <i class="bx bx-user-circle"></i>
                        <span key="t-articles">Articles</span>
                    </a>
                </li>
                <li class="facturis_menu">
                    <a href="{{route('admin:category:list')}}" class="waves-effect">
                        {{-- <span class="badge rounded-pill bg-success float-end" key="t-new">New</span> --}}
                        <i class="bx bx-user-circle"></i>
                        <span key="t-categories">Catégories</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
