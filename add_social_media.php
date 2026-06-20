<!-- Header Start -->
<?php include ("includes/header.php"); ?>
<!-- Header Start -->

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
    .btn-back:hover {
        background: #e0e5ff;
        transform: translateX(-2px);
        color: #4361ee;
    }

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
    .form-card-header h5 {
        font-size: 1rem;
        font-weight: 700;
        color: #1a1f36;
        margin: 0;
    }
    .form-card-header p {
        font-size: 0.78rem;
        color: #888ea8;
        margin: 0;
    }
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

    /* Input wrapper with icon */
    .input-icon-wrap {
        position: relative;
        display: flex;
        align-items: center;
    }
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
    .input-icon-wrap textarea {
        padding-left: 40px;
    }

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

    /* Select arrow */
    .select-wrap { position: relative; }
    .select-wrap::after {
        content: '';
        position: absolute;
        right: 14px;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid #888ea8;
        pointer-events: none;
    }
    .select-wrap select { padding-right: 36px; cursor: pointer; }

    /* Platform icon preview */
    .platform-preview {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 14px;
        background: #f8f9ff;
        border-radius: 10px;
        border: 1.5px dashed #d0d5ee;
        min-height: 52px;
        margin-top: 10px;
        transition: all 0.2s;
    }
    .platform-preview .preview-icon-box {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        transition: background 0.2s;
        flex-shrink: 0;
    }
    .platform-preview .preview-text { font-size: 0.82rem; color: #888ea8; }
    .platform-preview .preview-name { font-size: 0.88rem; font-weight: 600; color: #3b3f5c; }

    /* Status toggle */
    .status-toggle-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 16px;
        background: #f8f9ff;
        border-radius: 10px;
        border: 1.5px solid #e8ecff;
    }
    .status-toggle-row .toggle-info h6 {
        font-size: 0.88rem;
        font-weight: 700;
        color: #1a1f36;
        margin: 0;
    }
    .status-toggle-row .toggle-info p {
        font-size: 0.78rem;
        color: #888ea8;
        margin: 0;
    }
    .toggle-switch {
        position: relative;
        width: 46px;
        height: 24px;
        flex-shrink: 0;
    }
    .toggle-switch input { display: none; }
    .toggle-slider {
        position: absolute;
        inset: 0;
        background: #d8dae5;
        border-radius: 24px;
        cursor: pointer;
        transition: background 0.22s;
    }
    .toggle-slider::before {
        content: '';
        position: absolute;
        width: 17px;
        height: 17px;
        border-radius: 50%;
        background: #fff;
        top: 3.5px;
        left: 3.5px;
        transition: transform 0.22s;
        box-shadow: 0 1px 4px rgba(0,0,0,0.18);
    }
    .toggle-switch input:checked + .toggle-slider { background: #00ab55; }
    .toggle-switch input:checked + .toggle-slider::before { transform: translateX(22px); }

    /* Divider */
    .form-divider {
        border: none;
        border-top: 1px solid #f0f1f5;
        margin: 8px 0 24px 0;
    }
    .form-section-label {
        font-size: 0.72rem;
        font-weight: 800;
        color: #b0bac9;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        margin-bottom: 16px;
        display: block;
    }

    /* Action buttons */
    .form-actions {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 10px;
        padding-top: 8px;
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
    .btn-submit:hover {
        box-shadow: 0 6px 20px rgba(67,97,238,0.40);
        transform: translateY(-1px);
    }
    .btn-submit .spinner {
        display: none;
        width: 16px;
        height: 16px;
        border: 2px solid rgba(255,255,255,0.4);
        border-top-color: #fff;
        border-radius: 50%;
        animation: spin 0.6s linear infinite;
    }
    @keyframes spin { to { transform: rotate(360deg); } }

    /* char counter */
    .char-counter { font-size: 0.75rem; color: #b0bac9; text-align: right; margin-top: 4px; }

    /* Feedback messages */
    .field-hint { font-size: 0.77rem; color: #888ea8; margin-top: 5px; }
    .field-error { font-size: 0.77rem; color: #e7515a; margin-top: 5px; display: none; }
    .form-control-custom.is-invalid + .field-error,
    .form-control-custom.is-invalid ~ .field-error { display: block; }

    /* Platform colour map */
    .platform-icon-wrap.facebook  { background: #e8f0fe; }
    .platform-icon-wrap.instagram { background: #fce4f3; }
    .platform-icon-wrap.github    { background: #f0f0f0; }
    .platform-icon-wrap.google    { background: #fde9e9; }
    .platform-icon-wrap.linkedin  { background: #dff0fb; }
    .platform-icon-wrap.whatsapp  { background: #e0f7ea; }
    .platform-icon-wrap.twitter   { background: #e6f4fd; }
    .platform-icon-wrap.youtube   { background: #fde8e8; }

    /* Dark mode */
    [data-theme="dark"] .page-heading-section h2 { color: #e0e6ed; }
    [data-theme="dark"] .form-card { background: #0e1726; border-color: #1b2e4b; }
    [data-theme="dark"] .form-card-header { background: #0a1122; border-color: #1b2e4b; }
    [data-theme="dark"] .form-card-header h5 { color: #bfc9d4; }
    [data-theme="dark"] .form-control-custom { background: #1b2e4b; border-color: #253a55; color: #bfc9d4; }
    [data-theme="dark"] .form-control-custom:focus { border-color: #4361ee; }
    [data-theme="dark"] .form-label-custom { color: #a3b2c5; }
    [data-theme="dark"] .status-toggle-row { background: #0a1122; border-color: #253a55; }
    [data-theme="dark"] .status-toggle-row .toggle-info h6 { color: #bfc9d4; }
    [data-theme="dark"] .platform-preview { background: #0a1122; border-color: #253a55; }
    [data-theme="dark"] .form-actions { border-color: #1b2e4b; }
    [data-theme="dark"] .form-divider { border-color: #1b2e4b; }
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
                        <div class="breadcrumbs-container" data-page-heading="Add Social Media Link">
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
                                                <li class="breadcrumb-item active" aria-current="page">Add Link</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </header>
                        </div>
                    </div>
                    <!--  END BREADCRUMBS  -->

                    <div class="row layout-top-spacing">
                        <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">

                            <!-- PAGE HEADING -->
                            <div class="page-heading-section">
                                <div class="page-title-wrap">
                                    <div class="page-title-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/>
                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/>
                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h2>Add Contact</h2>
                                        <p class="subtitle">Fill in the details below to add a new platform link</p>
                                    </div>
                                </div>
                                <a href="manage_contact.php" class="btn-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                                    Back to List
                                </a>
                            </div>
                            <!-- END PAGE HEADING -->

                            <!-- FORM CARD -->
                            <div class="form-card">

                                <div class="form-card-header">
                                    <div class="form-card-header-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                                    </div>
                                    <div>
                                        <h5>New Contact</h5>
                                        <p>All fields marked with <span style="color:#e7515a;">*</span> are required</p>
                                    </div>
                                </div>

                                <div class="form-card-body">
                                    <form id="socialMediaForm" method="POST" action="save_social_link.php" novalidate>
                                        <?php
                                            // CSRF token (assuming session is started in header.php)
                                            if (empty($_SESSION['csrf_token'])) {
                                                $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                                            }
                                        ?>
                                        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

                                        <!-- ─── SECTION: Platform ─── -->
                                        <span class="form-section-label">Platform Details</span>

                                        <div class="row">
                                            <!-- Platform Dropdown -->
                                            <div class="col-md-6">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom" for="platform">
                                                        Platform <span class="required">*</span>
                                                    </label>
                                                    <div class="select-wrap input-icon-wrap">
                                                        <span class="input-prefix-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
                                                        </span>
                                                        <select class="form-control-custom" id="platform" name="platform" required onchange="updatePreview()">
                                                            <option value="" disabled selected>— Select a platform —</option>
                                                            <option value="facebook"  data-icon="fa6-brands:facebook"  data-color="#e8f0fe" data-text="#1877f2">Facebook</option>
                                                            <option value="instagram" data-icon="fa6-brands:instagram" data-color="#fce4f3" data-text="#c13584">Instagram</option>
                                                            <option value="github"    data-icon="fa6-brands:github"    data-color="#f0f0f0" data-text="#24292e">GitHub</option>
                                                            <option value="google"    data-icon="fa6-brands:google"    data-color="#fde9e9" data-text="#ea4335">Google</option>
                                                            <option value="linkedin"  data-icon="fa6-brands:linkedin"  data-color="#dff0fb" data-text="#0a66c2">LinkedIn</option>
                                                            <option value="whatsapp"  data-icon="fa6-brands:whatsapp"  data-color="#e0f7ea" data-text="#25d366">WhatsApp</option>
                                                            <option value="twitter"   data-icon="fa6-brands:x-twitter" data-color="#e6f4fd" data-text="#1da1f2">Twitter / X</option>
                                                            <option value="youtube"   data-icon="fa6-brands:youtube"   data-color="#fde8e8" data-text="#ff0000">YouTube</option>
                                                        </select>
                                                    </div>
                                                    <div class="field-error" id="platform-error">Please select a platform.</div>

                                                    <!-- Live icon preview -->
                                                    <div class="platform-preview" id="platformPreview">
                                                        <div class="preview-icon-box" id="previewIconBox" style="background:#f0f1f5;">
                                                            <span class="iconify" id="previewIcon" data-icon="ph:image-duotone" style="color:#b0bac9;font-size:20px;"></span>
                                                        </div>
                                                        <span class="preview-text" id="previewLabel">Select a platform to preview its icon</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Tag / Display Name -->
                                            <div class="col-md-6">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom" for="tag">
                                                        Tag / Display Name <span class="required">*</span>
                                                    </label>
                                                    <div class="input-icon-wrap">
                                                        <span class="input-prefix-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
                                                        </span>
                                                        <input
                                                            type="text"
                                                            class="form-control-custom"
                                                            id="tag"
                                                            name="tag"
                                                            maxlength="50"
                                                            placeholder="e.g. Our LinkedIn Page"
                                                            required
                                                            oninput="countChars('tag','tagCount',50)"
                                                        >
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-start mt-1">
                                                        <div class="field-error" id="tag-error">Tag name is required.</div>
                                                        <span class="char-counter"><span id="tagCount">0</span>/50</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="form-divider">
                                        <!-- ─── SECTION: Link ─── -->
                                        <span class="form-section-label">Link &amp; Display</span>

                                        <div class="row">
                                            <!-- URL -->
                                            <div class="col-md-8">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom" for="link">
                                                        Profile / Page URL <span class="required">*</span>
                                                    </label>
                                                    <div class="input-icon-wrap">
                                                        <span class="input-prefix-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                                                        </span>
                                                        <input
                                                            type="url"
                                                            class="form-control-custom"
                                                            id="link"
                                                            name="link"
                                                            placeholder="https://linkedin.com/in/yourprofile"
                                                            required
                                                        >
                                                    </div>
                                                    <div class="field-hint">Enter the full URL including https://</div>
                                                    <div class="field-error" id="link-error">Please enter a valid URL.</div>
                                                </div>
                                            </div>

                                            <!-- Sort Order -->
                                            <div class="col-md-4">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom" for="sort_order">Sort Order</label>
                                                    <div class="input-icon-wrap">
                                                        <span class="input-prefix-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                                                        </span>
                                                        <input
                                                            type="number"
                                                            class="form-control-custom"
                                                            id="sort_order"
                                                            name="sort_order"
                                                            min="1"
                                                            max="99"
                                                            placeholder="1"
                                                            value="1"
                                                        >
                                                    </div>
                                                    <div class="field-hint">Display priority (lower = first)</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Notes / Description -->
                                        <div class="form-group-custom">
                                            <label class="form-label-custom" for="notes">Notes <small style="font-weight:400;text-transform:none;letter-spacing:0;">(optional)</small></label>
                                            <div class="input-icon-wrap" style="align-items:flex-start;">
                                                <span class="input-prefix-icon" style="top:13px;position:absolute;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                                </span>
                                                <textarea
                                                    class="form-control-custom"
                                                    id="notes"
                                                    name="notes"
                                                    rows="3"
                                                    maxlength="200"
                                                    placeholder="Internal notes about this link..."
                                                    style="resize:vertical;"
                                                    oninput="countChars('notes','notesCount',200)"
                                                ></textarea>
                                            </div>
                                            <div class="d-flex justify-content-end mt-1">
                                                <span class="char-counter"><span id="notesCount">0</span>/200</span>
                                            </div>
                                        </div>

                                        <hr class="form-divider">
                                        <!-- ─── SECTION: Status ─── -->
                                        <span class="form-section-label">Visibility</span>

                                        <div class="form-group-custom">
                                            <div class="status-toggle-row">
                                                <div class="toggle-info">
                                                    <h6>Active Status</h6>
                                                    <p>Toggle to show or hide this link publicly</p>
                                                </div>
                                                <label class="toggle-switch" title="Toggle status">
                                                    <input type="checkbox" id="status" name="status" value="1" checked>
                                                    <span class="toggle-slider"></span>
                                                </label>
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
                                                Save Link
                                            </button>
                                        </div>

                                    </form>
                                </div>
                                <!-- end form-card-body -->

                            </div>
                            <!-- end form-card -->

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

    <!-- Iconify CDN -->
    <script src="https://code.iconify.design/3/3.1.1/iconify.min.js"></script>

    <script>
        /* ── Platform preview ── */
        function updatePreview() {
            const sel     = document.getElementById('platform');
            const opt     = sel.options[sel.selectedIndex];
            const iconEl  = document.getElementById('previewIcon');
            const box     = document.getElementById('previewIconBox');
            const label   = document.getElementById('previewLabel');

            if (!sel.value) return;

            const icon  = opt.dataset.icon;
            const color = opt.dataset.color;
            const text  = opt.dataset.text;

            box.style.background = color;
            iconEl.setAttribute('data-icon', icon);
            iconEl.style.color = text;
            iconEl.style.fontSize = '22px';

            label.innerHTML = '<strong class="preview-name">' + opt.text + '</strong>';
            label.className = 'preview-name';

            // Auto-fill tag if empty
            const tagField = document.getElementById('tag');
            if (!tagField.value) {
                tagField.value = opt.text;
                countChars('tag', 'tagCount', 50);
            }

            // Iconify re-scan for new icon
            if (window.Iconify) Iconify.scan();
        }

        /* ── Char counter ── */
        function countChars(fieldId, counterId, max) {
            const val = document.getElementById(fieldId).value.length;
            document.getElementById(counterId).textContent = val;
            const counter = document.getElementById(counterId).closest('.char-counter');
            if (counter) counter.style.color = val >= max * 0.9 ? '#e7515a' : '#b0bac9';
        }

        /* ── Reset ── */
        function resetForm() {
            document.getElementById('socialMediaForm').reset();
            // Reset preview
            document.getElementById('previewIcon').setAttribute('data-icon', 'ph:image-duotone');
            document.getElementById('previewIcon').style.color = '#b0bac9';
            document.getElementById('previewIconBox').style.background = '#f0f1f5';
            document.getElementById('previewLabel').textContent = 'Select a platform to preview its icon';
            document.getElementById('previewLabel').className = 'preview-text';
            // Reset counters
            ['tagCount','notesCount'].forEach(id => {
                const el = document.getElementById(id);
                if (el) el.textContent = '0';
            });
            // Clear validation
            document.querySelectorAll('.form-control-custom').forEach(el => {
                el.classList.remove('is-invalid');
            });
        }

        /* ── Client-side validation ── */
        document.getElementById('socialMediaForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let valid = true;

            const fields = [
                { id: 'platform', errId: 'platform-error', check: v => v !== '' },
                { id: 'tag',      errId: 'tag-error',      check: v => v.trim() !== '' },
                { id: 'link',     errId: 'link-error',     check: v => /^https?:\/\/.+/.test(v.trim()) },
            ];

            fields.forEach(f => {
                const el  = document.getElementById(f.id);
                const err = document.getElementById(f.errId);
                if (!f.check(el.value)) {
                    el.classList.add('is-invalid');
                    if (err) err.style.display = 'block';
                    valid = false;
                } else {
                    el.classList.remove('is-invalid');
                    if (err) err.style.display = 'none';
                }
            });

            if (!valid) return;

            // Show loading state
            const btn     = document.getElementById('submitBtn');
            const spinner = document.getElementById('submitSpinner');
            const icon    = document.getElementById('submitIcon');
            btn.disabled  = true;
            spinner.style.display = 'block';
            icon.style.display    = 'none';
            btn.childNodes[btn.childNodes.length - 1].textContent = ' Saving...';

            // Submit — replace with AJAX if needed
            this.submit();
        });

        // Live validation on blur
        ['platform','tag','link'].forEach(function(id) {
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
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>
