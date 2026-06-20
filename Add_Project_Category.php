<?php include ("includes/header.php"); ?>

<style>
    /* ===== PAGE TITLE HEADER ===== */
    .page-heading-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 18px 0 18px 0;
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

    .btn-back {
        background: #f0f2ff;
        color: #4361ee;
        border: none;
        border-radius: 8px;
        padding: 9px 18px;
        font-size: 0.85rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 7px;
        cursor: pointer;
        transition: background 0.2s, transform 0.15s;
        text-decoration: none;
    }
    .btn-back:hover { background: #e0e5ff; transform: translateX(-2px); color: #4361ee; }

    /* ===== FORM CARD ===== */
    .form-card {
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 2px 20px rgba(31,45,61,0.08);
        border: 1px solid #f0f1f5;
        overflow: hidden;
    }
    .form-card-header {
        padding: 20px 26px 18px;
        border-bottom: 1px solid #f0f1f5;
        display: flex;
        align-items: center;
        gap: 12px;
        background: #fafbff;
    }
    .form-card-header-icon {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: linear-gradient(135deg, #4361ee 0%, #805dca 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .form-card-header-icon svg { color: #fff; width: 18px; height: 18px; }
    .form-card-header h5 { font-size: 1rem; font-weight: 700; color: #1a1f36; margin: 0; }
    .form-card-header p { font-size: 0.78rem; color: #888ea8; margin: 0; }
    .form-card-body { padding: 28px 26px; }

    /* ===== FORM ELEMENTS ===== */
    .form-group-custom { margin-bottom: 22px; }
    .form-label-custom {
        display: block;
        font-size: 0.82rem;
        font-weight: 700;
        color: #515365;
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .form-label-custom span.required { color: #e7515a; margin-left: 2px; }

    .input-icon-wrap { position: relative; display: flex; align-items: center; }
    .input-icon-wrap .input-prefix-icon {
        position: absolute;
        left: 13px;
        display: flex;
        align-items: center;
        pointer-events: none;
        color: #888ea8;
        width: 18px;
        height: 18px;
    }
    .input-icon-wrap input,
    .input-icon-wrap select,
    .input-icon-wrap textarea { padding-left: 40px; }

    .form-control-custom {
        width: 100%;
        border: 1.5px solid #e0e6ed;
        border-radius: 10px;
        padding: 11px 14px;
        font-size: 0.875rem;
        color: #3b3f5c;
        background: #fff;
        transition: border-color 0.2s, box-shadow 0.2s;
        outline: none;
        appearance: none;
        -webkit-appearance: none;
    }
    .form-control-custom:focus {
        border-color: #4361ee;
        box-shadow: 0 0 0 3px rgba(67,97,238,0.10);
    }
    .form-control-custom::placeholder { color: #b0bac9; }
    .form-control-custom.is-invalid { border-color: #e7515a; }
    .form-control-custom.is-invalid:focus { box-shadow: 0 0 0 3px rgba(231,81,90,0.10); }

    textarea.form-control-custom { resize: vertical; min-height: 100px; line-height: 1.6; }

    /* Select arrow */
    .select-wrap { position: relative; }
    .select-wrap::after {
        content: '';
        position: absolute;
        right: 14px;
        top: 50%;
        transform: translateY(-50%);
        width: 0; height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid #888ea8;
        pointer-events: none;
    }
    .select-wrap select { padding-right: 36px; cursor: pointer; }

    /* ===== IMAGE UPLOAD ===== */
    .upload-zone {
        border: 2px dashed #d0d5f5;
        border-radius: 12px;
        padding: 32px 20px;
        text-align: center;
        cursor: pointer;
        transition: border-color 0.2s, background 0.2s;
        background: #fafbff;
        position: relative;
    }
    .upload-zone:hover, .upload-zone.drag-over {
        border-color: #4361ee;
        background: #f0f3ff;
    }
    .upload-zone input[type="file"] {
        position: absolute;
        inset: 0;
        opacity: 0;
        cursor: pointer;
        width: 100%;
        height: 100%;
    }
    .upload-zone .upload-icon {
        width: 48px; height: 48px;
        border-radius: 12px;
        background: linear-gradient(135deg, #eef0ff 0%, #f3e8ff 100%);
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 12px;
    }
    .upload-zone .upload-icon svg { color: #4361ee; width: 22px; height: 22px; }
    .upload-zone p.upload-title {
        font-size: 0.9rem; font-weight: 700; color: #1a1f36; margin: 0 0 4px;
    }
    .upload-zone p.upload-sub {
        font-size: 0.78rem; color: #888ea8; margin: 0;
    }
    .upload-zone p.upload-sub span { color: #4361ee; font-weight: 600; }

    /* Image preview */
    #imagePreviewWrap {
        display: none;
        margin-top: 14px;
        border-radius: 10px;
        overflow: hidden;
        border: 1.5px solid #e0e6ed;
        position: relative;
    }
    #imagePreviewWrap img {
        width: 100%;
        max-height: 220px;
        object-fit: cover;
        display: block;
    }
    .preview-remove-btn {
        position: absolute;
        top: 8px; right: 8px;
        width: 28px; height: 28px;
        border-radius: 50%;
        background: rgba(231,81,90,0.9);
        border: none; cursor: pointer;
        display: flex; align-items: center; justify-content: center;
        color: #fff; transition: background 0.2s;
    }
    .preview-remove-btn:hover { background: #e7515a; }

    /* ===== RADIO TOGGLE (Featured / Status) ===== */
    .radio-toggle-group {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }
    .radio-toggle-group input[type="radio"] { display: none; }
    .radio-toggle-group label {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 9px 20px;
        border-radius: 9px;
        border: 1.5px solid #e0e6ed;
        font-size: 0.85rem;
        font-weight: 600;
        color: #515365;
        cursor: pointer;
        transition: border-color 0.18s, background 0.18s, color 0.18s;
        background: #fff;
        user-select: none;
    }
    .radio-toggle-group label .dot {
        width: 9px; height: 9px;
        border-radius: 50%;
        background: #d0d5e8;
        transition: background 0.18s;
        flex-shrink: 0;
    }
    /* Yes / Active — green */
    .radio-toggle-group input[value="yes"]:checked + label,
    .radio-toggle-group input[value="active"]:checked + label {
        border-color: #00ab55;
        background: #e0f7ea;
        color: #00ab55;
    }
    .radio-toggle-group input[value="yes"]:checked + label .dot,
    .radio-toggle-group input[value="active"]:checked + label .dot { background: #00ab55; }
    /* No / Inactive — red */
    .radio-toggle-group input[value="no"]:checked + label,
    .radio-toggle-group input[value="inactive"]:checked + label {
        border-color: #e7515a;
        background: #fde9e9;
        color: #e7515a;
    }
    .radio-toggle-group input[value="no"]:checked + label .dot,
    .radio-toggle-group input[value="inactive"]:checked + label .dot { background: #e7515a; }

    /* ===== DISPLAY ORDER stepper ===== */
    .order-stepper {
        display: flex;
        align-items: center;
        gap: 0;
        width: fit-content;
    }
    .order-stepper button {
        width: 38px; height: 42px;
        border: 1.5px solid #e0e6ed;
        background: #f8f9ff;
        color: #4361ee;
        font-size: 1.2rem;
        font-weight: 700;
        cursor: pointer;
        transition: background 0.15s;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }
    .order-stepper button:first-child { border-radius: 10px 0 0 10px; border-right: none; }
    .order-stepper button:last-child  { border-radius: 0 10px 10px 0; border-left: none; }
    .order-stepper button:hover { background: #eef0ff; }
    .order-stepper input {
        width: 64px;
        border: 1.5px solid #e0e6ed;
        border-left: none; border-right: none;
        border-radius: 0;
        text-align: center;
        padding: 11px 0;
        font-size: 0.92rem;
        font-weight: 700;
        color: #1a1f36;
        outline: none;
        background: #fff;
    }
    .order-stepper input:focus { border-color: #4361ee; box-shadow: none; }

    /* ===== Category badge preview ===== */
    .category-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        margin-top: 8px;
        transition: all 0.2s;
    }
    .category-badge.web-app    { background: #e8f0fe; color: #1877f2; }
    .category-badge.mobile-app { background: #e0f7ea; color: #00ab55; }
    .category-badge.cloud      { background: #eef0ff; color: #4361ee; }
    .category-badge.ai-ml      { background: #f3e8ff; color: #805dca; }

    /* Divider & section label */
    .form-divider { border: none; border-top: 1px solid #f0f1f5; margin: 8px 0 24px 0; }
    .form-section-label {
        font-size: 0.72rem;
        font-weight: 800;
        color: #b0bac9;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        margin-bottom: 16px;
        display: block;
    }

    /* Char counter */
    .char-counter { font-size: 0.75rem; color: #b0bac9; text-align: right; margin-top: 4px; }

    /* Feedback */
    .field-hint  { font-size: 0.77rem; color: #888ea8; margin-top: 5px; }
    .field-error { font-size: 0.77rem; color: #e7515a; margin-top: 5px; display: none; }
    .form-control-custom.is-invalid ~ .field-error { display: block; }

    /* ===== ACTION BUTTONS ===== */
    .form-actions {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 10px;
        padding-top: 20px;
        border-top: 1px solid #f0f1f5;
        margin-top: 4px;
        flex-wrap: wrap;
    }
    .btn-reset {
        background: #f0f2ff;
        color: #4361ee;
        border: none;
        border-radius: 9px;
        padding: 11px 24px;
        font-size: 0.875rem;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 7px;
    }
    .btn-reset:hover { background: #e0e5ff; }
    .btn-submit {
        background: linear-gradient(135deg, #4361ee 0%, #805dca 100%);
        color: #fff;
        border: none;
        border-radius: 9px;
        padding: 11px 28px;
        font-size: 0.875rem;
        font-weight: 600;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: box-shadow 0.2s, transform 0.15s;
        box-shadow: 0 4px 14px rgba(67,97,238,0.28);
    }
    .btn-submit:hover { box-shadow: 0 6px 20px rgba(67,97,238,0.40); transform: translateY(-1px); }
    .btn-submit .spinner {
        display: none;
        width: 16px; height: 16px;
        border: 2px solid rgba(255,255,255,0.4);
        border-top-color: #fff;
        border-radius: 50%;
        animation: spin 0.6s linear infinite;
    }
    @keyframes spin { to { transform: rotate(360deg); } }

    /* ===== DARK MODE ===== */
    [data-theme="dark"] .page-heading-section h2              { color: #e0e6ed; }
    [data-theme="dark"] .form-card                            { background: #0e1726; border-color: #1b2e4b; }
    [data-theme="dark"] .form-card-header                     { background: #0a1122; border-color: #1b2e4b; }
    [data-theme="dark"] .form-card-header h5                  { color: #bfc9d4; }
    [data-theme="dark"] .form-control-custom                  { background: #1b2e4b; border-color: #253a55; color: #bfc9d4; }
    [data-theme="dark"] .form-control-custom:focus            { border-color: #4361ee; }
    [data-theme="dark"] .form-label-custom                    { color: #a3b2c5; }
    [data-theme="dark"] .upload-zone                          { background: #0a1122; border-color: #253a55; }
    [data-theme="dark"] .upload-zone:hover                    { background: #111d35; border-color: #4361ee; }
    [data-theme="dark"] .upload-zone p.upload-title           { color: #bfc9d4; }
    [data-theme="dark"] .radio-toggle-group label             { background: #1b2e4b; border-color: #253a55; color: #a3b2c5; }
    [data-theme="dark"] .order-stepper button                 { background: #1b2e4b; border-color: #253a55; }
    [data-theme="dark"] .order-stepper input                  { background: #0e1726; border-color: #253a55; color: #bfc9d4; }
    [data-theme="dark"] .form-actions                         { border-color: #1b2e4b; }
    [data-theme="dark"] .form-divider                         { border-color: #1b2e4b; }
    [data-theme="dark"] #imagePreviewWrap                     { border-color: #253a55; }
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
                        <div class="breadcrumbs-container" data-page-heading="Add Project">
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
                                               <li class="breadcrumb-item"><a href="#">Project Categories</a></li>
                                                <li class="breadcrumb-item"><a href="Project_Categories_Management.php">Manage Categories</a></li>
                                                <li class="breadcrumb-item active">Add Category</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </header>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">

                            <!-- PAGE HEADING -->
                            <div class="page-heading-section">
                                <div class="page-title-wrap">
                                    <div class="page-title-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/>
                                            <rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h2>Add Project Category</h2>
                                        <p class="subtitle">Create and manage project categories</p>
                                    </div>
                                </div>
                                <a href="Project_Categories_Management.php" class="btn-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                                    Back to Categories
                                </a>
                            </div>

                            <!-- FORM CARD -->
                            <div class="form-card">

                                <div class="form-card-header">
                                    <div class="form-card-header-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/>
                                            <rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5>Category Information</h5>
                                        <p>All fields marked with <span style="color:#e7515a;">*</span> are required</p>
                                    </div>
                                </div>

                                <div class="form-card-body">
                                    <form id="categoryForm" method="POST" action="save_project_category.php" enctype="multipart/form-data" novalidate>
                                        <?php
                                            if (empty($_SESSION['csrf_token'])) {
                                                $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                                            }
                                        ?>
                                        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

                                        <!-- ─── SECTION: Core Info ─── -->
                                        <span class="form-section-label">Core Details</span>
                                        <div class="row">

                                            <!-- Category Name -->
                                            <div class="col-md-6">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom">
                                                        Category Name <span class="required">*</span>
                                                    </label>

                                                    <input
                                                        type="text"
                                                        class="form-control-custom"
                                                        name="category_name"
                                                        placeholder="Enter Category Name"
                                                        required>

                                                    <div class="field-hint">
                                                        Example: Web Apps, Mobile, Cloud, AI / ML
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Display Order -->
                                            <div class="col-md-3">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom">
                                                        Display Order <span class="required">*</span>
                                                    </label>

                                                    <input
                                                        type="number"
                                                        class="form-control-custom"
                                                        name="display_order"
                                                        value="1"
                                                        min="1"
                                                        required>
                                                </div>
                                            </div>

                                           
                                        </div>

                                        <hr class="form-divider">
                                        <!-- ─── SECTION: Button / Link ─── -->
                                       

                                       

                                        <hr class="form-divider">
                                        
                                        

                                        <div class="row align-items-start">

                                           

                                           

                                            <!-- Status -->
                                            <div class="col-md-4">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom">Status <span class="required">*</span></label>
                                                    <div class="radio-toggle-group">
                                                        <input type="radio" id="status_active" name="status" value="active" checked required>
                                                        <label for="status_active">
                                                            <span class="dot"></span> Active
                                                        </label>
                                                        <input type="radio" id="status_inactive" name="status" value="inactive">
                                                        <label for="status_inactive">
                                                            <span class="dot"></span> Inactive
                                                        </label>
                                                    </div>
                                                    <div class="field-hint">Active projects are publicly visible</div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- FORM ACTIONS -->
                                        <div class="form-actions">
                                            <button type="button" class="btn-reset" onclick="resetForm()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 .49-3.5"/></svg>
                                                Reset
                                            </button>
                                            <button type="submit" class="btn-submit" id="submitBtn">
                                                <span class="spinner" id="submitSpinner"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="submitIcon"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v14z"/><polyline points="17 21 17 13 7 13"/><polyline points="7 3 7 8 15 8"/></svg>
                                                Save Category
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <!-- end form-card -->

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

    <script>
        /* ── Category badge ── */
        const categoryLabels = {
            web_app:    { cls: 'web-app',    text: 'Web App' },
            mobile_app: { cls: 'mobile-app', text: 'Mobile App' },
            cloud:      { cls: 'cloud',      text: 'Cloud' },
            ai_ml:      { cls: 'ai-ml',      text: 'AI / ML' }
        };
        function updateCategoryBadge() {
            const sel   = document.getElementById('project_category');
            const wrap  = document.getElementById('categoryBadgeWrap');
            const badge = document.getElementById('categoryBadge');
            if (!sel.value) { wrap.style.display = 'none'; return; }
            const info = categoryLabels[sel.value];
            badge.className = 'category-badge ' + info.cls;
            badge.textContent = info.text;
            wrap.style.display = 'block';
        }

        /* ── Image preview ── */
        function previewImage(input) {
            const file = input.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').src = e.target.result;
                document.getElementById('imagePreviewWrap').style.display = 'block';
                document.getElementById('uploadZone').style.display = 'none';
            };
            reader.readAsDataURL(file);
        }
        function removeImage() {
            document.getElementById('project_image').value = '';
            document.getElementById('imagePreviewWrap').style.display = 'none';
            document.getElementById('uploadZone').style.display = 'block';
        }

        /* ── Drag & drop enhancement ── */
        const zone = document.getElementById('uploadZone');
        zone.addEventListener('dragover', e => { e.preventDefault(); zone.classList.add('drag-over'); });
        zone.addEventListener('dragleave', () => zone.classList.remove('drag-over'));
        zone.addEventListener('drop', e => {
            e.preventDefault();
            zone.classList.remove('drag-over');
            const file = e.dataTransfer.files[0];
            if (file && file.type.startsWith('image/')) {
                const dt = new DataTransfer();
                dt.items.add(file);
                document.getElementById('project_image').files = dt.files;
                previewImage(document.getElementById('project_image'));
            }
        });

        /* ── Display order stepper ── */
        function changeOrder(delta) {
            const input = document.getElementById('display_order');
            let val = parseInt(input.value) + delta;
            if (val < 1) val = 1;
            if (val > 999) val = 999;
            input.value = val;
        }

        /* ── Char counter ── */
        function countChars(fieldId, counterId, max) {
            const val = document.getElementById(fieldId).value.length;
            document.getElementById(counterId).textContent = val;
            const wrap = document.getElementById(counterId).closest('.char-counter');
            if (wrap) wrap.style.color = val >= max * 0.9 ? '#e7515a' : '#b0bac9';
        }

        /* ── Reset ── */
        function resetForm() {
            document.getElementById('projectForm').reset();
            removeImage();
            document.getElementById('categoryBadgeWrap').style.display = 'none';
            ['titleCount','descCount'].forEach(id => {
                const el = document.getElementById(id);
                if (el) el.textContent = '0';
            });
            document.getElementById('display_order').value = 1;
            document.querySelectorAll('.form-control-custom').forEach(el => el.classList.remove('is-invalid'));
            document.querySelectorAll('.field-error').forEach(el => el.style.display = 'none');
        }

        /* ── Validation ── */
        document.getElementById('projectForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let valid = true;

            // Text / select fields
            const textFields = [
                { id: 'project_title',       check: v => v.trim() !== '' },
                { id: 'project_category',    check: v => v !== '' },
                { id: 'project_description', check: v => v.trim() !== '' },
            ];
            textFields.forEach(f => {
                const el  = document.getElementById(f.id);
                const err = document.getElementById(f.id + '-error');
                if (!f.check(el.value)) {
                    el.classList.add('is-invalid');
                    if (err) err.style.display = 'block';
                    valid = false;
                } else {
                    el.classList.remove('is-invalid');
                    if (err) err.style.display = 'none';
                }
            });

            // Image
            const imgInput = document.getElementById('project_image');
            const imgErr   = document.getElementById('project_image-error');
            if (!imgInput.files || !imgInput.files[0]) {
                imgErr.style.display = 'block';
                valid = false;
            } else {
                imgErr.style.display = 'none';
            }

            // Optional URL validation
            const linkEl  = document.getElementById('button_link');
            const linkErr = document.getElementById('button_link-error');
            if (linkEl.value.trim() !== '' && !/^https?:\/\/.+/.test(linkEl.value.trim())) {
                linkEl.classList.add('is-invalid');
                linkErr.style.display = 'block';
                valid = false;
            } else {
                linkEl.classList.remove('is-invalid');
                linkErr.style.display = 'none';
            }

            if (!valid) return;

            // Loading state
            const btn     = document.getElementById('submitBtn');
            const spinner = document.getElementById('submitSpinner');
            const icon    = document.getElementById('submitIcon');
            btn.disabled          = true;
            spinner.style.display = 'block';
            icon.style.display    = 'none';

            this.submit();
        });

        // Live clear on blur
        ['project_title','project_category','project_description','button_link'].forEach(function(id) {
            const el = document.getElementById(id);
            if (!el) return;
            el.addEventListener('blur', function() {
                if (this.value.trim() !== '') {
                    this.classList.remove('is-invalid');
                    const err = document.getElementById(id + '-error');
                    if (err) err.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>