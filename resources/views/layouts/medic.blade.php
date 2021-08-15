
<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon May 31 2021 22:17:14 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6083b2721e503fa111a29d9c" data-wf-site="606be0fc4091bed60a828b5b">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta content="Dashboard" property="og:title">
  <meta content="Dashboard" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <link href="{{ asset('frontend_assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('frontend_assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('frontend_assets/css/adwareton.webflow.css') }}" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Droid Serif:400,400italic,700,700italic","Inconsolata:400,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="{{ asset('frontend_assets/images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset('frontend_assets/images/webclip.png') }}" rel="apple-touch-icon">
  @yield('css')
</head>
<body class="body">
  <div class="dashboard-wrapper">
    <div data-collapse="medium" data-animation="over-left" data-duration="400" role="banner" class="sidebar-nav w-nav">
      <div class="dashboard-sidebar">
        <div class="logo-wrapper">
          <a href="index.html" class="logo-link-dashboard w-inline-block"><img src="{{ asset('frontend_assets/images/medic-logo.png') }}" loading="lazy" sizes="(max-width: 991px) 100vw, 40px" srcset="images/medic-logo-p-500.png 500w, images/medic-logo.png 858w" alt="" class="dashboard-logo"></a><img src="images/Collapse-arrow.svg" loading="lazy" data-w-id="2dccbe0e-38a3-bcf8-3ca2-1f0ff60f9943" alt="" class="arrow-colaps">
        </div>
        <div class="sidebar-menu">
          <div class="sidebar-menu-section">
              
            <a href="{{ route('medic.dashboard') }}" aria-current="page" class="sidebar-link w-inline-block w--current"><img src="{{ asset('frontend_assets/images/Home.svg') }}" loading="lazy" alt="" class="sidebar-icon">
              <div class="sidebar-link-text">Dashboard</div>
            </a>
            <a href="{{ route('medic.items') }}" class="sidebar-link w-inline-block"><img src="{{ asset('frontend_assets/images/online-course.svg') }}" loading="lazy" alt="" class="sidebar-icon">
              <div class="sidebar-link-text">My Courses</div>
            </a>
            <a href="{{ route('course.create') }}" class="sidebar-link w-inline-block"><img src="{{ asset('frontend_assets/images/pen.svg') }}" loading="lazy" alt="" class="sidebar-icon">
              <div class="sidebar-link-text">Create a Course</div>
            </a>
            <a href="dashboard/my-order.html" class="sidebar-link w-inline-block"><img src="{{ asset('frontend_assets/images/order.svg') }}" loading="lazy" alt="" class="sidebar-icon">
              <div class="sidebar-link-text">My Order</div>
            </a>
            <a href="{{ route('products.create') }}" class="sidebar-link w-inline-block"><img src="{{ asset('frontend_assets/images/plus.svg') }}" loading="lazy" alt="" class="sidebar-icon">
              <div class="sidebar-link-text">Add a Products</div>
            </a>
            <a href="dashboard/emails.html" class="sidebar-link w-inline-block"><img src="{{ asset('frontend_assets/images/EnvelopeOpen.svg') }}" loading="lazy" alt="" class="sidebar-icon">
              <div class="sidebar-link-text">Emails</div>
            </a>
          </div>
          <div class="sidebar-menu-section">
            <a href="dashboard/my-profile.html" class="sidebar-link w-inline-block"><img src="{{ asset('frontend_assets/images/profile-user-1.svg') }}" loading="lazy" alt="" class="sidebar-icon">
              <div class="sidebar-link-text">My Profile</div>
            </a>
            <a href="dashboard/settings.html" class="sidebar-link w-inline-block"><img src="{{ asset('frontend_assets/images/settings.svg') }}" loading="lazy" alt="" class="sidebar-icon">
              <div class="sidebar-link-text">Seetings</div>
            </a>
          </div>
        </div>
      </div>
      <div class="menu-button w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
      <div class="w-container">
        <nav role="navigation" class="nav-menu w-nav-menu">
          <div class="sidebar-menu">
            <div class="sidebar-menu-section">
                
              <a href="{{ route('medic.dashboard') }}" aria-current="page" class="sidebar-link w-inline-block w--current"><img src="{{ asset('frontend_assets/images/Home.svg') }}" loading="lazy" alt="" class="sidebar-icon">
                <div class="sidebar-link-text">Dashboard</div>
              </a>
              <a href="#" class="sidebar-link w-inline-block"><img src="{{ asset('frontend_assets/images/online-course.svg') }}" loading="lazy" alt="" class="sidebar-icon">
                <div class="sidebar-link-text">Courses</div>
              </a>
              <a href="#" class="sidebar-link w-inline-block"><img src="{{ asset('frontend_assets/images/order.svg') }}" loading="lazy" alt="" class="sidebar-icon">
                <div class="sidebar-link-text">My Order</div>
              </a>
              <a href="#" class="sidebar-link w-inline-block"><img src="{{ asset('frontend_assets/images/Note.svg') }}" loading="lazy" alt="" class="sidebar-icon">
                <div class="sidebar-link-text">Tasks</div>
              </a>
              <a href="#" class="sidebar-link w-inline-block"><img src="{{ asset('frontend_assets/images/EnvelopeOpen.svg') }}" loading="lazy" alt="" class="sidebar-icon">
                <div class="sidebar-link-text">Emails</div>
              </a>
            </div>
            <div class="sidebar-menu-section">
              <a href="dashboard/my-profile.html" class="sidebar-link w-inline-block"><img src="{{ asset('frontend_assets/images/profile-user-1.svg') }}" loading="lazy" alt="" class="sidebar-icon">
                <div class="sidebar-link-text">My Profile</div>
              </a>
              <a href="dashboard/settings.html" class="sidebar-link w-inline-block"><img src="{{ asset('frontend_assets/images/settings.svg') }}" loading="lazy" alt="" class="sidebar-icon">
                <div class="sidebar-link-text">Seetings</div>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="dashboard-main">
      <div class="sidebar-space"></div>
      <div class="dashboard-content">
        <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="dashboard-nav w-nav">
          <div class="nav-wrapper">
            <form action="/search" class="search w-form"><input type="submit" value="" class="search-button w-button"><input type="search" class="search-input w-input" maxlength="256" name="query" placeholder="Search" id="search" required=""></form>
            <div class="profile-wrap">
              <a href="courses.html" class="plan-button w-button">Upgrade Plan</a>
              <div data-hover="" data-delay="0" class="nav-dropdown w-dropdown">
                <div class="nav-dropdown-toggle w-dropdown-toggle">
                    
                  <div class="nav-icon-item"><img src="{{ asset('frontend_assets/images/Updates-Icon.svg') }}" loading="lazy" alt="">
                    <div class="bell-dot"></div>
                  </div>
                </div>
                <nav class="nav-dropdown-list w-dropdown-list">
                  <div class="notification-wrap shadow">
                    <div class="notification-main">
                      <div class="notificaiton-element">
                        <div class="notification-top">
                          <div class="notification-dot"></div>
                          <div class="notificaiton-title">Email Snooze</div>
                        </div>
                        <p class="notification-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                      <div class="notificaiton-element">
                        <div class="notification-top">
                          <div class="notification-dot seen"></div>
                          <div class="notificaiton-title">3 new emails</div>
                        </div>
                        <p class="notification-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                      <div class="notificaiton-element">
                        <div class="notification-top">
                          <div class="notification-dot seen"></div>
                          <div class="notificaiton-title">3 new emails</div>
                        </div>
                        <p class="notification-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                      <a href="#" class="notification-button w-button">See all notifications</a>
                    </div>
                  </div>
                </nav>
              </div>
              <div data-hover="" data-delay="0" class="nav-dropdown w-dropdown">
                <div class="nav-dropdown-toggle w-dropdown-toggle">
                  <div class="nav-icon-item"><img src="{{ asset('frontend_assets/images/Bell.svg') }}" loading="lazy" alt="">
                    <div class="bell-dot"></div>
                  </div>
                </div>
                <nav class="nav-dropdown-list w-dropdown-list">
                  <div class="notification-wrap shadow">
                    <div class="notification-main">
                      <div class="notificaiton-element">
                        <div class="notification-top">
                          <div class="notification-dot"></div>
                          <div class="notificaiton-title">3 new emails</div>
                        </div>
                        <p class="notification-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                      <div class="notificaiton-element">
                        <div class="notification-top">
                          <div class="notification-dot seen"></div>
                          <div class="notificaiton-title">3 new emails</div>
                        </div>
                        <p class="notification-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                      <div class="notificaiton-element">
                        <div class="notification-top">
                          <div class="notification-dot seen"></div>
                          <div class="notificaiton-title">3 new emails</div>
                        </div>
                        <p class="notification-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                      <a href="#" class="notification-button w-button">See all notifications</a>
                    </div>
                  </div>
                </nav>
              </div>
              <div data-hover="" data-delay="0" class="profile-menu-dropdown w-dropdown">
                <div data-w-id="41711f98-e628-d928-b31e-d7b400d33a7d" class="profile-menu w-dropdown-toggle">
                  <div class="profile-image"><img src="{{ asset('frontend_assets/images/Stijin.jpg') }}" loading="lazy" alt="" class="cover-image"></div><img src="images/arrow-down-sign-to-navigate.svg" loading="lazy" width="12" alt="" class="menu-down">
                </div>
                <nav class="profile-menu-list w-dropdown-list">
                  <a href="dashboard/my-profile.html" class="profile-menu-link w-dropdown-link">My Profile</a>
                  <a href="dashboard/settings.html" class="profile-menu-link w-dropdown-link">Settings</a>
                  <div class="menu-divider"></div>
                  <a href="#" class="profile-menu-link w-dropdown-link">Help Center</a>
                  <a href="#" class="profile-menu-link w-dropdown-link">Report an Issue</a>
                  <a href="#" class="profile-menu-link w-dropdown-link">Terms &amp; Conditions</a>
                  <a href="#" class="profile-menu-link w-dropdown-link">Privacy Policy</a>
                  <a href="#" class="profile-menu-link w-dropdown-link">Licenses</a>
                  <div class="menu-divider"></div>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf 
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" class="profile-menu-link w-dropdown-link">Log Out</a>
                  </form>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="dashboard-main-content">


        @yield('content')
        
        </div>
    </div>
</div>
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=606be0fc4091bed60a828b5b" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
@yield('js')

<script src="{{ asset('frontend_assets/js/webflow.js') }}" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>