document.addEventListener('DOMContentLoaded', function () {
    var menuOpenButton = document.querySelector('#menu-open');
    var menuCloseButton = document.querySelector('#menu-close');
    var mobileMenu = document.querySelector('#mobile-menu');

    // Function to toggle the mobile menu
    var toggleMobileMenu = function() {
        mobileMenu.classList.toggle('hidden');
    };

    if (menuOpenButton) {
        menuOpenButton.addEventListener('click', toggleMobileMenu);
    }

    if (menuCloseButton) {
        menuCloseButton.addEventListener('click', toggleMobileMenu);
    }
});
