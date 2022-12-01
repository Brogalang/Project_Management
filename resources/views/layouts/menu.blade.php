<li class="nav-item {{ Request::is('projects*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('projects.index') }}">
        <i class="nav-icon fa fa-tasks text-info"></i>
        <span>Project Register</span>
    </a>
</li>
<li class="nav-item {{ Request::is('rABS*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('rABS.index') }}">
        <i class="nav-icon fa fa-list text-warning"></i>
        <span>RAB Project</span>
    </a>
</li>
<!-- <li class="d-none nav-item {{ Request::is('rabDetails*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('rabDetails.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Rab Details</span>
    </a>
</li> -->
<li class="nav-item nav-dropdown ">
    <a href="#" class="nav-link nav-dropdown-toggle"><i class="nav-icon fa fa-tasks text-info"></i><span class="menu-title">Project Management</span></a>
    <ul class="nav-dropdown-items">
        <!-- <li class="nav-item {{ Request::is('projects*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('projects.index') }}">
                <i class="nav-icon fa fa-empty text-secondary"></i>
                <span>Project</span>
            </a>
        </li> -->

        <!-- <li class="nav-item {{ Request::is('purchaseOrders*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('purchaseOrders.index') }}">
                <i class="nav-icon fa fa-empty text-secondary"></i>
                <span>Task List</span>
            </a>
        </li> -->

        <li class="nav-item {{ Request::is('invoices*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('invoices.index') }}">
                <i class="nav-icon fa fa-empty text-secondary"></i>
                <span>Delivery</span>
            </a>
        </li>

        <!-- <li class="nav-item">
            <a class="nav-link" href="{{ route('laporan_mingguan.index') }}">
                <i class="nav-icon fa fa-empty text-secondary"></i>
                <span>Laporan Mingguan</span>
            </a>
        </li> -->
    </ul>
</li>
<li class="nav-item {{ Request::is('rabDetails*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('rabDetails.index') }}">
        <i class="nav-icon fa fa-credit-card text-danger"></i>
        <span>FPPBJ</span>
    </a>
</li>

<li class="nav-item nav-dropdown ">
    <a href="#" class="nav-link nav-dropdown-toggle"><i class="nav-icon fa fa-money text-success"></i><span class="menu-title">Realisasi Pendapatan</span></a>
    <ul class="nav-dropdown-items">
        <li class="nav-item {{ Request::is('revenueInvoices*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('revenueInvoices.index') }}">
                <i class="nav-icon fa fa-empty text-secondary"></i>
                <span>Invoice</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('revenuePayments*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('revenuePayments.index') }}">
                <i class="nav-icon fa fa-empty text-secondary"></i>
                <span>Payments</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item nav-dropdown ">
    <a href="#" class="nav-link nav-dropdown-toggle"><i class="nav-icon fa fa-credit-card text-danger"></i><span class="menu-title">Realisasi Biaya</span></a>
    <ul class="nav-dropdown-items">
        <li class="nav-item {{ Request::is('purchaseOrders*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('purchaseOrders.index') }}">
                <i class="nav-icon fa fa-empty text-secondary"></i>
                <span>Purchase Orders</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('invoices*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('invoices.index') }}">
                <i class="nav-icon fa fa-empty text-secondary"></i>
                <span>Invoice</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('costPayments*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('costPayments.index') }}">
                <i class="nav-icon fa fa-empty text-secondary"></i>
                <span>Payments</span>
            </a>
        </li>
    </ul>
</li>



<!-- <li class="nav-item {{ Request::is('realisasi*') ? 'active' : '' }} d-none">
    <a class="nav-link" href="#">
        <i class="nav-icon icon-cursor"></i>
        <span>Realisasi</span>
    </a>
</li>

<li class="nav-item {{ Request::is('rabSubDetails*') ? 'active' : '' }} d-none">
    <a class="nav-link" href="{{ route('rabSubDetails.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Rab Sub Details</span>
    </a>
</li>

<li class="nav-item {{ Request::is('clients*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('clients.index') }}">
        <i class="nav-icon fa fa-users  text-primary"></i>
        <span>Clients</span>
    </a>
</li> -->
<hr>

<li class="nav-item">
    <a class="nav-link" href="{{ url('/logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="nav-icon fa fa-sign-out text-danger"></i>
        <span>Logout</span>
    </a>
</li>
