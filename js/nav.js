let lastscroll = 0;
const headernav = document.querySelector(".nav-bar");

window.addEventListener("scroll", () => {
    if (window.scrollY < lastscroll) {
        headernav.style.top = 0;
    } else {
        headernav.style.top = "-60px";
    }
    lastscroll = window.scrollY;
});