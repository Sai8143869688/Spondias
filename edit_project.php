<?php include ("includes/header.php"); ?>
<?php
// Fetch project by ID — replace with your DB query
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Sample data — replace with real DB fetch
$project = [
    "id"          => $id,
    "title"       => "HealthTech Super App",
    "description" => "AI-powered health tracking platform for 2M+ users.",
    "category"    => "ai_ml",
    "image"       => "",           // existing image path e.g. "uploads/projects/healthtech.jpg"
    "button_text" => "View Project",
    "button_link" => "https://example.com/healthtech",
    "featured"    => true,
    "order"       => 1,
    "status"      => "active",
];
?>

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
    .page-heading-section .page-title-wrap { display: flex; align-items: center; gap: 14px; }
    .page-heading-section .page-title-icon {
        width: 44px; height: 44px;
        border-radius: 12px;
        background: linear-gradient(135deg, #4361ee 0%, #805dca 100%);
        display: flex; align-items: center; justify-content: center;
        box-shadow: 0 4px 14px rgba(67,97,238,0.35);
        flex-shrink: 0;
    }
    .page-heading-section .page-title-icon svg { color: #fff; width: 22px; height: 22px; }
    .page-heading-section h2 { font-size: 1.35rem; font-weight: 700; color: #1a1f36; margin: 0; letter-spacing: -0.3px; }
    .page-heading-section p.subtitle { font-size: 0.82rem; color: #888ea8; margin: 0; }

    .btn-back {
        background: #f0f2ff; color: #4361ee;
        border: none; border-radius: 8px;
        padding: 9px 18px; font-size: 0.85rem; font-weight: 600;
        display: inline-flex; align-items: center; gap: 7px;
        cursor: pointer; transition: background 0.2s, transform 0.15s;
        text-decoration: none;
    }
    .btn-back:hover { background: #e0e5ff; transform: translateX(-2px); color: #4361ee; }

    /* ===== FORM CARD ===== */
    .form-card {
        background: #fff; border-radius: 14px;
        box-shadow: 0 2px 20px rgba(31,45,61,0.08);
        border: 1px solid #f0f1f5; overflow: hidden;
    }
    .form-card-header {
        padding: 20px 26px 18px; border-bottom: 1px solid #f0f1f5;
        display: flex; align-items: center; gap: 12px;
        background: #fafbff;
    }
    .form-card-header-icon {
        width: 38px; height: 38px; border-radius: 10px;
        background: linear-gradient(135deg, #e9a33b 0%, #f5c76e 100%);
        display: flex; align-items: center; justify-content: center; flex-shrink: 0;
    }
    .form-card-header-icon svg { color: #fff; width: 18px; height: 18px; }
    .form-card-header h5 { font-size: 1rem; font-weight: 700; color: #1a1f36; margin: 0; }
    .form-card-header p { font-size: 0.78rem; color: #888ea8; margin: 0; }

    /* Edit indicator pill */
    .edit-pill {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 4px 12px; border-radius: 20px;
        background: #fff8e6; color: #e9a33b;
        font-size: 0.75rem; font-weight: 700;
        letter-spacing: 0.3px; margin-left: auto;
    }
    .edit-pill svg { width: 12px; height: 12px; }

    .form-card-body { padding: 28px 26px; }

    /* ===== FORM ELEMENTS ===== */
    .form-group-custom { margin-bottom: 22px; }
    .form-label-custom {
        display: block; font-size: 0.82rem; font-weight: 700;
        color: #515365; margin-bottom: 8px;
        text-transform: uppercase; letter-spacing: 0.5px;
    }
    .form-label-custom span.required { color: #e7515a; margin-left: 2px; }

    .input-icon-wrap { position: relative; display: flex; align-items: center; }
    .input-icon-wrap .input-prefix-icon {
        position: absolute; left: 13px;
        display: flex; align-items: center;
        pointer-events: none; color: #888ea8; width: 18px; height: 18px;
    }
    .input-icon-wrap input,
    .input-icon-wrap select,
    .input-icon-wrap textarea { padding-left: 40px; }

    .form-control-custom {
        width: 100%; border: 1.5px solid #e0e6ed; border-radius: 10px;
        padding: 11px 14px; font-size: 0.875rem; color: #3b3f5c;
        background: #fff; transition: border-color 0.2s, box-shadow 0.2s;
        outline: none; appearance: none; -webkit-appearance: none;
    }
    .form-control-custom:focus { border-color: #4361ee; box-shadow: 0 0 0 3px rgba(67,97,238,0.10); }
    .form-control-custom::placeholder { color: #b0bac9; }
    .form-control-custom.is-invalid { border-color: #e7515a; }
    .form-control-custom.is-invalid:focus { box-shadow: 0 0 0 3px rgba(231,81,90,0.10); }

    textarea.form-control-custom { resize: vertical; min-height: 100px; line-height: 1.6; }

    .select-wrap { position: relative; }
    .select-wrap::after {
        content: ''; position: absolute; right: 14px; top: 50%;
        transform: translateY(-50%); width: 0; height: 0;
        border-left: 5px solid transparent; border-right: 5px solid transparent;
        border-top: 5px solid #888ea8; pointer-events: none;
    }
    .select-wrap select { padding-right: 36px; cursor: pointer; }

    /* ===== CURRENT IMAGE PREVIEW ===== */
    .current-image-card {
        border: 1.5px solid #e8ecff; border-radius: 12px;
        overflow: hidden; background: #fafbff; margin-bottom: 14px;
    }
    .current-image-card .img-label {
        padding: 8px 14px; font-size: 0.75rem; font-weight: 700;
        color: #888ea8; text-transform: uppercase; letter-spacing: 0.5px;
        border-bottom: 1px solid #f0f1f5; display: flex; align-items: center; gap: 6px;
    }
    .current-image-card .img-label svg { width: 13px; height: 13px; color: #4361ee; }
    .current-image-card .img-body { padding: 12px; }
    .current-image-card img {
        width: 100%; max-height: 200px; object-fit: cover;
        border-radius: 8px; display: block;
    }
    .current-image-placeholder {
        width: 100%; height: 120px; border-radius: 8px;
        background: linear-gradient(135deg, #eef0ff 0%, #f3e8ff 100%);
        display: flex; flex-direction: column; align-items: center; justify-content: center;
        gap: 8px; color: #888ea8;
    }
    .current-image-placeholder svg { width: 30px; height: 30px; color: #c5caee; }
    .current-image-placeholder span { font-size: 0.78rem; }

    /* Upload zone */
    .upload-zone {
        border: 2px dashed #d0d5f5; border-radius: 12px;
        padding: 22px 20px; text-align: center; cursor: pointer;
        transition: border-color 0.2s, background 0.2s;
        background: #fafbff; position: relative;
    }
    .upload-zone:hover, .upload-zone.drag-over { border-color: #4361ee; background: #f0f3ff; }
    .upload-zone input[type="file"] {
        position: absolute; inset: 0; opacity: 0; cursor: pointer; width: 100%; height: 100%;
    }
    .upload-zone .upload-icon {
        width: 40px; height: 40px; border-radius: 10px;
        background: linear-gradient(135deg, #eef0ff 0%, #f3e8ff 100%);
        display: flex; align-items: center; justify-content: center; margin: 0 auto 10px;
    }
    .upload-zone .upload-icon svg { color: #4361ee; width: 18px; height: 18px; }
    .upload-zone p.upload-title { font-size: 0.88rem; font-weight: 700; color: #1a1f36; margin: 0 0 4px; }
    .upload-zone p.upload-sub   { font-size: 0.77rem; color: #888ea8; margin: 0; }
    .upload-zone p.upload-sub span { color: #4361ee; font-weight: 600; }

    /* New image preview */
    #newImagePreviewWrap {
        display: none; margin-top: 12px; border-radius: 10px;
        overflow: hidden; border: 1.5px solid #e0e6ed; position: relative;
    }
    #newImagePreviewWrap img { width: 100%; max-height: 200px; object-fit: cover; display: block; }
    .preview-remove-btn {
        position: absolute; top: 8px; right: 8px;
        width: 28px; height: 28px; border-radius: 50%;
        background: rgba(231,81,90,0.9); border: none; cursor: pointer;
        display: flex; align-items: center; justify-content: center;
        color: #fff; transition: background 0.2s;
    }
    .preview-remove-btn:hover { background: #e7515a; }

    /* ===== CATEGORY BADGE ===== */
    .category-badge {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 4px 12px; border-radius: 20px;
        font-size: 0.75rem; font-weight: 600; margin-top: 8px; transition: all 0.2s;
    }
    .category-badge.web-app    { background: #e8f0fe; color: #1877f2; }
    .category-badge.mobile-app { background: #e0f7ea; color: #00ab55; }
    .category-badge.cloud      { background: #eef0ff; color: #4361ee; }
    .category-badge.ai-ml      { background: #f3e8ff; color: #805dca; }

    /* ===== RADIO TOGGLES ===== */
    .radio-toggle-group { display: flex; gap: 10px; flex-wrap: wrap; }
    .radio-toggle-group input[type="radio"] { display: none; }
    .radio-toggle-group label {
        display: inline-flex; align-items: center; gap: 7px;
        padding: 9px 20px; border-radius: 9px; border: 1.5px solid #e0e6ed;
        font-size: 0.85rem; font-weight: 600; color: #515365;
        cursor: pointer; transition: border-color 0.18s, background 0.18s, color 0.18s;
        background: #fff; user-select: none;
    }
    .radio-toggle-group label .dot {
        width: 9px; height: 9px; border-radius: 50%;
        background: #d0d5e8; transition: background 0.18s; flex-shrink: 0;
    }
    .radio-toggle-group input[value="yes"]:checked + label,
    .radio-toggle-group input[value="active"]:checked + label {
        border-color: #00ab55; background: #e0f7ea; color: #00ab55;
    }
    .radio-toggle-group input[value="yes"]:checked + label .dot,
    .radio-toggle-group input[value="active"]:checked + label .dot { background: #00ab55; }
    .radio-toggle-group input[value="no"]:checked + label,
    .radio-toggle-group input[value="inactive"]:checked + label {
        border-color: #e7515a; background: #fde9e9; color: #e7515a;
    }
    .radio-toggle-group input[value="no"]:checked + label .dot,
    .radio-toggle-group input[value="inactive"]:checked + label .dot { background: #e7515a; }

    /* ===== ORDER STEPPER ===== */
    .order-stepper { display: flex; align-items: center; width: fit-content; }
    .order-stepper button {
        width: 38px; height: 42px; border: 1.5px solid #e0e6ed;
        background: #f8f9ff; color: #4361ee; font-size: 1.2rem; font-weight: 700;
        cursor: pointer; transition: background 0.15s;
        display: flex; align-items: center; justify-content: center; flex-shrink: 0;
    }
    .order-stepper button:first-child { border-radius: 10px 0 0 10px; border-right: none; }
    .order-stepper button:last-child  { border-radius: 0 10px 10px 0; border-left: none; }
    .order-stepper button:hover { background: #eef0ff; }
    .order-stepper input {
        width: 64px; border: 1.5px solid #e0e6ed; border-left: none; border-right: none;
        border-radius: 0; text-align: center; padding: 11px 0;
        font-size: 0.92rem; font-weight: 700; color: #1a1f36; outline: none; background: #fff;
    }

    /* Divider & section label */
    .form-divider { border: none; border-top: 1px solid #f0f1f5; margin: 8px 0 24px 0; }
    .form-section-label {
        font-size: 0.72rem; font-weight: 800; color: #b0bac9;
        text-transform: uppercase; letter-spacing: 1.2px;
        margin-bottom: 16px; display: block;
    }

    /* Char counter */
    .char-counter { font-size: 0.75rem; color: #b0bac9; text-align: right; margin-top: 4px; }

    /* Feedback */
    .field-hint  { font-size: 0.77rem; color: #888ea8; margin-top: 5px; }
    .field-error { font-size: 0.77rem; color: #e7515a; margin-top: 5px; display: none; }

    /* ===== ACTIONS ===== */
    .form-actions {
        display: flex; align-items: center; justify-content: space-between;
        gap: 10px; padding-top: 20px;
        border-top: 1px solid #f0f1f5; margin-top: 4px; flex-wrap: wrap;
    }
    .form-actions-left { display: flex; align-items: center; gap: 8px; }
    .form-actions-right { display: flex; align-items: center; gap: 10px; }

    .btn-delete-project {
        background: #fee8e8; color: #e7515a; border: none; border-radius: 9px;
        padding: 11px 20px; font-size: 0.875rem; font-weight: 600; cursor: pointer;
        display: inline-flex; align-items: center; gap: 7px;
        transition: background 0.2s;
    }
    .btn-delete-project:hover { background: #fcd6d7; }

    .btn-cancel {
        background: #f0f2ff; color: #4361ee; border: none; border-radius: 9px;
        padding: 11px 24px; font-size: 0.875rem; font-weight: 600; cursor: pointer;
        display: inline-flex; align-items: center; gap: 7px;
        transition: background 0.2s; text-decoration: none;
    }
    .btn-cancel:hover { background: #e0e5ff; color: #4361ee; }

    .btn-submit {
        background: linear-gradient(135deg, #e9a33b 0%, #f5c76e 100%);
        color: #fff; border: none; border-radius: 9px;
        padding: 11px 28px; font-size: 0.875rem; font-weight: 600; cursor: pointer;
        display: inline-flex; align-items: center; gap: 8px;
        transition: box-shadow 0.2s, transform 0.15s;
        box-shadow: 0 4px 14px rgba(233,163,59,0.30);
    }
    .btn-submit:hover { box-shadow: 0 6px 20px rgba(233,163,59,0.44); transform: translateY(-1px); }
    .btn-submit .spinner {
        display: none; width: 16px; height: 16px;
        border: 2px solid rgba(255,255,255,0.4); border-top-color: #fff;
        border-radius: 50%; animation: spin 0.6s linear infinite;
    }
    @keyframes spin { to { transform: rotate(360deg); } }

    /* ===== DARK MODE ===== */
    [data-theme="dark"] .page-heading-section h2         { color: #e0e6ed; }
    [data-theme="dark"] .form-card                       { background: #0e1726; border-color: #1b2e4b; }
    [data-theme="dark"] .form-card-header                { background: #0a1122; border-color: #1b2e4b; }
    [data-theme="dark"] .form-card-header h5             { color: #bfc9d4; }
    [data-theme="dark"] .form-control-custom             { background: #1b2e4b; border-color: #253a55; color: #bfc9d4; }
    [data-theme="dark"] .form-control-custom:focus       { border-color: #4361ee; }
    [data-theme="dark"] .form-label-custom               { color: #a3b2c5; }
    [data-theme="dark"] .upload-zone                     { background: #0a1122; border-color: #253a55; }
    [data-theme="dark"] .upload-zone:hover               { background: #111d35; border-color: #4361ee; }
    [data-theme="dark"] .upload-zone p.upload-title      { color: #bfc9d4; }
    [data-theme="dark"] .current-image-card              { background: #0a1122; border-color: #253a55; }
    [data-theme="dark"] .current-image-card .img-label   { border-color: #1b2e4b; color: #6b7a99; }
    [data-theme="dark"] .radio-toggle-group label        { background: #1b2e4b; border-color: #253a55; color: #a3b2c5; }
    [data-theme="dark"] .order-stepper button            { background: #1b2e4b; border-color: #253a55; }
    [data-theme="dark"] .order-stepper input             { background: #0e1726; border-color: #253a55; color: #bfc9d4; }
    [data-theme="dark"] .form-actions                    { border-color: #1b2e4b; }
    [data-theme="dark"] .form-divider                    { border-color: #1b2e4b; }
    [data-theme="dark"] #newImagePreviewWrap             { border-color: #253a55; }
    [data-theme="dark"] .edit-pill                       { background: #2a1f08; }
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
                        <div class="breadcrumbs-container" data-page-heading="Edit Project">
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
                                                <li class="breadcrumb-item"><a href="projects.php">Projects</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Edit Project</li>
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
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h2>Edit Project</h2>
                                        <p class="subtitle">Update the details for <strong><?= htmlspecialchars($project['title']) ?></strong></p>
                                    </div>
                                </div>
                                <a href="projects.php" class="btn-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                                    Back to Projects
                                </a>
                            </div>

                            <!-- FORM CARD -->
                            <div class="form-card">

                                <div class="form-card-header">
                                    <div class="form-card-header-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5>Project Information</h5>
                                        <p>All fields marked with <span style="color:#e7515a;">*</span> are required</p>
                                    </div>
                                    <span class="edit-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                        Editing ID #<?= $project['id'] ?>
                                    </span>
                                </div>

                                <div class="form-card-body">
                                    <form id="editProjectForm" method="POST" action="update_project.php" enctype="multipart/form-data" novalidate>
                                        <?php
                                            if (empty($_SESSION['csrf_token'])) {
                                                $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                                            }
                                        ?>
                                        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
                                        <input type="hidden" name="project_id" value="<?= $project['id'] ?>">
                                        <input type="hidden" name="existing_image" value="<?= htmlspecialchars($project['image']) ?>">

                                        <!-- ─── SECTION: Core Info ─── -->
                                        <span class="form-section-label">Core Details</span>

                                        <div class="row">
                                            <!-- Project Title -->
                                            <div class="col-md-8">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom" for="project_title">
                                                        Project Title <span class="required">*</span>
                                                    </label>
                                                    <div class="input-icon-wrap">
                                                        <span class="input-prefix-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            class="form-control-custom"
                                                            id="project_title"
                                                            name="project_title"
                                                            maxlength="120"
                                                            placeholder="e.g. HealthTech Super App"
                                                            value="<?= htmlspecialchars($project['title']) ?>"
                                                            required
                                                            oninput="countChars('project_title','titleCount',120)"
                                                        >
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-start mt-1">
                                                        <div class="field-error" id="project_title-error">Project title is required.</div>
                                                        <span class="char-counter"><span id="titleCount"><?= strlen($project['title']) ?></span>/120</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Category -->
                                            <div class="col-md-4">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom" for="project_category">
                                                        Category <span class="required">*</span>
                                                    </label>
                                                    <div class="select-wrap input-icon-wrap">
                                                        <span class="input-prefix-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
                                                        </span>
                                                        <select
                                                            class="form-control-custom"
                                                            id="project_category"
                                                            name="project_category"
                                                            required
                                                            onchange="updateCategoryBadge()"
                                                        >
                                                            <option value="" disabled>— Select —</option>
                                                            <option value="web_app"    <?= $project['category']==='web_app'    ? 'selected' : '' ?>>Web App</option>
                                                            <option value="mobile_app" <?= $project['category']==='mobile_app' ? 'selected' : '' ?>>Mobile App</option>
                                                            <option value="cloud"      <?= $project['category']==='cloud'      ? 'selected' : '' ?>>Cloud</option>
                                                            <option value="ai_ml"      <?= $project['category']==='ai_ml'      ? 'selected' : '' ?>>AI / ML</option>
                                                        </select>
                                                    </div>
                                                    <div id="categoryBadgeWrap">
                                                        <span class="category-badge" id="categoryBadge"></span>
                                                    </div>
                                                    <div class="field-error" id="project_category-error">Please select a category.</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Description -->
                                        <div class="form-group-custom">
                                            <label class="form-label-custom" for="project_description">
                                                Project Description <span class="required">*</span>
                                            </label>
                                            <div class="input-icon-wrap" style="align-items:flex-start;">
                                                <span class="input-prefix-icon" style="top:13px; position:absolute;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                                                </span>
                                                <textarea
                                                    class="form-control-custom"
                                                    id="project_description"
                                                    name="project_description"
                                                    maxlength="500"
                                                    rows="4"
                                                    placeholder="e.g. AI-powered health tracking platform for 2M+ users."
                                                    required
                                                    oninput="countChars('project_description','descCount',500)"
                                                ><?= htmlspecialchars($project['description']) ?></textarea>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-start mt-1">
                                                <div class="field-error" id="project_description-error">Project description is required.</div>
                                                <span class="char-counter"><span id="descCount"><?= strlen($project['description']) ?></span>/500</span>
                                            </div>
                                        </div>

                                        <!-- Project Image -->
                                        <div class="form-group-custom">
                                            <label class="form-label-custom">Project Image</label>

                                            <!-- Current image -->
                                            <div class="current-image-card">
                                                <div class="img-label">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                                                    Current Image
                                                </div>
                                                <div class="img-body">
                                                    <?php if (!empty($project['image'])): ?>
                                                        <img src="<?= htmlspecialchars($project['image']) ?>" alt="Current project image" id="currentImageEl">
                                                    <?php else: ?>
                                                        <div class="current-image-placeholder">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                                                            <span>No image uploaded yet</span>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <!-- Replace image -->
                                            <p class="field-hint" style="margin-bottom:10px;">Upload a new image to replace the current one. Leave empty to keep the existing image.</p>
                                            <div class="upload-zone" id="uploadZone">
                                                <input type="file" id="project_image" name="project_image" accept="image/*" onchange="previewImage(this)">
                                                <div class="upload-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 16 12 12 8 16"/><line x1="12" y1="12" x2="12" y2="21"/><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"/></svg>
                                                </div>
                                                <p class="upload-title">Replace image</p>
                                                <p class="upload-sub">Drag & drop or <span>browse</span> &nbsp;·&nbsp; PNG, JPG, WebP up to 5 MB</p>
                                            </div>
                                            <div id="newImagePreviewWrap">
                                                <img id="newImagePreview" src="" alt="New image preview">
                                                <button type="button" class="preview-remove-btn" onclick="removeNewImage()" title="Remove new image">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                                                </button>
                                            </div>
                                        </div>

                                        <hr class="form-divider">
                                        <!-- ─── SECTION: CTA ─── -->
                                        <span class="form-section-label">Call to Action</span>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom" for="button_text">Button Text</label>
                                                    <div class="input-icon-wrap">
                                                        <span class="input-prefix-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="10" rx="3"/><line x1="7" y1="12" x2="17" y2="12"/></svg>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            class="form-control-custom"
                                                            id="button_text"
                                                            name="button_text"
                                                            maxlength="40"
                                                            placeholder="e.g. View Project"
                                                            value="<?= htmlspecialchars($project['button_text']) ?>"
                                                        >
                                                    </div>
                                                    <div class="field-hint">Label shown on the CTA button</div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom" for="button_link">Button Link</label>
                                                    <div class="input-icon-wrap">
                                                        <span class="input-prefix-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                                                        </span>
                                                        <input
                                                            type="url"
                                                            class="form-control-custom"
                                                            id="button_link"
                                                            name="button_link"
                                                            placeholder="e.g. https://example.com/project"
                                                            value="<?= htmlspecialchars($project['button_link']) ?>"
                                                        >
                                                    </div>
                                                    <div class="field-hint">Full URL including https://</div>
                                                    <div class="field-error" id="button_link-error">Please enter a valid URL.</div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="form-divider">
                                        <!-- ─── SECTION: Settings ─── -->
                                        <span class="form-section-label">Display Settings</span>

                                        <div class="row align-items-start">

                                            <!-- Featured -->
                                            <div class="col-md-4">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom">Featured Project <span class="required">*</span></label>
                                                    <div class="radio-toggle-group">
                                                        <input type="radio" id="featured_yes" name="featured" value="yes" <?= $project['featured'] ? 'checked' : '' ?> required>
                                                        <label for="featured_yes"><span class="dot"></span> Yes</label>
                                                        <input type="radio" id="featured_no" name="featured" value="no" <?= !$project['featured'] ? 'checked' : '' ?>>
                                                        <label for="featured_no"><span class="dot"></span> No</label>
                                                    </div>
                                                    <div class="field-hint">Featured projects appear at the top</div>
                                                </div>
                                            </div>

                                            <!-- Display Order -->
                                            <div class="col-md-4">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom" for="display_order">Display Order <span class="required">*</span></label>
                                                    <div class="order-stepper">
                                                        <button type="button" onclick="changeOrder(-1)" aria-label="Decrease">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/></svg>
                                                        </button>
                                                        <input type="number" id="display_order" name="display_order" value="<?= (int)$project['order'] ?>" min="1" max="999" required readonly>
                                                        <button type="button" onclick="changeOrder(1)" aria-label="Increase">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                                                        </button>
                                                    </div>
                                                    <div class="field-hint">Position in the project listing</div>
                                                </div>
                                            </div>

                                            <!-- Status -->
                                            <div class="col-md-4">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom">Status <span class="required">*</span></label>
                                                    <div class="radio-toggle-group">
                                                        <input type="radio" id="status_active" name="status" value="active" <?= $project['status']==='active' ? 'checked' : '' ?> required>
                                                        <label for="status_active"><span class="dot"></span> Active</label>
                                                        <input type="radio" id="status_inactive" name="status" value="inactive" <?= $project['status']==='inactive' ? 'checked' : '' ?>>
                                                        <label for="status_inactive"><span class="dot"></span> Inactive</label>
                                                    </div>
                                                    <div class="field-hint">Active projects are publicly visible</div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- FORM ACTIONS -->
                                        <div class="form-actions">
                                            <div class="form-actions-left">
                                                <button type="button" class="btn-delete-project" onclick="confirmDelete(<?= $project['id'] ?>)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/><path d="M9 6V4h6v2"/></svg>
                                                    Delete Project
                                                </button>
                                            </div>
                                            <div class="form-actions-right">
                                                <a href="projects.php" class="btn-cancel">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                                                    Cancel
                                                </a>
                                                <button type="submit" class="btn-submit" id="submitBtn">
                                                    <span class="spinner" id="submitSpinner"></span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="submitIcon"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v14z"/><polyline points="17 21 17 13 7 13"/><polyline points="7 3 7 8 15 8"/></svg>
                                                    Save Changes
                                                </button>
                                            </div>
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
        /* ── Category badge — init on load ── */
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
            badge.className   = 'category-badge ' + info.cls;
            badge.textContent = info.text;
            wrap.style.display = 'block';
        }
        // Run on page load to show badge for pre-selected value
        updateCategoryBadge();

        /* ── New image preview ── */
        function previewImage(input) {
            const file = input.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('newImagePreview').src = e.target.result;
                document.getElementById('newImagePreviewWrap').style.display = 'block';
                document.getElementById('uploadZone').style.display = 'none';
            };
            reader.readAsDataURL(file);
        }
        function removeNewImage() {
            document.getElementById('project_image').value = '';
            document.getElementById('newImagePreviewWrap').style.display = 'none';
            document.getElementById('uploadZone').style.display = 'block';
        }

        /* ── Drag & drop ── */
        const zone = document.getElementById('uploadZone');
        zone.addEventListener('dragover', e => { e.preventDefault(); zone.classList.add('drag-over'); });
        zone.addEventListener('dragleave', () => zone.classList.remove('drag-over'));
        zone.addEventListener('drop', e => {
            e.preventDefault(); zone.classList.remove('drag-over');
            const file = e.dataTransfer.files[0];
            if (file && file.type.startsWith('image/')) {
                const dt = new DataTransfer();
                dt.items.add(file);
                document.getElementById('project_image').files = dt.files;
                previewImage(document.getElementById('project_image'));
            }
        });

        /* ── Order stepper ── */
        function changeOrder(delta) {
            const input = document.getElementById('display_order');
            let val = parseInt(input.value) + delta;
            if (val < 1)   val = 1;
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

        /* ── Delete confirm ── */
        function confirmDelete(id) {
            if (confirm('Are you sure you want to permanently delete this project? This cannot be undone.')) {
                window.location.href = 'delete_project.php?id=' + id;
            }
        }

        /* ── Validation & submit ── */
        document.getElementById('editProjectForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let valid = true;

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

            // Optional URL
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