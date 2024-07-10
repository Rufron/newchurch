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

    // this one is for the image slider in home blade
    // let slideIndex = 1;
    // showSlides(slideIndex);

    // function plusSlides(n) {
    //   showSlides(slideIndex += n);
    // }

    // function currentSlide(n) {
    //   showSlides(slideIndex = n);
    // }

    // function showSlides(n) {
    //   let i;
    //   let slides = document.getElementsByClassName("mySlides");
    //   let dots = document.getElementsByClassName("demo");
    //   let captionText = document.getElementById("caption");
    //   if (n > slides.length) {slideIndex = 1}
    //   if (n < 1) {slideIndex = slides.length}
    //   for (i = 0; i < slides.length; i++) {
    //     slides[i].style.display = "none";
    //   }
    //   for (i = 0; i < dots.length; i++) {
    //     dots[i].className = dots[i].className.replace(" active", "");
    //   }
    //   slides[slideIndex-1].style.display = "block";
    //   dots[slideIndex-1].className += " active";
    //   captionText.innerHTML = dots[slideIndex-1].alt;
    // }




        let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
    showSlides(slideIndex += n);
    resetTimer();
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    resetTimer();
    }

    function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
    startTimer();
    }

    let timer;
    const interval = 5000; // Time interval in milliseconds (5 seconds)

    function startTimer() {
    timer = setInterval(function() {
        slideIndex++;
        showSlides(slideIndex);
    }, interval);
    }

    function resetTimer() {
    clearInterval(timer);
    startTimer();
    }



    // added these for the image slider.
    $(document).ready(function(){
        $('.sermon-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });



    // remember to remove these if it does not work.
        //     let slideIndex = 0;
        // showSlides();

        // function showSlides() {
        // let i;
        // let slides = document.getElementsByClassName("mySlides");
        // for (i = 0; i < slides.length; i++) {
        //     slides[i].style.display = "none";
        // }
        // slideIndex++;
        // if (slideIndex > slides.length) {slideIndex = 1}
        // slides[slideIndex-1].style.display = "block";
        // setTimeout(showSlides, 2000); // Change image every 2 seconds
        // }





