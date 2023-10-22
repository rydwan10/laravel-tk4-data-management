<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href={{ url('/') }}>Binus EOQ</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            @if (auth()->user()->role->id == 1)
                 <li class="menu-header">Admin Menu</li>
            @endif
            
            @if(auth()->user()->role->id == 2)
             <li class="menu-header">Manager Menu</li>
            @endif
           
            @if(auth()->user()->role->id == 4)
             <li class="menu-header">Warehouse Menu</li>
            @endif
            

            @if(auth()->user()->role->id == 1)
            <li class="{{ Request::is('users') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('users.index') }}"><i class="fas fa-user">
                    </i> <span>Manage Users</span>
                </a>
            </li>
            <li class="{{ Request::is('roles') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('roles.index') }}"><i class="fas fa-address-card">
                    </i> <span>Manage Roles</span>
                </a>
            </li>
            @endif

            @if(auth()->user()->role->id == 1 || auth()->user()->role->id == 2)
            <li class="{{ Request::is('inventories') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('inventories.index') }}"><i class="fas fa-box">
                    </i> <span>Manage Inventory</span>
                </a>
            </li>
            @endif

            <li class="{{ Request::is('orders') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('orders.index') }}"><i class="fas fa-shopping-cart">
                    </i> <span>Manage Order</span>
                </a>
            </li>
            <li class="{{ Request::is('eoq') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('eoq.index') }}"><i class="fas fa-clock">
                    </i> <span>EOQ List</span>
                </a>
            </li>
        </ul>

        
    </aside>
</div>
