<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    {{-- Brand --}}
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                {{-- Logo SVG tetap --}}
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                        fill="#7367F0" />
                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                        fill="#161616" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                        fill="#7367F0" />
                </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bold">CRM TICKET</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        {{-- DASHBOARD --}}
        <li class="menu-item">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div>Dashboard</div>
            </a>
        </li>

        {{-- SECTION --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">CRM Modules</span>
        </li>

        {{-- TICKETING --}}
        <li class="menu-item">
            <a href="{{ route('tickets.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-headset"></i>
                <div>Tickets</div>
            </a>
        </li>

        {{-- PIPELINE --}}
        <li class="menu-item">
            <a href="{{ route('pipelines.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-clipboard-list"></i>
                <div>Pipeline</div>
            </a>
        </li>

        {{-- USER MANAGEMENT --}}
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div>Users</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('users.index') }}" class="menu-link">
                        <div>User List</div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- CUSTOMER MANAGEMENT --}}
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-user"></i>
                <div>Customers</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('customers.index') }}" class="menu-link">
                        <div>Customer List</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>
<!-- / Menu -->
