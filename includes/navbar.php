<div class="header-container container-xxl">
    <header class="header navbar expand-header">

        <a href="javascript:void(0);" class="btn-toggle sidebarCollapse d-lg-none me-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <line x1="4" y1="6" x2="20" y2="6"></line>
                <line x1="4" y1="12" x2="20" y2="12"></line>
                <line x1="4" y1="18" x2="20" y2="18"></line>
            </svg>
        </a>

        <ul class="header-item ms-md-0 ms-auto search-area">
            <li class="nav-item align-self-center search-content search-animated"  data-bs-toggle="modal" data-bs-target="#searchDialog">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search toggle-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <circle cx="10" cy="10" r="7"></circle>
                    <line x1="21" y1="21" x2="15" y2="15"></line>
                 </svg>
                <form class="search-full search-inline-form" role="search">
                    <div class="search-bar">
                        <input type="text" class="form-control search-form-control ms-lg-auto" placeholder="Search..." data-bs-toggle="modal" data-bs-target="#searchDialog">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x search-close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </div>
                </form>
                <span class="badge badge-secondary">Ctrl + /</span>
            </li>
        </ul>

        <ul class="header-item ms-md-auto action-area">

          <!--   <li class="h-item dropdown language-dropdown">
                <a href="javascript:void(0);" class="h-link dropdown-toggle" id="language-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://designreset.com/cork/html/src/assets/img/1x1/us.svg" class="flag-width" alt="flag"><span>English</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <polyline points="6 9 12 15 18 9"></polyline>
                     </svg>
                </a>
               
            </li>
 -->
            <li class="h-item theme-toggle-item">
                <a href="javascript:void(0);" class="h-link theme-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-moon dark-mode" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun-high light-mode" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14.828 14.828a4 4 0 1 0 -5.656 -5.656a4 4 0 0 0 5.656 5.656z"></path>
                        <path d="M6.343 17.657l-1.414 1.414"></path>
                        <path d="M6.343 6.343l-1.414 -1.414"></path>
                        <path d="M17.657 6.343l1.414 -1.414"></path>
                        <path d="M17.657 17.657l1.414 1.414"></path>
                        <path d="M4 12h-2"></path>
                        <path d="M12 4v-2"></path>
                        <path d="M20 12h2"></path>
                        <path d="M12 20v2"></path>
                    </svg>
                </a>
            </li>

           <!--  <li class="h-item dropdown message-dropdown">
                <a href="javascript:void(0);" class="h-link dropdown-toggle" id="messageDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-hipchat" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M17.802 17.292s.077 -.055 .2 -.149c1.843 -1.425 2.998 -3.49 2.998 -5.789c0 -4.286 -4.03 -7.764 -8.998 -7.764c-4.97 0 -9.002 3.478 -9.002 7.764c0 4.288 4.03 7.646 9 7.646c.424 0 1.12 -.028 2.088 -.084c1.262 .82 3.104 1.493 4.716 1.493c.499 0 .734 -.41 .414 -.828c-.486 -.596 -1.156 -1.551 -1.416 -2.29z"></path>
                     </svg>
                    <span class="badge badge-success"></span>
                </a>
                <div class="dropdown-menu position-absolute preventScroll" aria-labelledby="messageDropdown">
                    <div class="dropdown-title message">
                        <h6 class="d-flex justify-content-between"><span class="align-self-center">Messages</span> <span class="badge badge-light-success">9 New</span></h6>
                    </div>
                    <div class="message-scroll">
                        <a class="dropdown-item">
                            <div class="media">
                                <div class="user-img usr-status-online">
                                    <img src="src/assets/img/profile/profile-11.png" class="img-fluid mr-2" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <div class="">
                                        <p class="usr-name">Shaun Park</p>
                                        <p class="msg-date">10 mins ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="dropdown-item">
                            <div class="media">
                                <div class="user-img">
                                    <img src="src/assets/img/profile/profile-5.png" class="img-fluid mr-2" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <div class="">
                                        <p class="usr-name">Andy King</p>
                                        <p class="msg-date">52 mins ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="dropdown-item">
                            <div class="media">
                                <div class="user-img usr-status-offline">
                                    <img src="src/assets/img/profile/profile-30.png" class="img-fluid mr-2" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <div class="">
                                        <p class="usr-name">Daisy Anderson</p>
                                        <p class="msg-date">24 hrs ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="dropdown-item">
                            <div class="media">
                                <div class="user-img usr-status-offline">
                                    <img src="src/assets/img/profile/profile-14.png" class="img-fluid mr-2" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <div class="">
                                        <p class="usr-name">Kara Young</p>
                                        <p class="msg-date">a week ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="dropdown-item">
                            <div class="media">
                                <div class="user-img">
                                    <img src="src/assets/img/profile/profile-13.png" class="img-fluid mr-2" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <div class="">
                                        <p class="usr-name">Lisa</p>
                                        <p class="msg-date">4 weeks ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="dropdown-item">
                            <div class="media">
                                <div class="user-img usr-status-offline">
                                    <img src="src/assets/img/profile/profile-2.png" class="img-fluid mr-2" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <div class="">
                                        <p class="usr-name">Amy Jackson</p>
                                        <p class="msg-date">a month ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="dropdown-item">
                            <div class="media">
                                <div class="user-img usr-status-hold">
                                    <img src="src/assets/img/profile/profile-3.png" class="img-fluid mr-2" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <div class="">
                                        <p class="usr-name">Mary McDonald</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="dropdown-item">
                            <div class="media">
                                <div class="user-img usr-status-online">
                                    <img src="src/assets/img/profile/profile-27.png" class="img-fluid mr-2" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <div class="">
                                        <p class="usr-name">Oscar Garner</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="dropdown-item">
                            <div class="media">
                                <div class="user-img usr-status-hold">
                                    <img src="src/assets/img/profile/profile-28.png" class="img-fluid mr-2" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <div class="">
                                        <p class="usr-name">Alma Clarke</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="dropdown-item">
                            <div class="media">
                                <div class="user-img">
                                    <img src="src/assets/img/profile/profile-32.png" class="img-fluid mr-2" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <div class="">
                                        <p class="usr-name">Xavier</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="dropdown-item">
                            <div class="media">
                                <div class="user-img usr-status-hold">
                                    <img src="src/assets/img/profile/profile-7.png" class="img-fluid mr-2" alt="avatar">
                                </div>
                                <div class="media-body">
                                    <div class="">
                                        <p class="usr-name">Lily</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                </div>
            </li>
 -->
            <!-- <li class="h-item dropdown notification-dropdown">
                <a href="javascript:void(0);" class="h-link dropdown-toggle" id="notificationDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                    </svg>
                    <span class="badge badge-warning"></span>
                </a>
                <div class="dropdown-menu position-absolute preventScroll" aria-labelledby="notificationDropdown">
                    <div class="dropdown-title message">
                        <div class="d-flex justify-content-between">
                            <ul class="nav nav-tabs notification-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">All <span class="ms-1 d-inline-block badge bg-dark:200 text-dark:700  dark:bg-info:500 dark:text-info:100" style="padding: 1px 6px;">3</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="alerts-tab" data-bs-toggle="tab" data-bs-target="#alerts-tab-pane" type="button" role="tab" aria-controls="alerts-tab-pane" aria-selected="false" tabindex="-1">Alerts</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="events-tab" data-bs-toggle="tab" data-bs-target="#events-tab-pane" type="button" role="tab" aria-controls="events-tab-pane" aria-selected="false" tabindex="-1">Updates</button>
                                </li>
                            </ul>
                             
                            <div class="n-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="notification-scroll ps ps--active-y">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                                
                                <a href="app-calendar.html" class="dropdown-item wn-primary">
                                    <div class="media">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                                <line x1="16" y1="3" x2="16" y2="7"></line>
                                                <line x1="8" y1="3" x2="8" y2="7"></line>
                                                <line x1="4" y1="11" x2="20" y2="11"></line>
                                                <rect x="8" y="15" width="2" height="2"></rect>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <div class="w-content">
                                                <p class="w-text"><span class="highlight-text">New Event</span> has been added on <span class="highlight-date">15 Dec 2020</span> </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
    
                                <a href="app-calendar.html" class="dropdown-item wn-danger">
                                    <div class="media">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                                <line x1="16" y1="3" x2="16" y2="7"></line>
                                                <line x1="8" y1="3" x2="8" y2="7"></line>
                                                <line x1="4" y1="11" x2="20" y2="11"></line>
                                                <rect x="8" y="15" width="2" height="2"></rect>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <div class="w-content">
                                                <p class="w-text">Collect <span class="highlight-text">documents</span> from <span class="highlight-name">Kelly</span> at the restaurant tommorrow.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
    
                                <a href="app-calendar.html" class="dropdown-item wn-secondary">
                                    <div class="media">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                             </svg>
                                        </div>
                                        <div class="media-body">
                                            <div class="w-content">
                                                <p class="w-text"><span class="highlight-text">Meeting Event</span> on 12 Nov has been updated to 8 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
    
                                <a href="app-calendar.html" class="dropdown-item wn-success">
                                    <div class="media">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                                <line x1="16" y1="3" x2="16" y2="7"></line>
                                                <line x1="8" y1="3" x2="8" y2="7"></line>
                                                <line x1="4" y1="11" x2="20" y2="11"></line>
                                                <rect x="8" y="15" width="2" height="2"></rect>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <div class="w-content">
                                                <p class="w-text"><span class="highlight-text">New Event</span> Seminar organised by Design Reset will be held on 25 January</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
    
                                <a href="app-calendar.html" class="dropdown-item wn-warning">
                                    <div class="media">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-triangle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 9v2m0 4v.01"></path>
                                                <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75"></path>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <div class="w-content">
                                                <p class="w-text"><span class="highlight-text">Today's</span> Conference is Cancelled</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
    
                                <a href="app-calendar.html" class="dropdown-item wn-dark">
                                    <div class="media">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-time" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4"></path>
                                                <circle cx="18" cy="18" r="4"></circle>
                                                <path d="M15 3v4"></path>
                                                <path d="M7 3v4"></path>
                                                <path d="M3 11h16"></path>
                                                <path d="M18 16.496v1.504l1 1"></path>
                                             </svg>
                                        </div>
                                        <div class="media-body">
                                            <div class="w-content">
                                                <p class="w-text">Meeting with <span class="highlight-text">Project Lead</span> on 01 Jan has been updated to 15 Jan</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>

                            <div class="tab-pane fade" id="alerts-tab-pane" role="tabpanel" aria-labelledby="alerts-tab" tabindex="0">

                                <a href="app-calendar.html" class="dropdown-item wn-primary">
                                    <div class="media">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                                <line x1="16" y1="3" x2="16" y2="7"></line>
                                                <line x1="8" y1="3" x2="8" y2="7"></line>
                                                <line x1="4" y1="11" x2="20" y2="11"></line>
                                                <rect x="8" y="15" width="2" height="2"></rect>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <div class="w-content">
                                                <p class="w-text"><span class="highlight-text">New Event</span> has been added on <span class="highlight-date">15 Dec 2020</span> </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
    
                                <a href="app-calendar.html" class="dropdown-item wn-danger">
                                    <div class="media">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                                <line x1="16" y1="3" x2="16" y2="7"></line>
                                                <line x1="8" y1="3" x2="8" y2="7"></line>
                                                <line x1="4" y1="11" x2="20" y2="11"></line>
                                                <rect x="8" y="15" width="2" height="2"></rect>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <div class="w-content">
                                                <p class="w-text">Collect <span class="highlight-text">documents</span> from <span class="highlight-name">Kelly</span> at the restaurant tommorrow.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
    
                                <a href="app-calendar.html" class="dropdown-item wn-secondary">
                                    <div class="media">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                            </svg>
                                        </div>
                                        <div class="media-body">
                                            <div class="w-content">
                                                <p class="w-text"><span class="highlight-text">Meeting Event</span> on 12 Nov has been updated to 8 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>

                            <div class="tab-pane fade" id="events-tab-pane" role="tabpanel" aria-labelledby="events-tab" tabindex="0">

                                <div class="tab-image no-notification">

                                    <img class="notification-light" src="https://designreset.com/cork/html/src/assets/img/notification-empty.svg" alt="notification-empty">
                                    <img class="notification-dark" src="https://designreset.com/cork/html/src/assets/img/notification-empty-dark.svg" alt="notification-empty">

                                    <div class="notification">
                                        <p>You have no updates</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="notification-action-bottom">
                        <button class="btn btn-primary btn-xs w-100">See All Notification</button>
                    </div>
                </div>
            </li> -->

            <li class="h-item dropdown user-profile-dropdown">
                <a href="javascript:void(0);" class="h-link dropdown-toggle user" id="userProfileDropdown">
                    <div class="avatar-container">
                        <div class="avatar avatar-sm avatar-indicators avatar-online">
                            <img alt="avatar" src="src/assets/img/profile/profile-35.png" class="rounded-circle">
                        </div>
                    </div>
                </a>
            </li>

        </ul>

    </header>
</div>