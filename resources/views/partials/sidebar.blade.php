
<div class="sidebar-inner slimscroll">
    <div class="sidebar-menu">
        <ul>

            <li class="menu-title">Welcome {{auth()->user()->name}} {{auth()->user()->surname}}</li>
            @can('isAdmin')
            <li @if (Session::has('users_active'))
                class="active"
            @endif>
                <a href="{{route('users')}}">Users</a>
            </li>

                <li @if (Session::has('users_permissions'))
                    class="active"
                    @endif>
                    <a href="{{route('permissions')}}">Permissions</a>
                </li>
            <li @if (Session::has('drugs_active'))
                class="active"
            @endif>
                <a href="{{route('drugs')}}">Drugs</a>
            </li>
            <li @if (Session::has('stock_active'))
                class="active"
                @endif>
                <a href="{{route('stock')}}">Stock</a>
            </li>
            <li @if (Session::has('prices_active'))
                class="active"
                @endif>
                <a href="{{route('prices')}}">Prices</a>
            </li>

            @endcan
            @can('isAccounts')
            <li @if (Session::has('sales_active'))
                class="active"
                @endif>
                <a href="{{route('sales')}}">Sales</a>
            </li>
            @endcan

            @can('isTeller')
                <li @if (Session::has('sales_active'))
                    class="active"
                    @endif>
                    <a href="{{route('sell')}}">Sell Drugs</a>
                </li>
            @endcan

            <li @if (Session::has('change_password_active'))
                class="active"
                @endif>
                <a href="{{route('changepassword')}}">Change Password</a>
            </li>

        </ul>
    </div>
</div>
