<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">

            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-journal-text"></i><span>Voucher</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="{{ url('office/incoming/voucher') }}">
                  <i class="bi bi-circle"></i><span>Incoming Voucher</span>
                </a>
              </li>
              <li>
                <a href="{{ url("office/outgoing/voucher") }}">
                  <i class="bi bi-circle"></i><span> Released Voucher</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('office/Account/Settings') }}">
                <i class="bi bi-gear"></i><span>Account Settings</span>
            </a>
        </li>

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Report</span>
        </a>
      </li>


<br>
<li>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-link text-decoration-none" style="background-color: rgb(255, 255, 255);">
            <i class="bi bi-box-arrow-in-right"></i> {{ __('Logout') }}
        </button>
    </form>
  </li>

      <!-- End log out Page Nav -->

</ul>

</aside>
