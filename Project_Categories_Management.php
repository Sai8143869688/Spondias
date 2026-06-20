<?php include ("includes/header.php"); ?>

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
    .page-heading-section .page-title-icon svg { color: #fff; width: 22px; height: 22px; }
    .page-heading-section h2 {
        font-size: 1.35rem;
        font-weight: 700;
        color: #1a1f36;
        margin: 0;
        letter-spacing: -0.3px;
    }
    .page-heading-section p.subtitle { font-size: 0.82rem; color: #888ea8; margin: 0; }

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
    .btn-add-new:hover { box-shadow: 0 6px 18px rgba(67,97,238,0.42); transform: translateY(-1px); color: #fff; }

    /* ===== TABLE CARD ===== */
    .widget-content.widget-content-area {
        border-radius: 14px;
        box-shadow: 0 2px 20px rgba(31,45,61,0.08);
        padding: 24px 22px 18px;
        border: 1px solid #f0f1f5;
    }

    /* ===== TABLE ===== */
    #projects-table thead tr th {
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
    #projects-table tbody tr { transition: background 0.15s; }
    #projects-table tbody tr:hover { background: #f5f7ff !important; }
    #projects-table tbody td {
        vertical-align: middle;
        padding: 12px 14px;
        font-size: 0.875rem;
        color: #3b3f5c;
        border-bottom: 1px solid #f0f1f5;
    }

    /* SNO badge */
    .sno-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 30px; height: 30px;
        background: #eef0ff;
        color: #4361ee;
        border-radius: 8px;
        font-size: 0.78rem;
        font-weight: 700;
    }

    /* Project thumb + title stacked */
    .project-cell { display: flex; align-items: center; gap: 12px; }
    .project-thumb {
        width: 52px; height: 40px;
        border-radius: 8px;
        object-fit: cover;
        flex-shrink: 0;
        border: 1.5px solid #e8ecff;
        background: #eef0ff;
        display: flex; align-items: center; justify-content: center;
        overflow: hidden;
    }
    .project-thumb img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .project-thumb-placeholder {
        width: 52px; height: 40px;
        border-radius: 8px;
        background: linear-gradient(135deg, #4361ee 0%, #805dca 100%);
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }
    .project-thumb-placeholder svg { color: #fff; width: 18px; height: 18px; }
    .project-info .title {
        font-size: 0.875rem; font-weight: 600; color: #1a1f36; margin: 0; line-height: 1.3;
        white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 220px;
    }
    .project-info .desc {
        font-size: 0.775rem; color: #888ea8; margin: 0;
        white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 220px;
    }

    /* Category badge */
    .cat-badge {
        display: inline-block;
        padding: 4px 10px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        letter-spacing: 0.3px;
        white-space: nowrap;
    }
    .cat-badge.web-app    { background: #e8f0fe; color: #1877f2; }
    .cat-badge.mobile-app { background: #e0f7ea; color: #00ab55; }
    .cat-badge.cloud      { background: #eef0ff; color: #4361ee; }
    .cat-badge.ai-ml      { background: #f3e8ff; color: #805dca; }
 

    /* Order badge */
    .order-badge {
        display: inline-flex; align-items: center; justify-content: center;
        min-width: 30px; height: 26px;
        background: #f0f2ff; color: #4361ee;
        border-radius: 7px; font-size: 0.8rem; font-weight: 700;
        padding: 0 8px;
    }

    /* Status badge */
    .status-badge {
        display: inline-flex; align-items: center; gap: 5px;
        padding: 4px 10px; border-radius: 20px;
        font-size: 0.75rem; font-weight: 600;
    }
    .status-badge::before {
        content: ''; width: 7px; height: 7px;
        border-radius: 50%; flex-shrink: 0;
    }
    .status-badge.active   { background: #e0f7ea; color: #00ab55; }
    .status-badge.active::before   { background: #00ab55; }
    .status-badge.inactive { background: #fde9e9; color: #e7515a; }
    .status-badge.inactive::before { background: #e7515a; }

  
    .cta-link:hover { text-decoration: underline; }
    .cta-empty { color: #c0c5d8; font-size: 0.82rem; }

    /* Action buttons */
    .action-btns { display: flex; align-items: center; gap: 6px; flex-wrap: nowrap; }
    .action-btn {
        width: 32px; height: 32px;
        border-radius: 8px;
        display: inline-flex; align-items: center; justify-content: center;
        border: none; cursor: pointer;
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
        background: #4361ee !important; border-color: #4361ee !important;
        color: #fff !important; border-radius: 8px;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: #eef0ff !important; border-color: transparent !important;
        color: #4361ee !important; border-radius: 8px;
    }

    .table-responsive { overflow-x: auto; -webkit-overflow-scrolling: touch; }

    /* ===== DARK MODE ===== */
    [data-theme="dark"] .page-heading-section h2              { color: #e0e6ed; }
    [data-theme="dark"] .project-info .title                  { color: #e0e6ed; }
    [data-theme="dark"] #projects-table thead tr th            { background: #1b2e4b; border-bottom-color: #253a55; color: #a3b2c5; }
    [data-theme="dark"] #projects-table tbody td               { color: #bfc9d4; border-bottom-color: #1b2e4b; }
    [data-theme="dark"] #projects-table tbody tr:hover         { background: #162032 !important; }
    [data-theme="dark"] .sno-badge                             { background: #1b2e4b; }
    [data-theme="dark"] .order-badge                           { background: #1b2e4b; }
    [data-theme="dark"] .widget-content.widget-content-area    { border-color: #1b2e4b; }
    [data-theme="dark"] .project-thumb                         { border-color: #253a55; background: #1b2e4b; }
</style>

<body class="layout-boxed">
    <?php include ("includes/loader.php"); ?>
    <?php include ("includes/navbar.php"); ?>

    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="tc-overlay"></div>
        <div class="psidebar-overlay"></div>

        <?php include("includes/sidebar.php"); ?>

        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="middle-content p-0">

                    <!-- BREADCRUMBS -->
                    <div class="secondary-nav">
                        <div class="breadcrumbs-container" data-page-heading="Projects">
                            <header class="header navbar navbar-expand-sm">
                                <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <line x1="4" y1="6" x2="20" y2="6"/>
                                        <line x1="4" y1="12" x2="20" y2="12"/>
                                        <line x1="4" y1="18" x2="20" y2="18"/>
                                    </svg>
                                </a>
                                <div class="d-flex breadcrumb-content">
                                    <div class="page-header">
                                        <div class="page-title"></div>
                                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#">Portfolio</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Projects</li>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 17h2a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h2"/><path d="M17 9V5a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v4"/><path d="M7 13m0 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2z"/></svg> Print
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"/><path d="M7 11l5 5 5-5"/><path d="M12 4v12"/></svg> Export
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </header>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                            <div class="widget-content widget-content-area br-8">

                                <!-- PAGE HEADING -->
                                <div class="page-heading-section mb-4">
                                    <div class="page-title-wrap">
                                        <div class="page-title-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/>
                                                <rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>
                                            </svg>
                                        </div>
                                        <div>
                                           <h2>Manage Categories</h2>
                                           <p class="subtitle">Manage project categories and display settings</p>
                                        </div>
                                    </div>
                                    <a href="add_project_category.php" class="btn-add-new">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                                        Add New Category
                                    </a>
                                </div>

                                <div class="table-responsive">
                                    <table id="projects-table" class="table dt-table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Name</th>
                                                
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                      $categories = [
                                            [
                                                "name"   => "Web Apps",
                                                "order"  => 1,
                                                "status" => "active"
                                            ],
                                            [
                                                "name"   => "Mobile",
                                                "order"  => 2,
                                                "status" => "active"
                                            ],
                                            [
                                                "name"   => "Cloud",
                                                "order"  => 3,
                                                "status" => "active"
                                            ],
                                            [
                                                "name"   => "AI / ML",
                                                "order"  => 4,
                                                "status" => "active"
                                            ]
                                        ];

                                       

                                       foreach ($categories as $i => $row):
                                            $sno = $i + 1;
                                        ?>
                                       <tr>

                                            <!-- SNO -->
                                            <td>
                                                <span class="sno-badge"><?= $i + 1 ?></span>
                                            </td>

                                            <!-- Category Name -->
                                            <td>
                                                <strong><?= htmlspecialchars($row['name']) ?></strong>
                                            </td>

                                           


                                            <!-- Status -->
                                            <td>
                                                <span class="status-badge <?= $row['status'] ?>">
                                                    <?= ucfirst($row['status']) ?>
                                                </span>
                                            </td>

                                            <!-- Actions -->
                                            <td>
                                                <div class="action-btns justify-content-center">

                                                    <button class="action-btn edit"
                                                        onclick="editCategory(<?= $i + 1 ?>)"
                                                        title="Edit">

                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            width="15" height="15"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2">
                                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                                        </svg>

                                                    </button>

                                                    <button class="action-btn delete"
                                                        onclick="deleteCategory(<?= $i + 1 ?>)"
                                                        title="Delete">

                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            width="15" height="15"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2">
                                                            <polyline points="3 6 5 6 21 6"/>
                                                            <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/>
                                                            <path d="M10 11v6"/>
                                                            <path d="M14 11v6"/>
                                                            <path d="M9 6V4h6v2"/>
                                                        </svg>

                                                    </button>

                                                </div>
                                            </td>

                                        </tr>
                                        <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <?php include ("includes/footer.php"); ?>
        </div>
    </div>

    <?php include ("includes/right_side_profile.php"); ?>
    <?php include ("includes/search_modal.php"); ?>

    <script src="src/plugins/src/global/vendors.min.js"></script>
    <script src="src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="src/plugins/src/waves/waves.min.js"></script>
    <script src="layouts/modern-light-menu/app.js"></script>
    <script src="src/assets/js/custom.js"></script>
    <script src="src/plugins/src/table/datatable/datatables.js"></script>

    <script>
        $('#projects-table').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                   "<'table-responsive'tr>" +
                   "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext":     '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
               "sSearchPlaceholder": "Search categories...",
                "sLengthMenu": "Results :  _MENU_"
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 10,
            "order": [[4, "asc"]], // default sort by Display Order
            "columnDefs": [
                { "orderable": false, "targets": [1, 7] } // project cell & actions not sortable
            ]
        });

        function viewProject(id) {
            console.log('View project:', id);
            // TODO: open view modal
        }
        function editCategory(id) {
            window.location.href =
            'edit_project_categories.php?id=' + id;
        }
       function deleteCategory(id) {
            if(confirm('Are you sure you want to delete this category?')) {
                console.log(id);
            }
        }
    </script>
</body>
</html>
