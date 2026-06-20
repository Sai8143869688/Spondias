<!-- Header Start -->
<?php include ("includes/header.php"); ?>
<!-- Header End -->

<style>
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

    .cp-layout {
        display: grid;
        grid-template-columns: 1fr 340px;
        gap: 24px;
        align-items: start;
    }
    @media (max-width: 991px) {
    .cp-layout { grid-template-columns: 1fr; }
    }

    .cp-card {
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 2px 20px rgba(31,45,61,0.08);
        border: 1px solid #f0f1f5;
        overflow: hidden;
    }
    .cp-card-header {
        padding: 18px 24px 16px;
        border-bottom: 1px solid #f0f1f5;
        display: flex;
        align-items: center;
        gap: 12px;
        background: #fafbff;
    }
    .cp-card-header-icon {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: linear-gradient(135deg, #4361ee 0%, #805dca 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .cp-card-header-icon svg { color: #fff; width: 17px; height: 17px; }
    .cp-card-header h5 { font-size: 0.97rem; font-weight: 700; color: #1a1f36; margin: 0; }
    .cp-card-header p  { font-size: 0.77rem; color: #888ea8; margin: 0; }
    .cp-card-body { padding: 26px 24px; }

    .form-group-custom  { margin-bottom: 20px; }
    .form-label-custom {
        display: block;
        font-size: 0.80rem;
        font-weight: 700;
        color: #515365;
        margin-bottom: 7px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .form-label-custom span.required { color: #e7515a; margin-left: 2px; }

    .pw-wrap {
        position: relative;
        display: flex;
        align-items: center;
    }
    .pw-wrap .pw-prefix {
        position: absolute;
        left: 13px;
        display: flex;
        align-items: center;
        pointer-events: none;
        color: #888ea8;
        width: 17px;
        height: 17px;
        z-index: 1;
    }
    .pw-wrap input {
        width: 100%;
        border: 1.5px solid #e0e6ed;
        border-radius: 10px;
        padding: 11px 44px 11px 40px;
        font-size: 0.875rem;
        color: #3b3f5c;
        background: #fff;
        transition: border-color 0.2s, box-shadow 0.2s;
        outline: none;
        letter-spacing: 0.04em;
    }
    .pw-wrap input:focus {
        border-color: #4361ee;
        box-shadow: 0 0 0 3px rgba(67,97,238,0.10);
    }
    .pw-wrap input::placeholder { color: #b0bac9; letter-spacing: 0; }
    .pw-wrap input.is-invalid   { border-color: #e7515a; }
    .pw-wrap input.is-invalid:focus { box-shadow: 0 0 0 3px rgba(231,81,90,0.10); }
    .pw-wrap input.is-valid     { border-color: #00ab55; }
    .pw-wrap input.is-valid:focus { box-shadow: 0 0 0 3px rgba(0,171,85,0.10); }

    .pw-toggle {
        position: absolute;
        right: 12px;
        background: none;
        border: none;
        cursor: pointer;
        padding: 4px;
        display: flex;
        align-items: center;
        color: #888ea8;
        transition: color 0.15s;
        border-radius: 6px;
    }
    .pw-toggle:hover { color: #4361ee; }
    .pw-toggle svg   { width: 17px; height: 17px; }

    .field-hint  { font-size: 0.76rem; color: #888ea8; margin-top: 5px; }
    .field-error { font-size: 0.76rem; color: #e7515a; margin-top: 5px; display: none; }
    .field-ok    { font-size: 0.76rem; color: #00ab55; margin-top: 5px; display: none; }

    .strength-meter-wrap { margin-top: 10px; }
    .strength-bar-track {
        height: 5px;
        background: #eef0ff;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 6px;
    }
    .strength-bar-fill {
        height: 100%;
        border-radius: 10px;
        width: 0%;
        transition: width 0.35s ease, background 0.35s ease;
    }
    .strength-labels {
        display: flex;
        justify-content: space-between;
        font-size: 0.70rem;
        font-weight: 700;
        color: #d0d5ee;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .strength-labels span.active { color: inherit; }

    .str-0 { width: 0%;   background: transparent; }
    .str-1 { width: 25%;  background: #e7515a; }
    .str-2 { width: 50%;  background: #e9a33b; }
    .str-3 { width: 75%;  background: #4361ee; }
    .str-4 { width: 100%; background: #00ab55; }

    .req-list { list-style: none; padding: 0; margin: 12px 0 0; display: flex; flex-direction: column; gap: 6px; }
    .req-list li {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.80rem;
        color: #888ea8;
        transition: color 0.2s;
    }
    .req-list li .req-dot {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #f0f1f5;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: background 0.2s;
    }
    .req-list li .req-dot svg { width: 10px; height: 10px; color: #b0bac9; transition: color 0.2s; }
    .req-list li.met { color: #00ab55; }
    .req-list li.met .req-dot { background: #e0f7ea; }
    .req-list li.met .req-dot svg { color: #00ab55; }

    .form-divider { border: none; border-top: 1px solid #f0f1f5; margin: 6px 0 22px 0; }
    .form-section-label {
        font-size: 0.70rem;
        font-weight: 800;
        color: #b0bac9;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        margin-bottom: 16px;
        display: block;
    }

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
        padding: 11px 22px;
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
        padding: 11px 26px;
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
    .btn-submit:disabled { opacity: 0.65; cursor: not-allowed; transform: none; }
    .btn-submit .spinner {
        display: none;
        width: 15px; height: 15px;
        border: 2px solid rgba(255,255,255,0.4);
        border-top-color: #fff;
        border-radius: 50%;
        animation: spin 0.6s linear infinite;
    }
    @keyframes spin { to { transform: rotate(360deg); } }

    .tips-card .cp-card-header-icon { background: linear-gradient(135deg, #00ab55 0%, #00c570 100%); }

    .tip-item {
        display: flex;
        gap: 12px;
        align-items: flex-start;
        padding: 12px 0;
        border-bottom: 1px solid #f0f1f5;
    }
    .tip-item:last-child { border-bottom: none; padding-bottom: 0; }
    .tip-icon {
        width: 34px;
        height: 34px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .tip-icon svg { width: 16px; height: 16px; }
    .tip-icon.blue   { background: #eef0ff; color: #4361ee; }
    .tip-icon.green  { background: #e0f7ea; color: #00ab55; }
    .tip-icon.amber  { background: #fff8e6; color: #e9a33b; }
    .tip-icon.purple { background: #f3e8ff; color: #805dca; }
    .tip-icon.red    { background: #fee8e8; color: #e7515a; }

    .tip-content .tip-title { font-size: 0.83rem; font-weight: 700; color: #1a1f36; margin: 0 0 2px; }
    .tip-content .tip-desc  { font-size: 0.77rem; color: #888ea8; margin: 0; line-height: 1.45; }

    .last-changed-notice {
        display: flex;
        align-items: center;
        gap: 10px;
        background: #f8f9ff;
        border: 1.5px solid #e8ecff;
        border-radius: 10px;
        padding: 12px 14px;
        margin-bottom: 22px;
    }
    .last-changed-notice svg { color: #4361ee; flex-shrink: 0; width: 18px; height: 18px; }
    .last-changed-notice p { font-size: 0.80rem; color: #515365; margin: 0; }
    .last-changed-notice strong { color: #1a1f36; }

    .cp-success-flash {
        display: none;
        align-items: center;
        gap: 12px;
        background: #e0f7ea;
        border: 1.5px solid #b2efd4;
        border-radius: 10px;
        padding: 14px 16px;
        margin-bottom: 20px;
    }
    .cp-success-flash svg { color: #00ab55; flex-shrink: 0; width: 20px; height: 20px; }
    .cp-success-flash p { font-size: 0.84rem; color: #007a3d; font-weight: 600; margin: 0; }

        [data-theme="dark"] .page-heading-section h2       { color: #e0e6ed; }
    [data-theme="dark"] .cp-card                       { background: #0e1726; border-color: #1b2e4b; }
    [data-theme="dark"] .cp-card-header                { background: #0a1122; border-color: #1b2e4b; }
    [data-theme="dark"] .cp-card-header h5             { color: #bfc9d4; }
    [data-theme="dark"] .pw-wrap input                 { background: #1b2e4b; border-color: #253a55; color: #bfc9d4; }
    [data-theme="dark"] .pw-wrap input:focus           { border-color: #4361ee; }
    [data-theme="dark"] .form-label-custom             { color: #a3b2c5; }
    [data-theme="dark"] .form-divider                  { border-color: #1b2e4b; }
    [data-theme="dark"] .form-actions                  { border-color: #1b2e4b; }
    [data-theme="dark"] .last-changed-notice           { background: #0a1122; border-color: #253a55; }
    [data-theme="dark"] .last-changed-notice p         { color: #a3b2c5; }
    [data-theme="dark"] .last-changed-notice strong    { color: #bfc9d4; }
    [data-theme="dark"] .tip-item                      { border-color: #1b2e4b; }
    [data-theme="dark"] .tip-content .tip-title        { color: #bfc9d4; }
    [data-theme="dark"] .strength-bar-track            { background: #1b2e4b; }
    [data-theme="dark"] .req-list li .req-dot          { background: #1b2e4b; }
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

                                 <div class="secondary-nav">
                 <div class="breadcrumbs-container" data-page-heading="Change Password">
                     <header class="header navbar navbar-expand-sm">
                         <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                 <line x1="4" y1="6" x2="20" y2="6"/><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="18" x2="20" y2="18"/>
                             </svg>
                         </a>
                         <div class="d-flex breadcrumb-content">
                             <div class="page-header">
                                 <div class="page-title"></div>
                                 <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                     <ol class="breadcrumb">
                                         <li class="breadcrumb-item"><a href="#">Account</a></li>
                                         <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                                     </ol>
                                 </nav>
                             </div>
                         </div>
                     </header>
                 </div>
             </div>
             
             <div class="row layout-top-spacing">
                 <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">

                                                 <div class="page-heading-section">
                         <div class="page-title-wrap">
                             <div class="page-title-icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                     <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                     <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                 </svg>
                             </div>
                             <div>
                                 <h2>Change Password</h2>
                                 <p class="subtitle">Keep your account secure with a strong, unique password</p>
                             </div>
                         </div>
                     </div>
                     
                                                 <div class="cp-layout">

                                                         <div class="cp-card">
                             <div class="cp-card-header">
                                 <div class="cp-card-header-icon">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                         <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                         <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                     </svg>
                                 </div>
                                 <div>
                                     <h5>Update Your Password</h5>
                                     <p>All fields are required</p>
                                 </div>
                             </div>

                             <div class="cp-card-body">

                                                                         <div class="last-changed-notice">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                     <p>Password last changed: <strong><?= date('F j, Y', strtotime('-45 days')) ?></strong> &mdash; We recommend updating every 90 days.</p>
                                 </div>

                                                                         <div class="cp-success-flash" id="successFlash">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                     <p>Password updated successfully. You'll need to use it on your next login.</p>
                                 </div>

                                 <form id="changePasswordForm" method="POST" action="save_password.php" novalidate>
                                     <?php
                                         if (empty($_SESSION['csrf_token'])) {
                                             $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                                         }
                                     ?>
                                     <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

                                                                                 <span class="form-section-label">Verify Identity</span>

                                     <div class="form-group-custom">
                                         <label class="form-label-custom" for="current_password">
                                             Current Password <span class="required">*</span>
                                         </label>
                                         <div class="pw-wrap">
                                             <span class="pw-prefix">
                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                                             </span>
                                             <input
                                                 type="password"
                                                 id="current_password"
                                                 name="current_password"
                                                 placeholder="Enter your current password"
                                                 autocomplete="current-password"
                                                 required
                                             >
                                             <button type="button" class="pw-toggle" onclick="togglePw('current_password', this)" aria-label="Show/hide password">
                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                             </button>
                                         </div>
                                         <div class="field-error" id="current_password-error">Current password is required.</div>
                                         <div class="field-hint">
                                             <a href="forgot_password.php" style="color:#4361ee;font-size:0.76rem;text-decoration:none;">Forgot your password?</a>
                                         </div>
                                     </div>

                                     <hr class="form-divider">
                                                                                 <span class="form-section-label">Set New Password</span>

                                     <div class="form-group-custom">
                                         <label class="form-label-custom" for="new_password">
                                             New Password <span class="required">*</span>
                                         </label>
                                         <div class="pw-wrap">
                                             <span class="pw-prefix">
                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"/></svg>
                                             </span>
                                             <input
                                                 type="password"
                                                 id="new_password"
                                                 name="new_password"
                                                 placeholder="Create a strong password"
                                                 autocomplete="new-password"
                                                 required
                                                 oninput="evaluateStrength(this.value); checkMatch();"
                                             >
                                             <button type="button" class="pw-toggle" onclick="togglePw('new_password', this)" aria-label="Show/hide password">
                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                             </button>
                                         </div>
                                         <div class="field-error" id="new_password-error">Please enter a new password.</div>

                                                                                         <div class="strength-meter-wrap" id="strengthMeter" style="display:none;">
                                             <div class="strength-bar-track">
                                                 <div class="strength-bar-fill" id="strengthFill"></div>
                                             </div>
                                             <div class="strength-labels">
                                                 <span id="sl-weak">Weak</span>
                                                 <span id="sl-fair">Fair</span>
                                                 <span id="sl-good">Good</span>
                                                 <span id="sl-strong">Strong</span>
                                             </div>
                                         </div>

                                                                                         <ul class="req-list" id="reqList">
                                             <li id="req-len">
                                                 <span class="req-dot"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                                                 At least 8 characters
                                             </li>
                                             <li id="req-upper">
                                                 <span class="req-dot"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                                                 One uppercase letter (A–Z)
                                             </li>
                                             <li id="req-num">
                                                 <span class="req-dot"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                                                 One number (0–9)
                                             </li>
                                             <li id="req-special">
                                                 <span class="req-dot"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
                                                 One special character (!@#$…)
                                             </li>
                                         </ul>
                                     </div>

                                                                                 <div class="form-group-custom">
                                         <label class="form-label-custom" for="confirm_password">
                                             Confirm New Password <span class="required">*</span>
                                         </label>
                                         <div class="pw-wrap">
                                             <span class="pw-prefix">
                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                             </span>
                                             <input
                                                 type="password"
                                                 id="confirm_password"
                                                 name="confirm_password"
                                                 placeholder="Re-enter your new password"
                                                 autocomplete="new-password"
                                                 required
                                                 oninput="checkMatch()"
                                             >
                                             <button type="button" class="pw-toggle" onclick="togglePw('confirm_password', this)" aria-label="Show/hide password">
                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                             </button>
                                         </div>
                                         <div class="field-error" id="confirm_password-error">Passwords do not match.</div>
                                         <div class="field-ok"    id="confirm_password-ok">Passwords match!</div>
                                     </div>

                                                                                 <div class="form-actions">
                                         <button type="button" class="btn-reset" onclick="resetForm()">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 .49-3.5"/></svg>
                                             Clear
                                         </button>
                                         <button type="submit" class="btn-submit" id="submitBtn">
                                             <span class="spinner" id="submitSpinner"></span>
                                             <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="submitIcon"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                                             Update Password
                                         </button>
                                     </div>

                                 </form>
                             </div>
                         </div>
                         
                                                         <div class="cp-card tips-card">
                             <div class="cp-card-header">
                                 <div class="cp-card-header-icon">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                                 </div>
                                 <div>
                                     <h5>Security Tips</h5>
                                     <p>Keep your account protected</p>
                                 </div>
                             </div>
                             <div class="cp-card-body" style="padding-top:18px;">

                                 <div class="tip-item">
                                     <div class="tip-icon blue">
                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                                     </div>
                                     <div class="tip-content">
                                         <p class="tip-title">Use a unique password</p>
                                         <p class="tip-desc">Never reuse passwords across different sites or services.</p>
                                     </div>
                                 </div>

                                 <div class="tip-item">
                                     <div class="tip-icon green">
                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                     </div>
                                     <div class="tip-content">
                                         <p class="tip-title">Enable two-factor auth</p>
                                         <p class="tip-desc">Add a second layer of protection to your login from Account Settings.</p>
                                     </div>
                                 </div>

                                 <div class="tip-item">
                                     <div class="tip-icon amber">
                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                     </div>
                                     <div class="tip-content">
                                         <p class="tip-title">Change regularly</p>
                                         <p class="tip-desc">Update your password every 90 days to minimise exposure risk.</p>
                                     </div>
                                 </div>

                                 <div class="tip-item">
                                     <div class="tip-icon purple">
                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"/></svg>
                                     </div>
                                     <div class="tip-content">
                                         <p class="tip-title">Use a passphrase</p>
                                         <p class="tip-desc">A string of 4+ random words is both memorable and hard to crack.</p>
                                     </div>
                                 </div>

                                 <div class="tip-item">
                                     <div class="tip-icon red">
                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                                     </div>
                                     <div class="tip-content">
                                         <p class="tip-title">Never share your password</p>
                                         <p class="tip-desc">Our team will never ask for your password via email or chat.</p>
                                     </div>
                                 </div>

                             </div>
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
    
    <script>
         function togglePw(inputId, btn) {
     const input = document.getElementById(inputId);
     const isText = input.type === 'text';
     input.type = isText ? 'password' : 'text';
     btn.innerHTML = isText
         ? `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>`
         : `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/></svg>`;
        }

         function evaluateStrength(val) {
     const meter = document.getElementById('strengthMeter');
     const fill  = document.getElementById('strengthFill');
     const labels = ['sl-weak','sl-fair','sl-good','sl-strong'];

     if (!val) { meter.style.display = 'none'; return; }
     meter.style.display = 'block';

     let score = 0;
     if (val.length >= 8)              score++;
     if (/[A-Z]/.test(val))            score++;
     if (/[0-9]/.test(val))            score++;
     if (/[^A-Za-z0-9]/.test(val))     score++;

     fill.className = 'strength-bar-fill str-' + score;

     labels.forEach((id, i) => {
         document.getElementById(id).style.color = (i === score - 1) ? fill.style.color || getStrColor(score) : '#d0d5ee';
     });

     setReq('req-len',     val.length >= 8);
     setReq('req-upper',   /[A-Z]/.test(val));
     setReq('req-num',     /[0-9]/.test(val));
     setReq('req-special', /[^A-Za-z0-9]/.test(val));
        }

        function getStrColor(score) {
     return ['','#e7515a','#e9a33b','#4361ee','#00ab55'][score] || '#d0d5ee';
        }

        function setReq(id, met) {
     const el = document.getElementById(id);
     if (met) el.classList.add('met');
     else     el.classList.remove('met');
        }

         function checkMatch() {
     const np = document.getElementById('new_password').value;
     const cp = document.getElementById('confirm_password').value;
     const err = document.getElementById('confirm_password-error');
     const ok  = document.getElementById('confirm_password-ok');
     const inp = document.getElementById('confirm_password');

     if (!cp) {
         inp.classList.remove('is-valid','is-invalid');
         err.style.display = 'none';
         ok.style.display  = 'none';
         return;
     }
     if (np === cp) {
         inp.classList.remove('is-invalid');
         inp.classList.add('is-valid');
         err.style.display = 'none';
         ok.style.display  = 'block';
     } else {
         inp.classList.remove('is-valid');
         inp.classList.add('is-invalid');
         ok.style.display  = 'none';
         err.style.display = 'block';
     }
        }

         function resetForm() {
     document.getElementById('changePasswordForm').reset();
     document.getElementById('strengthMeter').style.display = 'none';
     document.getElementById('successFlash').style.display  = 'none';
     ['req-len','req-upper','req-num','req-special'].forEach(id => {
         document.getElementById(id).classList.remove('met');
     });
     ['current_password','new_password','confirm_password'].forEach(id => {
         const el = document.getElementById(id);
         el.classList.remove('is-valid','is-invalid');
     });
     document.querySelectorAll('.field-error, .field-ok').forEach(el => {
         el.style.display = 'none';
     });
        }

         document.getElementById('changePasswordForm').addEventListener('submit', function(e) {
     e.preventDefault();
     let valid = true;

     const cur = document.getElementById('current_password');
     const curErr = document.getElementById('current_password-error');
     if (!cur.value.trim()) {
         cur.classList.add('is-invalid');
         curErr.style.display = 'block';
         valid = false;
     } else {
         cur.classList.remove('is-invalid');
         curErr.style.display = 'none';
     }

     const np = document.getElementById('new_password');
     const npErr = document.getElementById('new_password-error');
     const npVal = np.value;
     const npOk = npVal.length >= 8 && /[A-Z]/.test(npVal) && /[0-9]/.test(npVal) && /[^A-Za-z0-9]/.test(npVal);
     if (!npOk) {
         np.classList.add('is-invalid');
         npErr.style.display = 'block';
         npErr.textContent = npVal ? 'Password does not meet all requirements.' : 'Please enter a new password.';
         valid = false;
     } else {
         np.classList.remove('is-invalid');
         npErr.style.display = 'none';
     }

     const cp = document.getElementById('confirm_password');
     const cpErr = document.getElementById('confirm_password-error');
     if (cp.value !== np.value || !cp.value) {
         cp.classList.add('is-invalid');
         cp.classList.remove('is-valid');
         cpErr.style.display = 'block';
         document.getElementById('confirm_password-ok').style.display = 'none';
         valid = false;
     }

     if (!valid) return;

     const btn     = document.getElementById('submitBtn');
     const spinner = document.getElementById('submitSpinner');
     const icon    = document.getElementById('submitIcon');
     btn.disabled          = true;
     spinner.style.display = 'block';
     icon.style.display    = 'none';

     setTimeout(() => {
         btn.disabled          = false;
         spinner.style.display = 'none';
         icon.style.display    = '';
         document.getElementById('changePasswordForm').reset();
         document.getElementById('strengthMeter').style.display = 'none';
         ['req-len','req-upper','req-num','req-special'].forEach(id => document.getElementById(id).classList.remove('met'));
         ['current_password','new_password','confirm_password'].forEach(id => {
             document.getElementById(id).classList.remove('is-valid','is-invalid');
         });
         document.querySelectorAll('.field-error,.field-ok').forEach(el => el.style.display = 'none');
         const flash = document.getElementById('successFlash');
         flash.style.display = 'flex';
         flash.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
     }, 1200);

        });

        ['current_password'].forEach(id => {
     document.getElementById(id).addEventListener('blur', function() {
         if (this.value.trim()) {
             this.classList.remove('is-invalid');
             const err = document.getElementById(id + '-error');
             if (err) err.style.display = 'none';
         }
     });
        });
    </script>
    </body>
</html>