

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">

        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Voucher</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('admin/form') }}">
              <i class="bi bi-circle"></i><span>Incoming Voucher</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Outgoing Voucher</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">

          <i class="bi bi-gear"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url("admin/settings/account") }}">

              <i class="bi bi-circle"></i><span>Manage Account</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>Transaction Logs</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>System Back up</span>
            </a>
          </li>
        </ul>
      </li>


      <a class="nav-link collapsed" data-bs-target="#forms-nav1" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>

  <a href="{{ url(' admin/form') }}">
            <i class="bi bi-emoji-angry"></i><span>Print</span>
          </a>
        </li>

        </ul>

<br>
    <li>
        <a class="nav-link collapsed" href="pages-Logout.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Log out</span>
        </a>
      </li>


      <!-- End log out Page Nav -->

</ul>

</aside>
