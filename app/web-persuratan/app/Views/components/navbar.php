<header id="page-topbar">
  <div class="navbar-header">
    <div class="d-flex">
      <!-- LOGO -->
      <div class="navbar-brand-box">
        <br />
        <h1>Instinct</h1>
      </div>
      <button
        type="button"
        class="btn btn-sm px-3 font-size-16 header-item waves-effect"
        id="vertical-menu-btn"
      >
        <i class="fa fa-fw fa-bars"></i>
      </button>
      <!-- App Search-->
      <form class="app-search d-none d-lg-block">
        <div class="position-relative">
          <input type="text" class="form-control" placeholder="Search..." />
          <span class="bx bx-search-alt"></span>
        </div>
      </form>
    </div>
    <div class="d-flex">
      <div class="dropdown d-inline-block d-lg-none ms-2">
        <div
          class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
          aria-labelledby="page-header-search-dropdown"
        >
          <form class="p-3">
            <div class="form-group m-0">
              <div class="input-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search ..."
                  aria-label="Recipient's username"
                />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="dropdown d-none d-lg-inline-block ms-1">
        <button
          type="button"
          class="btn header-item noti-icon waves-effect"
          data-bs-toggle="fullscreen"
        >
          <i class="bx bx-fullscreen"></i>
        </button>
      </div>
      <div class="dropdown d-inline-block">
        <div
          class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
          aria-labelledby="page-header-notifications-dropdown"
        ></div>
      </div>
      <div class="dropdown d-inline-block">
        <button
          type="button"
          class="btn header-item noti-icon right-bar-toggle waves-effect"
        >
          <i class="bx bx-cog bx-spin"></i>
        </button>
      </div>
    </div>
  </div>
</header>
