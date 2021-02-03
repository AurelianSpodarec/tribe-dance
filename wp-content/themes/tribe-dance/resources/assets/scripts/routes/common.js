export default {
  init() {
    // JavaScript to be fired on all pages

      // alert('££');


      var mainHeader = document.querySelector('.js-mainHeader'),
          siteHeaderHeight = mainHeader.offsetHeight,
          prevScroll = 0;

      function stickyNav() {
          if (mainHeader.classList.contains('is-active')) return;

          if (window.scrollY >= siteHeaderHeight) {
              mainHeader.classList.add('is-sticky');
          } else {
              mainHeader.classList.remove('is-sticky');
          }
      }

      function showNav() {

          if (mainHeader.classList.contains('is-active')) return;

          var currentScroll = window.pageYOffset;

          if (currentScroll < prevScroll) {
              mainHeader.classList.add('sticky-show');
          } else {
              mainHeader.classList.remove('sticky-show');
          }

          prevScroll = currentScroll;
      }

      window.addEventListener('scroll', showNav);
      window.addEventListener('scroll', stickyNav);






      var mobileNavMenu = document.querySelector('.js-mobileNavMenu');

      var buttonNavMenuOpen = document.querySelector('.js-buttonNavMenuOpen');
      var buttonNavMenuClose = document.querySelector('.js-buttonNavMenuClose');

      function openMobileNav() {
          console.log('hello');
          mobileNavMenu.classList.remove('translate-x-full');
          mobileNavMenu.classList.add('translate-x-0');
      }

      function closeMobileNav() {
          mobileNavMenu.classList.remove('translate-x-0');
          mobileNavMenu.classList.add('translate-x-full');
      }

      buttonNavMenuOpen.addEventListener('click', openMobileNav, false);
      buttonNavMenuClose.addEventListener('click', closeMobileNav, false);
      // translate-x-0

      // js-buttonNavMenuOpen
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

  },
};
