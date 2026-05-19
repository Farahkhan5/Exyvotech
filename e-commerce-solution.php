<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Exyvotech | E-commerce Solutions - Online Store Development</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts: Ubuntu -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="e-commerce-solution.css">
</head>

<body>

    <!-- ========== STICKY NAVBAR ========== -->
    <!-- Header / Navbar include -->
    <?php include 'header.php'; ?>

    <!-- ========== 1. HERO SECTION (E-COMMERCE SPECIFIC) ========== -->
    <section id="home" class="hero-section">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-lg-6 hero-content" data-aos="fade-right">
                    <h1 class="display-3 fw-bold mb-4">E-commerce Solutions That Drive Online Sales</h1>
                    <p class="lead mb-4">Build powerful, scalable online stores with seamless checkout, secure payments, and inventory management. Tailored e-commerce solutions for businesses of all sizes.</p>
                    <div class="hero-buttons">
                        <a href="#pricing" class="btn btn-primary-gradient btn-lg me-3">View Packages</a>
                        <a href="#quote" class="btn btn-outline-light btn-lg">Free Consultation</a>
                    </div>
                </div>
                <div class="col-lg-6 hero-image" data-aos="fade-left">
                    <img src="ecommerce-hero.jpg" alt="E-commerce Dashboard 3D" class="img-fluid floating">
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
                    <span>Shopify</span>
                    <span>Magento</span>
                    <span>E-Commerce Solutions</span>
                    <span>WooCommerce</span>
                    <span>Shopify</span>
                    <span>Custom</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== 3. WHY CHOOSE US SECTION (E-COMMERCE SPECIFIC) ========== -->
    <section id="whyus" class="why-us py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-soft-primary px-3 py-2 rounded-pill">Why Choose Us</span>
                <h2 class="display-5 fw-bold mt-3">Why Us</h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-feature text-center p-4">
                        <div class="icon-lg mx-auto"><i class="fas fa-store"></i></div>
                        <h4>Custom E-commerce Solutions</h4>
                        <p>Tailored online stores designed to meet your specific business needs, whether starting fresh or enhancing existing stores.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-feature text-center p-4">
                        <div class="icon-lg mx-auto"><i class="fab fa-shopify"></i></div>
                        <h4>Advanced E-commerce Platforms</h4>
                        <p>Expertise in Magento, WooCommerce, Shopify - building robust, scalable, user-friendly online stores for any business size.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-feature text-center p-4">
                        <div class="icon-lg mx-auto"><i class="fas fa-smile-wink"></i></div>
                        <h4>User-Friendly Design</h4>
                        <p>Visually appealing and intuitive navigation ensuring seamless shopping experience - leading to higher satisfaction and increased sales.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-feature text-center p-4">
                        <div class="icon-lg mx-auto"><i class="fas fa-headset"></i></div>
                        <h4>Comprehensive Support & Maintenance</h4>
                        <p>Keep your online store up-to-date, secure, and fully functional while you focus on growing your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== 4. WHAT WE OFFER + FAQ SECTION (E-COMMERCE EDITION) ========== -->
<section id="offer" class="offer-section py-5">
    <div class="container">
        <div class="row g-5">

            <!-- LEFT SIDE: What We Offer (E-commerce Focused) -->
            <div class="col-lg-6" data-aos="fade-right">
                <span class="badge bg-soft-primary mb-3">E-commerce Solutions</span>
                <h2 class="display-5 fw-bold mb-4">What We Offer</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="offer-block d-flex gap-3">
                            <i class="fas fa-store fa-2x text-primary"></i>
                            <div>
                                <h5>Custom E-commerce Solutions</h5>
                                <p>Tailored online stores built from scratch or enhanced to meet your specific business needs and vision.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="offer-block d-flex gap-3">
                            <i class="fab fa-shopify fa-2x text-primary"></i>
                            <div>
                                <h5>Advanced E-commerce Platforms</h5>
                                <p>Expertise in Magento, WooCommerce, Shopify – robust, scalable, and user-friendly for any business size.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="offer-block d-flex gap-3">
                            <i class="fas fa-shopping-cart fa-2x text-primary"></i>
                            <div>
                                <h5>User-Friendly Design</h5>
                                <p>Intuitive and visually appealing interfaces that ensure a seamless shopping experience and boost conversions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="offer-block d-flex gap-3">
                            <i class="fas fa-headset fa-2x text-primary"></i>
                            <div>
                                <h5>Comprehensive Support & Maintenance</h5>
                                <p>Ongoing support to keep your store secure, updated, and fully functional so you can focus on growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE: FAQ SECTION (E-commerce Specific) -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="faq-wrapper">
                    <span class="badge bg-soft-primary mb-3">Common Questions</span>
                    <h2 class="display-5 fw-bold mb-4">Frequently Asked Questions</h2>

                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Which e-commerce platform is best for my business?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    It depends on your needs. We recommend WooCommerce for flexibility, Shopify for ease-of-use, and Magento for large-scale enterprises. We'll help you choose the perfect fit.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Can you integrate payment gateways and shipping?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Absolutely. We integrate all major payment gateways (PayPal, Stripe, Razorpay) and automate shipping calculations with real-time carrier rates.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    How do you handle product management and inventory?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We build easy-to-use CMS backends where you can manage products, track inventory, set prices, and handle bulk updates effortlessly.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Is my e-commerce website secure?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we implement SSL certificates, PCI compliance measures, and regular security updates to protect customer data and transactions.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Do you offer SEO for e-commerce stores?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We optimize product pages, metadata, and site structure for search engines. For advanced SEO campaigns, we can connect you with our trusted partners.
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
                        <h3>Beginners Ecommerce Website</h3>
                        <div class="price">$999.99<del>$1999.98</del> </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> Conceptual and Dynamic Website</li>
                            <li><i class="fas fa-check-circle"></i> Mobile Responsive</li>
                            <li><i class="fas fa-check-circle"></i> Content Management System (CMS)</li>
                            <li><i class="fas fa-check-circle"></i> Easy Product Search</li>
                            <li><i class="fas fa-check-circle"></i> Product Reviews</li>
                            <li><i class="fas fa-check-circle"></i> Up To 100 Products</li>
                            <li><i class="fas fa-check-circle"></i> Up To 7 Categories</li>
                            <li><i class="fas fa-check-circle"></i> Full Shopping Cart Integration</li>
                            <li><i class="fas fa-check-circle"></i> Payment Module Integration</li>
                            <li><i class="fas fa-check-circle"></i> Jquery Slider</li>
                            <li><i class="fas fa-check-circle"></i> Free Google Friendly Sitemap</li>
                            <li><i class="fas fa-check-circle"></i> Complete W3C Certified HTML</li>
                            <li><i class="fas fa-check-circle"></i> Facebook Page Design</li>
                            <li><i class="fas fa-check-circle"></i> Twitter Page Design</li>
                            <li><i class="fas fa-check-circle"></i> YouTube Page Design</li>
                            <li><i class="fas fa-check-circle"></i> Industry Specified Team of Expert Designers and Developers</li>
                            <li><i class="fas fa-check-circle"></i>Dedicated Accounts Manager</li>
                            <li><i class="fas fa-check-circle"></i>Complete Deployment</li>
                            <li><i class="fas fa-check-circle"></i>100% Ownership Rights</li>
                            <li><i class="fas fa-check-circle"></i>100% Satisfaction Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>100% Unique Design Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>Money Back Guarantee*</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary w-100">Get Started</a>
                    </div>
                </div>
                <!-- Starter -->
                <div class="col-lg-4 col-md-6" data-aos="flip-left">
                    <div class="pricing-card">
                        <h3>Professional Ecommerce Website</h3>
                        <div class="price">$999.99<del>$1999.98</del> </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> Conceptual and Dynamic Website</li>
                            <li><i class="fas fa-check-circle"></i> Mobile Responsive</li>
                            <li><i class="fas fa-check-circle"></i> Content Management System (CMS)</li>
                            <li><i class="fas fa-check-circle"></i> Easy Product Search</li>
                            <li><i class="fas fa-check-circle"></i> Product Reviews</li>
                            <li><i class="fas fa-check-circle"></i> Up To 100 Products</li>
                            <li><i class="fas fa-check-circle"></i> Up To 7 Categories</li>
                            <li><i class="fas fa-check-circle"></i> Full Shopping Cart Integration</li>
                            <li><i class="fas fa-check-circle"></i> Payment Module Integration</li>
                            <li><i class="fas fa-check-circle"></i> Jquery Slider</li>
                            <li><i class="fas fa-check-circle"></i> Free Google Friendly Sitemap</li>
                            <li><i class="fas fa-check-circle"></i> Complete W3C Certified HTML</li>
                            <li><i class="fas fa-check-circle"></i> Facebook Page Design</li>
                            <li><i class="fas fa-check-circle"></i> Twitter Page Design</li>
                            <li><i class="fas fa-check-circle"></i> YouTube Page Design</li>
                            <li><i class="fas fa-check-circle"></i> Industry Specified Team of Expert Designers and Developers</li>
                            <li><i class="fas fa-check-circle"></i>Dedicated Accounts Manager</li>
                            <li><i class="fas fa-check-circle"></i>Complete Deployment</li>
                            <li><i class="fas fa-check-circle"></i>100% Ownership Rights</li>
                            <li><i class="fas fa-check-circle"></i>100% Satisfaction Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>100% Unique Design Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>Money Back Guarantee*</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary w-100">Get Started</a>
                    </div>
                </div>
                <!-- Starter -->
                <div class="col-lg-4 col-md-6" data-aos="flip-left">
                    <div class="pricing-card">
                        <h3>Corporate Ecommerce Website</h3>
                        <div class="price">$1449.99<del>$2400.00</del> </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> Conceptual and Dynamic Website</li>
                            <li><i class="fas fa-check-circle"></i> Content Management System (CMS)</li>
                            <li><i class="fas fa-check-circle"></i> Mobile Responsive Design</li>
                            <li><i class="fas fa-check-circle"></i> WooCommerce or Shopify Based Backend</li>
                            <li><i class="fas fa-check-circle"></i> Easy Product Search</li>
                            <li><i class="fas fa-check-circle"></i> Product Reviews</li>
                            <li><i class="fas fa-check-circle"></i> Upto 300 Products</li>
                            <li><i class="fas fa-check-circle"></i> Upto 30 Categories</li>
                            <li><i class="fas fa-check-circle"></i> Full Shopping Cart Integration</li>
                            <li><i class="fas fa-check-circle"></i> Payment Module Integration</li>
                            <li><i class="fas fa-check-circle"></i> Sales & Inventory Management</li>
                            <li><i class="fas fa-check-circle"></i> Jquery Slider</li>
                            <li><i class="fas fa-check-circle"></i> Free Google Friendly Sitemap</li>
                            <li><i class="fas fa-check-circle"></i> Complete W3C Certified HTML</li>
                            <li><i class="fas fa-check-circle"></i> Facebook Page Design</li>
                            <li><i class="fas fa-check-circle"></i> Twitter Page Design</li>
                            <li><i class="fas fa-check-circle"></i> YouTube Page Design</li>
                            <li><i class="fas fa-check-circle"></i> Industry Specified Team of Expert Designers and Developers</li>
                            <li><i class="fas fa-check-circle"></i>Dedicated Accounts Manager</li>
                            <li><i class="fas fa-check-circle"></i>Complete Deployment</li>
                            <li><i class="fas fa-check-circle"></i>100% Ownership Rights</li>
                            <li><i class="fas fa-check-circle"></i>100% Satisfaction Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>100% Unique Design Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>Money Back Guarantee*</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary w-100">Get Started</a>
                    </div>
                </div>
                <!-- Starter -->
                <div class="col-lg-4 col-md-6" data-aos="flip-left">
                    <div class="pricing-card">
                        <h3>Elite Website Package</h3>
                        <div class="price">$1399.00<del>$2799.00</del> </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> Custom E-Commerce Store Design</li>
                            <li><i class="fas fa-check-circle"></i> Mobile Responsive Design</li>
                            <li><i class="fas fa-check-circle"></i> Custom PHP Backend CMS</li>
                            <li><i class="fas fa-check-circle"></i> User Friendly Content Management System</li>
                            <li><i class="fas fa-check-circle"></i> Product Detail Page Design</li>
                            <li><i class="fas fa-check-circle"></i> Featured Products Showcase</li>
                            <li><i class="fas fa-check-circle"></i> Full Shopping Cart Integration</li>
                            <li><i class="fas fa-check-circle"></i> Upto 750 Products</li>
                            <li><i class="fas fa-check-circle"></i> Unlimited Categories</li>
                            <li><i class="fas fa-check-circle"></i> Product Rating & Reviews</li>
                            <li><i class="fas fa-check-circle"></i> Easy Product Search</li>
                            <li><i class="fas fa-check-circle"></i> Payment Gateway Integration</li>
                            <li><i class="fas fa-check-circle"></i> Multi-currency Support</li>
                            <li><i class="fas fa-check-circle"></i> Customer Log-in Area</li>
                            <li><i class="fas fa-check-circle"></i> Tell a Friend Feature</li>
                            <li><i class="fas fa-check-circle"></i> Social Media Plugins Integration</li>
                            <li><i class="fas fa-check-circle"></i> Social Media Pages</li>
                            <li><i class="fas fa-check-circle"></i> Facebook, Twitter, YouTube, Google+ & Pinterest Page Designs</li>
                            <li><i class="fas fa-check-circle"></i> Value Added Services</li>
                            <li><i class="fas fa-check-circle"></i>Dedicated Account Manager</li>
                            <li><i class="fas fa-check-circle"></i>UNLIMITED Revisions</li>
                            <li><i class="fas fa-check-circle"></i>All Final File Formats</li>
                            <li><i class="fas fa-check-circle"></i>Unique Banner Slider</li>
                            <li><i class="fas fa-check-circle"></i>Free Logo Design</li>
                            <li><i class="fas fa-check-circle"></i>UNLIMITED Logo Design Concepts</li>
                            <li><i class="fas fa-check-circle"></i>By 6 Award Winning Designers</li>
                            <li><i class="fas fa-check-circle"></i>Icon Design</li>
                            <li><i class="fas fa-check-circle"></i>UNLIMITED Revisions</li>
                            <li><i class="fas fa-check-circle"></i>Free Print Media Designs</li>
                            <li><i class="fas fa-check-circle"></i>Stationary Design (BusinessCard, Letterhead & Envelope)</li>
                            <li><i class="fas fa-check-circle"></i>Invoice Design, Email Signature</li>
                            <li><i class="fas fa-check-circle"></i>Bi-Fold Brochure (OR) 2 Sided Flyer Design</li>
                            <li><i class="fas fa-check-circle"></i>Product Catalog Design</li>
                            <li><i class="fas fa-check-circle"></i>Signage Design (OR) Label Design</li>
                            <li><i class="fas fa-check-circle"></i>T-Shirt Design (OR) Car Wrap Design</li>
                            <li><i class="fas fa-check-circle"></i>Free Google Friendly Sitemap</li>
                            <li><i class="fas fa-check-circle"></i>Industry Specified Team of Expert Designers and Developers</li>
                            <li><i class="fas fa-check-circle"></i>Dedicated Accounts Manager</li>
                            <li><i class="fas fa-check-circle"></i>Complete Deployment</li>
                            <li><i class="fas fa-check-circle"></i>100% Ownership Rights</li>
                            <li><i class="fas fa-check-circle"></i>100% Satisfaction Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>100% Unique Design Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>Money Back Guarantee*</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary w-100">Get Started</a>
                    </div>
                </div>
                <!-- Starter -->
                <div class="col-lg-4 col-md-6" data-aos="flip-left">
                    <div class="pricing-card">
                        <h3>Identity Website Package</h3>
                        <div class="price">$1799.00<del>$3599.00</del> </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> Custom, Interactive Design</li>
                            <li><i class="fas fa-check-circle"></i> Unique Pages/UI</li>
                            <li><i class="fas fa-check-circle"></i> Custom CMS</li>
                            <li><i class="fas fa-check-circle"></i> Complete Development</li>
                            <li><i class="fas fa-check-circle"></i> Automation Tools</li>
                            <li><i class="fas fa-check-circle"></i> Automated Inventory Module</li>
                            <li><i class="fas fa-check-circle"></i> Up to 40 Stock Images</li>
                            <li><i class="fas fa-check-circle"></i> Order Management</li>
                            <li><i class="fas fa-check-circle"></i> LOT Tracking</li>
                            <li><i class="fas fa-check-circle"></i> Warehouse Stock Transfer (API NEEDED)</li>
                            <li><i class="fas fa-check-circle"></i> Receive Warehouse Stock (API NEEDED)</li>
                            <li><i class="fas fa-check-circle"></i> Fulfill Warehouse Orders (API NEEDED)</li>
                            <li><i class="fas fa-check-circle"></i> Stock Management</li>
                            <li><i class="fas fa-check-circle"></i> Actionable Insights</li>
                            <li><i class="fas fa-check-circle"></i> Real-Time Visibility</li>
                            <li><i class="fas fa-check-circle"></i> Inventory Opportunities</li>
                            <li><i class="fas fa-check-circle"></i> Advanced Features</li>
                            <li><i class="fas fa-check-circle"></i> Automated Invoices</li>
                            <li><i class="fas fa-check-circle"></i> Barcode Scanning</li>
                            <li><i class="fas fa-check-circle"></i>Locations/Zones</li>
                            <li><i class="fas fa-check-circle"></i>Customer Accounts</li>
                            <li><i class="fas fa-check-circle"></i>Performance Analytics</li>
                            <li><i class="fas fa-check-circle"></i>Customization</li>
                            <li><i class="fas fa-check-circle"></i>Process Management</li>
                            <li><i class="fas fa-check-circle"></i>Sales Automation</li>
                            <li><i class="fas fa-check-circle"></i>Team Collaboration</li>
                            <li><i class="fas fa-check-circle"></i>Marketing Automation</li>
                            <li><i class="fas fa-check-circle"></i>Security</li>
                            <li><i class="fas fa-check-circle"></i>Integrations</li>
                            <li><i class="fas fa-check-circle"></i>Mobile Notifications</li>
                            <li><i class="fas fa-check-circle"></i>Sales Reports</li>
                            <li><i class="fas fa-check-circle"></i>Trend Analytics</li>
                            <li><i class="fas fa-check-circle"></i>Forecasting</li>
                            <li><i class="fas fa-check-circle"></i>Territory Management</li>
                            <li><i class="fas fa-check-circle"></i>Account Management</li>
                            <li><i class="fas fa-check-circle"></i>Event Integration</li>
                            <li><i class="fas fa-check-circle"></i>Data Security</li>
                            <li><i class="fas fa-check-circle"></i>Purchase Orders</li>
                            <li><i class="fas fa-check-circle"></i>Financial Reports</li>
                            <li><i class="fas fa-check-circle"></i>Newsfeed Integration</li>
                            <li><i class="fas fa-check-circle"></i>Social Media Plugins</li>
                            <li><i class="fas fa-check-circle"></i>Search Engine Submission</li>
                            <li><i class="fas fa-check-circle"></i>Google Sitemap</li>
                            <li><i class="fas fa-check-circle"></i>5 Years Hosting</li>
                            <li><i class="fas fa-check-circle"></i>Custom Emails</li>
                            <li><i class="fas fa-check-circle"></i>Social Media Designs</li>
                            <li><i class="fas fa-check-circle"></i>Expert Team</li>
                            <li><i class="fas fa-check-circle"></i>Dedicated Manager</li>
                            <li><i class="fas fa-check-circle"></i>Complete Deployment</li>
                            <li><i class="fas fa-check-circle"></i>Satisfaction Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>Unique Design Guarantee</li>
                            <li><i class="fas fa-check-circle"></i>Money Back Guarantee</li>
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
                <h2 class="display-5 fw-bold mt-3 text-white">The digital worlds we've created. Dive in!</h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="zoom-in">
                    <div class="portfolio-card"><img src="assets/e-com1.webp" class="img-fluid w-100">
                        <div class="overlay"><a href="#" class="btn btn-primary">View Project</a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="portfolio-card"><img src="assets/e-com2.webp" class="img-fluid w-100">
                        <div class="overlay"><a href="#" class="btn btn-primary">View Project</a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="portfolio-card"><img src="assets/e-com3.webp" class="img-fluid w-100">
                        <div class="overlay"><a href="#" class="btn btn-primary">View Project</a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="portfolio-card"><img src="assets/e-com4.webp" class="img-fluid w-100">
                        <div class="overlay"><a href="#" class="btn btn-primary">View Project</a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="portfolio-card"><img src="assets/e-com5.webp" class="img-fluid w-100">
                        <div class="overlay"><a href="#" class="btn btn-primary">View Project</a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="portfolio-card"><img src="assets/e-com6.webp" class="img-fluid w-100">
                        <div class="overlay"><a href="#" class="btn btn-primary">View Project</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== 8. PROCESS SECTION (E-COMMERCE SOLUTIONS FOR EXYVOTECH) ========== -->
<section class="process-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold text-black">Our E-commerce Process</h2>
            <div class="divider mx-auto"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 col-6 text-center process-step" data-aos="fade-up">
                <div class="step-icon"><i class="fas fa-chart-line"></i></div>
                <h5>Analyze</h5>
                <p>Requirements & goals</p>
            </div>
            <div class="col-md-3 col-6 text-center process-step" data-aos="fade-up" data-aos-delay="100">
                <div class="step-icon"><i class="fas fa-pencil-ruler"></i></div>
                <h5>Design</h5>
                <p>UX & product layout</p>
            </div>
            <div class="col-md-3 col-6 text-center process-step" data-aos="fade-up" data-aos-delay="200">
                <div class="step-icon"><i class="fab fa-shopify"></i></div>
                <h5>Build</h5>
                <p>Platform integration</p>
            </div>
            <div class="col-md-3 col-6 text-center process-step" data-aos="fade-up" data-aos-delay="300">
                <div class="step-icon"><i class="fas fa-rocket"></i></div>
                <h5>Launch</h5>
                <p>Deploy & maintain</p>
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