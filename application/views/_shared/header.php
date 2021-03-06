<header class="navbar navbar-expand-md navbar-light d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="." class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
          <img src="<?=base_url()?>public/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
        </a>
        <div class="navbar-nav flex-row order-md-last">
          <div class="nav-item dropdown d-none d-md-flex mr-3">
            <a href="#" class="nav-link px-0" data-toggle="dropdown" tabindex="-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                <path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
              <span class="badge bg-red"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
              <div class="card">
                <div class="card-body">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem
                  fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime
                  necessitatibus ullam.
                </div>
              </div>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-toggle="dropdown">
              <span class="avatar avatar-sm" style="background-image: url(<?=base_url()?>public/static/avatars/000m.jpg)"></span>
              <div class="d-none d-xl-block pl-2">
                <div>Pawe?? Kuna</div>
                <div class="mt-1 small text-muted">UI Designer</div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
              <a href="#" class="dropdown-item">Set status</a>
              <a href="#" class="dropdown-item">Profile & account</a>
              <a href="#" class="dropdown-item">Feedback</a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">Settings</a>
              <a href="#" class="dropdown-item">Logout</a>
            </div>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="./index.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg"
                      class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <polyline points="5 12 3 12 12 3 21 12 19 12" />
                      <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                      <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Home
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-base" data-toggle="dropdown" role="button"
                  aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg"
                      class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
                      <line x1="12" y1="12" x2="20" y2="7.5" />
                      <line x1="12" y1="12" x2="12" y2="21" />
                      <line x1="12" y1="12" x2="4" y2="7.5" />
                      <line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Interface
                  </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-columns  dropdown-menu-columns-2">
                  <li>
                    <a class="dropdown-item" href="./empty.html">
                      Empty page
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./blank.html">
                      Blank page
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./buttons.html">
                      Buttons
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./cards.html">
                      Cards
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./cards-masonry.html">
                      Cards Masonry
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./dropdowns.html">
                      Dropdowns
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./icons.html">
                      Icons
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./modals.html">
                      Modals
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./maps.html">
                      Maps
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./maps-vector.html">
                      Vector maps
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./navigation.html">
                      Navigation
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./charts.html">
                      Charts
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./charts-heatmap.html">
                      Charts heatmap
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./pagination.html">
                      Pagination
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./skeleton.html">
                      Skeleton
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./tabs.html">
                      Tabs
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./tables.html">
                      Tables
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./calendar.html">
                      Calendar
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./carousel.html">
                      Carousel
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./lists.html">
                      Lists
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./typography.html">
                      Typography
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./markdown.html">
                      Markdown
                    </a>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-toggle="dropdown"
                      role="button" aria-expanded="false">
                      Authentication
                    </a>
                    <div class="dropdown-menu">
                      <a href="./sign-in.html" class="dropdown-item">Sign in</a>
                      <a href="./sign-up.html" class="dropdown-item">Sign up</a>
                      <a href="./forgot-password.html" class="dropdown-item">Forgot password</a>
                      <a href="./terms-of-service.html" class="dropdown-item">Terms of service</a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-toggle="dropdown" role="button"
                      aria-expanded="false">
                      Error pages
                    </a>
                    <div class="dropdown-menu">
                      <a href="./error-404.html" class="dropdown-item">404 page</a>
                      <a href="./error-500.html" class="dropdown-item">500 page</a>
                      <a href="./error-maintenance.html" class="dropdown-item">Maintenance page</a>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./form-elements.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg"
                      class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <polyline points="9 11 12 14 20 6" />
                      <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Forms
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-extra" data-toggle="dropdown" role="button"
                  aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg"
                      class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path
                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                      </svg>
                  </span>
                  <span class="nav-link-title">
                    Extra
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="./invoice.html">
                      Invoice
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./blog.html">
                      Blog cards
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./snippets.html">
                      Snippets
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./search-results.html">
                      Search results
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./pricing.html">
                      Pricing cards
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./users.html">
                      Users
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./gallery.html">
                      Gallery
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./license.html">
                      License
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./profile.html">
                      Profile
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./music.html">
                      Music
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./welcome.html">
                      Welcome
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button"
                  aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg"
                      class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <rect x="4" y="4" width="6" height="5" rx="2" />
                      <rect x="4" y="13" width="6" height="7" rx="2" />
                      <rect x="14" y="4" width="6" height="7" rx="2" />
                      <rect x="14" y="15" width="6" height="5" rx="2" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Layout
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="./layout-horizontal.html">
                      Horizontal
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./layout-vertical.html">
                      Vertical
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./layout-vertical-right.html">
                      Right vertical
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item active" href="./layout-condensed.html">
                      Condensed
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./layout-condensed-dark.html">
                      Condensed dark
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./layout-combo.html">
                      Combined
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./layout-navbar-dark.html">
                      Navbar dark
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./layout-navbar-overlap.html">
                      Navbar overlap
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./layout-dark.html">
                      Dark mode
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./layout-rtl.html">
                      RTL mode
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./layout-fluid.html">
                      Fluid
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./layout-fluid-vertical.html">
                      Fluid vertical
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./docs/index.html">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg"
                      class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                      fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                      <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                      <line x1="9" y1="9" x2="10" y2="9" />
                      <line x1="9" y1="13" x2="15" y2="13" />
                      <line x1="9" y1="17" x2="15" y2="17" /></svg>
                  </span>
                  <span class="nav-link-title">
                    Documentation
                  </span>
                </a>
              </li>
            </ul>
            <div class="ml-md-auto pl-md-4 py-2 py-md-0 mr-md-4 order-first order-md-last flex-grow-1 flex-md-grow-0">
              <form action="." method="get">
                <div class="input-icon">
                  <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <circle cx="10" cy="10" r="7" />
                      <line x1="21" y1="21" x2="15" y2="15" /></svg>
                  </span>
                  <input type="text" class="form-control" placeholder="Search???">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>
    