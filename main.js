// Hamburger menu toggle on the navbar
const navSlide = () => {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav-links');
  const navLinks = document.querySelectorAll('.nav-links li');

  burger.addEventListener('click', () => {
    nav.classList.toggle('nav-active');
  });

  navLinks.forEach((link, index) => {
    link.style.animation = `linkFadeIn 0.5s  ease forwards ${index / 5 + 2}s`;
    console.log(index/7);
  });
}
navSlide();

// Smooth scrolling with JQuery

$.fn.smoothScroll = function () {
  $('.container a').on('click', function(e) {
    if(this.hash !== '') {
      e.preventDefault();
      const hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      },
      800
    );
    }
  });
};

// Functions
$('.a').smoothScroll();
