<!-- Header Start -->
<?php include ("includes/header.php"); ?>
<!-- Header Start -->

<style>
    /* ===== PAGE TITLE HEADER ===== */
    .page-heading-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 18px 0 10px 0;
        flex-wrap: wrap;
        gap: 12px;
    }
    .page-heading-section .page-title-wrap {
        display: flex;
        align-items: center;
        gap: 14px;
    }
    .page-heading-section .page-title-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: linear-gradient(135deg, #4361ee 0%, #805dca 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 14px rgba(67,97,238,0.35);
        flex-shrink: 0;
    }
    .page-heading-section .page-title-icon svg {
        color: #fff;
        width: 22px;
        height: 22px;
    }
    .page-heading-section h2 {
        font-size: 1.35rem;
        font-weight: 700;
        color: #1a1f36;
        margin: 0;
        letter-spacing: -0.3px;
    }
    .page-heading-section p.subtitle {
        font-size: 0.82rem;
        color: #888ea8;
        margin: 0;
    }
    .btn-add-new {
        background: linear-gradient(135deg, #4361ee 0%, #805dca 100%);
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 9px 20px;
        font-size: 0.85rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 7px;
        cursor: pointer;
        transition: box-shadow 0.2s, transform 0.15s;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(67,97,238,0.28);
    }
    .btn-add-new:hover {
        box-shadow: 0 6px 18px rgba(67,97,238,0.42);
        transform: translateY(-1px);
        color: #fff;
    }

    /* ===== TABLE ENHANCEMENTS ===== */
    .widget-content.widget-content-area {
        border-radius: 14px;
        box-shadow: 0 2px 20px rgba(31,45,61,0.08);
        padding: 24px 22px 18px;
        border: 1px solid #f0f1f5;
    }

    #social-links-table thead tr th {
        font-size: 0.78rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.7px;
        color: #515365;
        background: #f8f9ff;
        border-bottom: 2px solid #e8ecff;
        padding: 13px 14px;
        white-space: nowrap;
    }
    #social-links-table tbody tr {
        transition: background 0.15s;
    }
    #social-links-table tbody tr:hover {
        background: #f5f7ff !important;
    }
    #social-links-table tbody td {
        vertical-align: middle;
        padding: 13px 14px;
        font-size: 0.875rem;
        color: #3b3f5c;
        border-bottom: 1px solid #f0f1f5;
    }

    /* SNO badge */
    .sno-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        background: #eef0ff;
        color: #4361ee;
        border-radius: 8px;
        font-size: 0.78rem;
        font-weight: 700;
    }

    /* Platform icon pill */
    .platform-icon-wrap {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.10);
    }
    .platform-icon-wrap.facebook  { background: #e8f0fe; }
    .platform-icon-wrap.instagram { background: #fce4f3; }
    .platform-icon-wrap.github    { background: #f0f0f0; }
    .platform-icon-wrap.google    { background: #fde9e9; }
    .platform-icon-wrap.linkedin  { background: #dff0fb; }
    .platform-icon-wrap.whatsapp  { background: #e0f7ea; }
    .platform-icon-wrap.twitter   { background: #e6f4fd; }
    .platform-icon-wrap.youtube   { background: #fde8e8; }

    /* Tag badge */
    .tag-badge {
        display: inline-block;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        letter-spacing: 0.3px;
    }
    .tag-badge.facebook  { background: #e8f0fe; color: #1877f2; }
    .tag-badge.instagram { background: #fce4f3; color: #c13584; }
    .tag-badge.github    { background: #f0f0f0; color: #24292e; }
    .tag-badge.google    { background: #fde9e9; color: #ea4335; }
    .tag-badge.linkedin  { background: #dff0fb; color: #0a66c2; }
    .tag-badge.whatsapp  { background: #e0f7ea; color: #25d366; }
    .tag-badge.twitter   { background: #e6f4fd; color: #1da1f2; }
    .tag-badge.youtube   { background: #fde8e8; color: #ff0000; }

    /* Link cell */
    .link-cell a {
        color: #4361ee;
        font-size: 0.82rem;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 5px;
        max-width: 220px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .link-cell a:hover { text-decoration: underline; }
    .link-cell a svg { flex-shrink: 0; }

    /* Status toggle */
    .status-toggle {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        cursor: pointer;
    }
    .status-toggle .toggle-switch {
        position: relative;
        width: 38px;
        height: 20px;
    }
    .status-toggle .toggle-switch input { display: none; }
    .status-toggle .slider {
        position: absolute;
        inset: 0;
        background: #d8dae5;
        border-radius: 20px;
        transition: background 0.22s;
    }
    .status-toggle .slider::before {
        content: '';
        position: absolute;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: #fff;
        top: 3px;
        left: 3px;
        transition: transform 0.22s;
        box-shadow: 0 1px 4px rgba(0,0,0,0.18);
    }
    .status-toggle input:checked + .slider { background: #00ab55; }
    .status-toggle input:checked + .slider::before { transform: translateX(18px); }
    .status-label { font-size: 0.78rem; font-weight: 600; }
    .status-label.active { color: #00ab55; }
    .status-label.inactive { color: #888ea8; }

    /* Action buttons */
    .action-btns { display: flex; align-items: center; gap: 6px; flex-wrap: nowrap; }
    .action-btn {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: none;
        cursor: pointer;
        transition: transform 0.15s, box-shadow 0.15s;
        flex-shrink: 0;
    }
    .action-btn:hover { transform: translateY(-2px); box-shadow: 0 4px 10px rgba(0,0,0,0.13); }
    .action-btn.view   { background: #e8f5ff; color: #4361ee; }
    .action-btn.edit   { background: #fff8e6; color: #e9a33b; }
    .action-btn.delete { background: #fee8e8; color: #e7515a; }

    /* DataTable overrides */
    .dataTables_wrapper .dataTables_length select,
    .dataTables_wrapper .dataTables_filter input {
        border: 1.5px solid #e0e6ed;
        border-radius: 8px;
        padding: 6px 12px;
        font-size: 0.85rem;
        color: #3b3f5c;
        background: #fff;
    }
    .dataTables_wrapper .dataTables_filter input:focus { outline: none; border-color: #4361ee; }
    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        background: #4361ee !important;
        border-color: #4361ee !important;
        color: #fff !important;
        border-radius: 8px;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: #eef0ff !important;
        border-color: transparent !important;
        color: #4361ee !important;
        border-radius: 8px;
    }

    /* Responsive table scroll */
    .table-responsive { overflow-x: auto; -webkit-overflow-scrolling: touch; }

    /* Dark mode support */
    [data-theme="dark"] .page-heading-section h2 { color: #e0e6ed; }
    [data-theme="dark"] #social-links-table thead tr th { background: #1b2e4b; border-bottom-color: #253a55; color: #a3b2c5; }
    [data-theme="dark"] #social-links-table tbody td { color: #bfc9d4; border-bottom-color: #1b2e4b; }
    [data-theme="dark"] #social-links-table tbody tr:hover { background: #162032 !important; }
    [data-theme="dark"] .sno-badge { background: #1b2e4b; }
    [data-theme="dark"] .widget-content.widget-content-area { border-color: #1b2e4b; }
</style>

<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    <?php include ("includes/loader.php"); ?>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <?php include ("includes/navbar.php"); ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="tc-overlay"></div>
        <div class="psidebar-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <?php include("includes/sidebar.php"); ?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content p-0">

                    <!--  BEGIN BREADCRUMBS  -->
                    <div class="secondary-nav">
                        <div class="breadcrumbs-container" data-page-heading="Social Media Links">
                            <header class="header navbar navbar-expand-sm">
                                <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <line x1="4" y1="6" x2="20" y2="6"></line>
                                        <line x1="4" y1="12" x2="20" y2="12"></line>
                                        <line x1="4" y1="18" x2="20" y2="18"></line>
                                    </svg>
                                </a>
                                <div class="d-flex breadcrumb-content">
                                    <div class="page-header">
                                        <div class="page-title"></div>
                                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#">Social Media</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Links</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <ul class="navbar-nav flex-row ms-auto breadcrumb-action-dropdown">
                                    <li class="nav-item more-dropdown">
                                        <div class="dropdown custom-dropdown-icon">
                                            <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span>Settings</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down custom-dropdown-arrow"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-printer"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" /><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" /><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" /></svg> Print
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-download"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg> Export
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </header>
                        </div>
                    </div>
                    <!--  END BREADCRUMBS  -->

                    <div class="row layout-top-spacing">
                        <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                            <div class="widget-content widget-content-area br-8">

                                <!-- PAGE HEADING INSIDE CARD -->
                                <div class="page-heading-section mb-4">
                                    <div class="page-title-wrap">
                                        <div class="page-title-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/>
                                                <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <h2>Social Media Links</h2>
                                            <p class="subtitle">Manage all your platform links in one place</p>
                                        </div>
                                    </div>
                                    <a href="add_social_media.php" class="btn-add-new">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                                        Add New Link
                                    </a>
                                </div>
                                <!-- END PAGE HEADING -->

                                <div class="table-responsive">
                                    <table id="social-links-table" class="table dt-table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Icon</th>
                                                <th>Tag</th>
                                                <th>Link</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $social_links = [
                                                [
                                                    "platform" => "facebook",
                                                    "tag"      => "Facebook",
                                                    "link"     => "https://facebook.com/",
                                                    "icon"     => "fa6-brands:facebook",
                                                    "active"   => true,
                                                ],
                                                [
                                                    "platform" => "instagram",
                                                    "tag"      => "Instagram",
                                                    "link"     => "https://instagram.com/",
                                                    "icon"     => "fa6-brands:instagram",
                                                    "active"   => true,
                                                ],
                                                [
                                                    "platform" => "github",
                                                    "tag"      => "GitHub",
                                                    "link"     => "https://github.com/",
                                                    "icon"     => "fa6-brands:github",
                                                    "active"   => false,
                                                ],
                                                [
                                                    "platform" => "google",
                                                    "tag"      => "Google",
                                                    "link"     => "https://google.com/",
                                                    "icon"     => "fa6-brands:google",
                                                    "active"   => true,
                                                ],
                                                [
                                                    "platform" => "linkedin",
                                                    "tag"      => "LinkedIn",
                                                    "link"     => "https://linkedin.com/",
                                                    "icon"     => "fa6-brands:linkedin",
                                                    "active"   => true,
                                                ],
                                                [
                                                    "platform" => "whatsapp",
                                                    "tag"      => "WhatsApp",
                                                    "link"     => "https://wa.me/",
                                                    "icon"     => "fa6-brands:whatsapp",
                                                    "active"   => true,
                                                ],
                                                [
                                                    "platform" => "twitter",
                                                    "tag"      => "Twitter / X",
                                                    "link"     => "https://twitter.com/",
                                                    "icon"     => "fa6-brands:x-twitter",
                                                    "active"   => false,
                                                ],
                                                [
                                                    "platform" => "youtube",
                                                    "tag"      => "YouTube",
                                                    "link"     => "https://youtube.com/",
                                                    "icon"     => "fa6-brands:youtube",
                                                    "active"   => true,
                                                ],
                                            ];

                                            foreach ($social_links as $i => $row):
                                                $sno     = $i + 1;
                                                $cls     = $row['platform'];
                                                $checked = $row['active'] ? 'checked' : '';
                                                $lbl     = $row['active'] ? 'active' : 'inactive';
                                                $lblTxt  = $row['active'] ? 'Active' : 'Inactive';
                                            ?>
                                            <tr>
                                                <!-- SNO -->
                                                <td><span class="sno-badge"><?= $sno ?></span></td>

                                                <!-- ICON -->
                                                <td>
                                                    <div class="platform-icon-wrap <?= $cls ?>">
                                                        <span class="iconify" data-icon="<?= $row['icon'] ?>"></span>
                                                    </div>
                                                </td>

                                                <!-- TAG -->
                                                <td>
                                                    <span class="tag-badge <?= $cls ?>"><?= htmlspecialchars($row['tag']) ?></span>
                                                </td>

                                                <!-- LINK -->
                                                <td class="link-cell">
                                                    <a href="<?= htmlspecialchars($row['link']) ?>" target="_blank" rel="noopener noreferrer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                                                        <?= htmlspecialchars($row['link']) ?>
                                                    </a>
                                                </td>

                                                <!-- STATUS -->
                                                <td>
                                                    <label class="status-toggle">
                                                        <div class="toggle-switch">
                                                            <input type="checkbox" <?= $checked ?> onchange="toggleStatus(this, <?= $sno ?>)">
                                                            <span class="slider"></span>
                                                        </div>
                                                        <span class="status-label <?= $lbl ?>" id="status-label-<?= $sno ?>"><?= $lblTxt ?></span>
                                                    </label>
                                                </td>

                                                <!-- ACTIONS -->
                                                <td>
                                                    <div class="action-btns justify-content-center">
                                                        <!-- View -->
                                                        <button class="action-btn view" title="View" onclick="viewRecord(<?= $sno ?>)">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                                        </button>
                                                        <!-- Edit -->
                                                        <button class="action-btn edit" title="Edit" onclick="editRecord(<?= $sno ?>)">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                                        </button>
                                                        <!-- Delete -->
                                                        <button class="action-btn delete" title="Delete" onclick="deleteRecord(<?= $sno ?>)">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/><path d="M9 6V4h6v2"/></svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- End table-responsive -->

                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!--  BEGIN FOOTER  -->
            <?php include ("includes/footer.php"); ?>
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!--  BEGIN PROFILE SIDEBAR  -->
    <?php include ("includes/right_side_profile.php"); ?>
    <!--  END PROFILE SIDEBAR  -->

    <!--  BEGIN SEARCH MODAL  -->
    <?php include ("includes/search_modal.php"); ?>
    <!--  END SEARCH MODAL  -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="src/plugins/src/global/vendors.min.js"></script>
    <script src="src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="src/plugins/src/waves/waves.min.js"></script>
    <script src="layouts/modern-light-menu/app.js"></script>
    <script src="src/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- Iconify CDN for brand icons -->
    <script src="https://code.iconify.design/3/3.1.1/iconify.min.js"></script>

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="src/plugins/src/table/datatable/datatables.js"></script>
    <script>
        // Init DataTable
        $('#social-links-table').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                   "<'table-responsive'tr>" +
                   "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_"
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 10,
            "columnDefs": [
                { "orderable": false, "targets": [1, 4, 5] } // icon, status, actions not sortable
            ]
        });

        // Status toggle handler
        function toggleStatus(checkbox, sno) {
            const label = document.getElementById('status-label-' + sno);
            if (checkbox.checked) {
                label.textContent = 'Active';
                label.className = 'status-label active';
            } else {
                label.textContent = 'Inactive';
                label.className = 'status-label inactive';
            }
            // TODO: AJAX call to update status on server
            // fetch('update_status.php', { method: 'POST', body: JSON.stringify({ id: sno, status: checkbox.checked }) });
        }

        // Action handlers — wire to your modal/AJAX logic
        function viewRecord(id) {
            console.log('View record:', id);
            // TODO: open view modal
        }
        function editRecord(id) {
            console.log('Edit record:', id);
            // TODO: open edit modal
        }
        function deleteRecord(id) {
            if (confirm('Are you sure you want to delete this record?')) {
                console.log('Delete record:', id);
                // TODO: AJAX delete + DataTable row removal
            }
        }
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>