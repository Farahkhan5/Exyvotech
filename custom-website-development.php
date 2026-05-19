<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Exyvotech | Custom Website Development Agency</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts: Ubuntu -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="custom-website-development.css">
</head>

<body>

    <!-- ========== STICKY NAVBAR ========== -->
    <!-- Header / Navbar include -->
    <?php include 'header.php'; ?>

    <!-- ========== 1. HERO SECTION ========== -->
    <section id="home" class="hero-section">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-lg-6 hero-content" data-aos="fade-right">
                    <h1 class="display-3 fw-bold mb-4">Custom Website Development That Grows Your Business</h1>
                    <p class="lead mb-4">We build premium responsive websites with speed, SEO and conversions in mind. Tailored solutions for modern brands.</p>
                    <div class="hero-buttons">
                        <a href="#pricing" class="btn btn-primary-gradient btn-lg me-3">View Packages</a>
                        <a href="#quote" class="btn btn-outline-light btn-lg">Free Quote</a>
                    </div>
                </div>
                <div class="col-lg-6 hero-image" data-aos="fade-left">
                    <img src="custom-section.png" alt="3D Laptop Dashboard" class="img-fluid floating">
                </div>
            </div>
        </div>
        <div class="shape-bg"></div>
    </section>

    <!-- ========== 2. TRUSTED TECH TICKER ========== -->
    <section class="tech-ticker">
        <div class="container">
            <div class="ticker-wrapper">
                <div class="ticker-track">
                    <span>HTML5</span>
                    <span>CSS3</span>
                    <span>JavaScript</span>
                    <span>Bootstrap</span>
                    <span>PHP</span>
                    <span>Laravel</span>
                    <span>React</span>
                    <span>Node.js</span>
                    <!-- duplicate for seamless loop -->
                    <span>HTML5</span>
                    <span>CSS3</span>
                    <span>JavaScript</span>
                    <span>Bootstrap</span>
                    <span>PHP</span>
                    <span>Laravel</span>
                    <span>React</span>
                    <span>Node.js</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== 3. WHY CHOOSE US SECTION ========== -->
    <section id="whyus" class="why-us py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-soft-primary px-3 py-2 rounded-pill">Core Advantages</span>
                <h2 class="display-5 fw-bold mt-3">Why Choose Us</h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-feature text-center p-4">
                        <div class="icon-lg mx-auto"><i class="fas fa-paint-brush"></i></div>
                        <h4>Modern UI Design</h4>
                        <p>Pixel perfect, fresh interfaces that captivate users and elevate brand identity.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-feature text-center p-4">
                        <div class="icon-lg mx-auto"><i class="fas fa-tachometer-alt"></i></div>
                        <h4>Fast Performance</h4>
                        <p>Lightning fast load times with optimized code and modern caching strategies.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-feature text-center p-4">
                        <div class="icon-lg mx-auto"><i class="fas fa-chart-line"></i></div>
                        <h4>SEO Ready</h4>
                        <p>Clean semantic markup and structured data for top search engine rankings.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-feature text-center p-4">
                        <div class="icon-lg mx-auto"><i class="fas fa-mobile-alt"></i></div>
                        <h4>Fully Responsive</h4>
                        <p>Flawless experience across all devices, from desktops to smartphones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== 4. WHAT WE OFFER + FAQ SECTION ========== -->
<section id="offer" class="offer-section py-5">
    <div class="container">
        <div class="row g-5">
            
            <!-- LEFT SIDE: What We Offer (formerly image) -->
            <div class="col-lg-6" data-aos="fade-right">
                <span class="badge bg-soft-primary mb-3">What We Provide</span>
                <h2 class="display-5 fw-bold mb-4">What We Offer</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="offer-block d-flex gap-3">
                            <i class="fas fa-cubes fa-2x text-primary"></i>
                            <div>
                                <h5>Custom Web Development</h5>
                                <p>Tailored websites that fit your business perfectly, from simple sites to complex apps.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="offer-block d-flex gap-3">
                            <i class="fas fa-microchip fa-2x text-primary"></i>
                            <div>
                                <h5>Modern Technologies</h5>
                                <p>Python, React, Node.js, PHP – fast, secure, future-ready development.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="offer-block d-flex gap-3">
                            <i class="fas fa-smile fa-2x text-primary"></i>
                            <div>
                                <h5>Easy-to-Use Design</h5>
                                <p>Intuitive UX that keeps visitors engaged and converts them into customers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="offer-block d-flex gap-3">
                            <i class="fas fa-headset fa-2x text-primary"></i>
                            <div>
                                <h5>Full-Service Development</h5>
                                <p>From planning to launch & support – we handle everything end-to-end.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE: FAQ SECTION (exactly like swipecreatif) -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="faq-wrapper">
                    <span class="badge bg-soft-primary mb-3">Common Questions</span>
                    <h2 class="display-5 fw-bold mb-4">Frequently Asked Questions</h2>
                    
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Do you provide support after delivery?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, absolutely. We offer dedicated post-launch support and maintenance packages to ensure your website runs smoothly and remains up-to-date.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Can you redesign my existing website?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Definitely. Our team can revamp your current website with modern design, better performance, and improved user experience while keeping your brand identity intact.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    How long does it take to build a custom website?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Timeline depends on complexity – a basic website can take 2-4 weeks, while a fully custom web app may take 8-12 weeks. We’ll provide a clear roadmap before starting.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Will my website be mobile-friendly?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, every website we build is fully responsive and works seamlessly on all devices – desktop, tablet, and mobile.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Do you offer SEO services?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We follow SEO best practices during development (clean code, fast load times, meta tags, sitemaps). For advanced SEO campaigns, we can connect you with our trusted partners.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- ========== 5. STATS COUNTER SECTION ========== -->
    <section class="stats-counter py-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3 col-6" data-aos="zoom-in">
                    <div class="stat-item">
                        <h2 class="counter" data-target="120">0</h2>
                        <p>Projects Completed</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="stat-item">
                        <h2 class="counter" data-target="8">0</h2>
                        <p>Years Experience</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="stat-item">
                        <h2 class="counter" data-target="98">0</h2>
                        <p>Satisfaction Rate</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="stat-item">
                        <h2 class="counter" data-target="24">0</h2>
                        <p>Support / 7 Days</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== 6. PRICING PACKAGES ========== -->
    <section id="pricing" class="pricing-section py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-soft-primary px-3 py-2 rounded-pill">Investment Plans</span>
                <h2 class="display-5 fw-bold mt-3">Packages Offered By Exyvotech</h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row g-4">
                <!-- Starter -->
                <div class="col-lg-4 col-md-6" data-aos="flip-left">
                    <div class="pricing-card">
                        <h3>Special Package</h3>
                        <div class="price">$244.00 <del>$488.00</del> </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> 1 Page Website Design</li>
                            <li><i class="fas fa-check-circle"></i> HTML Based</li>
                            <li><i class="fas fa-check-circle"></i> 1 Banner Design</li>
                            <li><i class="fas fa-check-circle"></i> Contact/Query Form</li>
                            <li><i class="fas fa-check-circle"></i> 3 Revisions</li>
                            <li><i class="fas fa-check-circle"></i> Complete W3C Certified HTML</li>
                            <li><i class="fas fa-check-circle"></i> Complete Deployment</li>
                            <li><i class="fas fa-check-circle"></i> Value Added Services</li>
                            <li><i class="fas fa-check-circle"></i> Complete Source Files</li>
                            <li><i class="fas fa-check-circle"></i> Dedicated Project Manager</li>
                            <li><i class="fas fa-check-circle"></i> Ownership Rights</li>
                            <li><i class="fas fa-check-circle"></i> Satisfaction Guarantee</li>
                            <li><i class="fas fa-check-circle"></i> Money Back Guarantee</li>
                            <li><i class="fas fa-check-circle"></i> *NO MONTHLY OR ANY HIDDEN FEE*</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary w-100">Get Started</a>
                    </div>
                </div>

                <!-- Starter -->
                <div class="col-lg-4 col-md-6" data-aos="flip-left">
                    <div class="pricing-card">
                        <h3>Classic Package</h3>
                        <div class="price">$394.00 <del>$788.00</del> </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> 3 Page Website Design</li>
                            <li><i class="fas fa-check-circle"></i> HTML Based</li>
                            <li><i class="fas fa-check-circle"></i> Hover Effect</li>
                            <li><i class="fas fa-check-circle"></i> 2 Banner Design</li>
                            <li><i class="fas fa-check-circle"></i> Sliding Banner</li>
                            <li><i class="fas fa-check-circle"></i> 2 Stock Photos (You can provide us more)</li>
                            <li><i class="fas fa-check-circle"></i> Contact/Query Form</li>
                            <li><i class="fas fa-check-circle"></i> 6 Revisions</li>
                            <li><i class="fas fa-check-circle"></i> Complete W3C Certified HTML</li>
                            <li><i class="fas fa-check-circle"></i> Complete Deployment</li>
                            <li><i class="fas fa-check-circle"></i> Value Added Services</li>
                            <li><i class="fas fa-check-circle"></i> Complete Source Files</li>
                            <li><i class="fas fa-check-circle"></i> Dedicated Project Manager</li>
                            <li><i class="fas fa-check-circle"></i> Ownership Rights</li>
                            <li><i class="fas fa-check-circle"></i> Satisfaction Guarantee</li>
                            <li><i class="fas fa-check-circle"></i> Money Back Guarantee</li>
                            <li><i class="fas fa-check-circle"></i> *NO MONTHLY OR ANY HIDDEN FEE*</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary w-100">Get Started</a>
                    </div>
                </div>

                <!-- Starter -->
                <div class="col-lg-4 col-md-6" data-aos="flip-left">
                    <div class="pricing-card">
                        <h3>Unlimited Package</h3>
                        <div class="price">$819.00 <del>$1639.00</del> </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> Up to 5 Pages Website Design</li>
                            <li><i class="fas fa-check-circle"></i> 3 Stock Photos (You can provide us more)</li>
                            <li><i class="fas fa-check-circle"></i> 3 Banner Design</li>
                            <li><i class="fas fa-check-circle"></i> Sliding Banner</li>
                            <li><i class="fas fa-check-circle"></i> Hover Effects</li>
                            <li><i class="fas fa-check-circle"></i> Search Engine Submission</li>
                            <li><i class="fas fa-check-circle"></i> Unlimited Revisions</li>
                            <li><i class="fas fa-check-circle"></i> Complete W3C Certified HTML</li>
                            <li><i class="fas fa-check-circle"></i> Content Management System (WordPress)</li>
                            <li><i class="fas fa-check-circle"></i> Industry specified Team of Expert Designers and Developers</li>
                            <li><i class="fas fa-check-circle"></i> Complete Deployment</li>
                            <li><i class="fas fa-check-circle"></i> Value Added Services</li>
                            <li><i class="fas fa-check-circle"></i> Complete Source Files</li>
                            <li><i class="fas fa-check-circle"></i> Dedicated Project Manager</li>
                            <li><i class="fas fa-check-circle"></i> Ownership Rights</li>
                            <li><i class="fas fa-check-circle"></i> Satisfaction Guarantee</li>
                            <li><i class="fas fa-check-circle"></i> Money Back Guarantee</li>
                            <li><i class="fas fa-check-circle"></i> *NO MONTHLY OR ANY HIDDEN FEE*</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary w-100">Get Started</a>
                    </div>
                </div>

                <!-- Starter -->
                <div class="col-lg-4 col-md-6" data-aos="flip-left">
                    <div class="pricing-card">
                        <h3>Elite Website Package</h3>
                        <div class="price">$1399.00 <del>$2799.00</del> </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> Unique 5 Pages Website Design</li>
                            <li><i class="fas fa-check-circle"></i> Custom, Interactive, Dynamic & High-End Web Design</li>
                            <li><i class="fas fa-check-circle"></i> Custom WordPress Development</li>
                            <li><i class="fas fa-check-circle"></i> 5 Stock Images</li>
                            <li><i class="fas fa-check-circle"></i> 5 Banner Designs</li>
                            <li><i class="fas fa-check-circle"></i> Sliding Banners</li>
                            <li><i class="fas fa-check-circle"></i> Unlimited Revisions</li>
                            <li><i class="fas fa-check-circle"></i> Special Hoover Effects</li>
                            <li><i class="fas fa-check-circle"></i> Content Management System (WordPress)</li>
                            <li><i class="fas fa-check-circle"></i> Mobile Responsive</li>
                            <li><i class="fas fa-check-circle"></i> Online Appointment/Booking/Scheduling/Online Ordering Integration (If Required)</li>
                            <li><i class="fas fa-check-circle"></i>5 Professional Email IDs</li>
                            <li><i class="fas fa-check-circle"></i>Google Friendly Sitemap</li>
                            <li><i class="fas fa-check-circle"></i>Search Engine Submission</li>
                            <li><i class="fas fa-check-circle"></i>Complete W3C Certified HTML</li>
                            <li><i class="fas fa-check-circle"></i>Industry-specified Team of Expert Designers and Developers</li>
                            <li><i class="fas fa-check-circle"></i>Complete Deployment</li>
                            <li><i class="fas fa-check-circle"></i>Value Added Services</li>
                            <li><i class="fas fa-check-circle"></i>Complete Source Files</li>
                            <li><i class="fas fa-check-circle"></i>Dedicated Project Manager</li>
                            <li><i class="fas fa-check-circle"></i>Ownership Rights</li>
                            <li><i class="fas fa-check-circle"></i>Satisfaction Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>Money Back Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary w-100">Get Started</a>
                    </div>
                </div>

                <!-- Starter -->
                <div class="col-lg-4 col-md-6" data-aos="flip-left">
                    <div class="pricing-card">
                        <h3>Identity Website Package</h3>
                        <div class="price">$1799.00 <del>$3599.00</del> </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> 10 Unique Pages Website Design</li>
                            <li><i class="fas fa-check-circle"></i> Custom, Interactive, Dynamic & High-End Design</li>
                            <li><i class="fas fa-check-circle"></i> Customize WordPress (or) PHP Development</li>
                            <li><i class="fas fa-check-circle"></i> Interactive Sliding Banners</li>
                            <li><i class="fas fa-check-circle"></i> 10 Stock Images</li>
                            <li><i class="fas fa-check-circle"></i> 19 Banner Designs</li>
                            <li><i class="fas fa-check-circle"></i> Special Hover Effects</li>
                            <li><i class="fas fa-check-circle"></i> Unlimited Revisions</li>
                            <li><i class="fas fa-check-circle"></i> Content Management System (WordPress or Custom)</li>
                            <li><i class="fas fa-check-circle"></i> Mobile Responsive</li>
                            <li><i class="fas fa-check-circle"></i> Online Appointment/Booking/Scheduling/Online Ordering Integration (Optional)</li>
                            <li><i class="fas fa-check-circle"></i>Online Payment Integration (Optional)</li>
                            <li><i class="fas fa-check-circle"></i>Google Friendly Sitemap</li>
                            <li><i class="fas fa-check-circle"></i>Search Engine Submission</li>
                            <li><i class="fas fa-check-circle"></i>Complete W3C Certified HTML</li>
                            <li><i class="fas fa-check-circle"></i>Industry-specified Team of Award Winning Designers and Developers</li>
                            <li><i class="fas fa-check-circle"></i>Complete Deployment</li>
                            <li><i class="fas fa-check-circle"></i>Value Added Services</li>
                            <li><i class="fas fa-check-circle"></i>Complete Source Files</li>
                            <li><i class="fas fa-check-circle"></i>Dedicated Project Manager</li>
                            <li><i class="fas fa-check-circle"></i>Ownership Rights</li>
                            <li><i class="fas fa-check-circle"></i>Satisfaction Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>Money Back Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary w-100">Get Started</a>
                    </div>
                </div>

                <!-- Starter -->
                <div class="col-lg-4 col-md-6" data-aos="flip-left">
                    <div class="pricing-card">
                        <h3>Corporate Website Package</h3>
                        <div class="price">$3399.00 <del>$6799.00</del> </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> 15 to 20 Unique Pages Website Design</li>
                            <li><i class="fas fa-check-circle"></i> Custom Made, Interactive, Dynamic & High End Design</li>
                            <li><i class="fas fa-check-circle"></i> Customized WordPress & PHP Development</li>
                            <li><i class="fas fa-check-circle"></i> Interactive Sliding Banners</li>
                            <li><i class="fas fa-check-circle"></i> Up to 15 Custom Made Banner Designs</li>
                            <li><i class="fas fa-check-circle"></i> 15 Stock Images</li>
                            <li><i class="fas fa-check-circle"></i> Unlimited Revisions</li>
                            <li><i class="fas fa-check-circle"></i> Special Hover Effects</li>
                            <li><i class="fas fa-check-circle"></i> Content Management System Online</li>
                            <li><i class="fas fa-check-circle"></i> Appointment/Booking/Scheduling/Online Ordering Integration (Optional)</li>
                            <li><i class="fas fa-check-circle"></i> Online Payment Integration (Optional)</li>
                            <li><i class="fas fa-check-circle"></i>Multi Lingual (Optional)</li>
                            <li><i class="fas fa-check-circle"></i>Custom Dynamic Forms (Optional)</li>
                            <li><i class="fas fa-check-circle"></i>Signup Area (For Newsletters, Offers etc.)</li>
                            <li><i class="fas fa-check-circle"></i>Search Bar</li>
                            <li><i class="fas fa-check-circle"></i>Live Feeds of Social Networks integration (Optional)</li>
                            <li><i class="fas fa-check-circle"></i>Mobile Responsive</li>
                            <li><i class="fas fa-check-circle"></i>Google Friendly Sitemap</li>
                            <li><i class="fas fa-check-circle"></i>Search Engine Submission</li>
                            <li><i class="fas fa-check-circle"></i>Complete W3C Certified HTML</li>
                            <li><i class="fas fa-check-circle"></i>Industry specified Team of Award Winning Designers and Developers</li>
                            <li><i class="fas fa-check-circle"></i>Complete Deployment</li>
                            <li><i class="fas fa-check-circle"></i>Value Added Services</li>
                            <li><i class="fas fa-check-circle"></i>Complete Source Files</li>
                            <li><i class="fas fa-check-circle"></i>Dedicated Project Manager</li>
                            <li><i class="fas fa-check-circle"></i>Ownership Rights</li>
                            <li><i class="fas fa-check-circle"></i>Satisfaction Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>Money Back Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary w-100">Get Started</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========== 7. PORTFOLIO SECTION ========== -->
    <section id="portfolio" class="portfolio-section py-5 bg-black">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-soft-primary px-3 py-2 rounded-pill">Our Work</span>
                <h2 class="display-5 fw-bold mt-3 text-white">Our Custom Development Portfolio</h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="zoom-in">
                    <div class="portfolio-card"><img src="assets/custom-work1.webp" class="img-fluid w-100">
                        <div class="overlay"><a href="#" class="btn btn-primary">View Project</a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="portfolio-card"><img src="assets/custom-work2.webp" class="img-fluid w-100">
                        <div class="overlay"><a href="#" class="btn btn-primary">View Project</a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="portfolio-card"><img src="assets/custom-work3.webp" class="img-fluid w-100">
                        <div class="overlay"><a href="#" class="btn btn-primary">View Project</a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="portfolio-card"><img src="assets/custom-work4.webp" class="img-fluid w-100">
                        <div class="overlay"><a href="#" class="btn btn-primary">View Project</a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="portfolio-card"><img src="assets/custom-work5.webp" class="img-fluid w-100">
                        <div class="overlay"><a href="#" class="btn btn-primary">View Project</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== 8. PROCESS SECTION (CUSTOM WEBSITE DEVELOPMENT FOR EXYVOTECH) ========== -->
<section class="process-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold text-black">Our Development Process</h2>
            <div class="divider mx-auto"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 col-6 text-center process-step" data-aos="fade-up">
                <div class="step-icon"><i class="fas fa-lightbulb"></i></div>
                <h5>Discovery</h5>
                <p>Goal-oriented planning</p>
            </div>
            <div class="col-md-3 col-6 text-center process-step" data-aos="fade-up" data-aos-delay="100">
                <div class="step-icon"><i class="fas fa-pencil-ruler"></i></div>
                <h5>Wireframe</h5>
                <p>Information architecture</p>
            </div>
            <div class="col-md-3 col-6 text-center process-step" data-aos="fade-up" data-aos-delay="200">
                <div class="step-icon"><i class="fas fa-code"></i></div>
                <h5>Build</h5>
                <p>Modern tech stack</p>
            </div>
            <div class="col-md-3 col-6 text-center process-step" data-aos="fade-up" data-aos-delay="300">
                <div class="step-icon"><i class="fas fa-chart-line"></i></div>
                <h5>Optimize</h5>
                <p>Deploy & scale</p>
            </div>
        </div>
    </div>
</section>

    <!-- ========== 10. CTA BANNER ========== -->
    <section class="cta-banner py-5">
        <div class="container text-center" data-aos="zoom-in">
            <h2 class="display-4 fw-bold text-white mb-4">Ready To Launch Your Website?</h2>
            <a href="#contact" class="btn btn-light btn-lg px-5 py-3 shadow">Start Now <i class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </section>

    <!-- ========== 11. FOOTER ========== -->
    <footer id="contact" class="footer pt-5 pb-3">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <h5 class="fw-bold mb-3">Exyvotech</h5>
                    <p>Crafting powerful web solutions that drive growth and digital success.</p>
                    <div class="social-icons mt-3"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a></div>
                </div>
                <div class="col-md-3">
                    <h5>Services</h5>
                    <ul>
                        <li><a href="#">Custom Development</a></li>
                        <li><a href="#">Ecommerce Solutions</a></li>
                        <li><a href="#">Web Portals</a></li>
                        <li><a href="#">SEO Optimization</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#whyus">About</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Contact</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i> 123 Digital Avenue, NY</p>
                    <p><i class="fas fa-phone-alt me-2"></i> +1 (555) 678-1234</p>
                    <p><i class="fas fa-envelope me-2"></i> hello@Exyvotech.com</p>
                </div>
            </div>
            <hr class="mt-4">
            <div class="text-center pb-3"><small>© 2025 Exyvotech — Premium Web Solutions. All rights reserved.</small></div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="custom-website-development.js"></script>
</body>

</html>