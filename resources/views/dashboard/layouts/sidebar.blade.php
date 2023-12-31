<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky-sm">
      <ul class="nav flex-column">
          <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                  <span data-feather="home" class="align-text-bottom"></span>
                  Dashboard
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/income*') ? 'active' : '' }}" href="/dashboard/income">
                  <span data-feather="file" class="align-text-bottom"></span>
                  Pendapatan
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/expense*') ? 'active' : '' }}" href="/dashboard/expense">
                  <span data-feather="file" class="align-text-bottom"></span>
                  Pengeluaran
              </a>
          </li>
          <li><hr class="divider"></li>
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="nav-link px-3 bg-light border-0 text-danger fs-6">Logout <span data-feather="log-out"
                    class="align-text-bottom"></span></button>
        </form>
      </ul>
  </div>
</nav>