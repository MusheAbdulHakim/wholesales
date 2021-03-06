<aside class="left-sidebar">
    <ul id="slide-out" class="sidenav">
        <li>
            <ul class="collapsible p-t-30">
                <li>
                    <a href="{{route('dashboard')}}" class="collapsible-header">
                        <i class="material-icons">dashboard</i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                @can('view-categories')
                <li>
                    <a href="{{route('categories.index')}}" class="collapsible-header">
                        <i class="material-icons">assignment</i>
                        <span class="hide-menu">Categories</span>
                    </a>
                </li>
                @endcan
                @can('view-suppliers')
                <li>
                    <a href="{{route('suppliers.index')}}" class="collapsible-header">
                        <i class="material-icons">group</i>
                        <span class="hide-menu">Suppliers</span>
                    </a>
                </li>
                @endcan
                @can('view-purchases')
                <li>
                    <a href="{{route('purchases.index')}}" class="collapsible-header">
                        <i class="material-icons">add_shopping_cart</i>
                        <span class="hide-menu">Purchases</span>
                    </a>
                </li>
                @endcan
                @can('view-products')
                <li>
                    <a href="{{route('products.index')}}" class="collapsible-header">
                        <i class="material-icons">business_center</i>
                        <span class="hide-menu">Stock</span>
                    </a>
                </li>
                @endcan
                @can('view-sales')
                <li>
                    <a href="{{route('sales.index')}}" class="collapsible-header">
                        <i class="material-icons">equalizer</i>
                        <span class="hide-menu">Sales</span>
                    </a>
                </li>
                @endcan
                @can('view-customers')
                <li>
                    <a href="{{route('customers.index')}}" class="collapsible-header">
                        <i class="material-icons">group</i>
                        <span class="hide-menu">Customers</span>
                    </a>
                </li>
                @endcan
                @can('view-backups')
                    <li>
                        <a href="{{route('backup.index')}}" class="collapsible-header">
                            <i class="material-icons">backup</i>
                            <span class="hide-menu">Backups</span>
                        </a>
                    </li>  
                @endcan
                
                @can('access-control')
                <li>
                    <a class="collapsible-header has-arrow"><i class="material-icons">verified_user</i><span class="hide-menu">Authentication</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible" data-collapsible="accordion">
                            <li>
                                <a href="{{route('users.index')}}">
                                    <i class="material-icons">group</i>
                                    <span class="hide-menu">Users</span>
                                </a>
                            </li>
                            @can('view-roles')
                            <li>
                                <a href="{{route('roles.index')}}">
                                    <i class="material-icons">person</i>
                                    <span class="hide-menu">Roles</span>
                                </a>
                            </li>
                            @endcan
                            @can('view-permissions')
                            <li>
                                <a href="{{route('permissions.index')}}">
                                    <i class="material-icons">person</i>
                                    <span class="hide-menu">Permissions</span>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </div>
                </li>
                @endcan
                @can('view-settings')
                <li>
                    <a href="{{route('settings')}}" class="collapsible-header">
                        <i class="material-icons">settings</i>
                        <span class="hide-menu">Settings</span>
                    </a>
                </li>
                @endcan
                {{-- <li>
                    <a href="{{route('generate-reports')}}" class="collapsible-header">
                        <i class="material-icons">assessment</i>
                        <span class="hide-menu">Reports</span>
                    </a>
                </li> --}}
                <li>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="btn collapsible-header" type="submit"><i class="material-icons">power_settings_new</i><span class="hide-menu"> Log Out </span></button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</aside>