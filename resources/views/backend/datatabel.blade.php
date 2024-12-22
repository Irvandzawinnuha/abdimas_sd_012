<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.net/admiro/template/datatable-API.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Dec 2024 17:23:43 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>Admiro - Premium Admin Template</title>
    <!-- Favicon icon-->
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap" rel="stylesheet">
    <!-- Flag icon css -->
    <link rel="stylesheet" href="../assets/css/vendors/flag-icon.css">
    <!-- iconly-icon-->
    <link rel="stylesheet" href="../assets/css/iconly-icon.css">
    <link rel="stylesheet" href="../assets/css/bulk-style.css">
    <!-- iconly-icon-->
    <link rel="stylesheet" href="../assets/css/themify.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="../assets/css/fontawesome-min.css">
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/weather-icons/weather-icons.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
    <!-- App css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
    <!-- tap on tap ends-->
    <!-- loader-->
    <div class="loader-wrapper">
      <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <header class="page-header row">
        <div class="logo-wrapper d-flex align-items-center col-auto"><a href="index.html"><img class="light-logo img-fluid" src="../assets/images/logo/logo1.png" alt="logo"><img class="dark-logo img-fluid" src="../assets/images/logo/logo-dark.png" alt="logo"></a><a class="close-btn toggle-sidebar" href="javascript:void(0)">
            <svg class="svg-color">
              <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Category"></use>
            </svg></a></div>
        <div class="page-main-header col">
          <div class="header-left">
            <form class="form-inline search-full col" action="#" method="get">
              <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                  <div class="u-posRelative">
                    <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Admiro .." name="q" title="" autofocus>
                    <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                  </div>
                  <div class="Typeahead-menu"></div>
                </div>
              </div>
            </form>
            <div class="form-group-header d-lg-block d-none">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative d-flex align-items-center"> 
                  <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100" type="text" placeholder="Type to Search..." name="q" title=""><i class="search-bg iconly-Search icli"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="nav-right">
            <ul class="header-right"> 
              <li class="custom-dropdown">
                <div class="translate_wrapper">
                  <div class="current_lang"><a class="lang" href="javascript:void(0)"><i class="flag-icon flag-icon-us"></i>
                      <h6 class="lang-txt f-w-700">ENG</h6></a></div>
                  <ul class="custom-menu profile-menu language-menu py-0 more_lang">
                                  <li class="d-block"><a class="lang" href="#" data-value="English"><i class="flag-icon flag-icon-us"></i>
                                      <div class="lang-txt">English</div></a></li>
                                  <li class="d-block"><a class="lang" href="#" data-value="fr"><i class="flag-icon flag-icon-fr"></i>
                                      <div class="lang-txt">Français</div></a></li>
                                  <li class="d-block"><a class="lang" href="#" data-value="es"><i class="flag-icon flag-icon-es"></i>
                                      <div class="lang-txt">Español</div></a></li>
                  </ul>
                </div>
              </li>
              <li class="search d-lg-none d-flex"> <a href="javascript:void(0)">
                  <svg>
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Search"></use>
                  </svg></a></li>
              <li>  <a class="dark-mode" href="javascript:void(0)">
                  <svg>
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#moondark"></use>
                  </svg></a></li>
              <li class="custom-dropdown"><a href="javascript:void(0)">
                  <svg>
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#cart-icon"></use>
                  </svg></a><span class="badge rounded-pill badge-primary">2</span>
                <div class="custom-menu cart-dropdown py-0 overflow-hidden">
                  <h3 class="title dropdown-title">Cart</h3>
                  <ul class="pb-0">
                    <li>
                      <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60" src="../assets/images/dashboard-2/1.png" alt="">
                        <div class="flex-grow-1"><span class="f-w-600">Watch multicolor</span>
                          <div class="qty-box">
                            <div class="input-group"><span class="input-group-prepend">
                                <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">-</button></span>
                              <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                                <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                            </div>
                          </div>
                          <h6 class="font-primary">$500</h6>
                        </div>
                        <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60" src="../assets/images/dashboard-2/2.png" alt="">
                        <div class="flex-grow-1"><span class="f-w-600">Airpods</span>
                          <div class="qty-box">
                            <div class="input-group"><span class="input-group-prepend">
                                <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">-</button></span>
                              <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                                <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                            </div>
                          </div>
                          <h6 class="font-primary">$500.00</h6>
                        </div>
                        <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li class="total">
                      <h6 class="mb-0">Order Total : <span class="f-w-600">$1000.00</span></h6>
                    </li>
                    <li class="text-center"><a class="d-block mb-3 view-cart f-w-700 text-primary" href="cart.html">Go to your cart</a><a class="btn btn-primary view-checkout text-white" href="checkout.html">Checkout</a></li>
                  </ul>
                </div>
              </li>
              <li class="custom-dropdown"><a href="javascript:void(0)">
                  <svg>
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#notification"></use>
                  </svg></a><span class="badge rounded-pill badge-primary">4</span>
                <div class="custom-menu notification-dropdown py-0 overflow-hidden">
                  <h3 class="title bg-primary-light dropdown-title">Notification <span class="font-primary">View all</span></h3>
                  <ul class="activity-timeline">
                    <li class="d-flex align-items-start">
                      <div class="activity-line"></div>
                      <div class="activity-dot-primary"></div>
                      <div class="flex-grow-1">
                        <h6 class="f-w-600 font-primary">30-04-2024<span>Today</span><span class="circle-dot-primary float-end">
                            <svg class="circle-color">
                              <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#circle"></use>
                            </svg></span></h6>
                        <h5>Alice Goodwin</h5>
                        <p class="mb-0">Fashion should be fun. It shouldn't be labelled intellectual.</p>
                      </div>
                    </li>
                                  <li class="d-flex align-items-start">
                                    <div class="activity-dot-secondary"></div>
                                    <div class="flex-grow-1">
                                      <h6 class="f-w-600 font-secondary">28-06-2024<span>1 hour ago</span><span class="float-end circle-dot-secondary">
                                          <svg class="circle-color">
                                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#circle"></use>
                                          </svg></span></h6>
                                      <h5>Herry Venter</h5>
                                      <p>I am convinced that there can be luxury in simplicity.</p>
                                    </div>
                                  </li>
                                  <li class="d-flex align-items-start">
                                    <div class="activity-dot-primary"></div>
                                    <div class="flex-grow-1">
                                      <h6 class="f-w-600 font-primary">04-08-2024<span>Today</span><span class="float-end circle-dot-primary">
                                          <svg class="circle-color">
                                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#circle"></use>
                                          </svg></span></h6>
                                      <h5>Loain Deo</h5>
                                      <p>I feel that things happen for open new opportunities.</p>
                                    </div>
                                  </li>
                                  <li class="d-flex align-items-start">
                                    <div class="activity-dot-secondary"></div>
                                    <div class="flex-grow-1">
                                      <h6 class="f-w-600 font-secondary">12-11-2024<span>Yesterday</span><span class="float-end circle-dot-secondary">
                                          <svg class="circle-color">
                                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#circle"></use>
                                          </svg></span></h6>
                                      <h5>Fenter Jessy</h5>
                                      <p>Sometimes the simplest things are the most profound.</p>
                                    </div>
                                  </li>
                  </ul>
                </div>
              </li>
              <li><a class="full-screen" href="javascript:void(0)"> 
                  <svg>
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#scanfull"></use>
                  </svg></a></li>
              <li class="custom-dropdown"><a href="javascript:void(0)">
                  <svg>
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#bookmark"></use>
                  </svg></a>
                <div class="custom-menu bookmark-dropdown py-0 overflow-hidden">
                  <h3 class="title bg-primary-light dropdown-title">Bookmark</h3>
                  <ul> 
                    <li> 
                      <form class="mb-0">
                        <div class="input-group">
                          <input class="form-control" type="text" placeholder="Search Bookmark..."><span class="input-group-text">
                            <svg class="svg-color">
                              <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Search"></use>
                            </svg></span>
                        </div>
                      </form>
                    </li>
                                  <li class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2 btn-activity-primary"><a href="index.html">
                                        <svg class="svg-color">
                                          <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#cube"></use>
                                        </svg></a></div>
                                    <div class="d-flex justify-content-between align-items-center w-100"><a href="index.html">Dashboard</a>
                                      <svg class="svg-color icon-star">
                                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#star"></use>
                                      </svg>
                                    </div>
                                  </li>
                                  <li class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2 btn-activity-secondary"><a href="to-do.html">
                                        <svg class="svg-color">
                                          <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#check"></use>
                                        </svg></a></div>
                                    <div class="d-flex justify-content-between align-items-center w-100"><a href="to-do.html">To-do</a>
                                      <svg class="svg-color icon-star">
                                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#star"></use>
                                      </svg>
                                    </div>
                                  </li>
                                  <li class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2 btn-activity-danger"><a href="apex_chart.html">
                                        <svg class="svg-color">
                                          <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#pie"></use>
                                        </svg></a></div>
                                    <div class="d-flex justify-content-between align-items-center w-100"><a href="apex_chart.html">Chart</a>
                                      <svg class="svg-color icon-star">
                                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#star"></use>
                                      </svg>
                                    </div>
                                  </li>
                  </ul>
                </div>
              </li>
              <li class="cloud-design"><a class="cloud-mode">
                  <svg class="climacon climacon_cloudDrizzle" id="cloudDrizzle" version="1.1" viewBox="15 15 70 70">
                    <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzle">
                      <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"></path>
                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"></path>
                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"></path>
                      </g>
                      <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"></path>
                      </g>
                    </g>
                  </svg>
                  <h3>15</h3></a></li>
              <li class="profile-nav custom-dropdown">
                <div class="user-wrap">
                  <div class="user-img"><img src="../assets/images/profile.png" alt="user"></div>
                  <div class="user-content">
                    <h6>Ava Davis</h6>
                    <p class="mb-0">Admin<i class="fa-solid fa-chevron-down"></i></p>
                  </div>
                </div>
                <div class="custom-menu overflow-hidden">
                  <ul class="profile-body">
                    <li class="d-flex"> 
                      <svg class="svg-color">
                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Profile"></use>
                      </svg><a class="ms-2" href="user-profile.html">Account</a>
                    </li>
                    <li class="d-flex"> 
                      <svg class="svg-color">
                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Message"></use>
                      </svg><a class="ms-2" href="letter-box.html">Inbox</a>
                    </li>
                    <li class="d-flex"> 
                      <svg class="svg-color">
                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Document"></use>
                      </svg><a class="ms-2" href="to-do.html">Task</a>
                    </li>
                    <li class="d-flex"> 
                      <svg class="svg-color">
                        <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Login"></use>
                      </svg><a class="ms-2" href="login.html">Log Out</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </header>
      <div class="page-body-wrapper"> 
        <!-- Page sidebar start-->
        <aside class="page-sidebar"> 
          <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
          <div class="main-sidebar" id="main-sidebar">
            <ul class="sidebar-menu" id="simple-bar">
              <li class="pin-title sidebar-main-title">  
                <div> 
                  <h5 class="sidebar-title f-w-700">Pinned</h5>
                </div>
              </li>
              <li class="sidebar-main-title">
                <div>
                  <h5 class="lan-1 f-w-700 sidebar-title">General</h5>
                </div>
              </li>
              <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)"> 
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Home-dashboard"></use>
                  </svg>
                  <h6>Dashboards</h6><span class="badge">3</span><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="index.html">Default</a></li>
                  <li><a href="dashboard-02.html">Ecommerce </a></li>
                  <li> <a href="dashboard-03.html">Education</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Pie"></use>
                  </svg>
                  <h6 class="lan-2">Widgets </h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="general-widget.html">General</a></li>
                  <li><a href="chart-widget.html">Chart</a></li>
                </ul>
              </li>
              <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Document"></use>
                  </svg>
                  <h6 class="lan-3">Page layout</h6><i class="iconly-Arrow-Right-2 icli"> </i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="box-layout.html">Box Layout</a></li>
                  <li><a href="layout-rtl.html">RTL</a></li>
                  <li> <a href="layout-dark.html">Dark</a></li>
                </ul>
              </li>
              <li class="sidebar-main-title">
                <div>
                  <h5 class="f-w-700 sidebar-title pt-3">Application</h5>
                </div>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Info-circle"></use>
                  </svg>
                  <h6 class="f-w-600">Project</h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="project-list.html">Project list </a></li>
                  <li> <a href="projectcreate.html">Project create </a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="file-manager.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Paper"></use>
                  </svg>
                  <h6 class="f-w-600">File Manager </h6></a></li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="kanban-board.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Wallet"></use>
                  </svg>
                  <h6 class="f-w-600">Kanban board</h6></a></li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Bag"></use>
                  </svg>
                  <h6 class="f-w-600">Ecommerce</h6><i class="iconly-Arrow-Right-2 icli"> </i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="add-products.html">Add Products</a></li>
                  <li> <a href="product.html">Product</a></li>
                  <li> <a href="product-page.html">Product Page</a></li>
                  <li> <a href="category.html">Category page</a></li>
                  <li> <a href="list-products.html">Product list</a></li>
                  <li> <a href="payment-details.html">Payment Details</a></li>
                  <li> <a href="order-history.html">Order History</a></li>
                  <li><a class="submenu-title" href="javascript:void(0)">Invoices<i class="iconly-Arrow-Right-2 icli"> </i></a>
                    <ul class="according-submenu">
                      <li> <a href="invoices-1.html">Invoices 1</a></li>
                      <li> <a href="invoices-2.html">Invoices 2</a></li>
                      <li> <a href="invoices-3.html">Invoices 3</a></li>
                      <li> <a href="invoices-4.html">Invoices 4</a></li>
                      <li> <a href="invoices-5.html">Invoices 5</a></li>
                      <li> <a href="invoices-6.html">Invoices 6</a></li>
                    </ul>
                  </li>
                  <li> <a href="cart.html">Cart</a></li>
                  <li> <a href="list-wish.html">Wishlist</a></li>
                  <li> <a href="checkout.html">Checkout</a></li>
                  <li> <a href="pricing.html">Pricing </a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="letter-box.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Message"></use>
                  </svg>
                  <h6 class="f-w-600">Letter Box</h6></a></li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Chat"></use>
                  </svg>
                  <h6 class="f-w-600">Chat</h6><i class="iconly-Arrow-Right-2 icli"> </i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="private-chat.html">Private Chat</a></li>
                  <li> <a href="group-chat.html">Group Chat</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Profile"></use>
                  </svg>
                  <h6 class="f-w-600">Users</h6><i class="iconly-Arrow-Right-2 icli"> </i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="user-profile.html">Users Profile</a></li>
                  <li> <a href="edit-profile.html">Users Edit</a></li>
                  <li> <a href="user-cards.html">Users Cards      </a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="bookmark.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Bookmark"></use>
                  </svg>
                  <h6 class="f-w-600">Bookmarks</h6></a></li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="contacts.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Contacts"></use>
                  </svg>
                  <h6 class="f-w-600">Contacts   </h6></a></li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="task.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Tick-square"></use>
                  </svg>
                  <h6 class="f-w-600">Tasks</h6></a></li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="calendar-basic.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Calendar"></use>
                  </svg>
                  <h6 class="f-w-600">Calendar  </h6></a></li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="social-app.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Camera"></use>
                  </svg>
                  <h6 class="f-w-600">Social App</h6></a></li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="to-do.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Edit"></use>
                  </svg>
                  <h6 class="f-w-600">To-Do </h6></a></li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="search.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Search-sidebar"></use>
                  </svg>
                  <h6 class="f-w-600">Search Result                                                </h6></a></li>
              <li class="sidebar-main-title">
                <div>
                  <h5 class="f-w-700 sidebar-title pt-3">Components</h5>
                </div>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="buttons.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#More-box"></use>
                  </svg>
                  <h6 class="f-w-600">buttons </h6></a></li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Folder"></use>
                  </svg>
                  <h6 class="f-w-600">Ui Kits</h6><i class="iconly-Arrow-Right-2 icli"> </i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="typography.html">Typography</a></li>
                  <li><a href="avatars.html">Avatars</a></li>
                  <li> <a href="alert.html">Alert</a></li>
                  <li> <a href="helper-classes.html">Helper classes</a></li>
                  <li> <a href="grid.html">Grid</a></li>
                  <li> <a href="accordion.html">Accordion</a></li>
                  <li> <a href="tag-pills.html">Tag pills</a></li>
                  <li> <a href="modal.html">Modal </a></li>
                  <li> <a href="popover.html">Popover </a></li>
                  <li> <a href="progress-bar.html">Progress bar</a></li>
                  <li> <a href="tab-bootstrap.html">Tab bootstrap</a></li>
                  <li> <a href="tooltip.html">Tooltip</a></li>
                  <li> <a href="dropdown.html"> Dropdown</a></li>
                  <li> <a href="list.html">List</a></li>
                </ul>
              </li>
              <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Ticket-star"></use>
                  </svg>
                  <h6 class="f-w-600">Bonus Ui</h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu"> 
                  <li><a href="scrollable.html">Scrollable</a></li>
                  <li> <a href="tree.html">Tree view </a></li>
                  <li><a href="toasts.html">Toasts </a></li>
                  <li> <a href="rating.html">Rating</a></li>
                  <li> <a href="dropzone.html">Dropzone</a></li>
                  <li> <a href="tour.html">Tour</a></li>
                  <li> <a href="sweetalert2.html">Sweetalert2 </a></li>
                  <li> <a href="modal-animated.html">Animated Modal</a></li>
                  <li> <a href="slider.html">Slider</a></li>
                  <li> <a href="ribbons.html">Ribbons</a></li>
                  <li><a href="pagination.html">Pagination</a></li>
                  <li> <a href="breadcrumb.html">Breadcrumb</a></li>
                  <li> <a href="range-slider.html">Range slider</a></li>
                  <li> <a href="image-cropper.html">Image cropper</a></li>
                  <li> <a href="basic-card.html">Basic Card</a></li>
                  <li> <a href="creative-card.html">Creative Card</a></li>
                  <li> <a href="dragable-card.html">Dragable Card </a></li>
                  <li> <a href="timeline.html">Timeline</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Category"></use>
                  </svg>
                  <h6 class="f-w-600">Animation </h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu"> 
                  <li>  <a href="AOS.html">aos</a></li>
                  <li>  <a href="WOW.html">wow</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Activity"></use>
                  </svg>
                  <h6 class="f-w-600">Icon</h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu"> 
                  <li><a href="font-awesome.html">Fontawesome icon</a></li>
                  <li><a href="feather_icon.html">Feather icon</a></li>
                  <li> <a href="iconly-icon.html">Iconly icon </a></li>
                  <li> <a href="themify-icon.html">Themify Icon</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Chart"></use>
                  </svg>
                  <h6 class="f-w-600">Charts</h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="echarts.html">Echarts</a></li>
                  <li> <a href="apex_chart.html">Apex Chart</a></li>
                  <li> <a href="chart-google.html">Google Chart</a></li>
                  <li> <a href="chart-sparkline.html">Sparkline chart</a></li>
                  <li> <a href="chart-flot.html">Flot Chart</a></li>
                  <li> <a href="chart-knob.html">Knob Chart</a></li>
                  <li> <a href="chart-morris.html">Morris Chart</a></li>
                  <li> <a href="chartjs.html">Chatjs Chart</a></li>
                  <li> <a href="chartist_chart.html">Chartist Chart</a></li>
                  <li><a href="chart-peity.html">Peity Chart</a></li>
                </ul>
              </li>
              <li class="sidebar-main-title">
                <div>
                  <h5 class="sidebar-title pt-3 f-w-700">Tables & Forms</h5>
                </div>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Filter"></use>
                  </svg>
                  <h6 class="f-w-600">Forms</h6><i class="iconly-Arrow-Right-2 icli"> </i></a>
                <ul class="sidebar-submenu">
                  <li><a class="submenu-title" href="javascript:void(0)">form-control<i class="iconly-Arrow-Right-2 icli"> </i></a>
                    <ul class="according-submenu">
                      <li> <a href="base-input.html">Base input</a></li>
                      <li> <a href="form-validation.html">Form validation</a></li>
                      <li> <a href="radio-checkbox-control.html">Checkbox & Radio </a></li>
                      <li> <a href="input-group.html">Input group</a></li>
                      <li> <a href="input-mask.html">Input mask</a></li>
                      <li> <a href="megaoptions.html">Mega Options                                                    </a></li>
                    </ul>
                  </li>
                  <li><a class="submenu-title" href="javascript:void(0)">Form Widgets<i class="iconly-Arrow-Right-2 icli"> </i></a>
                    <ul class="according-submenu">
                      <li> <a href="datepicker.html">Datepicker</a></li>
                      <li> <a href="touchspin.html">Touchspin</a></li>
                      <li> <a href="select2.html">Select2 </a></li>
                      <li> <a href="switch.html">Switch </a></li>
                      <li> <a href="typehead.html">Typehead </a></li>
                      <li> <a href="clipboard.html">Clipboard</a></li>
                    </ul>
                  </li>
                  <li><a class="submenu-title" href="javascript:void(0)">Form Layout<i class="iconly-Arrow-Right-2 icli"> </i></a>
                    <ul class="according-submenu">
                      <li> <a href="form-wizard.html">Form wizard 1</a></li>
                      <li> <a href="form-wizard-two.html">Form wizard 2</a></li>
                      <li> <a href="form-wizard-three.html">Two factor</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Edit-line"></use>
                  </svg>
                  <h6 class="f-w-600">Tables</h6><i class="iconly-Arrow-Right-2 icli"> </i></a>
                <ul class="sidebar-submenu">
                  <li><a class="submenu-title" href="javascript:void(0)">Bootstrap Tables<i class="iconly-Arrow-Right-2 icli"> </i></a>
                    <ul class="according-submenu">
                      <li> <a href="basic-table.html">Basic Tables</a></li>
                      <li> <a href="table-components.html">Table components</a></li>
                    </ul>
                  </li>
                  <li><a class="submenu-title" href="javascript:void(0)">Data Tables<i class="iconly-Arrow-Right-2 icli"> </i></a>
                    <ul class="according-submenu">
                      <li> <a href="datatable-basic-init.html">Basic Init</a></li>
                      <li> <a href="datatable-advance.html">Advance Init</a></li>
                      <li> <a href="datatable-API.html">API</a></li>
                      <li><a href="datatable-data-source.html">Data Sources</a></li>
                    </ul>
                  </li>
                  <li> <a href="datatable-ext-autofill.html">Ex. Data Tables</a></li>
                  <li> <a href="jsgrid-table.html">Js Grid Table         </a></li>
                </ul>
              </li>
              <li class="sidebar-main-title">
                <div>
                  <h5 class="sidebar-title pt-3 f-w-700">Pages</h5>
                </div>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="landing-page.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Wallet"></use>
                  </svg>
                  <h6 class="f-w-600">Landing page</h6></a></li>
              <li class="sidebar-list"><i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="sample-page.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Paper-plus"></use>
                  </svg>
                  <h6 class="f-w-600">Sample page</h6></a></li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="internationalization.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Play"></use>
                  </svg>
                  <h6 class="f-w-600">Internationalization</h6></a></li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="https://admin.pixelstrap.net/admiro/starter-kit/index.html" target="_blank">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Star-kit"></use>
                  </svg>
                  <h6 class="f-w-600">Starter kit</h6></a></li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Password"></use>
                  </svg>
                  <h6 class="f-w-600">Others</h6><i class="iconly-Arrow-Right-2 icli"> </i></a>
                <ul class="sidebar-submenu">
                  <li><a class="submenu-title" href="javascript:void(0)">Error Page<i class="iconly-Arrow-Right-2 icli"> </i></a>
                    <ul class="according-submenu">
                      <li> <a href="error-page1.html">Error page 1</a></li>
                      <li> <a href="error-page2.html">Error page 2</a></li>
                      <li> <a href="error-page3.html">Error page 3</a></li>
                      <li> <a href="error-page4.html">Error page 4</a></li>
                      <li> <a href="error-page5.html">Error page 5</a></li>
                      <li> <a href="error-page6.html">Error page 6</a></li>
                    </ul>
                  </li>
                  <li><a class="submenu-title" href="javascript:void(0)"> Authentication<i class="iconly-Arrow-Right-2 icli"> </i></a>
                    <ul class="according-submenu">
                      <li> <a href="login.html" target="_blank">Login Simple</a></li>
                      <li> <a href="login_one.html" target="_blank">Login with bg image</a></li>
                      <li> <a href="login_two.html" target="_blank">Login with image two</a></li>
                      <li> <a href="login-bs-validation.html" target="_blank">Login With validation</a></li>
                      <li> <a href="login-bs-tt-validation.html" target="_blank">Login with tooltip</a></li>
                      <li> <a href="login-sa-validation.html" target="_blank">Login with sweetalert</a></li>
                      <li> <a href="sign-up.html" target="_blank">Register Simple</a></li>
                      <li> <a href="sign-up-one.html" target="_blank">Register with Bg Image</a></li>
                      <li> <a href="sign-up-two.html" target="_blank">Register with image two</a></li>
                      <li> <a href="sign-up-wizard.html" target="_blank">Register wizard</a></li>
                      <li> <a href="unlock.html">Unlock User</a></li>
                      <li> <a href="forget-password.html">Forget Password</a></li>
                      <li> <a href="reset-password.html">Reset Password</a></li>
                      <li> <a href="maintenance.html">Maintenance</a></li>
                    </ul>
                  </li>
                  <li><a class="submenu-title" href="javascript:void(0)">Coming Soon<i class="iconly-Arrow-Right-2 icli"> </i></a>
                    <ul class="according-submenu">
                      <li> <a href="comingsoon.html">Coming Simple</a></li>
                      <li> <a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                      <li> <a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                    </ul>
                  </li>
                  <li><a class="submenu-title" href="javascript:void(0)">Email templates<i class="iconly-Arrow-Right-2 icli"> </i></a>
                    <ul class="according-submenu">
                      <li> <a href="basic-template.html">Basic Email</a></li>
                      <li> <a href="email-header.html">Basic With Header</a></li>
                      <li> <a href="template-email.html">Ecomerce Template</a></li>
                      <li> <a href="template-email-2.html">Email Template 2</a></li>
                      <li> <a href="ecommerce-templates.html">Ecommerce Email</a></li>
                      <li> <a href="email-order-success.html">Order Success</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="sidebar-main-title">
                <div>
                  <h5 class="sidebar-title pt-3 f-w-700">Miscellaneous</h5>
                </div>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Gallery"></use>
                  </svg>
                  <h6 class="f-w-600">Gallery  </h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="gallery.html">Gallery Grid</a></li>
                  <li> <a href="gallery-with-description.html">Gallery Grid Desc</a></li>
                  <li> <a href="masonary.html">Masonary Gallery</a></li>
                  <li> <a href="masonary_with_disc.html">Masonary With Desc</a></li>
                  <li> <a href="gallery-hover.html">Hover Effects</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Game"></use>
                  </svg>
                  <h6 class="f-w-600">Blog  </h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="blog.html">Blog Details</a></li>
                  <li> <a href="blog-single.html">Blog Single</a></li>
                  <li><a href="add_post.html">Add Post</a></li>
                </ul>
              </li>
              <li class="sidebar-list"><a class="sidebar-link" href="faq.html"> 
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Danger"></use>
                  </svg>
                  <h6 class="f-w-600">FAQ</h6></a></li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Filter-2"></use>
                  </svg>
                  <h6 class="f-w-600">Job Search  </h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="job-cards-view.html">Card view</a></li>
                  <li> <a href="job-list-view.html">List view</a></li>
                  <li><a href="job-details.html">Job details   </a></li>
                  <li><a href="job-apply.html">Apply</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Work"></use>
                  </svg>
                  <h6 class="f-w-600">Learning</h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="learning_list_visit.html">Learning List</a></li>
                  <li> <a href="learning_detailed.html">Learning Detailed</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Discovery"></use>
                  </svg>
                  <h6 class="f-w-600">Maps</h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="data-map.html">Data Map</a></li>
                  <li> <a href="vector-map.html">Vector Maps</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Shield"></use>
                  </svg>
                  <h6 class="f-w-600">Editors</h6><i class="iconly-Arrow-Right-2 icli"></i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="quilleditor.html">Quill editor</a></li>
                  <li> <a href="ace-code-editor.html">ACE Code Editor</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="knowledgebase.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Setting"></use>
                  </svg>
                  <h6 class="f-w-600">Knowledgebase</h6></a></li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="support-ticket.html">
                  <svg class="stroke-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#Ticket"></use>
                  </svg>
                  <h6 class="f-w-600">Support Ticket</h6></a></li>
            </ul>
          </div>
          <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </aside>
        <!-- Page sidebar end-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12">
                  <h2>API DataTables</h2>
                </div>
                <div class="col-sm-6 col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="iconly-Home icli svg-color"></i></a></li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">API DataTables    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Add rows  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0 card-no-border">
                    <h3 class="mb-3">Add rows </h3><span>New rows can be added to a DataTable using the<code class="api" title="DataTables API method">row.add()</code> API method. Simply call the API function with the data for the new row (be it an array or object). Multiple rows
                                                      can be added using the<code class="api" title="DataTables API method">rows.add()</code> method (note
                                                      the plural). Data can likewise be updated with the <code class="api" title="DataTables API method">row().data()</code> and <code class="api" title="DataTables API method">row().remove()</code> methods.</span><span>Note that in order to see the new row in the table you must call the<code class="api" title="DataTables API method">draw()</code> method, which is easily done through the chaining that the DataTables API employs.</span>
                  </div>
                  <div class="card-body">
                    <button class="btn btn-primary mb-3" id="addRow">Add new row</button>
                    <div class="table-responsive">
                      <table class="display" id="API-1">
                        <thead>
                          <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                            <th>Column 5</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                            <th>Column 4</th>
                            <th>Column 5</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Add rows Ends// Child rows (show extra / detailed information) Starts
              -->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0 card-no-border">
                    <h3 class="mb-3">Child rows (show extra / detailed information) </h3><span>The DataTables API has a number of methods for attaching child rows to a parent row in the DataTable. This can be used to show additional information about a row, useful for cases where you wish to convey more information about a row than there is space for in the host table.</span>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="API-chield-row">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Salary</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Salary</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Child rows (show extra / detailed information) Ends// Row Selection And Deletion (Single Row) Starts
              -->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0 card-no-border">
                    <h3 class="mb-3">Row Selection And Deletion (Single Row)</h3><span>
                      It can be useful to provide the user with the option to select rows in a DataTable. This can be done by using a click event to add / remove a class on the
                      table rows. The <code class="api" title="DataTables API method">rows().data()</code>method can then
                                                            be used to get the data for the selected rows. In this case it is simply counting the number of selected rows, but much more complex interactions can easily be
                                                            developed.</span>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <button class="btn btn-secondary mb-3" id="single-row-delete-btn">Delete Row</button>
                      <table class="display" id="row-select-delete">
                        <thead>
                          <tr>
                            <th>Employee Name</th>
                            <th>Job Designation</th>
                            <th>Company Name</th>
                            <th>Invoice No.</th>
                            <th>Credit/Debit</th>
                            <th>Date</th>
                            <th>Priority</th>
                            <th>Budget</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Tata Co.</td>
                            <td>#AS61</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i></td>
                            <td>2011/04/25</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$320.800,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Edinburgh</td>
                            <td>#FG63</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i></td>
                            <td>2011/07/25</td>
                            <td><span class="badge badge-light-danger">Urgent</span></td>
                            <td>$170.750,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>Mphasis Ltd</td>
                            <td>#GH66</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i></td>
                            <td>2009/01/12</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$86.000,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>#UH22</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i></td>
                            <td>2012/03/29</td>
                            <td><span class="badge badge-light-success">Low</span></td>
                            <td>$433.060,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Google Inc.</td>
                            <td>#TY33</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i></td>
                            <td>2008/11/28</td>
                            <td><span class="badge badge-light-danger">Urgent</span></td>
                            <td>$162.700,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>Microsoft</td>
                            <td>#TS61</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i></td>
                            <td>2012/12/02</td>
                            <td><span class="badge badge-light-success">Low</span></td>
                            <td>$372.000,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>Google Co.</td>
                            <td>#GF59</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i></td>
                            <td>2012/08/06</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$137.500,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>#FT55</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i></td>
                            <td>2010/10/14</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$327.900,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>Google Co.</td>
                            <td>#NB39</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">2.8%</i></td>
                            <td>2009/09/15</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$205.500,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>#BH23</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i></td>
                            <td>2008/12/13</td>
                            <td><span class="badge badge-light-danger">Urgent</span></td>
                            <td>$103.600,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>Tata Co.</td>
                            <td>#HN30</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i></td>
                            <td>2008/12/19</td>
                            <td><span class="badge badge-light-primary">High</span></td>
                            <td>$90.560,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>#YH22</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i></td>
                            <td>2013/03/03</td>
                            <td><span class="badge badge-light-danger">Urgent</span></td>
                            <td>$342.000,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>Google Co.</td>
                            <td>#FV36</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i></td>
                            <td>2008/10/16</td>
                            <td><span class="badge badge-light-success">Low</span></td>
                            <td>$470.600,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>Tata Co.</td>
                            <td>#TF43</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i></td>
                            <td>2012/12/18</td>
                            <td><span class="badge badge-light-success">Low</span></td>
                            <td>$313.500,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>Infosys Ltd.</td>
                            <td>#DF19</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i></td>
                            <td>2010/03/17</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$385.750,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>Infosys Ltd.</td>
                            <td>#HD66</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i></td>
                            <td>2012/11/27</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$198.500,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Paul Byrd</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td>New York</td>
                            <td>#NH64</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">9.8%</i></td>
                            <td>2010/06/09</td>
                            <td><span class="badge badge-light-danger">Urgent</span></td>
                            <td>$725.000,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td>New York</td>
                            <td>#MN59</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i></td>
                            <td>2009/04/10</td>
                            <td><span class="badge badge-light-danger">Urgent</span></td>
                            <td>$237.500,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>Tata Co.</td>
                            <td>#JH41</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">9.8%</i></td>
                            <td>2012/10/13</td>
                            <td><span class="badge badge-light-primary">High</span></td>
                            <td>$132.000,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Dai Rios</td>
                            <td>Personnel Lead</td>
                            <td>Edinburgh</td>
                            <td>#YT35</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i></td>
                            <td>2012/09/26</td>
                            <td><span class="badge badge-light-success">Low</span></td>
                            <td>$217.500,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Jenette Caldwell</td>
                            <td>Development Lead</td>
                            <td>New York</td>
                            <td><span class="badge badge-light-success">Low</span></td>
                            <td>#FG30</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i></td>
                            <td>2011/09/03</td>
                            <td><span class="badge badge-light-danger">Urgent</span></td>
                            <td>$345.000,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Yuri Berry</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td>New York</td>
                            <td>#VB40</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">5.6%</i></td>
                            <td>2009/06/25</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$675.000,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>#CV21</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i></td>
                            <td>2011/12/12</td>
                            <td><span class="badge badge-light-success">Low</span></td>
                            <td>$106.450,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Doris Wilder</td>
                            <td>Sales Assistant</td>
                            <td>Sidney</td>
                            <td>#BH23</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">5.6%</i></td>
                            <td>2010/09/20</td>
                            <td><span class="badge badge-light-primary">High</span></td>
                            <td>$85.600,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>Tata Co.</td>
                            <td>#VC47</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i></td>
                            <td>2009/10/09</td>
                            <td><span class="badge badge-light-success">Low</span></td>
                            <td>$1.200.000,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Gavin Joyce</td>
                            <td>Developer</td>
                            <td>Edinburgh</td>
                            <td>#TH42</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">9.8%</i></td>
                            <td>2010/12/22</td>
                            <td><span class="badge badge-light-danger">Urgent</span></td>
                            <td>$92.575,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Jennifer Chang</td>
                            <td>Regional Director</td>
                            <td>Singapore</td>
                            <td>#BN28</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i></td>
                            <td>2010/11/14</td>
                            <td><span class="badge badge-light-danger">Urgent</span></td>
                            <td>$357.650,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>Google Co.</td>
                            <td>#CV28</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i></td>
                            <td>2011/06/07</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$206.850,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Fiona Green</td>
                            <td>Chief Operating Officer (COO)</td>
                            <td>Infosys Ltd.</td>
                            <td>#GF48</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">9.8%</i></td>
                            <td>2010/03/11</td>
                            <td><span class="badge badge-light-primary">High</span></td>
                            <td>$850.000,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td>Tokyo</td>
                            <td>#BF20</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">5.6%</i></td>
                            <td>2011/08/14</td>
                            <td><span class="badge badge-light-success">Low</span></td>
                            <td>$163.000,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Michelle House</td>
                            <td>Integration Specialist</td>
                            <td>Sidney</td>
                            <td>#DF37</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i></td>
                            <td>2011/06/02</td>
                            <td><span class="badge badge-light-primary">High</span></td>
                            <td>$95.400,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Suki Burks</td>
                            <td>Developer</td>
                            <td>Infosys Ltd.</td>
                            <td>#ER53</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i></td>
                            <td>2009/10/22</td>
                            <td><span class="badge badge-light-danger">Urgent</span></td>
                            <td>$114.500,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Prescott Bartlett</td>
                            <td>Technical Author</td>
                            <td>Tata Co.</td>
                            <td>#DF27</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">5.6%</i></td>
                            <td>2011/05/07</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$145.000,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Gavin Cortez</td>
                            <td>Team Leader</td>
                            <td>Google Co.</td>
                            <td>#SW22</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">5.6%</i></td>
                            <td>2008/10/26</td>
                            <td><span class="badge badge-light-danger">Urgent</span></td>
                            <td>$235.500,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Martena Mccray</td>
                            <td>Post-Sales support</td>
                            <td>Edinburgh</td>
                            <td>#ED46</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i></td>
                            <td>2011/03/09</td>
                            <td><span class="badge badge-light-primary">High</span></td>
                            <td>$324.050,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Unity Butler</td>
                            <td>Marketing Designer</td>
                            <td>Infosys Ltd.</td>
                            <td>#ED47</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">9.8%</i></td>
                            <td>2009/12/09</td>
                            <td><span class="badge badge-light-primary">High</span></td>
                            <td>$85.675,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Howard Hatfield</td>
                            <td>Office Manager</td>
                            <td>Google Co.</td>
                            <td>#WS51</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">1.4%</i></td>
                            <td>2008/12/16</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$164.500,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Hope Fuentes</td>
                            <td>Secretary</td>
                            <td>Infosys Ltd.</td>
                            <td>#RG41</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">5.6%</i></td>
                            <td>2010/02/12</td>
                            <td><span class="badge badge-light-success">Low</span></td>
                            <td>$109.850,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Vivian Harrell</td>
                            <td>Financial Controller</td>
                            <td>Infosys Ltd.</td>
                            <td>#TY62</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i></td>
                            <td>2009/02/14</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$452.500,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Timothy Mooney</td>
                            <td>Office Manager</td>
                            <td>Tata Co.</td>
                            <td>#GH37</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">9.8%</i></td>
                            <td>2008/12/11</td>
                            <td><span class="badge badge-light-success">Low</span></td>
                            <td>$136.200,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Jackson Bradshaw</td>
                            <td>Director</td>
                            <td>New York</td>
                            <td>#YU65</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.8%</i></td>
                            <td>2008/09/26</td>
                            <td><span class="badge badge-light-primary">High</span></td>
                            <td>$645.750,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Olivia Liang</td>
                            <td>Support Engineer</td>
                            <td>Singapore</td>
                            <td>#GH64</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i></td>
                            <td>2011/02/03</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$234.500,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Bruno Nash</td>
                            <td>Software Engineer</td>
                            <td>Tata Co.</td>
                            <td>#UY38</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">1.4%</i></td>
                            <td>2011/05/03</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$163.500,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Sakura Yamamoto</td>
                            <td>Support Engineer</td>
                            <td>Tokyo</td>
                            <td>#RT37</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i></td>
                            <td>2009/08/19</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$139.575,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Thor Walton</td>
                            <td>Developer</td>
                            <td>New York</td>
                            <td>#WE61</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">1.4%</i></td>
                            <td>2013/08/11</td>
                            <td><span class="badge badge-light-success">Low</span></td>
                            <td>$98.540,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Finn Camacho</td>
                            <td>Support Engineer</td>
                            <td>Google Co.</td>
                            <td>#YU47</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i></td>
                            <td>2009/07/07</td>
                            <td><span class="badge badge-light-success">Low</span></td>
                            <td>$87.500,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Serge Baldwin</td>
                            <td>Data Coordinator</td>
                            <td>Singapore</td>
                            <td>#QW64</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">1.4%</i></td>
                            <td>2012/04/09</td>
                            <td><span class="badge badge-light-primary">High</span></td>
                            <td>$138.575,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Zenaida Frank</td>
                            <td>Software Engineer</td>
                            <td>New York</td>
                            <td>#WE63</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">1.4%</i></td>
                            <td>2010/01/04</td>
                            <td><span class="badge badge-light-primary">High</span></td>
                            <td>$125.250,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Zorita Serrano</td>
                            <td>Software Engineer</td>
                            <td>Google Co.</td>
                            <td>#ER56</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">1.4%</i></td>
                            <td>2012/06/01</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$115.000,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Jennifer Acosta</td>
                            <td>Junior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>#RT43</td>
                            <td> <i class="icofont icofont-arrow-up me-1 text-success">2.8%</i></td>
                            <td>2013/02/01</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$75.650,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Cara Stevens</td>
                            <td>Sales Assistant</td>
                            <td>New York</td>
                            <td>#TY46</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i></td>
                            <td>2011/12/06</td>
                            <td><span class="badge badge-light-primary">High</span></td>
                            <td>$145.600,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Hermione Butler</td>
                            <td>Regional Director</td>
                            <td>Tata Co.</td>
                            <td>#QA47</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i></td>
                            <td>2011/03/21</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$356.250,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Lael Greer</td>
                            <td>Systems Administrator</td>
                            <td>Tata Co.</td>
                            <td>#QS21</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i></td>
                            <td>2009/02/27</td>
                            <td><span class="badge badge-light-warning">Medium</span></td>
                            <td>$103.500,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Jonas Alexander</td>
                            <td>Developer</td>
                            <td>Infosys Ltd.</td>
                            <td>#ED30</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i></td>
                            <td>2010/07/14</td>
                            <td><span class="badge badge-light-primary">High</span></td>
                            <td>$86.500,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Shad Decker</td>
                            <td>Regional Director</td>
                            <td>Edinburgh</td>
                            <td>#SD51</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i></td>
                            <td>2008/11/13</td>
                            <td><span class="badge badge-light-success">Low</span></td>
                            <td>$183.000,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>#RF29</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i></td>
                            <td>2011/06/27</td>
                            <td><span class="badge badge-light-success">Low</span></td>
                            <td>$183.000,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>#GD27</td>
                            <td> <i class="icofont icofont-arrow-down me-1 text-danger">2.5%</i></td>
                            <td>2011/01/25</td>
                            <td><span class="badge badge-light-primary">High</span></td>
                            <td>$112.000,00</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Employee Name</th>
                            <th>Job Designation</th>
                            <th>Company Name</th>
                            <th>Invoice No.</th>
                            <th>Credit/Debit</th>
                            <th>Date</th>
                            <th>Priority</th>
                            <th>Budget</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                      </table>
                      <!-- Row Selection And Deletion (Single Row) Ends-->
                    </div>
                  </div>
                </div>
              </div>
              <!-- Multiple table control elements  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0 card-no-border">
                    <h3 class="mb-3">Custom filtering - range search</h3><span>This example shows a search being performed on the age column in the data, based upon two inputs.</span>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive dataTables_wrapper me-0">
                      <table>
                        <tbody class="dataTables_filter">
                          <tr>
                            <td>Minimum age:</td>
                            <td>
                              <input class="form-control" id="min" type="search" name="min">
                            </td>
                          </tr>
                          <tr> 
                            <td>Maximum age:</td>
                            <td>
                              <input class="form-control" id="max" type="search" name="max">
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="table-responsive user-datatable">
                      <table class="display" id="datatable-range">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> <img class="img-fluid table-avtar" src="../assets/images/user/2.png" alt="">Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                          </tr>
                          <tr>
                            <td> <img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                          </tr>
                          <tr>
                            <td> <img class="img-fluid table-avtar" src="../assets/images/user/11.png" alt="">Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                          </tr>
                          <tr>
                            <td> <img class="img-fluid table-avtar" src="../assets/images/user/3.png" alt="">Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td>$137,500</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Rhona Davidson</td>
                            <td>Integration Specialist</td>
                            <td>Tokyo</td>
                            <td>55</td>
                            <td>2010/10/14</td>
                            <td>$327,900</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>39</td>
                            <td>2009/09/15</td>
                            <td>$205,500</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Sonya Frost</td>
                            <td>Software Engineer</td>
                            <td>Edinburgh</td>
                            <td>23</td>
                            <td>2008/12/13</td>
                            <td>$103,600</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Jena Gaines</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>30</td>
                            <td>2008/12/19</td>
                            <td>$90,560</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Quinn Flynn</td>
                            <td>Support Lead</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2013/03/03</td>
                            <td>$342,000</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Charde Marshall</td>
                            <td>Regional Director</td>
                            <td>San Francisco</td>
                            <td>36</td>
                            <td>2008/10/16</td>
                            <td>$470,600</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Haley Kennedy</td>
                            <td>Senior Marketing Designer</td>
                            <td>London</td>
                            <td>43</td>
                            <td>2012/12/18</td>
                            <td>$313,500</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>19</td>
                            <td>2010/03/17</td>
                            <td>$385,750</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Michael Silva</td>
                            <td>Marketing Designer</td>
                            <td>London</td>
                            <td>66</td>
                            <td>2012/11/27</td>
                            <td>$198,500</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Paul Byrd</td>
                            <td>Chief Financial Officer (CFO)</td>
                            <td>New York</td>
                            <td>64</td>
                            <td>2010/06/09</td>
                            <td>$725,000</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Gloria Little</td>
                            <td>Systems Administrator</td>
                            <td>New York</td>
                            <td>59</td>
                            <td>2009/04/10</td>
                            <td>$237,500</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Bradley Greer</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>41</td>
                            <td>2012/10/13</td>
                            <td>$132,000</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Dai Rios</td>
                            <td>Personnel Lead</td>
                            <td>Edinburgh</td>
                            <td>35</td>
                            <td>2012/09/26</td>
                            <td>$217,500</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Jenette Caldwell</td>
                            <td>Development Lead</td>
                            <td>New York</td>
                            <td>30</td>
                            <td>2011/09/03</td>
                            <td>$345,000</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Yuri Berry</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td>New York</td>
                            <td>40</td>
                            <td>2009/06/25</td>
                            <td>$675,000</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td>2011/12/12</td>
                            <td>$106,450</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Doris Wilder</td>
                            <td>Sales Assistant</td>
                            <td>Sidney</td>
                            <td>23</td>
                            <td>2010/09/20</td>
                            <td>$85,600</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Angelica Ramos</td>
                            <td>Chief Executive Officer (CEO)</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2009/10/09</td>
                            <td>$1,200,000</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Gavin Joyce</td>
                            <td>Developer</td>
                            <td>Edinburgh</td>
                            <td>42</td>
                            <td>2010/12/22</td>
                            <td>$92,575</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Jennifer Chang</td>
                            <td>Regional Director</td>
                            <td>Singapore</td>
                            <td>28</td>
                            <td>2010/11/14</td>
                            <td>$357,650</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Brenden Wagner</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>28</td>
                            <td>2011/06/07</td>
                            <td>$206,850</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Fiona Green</td>
                            <td>Chief Operating Officer (COO)</td>
                            <td>San Francisco</td>
                            <td>48</td>
                            <td>2010/03/11</td>
                            <td>$850,000</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Shou Itou</td>
                            <td>Regional Marketing</td>
                            <td>Tokyo</td>
                            <td>20</td>
                            <td>2011/08/14</td>
                            <td>$163,000</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Michelle House</td>
                            <td>Integration Specialist</td>
                            <td>Sidney</td>
                            <td>37</td>
                            <td>2011/06/02</td>
                            <td>$95,400</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Suki Burks</td>
                            <td>Developer</td>
                            <td>London</td>
                            <td>53</td>
                            <td>2009/10/22</td>
                            <td>$114,500</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Prescott Bartlett</td>
                            <td>Technical Author</td>
                            <td>London</td>
                            <td>27</td>
                            <td>2011/05/07</td>
                            <td>$145,000</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Gavin Cortez</td>
                            <td>Team Leader</td>
                            <td>San Francisco</td>
                            <td>22</td>
                            <td>2008/10/26</td>
                            <td>$235,500</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Martena Mccray</td>
                            <td>Post-Sales support</td>
                            <td>Edinburgh</td>
                            <td>46</td>
                            <td>2011/03/09</td>
                            <td>$324,050</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Unity Butler</td>
                            <td>Marketing Designer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>2009/12/09</td>
                            <td>$85,675</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Howard Hatfield</td>
                            <td>Office Manager</td>
                            <td>San Francisco</td>
                            <td>51</td>
                            <td>2008/12/16</td>
                            <td>$164,500</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Hope Fuentes</td>
                            <td>Secretary</td>
                            <td>San Francisco</td>
                            <td>41</td>
                            <td>2010/02/12</td>
                            <td>$109,850</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Vivian Harrell</td>
                            <td>Financial Controller</td>
                            <td>San Francisco</td>
                            <td>62</td>
                            <td>2009/02/14</td>
                            <td>$452,500</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Timothy Mooney</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>37</td>
                            <td>2008/12/11</td>
                            <td>$136,200</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Jackson Bradshaw</td>
                            <td>Director</td>
                            <td>New York</td>
                            <td>65</td>
                            <td>2008/09/26</td>
                            <td>$645,750</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Olivia Liang</td>
                            <td>Support Engineer</td>
                            <td>Singapore</td>
                            <td>64</td>
                            <td>2011/02/03</td>
                            <td>$234,500</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Bruno Nash</td>
                            <td>Software Engineer</td>
                            <td>London</td>
                            <td>38</td>
                            <td>2011/05/03</td>
                            <td>$163,500</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Sakura Yamamoto</td>
                            <td>Support Engineer</td>
                            <td>Tokyo</td>
                            <td>37</td>
                            <td>2009/08/19</td>
                            <td>$139,575</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Thor Walton</td>
                            <td>Developer</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2013/08/11</td>
                            <td>$98,540</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Finn Camacho</td>
                            <td>Support Engineer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>2009/07/07</td>
                            <td>$87,500</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Serge Baldwin</td>
                            <td>Data Coordinator</td>
                            <td>Singapore</td>
                            <td>64</td>
                            <td>2012/04/09</td>
                            <td>$138,575</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Zenaida Frank</td>
                            <td>Software Engineer</td>
                            <td>New York</td>
                            <td>63</td>
                            <td>2010/01/04</td>
                            <td>$125,250</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Zorita Serrano</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>56</td>
                            <td>2012/06/01</td>
                            <td>$115,000</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Jennifer Acosta</td>
                            <td>Junior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>43</td>
                            <td>2013/02/01</td>
                            <td>$75,650</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Cara Stevens</td>
                            <td>Sales Assistant</td>
                            <td>New York</td>
                            <td>46</td>
                            <td>2011/12/06</td>
                            <td>$145,600</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Hermione Butler</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>47</td>
                            <td>2011/03/21</td>
                            <td>$356,250</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Lael Greer</td>
                            <td>Systems Administrator</td>
                            <td>London</td>
                            <td>21</td>
                            <td>2009/02/27</td>
                            <td>$103,500</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Jonas Alexander</td>
                            <td>Developer</td>
                            <td>San Francisco</td>
                            <td>30</td>
                            <td>2010/07/14</td>
                            <td>$86,500</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Shad Decker</td>
                            <td>Regional Director</td>
                            <td>Edinburgh</td>
                            <td>51</td>
                            <td>2008/11/13</td>
                            <td>$183,000</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Michael Bruce</td>
                            <td>Javascript Developer</td>
                            <td>Singapore</td>
                            <td>29</td>
                            <td>2011/06/27</td>
                            <td>$183,000</td>
                          </tr>
                          <tr>
                            <td><img class="img-fluid table-avtar" src="../assets/images/user/7.jpg" alt="">Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td>$112,000</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Multiple table control elements Ends-->
            </div>
          </div>
          <!-- Container-fluid Ends                                 -->
        </div>
        <footer class="footer"> 
          <div class="container-fluid">
            <div class="row"> 
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2024 © Admiro theme by pixelstrap.</p>
              </div>
              <div class="col-md-6">
                <p class="float-end mb-0">Hand crafted &amp; made with
                  <svg class="svg-color footer-icon">
                    <use href="https://admin.pixelstrap.net/admiro/assets/svg/iconly-sprite.svg#heart"></use>
                  </svg>
                </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- jquery-->
    <script src="../assets/js/vendors/jquery/jquery.min.js"></script>
    <!-- bootstrap js-->
    <script src="../assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js" defer=""></script>
    <script src="../assets/js/vendors/bootstrap/dist/js/popper.min.js" defer=""></script>
    <!--fontawesome-->
    <script src="../assets/js/vendors/font-awesome/fontawesome-min.js"></script>
    <!-- sidebar -->
    <script src="../assets/js/sidebar.js"></script>
    <!-- scrollbar-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- slick-->
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <!-- datatable-->
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <!-- page_datatable-->
    <script src="../assets/js/js-datatables/datatables/datatable.custom.js"></script>
    <!-- page_datatable-->
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- theme_customizer-->
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- custom script -->
    <script src="../assets/js/script.js"></script>
  </body>

<!-- Mirrored from admin.pixelstrap.net/admiro/template/datatable-API.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Dec 2024 17:23:44 GMT -->
</html>