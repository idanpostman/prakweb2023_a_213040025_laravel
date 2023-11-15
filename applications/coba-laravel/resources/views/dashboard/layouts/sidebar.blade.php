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
          <a class="nav-link link-dark {{ Request::is('dashboard/posts') ? 'active' : '' }}" href="/dashboard/posts">
            <i class="bi bi-file-earmark-text"></i>
            My Posts
          </a>
        </li>
      </ul>
    </div>
  </nav>


