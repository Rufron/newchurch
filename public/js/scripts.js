/*!
* Start Bootstrap - Creative v7.0.7 (https://startbootstrap.com/theme/creative)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-creative/blob/master/LICENSE)
*/
//
// Scripts
//

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

    // Activate SimpleLightbox plugin for portfolio items
    new SimpleLightbox({
        elements: '#portfolio a.portfolio-box'
    });

        // Carousel event listeners work hard play hard.
        const sermonList = document.querySelector('.sermon-list');
        const nextBtn = document.querySelector('.carousel-btn.next');
        const prevBtn = document.querySelector('.carousel-btn.prev');
        const sermonWidth = sermonList.querySelector('li').offsetWidth; // Get width of a single sermon item

        let currentPosition = 0; // Track current list position

        function scrollSermonList(shift) {
        currentPosition += shift * sermonWidth; // Update position based on scroll direction
        sermonList.style.transform = `translateX(-${currentPosition}px)`; // Apply translation based on position

        // Update button states
        prevBtn.disabled = currentPosition === 0;
        nextBtn.disabled = currentPosition === sermonList.scrollWidth - sermonList.clientWidth;
        }

        nextBtn.addEventListener('click', () => scrollSermonList(1)); // Scroll right on next click
        prevBtn.addEventListener('click', () => scrollSermonList(-1)); // Scroll left on prev click

        // Initially disable prev button if there's no need to scroll left
        prevBtn.disabled = true;


});
