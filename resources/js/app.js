import 'flowbite';

let navbar = document.querySelector("#navbar")

// Navbar Fixed
window.onscroll = function () {
    const fixedNav = navbar.offsetTop;

    if (window.scrollY > fixedNav) {
        navbar.classList.add('navbar-fixed');
    } else {
        navbar.classList.remove('navbar-fixed');
    }
};
