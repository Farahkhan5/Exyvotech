<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Exyvotech | Premium Services Dropdown & Contact Sidebar</title>
    <!-- Bootstrap 5 CSS + Icons + Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts: Ubuntu & Inter mix -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Ubuntu', sans-serif;
            background: #fefefe;
            overflow-x: hidden;
        }

        /* ========== NAVBAR STYLES (fully preserved, enhanced with dropdown) ========== */
        .navbar-tech {
            background-color: #000000;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03), 0 2px 6px rgba(0, 0, 0, 0.05);
            padding: 1rem 0;
            transition: all 0.2s ease;
            position: relative;
            z-index: 1030;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.9rem;
            letter-spacing: -0.5px;
            color: #ffffff !important;
            transition: color 0.2s;
            padding-left: 4.5rem;
        }
        @media (min-width: 1300px) and (max-width: 1468px) {
            .navbar-brand {
                padding-left: 2.8rem;
            }
        }
        @media (max-width: 1200px) {
            .navbar-brand {
                padding-left: 2rem;
            }
        }
        @media (max-width: 991px) {
            .navbar-brand {
                padding-left: 1rem;
            }
        }
        .navbar-brand span {
            color: #ff6b1e;
            font-weight: 800;
        }

        /* Desktop navigation links container (flex) */
        .navbar-nav-desktop {
            display: flex;
            align-items: center;
            gap: 1.6rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-link-custom {
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            color: #f1f1f1;
            transition: all 0.25s ease;
            padding: 0.5rem 0;
            position: relative;
            letter-spacing: -0.2px;
            background: transparent;
            border: none;
            cursor: pointer;
        }

        .nav-link-custom:hover {
            color: #ff6b1e;
        }

        .nav-link-custom.active {
            color: #ff6b1e;
            font-weight: 600;
        }
        .nav-link-custom.active::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 2.5px;
            background-color: #ff6b1e;
            border-radius: 4px;
        }

        /* SERVICES DROPDOWN (Desktop) - clean, modern, matches design */
        .services-dropdown {
            position: relative;
        }
        .dropdown-arrow {
            font-size: 0.7rem;
            margin-left: 5px;
            transition: transform 0.2s ease;
            display: inline-block;
        }
        .services-dropdown:hover .dropdown-arrow {
            transform: rotate(180deg);
        }
        .dropdown-menu-custom {
            position: absolute;
            top: 100%;
            left: 0;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.12), 0 3px 10px rgba(0,0,0,0.05);
            min-width: 260px;
            padding: 0.75rem 0;
            margin-top: 0.8rem;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-8px);
            transition: all 0.2s ease;
            z-index: 1050;
            list-style: none;
            border: 1px solid #f0f0f0;
        }
        .services-dropdown:hover .dropdown-menu-custom {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .dropdown-menu-custom li {
            padding: 0;
            margin: 0;
        }
        .dropdown-menu-custom .dropdown-item {
            display: block;
            padding: 0.7rem 1.5rem;
            font-size: 0.9rem;
            font-weight: 500;
            color: #1f2937;
            text-decoration: none;
            transition: all 0.2s;
            white-space: nowrap;
        }
        .dropdown-menu-custom .dropdown-item i {
            width: 28px;
            color: #ff6b1e;
            margin-right: 8px;
            font-size: 1rem;
        }
        .dropdown-menu-custom .dropdown-item:hover {
            background-color: #fff5ed;
            color: #ff6b1e;
            padding-left: 1.8rem;
        }
        /* CTA / contact button style */
        .btn-contact-nav {
            background-color: #ff6b1e;
            color: white !important;
            padding: 0.8rem 1.8rem;
            border-radius: 40px;
            font-weight: 600;
            transition: all 0.25s;
            border: none;
        }
        .btn-contact-nav:hover {
            background-color: #e05a10;
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(255, 107, 30, 0.2);
            color: white;
        }

        /* Menu Icon (Hamburger) - right corner */
        .menu-icon {
            background: transparent;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            transition: 0.2s;
            border-radius: 50%;
        }
        .menu-icon:hover {
            /* background-color: rgba(255,255,255,0.1); */
            color: #ff6b1e;
        }

        /* ========== ENHANCED SIDEBAR (RIGHT SIDEBAR with exact contact details from image) ========== */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            visibility: hidden;
            opacity: 0;
            transition: visibility 0.3s, opacity 0.3s ease;
            z-index: 1050;
        }

        .sidebar-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 88%;
            max-width: 420px;
            height: 100%;
            background-color: #ffffff;
            box-shadow: -8px 0 35px rgba(0, 0, 0, 0.12);
            z-index: 1060;
            transition: right 0.35s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            display: flex;
            flex-direction: column;
            padding: 2rem 1.8rem;
            overflow-y: auto;
        }

        .sidebar-menu.open {
            right: 0;
        }

        .sidebar-overlay.active {
            visibility: visible;
            opacity: 1;
        }

        .close-sidebar {
            background: transparent;
            border: none;
            font-size: 1.8rem;
            text-align: right;
            display: block;
            width: 100%;
            margin-bottom: 2rem;
            color: #2c3e50;
            cursor: pointer;
            transition: 0.2s;
        }
        .close-sidebar:hover {
            color: #ff6b1e;
        }

        /* navigation list inside sidebar */
        .sidebar-nav-list {
            list-style: none;
            padding: 0;
            margin: 0 0 1rem 0;
            border-bottom: 1px solid #ecf3fa;
            padding-bottom: 0.5rem;
        }
        .sidebar-nav-list li {
            margin-bottom: 1rem;
        }
        .sidebar-nav-list .nav-link-custom {
            font-size: 1.2rem;
            font-weight: 500;
            display: block;
            padding: 0.4rem 0;
            color: #1e2a3e;
            background: transparent;
        }
        .sidebar-nav-list .nav-link-custom.active {
            color: #ff6b1e;
        }
        .sidebar-nav-list .nav-link-custom.active::after {
            display: none;
        }

        /* Sidebar Services Dropdown (Mobile friendly accordion style) */
        .sidebar-services-group {
            margin-bottom: 0.75rem;
        }
        .sidebar-dropdown-toggle {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            background: none;
            border: none;
            font-size: 1.2rem;
            font-weight: 500;
            color: #1e2a3e;
            padding: 0.4rem 0;
            cursor: pointer;
        }
        .sidebar-dropdown-toggle i {
            transition: transform 0.2s;
            font-size: 0.9rem;
            color: #ff6b1e;
        }
        .sidebar-submenu {
            list-style: none;
            padding-left: 1rem;
            margin-top: 0.5rem;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        .sidebar-submenu.open-sub {
            max-height: 500px;
        }
        .sidebar-submenu li {
            margin-bottom: 0.7rem;
        }
        .sidebar-submenu .dropdown-item-side {
            text-decoration: none;
            font-size: 0.95rem;
            color: #4b5563;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0.3rem 0;
            transition: 0.2s;
        }
        .sidebar-submenu .dropdown-item-side i {
            width: 24px;
            color: #ff6b1e;
            font-size: 0.9rem;
        }
        .sidebar-submenu .dropdown-item-side:hover {
            color: #ff6b1e;
            padding-left: 6px;
        }

        /* ========== CONTACT INFO SECTION (exactly matching provided image) ========== */
        .sidebar-contact-info {
            margin-top: 1rem;
        }
        .contact-section-title {
            font-weight: 700;
            font-size: 1.2rem;
            color: #0a1c2f;
            margin: 1.2rem 0 0.8rem 0;
            letter-spacing: -0.2px;
            border-left: 4px solid #ff6b1e;
            padding-left: 12px;
        }
        .contact-detail-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 1.1rem;
        }
        .contact-detail-item i {
            color: #ff6b1e;
            font-size: 1.3rem;
            width: 28px;
            margin-top: 2px;
        }
        .contact-detail-item .detail-text {
            font-size: 0.92rem;
            line-height: 1.45;
            color: #2c3e50;
            font-weight: 500;
        }
        .detail-text strong {
            font-weight: 700;
            color: #111;
            display: block;
            font-size: 0.9rem;
        }
        .address-block {
            margin-bottom: 0.8rem;
        }
        .stay-connected {
            margin-top: 1.6rem;
            border-top: 1px solid #e9eef3;
            padding-top: 1.2rem;
        }
        .stay-connected h5 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 0.8rem;
            color: #0f2b3d;
        }
        .social-icons-sidebar {
            display: flex;
            gap: 1rem;
            margin-top: 0.5rem;
        }
        .social-icons-sidebar a {
            background: #f1f5f9;
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: #ff6b1e;
            font-size: 1.2rem;
            transition: all 0.2s;
            text-decoration: none;
        }
        .social-icons-sidebar a:hover {
            background: #ff6b1e;
            color: white;
            transform: translateY(-3px);
        }
        .btn-sidebar-main-contact {
            background-color: #ff6b1e;
            color: white;
            border-radius: 40px;
            padding: 0.8rem 0;
            text-align: center;
            font-weight: 600;
            display: block;
            width: 100%;
            transition: 0.2s;
            margin-top: 0.5rem;
            text-decoration: none;
        }
        .btn-sidebar-main-contact:hover {
            background-color: #e05a10;
            color: white;
        }

        /* hero dummy content */
        .hero-placeholder {
            text-align: center;
            padding: 4rem 1rem;
            background: linear-gradient(145deg, #faf9fc 0%, #ffffff 100%);
        }
        .hero-placeholder h1 {
            font-weight: 700;
            font-size: 2.2rem;
            color: #111;
        }
        .hero-placeholder p {
            color: #4a5568;
            max-width: 700px;
            margin: 1rem auto;
        }

        /* responsiveness: menu icon only visible on desktop/laptop screens (992px and up) */
        @media (max-width: 991px) {
            .desktop-nav-wrapper {
                display: none !important;
            }
            .mobile-nav-trigger {
                display: flex !important;
            }
            .navbar-brand {
                font-size: 1.7rem;
            }
        }
        @media (min-width: 992px) {
            .mobile-nav-trigger {
                display: flex !important;
            }
            .desktop-nav-wrapper {
                display: flex !important;
            }
            /* ensure menu icon is always present on desktop/laptop as requested */
            .menu-icon {
                display: flex;
            }
        }

        .container-fluid-custom {
            width: 100%;
            padding-right: 20rem;
            padding-left: 2rem;
            margin-right: auto;
            margin-left: auto;
        }
        @media (max-width: 1400px) {
            .container-fluid-custom {
                padding-right: 5rem;
            }
        }
        @media (max-width: 1200px) {
            .container-fluid-custom {
                padding-right: 3rem;
            }
        }
        @media (max-width: 991px) {
            .container-fluid-custom {
                padding-right: 1rem;
                padding-left: 1rem;
            }
        }

        footer small {
            display: block;
            text-align: center;
            padding: 2rem;
            color: #6c757d;
            background: #f8f9fa;
            margin-top: 2rem;
        }
        .navbar-nav-desktop .nav-link-custom {
            white-space: nowrap;
        }
        .sidebar-menu::-webkit-scrollbar {
            width: 4px;
        }
        .sidebar-menu::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        .sidebar-menu::-webkit-scrollbar-thumb {
            background: #ff6b1e;
            border-radius: 10px;
        }
        /* additional spacing */
        .services-list-preview {
            margin-top: 1rem;
        }
        .fas.fa-bars{
            margin-left: 28rem;
        }
    </style>
</head>
<body>

    <!-- Navbar with complete desktop navigation and right-corner menu icon -->
    <nav class="navbar-tech">
        <div class="container-fluid-custom d-flex align-items-center justify-content-between">
            <a class="navbar-brand" href="#">Exyvotech</a>

            <!-- Desktop Navigation (enhanced with Services dropdown containing all services) -->
            <div class="desktop-nav-wrapper">
                <ul class="navbar-nav-desktop">
                    <li><a href="#" class="nav-link-custom" data-nav="home">HOME</a></li>
                    <li><a href="#" class="nav-link-custom" data-nav="projects">PROJECTS</a></li>
                    <li><a href="#" class="nav-link-custom" data-nav="pricing">PRICING PLAN</a></li>
                    <li><a href="#" class="nav-link-custom" data-nav="blogs">BLOGS</a></li>
                    <!-- SERVICES with Dropdown (full list matching all services) -->
                    <li class="services-dropdown">
                        <a href="#" class="nav-link-custom" id="servicesDesktopLink" data-nav="services">
                            SERVICES <i class="fas fa-chevron-down dropdown-arrow"></i>
                        </a>
                        <ul class="dropdown-menu-custom">
                            <li><a href="custom-website-development.php" class="dropdown-item" data-service="Custom Web Development"><i class="fas fa-code"></i> Custom Web Development</a></li>
                            <li><a href="e-commerce-solution.php" class="dropdown-item" data-service="E-Commerce Solutions"><i class="fas fa-shopping-cart"></i> E-Commerce Solutions</a></li>
                            <li><a href="logo-design.php" class="dropdown-item" data-service="Logo Design"><i class="fas fa-paint-brush"></i> Logo Design</a></li>
                            <li><a href="web-design-development.php" class="dropdown-item" data-service="Web Design & Development"><i class="fas fa-laptop-code"></i> Web Design & Development</a></li>
                            <li><a href="illustration.php" class="dropdown-item" data-service="Illustration"><i class="fas fa-pen-fancy"></i> Illustration</a></li>
                            <li><a href="video-animation.php" class="dropdown-item" data-service="Video Animation"><i class="fas fa-video"></i> Video Animation</a></li>
                            <li><a href="mobile-app-development.php" class="dropdown-item" data-service="Mobile App Development"><i class="fas fa-mobile-alt"></i> Mobile App Development</a></li>
                            <li><a href="social-media-marketing.php" class="dropdown-item" data-service="Social Media Marketing"><i class="fas fa-chart-line"></i> Social Media Marketing</a></li>
                            <li><a href="digital-marketing.php" class="dropdown-item" data-service="Digital Marketing"><i class="fas fa-bullhorn"></i> Digital Marketing</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="nav-link-custom" data-nav="about">ABOUT US</a></li>
                    <li><a href="#" class="nav-link-custom btn-contact-nav" data-nav="contact">Contact</a></li>
                </ul>
            </div>

            <!-- Menu Icon (Hamburger) always visible at right corner for all desktop/laptop screens -->
            <div class="mobile-nav-trigger">
                <button class="menu-icon" id="openSidebarBtn" aria-label="Open Menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- RIGHT SIDEBAR (same as provided image: contact details, address, social, etc.) -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    <div class="sidebar-menu" id="sidebarMenu">
        <button class="close-sidebar" id="closeSidebarBtn"><i class="fas fa-times"></i></button>
        
        <ul class="sidebar-nav-list">
            <li><a href="#" class="nav-link-custom" data-side-nav="home">HOME</a></li>
            <li><a href="#" class="nav-link-custom" data-side-nav="projects">PROJECTS</a></li>
            <li><a href="#" class="nav-link-custom" data-side-nav="pricing">PRICING PLAN</a></li>
            <li><a href="#" class="nav-link-custom" data-side-nav="blogs">BLOGS</a></li>
            <!-- SERVICES dropdown inside sidebar (accordion style) -->
            <li class="sidebar-services-group">
                <button class="sidebar-dropdown-toggle" id="sidebarServicesToggle">
                    SERVICES <i class="fas fa-chevron-down"></i>
                </button>
                <ul class="sidebar-submenu" id="sidebarServicesSubmenu">
                    <li><a href="custom-website-development.php" class="dropdown-item-side" data-side-service="Custom Web Development"><i class="fas fa-code"></i> Custom Web Development</a></li>
                    <li><a href="#" class="dropdown-item-side" data-side-service="E-Commerce Solutions"><i class="fas fa-shopping-cart"></i> E-Commerce Solutions</a></li>
                    <li><a href="#" class="dropdown-item-side" data-side-service="Logo Design"><i class="fas fa-paintbrush"></i> Logo Design</a></li>
                    <li><a href="#" class="dropdown-item-side" data-side-service="Web Design & Development"><i class="fas fa-laptop-code"></i> Web Design & Development</a></li>
                    <li><a href="#" class="dropdown-item-side" data-side-service="Illustration"><i class="fas fa-pen-fancy"></i> Illustration</a></li>
                    <li><a href="#" class="dropdown-item-side" data-side-service="Video Animation"><i class="fas fa-video"></i> Video Animation</a></li>
                    <li><a href="#" class="dropdown-item-side" data-side-service="Mobile App Development"><i class="fas fa-mobile-alt"></i> Mobile App Development</a></li>
                    <li><a href="#" class="dropdown-item-side" data-side-service="Social Media Marketing"><i class="fas fa-chart-line"></i> Social Media Marketing</a></li>
                    <li><a href="#" class="dropdown-item-side" data-side-service="Digital Marketing"><i class="fas fa-bullhorn"></i> Digital Marketing</a></li>
                </ul>
            </li>
            <li><a href="#" class="nav-link-custom" data-side-nav="about">ABOUT US</a></li>
        </ul>
        
        <!-- Contact Details (exactly as provided in the image: phone, email, address with AU and CA, stay connected) -->
        <div class="sidebar-contact-info">
            <div class="contact-section-title">📞 Reach Out</div>
            <div class="contact-detail-item">
                <i class="fas fa-phone-alt"></i>
                <div class="detail-text">
                    <strong>Phone</strong>
                    +1 365 601 4348 <br>
                    +61 3 6184 7156
                </div>
            </div>
            <div class="contact-detail-item">
                <i class="fas fa-envelope"></i>
                <div class="detail-text">
                    <strong>Email</strong>
                    info@Exyvotech.com
                </div>
            </div>
            <div class="contact-detail-item">
                <i class="fas fa-map-marker-alt"></i>
                <div class="detail-text">
                    <strong>Address</strong>
                    <div class="address-block"><strong>Australia (Remote Services)</strong><br>402/9 Yarra Street, South Yarra, Victoria, Australia</div>
                    <div class="address-block"><strong>Canada (Registered Office)</strong><br>7423 Saint Barbara Blvd, Mississauga, L5W 0G3, ON</div>
                </div>
            </div>
            <div class="stay-connected">
                <h5><i class="fas fa-share-alt" style="color:#ff6b1e; margin-right: 6px;"></i> Stay Connected</h5>
                <div class="social-icons-sidebar">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
                <a href="#" class="btn-sidebar-main-contact" data-side-nav="contact">Get in Touch 📧</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    (function() {
        // preserve all original functionalities, add sidebar interactions without breaking any existing feature
        const desktopLinks = document.querySelectorAll('.navbar-nav-desktop .nav-link-custom:not(.services-dropdown .nav-link-custom)');
        const desktopServicesLink = document.getElementById('servicesDesktopLink');
        const sidebarLinks = document.querySelectorAll('.sidebar-nav-list .nav-link-custom');
        const sidebarToggle = document.getElementById('sidebarServicesToggle');
        const sidebarSubmenu = document.getElementById('sidebarServicesSubmenu');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const sidebarMenu = document.getElementById('sidebarMenu');
        const openBtn = document.getElementById('openSidebarBtn');
        const closeBtn = document.getElementById('closeSidebarBtn');
        const sidebarContactBtn = document.querySelector('.btn-sidebar-main-contact');
        
        // Helper: update active states across desktop and sidebar without breaking existing behavior
        function removeActiveDesktop() {
            document.querySelectorAll('.navbar-nav-desktop .nav-link-custom').forEach(link => link.classList.remove('active'));
        }
        function removeActiveSidebar() {
            sidebarLinks.forEach(link => link.classList.remove('active'));
            if(sidebarContactBtn) sidebarContactBtn.classList.remove('active');
            document.querySelectorAll('.dropdown-item-side').forEach(item => item.classList.remove('active'));
            document.querySelectorAll('.dropdown-item').forEach(item => item.classList.remove('active'));
        }
        function setActive(navId) {
            removeActiveDesktop();
            removeActiveSidebar();
            // desktop nav active
            document.querySelectorAll('.navbar-nav-desktop .nav-link-custom').forEach(link => {
                let navVal = link.getAttribute('data-nav');
                if(navVal === navId) link.classList.add('active');
            });
            if(navId === 'services' && desktopServicesLink) desktopServicesLink.classList.add('active');
            // sidebar active
            sidebarLinks.forEach(link => {
                let sideVal = link.getAttribute('data-side-nav');
                if(sideVal === navId) link.classList.add('active');
            });
            if(navId === 'contact' && sidebarContactBtn) sidebarContactBtn.classList.add('active');
            // highlight contact btn on desktop background
            const contactDesktop = document.querySelector('.navbar-nav-desktop .btn-contact-nav');
            if(contactDesktop) {
                if(navId === 'contact') contactDesktop.style.backgroundColor = "#e05a10";
                else contactDesktop.style.backgroundColor = "#ff6b1e";
            }
        }
        
        // Desktop core nav event handlers (preserve original behavior)
        document.querySelectorAll('.navbar-nav-desktop .nav-link-custom').forEach(link => {
            if(link.closest('.services-dropdown') && link !== desktopServicesLink) return;
            link.addEventListener('click', (e) => {
                if(link.classList.contains('btn-contact-nav') || link.getAttribute('data-nav')) {
                    e.preventDefault();
                    const navItem = link.getAttribute('data-nav');
                    if(navItem) setActive(navItem);
                }
            });
        });
        
        // ========== FIXED: Services dropdown items (desktop) - REMOVED ALERT ==========
        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', (e) => {
                // Allow normal link navigation - NO ALERT
                // The link will naturally navigate to the href URL
                // No e.preventDefault() and no alert()
            });
        });
        
        // Sidebar nav links
        sidebarLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const sideNav = link.getAttribute('data-side-nav');
                if(sideNav) {
                    setActive(sideNav);
                    closeSidebar();
                }
            });
        });
        // Sidebar services dropdown toggle (accordion) - smooth open/close
        if(sidebarToggle && sidebarSubmenu) {
            sidebarToggle.addEventListener('click', (e) => {
                e.preventDefault();
                sidebarSubmenu.classList.toggle('open-sub');
                const icon = sidebarToggle.querySelector('i');
                if(icon) icon.style.transform = sidebarSubmenu.classList.contains('open-sub') ? 'rotate(180deg)' : 'rotate(0deg)';
            });
        }
        
        // ========== FIXED: Sidebar service items - REMOVED ALERT ==========
        document.querySelectorAll('.dropdown-item-side').forEach(item => {
            item.addEventListener('click', (e) => {
                // Allow normal link navigation - NO ALERT and NO preventDefault
                // The link will naturally navigate to the href URL
                closeSidebar(); // Just close sidebar, don't block navigation
            });
        });
        
        if(sidebarContactBtn) {
            sidebarContactBtn.addEventListener('click', (e) => {
                e.preventDefault();
                setActive('contact');
                closeSidebar();
            });
        }
        
        // open/close sidebar functions with body scroll lock
        function openSidebar() {
            sidebarMenu.classList.add('open');
            sidebarOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
        function closeSidebar() {
            sidebarMenu.classList.remove('open');
            sidebarOverlay.classList.remove('active');
            document.body.style.overflow = '';
            if(sidebarSubmenu) sidebarSubmenu.classList.remove('open-sub');
            if(sidebarToggle) {
                const icon = sidebarToggle.querySelector('i');
                if(icon) icon.style.transform = 'rotate(0deg)';
            }
        }
        if(openBtn) openBtn.addEventListener('click', openSidebar);
        if(closeBtn) closeBtn.addEventListener('click', closeSidebar);
        if(sidebarOverlay) sidebarOverlay.addEventListener('click', closeSidebar);
        
        // On window resize if screen bigger than 992 and sidebar open, close it gracefully but menu icon always present
        window.addEventListener('resize', () => {
            if(window.innerWidth >= 992 && sidebarMenu.classList.contains('open')) closeSidebar();
        });
        setActive('home');
    })();
</script>
</body>
</html>