<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>
        @hasSection ('title') @yield('title') | @endif
        {{config('app.name')}}
        @hasSection ('title-after') | @yield('title-after')@endif
    </title>
    <link href="{{asset('th/sbap/css/styles.css')}}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer src="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"></script>
</head>

<body>
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
        <a class="navbar-brand d-none d-sm-block" href="{{route('admin.dashboard')}}">Admin Panel</a><button
            class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i
                data-feather="menu"></i></button>
        <form class="form-inline mr-auto d-none d-lg-block"><input class="form-control form-control-solid mr-sm-2"
                type="search" placeholder="Search" aria-label="Search" /></form>
        <ul class="navbar-nav align-items-center ml-auto">
            <li class="nav-item dropdown no-caret mr-3">
                <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="d-inline d-md-none font-weight-500">Docs</div>
                    <div class="d-none d-md-inline font-weight-500">Documentation</div>
                    <i class="fas fa-chevron-right dropdown-arrow"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right py-0 o-hidden mr-n15 mr-lg-0 animated--fade-in-up"
                    aria-labelledby="navbarDropdownDocs">
                    <a class="dropdown-item py-3" href="//docs.startbootstrap.com/sb-admin-pro.html" target="_blank">
                        <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="book"></i></div>
                        <div>
                            <div class="small text-gray-500">Documentation</div>
                            Usage instructions and reference
                        </div>
                    </a>
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item py-3" href="//docs.startbootstrap.com/sb-admin-pro/components.html"
                        target="_blank">
                        <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="code"></i></div>
                        <div>
                            <div class="small text-gray-500">Components</div>
                            Code snippets and reference
                        </div>
                    </a>
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item py-3" href="//docs.startbootstrap.com/sb-admin-pro/changelog.html"
                        target="_blank">
                        <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="file-text"></i></div>
                        <div>
                            <div class="small text-gray-500">Changelog</div>
                            Updates and changes
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts"
                    href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i data-feather="bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownAlerts">
                    <h6 class="dropdown-header dropdown-notifications-header"><i class="mr-2"
                            data-feather="bell"></i>Alerts Center</h6>
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 29, 2019</div>
                            <div class="dropdown-notifications-item-content-text">This is an alert message. It&apos;s
                                nothing serious, but it requires your attention.</div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-info"><i data-feather="bar-chart"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 22, 2019</div>
                            <div class="dropdown-notifications-item-content-text">A new monthly report is ready. Click
                                here to view!</div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-danger"><i
                                class="fas fa-exclamation-triangle"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 8, 2019</div>
                            <div class="dropdown-notifications-item-content-text">Critical system failure, systems
                                shutting down.</div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">December 2, 2019</div>
                            <div class="dropdown-notifications-item-content-text">New user request. Woody has requested
                                access to the organization.</div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
                </div>
            </li>
            <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages"
                    href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><i data-feather="mail"></i></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownMessages">
                    <h6 class="dropdown-header dropdown-notifications-header"><i class="mr-2"
                            data-feather="mail"></i>Message Center</h6>
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img"
                            src="https://source.unsplash.com/vTL_qy03D1I/60x60" />
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Emily Fowler &#xB7; 58m</div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img"
                            src="https://source.unsplash.com/4ytMf8MgJlY/60x60" />
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Diane Chambers &#xB7; 2d</div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
                </div>
            </li>
            <li class="nav-item dropdown no-caret mr-3 dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                    href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><img class="img-fluid"
                        src="https://source.unsplash.com/QAB-WJcbgJk/60x60" /></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" />
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">Valerie Luna</div>
                            <div class="dropdown-user-details-email">vluna@aol.com</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">
                        <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                        Account
                    </a>
                    <a class="dropdown-item" href="#!">
                        <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <div class="sidenav-menu-heading">Core</div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                            data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                            <div class="nav-link-icon"><i data-feather="activity"></i></div>
                            Dashboards
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                <a class="nav-link" href="index.html">Default</a><a class="nav-link"
                                    href="dashboard-2.html">Multipurpose<span
                                        class="badge badge-primary ml-2">New!</span></a><a class="nav-link"
                                    href="dashboard-3.html">Affiliate<span
                                        class="badge badge-primary ml-2">New!</span></a>
                            </nav>
                        </div>
                        <div class="sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                            data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="nav-link-icon"><i data-feather="layout"></i></div>
                            Layout
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                                <a class="nav-link" href="layout-static.html">Static Navigation</a><a class="nav-link"
                                    href="layout-dark.html">Dark Sidenav</a><a class="nav-link"
                                    href="layout-rtl.html">RTL Layout</a>
                                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                    data-target="#collapseLayoutsPageHeaders" aria-expanded="false"
                                    aria-controls="collapseLayoutsPageHeaders">
                                    Page Headers
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayoutsPageHeaders"
                                    data-parent="#accordionSidenavLayout">
                                    <nav class="sidenav-menu-nested nav"><a class="nav-link"
                                            href="header-simplified.html">Simplified</a><a class="nav-link"
                                            href="header-overlap.html">Content Overlap</a><a class="nav-link"
                                            href="header-breadcrumbs.html">Breadcrumbs</a><a class="nav-link"
                                            href="header-light.html">Light</a></nav>
                                </div>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                            data-target="#collapseComponents" aria-expanded="false" aria-controls="collapseComponents">
                            <div class="nav-link-icon"><i data-feather="package"></i></div>
                            Components
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseComponents" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="alerts.html">Alerts</a><a class="nav-link"
                                    href="avatars.html">Avatars<span class="badge badge-primary ml-2">New!</span></a><a
                                    class="nav-link" href="badges.html">Badges</a><a class="nav-link"
                                    href="buttons.html">Buttons</a><a class="nav-link" href="cards.html">Cards</a><a
                                    class="nav-link" href="dropdowns.html">Dropdowns</a><a class="nav-link"
                                    href="forms.html">Forms</a><a class="nav-link" href="modals.html">Modals</a><a
                                    class="nav-link" href="navigation.html">Navigation</a><a class="nav-link"
                                    href="progress.html">Progress</a><a class="nav-link" href="toasts.html">Toasts</a><a
                                    class="nav-link" href="tooltips.html">Tooltips</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                            data-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                            <div class="nav-link-icon"><i data-feather="tool"></i></div>
                            Utilities
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseUtilities" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="animations.html">Animations</a><a class="nav-link"
                                    href="background.html">Background<span
                                        class="badge badge-primary ml-2">New!</span></a><a class="nav-link"
                                    href="borders.html">Borders</a><a class="nav-link" href="lift.html">Lift<span
                                        class="badge badge-primary ml-2">New!</span></a><a class="nav-link"
                                    href="shadows.html">Shadows</a><a class="nav-link"
                                    href="typography.html">Typography</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                            data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="nav-link-icon"><i data-feather="book-open"></i></div>
                            Pages
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                                    data-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" data-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesAuth">
                                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                                            data-target="#pagesCollapseAuthBasic" aria-expanded="false"
                                            aria-controls="pagesCollapseAuthBasic">
                                            Basic
                                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapseAuthBasic"
                                            data-parent="#accordionSidenavPagesAuth">
                                            <nav class="sidenav-menu-nested nav"><a class="nav-link"
                                                    href="login-basic.html">Login</a><a class="nav-link"
                                                    href="register-basic.html">Register</a><a class="nav-link"
                                                    href="password-basic.html">Forgot Password</a></nav>
                                        </div>
                                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                                            data-target="#pagesCollapseAuthSocial" aria-expanded="false"
                                            aria-controls="pagesCollapseAuthSocial">
                                            Social
                                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapseAuthSocial"
                                            data-parent="#accordionSidenavPagesAuth">
                                            <nav class="sidenav-menu-nested nav"><a class="nav-link"
                                                    href="login-social.html">Login</a><a class="nav-link"
                                                    href="register-social.html">Register</a><a class="nav-link"
                                                    href="password-social.html">Forgot Password</a></nav>
                                        </div>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                                    data-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" data-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav"><a class="nav-link" href="401.html">401
                                            Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link"
                                            href="404-glitch.html">404 Page (Glitch Effect)</a><a class="nav-link"
                                            href="500.html">500 Page</a></nav>
                                </div>
                                <a class="nav-link" href="blank.html">Blank</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                            data-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                            <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                            Flows
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseFlows" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav"><a class="nav-link"
                                    href="multi-tenant-select.html">Multi-Tenant Registration</a></nav>
                        </div>
                        <div class="sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="nav-link-icon"><i data-feather="filter"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        <div class="sidenav-footer-subtitle">Logged in as:</div>
                        <div class="sidenav-footer-title">Valerie Luna</div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                    <div class="container-fluid">
                        <div class="page-header-content">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="layout"></i></div>
                                <span>Static Navigation</span>
                            </h1>
                            <div class="page-header-subtitle">Remove the fixed layout class from the body element for a
                                scrollable, static layout option</div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">Static Navigation Example</div>
                        <div class="card-body">
                            <p class="mb-0">This page is an example of using static navigation. By removing the
                                <code>.nav-fixed</code> class from the <code>body</code> tag, the top navigation and
                                side navigation will remain static in their positioning.</p>
                        </div>
                    </div>
                    <div class="text-center text-muted font-italic small">
                        Scroll down to see example...
                        <div class="mt-2"><i class="far fa-arrow-alt-circle-down fa-3x text-gray-400"></i></div>
                    </div>
                    <div style="height: 100vh;"></div>
                </div>
            </main>
            <footer class="footer mt-auto footer-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &#xA9; {{config('app.name')}} {{now()->format('Y')}}</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Privacy Policy</a>
                            &#xB7;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    </script>
    <script src="{{asset('th/sbap/js/scripts.js')}}"></script>
    {{-- <script src="js/sb-customizer.js"></script> --}}
    {{-- <sb-customizer project="sb-admin-pro"></sb-customizer> --}}
</body>

</html>
