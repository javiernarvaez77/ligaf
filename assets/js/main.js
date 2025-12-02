// ==========================================
// SCROLL HEADER & ACTIVE NAV
// ==========================================
const header = document.getElementById('header');
const navLinks = document.querySelectorAll('.nav-link');
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', () => {
    // Header background on scroll
    if (window.scrollY > 100) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }

    // Active nav link on scroll
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (window.scrollY >= (sectionTop - 200)) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });

    // Show/hide scroll to top button
    const scrollTop = document.getElementById('scrollTop');
    if (window.scrollY > 500) {
        scrollTop.classList.add('show');
    } else {
        scrollTop.classList.remove('show');
    }
});

// ==========================================
// SMOOTH SCROLL FOR NAV LINKS
// ==========================================
navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const targetId = link.getAttribute('href');
        const targetSection = document.querySelector(targetId);

        if (targetSection) {
            const headerHeight = header.offsetHeight;
            const targetPosition = targetSection.offsetTop - headerHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });

            // Close mobile menu if open
            navMenu.classList.remove('active');
            hamburger.classList.remove('active');
        }
    });
});

// ==========================================
// MOBILE MENU TOGGLE
// ==========================================
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('navMenu');

hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    hamburger.classList.toggle('active');
});

// Close menu when clicking outside
document.addEventListener('click', (e) => {
    if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.classList.remove('active');
        hamburger.classList.remove('active');
    }
});

// ==========================================
// NUMBER COUNTER ANIMATION
// ==========================================
const counters = document.querySelectorAll('.stat-number, .impact-number');
const counterSpeed = 200;

const animateCounter = (counter) => {
    const target = +counter.getAttribute('data-target');
    const increment = target / counterSpeed;
    let current = 0;

    const updateCounter = () => {
        current += increment;
        if (current < target) {
            counter.textContent = Math.ceil(current);
            requestAnimationFrame(updateCounter);
        } else {
            counter.textContent = target;
        }
    };

    updateCounter();
};

// Intersection Observer for counter animation
const counterObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounter(entry.target);
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.5
});

counters.forEach(counter => {
    counterObserver.observe(counter);
});

// ==========================================
// SCROLL ANIMATIONS (FADE IN)
// ==========================================
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const animateOnScroll = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Elements to animate
const animateElements = document.querySelectorAll(`
    .service-card,
    .tournament-card,
    .partner-card,
    .feature-item,
    .info-item,
    .mv-item
`);

animateElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    animateOnScroll.observe(el);
});

// ==========================================
// SCROLL TO TOP BUTTON
// ==========================================
const scrollTopBtn = document.getElementById('scrollTop');

scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// ==========================================
// VIDEO MODAL
// ==========================================
const videoModal = document.getElementById('videoModal');
const playButtons = document.querySelectorAll('.play-button');
const closeModal = document.querySelector('.close-modal');
const videoFrame = document.getElementById('videoFrame');

// Video URLs (replace with actual video URLs)
const videoUrls = {
    about: 'https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1'
};

playButtons.forEach(button => {
    button.addEventListener('click', () => {
        const videoType = button.getAttribute('data-video');
        const videoUrl = videoUrls[videoType];

        if (videoUrl) {
            videoFrame.setAttribute('src', videoUrl);
            videoModal.classList.add('show');
            document.body.style.overflow = 'hidden';
        }
    });
});

closeModal.addEventListener('click', closeVideoModal);

videoModal.addEventListener('click', (e) => {
    if (e.target === videoModal) {
        closeVideoModal();
    }
});

function closeVideoModal() {
    videoModal.classList.remove('show');
    videoFrame.setAttribute('src', '');
    document.body.style.overflow = 'auto';
}

// Close modal with ESC key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && videoModal.classList.contains('show')) {
        closeVideoModal();
    }
});

// ==========================================
// CONTACT FORM HANDLING
// ==========================================
const contactForm = document.getElementById('contactForm');

contactForm.addEventListener('submit', (e) => {
    e.preventDefault();

    // Get form data
    const formData = {
        nombre: document.getElementById('nombre').value,
        email: document.getElementById('email').value,
        telefono: document.getElementById('telefono').value,
        asunto: document.getElementById('asunto').value,
        mensaje: document.getElementById('mensaje').value
    };

    // Validate form
    if (!validateForm(formData)) {
        return;
    }

    // Show loading state
    const submitBtn = contactForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';
    submitBtn.disabled = true;

    // Simulate form submission (replace with actual API call)
    setTimeout(() => {
        // Success
        showNotification('¡Mensaje enviado exitosamente! Nos pondremos en contacto pronto.', 'success');
        contactForm.reset();

        // Reset button
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }, 2000);
});

function validateForm(data) {
    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(data.email)) {
        showNotification('Por favor ingresa un email válido', 'error');
        return false;
    }

    // Phone validation (basic)
    const phoneRegex = /^[0-9+\-\s()]+$/;
    if (!phoneRegex.test(data.telefono)) {
        showNotification('Por favor ingresa un teléfono válido', 'error');
        return false;
    }

    // Check if subject is selected
    if (!data.asunto) {
        showNotification('Por favor selecciona un tema', 'error');
        return false;
    }

    return true;
}

function showNotification(message, type) {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.innerHTML = `
        <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
        <span>${message}</span>
    `;

    // Add styles
    notification.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        background: ${type === 'success' ? '#2ecc71' : '#e74c3c'};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        z-index: 10000;
        animation: slideInRight 0.3s ease;
        max-width: 400px;
    `;

    document.body.appendChild(notification);

    // Remove after 5 seconds
    setTimeout(() => {
        notification.style.animation = 'slideOutRight 0.3s ease';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 5000);
}

// Add animation styles
const style = document.createElement('style');
style.textContent = `
    @keyframes slideInRight {
        from {
            transform: translateX(400px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    @keyframes slideOutRight {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(400px);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);

// ==========================================
// LAZY LOADING IMAGES
// ==========================================
const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const img = entry.target;
            if (img.dataset.src) {
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
            }
            observer.unobserve(img);
        }
    });
});

document.querySelectorAll('img[data-src]').forEach(img => {
    imageObserver.observe(img);
});

// ==========================================
// PARALLAX EFFECT FOR HERO AND IMPACT SECTIONS
// ==========================================
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;

    // Hero parallax
    const hero = document.querySelector('.hero');
    if (hero) {
        hero.style.backgroundPositionY = `${scrolled * 0.5}px`;
    }

    // Impact parallax
    const impact = document.querySelector('.impact');
    if (impact && scrolled > impact.offsetTop - window.innerHeight) {
        const offset = scrolled - (impact.offsetTop - window.innerHeight);
        impact.style.backgroundPositionY = `${offset * 0.3}px`;
    }
});

// ==========================================
// PRELOADER (OPTIONAL)
// ==========================================
window.addEventListener('load', () => {
    // Hide preloader if exists
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        preloader.style.opacity = '0';
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 500);
    }

    // Trigger entrance animations
    document.body.classList.add('loaded');
});

// ==========================================
// SOCIAL FEED INTERACTION
// ==========================================
const feedItems = document.querySelectorAll('.feed-item');

feedItems.forEach(item => {
    item.addEventListener('click', () => {
        // Open image in modal or redirect to Instagram
        const img = item.querySelector('img');
        if (img) {
            // You can implement a lightbox here
            console.log('Image clicked:', img.src);
        }
    });
});

// ==========================================
// PERFORMANCE OPTIMIZATION
// ==========================================

// Debounce function for scroll events
function debounce(func, wait = 10, immediate = true) {
    let timeout;
    return function() {
        const context = this, args = arguments;
        const later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}

// Apply debounce to scroll-heavy functions
window.addEventListener('scroll', debounce(() => {
    // Scroll-based operations
}, 10));

// ==========================================
// ACCESSIBILITY IMPROVEMENTS
// ==========================================

// Trap focus in mobile menu when open
navMenu.addEventListener('keydown', (e) => {
    if (!navMenu.classList.contains('active')) return;

    const focusableElements = navMenu.querySelectorAll('a, button');
    const firstElement = focusableElements[0];
    const lastElement = focusableElements[focusableElements.length - 1];

    if (e.key === 'Tab') {
        if (e.shiftKey && document.activeElement === firstElement) {
            e.preventDefault();
            lastElement.focus();
        } else if (!e.shiftKey && document.activeElement === lastElement) {
            e.preventDefault();
            firstElement.focus();
        }
    }

    if (e.key === 'Escape') {
        navMenu.classList.remove('active');
        hamburger.classList.remove('active');
        hamburger.focus();
    }
});

// ==========================================
// SERVICE WORKER REGISTRATION (PWA - OPTIONAL)
// ==========================================
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        // Uncomment to enable PWA functionality
        /*
        navigator.serviceWorker.register('/sw.js')
            .then(registration => {
                console.log('ServiceWorker registered:', registration);
            })
            .catch(error => {
                console.log('ServiceWorker registration failed:', error);
            });
        */
    });
}

// ==========================================
// CONSOLE WELCOME MESSAGE
// ==========================================
console.log(
    '%c Liga de Fútbol de Nariño ',
    'color: #fff; background: #e63946; font-size: 20px; font-weight: bold; padding: 10px 20px; border-radius: 5px;'
);
console.log(
    '%c Sitio web desarrollado con las mejores prácticas de desarrollo web ',
    'color: #1d3557; font-size: 12px; font-weight: normal;'
);

// ==========================================
// ANALYTICS TRACKING (OPTIONAL)
// ==========================================
function trackEvent(category, action, label) {
    // Replace with your analytics code (Google Analytics, etc.)
    console.log('Event tracked:', { category, action, label });

    // Example with Google Analytics
    /*
    if (typeof gtag !== 'undefined') {
        gtag('event', action, {
            'event_category': category,
            'event_label': label
        });
    }
    */
}

// Track button clicks
document.querySelectorAll('.btn, .cta-button').forEach(button => {
    button.addEventListener('click', () => {
        trackEvent('Button', 'Click', button.textContent.trim());
    });
});

// Track social media clicks
document.querySelectorAll('.social-btn, .footer-social a').forEach(link => {
    link.addEventListener('click', () => {
        trackEvent('Social Media', 'Click', link.href);
    });
});

// ==========================================
// DYNAMIC YEAR IN FOOTER
// ==========================================
const currentYear = new Date().getFullYear();
const yearElements = document.querySelectorAll('.current-year');
yearElements.forEach(el => {
    el.textContent = currentYear;
});

// Update copyright year if it's hardcoded
const footerText = document.querySelector('.footer-bottom p');
if (footerText) {
    footerText.innerHTML = footerText.innerHTML.replace('2025', currentYear);
}

// ==========================================
// FORM INPUT ANIMATIONS
// ==========================================
const formInputs = document.querySelectorAll('.form-group input, .form-group textarea, .form-group select');

formInputs.forEach(input => {
    // Add focus animation
    input.addEventListener('focus', () => {
        input.parentElement.classList.add('focused');
    });

    input.addEventListener('blur', () => {
        if (!input.value) {
            input.parentElement.classList.remove('focused');
        }
    });

    // Check if input has value on page load
    if (input.value) {
        input.parentElement.classList.add('focused');
    }
});

// ==========================================
// TOURNAMENT CARD TILT EFFECT (OPTIONAL)
// ==========================================
const tournamentCards = document.querySelectorAll('.tournament-card');

tournamentCards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const rotateX = (y - centerY) / 20;
        const rotateY = (centerX - x) / 20;

        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px)`;
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
    });
});

// ==========================================
// CUSTOM CURSOR (OPTIONAL - DESKTOP ONLY)
// ==========================================
if (window.innerWidth > 768) {
    const cursor = document.createElement('div');
    cursor.className = 'custom-cursor';
    cursor.style.cssText = `
        width: 20px;
        height: 20px;
        border: 2px solid #e63946;
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        z-index: 9999;
        transition: transform 0.2s ease, opacity 0.2s ease;
        opacity: 0;
    `;
    document.body.appendChild(cursor);

    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
        cursor.style.opacity = '1';
    });

    document.addEventListener('mouseleave', () => {
        cursor.style.opacity = '0';
    });

    // Scale cursor on clickable elements
    const clickableElements = document.querySelectorAll('a, button, .tournament-card, .service-card');
    clickableElements.forEach(el => {
        el.addEventListener('mouseenter', () => {
            cursor.style.transform = 'scale(1.5)';
            cursor.style.background = 'rgba(230, 57, 70, 0.2)';
        });

        el.addEventListener('mouseleave', () => {
            cursor.style.transform = 'scale(1)';
            cursor.style.background = 'transparent';
        });
    });
}

console.log('✅ Liga de Fútbol de Nariño - Website loaded successfully!');