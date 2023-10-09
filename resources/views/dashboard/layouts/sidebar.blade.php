
  <div class="sidebar d-flex flex-column flex-shrink-0 p-2 text-bg-dark">
    <a href="#" class="mx-auto text-white text-decoration-none">
      <h4 class="fs-4 text-center py-2"><i class="bi bi-file-person"></i>Admin</h4>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item mb-2">
        <a href="/dashboard/about" class="nav-link text-white  {{ Request::is('dashboard/about*')? 'active' : ''}}">
          <svg class="bi pe-none me-2" width="16" height="16"></svg>
          <i class="bi bi-house"></i><span> Home</span>
        </a>
      </li>

      <li class="nav-item mb-2">
        <a href="/dashboard/wahana" class="nav-link text-white {{ Request::is('dashboard/wahana*')? 'active' : ''}}">
          <svg class="bi pe-none me-2" width="16" height="16"></svg>
          <i class="bi bi-back"></i> <span> Wahana</span>
        </a>
      </li>
      
      <li class="nav-item mb-2">
        <a href="/dashboard/image" class="nav-link text-white {{ Request::is('dashboard/image*')? 'active' : ''}}">
          <svg class="bi pe-none me-2" width="16" height="16"></svg>
          <i class="bi bi-file-image"></i><span> Images</span>
        </a>
      </li>
      <hr class="my-3">
        <li class="nav-item mb-2">
          <a href="/" class="nav-link text-white">
            <svg class="bi pe-none me-2" width="16" height="16"></svg>
            <i class="bi bi-arrow-bar-left"></i><span> Return Home</span>
          </a>
        </li>
       
    </ul>
    <hr>
</div>
