document.addEventListener('DOMContentLoaded', function () {

    /* ---------------------------------------------------
       Navbar: scroll shadow state
    --------------------------------------------------- */
    var navbar = document.getElementById('navbar');
    function handleNavScroll() {
        if (!navbar) return;
        if (window.scrollY > 60) {
            navbar.classList.add('is-scrolled');
        } else {
            navbar.classList.remove('is-scrolled');
        }
    }
    window.addEventListener('scroll', handleNavScroll, { passive: true });
    handleNavScroll();

    /* ---------------------------------------------------
       Navbar: mobile menu toggle
    --------------------------------------------------- */
    var burger = document.getElementById('navbarBurger');
    var mobileMenu = document.getElementById('navbarMobile');
    var iconOpen = document.getElementById('navbarBurgerIconOpen');
    var iconClose = document.getElementById('navbarBurgerIconClose');

    function setMobileMenu(open) {
        if (!mobileMenu) return;
        mobileMenu.classList.toggle('is-open', open);
        if (iconOpen) iconOpen.style.display = open ? 'none' : 'inline-block';
        if (iconClose) iconClose.style.display = open ? 'inline-block' : 'none';
    }

    if (burger) {
        burger.addEventListener('click', function () {
            var isOpen = mobileMenu.classList.contains('is-open');
            setMobileMenu(!isOpen);
        });
    }

    document.querySelectorAll('.navbar__mobile-link, .navbar__mobile-cta').forEach(function (link) {
        link.addEventListener('click', function () {
            setMobileMenu(false);
        });
    });

    /* ---------------------------------------------------
       Scroll reveal (replaces framer-motion whileInView)
       Also drives the CSS bar chart: its wrapper carries
       the .reveal class, so bars animate to height once
       .is-visible is added — no chart library required.
    --------------------------------------------------- */
    var revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        var revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var el = entry.target;
                    var delay = parseFloat(el.getAttribute('data-delay')) || 0;
                    setTimeout(function () {
                        el.classList.add('is-visible');
                    }, delay * 1000);
                    revealObserver.unobserve(el);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });

        revealEls.forEach(function (el) { revealObserver.observe(el); });
    } else {
        // Fallback: show everything immediately
        revealEls.forEach(function (el) { el.classList.add('is-visible'); });
    }

    /* ---------------------------------------------------
       Count-up stats (replaces useInView + CountUp)
    --------------------------------------------------- */
    var countEls = document.querySelectorAll('.count-up');
    function runCountUp(el) {
        var target = parseInt(el.getAttribute('data-target'), 10) || 0;
        var suffix = el.getAttribute('data-suffix') || '';
        var duration = 1200;
        var steps = 60;
        var increment = target / steps;
        var current = 0;

        var timer = setInterval(function () {
            current += increment;
            if (current >= target) {
                el.textContent = target + suffix;
                clearInterval(timer);
            } else {
                el.textContent = Math.floor(current) + suffix;
            }
        }, duration / steps);
    }

    if ('IntersectionObserver' in window) {
        var countObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    runCountUp(entry.target);
                    countObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });

        countEls.forEach(function (el) { countObserver.observe(el); });
    } else {
        countEls.forEach(runCountUp);
    }

});
