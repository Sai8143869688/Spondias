<!-- Header Start -->
<?php include ("includes/header.php"); ?>
<!-- Header End -->

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

    /* Response time badge preview */
    .response-preview {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 8px;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.78rem;
        font-weight: 600;
        background: #eef0ff;
        color: #4361ee;
        transition: all 0.2s;
    }
    .response-preview svg { width: 13px; height: 13px; }

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
    .field-hint  { font-size: 0.77rem; color: #888ea8; margin-top: 5px; }
    .field-error { font-size: 0.77rem; color: #e7515a; margin-top: 5px; display: none; }
    .form-control-custom.is-invalid ~ .field-error { display: block; }

    /* Phone flag prefix (cosmetic) */
    .phone-prefix {
        position: absolute;
        left: 13px;
        display: flex;
        align-items: center;
        gap: 5px;
        pointer-events: none;
        z-index: 1;
        color: #3b3f5c;
        font-size: 0.85rem;
        font-weight: 600;
    }
    .phone-prefix-input { padding-left: 54px !important; }

    /* Dark mode */
    [data-theme="dark"] .page-heading-section h2              { color: #e0e6ed; }
    [data-theme="dark"] .form-card                            { background: #0e1726; border-color: #1b2e4b; }
    [data-theme="dark"] .form-card-header                     { background: #0a1122; border-color: #1b2e4b; }
    [data-theme="dark"] .form-card-header h5                  { color: #bfc9d4; }
    [data-theme="dark"] .form-control-custom                  { background: #1b2e4b; border-color: #253a55; color: #bfc9d4; }
    [data-theme="dark"] .form-control-custom:focus            { border-color: #4361ee; }
    [data-theme="dark"] .form-label-custom                    { color: #a3b2c5; }
    [data-theme="dark"] .status-toggle-row                    { background: #0a1122; border-color: #253a55; }
    [data-theme="dark"] .status-toggle-row .toggle-info h6    { color: #bfc9d4; }
    [data-theme="dark"] .form-actions                         { border-color: #1b2e4b; }
    [data-theme="dark"] .form-divider                         { border-color: #1b2e4b; }
    [data-theme="dark"] .response-preview                     { background: #1b2e4b; color: #a3b2c5; }
</style>

<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    <?php include ("includes/loader.php"); ?>
    <!-- END LOADER -->

    <!-- BEGIN NAVBAR -->
    <?php include ("includes/navbar.php"); ?>
    <!-- END NAVBAR -->

    <!-- BEGIN MAIN CONTAINER -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="tc-overlay"></div>
        <div class="psidebar-overlay"></div>

        <!-- BEGIN SIDEBAR -->
        <?php include("includes/sidebar.php"); ?>
        <!-- END SIDEBAR -->

        <!-- BEGIN CONTENT AREA -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content p-0">

                    <!-- BEGIN BREADCRUMBS -->
                    <div class="secondary-nav">
                        <div class="breadcrumbs-container" data-page-heading="Add Contact">
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
                                                <li class="breadcrumb-item"><a href="#">People</a></li>
                                                <li class="breadcrumb-item"><a href="contacts.php">Contacts</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Add Contact</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </header>
                        </div>
                    </div>
                    <!-- END BREADCRUMBS -->

                    <div class="row layout-top-spacing">
                        <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">

                            <!-- PAGE HEADING -->
                            <div class="page-heading-section">
                                <div class="page-title-wrap">
                                    <div class="page-title-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                            <circle cx="12" cy="7" r="4"/>
                                            <line x1="19" y1="8" x2="19" y2="14"/>
                                            <line x1="22" y1="11" x2="16" y2="11"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h2>Add New Contact</h2>
                                        <p class="subtitle">Fill in the details below to create a new contact</p>
                                    </div>
                                </div>
                                <a href="contacts.php" class="btn-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
                                    Back to Contacts
                                </a>
                            </div>
                            <!-- END PAGE HEADING -->

                            <!-- FORM CARD -->
                            <div class="form-card">

                                <div class="form-card-header">
                                    <div class="form-card-header-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                            <circle cx="12" cy="7" r="4"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5>Contact Information</h5>
                                        <p>All fields marked with <span style="color:#e7515a;">*</span> are required</p>
                                    </div>
                                </div>

                                <div class="form-card-body">
                                    <form id="contactForm" method="POST" action="save_contact.php" novalidate>
                                        <?php
                                            if (empty($_SESSION['csrf_token'])) {
                                                $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                                            }
                                        ?>
                                        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

                                        <!-- ─── SECTION: Basic Info ─── -->
                                        <span class="form-section-label">Basic Information</span>

                                        <div class="row">
                                            <!-- Email -->
                                            <div class="col-md-6">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom" for="email">
                                                        Email Address <span class="required">*</span>
                                                    </label>
                                                    <div class="input-icon-wrap">
                                                        <span class="input-prefix-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                                                        </span>
                                                        <input
                                                            type="email"
                                                            class="form-control-custom"
                                                            id="email"
                                                            name="email"
                                                            placeholder="e.g. john.doe@example.com"
                                                            required
                                                        >
                                                    </div>
                                                    <div class="field-hint">Enter a valid email address</div>
                                                    <div class="field-error" id="email-error">Please enter a valid email address.</div>
                                                </div>
                                            </div>

                                            <!-- Phone -->
                                            <div class="col-md-6">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom" for="phone">
                                                        Phone Number <span class="required">*</span>
                                                    </label>
                                                    <div class="input-icon-wrap">
                                                        <span class="input-prefix-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.6 3.45 2 2 0 0 1 3.57 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.55a16 16 0 0 0 6.29 6.29l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                                        </span>
                                                        <input
                                                            type="tel"
                                                            class="form-control-custom"
                                                            id="phone"
                                                            name="phone"
                                                            placeholder="e.g. +1 (555) 123-4567"
                                                            required
                                                        >
                                                    </div>
                                                    <div class="field-hint">Include country code for international numbers</div>
                                                    <div class="field-error" id="phone-error">Please enter a valid phone number.</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Response Time -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group-custom">
                                                    <label class="form-label-custom" for="response_time">
                                                        Response Time <span class="required">*</span>
                                                    </label>
                                                    <div class="select-wrap input-icon-wrap">
                                                        <span class="input-prefix-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                                        </span>
                                                        <select
                                                            class="form-control-custom"
                                                            id="response_time"
                                                            name="response_time"
                                                            required
                                                            onchange="updateResponsePreview()"
                                                        >
                                                            <option value="" disabled selected>— Select response time —</option>
                                                            <option value="within_1h"   data-color="#e0f7ea" data-text="#00ab55">Within 1 Hour</option>
                                                            <option value="within_4h"   data-color="#eef0ff" data-text="#4361ee">Within 4 Hours</option>
                                                            <option value="within_24h"  data-color="#fff8e6" data-text="#e9a33b">Within 24 Hours</option>
                                                            <option value="within_48h"  data-color="#fde9e9" data-text="#e7515a">Within 48 Hours</option>
                                                            <option value="within_week" data-color="#f3e8ff" data-text="#805dca">Within a Week</option>
                                                        </select>
                                                    </div>
                                                    <div class="field-error" id="response_time-error">Please select a response time.</div>
                                                    <!-- Live preview badge -->
                                                    <div id="responsePreview" style="display:none;">
                                                        <span class="response-preview" id="responsePreviewBadge">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                                            <span id="responsePreviewText"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="form-divider">
                                        <!-- ─── SECTION: Address ─── -->
                                        <span class="form-section-label">Address Details</span>

                                        <!-- Address Line 1 -->
                                        <div class="form-group-custom">
                                            <label class="form-label-custom" for="address1">
                                                Address Line 1 <span class="required">*</span>
                                            </label>
                                            <div class="input-icon-wrap">
                                                <span class="input-prefix-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                                </span>
                                                <input
                                                    type="text"
                                                    class="form-control-custom"
                                                    id="address1"
                                                    name="address1"
                                                    maxlength="100"
                                                    placeholder="Street number and name"
                                                    required
                                                    oninput="countChars('address1','address1Count',100)"
                                                >
                                            </div>
                                            <div class="d-flex justify-content-between align-items-start mt-1">
                                                <div class="field-error" id="address1-error">Address Line 1 is required.</div>
                                                <span class="char-counter"><span id="address1Count">0</span>/100</span>
                                            </div>
                                        </div>

                                        <!-- Address Line 2 -->
                                        <div class="form-group-custom">
                                            <label class="form-label-custom" for="address2">
                                                Address Line 2 <small style="font-weight:400;text-transform:none;letter-spacing:0;">(optional)</small>
                                            </label>
                                            <div class="input-icon-wrap">
                                                <span class="input-prefix-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                                                </span>
                                                <input
                                                    type="text"
                                                    class="form-control-custom"
                                                    id="address2"
                                                    name="address2"
                                                    maxlength="100"
                                                    placeholder="Apartment, suite, unit, building, floor, etc."
                                                    oninput="countChars('address2','address2Count',100)"
                                                >
                                            </div>
                                            <div class="d-flex justify-content-end mt-1">
                                                <span class="char-counter"><span id="address2Count">0</span>/100</span>
                                            </div>
                                        </div>

                                        <!-- Address Line 3 -->
                                        <div class="form-group-custom">
                                            <label class="form-label-custom" for="address3">
                                                Address Line 3 <small style="font-weight:400;text-transform:none;letter-spacing:0;">(optional)</small>
                                            </label>
                                            <div class="input-icon-wrap">
                                                <span class="input-prefix-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                                </span>
                                                <input
                                                    type="text"
                                                    class="form-control-custom"
                                                    id="address3"
                                                    name="address3"
                                                    maxlength="100"
                                                    placeholder="City, State / Province, ZIP / Postal Code"
                                                    oninput="countChars('address3','address3Count',100)"
                                                >
                                            </div>
                                            <div class="d-flex justify-content-end mt-1">
                                                <span class="char-counter"><span id="address3Count">0</span>/100</span>
                                            </div>
                                        </div>

                                        <hr class="form-divider">
                                        <!-- ─── SECTION: Status ─── -->
                                        <span class="form-section-label">Visibility</span>

                                        <div class="form-group-custom">
                                            <div class="status-toggle-row">
                                                <div class="toggle-info">
                                                    <h6>Active Status</h6>
                                                    <p>Toggle to activate or deactivate this contact</p>
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
                                                Save Contact
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

            <!-- BEGIN FOOTER -->
            <?php include ("includes/footer.php"); ?>
            <!-- END FOOTER -->
        </div>
        <!-- END CONTENT AREA -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN PROFILE SIDEBAR -->
    <?php include ("includes/right_side_profile.php"); ?>
    <!-- END PROFILE SIDEBAR -->

    <!-- BEGIN SEARCH MODAL -->
    <?php include ("includes/search_modal.php"); ?>
    <!-- END SEARCH MODAL -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="src/plugins/src/global/vendors.min.js"></script>
    <script src="src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="src/plugins/src/waves/waves.min.js"></script>
    <script src="layouts/modern-light-menu/app.js"></script>
    <script src="src/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script>
        /* ── Response Time preview badge ── */
        function updateResponsePreview() {
            const sel   = document.getElementById('response_time');
            const opt   = sel.options[sel.selectedIndex];
            const wrap  = document.getElementById('responsePreview');
            const badge = document.getElementById('responsePreviewBadge');
            const text  = document.getElementById('responsePreviewText');

            if (!sel.value) { wrap.style.display = 'none'; return; }

            badge.style.background = opt.dataset.color;
            badge.style.color      = opt.dataset.text;
            text.textContent       = opt.text;
            wrap.style.display     = 'block';
        }

        /* ── Char counter ── */
        function countChars(fieldId, counterId, max) {
            const val     = document.getElementById(fieldId).value.length;
            const counter = document.getElementById(counterId);
            counter.textContent = val;
            const wrap = counter.closest('.char-counter');
            if (wrap) wrap.style.color = val >= max * 0.9 ? '#e7515a' : '#b0bac9';
        }

        /* ── Reset ── */
        function resetForm() {
            document.getElementById('contactForm').reset();

            // Hide response preview
            document.getElementById('responsePreview').style.display = 'none';

            // Reset all char counters
            ['address1Count','address2Count','address3Count'].forEach(id => {
                const el = document.getElementById(id);
                if (el) el.textContent = '0';
            });

            // Clear validation states
            document.querySelectorAll('.form-control-custom').forEach(el => {
                el.classList.remove('is-invalid');
            });
            document.querySelectorAll('.field-error').forEach(el => {
                el.style.display = 'none';
            });
        }

        /* ── Client-side validation ── */
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let valid = true;

            const fields = [
                {
                    id: 'email',
                    errId: 'email-error',
                    check: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim())
                },
                {
                    id: 'phone',
                    errId: 'phone-error',
                    check: v => /^[\+\d\s\-\(\)]{7,20}$/.test(v.trim())
                },
                {
                    id: 'response_time',
                    errId: 'response_time-error',
                    check: v => v !== ''
                },
                {
                    id: 'address1',
                    errId: 'address1-error',
                    check: v => v.trim() !== ''
                },
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
            btn.disabled          = true;
            spinner.style.display = 'block';
            icon.style.display    = 'none';

            // Submit
            this.submit();
        });

        // Live validation clear on blur
        ['email','phone','response_time','address1'].forEach(function(id) {
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