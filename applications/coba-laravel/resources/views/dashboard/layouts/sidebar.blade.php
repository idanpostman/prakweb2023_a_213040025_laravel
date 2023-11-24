<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link link-dark {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <i class="bi bi-house"></i>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          {{-- * adalah sebuah wildcard untuk active link --}}
          <a class="nav-link link-dark {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <i class="bi bi-file-earmark-text"></i>
            My Posts
          </a>
        </li>
      </ul>

      @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-centaer px-3 mt-4 mb-1 text-muted">
            <span>ADMINISTRATOR</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link link-dark {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                    <i class="bi bi-grid"></i>
                    Post Categories
                </a>
            </li>
        </ul>
      @endcan

    </div>
  </nav>


