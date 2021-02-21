export default {
  init() {
    // JavaScript to be fired on all pages

      // alert('££');


      var siteHeader = document.querySelector('.js-mainHeader'),
          siteHeaderHeight = siteHeader.offsetHeight,
          prevScroll = 0;
console.log('SDds', window.scrollY)

      function stickyNav() {
          if (window.scrollY >= siteHeaderHeight) {
              siteHeader.classList.add('is-sticky');
          } else{
              siteHeader.classList.remove('is-sticky');
          }
      }

      function showNav() {
          var currentScroll = window.pageYOffset;

          if(currentScroll < prevScroll) {
              siteHeader.classList.add('sticky-show');
          } else {
              siteHeader.classList.remove('sticky-show');
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
