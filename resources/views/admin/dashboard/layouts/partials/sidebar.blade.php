<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="./index.html" class="brand-link">
      <!--begin::Brand Image-->
      <img src="" alt="" class="brand-image opacity-75 shadow" />
      <!--end::Brand Image-->
      <!--begin::Brand Text-->
      <span class="brand-text fw-light">Mini Web</span>
      <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation" aria-label="Main navigation"
        data-accordion="false" id="navigation">

        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
              Enquiries
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('contact.create') }}" class="nav-link active">
                <i class="nav-icon bi bi-circle"></i>
                <p>Add Enquery</p>
              </a>
              <a href="{{ route('contact.index') }}" class="nav-link active">
                <i class="nav-icon bi bi-circle"></i>
                <p>View Enquery</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
              Services
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('service.create') }}" class="nav-link active">
                <i class="nav-icon bi bi-circle"></i>
                <p>Add Service</p>
              </a>
              <a href="{{ route('service.index') }}" class="nav-link active">
                <i class="nav-icon bi bi-circle"></i>
                <p>View Services</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
              Service Categories
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('service_categories.create') }}" class="nav-link active">
                <i class="nav-icon bi bi-circle"></i>
                <p>Add Category</p>
              </a>
              <a href="{{ route('service_categories.index') }}" class="nav-link active">
                <i class="nav-icon bi bi-circle"></i>
                <p>View Categories</p>
              </a>
            </li>

          </ul>
        </li>

      </ul>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->