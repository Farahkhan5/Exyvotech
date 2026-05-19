<?php
// index.php - Exyvotech Dynamic Hero Section with Rotating Content Slider
// Includes header.php for navigation (navbar code is separate as requested)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Exyvotech | Innovative Digital Solutions</title>
    <!-- Bootstrap 5 CSS + Icons + Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts: Ubuntu + Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- About Agency CSS -->
    <link rel="stylesheet" href="about.css">
    <!-- Services CSS -->
    <link rel="stylesheet" href="services.css">
    <!-- Expertise CSS -->
    <link rel="stylesheet" href="expertise.css">
    <!-- Why Choose CSS -->
    <link rel="stylesheet" href="why-choose.css">
    <!-- Join & Features CSS -->
    <link rel="stylesheet" href="join-features.css">
    <!-- How It Works CSS -->
    <link rel="stylesheet" href="how-it-works.css">
    <!-- Testimonials CSS -->
    <link rel="stylesheet" href="testimonials.css">
    <!-- Key Benefits CSS -->
    <link rel="stylesheet" href="key_benefits.css">
    <!-- Latest News CSS -->
    <link rel="stylesheet" href="latest_news.css">
    <!-- Let's Collaborate CSS -->
    <link rel="stylesheet" href="lets_collaborate.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Ubuntu', sans-serif;
            background: #ffffff;
            overflow-x: hidden;
        }

        /* ========== HERO SECTION (SLIDER with particle animation background) ========== */
        .hero-section {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #331100 0%, #000000 100%);
            overflow: hidden;
            padding: 6rem 0;
        }

        /* Canvas for Particle Animation (background effect) */
        #particleCanvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: block;
            z-index: 0;
            pointer-events: none;
        }

        .hero-container {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* left side: content slider */
        .hero-content {
            color: white;
            padding-right: 2rem;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255, 107, 30, 0.15);
            backdrop-filter: blur(4px);
            padding: 0.5rem 1.2rem;
            border-radius: 40px;
            font-size: 0.85rem;
            font-weight: 500;
            letter-spacing: 1px;
            color: #ff6b1e;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(255, 107, 30, 0.3);
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 800;
            line-height: 1.2;
            background: linear-gradient(to right, #ffffff, #e2e8f0);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Dynamic rotating text area */
        .rotating-text-wrapper {
            min-height: 120px;
            margin-bottom: 1.8rem;
        }

        .rotating-word {
            font-size: 3.8rem;
            font-weight: 700;
            color: #ff6b1e;
            display: inline-block;
            border-radius: 50px;
            backdrop-filter: blur(4px);
        }

        .static-text {
            font-size: 2rem;
            font-weight: 600;
            color: #cbd5e1;
            margin-right: 12px;
        }

        .hero-description {
            font-size: 1.1rem;
            color: #94a3b8;
            max-width: 550px;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .hero-buttons .btn-primary-custom {
            background: #ff6b1e;
            border: none;
            padding: 0.9rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
            color: white;
            margin-right: 1rem;
            box-shadow: 0 8px 20px rgba(255, 107, 30, 0.3);
        }

        .hero-buttons .btn-primary-custom:hover {
            background: #e05a10;
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(255, 107, 30, 0.4);
        }

        .hero-buttons .btn-outline-light {
            border-radius: 50px;
            padding: 0.9rem 2rem;
            font-weight: 500;
            border: 1.5px solid rgba(255, 255, 255, 0.3);
            color: white;
        }

        .hero-buttons .btn-outline-light:hover {
            background: rgba(255, 107, 30, 0.2);
            border-color: #ff6b1e;
            color: #ffffff;
        }

        /* Right side: Image/Illustration */
        .hero-visual {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .floating-illustration {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 0;
        }

        .floating-illustration img {
            width: 100%;
            animation: floatImage 6s ease-in-out infinite;
            filter: drop-shadow(0 20px 30px rgba(0, 0, 0, 0.3));
        }

        @keyframes floatImage {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        /* animated circles background on right */
        .hero-visual::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255, 107, 30, 0.2) 0%, rgba(255, 107, 30, 0) 70%);
            border-radius: 50%;
            z-index: -1;
            animation: pulseGlow 4s infinite;
        }

        @keyframes pulseGlow {
            0% {
                opacity: 0.3;
                transform: scale(0.8);
            }

            100% {
                opacity: 0.8;
                transform: scale(1.2);
            }
        }

        /* Slider content transition */
        .dynamic-content {
            transition: all 0.5s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }

        /* ========== MARQUEE SECTION STYLES ========== */
        .marquee-section {
            background: #ff6b1e;
            padding: 1.2rem 0;
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .marquee-wrapper {
            display: flex;
            align-items: center;
            white-space: nowrap;
            animation: marqueeScroll 25s linear infinite;
            gap: 3rem;
        }

        .marquee-item {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 2rem;
            font-weight: 500;
            color: #ffffff;
            letter-spacing: 0.5px;
            padding: 0.3rem 0;
        }

        .marquee-item i {
            color: #ff6b1e;
            font-size: 1.2rem;
        }

        .marquee-item span {
            color: #ffffff;
            font-weight: 700;
            margin-left: 0.25rem;
        }

        .marquee-divider {
            width: 6px;
            height: 6px;
            background-color: #ffffff;
            border-radius: 50%;
            opacity: 0.6;
            margin: 0 1rem;
        }

        .marquee-wrapper:hover {
            animation-play-state: paused;
        }

        @keyframes marqueeScroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @media (max-width: 768px) {
            .marquee-item {
                font-size: 0.85rem;
                gap: 0.5rem;
            }

            .marquee-wrapper {
                gap: 2rem;
                animation-duration: 20s;
            }
        }

        @media (max-width: 576px) {
            .marquee-item {
                font-size: 0.75rem;
            }

            .marquee-wrapper {
                gap: 1.5rem;
                animation-duration: 18s;
            }
        }

        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.8rem;
            }

            .static-text {
                font-size: 1.5rem;
            }

            .rotating-word {
                font-size: 2rem;
            }

            .hero-section {
                min-height: auto;
                padding: 4rem 0;
            }

            .hero-content {
                text-align: center;
                padding-right: 0;
                margin-bottom: 3rem;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }

            .static-text {
                font-size: 1.2rem;
                display: block;
                margin-bottom: 0.5rem;
            }

            .rotating-word {
                font-size: 1.7rem;
                display: inline-block;
            }

            .rotating-text-wrapper {
                min-height: 100px;
            }
        }

        /* dots / indicators */
        .slider-indicators {
            display: flex;
            gap: 12px;
            margin-top: 2rem;
        }

        .indicator-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #475569;
            cursor: pointer;
            transition: all 0.3s;
        }

        .indicator-dot.active {
            background-color: #ff6b1e;
            width: 28px;
            border-radius: 20px;
        }
    </style>
</head>

<body>

    <!-- Header / Navbar include -->
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <canvas id="particleCanvas"></canvas>
        <div class="hero-container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="hero-title">Innovative solutions for</h1>
                    <div id="dynamicSlider" class="dynamic-content">
                        <div class="rotating-text-wrapper">
                            <span class="rotating-word" id="rotatingText">Content Writing</span>
                        </div>
                    </div>
                    <p class="hero-description" id="sliderDescription">
                        High-quality, SEO-optimized content that drives organic traffic and establishes your brand as an authority.
                    </p>
                    <div class="hero-buttons">
                        <a href="#" class="btn btn-primary-custom">Get Started <i class="fas fa-arrow-right ms-2"></i></a>
                        <a href="#" class="btn btn-outline-light">Explore Services</a>
                    </div>
                    <div class="slider-indicators" id="sliderIndicators"></div>
                </div>
                <div class="col-lg-6 hero-visual">
                    <div class="floating-illustration">
                        <img src="hero_bg.png" alt="Exyvotech Innovation" onerror="this.src='https://placehold.co/600x500/1e293b/ff6b1e?text=Exyvotech+Visual'">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Marquee Section -->
    <section class="marquee-section">
        <div class="marquee-wrapper">
            <div class="marquee-item"><i class="fas fa-chart-line"></i><span>Point of Sale (POS)</span></div>
            <div class="marquee-divider"></div>
            <div class="marquee-item"><i class="fas fa-shield-alt"></i><span>Cyber Security</span></div>
            <div class="marquee-divider"></div>
            <div class="marquee-item"><i class="fas fa-pen-fancy"></i><span>SEO Content Writing</span></div>
            <div class="marquee-divider"></div>
            <div class="marquee-item"><i class="fas fa-mobile-alt"></i><span>App Development</span></div>
            <div class="marquee-divider"></div>
            <div class="marquee-item"><i class="fas fa-code"></i><span>Web Development</span></div>
            <div class="marquee-divider"></div>
            <div class="marquee-item"><i class="fas fa-chart-bar"></i><span>Digital Marketing</span></div>
            <div class="marquee-divider"></div>
            <div class="marquee-item"><i class="fas fa-palette"></i><span>Graphic Designing</span></div>
            <!-- Duplicate set -->
            <div class="marquee-item"><i class="fas fa-chart-line"></i><span>Point of Sale (POS)</span></div>
            <div class="marquee-divider"></div>
            <div class="marquee-item"><i class="fas fa-shield-alt"></i><span>Cyber Security</span></div>
            <div class="marquee-divider"></div>
            <div class="marquee-item"><i class="fas fa-pen-fancy"></i><span>SEO Content Writing</span></div>
            <div class="marquee-divider"></div>
            <div class="marquee-item"><i class="fas fa-mobile-alt"></i><span>App Development</span></div>
            <div class="marquee-divider"></div>
            <div class="marquee-item"><i class="fas fa-code"></i><span>Web Development</span></div>
            <div class="marquee-divider"></div>
            <div class="marquee-item"><i class="fas fa-chart-bar"></i><span>Digital Marketing</span></div>
            <div class="marquee-divider"></div>
            <div class="marquee-item"><i class="fas fa-palette"></i><span>Graphic Designing</span></div>
        </div>
    </section>

    <!-- About Agency Section -->
    <section class="about-agency-wrapper">
        <div class="about-agency-container">
            <div class="about-agency-grid">
                <div class="about-left">
                    <div class="about-subtitle">ABOUT AGENCY</div>
                    <h2 class="about-headline">Crafting unique <span class="highlight-red">digital experiences</span><br>that elevate your brand</h2>
                    <p class="about-description">We measure our success through the achievements of our clients. With a results-driven approach and a commitment to quality, we deliver digital solutions that create meaningful impact.</p>
                    <a href="#" class="about-btn">Contact Us <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="about-right">
                    <div class="about-timeline">
                        <div class="about-timeline-item">
                            <div class="about-icon-box"><i class="fas fa-trophy"></i></div>
                            <h3 class="about-item-title">Your Success, Our Mission</h3>
                            <p class="about-item-desc">We measure our success through the achievements of our clients. With a results-driven approach and a commitment to quality, we deliver digital solutions that create meaningful impact.</p>
                        </div>
                        <div class="about-timeline-item">
                            <div class="about-icon-box"><i class="fas fa-microchip"></i></div>
                            <h3 class="about-item-title">Creators Of Digital Excellence</h3>
                            <p class="about-item-desc">Driven by innovation and excellence, we reimagine digital possibilities. Our team builds solutions that not only fulfill your vision but also elevate your brand to the next level.</p>
                        </div>
                        <div class="about-timeline-item">
                            <div class="about-icon-box"><i class="fas fa-chart-line"></i></div>
                            <h3 class="about-item-title">Innovating the digital landscape</h3>
                            <p class="about-item-desc">At the core of our agency is a commitment to excellence and creativity. We specialize in crafting digital solutions that not only meet your needs but also exceed your brand.</p>
                        </div>
                        <div class="about-timeline-item">
                            <div class="about-icon-box"><i class="fas fa-rocket"></i></div>
                            <h3 class="about-item-title">Helping Brands Thrive Online</h3>
                            <p class="about-item-desc">Our goal is simple: empower brands to grow and succeed in the digital world. Through strong client partnerships and custom strategies, we deliver results that matter.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-wrapper">
        <div class="services-container">
            <div class="services-header">
                <div class="services-header-left">
                    <div class="services-label">OUR SERVICES</div>
                    <h2 class="services-headline">Our <span class="highlight-red">digital services</span><br>to grow your brand</h2>
                </div>
                <div class="services-header-right">
                    <p class="services-description">Join our creative community to collaborate, Exyvotech, and thrive together. We welcome passionate individuals eager to make.</p>
                    <div class="services-actions">
                        <a href="#" class="services-btn-all">All Services <i class="fas fa-arrow-right"></i></a>
                        <a href="#" class="services-btn-arrow"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-code"></i></div>
                    <div class="service-arrow"><i class="fas fa-arrow-right"></i></div>
                    <h3 class="service-title">Website Development</h3>
                    <p class="service-desc">We build responsive, fast, and secure websites tailored to your brand's needs, from eCommerce stores to custom web applications.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-chart-line"></i></div>
                    <div class="service-arrow"><i class="fas fa-arrow-right"></i></div>
                    <h3 class="service-title">Point of Sale (POS)</h3>
                    <p class="service-desc">Modern POS solutions to streamline your sales, inventory, and customer management for retail and service businesses.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-shield-alt"></i></div>
                    <div class="service-arrow"><i class="fas fa-arrow-right"></i></div>
                    <h3 class="service-title">Cyber Security</h3>
                    <p class="service-desc">Protect your digital assets with our comprehensive cybersecurity services, including threat analysis and prevention.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-mobile-alt"></i></div>
                    <div class="service-arrow"><i class="fas fa-arrow-right"></i></div>
                    <h3 class="service-title">IOS/Android App Development</h3>
                    <p class="service-desc">We design and develop high-performance mobile applications for both iOS and Android platforms to engage your users.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-chart-bar"></i></div>
                    <div class="service-arrow"><i class="fas fa-arrow-right"></i></div>
                    <h3 class="service-title">Digital Marketing</h3>
                    <p class="service-desc">Boost your online presence with our data-driven digital marketing strategies, including social media and PPC campaigns.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-pen-fancy"></i></div>
                    <div class="service-arrow"><i class="fas fa-arrow-right"></i></div>
                    <h3 class="service-title">SEO Content Writing</h3>
                    <p class="service-desc">High-quality, SEO-optimized content that drives organic traffic and establishes your brand as an industry authority.</p>
                </div>
            </div>
            <div class="services-bottom">
                <p class="services-bottom-text">Let's make something great work together. <a href="#" class="highlight-red">Get Free Quote <i class="fas fa-arrow-right"></i></a></p>
            </div>
        </div>
    </section>

    <!-- Expertise / Stats Section -->
    <section class="expertise-wrapper">
        <div class="expertise-container">
            <div class="expertise-card">
                <div class="expertise-grid">
                    <div class="expertise-left">
                        <div class="expertise-heading-wrapper">
                            <span class="expertise-red-dot"></span>
                            <h2 class="expertise-heading">
                                Expertise that drives <span class="highlight-red">success</span>
                            </h2>
                        </div>
                        <div class="expertise-stats-row">
                            <div class="expertise-stat">
                                <span class="expertise-stat-number">+60%</span>
                                <p class="expertise-stat-desc">By optimizing your website for search engines.</p>
                            </div>
                            <div class="expertise-stat">
                                <span class="expertise-stat-number">+30%</span>
                                <p class="expertise-stat-desc">Rise in revenue as more visitors convert into paying customers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="expertise-right">
                        <div class="expertise-item">
                            <div class="expertise-item-title">
                                <span class="expertise-item-icon"><i class="fas fa-star"></i></span>
                                Social Media Management:
                            </div>
                            <p class="expertise-item-desc">Our social media management services focus on building and enhancing your brand's online presence. We create engaging content, manage your social media accounts, and analyze performance.</p>
                        </div>
                        <div class="expertise-item">
                            <div class="expertise-item-title">
                                <span class="expertise-item-icon"><i class="fas fa-shopping-cart"></i></span>
                                E-commerce Solutions:
                            </div>
                            <p class="expertise-item-desc">Our e-commerce solutions are designed to create seamless online shopping experiences. From user-friendly website design to secure payment processing and inventory management.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-wrapper">
        <div class="why-choose-container">
            <div class="why-choose-grid">
                <div class="why-choose-left">
                    <div class="why-choose-label">WHY CHOOSE</div>
                    <h2 class="why-choose-headline">
                        Expertise for <span class="highlight-red">your digital</span><br>growth journey
                    </h2>
                    <div class="why-choose-features">
                        <div class="why-choose-card">
                            <div class="why-choose-card-title">
                                <span class="why-choose-card-icon"><i class="fas fa-chart-line"></i></span>
                                Data-Driven Approach
                            </div>
                            <p class="why-choose-card-desc">We leverage data and insights to make informed decisions that lead to more effective and efficient solutions.</p>
                        </div>
                        <div class="why-choose-card">
                            <div class="why-choose-card-title">
                                <span class="why-choose-card-icon"><i class="fas fa-tag"></i></span>
                                Competitive Pricing
                            </div>
                            <p class="why-choose-card-desc">We offer our top-quality services at competitive prices, providing you with great value for your investment.</p>
                        </div>
                        <div class="why-choose-card">
                            <div class="why-choose-card-title">
                                <span class="why-choose-card-icon"><i class="fas fa-handshake"></i></span>
                                Ethical Business Practices
                            </div>
                            <p class="why-choose-card-desc">We maintain the highest level of professionalism and ethical standards in all our business dealings.</p>
                        </div>
                    </div>
                </div>
                <div class="why-choose-right">
                    <p class="why-choose-header-desc">
                        Our dedicated team is committed to understanding your unique needs, ensuring that we provide innovative strategies that drive results. With a focus on quality and integrity.
                    </p>
                    <div class="why-choose-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=600&fit=crop"
                            alt="Business team collaboration"
                            class="why-choose-image"
                            onerror="this.src='https://placehold.co/800x600/1a1a2e/ff3b3b?text=Business+Team'">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Our Agency + Features Section -->
    <section class="join-features-wrapper">
        <div class="join-features-container">
            <div class="join-agency-section">
                <div class="join-header">
                    <div class="join-header-left">
                        <h2 class="join-headline">
                            Join our <span class="highlight-red">agency</span><br>of creative innovators
                        </h2>
                    </div>
                    <div class="join-header-right">
                        <p class="join-description">
                            Join our creative community to collaborate, Exyvotech, and thrive together. We welcome passionate individuals eager to make a difference.
                        </p>
                    </div>
                </div>
                
                <div class="social-cards-grid">
                    <div class="social-card">
                        <div class="social-card-left">
                            <div class="social-icon-circle"><i class="fab fa-facebook-f"></i></div>
                            <div class="social-info"><h4>Facebook</h4><p>@acciobyte</p></div>
                        </div>
                        <div class="social-arrow"><i class="fas fa-arrow-right"></i></div>
                    </div>
                    <div class="social-card">
                        <div class="social-card-left">
                            <div class="social-icon-circle"><i class="fab fa-linkedin-in"></i></div>
                            <div class="social-info"><h4>LinkedIn</h4><p>@acciobyte</p></div>
                        </div>
                        <div class="social-arrow"><i class="fas fa-arrow-right"></i></div>
                    </div>
                    <div class="social-card">
                        <div class="social-card-left">
                            <div class="social-icon-circle"><i class="fab fa-instagram"></i></div>
                            <div class="social-info"><h4>Instagram</h4><p>@acciobyte</p></div>
                        </div>
                        <div class="social-arrow"><i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            
            <div class="features-section">
                <div class="features-header">
                    <div class="features-header-left">
                        <div class="features-label">FEATURES</div>
                        <h2 class="features-headline">
                            Innovative <span class="highlight-red">features</span><br>for your digital success
                        </h2>
                    </div>
                    <div class="features-header-right">
                        <p class="features-description">Our digital services empower brands with innovative strategies and solutions for sustainable growth and engagement.</p>
                        <div class="features-actions">
                            <a href="#" class="features-btn-learn">Learn More <i class="fas fa-arrow-right"></i></a>
                            <a href="#" class="features-btn-arrow"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="features-cards-grid">
                    <div class="feature-card">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop" alt="Custom Branding" class="feature-image" onerror="this.src='https://placehold.co/600x400/1a1a2e/ff3b3b?text=Custom+Branding'">
                        <div class="feature-content">
                            <h3 class="feature-title">Custom Branding Solutions</h3>
                            <p class="feature-desc">Unique brand identity development, including logos, color palettes.</p>
                        </div>
                    </div>
                    <div class="feature-card">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop" alt="Digital Marketing" class="feature-image" onerror="this.src='https://placehold.co/600x400/1a1a2e/ff3b3b?text=Digital+Marketing'">
                        <div class="feature-content">
                            <h3 class="feature-title">Data-Driven Digital Marketing</h3>
                            <p class="feature-desc">Strategies combining SEO, PPC, content marketing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works-wrapper">
        <div class="how-it-works-container">
            <div class="how-it-works-header">
                <div class="how-it-works-header-left">
                    <div class="how-it-works-label">HOW IT WORK</div>
                    <h2 class="how-it-works-headline">
                        Our proven <span class="highlight-red">process</span><br>for achieving success
                    </h2>
                </div>
                <div class="how-it-works-header-right">
                    <p class="how-it-works-description">
                        Our proven process combines research, strategy, and creativity to deliver tailored solutions that drive measurable results.
                    </p>
                </div>
            </div>

            <div class="how-it-works-filters">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="app">App Development</button>
                <button class="filter-btn" data-filter="website">Website Development</button>
                <button class="filter-btn" data-filter="branding">Branding</button>
                <button class="filter-btn" data-filter="illustration">Illustration</button>
                <button class="filter-btn" data-filter="logo">Logo</button>
            </div>

            <div class="how-it-works-grid" id="processGrid">
                <div class="process-card" data-category="app">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&h=400&fit=crop" alt="App Development" class="process-card-image" onerror="this.src='https://placehold.co/600x400/1a1a2e/ff3b3b?text=App+Development'">
                    <div class="process-card-badge">App Development</div>
                    <div class="process-card-content">
                        <h3 class="process-card-title">App Development</h3>
                        <p class="process-card-desc">We design and develop high-performance mobile applications for both iOS and Android platforms to engage your users.</p>
                    </div>
                </div>
                <div class="process-card" data-category="website">
                    <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?w=600&h=400&fit=crop" alt="Website Development" class="process-card-image" onerror="this.src='https://placehold.co/600x400/1a1a2e/ff3b3b?text=Website+Development'">
                    <div class="process-card-badge">Website Development</div>
                    <div class="process-card-content">
                        <h3 class="process-card-title">Website Development</h3>
                        <p class="process-card-desc">We build responsive, fast, and secure websites tailored to your brand's needs, from eCommerce stores to custom web applications.</p>
                    </div>
                </div>
                <div class="process-card" data-category="branding">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600&h=400&fit=crop" alt="Branding" class="process-card-image" onerror="this.src='https://placehold.co/600x400/1a1a2e/ff3b3b?text=Branding'">
                    <div class="process-card-badge">Branding</div>
                    <div class="process-card-content">
                        <h3 class="process-card-title">Branding</h3>
                        <p class="process-card-desc">Unique brand identity development, including logos, color palettes, and complete visual identity systems.</p>
                    </div>
                </div>
                <div class="process-card" data-category="illustration">
                    <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?w=600&h=400&fit=crop" alt="Illustration" class="process-card-image" onerror="this.src='https://placehold.co/600x400/1a1a2e/ff3b3b?text=Illustration'">
                    <div class="process-card-badge">Illustration</div>
                    <div class="process-card-content">
                        <h3 class="process-card-title">Illustration</h3>
                        <p class="process-card-desc">Custom illustrations that bring your brand story to life with unique visual elements and creative designs.</p>
                    </div>
                </div>
                <div class="process-card" data-category="logo">
                    <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?w=600&h=400&fit=crop" alt="Logo Design" class="process-card-image" onerror="this.src='https://placehold.co/600x400/1a1a2e/ff3b3b?text=Logo+Design'">
                    <div class="process-card-badge">Logo</div>
                    <div class="process-card-content">
                        <h3 class="process-card-title">Logo Design</h3>
                        <p class="process-card-desc">Professional logo design that captures your brand essence and creates lasting impression.</p>
                    </div>
                </div>
                <div class="process-card" data-category="app">
                    <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?w=600&h=400&fit=crop" alt="Mobile App" class="process-card-image" onerror="this.src='https://placehold.co/600x400/1a1a2e/ff3b3b?text=Mobile+App'">
                    <div class="process-card-badge">App Development</div>
                    <div class="process-card-content">
                        <h3 class="process-card-title">Mobile App Solutions</h3>
                        <p class="process-card-desc">End-to-end mobile app development from concept to deployment on App Store and Google Play.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-wrapper">
        <div class="testimonials-container">
            <div class="testimonials-header">
                <div class="testimonials-header-left">
                    <div class="testimonials-label">TESTIMONIALS</div>
                    <h2 class="testimonials-headline">
                        Trusted By Clients Worldwide For <span class="highlight-red">Quality, Transparency, And Results.</span>
                    </h2>
                </div>
                <div class="testimonials-header-right">
                    <p class="testimonials-description">
                        Discover how our clients have achieved success through our innovative solutions and dedicated support.
                    </p>
                    <a href="#" class="testimonials-btn">All Testimonials <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="testimonials-rating">
                <div class="rating-box">
                    <span class="rating-number">4.9</span>
                    <span class="rating-max">/5.0</span>
                </div>
                <div class="rating-text">
                    <span class="review-count">(36 Reviews)</span>
                </div>
                <div class="rating-text">
                    Based on 36 Verified Reviews on Bark
                </div>
            </div>

            <div class="testimonial-card" id="testimonialCard">
                <div class="testimonial-company">Exyvotech</div>
                <p class="testimonial-text" id="testimonialText">
                    "Super impressed with their mobile app development service. The team listened carefully to our needs and delivered an app that exceeded expectations. A little delay in testing phase but they managed it professionally. Highly recommended!"
                </p>
                <div class="testimonial-author">
                    <div class="author-info">
                        <h4 id="authorName">Olivia Reed</h4>
                        <p id="authorDesignation">Marketing Manager</p>
                    </div>
                    <div class="testimonial-nav">
                        <div class="nav-btn" id="prevTestimonial">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="nav-btn" id="nextTestimonial">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonials-features">
                <div class="feature-item">
                    <h4 class="feature-title">Low Cost</h4>
                    <ul class="feature-list">
                        <li>Competitive fee</li>
                        <li>Flexible rates</li>
                    </ul>
                </div>
                <div class="feature-item">
                    <h4 class="feature-title">Permission Less</h4>
                    <ul class="feature-list">
                        <li>Open for integration</li>
                        <li>Run your own nodes</li>
                    </ul>
                </div>
                <div class="feature-item">
                    <h4 class="feature-title">Secure Data</h4>
                    <ul class="feature-list">
                        <li>Open source sheet</li>
                        <li>360 Security</li>
                    </ul>
                </div>
                <div class="feature-item">
                    <h4 class="feature-title">24 X 7 Support</h4>
                    <ul class="feature-list">
                        <li>Toll free number</li>
                        <li>Ticket systems</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Benefits Section -->
    <section class="key-benefits-wrapper">
        <div class="key-benefits-container">
            <div class="key-benefits-header">
                <div class="key-benefits-header-left">
                    <div class="key-benefits-label">
                        <i class="fas fa-circle"></i>
                        KEY BENEFITS
                    </div>
                    <h2 class="key-benefits-headline">
                        Discover the <span class="highlight-red">benefits</span><br>of choosing us today
                    </h2>
                </div>
                <div class="key-benefits-header-right">
                    <p class="key-benefits-description">
                        Join our creative community to collaborate, Exyvotech, and thrive together. We welcome passionate individuals eager to make a difference.
                    </p>
                </div>
            </div>

            <div class="key-benefits-grid">
                <div class="key-benefit-card">
                    <div class="key-benefit-number">01</div>
                    <div class="key-benefit-icon"><i class="fas fa-user-check"></i></div>
                    <h3 class="key-benefit-title">Personalized Approach</h3>
                    <p class="key-benefit-desc">We customize strategies to fit your brand's specific needs, ensuring alignment with your goals and vision.</p>
                </div>
                <div class="key-benefit-card">
                    <div class="key-benefit-number">02</div>
                    <div class="key-benefit-icon"><i class="fas fa-users"></i></div>
                    <h3 class="key-benefit-title">Experienced Team</h3>
                    <p class="key-benefit-desc">Combines industry knowledge and creativity to achieve exceptional results for your brand.</p>
                </div>
                <div class="key-benefit-card">
                    <div class="key-benefit-number">03</div>
                    <div class="key-benefit-icon"><i class="fas fa-chart-pie"></i></div>
                    <h3 class="key-benefit-title">Data-Driven Decisions</h3>
                    <p class="key-benefit-desc">We utilize data insights to refine strategies, optimize and ensure impactful, measurable results.</p>
                </div>
                <div class="key-benefit-card">
                    <div class="key-benefit-number">04</div>
                    <div class="key-benefit-icon"><i class="fas fa-headset"></i></div>
                    <h3 class="key-benefit-title">Ongoing Support</h3>
                    <p class="key-benefit-desc">We provide continuous support and maintenance to keep your digital assets at their best.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="latest-news-wrapper">
        <div class="latest-news-container">
            <div class="latest-news-header">
                <div class="latest-news-header-left">
                    <div class="latest-news-label">LATEST NEWS</div>
                    <h2 class="latest-news-headline">
                        Insights on <span class="highlight-red">innovation and growth</span>
                    </h2>
                </div>
                <div class="latest-news-header-right">
                    <p class="latest-news-description">
                        Explore the latest trends, strategies, and tools driving digital innovation and helping businesses thrive in a rapidly evolving digital landscape.
                    </p>
                </div>
            </div>

            <div class="latest-news-grid">
                <div class="news-card">
                    <img src="https://images.unsplash.com/photo-1639762681485-074b7f938ba0?w=600&h=400&fit=crop" alt="Web 3.0" class="news-card-image" onerror="this.src='https://placehold.co/600x400/1a1a2e/ff3b3b?text=Web+3.0'">
                    <div class="news-card-content">
                        <h3 class="news-card-title">Web 3.0 - How It's Changing the Internet</h3>
                        <a href="#" class="news-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-card">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&h=400&fit=crop" alt="Mobile App Security" class="news-card-image" onerror="this.src='https://placehold.co/600x400/1a1a2e/ff3b3b?text=Mobile+Security'">
                    <div class="news-card-content">
                        <h3 class="news-card-title">Best Practices for Secure Mobile App Development</h3>
                        <a href="#" class="news-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-card">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=600&h=400&fit=crop" alt="Progressive Web Apps" class="news-card-image" onerror="this.src='https://placehold.co/600x400/1a1a2e/ff3b3b?text=PWA'">
                    <div class="news-card-content">
                        <h3 class="news-card-title">Progressive Web Apps (PWA) - The Future of Mobile Experience</h3>
                        <a href="#" class="news-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="news-slider-dots">
                <div class="news-dot active"></div>
                <div class="news-dot"></div>
                <div class="news-dot"></div>
            </div>
        </div>
    </section>

    <!-- ========== LET'S COLLABORATE CTA + FOOTER SECTION ========== -->
    <!-- CTA Section -->
    <section class="collaborate-cta-wrapper">
        <div class="collaborate-container">
            <div class="collaborate-cta-content">
                <div class="collaborate-label">LET'S COLLABORATE</div>
                <h2 class="collaborate-headline">LET'S WORK<br>TOGETHER</h2>
                <div class="collaborate-btn-wrapper">
                    <a href="#" class="collaborate-cta-btn">
                        <span>Get<br>In Touch</span>
                    </a>
                </div>
            </div>
            <div class="collaborate-divider"></div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="collaborate-footer-wrapper">
        <div class="collaborate-container">
            <div class="footer-grid">
                <!-- Column 1: Brand + Contact -->
                <div class="footer-column">
                    <a href="#" class="footer-logo">Exyvotech</a>
                    <p class="footer-description">Innovative digital solutions for brands worldwide. We craft unique digital experiences that elevate your business.</p>
                    <div class="footer-contact-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@Exyvotech.com">info@Exyvotech.com</a>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>Australia: +61 3 6184 7156</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>Canada: +1 365 601 4348</span>
                    </div>
                </div>

                <!-- Column 2: Popular Services -->
                <div class="footer-column">
                    <h3 class="footer-title">Popular Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Website Development</a></li>
                        <li><a href="#">Android & iOS Development</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Graphic Designing</a></li>
                        <li><a href="#">Social Media Marketing</a></li>
                        <li><a href="#">Content Writing</a></li>
                        <li><a href="#">Search Engine Optimization</a></li>
                        <li><a href="#">Software Development</a></li>
                        <li><a href="#">Cyber Security</a></li>
                        <li><a href="#">E-Commerce</a></li>
                        <li><a href="#">Illustrations</a></li>
                        <li><a href="#">Video Animation</a></li>
                        <li><a href="#">Point of Sale (POS)</a></li>
                    </ul>
                </div>

                <!-- Column 3: Quick Links -->
                <div class="footer-column">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Pricing Plan</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Services</a></li>
                        <li><a href="#">Refund Policy</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact Information + Office Locations -->
                <div class="footer-column">
                    <h3 class="footer-title">Contact Information</h3>
                    <div class="footer-contact-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@Exyvotech.com">info@Exyvotech.com</a>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>Australia: +61 3 6184 7156</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>Canada: +1 365 601 4348</span>
                    </div>
                    
                    <h3 class="footer-title" style="margin-top: 1.5rem;">Office Locations</h3>
                    <div class="office-location">
                        <strong>Australia (Remote Services)</strong>
                        <p>402/9 Yarra Street, South Yarra, Victoria, Australia</p>
                    </div>
                    <div class="office-location">
                        <strong>Canada (Registered Office)</strong>
                        <p>7423 Saint Barbara Blvd, Mississauga, L5W 0G3, ON</p>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>© 2026 Exyvotech. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Slider Data
        const slidesData = [{
                titleWord: "Content Writing",
                description: "High-quality, SEO-optimized content that drives organic traffic and establishes your brand as an authority."
            },
            {
                titleWord: "Web Development",
                description: "Responsive, fast, and secure websites tailored to your brand's needs — from eCommerce to custom web apps."
            },
            {
                titleWord: "Cyber Security",
                description: "Protect your digital assets with comprehensive threat analysis, prevention, and 360° security solutions."
            },
            {
                titleWord: "App Development",
                description: "High-performance iOS & Android mobile applications designed to engage users and boost retention."
            },
            {
                titleWord: "Digital Marketing",
                description: "Data-driven SEO, PPC, and social media campaigns that skyrocket your online presence and ROI."
            }
        ];

        let currentIndex = 0;
        const rotatingTextEl = document.getElementById('rotatingText');
        const sliderDescEl = document.getElementById('sliderDescription');
        const indicatorsContainer = document.getElementById('sliderIndicators');
        let intervalId = null;

        function createIndicators() {
            indicatorsContainer.innerHTML = '';
            slidesData.forEach((_, idx) => {
                const dot = document.createElement('div');
                dot.classList.add('indicator-dot');
                if (idx === currentIndex) dot.classList.add('active');
                dot.addEventListener('click', () => {
                    if (intervalId) clearInterval(intervalId);
                    goToSlide(idx);
                    startAutoRotate();
                });
                indicatorsContainer.appendChild(dot);
            });
        }

        function updateIndicators() {
            const dots = document.querySelectorAll('.indicator-dot');
            dots.forEach((dot, idx) => {
                if (idx === currentIndex) dot.classList.add('active');
                else dot.classList.remove('active');
            });
        }

        function goToSlide(index) {
            if (index >= slidesData.length) index = 0;
            if (index < 0) index = slidesData.length - 1;
            currentIndex = index;
            const slide = slidesData[currentIndex];
            const dynamicDiv = document.getElementById('dynamicSlider');
            dynamicDiv.style.opacity = '0';
            dynamicDiv.style.transform = 'translateY(10px)';
            setTimeout(() => {
                rotatingTextEl.textContent = slide.titleWord;
                sliderDescEl.textContent = slide.description;
                dynamicDiv.style.transition = 'all 0.45s cubic-bezier(0.2, 0.9, 0.4, 1.1)';
                dynamicDiv.style.opacity = '1';
                dynamicDiv.style.transform = 'translateY(0)';
            }, 180);
            updateIndicators();
        }

        function nextSlide() { goToSlide(currentIndex + 1); }
        function startAutoRotate() {
            if (intervalId) clearInterval(intervalId);
            intervalId = setInterval(() => { nextSlide(); }, 3000);
        }

        createIndicators();
        startAutoRotate();

        // Testimonial Slider
        const testimonialsData = [
            {
                text: "Super impressed with their mobile app development service. The team listened carefully to our needs and delivered an app that exceeded expectations. A little delay in testing phase but they managed it professionally. Highly recommended!",
                name: "Olivia Reed",
                designation: "Marketing Manager"
            },
            {
                text: "The web development team at Exyvotech is absolutely fantastic! They transformed our outdated website into a modern, fast, and responsive platform. Our sales have increased by 40% since launch.",
                name: "James Wilson",
                designation: "CEO, TechStart"
            },
            {
                text: "Their cybersecurity services saved us from a potential data breach. The team was professional, thorough, and responsive. We now have peace of mind knowing our digital assets are protected.",
                name: "Sarah Chen",
                designation: "CTO, SecureNet"
            },
            {
                text: "The digital marketing strategies implemented by Exyvotech have doubled our online engagement. Their data-driven approach and creative campaigns have been game-changing for our brand.",
                name: "Michael Brown",
                designation: "Marketing Director"
            }
        ];

        let testimonialIndex = 0;
        const testimonialText = document.getElementById('testimonialText');
        const authorName = document.getElementById('authorName');
        const authorDesignation = document.getElementById('authorDesignation');
        const prevBtn = document.getElementById('prevTestimonial');
        const nextBtn = document.getElementById('nextTestimonial');

        function updateTestimonial(index) {
            const testimonial = testimonialsData[index];
            testimonialText.style.opacity = '0';
            setTimeout(() => {
                testimonialText.textContent = `"${testimonial.text}"`;
                authorName.textContent = testimonial.name;
                authorDesignation.textContent = testimonial.designation;
                testimonialText.style.transition = 'opacity 0.3s ease';
                testimonialText.style.opacity = '1';
            }, 200);
        }

        function nextTestimonial() {
            testimonialIndex = (testimonialIndex + 1) % testimonialsData.length;
            updateTestimonial(testimonialIndex);
        }

        function prevTestimonial() {
            testimonialIndex = (testimonialIndex - 1 + testimonialsData.length) % testimonialsData.length;
            updateTestimonial(testimonialIndex);
        }

        if (nextBtn) nextBtn.addEventListener('click', nextTestimonial);
        if (prevBtn) prevBtn.addEventListener('click', prevTestimonial);

        // Filter Functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const processCards = document.querySelectorAll('.process-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                const filterValue = btn.getAttribute('data-filter');
                
                processCards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category');
                    
                    if (filterValue === 'all' || cardCategory === filterValue) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // News Slider Dots Functionality
        const newsDots = document.querySelectorAll('.news-dot');
        const newsCards = document.querySelectorAll('.news-card');
        let currentNewsIndex = 0;
        let newsCardsPerView = 3;

        function updateNewsVisibility() {
            const screenWidth = window.innerWidth;
            
            if (screenWidth < 768) {
                newsCardsPerView = 1;
            } else if (screenWidth < 992) {
                newsCardsPerView = 2;
            } else {
                newsCardsPerView = 3;
            }
            
            newsCards.forEach((card, idx) => {
                const startIdx = currentNewsIndex * newsCardsPerView;
                const endIdx = startIdx + newsCardsPerView;
                
                if (idx >= startIdx && idx < endIdx) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
            
            if (newsDots.length > currentNewsIndex) {
                newsDots.forEach((dot, idx) => {
                    if (idx === currentNewsIndex) {
                        dot.classList.add('active');
                    } else {
                        dot.classList.remove('active');
                    }
                });
            }
        }

        function setupNewsSlider() {
            const totalPages = Math.ceil(newsCards.length / newsCardsPerView);
            
            const dotsContainer = document.querySelector('.news-slider-dots');
            if (dotsContainer && dotsContainer.children.length !== totalPages && totalPages > 0) {
                dotsContainer.innerHTML = '';
                for (let i = 0; i < totalPages; i++) {
                    const dot = document.createElement('div');
                    dot.classList.add('news-dot');
                    if (i === currentNewsIndex) dot.classList.add('active');
                    dot.addEventListener('click', () => {
                        currentNewsIndex = i;
                        updateNewsVisibility();
                    });
                    dotsContainer.appendChild(dot);
                }
            }
            
            updateNewsVisibility();
        }

        if (newsDots.length > 0) {
            newsDots.forEach((dot, idx) => {
                dot.addEventListener('click', () => {
                    currentNewsIndex = idx;
                    updateNewsVisibility();
                });
            });
        }

        window.addEventListener('resize', () => {
            setupNewsSlider();
        });

        setTimeout(() => {
            setupNewsSlider();
        }, 100);

        // Particle Animation
        const canvas = document.getElementById('particleCanvas');
        const ctx = canvas.getContext('2d');
        let particles = [];
        let animationId = null;

        function resizeCanvas() {
            const heroSection = document.querySelector('.hero-section');
            if (heroSection) {
                canvas.width = heroSection.offsetWidth;
                canvas.height = heroSection.offsetHeight;
            }
        }

        class Particle {
            constructor(x, y, radius, color, velocity) {
                this.x = x;
                this.y = y;
                this.radius = radius;
                this.color = color;
                this.velocity = velocity;
                this.alpha = Math.random() * 0.5 + 0.2;
            }
            draw() {
                ctx.save();
                ctx.globalAlpha = this.alpha;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                ctx.fillStyle = this.color;
                ctx.fill();
                ctx.restore();
            }
            update() {
                this.x += this.velocity.x;
                this.y += this.velocity.y;
                if (this.x - this.radius < 0 || this.x + this.radius > canvas.width) this.velocity.x = -this.velocity.x;
                if (this.y - this.radius < 0 || this.y + this.radius > canvas.height) this.velocity.y = -this.velocity.y;
                this.draw();
            }
        }

        function initParticles() {
            particles = [];
            const particleCount = Math.min(70, Math.floor(window.innerWidth / 18));
            for (let i = 0; i < particleCount; i++) {
                const radius = Math.random() * 4 + 1.5;
                let x = Math.random() * canvas.width;
                let y = Math.random() * canvas.height;
                const color = `hsl(${Math.random() * 20 + 20}, 85%, 60%)`;
                const velocity = { x: (Math.random() - 0.5) * 0.5, y: (Math.random() - 0.5) * 0.3 };
                particles.push(new Particle(x, y, radius, color, velocity));
            }
            for (let i = 0; i < 30; i++) {
                const radius = Math.random() * 3 + 1;
                let x = Math.random() * canvas.width;
                let y = Math.random() * canvas.height;
                const color = '#ff6b1e';
                const velocity = { x: (Math.random() - 0.5) * 0.4, y: (Math.random() - 0.5) * 0.2 };
                particles.push(new Particle(x, y, radius, color, velocity));
            }
        }

        function animateParticles() {
            if (!ctx) return;
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach(particle => particle.update());
            animationId = requestAnimationFrame(animateParticles);
        }

        function setupParticleBackground() {
            resizeCanvas();
            initParticles();
            animateParticles();
        }

        window.addEventListener('resize', () => { resizeCanvas(); initParticles(); });
        document.addEventListener('DOMContentLoaded', () => { setupParticleBackground(); });

        const imgElement = document.querySelector('.floating-illustration img');
        if (imgElement && imgElement.complete && imgElement.naturalWidth === 0) {
            imgElement.src = 'https://placehold.co/600x500/1e293b/ff6b1e?text=Exyvotech+Visual';
        }
    </script>

    <style>
        .rotating-word { transition: all 0.2s; font-weight: 800; }
        .hero-badge { font-family: monospace; letter-spacing: 1px; }
        .btn-primary-custom:active { transform: scale(0.97); }
        canvas { position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: block; }
        
        /* Additional filter transition styles */
        .process-card {
            transition: opacity 0.3s ease, transform 0.3s ease, all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }
        
        .news-card {
            transition: opacity 0.3s ease, transform 0.3s ease, all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }
    </style>

</body>

</html>