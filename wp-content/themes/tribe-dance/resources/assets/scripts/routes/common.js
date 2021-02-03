export default {
  init() {
    // JavaScript to be fired on all pages

      // alert('££');

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
