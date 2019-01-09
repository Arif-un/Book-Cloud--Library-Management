<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description"
          content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords"
          content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Book-Cloud</title>

    <!-- Favicons-->
    <link rel="icon" href="resource/images/favicon/favicon-32x32.png" sizes="32*32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="resource/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="resource/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="resource/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS for full screen (Layout-2)-->
    <!--<link href="resource/css/layouts/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">-->
    <!-- Custome CSS-->
    <link href="resource/css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="resource/mdi/css/materialdesignicons.css" type="text/css" rel="stylesheet">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="resource/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="resource/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="resource/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet"
          media="screen,projection">


</head>

<body>


<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="navbar-color">
            <div class="nav-wrapper">
                <ul class="left">
                    <li><h1 class="logo-wrapper"><a href="index.php" class="brand-logo darken-1"><img
                                        src="resource/images/book-cloud.png" alt="materialize logo"></a> <span
                                    class="logo-text">Materialize</span></h1></li>
                </ul>
                <div class="header-search-wrapper hide-on-med-and-down" style="width: 45%">
                    <i class="mdi-action-search"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Books"
                           style="width: 80%"/>
                </div>
                <ul class="right hide-on-med-and-down">
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i
                                    class="mdi-action-settings-overscan"></i></a>
                    </li>
                    <!--<li><a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"
                           data-activates="translation-dropdown"><img src="resource/images/flag-icons/United-States.png"
                                                                      alt="USA"/></a>
                    </li>-->

                    <!--<li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button"
                           data-activates="notifications-dropdown"><i class="mdi-social-notifications">
                                <small class="notification-badge">5</small>
                            </i>

                        </a>
                    </li>-->

                    <li><a href="#modal_login" class="waves-effect waves-block waves-light chat-collapse modal-trigger"
                           style="width: 140px"><i
                                    class="mdi mdi-login left"></i><b style="font-size: large">SIGNIN</b></a>
                    </li>
                    <li><a href="#modal_reg" class="waves-effect waves-block waves-light modal-trigger" style="width: 140px"><i
                                    class="mdi mdi-account-plus left"></i><b style="font-size: large">SIGNUP</b></a>
                    </li>

                </ul>
                <!-- translation-button -->
                <!--<ul id="translation-dropdown" class="dropdown-content">
                    <li>
                        <a href="#!"><img src="resource/images/flag-icons/United-States.png" alt="English"/> <span
                                    class="language-select">English</span></a>
                    </li>
                    <li>
                        <a href="#!"><img src="resource/images/flag-icons/France.png" alt="French"/> <span
                                    class="language-select">French</span></a>
                    </li>
                    <li>
                        <a href="#!"><img src="resource/images/flag-icons/China.png" alt="Chinese"/> <span
                                    class="language-select">Chinese</span></a>
                    </li>
                    <li>
                        <a href="#!"><img src="resource/images/flag-icons/Germany.png" alt="German"/> <span
                                    class="language-select">German</span></a>
                    </li>

                </ul>-->
                <!-- notifications-dropdown -->
                <!--<ul id="notifications-dropdown" class="dropdown-content">
                    <li>
                        <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                    </li>
                </ul>-->
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav leftside-navigation">
                <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="resource/images/avatar.jpg" alt=""
                                 class="circle responsive-img valign profile-image">
                        </div>
                        <div class="col col s8 m8 l8">
                            <ul id="profile-dropdown" class="dropdown-content">
                                <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                </li>
                                <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                </li>
                                <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                </li>
                                <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                </li>
                            </ul>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#"
                               data-activates="profile-dropdown">John Doe<i
                                        class="mdi-navigation-arrow-drop-down right"></i></a>
                            <p class="user-roal">Administrator</p>
                        </div>
                    </div>
                </li>
                <li class="bold"><a href="index.php" class="waves-effect waves-cyan"><i
                                class="mdi-action-dashboard"></i> Dashboard</a>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan active"><i
                                        class="mdi-action-view-carousel"></i> Layouts</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="active"><a href="index.php">Full Screen</a>
                                    </li>
                                    <li><a href="layout-horizontal-menu.html">Horizontal Menu</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="bold"><a href="app-email.html" class="waves-effect waves-cyan"><i
                                class="mdi-communication-email"></i> Mailbox <span class="new badge">4</span></a>
                </li>
                <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i
                                class="mdi-editor-insert-invitation"></i> Calender</a>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="mdi-action-invert-colors"></i> CSS</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="css-typography.html">Typography</a>
                                    </li>
                                    <li><a href="css-icons.html">Icons</a>
                                    </li>
                                    <li><a href="css-animations.html">Animations</a>
                                    </li>
                                    <li><a href="css-shadow.html">Shadow</a>
                                    </li>
                                    <li><a href="css-media.html">Media</a>
                                    </li>
                                    <li><a href="css-sass.html">Sass</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i
                                        class="mdi-image-palette"></i> UI Elements</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="ui-alerts.html">Alerts</a>
                                    </li>
                                    <li><a href="ui-buttons.html">Buttons</a>
                                    </li>
                                    <li><a href="ui-badges.html">Badges</a>
                                    </li>
                                    <li><a href="ui-breadcrumbs.html">Breadcrumbs</a>
                                    </li>
                                    <li><a href="ui-collections.html">Collections</a>
                                    </li>
                                    <li><a href="ui-collapsibles.html">Collapsibles</a>
                                    </li>
                                    <li><a href="ui-tabs.html">Tabs</a>
                                    </li>
                                    <li><a href="ui-navbar.html">Navbar</a>
                                    </li>
                                    <li><a href="ui-pagination.html">Pagination</a>
                                    </li>
                                    <li><a href="ui-preloader.html">Preloader</a>
                                    </li>
                                    <li><a href="ui-toasts.html">Toasts</a>
                                    </li>
                                    <li><a href="ui-tooltip.html">Tooltip</a>
                                    </li>
                                    <li><a href="ui-waves.html">Waves</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="mdi-av-queue"></i> Advanced UI <span class="new badge"></span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="advanced-ui-chips.html">Chips</a>
                                    </li>
                                    <li><a href="advanced-ui-cards.html">Cards</a>
                                    </li>
                                    <li><a href="advanced-ui-modals.html">Modals</a>
                                    </li>
                                    <li><a href="advanced-ui-media.html">Media</a>
                                    </li>
                                    <li><a href="advanced-ui-range-slider.html">Range Slider</a>
                                    </li>
                                    <li><a href="advanced-ui-sweetalert.html">SweetAlert</a>
                                    </li>
                                    <li><a href="advanced-ui-nestable.html">Shortable & Nestable</a>
                                    </li>
                                    <li><a href="advanced-ui-translation.html">Language Translation</a>
                                    </li>
                                    <li><a href="advanced-ui-highlight.html">Highlight</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a href="app-widget.html" class="waves-effect waves-cyan"><i
                                        class="mdi-device-now-widgets"></i> Widgets</a>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i
                                        class="mdi-editor-border-all"></i> Tables</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="table-basic.html">Basic Tables</a>
                                    </li>
                                    <li><a href="table-data.html">Data Tables</a>
                                    </li>
                                    <li><a href="table-jsgrid.html">jsGrid</a>
                                    </li>
                                    <li><a href="table-editable.html">Editable Table</a>
                                    </li>
                                    <li><a href="table-floatThead.html">floatThead</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i
                                        class="mdi-editor-insert-comment"></i> Forms <span class="new badge"></span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="form-elements.html">Form Elements</a>
                                    </li>
                                    <li><a href="form-layouts.html">Form Layouts</a>
                                    </li>
                                    <li><a href="form-validation.html">Form Validations</a>
                                    </li>
                                    <li><a href="form-masks.html">Form Masks</a>
                                    </li>
                                    <li><a href="form-file-uploads.html">File Uploads</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i
                                        class="mdi-social-pages"></i> Pages</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="page-contact.html">Contact Page</a>
                                    </li>
                                    <li><a href="page-todo.html">ToDos</a>
                                    </li>
                                    <li><a href="page-blog-1.html">Blog Type 1</a>
                                    </li>
                                    <li><a href="page-blog-2.html">Blog Type 2</a>
                                    </li>
                                    <li><a href="page-404.html">404</a>
                                    </li>
                                    <li><a href="page-500.html">500</a>
                                    </li>
                                    <li><a href="page-blank.html">Blank</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i
                                        class="mdi-action-shopping-cart"></i> eCommers</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="eCommerce-products-page.html">Products Page</a>
                                    </li>
                                    <li><a href="eCommerce-pricing.html">Pricing Table</a>
                                    </li>
                                    <li><a href="eCommerce-invoice.html">Invoice</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i
                                        class="mdi-image-image"></i> Medias</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="media-gallary-page.html">Gallery Page</a>
                                    </li>
                                    <li><a href="media-hover-effects.html">Image Hover Effects</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i
                                        class="mdi-action-account-circle"></i> User</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="user-profile-page.html">User Profile</a>
                                    </li>
                                    <li><a href="user-login.html">Login</a>
                                    </li>
                                    <li><a href="user-register.html">Register</a>
                                    </li>
                                    <li><a href="user-forgot-password.html">Forgot Password</a>
                                    </li>
                                    <li><a href="user-lock-screen.html">Lock Screen</a>
                                    </li>
                                    <li><a href="user-session-timeout.html">Session Timeout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                                        class="mdi-editor-insert-chart"></i> Charts</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="charts-chartjs.html">Chart JS</a>
                                    </li>
                                    <li><a href="charts-chartist.html">Chartist</a>
                                    </li>
                                    <li><a href="charts-morris.html">Morris Charts</a>
                                    </li>
                                    <li><a href="charts-xcharts.html">xCharts</a>
                                    </li>
                                    <li><a href="charts-flotcharts.html">Flot Charts</a>
                                    </li>
                                    <li><a href="charts-sparklines.html">Sparkline Charts</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="li-hover">
                    <div class="divider"></div>
                </li>
                <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
                <li><a href="angular-ui.html"><i class="mdi-action-verified-user"></i> Angular UI <span
                                class="new badge"></span></a>
                </li>
                <li><a href="css-grid.html"><i class="mdi-image-grid-on"></i> Grid</a>
                </li>
                <li><a href="css-color.html"><i class="mdi-editor-format-color-fill"></i> Color</a>
                </li>
                <li><a href="css-helpers.html"><i class="mdi-communication-live-help"></i> Helpers</a>
                </li>
                <li><a href="changelogs.html"><i class="mdi-action-swap-vert-circle"></i> Changelogs</a>
                </li>
                <li class="li-hover">
                    <div class="divider"></div>
                </li>
                <li class="li-hover"><p class="ultra-small margin more-text">Daily Sales</p></li>
                <li class="li-hover">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="sample-chart-wrapper">
                                <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <a href="#" data-activates="slide-out"
               class="sidebar-collapse btn-floating btn-medium waves-effect waves-light cyan"><i
                        class="mdi-navigation-menu"></i></a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->
        <!--login modal-->
        <div id="modal_login" class="card modal" style="width: 700px;min-height: 530px;">
            <div class="row " style="margin-bottom: 0px;height: 100%">
                <div class="col l5 blue" style="height: 530px;">
                    <img src="resource/images/book-cloud.png" style=" height:55px; width: auto;margin-top: 210px;margin-left: 10px ">
                </div>
                <div class="col l7">
                    <form action="controller/login.php" method="post">
                        <div class="row" style="margin-bottom: 0px">
                            <h4 style="padding: 30px" class="blue-grey-text"><b> LOGIN</b></h4>
                            <button type="button" class="btn btn-floating btn-flat modal-action modal-close"
                                    style="margin-top:-150px;"><i class="mdi mdi-close blue-grey-text"></i></button>

                            <div class="input-field col l10">
                                <i class="mdi-social-person-outline prefix"></i>
                                <input name="mail" type="text">
                                <label for="icon_prefix">Email</label>
                            </div>
                            <div class="input-field col l10">
                                <i class="mdi mdi-textbox-password prefix"></i>
                                <input name="pass" type="password">
                                <label for="icon_prefix">Password</label>
                            </div>
                            <div class="input-field col s12 l10 m11">
                                <i class="mdi mdi-google-circles-group prefix"></i>
                                <div style="margin-left: 43px">
                                    <select name="role">
                                        <option value="" disabled selected>Select Character</option>
                                        <option value="student">Student</option>
                                        <option value="teacher">Teacher</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <div>
                                    <div class="switch input-field">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever"></span>
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col l12 center" style="margin-top:60px;">
                                <button type="submit" class="btn btn-flat waves-effect blue center "
                                        style="color: white"><i
                                            class="mdi mdi-login-variant"></i> Login
                                </button>
                            </div>
                        </div>
                    </form>
                    <hr class="col l12 center" style="width: 80%;margin-left: 50px">

                    <div class="col l12 center" style="margin-top:10px;">
                        <button class="btn btn-floating waves-effect blue center" style="color: white"><i
                                    class="mdi mdi-facebook"></i>
                        </button>
                        <button class="btn btn-floating waves-effect red center" style="color: white"><i
                                    class="mdi mdi-google"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!--reg modal-->

            <div id="modal_reg" class="card modal" style="width:500px;">
                <div class="row">
                    <div class="col l12 center blue">
                        <img src="resource/images/book-cloud.png"
                             style=" height:60px; width: auto;margin-top: 30px;margin-bottom: 30px">
                        <button type="button" class="right btn btn-floating btn-flat modal-action modal-close" style="margin-top:10px;"><i class="mdi mdi-close blue-grey-text"></i></button>
                    </div>
                    <div class="row">
                        <form action="controller/all-reg-Ctrl.php" method="post">
                            <div class="col s12">
                                <ul class="tabs" style="height: 10px;background-color: transparent">
                                    <li class="tab waves-effect col s3" id="tab1"><a href="#test1">Step 1 <i
                                                    class="mdi mdi-chevron-right"></i></a>
                                    </li>
                                    <li class="tab waves-effect col s3 disabled" id="tab2"><a href="#test2">Step 2 <i
                                                    class="mdi mdi-chevron-right"></i></a></li>
                                    <li class="tab waves-effect col s3 disabled" id="tab3"><a href="#test3">Step 3 <i
                                                    class="mdi mdi-chevron-right"></i></a></li>
                                </ul>
                            </div>
                            <div id="test1" class="col s12">
                                <div style="margin: 30px">

                                    <div class="input-field col s12">
                                        <i class="mdi mdi-account-card-details prefix"></i>
                                        <input onkeyup="chek_id()" name="id" id="id" type="text" required>
                                        <label for="id" class="center-align">ID</label>
                                    </div>
                                    <button disabled id="tab_btn1" class="tab btn btn-floating waves-effect right pulse"
                                            type="button"><i
                                                class="mdi mdi-chevron-right"></i></button>
                                    <p id="alert" class="red-text" style="margin-left: 60px;display: none"><b>ID not exist
                                            !!! </b><i class="mdi-alert-error"></i></p>
                                    <input name="role" id="role" class="blue-text"
                                           style="margin-left: 60px; border: none;background-color: transparent" value="">

                                </div>
                            </div>
                            <div id="test2" class="col s12">
                                <div style="margin: 30px">
                                    <div class="input-field col s12">
                                        <i class="mdi-social-person-outline prefix"></i>
                                        <input name="name" id="fullname" type="text" required>
                                        <label for="fullname" class="center-align">Full Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="mdi mdi-email prefix"></i>
                                        <input name="email" id="email" type="email" required>
                                        <label for="email" class="center-align">Email</label>
                                    </div>
                                    <button id="tab_btn2" class="btn btn-floating waves-effect right" type="button"><i
                                                class="mdi mdi-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="test3" class="col s12">
                                <div style="margin: 30px">
                                    <div class="input-field col s12">
                                        <i class="mdi mdi-textbox-password prefix"></i>
                                        <input name="pass" id="pass" type="password" required>
                                        <label for="pass" class="center-align">Password</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="mdi mdi-textbox-password prefix"></i>
                                        <input onkeyup="chek_pass()" name="c_pass" id="c_pass" type="password" required>
                                        <label for="c_pass" class="center-align">Confirm Password</label>
                                    </div>
                                    <button id="ok" class="btn btn-floating waves-effect right"
                                            type="submit"><i class="mdi mdi-check"></i>
                                    </button>
                                    <p id="confirm_pass_alrt" class="red-text" style="margin-left: 60px;display: none"><b>Password
                                            Didn't Match !!! </b><i class="mdi-alert-error"></i></p>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>


    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->


<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START FOOTER -->
<footer class="page-footer">

    <div class="footer-copyright">
        <div class="container">
            Copyright © 2015 <a class="grey-text text-lighten-4"
                                href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a>
            All rights reserved.
            <span class="right"> Design and Developed by <a class="grey-text text-lighten-4"
                                                            href="http://geekslabs.com/">GeeksLabs</a></span>
        </div>
    </div>
</footer>
<!-- END FOOTER -->


<!-- ================================================
Scripts
================================================ -->


<!-- jQuery Library -->
<script type="text/javascript" src="resource/js/plugins/jquery-1.11.2.min.js"></script>

<script>
    function chek_pass() {

        var pass = document.getElementById("pass").value;
        var confirm = document.getElementById("c_pass").value;
        console.log(pass);
        console.log(confirm);
        if (pass === confirm) {
            document.getElementById("confirm_pass_alrt").style.display = "none";
            document.getElementById("ok").disabled = false;
        }
        else {
            document.getElementById("confirm_pass_alrt").style.display = "block";
            document.getElementById("ok").disabled = true;

        }
    }


    $(document).ready(function () {
        $('ul.tabs').tabs();
        $("#tab_btn1").click(function () {
            $("#tab2").removeClass("disabled");
            $('ul.tabs').tabs('select_tab', 'test2');
        });
    });

    $(document).ready(function () {
        $('ul.tabs').tabs();
        $("#tab_btn2").click(function () {
            $("#tab3").removeClass("disabled");
            $('ul.tabs').tabs('select_tab', 'test3');
        });
    });


    function chek_id() {
        var id = document.getElementById("id").value;
//console.log(id);
        if (id !== "") {
            var post_key = {"chek_id": id};
            console.log(post_key);
            $.ajax({
                    url: '../controller/all-reg-Ctrl.php',
                    type: 'post',
                    data: post_key,
                    //dataType: 'JSON',
                    success: function (res) {
                        console.log(res);
                        if (res === "std") {
                            document.getElementById("role").style.display = "block";
                            document.getElementById("role").value = "Student";
                            document.getElementById("tab_btn1").disabled = false;
                            document.getElementById("alert").style.display = "none";
                        }
                        else if (res === "tcr") {
                            document.getElementById("role").style.display = "block";
                            document.getElementById("role").value = "Teacher";
                            document.getElementById("tab_btn1").disabled = false;
                            document.getElementById("alert").style.display = "none";
                        }
                        else {
                            document.getElementById("role").style.display = "none";
                            document.getElementById("alert").style.display = "block";
                            document.getElementById("tab_btn1").disabled = true;
                            $("#tab2").addClass("disabled");
                            $("#tab3").addClass("disabled");
                        }

                    }

                }
            )
        }
        else {
            document.getElementById("alert").style.display = "none";
            document.getElementById("role").style.display = "none";
            document.getElementById("tab_btn1").disabled = true;
            $("#tab2").addClass("disabled");
            $("#tab3").addClass("disabled");
        }

    }
</script>
<!--materialize js-->
<script type="text/javascript" src="resource/js/materialize.min.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="resource/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>


<!-- chartist -->
<!--<script type="text/javascript" src="resource/js/plugins/chartist-js/chartist.min.js"></script>

<!-- chartjs -->
<!--<script type="text/javascript" src="resource/js/plugins/chartjs/chart.min.js"></script>
<script type="text/javascript" src="resource/js/plugins/chartjs/chart-script.js"></script>-->

<!-- sparkline -->
<script type="text/javascript" src="resource/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="resource/js/plugins/sparkline/sparkline-script.js"></script>

<!-- google map api -->
<!--script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>-->

<!--jvectormap-->
<script type="text/javascript" src="resource/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="resource/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="resource/js/plugins/jvectormap/vectormap-script.js"></script>


<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="resource/js/plugins.min.js"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="resource/js/custom-script.js"></script>
<!-- Toast Notification -->
<script type="text/javascript">
    // Toast Notification
    $(window).load(function () {
        setTimeout(function () {
            Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
        }, 1500);
        setTimeout(function () {
            Materialize.toast('<span>You can swipe me too!</span>', 3000);
        }, 5000);
        setTimeout(function () {
            Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
        }, 15000);
    });


</script>
</body>

</html>