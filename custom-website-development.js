// ========== INITIALIZE AOS ANIMATIONS ==========
AOS.init({
    duration: 1000,
    once: true,
    offset: 100,
    easing: 'ease-in-out'
});

// ========== STICKY NAVBAR WITH BACKGROUND CHANGE ==========
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('mainNav');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// ========== ACTIVE NAVIGATION LINK ON SCROLL ==========
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('.nav-link');

window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (scrollY >= (sectionTop - 200)) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});

// ========== COUNTER ANIMATION WITH INTERSECTION OBSERVER ==========
const counters = document.querySelectorAll('.counter');
let animated = false;

const animateCounter = (counter) => {
    const target = parseInt(counter.getAttribute('data-target'));
    let current = 0;
    const increment = target / 80; // Smooth animation
    const updateCounter = () => {
        if (current < target) {
            current += increment;
            counter.innerText = Math.ceil(current);
            setTimeout(updateCounter, 20);
        } else {
            counter.innerText = target;
            if (target === 98) counter.innerText = target + '%';
            if (target === 24) counter.innerText = target + '/7';
        }
    };
    updateCounter();
};

const observerOptions = {
    threshold: 0.5,
    rootMargin: "0px"
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !animated) {
            animated = true;
            counters.forEach(counter => animateCounter(counter));
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

const statsSection = document.querySelector('.stats-counter');
if (statsSection) {
    observer.observe(statsSection);
}

// ========== SMOOTH SCROLL FOR NAVIGATION LINKS ==========
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
            // Close mobile menu if open
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
            }
        }
    });
});

// ========== PARALLAX EFFECT ON HERO ==========
// window.addEventListener('scroll', () => {
//     const scrolled = window.pageYOffset;
//     const hero = document.querySelector('.hero-section');
//     if (hero) {
//         hero.style.transform = `translateY(${scrolled * 0.5}px)`;
//         hero.style.opacity = 1 - scrolled * 0.002;
//     }
// });

// ========== PRICING CARD HOVER EFFECT ==========
const pricingCards = document.querySelectorAll('.pricing-card');
pricingCards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        pricingCards.forEach(c => {
            if (c !== card && !c.classList.contains('featured')) {
                c.style.opacity = '0.7';
                c.style.transform = 'scale(0.98)';
            }
        });
    });
    
    card.addEventListener('mouseleave', () => {
        pricingCards.forEach(c => {
            c.style.opacity = '1';
            c.style.transform = 'scale(1)';
        });
    });
});

// ========== PORTFOLIO ITEM CLICK ALERT (DEMO) ==========
const portfolioItems = document.querySelectorAll('.portfolio-card');
portfolioItems.forEach(item => {
    item.addEventListener('click', (e) => {
        if (!e.target.classList.contains('btn')) {
            console.log('Portfolio item clicked - demo modal would open');
            // You can integrate a modal here for production
        }
    });
});

// ========== FORM SUBMISSION HANDLER (IF FORMS EXIST) ==========
const quoteButtons = document.querySelectorAll('.btn-primary-gradient, .btn-outline-primary');
quoteButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        if (btn.getAttribute('href') === '#') {
            e.preventDefault();
            // Demo alert - Replace with actual form modal
            alert('Thank you for your interest! Our team will contact you within 24 hours.');
        }
    });
});

// ========== DYNAMIC YEAR IN FOOTER ==========
const footerYear = document.querySelector('.footer .text-center small');
if (footerYear) {
    const currentYear = new Date().getFullYear();
    footerYear.innerHTML = footerYear.innerHTML.replace('2025', currentYear);
}

// ========== LAZY LOAD IMAGES FOR BETTER PERFORMANCE ==========
const images = document.querySelectorAll('img');
const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const img = entry.target;
            img.src = img.getAttribute('data-src') || img.src;
            img.classList.add('loaded');
            observer.unobserve(img);
        }
    });
});

images.forEach(img => {
    if (img.getAttribute('data-src')) {
        imageObserver.observe(img);
    }
});

// ========== ADD SCROLL PROGRESS BAR ==========
const progressBar = document.createElement('div');
progressBar.style.position = 'fixed';
progressBar.style.top = '0';
progressBar.style.left = '0';
progressBar.style.width = '0%';
progressBar.style.height = '3px';
progressBar.style.backgroundColor = 'var(--primary)';
progressBar.style.zIndex = '9999';
progressBar.style.transition = 'width 0.3s ease';
document.body.appendChild(progressBar);

window.addEventListener('scroll', () => {
    const windowHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrolled = (window.scrollY / windowHeight) * 100;
    progressBar.style.width = scrolled + '%';
});

// ========== MOBILE MENU CLOSE ON LINK CLICK ==========
const mobileNavLinks = document.querySelectorAll('.navbar-nav .nav-link');
const navbarToggler = document.querySelector('.navbar-toggler');
const navbarCollapse = document.querySelector('.navbar-collapse');

mobileNavLinks.forEach(link => {
    link.addEventListener('click', () => {
        if (navbarCollapse.classList.contains('show')) {
            navbarToggler.click();
        }
    });
});

// ========== ADD LOADING ANIMATION ==========
window.addEventListener('load', () => {
    document.body.classList.add('loaded');
    // Remove any preloader if exists
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        preloader.style.opacity = '0';
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 500);
    }
});

// ========== TOOLTIP INITIALIZATION (BOOTSTRAP) ==========
const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});

// ========== BACK TO TOP BUTTON ==========
const backToTop = document.createElement('button');
backToTop.innerHTML = '<i class="fas fa-arrow-up"></i>';
backToTop.style.position = 'fixed';
backToTop.style.bottom = '30px';
backToTop.style.right = '30px';
backToTop.style.width = '50px';
backToTop.style.height = '50px';
backToTop.style.borderRadius = '50%';
backToTop.style.backgroundColor = 'var(--primary)';
backToTop.style.color = 'white';
backToTop.style.border = 'none';
backToTop.style.cursor = 'pointer';
backToTop.style.zIndex = '1000';
backToTop.style.display = 'none';
backToTop.style.transition = 'var(--transition)';
backToTop.style.boxShadow = 'var(--shadow-sm)';

backToTop.addEventListener('mouseenter', () => {
    backToTop.style.transform = 'translateY(-5px)';
    backToTop.style.boxShadow = 'var(--shadow-md)';
});

backToTop.addEventListener('mouseleave', () => {
    backToTop.style.transform = 'translateY(0)';
    backToTop.style.boxShadow = 'var(--shadow-sm)';
});

backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

document.body.appendChild(backToTop);

window.addEventListener('scroll', () => {
    if (window.scrollY > 500) {
        backToTop.style.display = 'block';
    } else {
        backToTop.style.display = 'none';
    }
});

// Console log for development
console.log('InnovateDev | Premium Website Development Agency - Loaded Successfully');