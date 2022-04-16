function windowScroll() {
    var e = document.getElementById("navbar");
    50 <= document.body.scrollTop || 50 <= document.documentElement.scrollTop ? e.classList.add("is-sticky") : e.classList.remove("is-sticky")
}
window.addEventListener("scroll", function (e) {
    e.preventDefault(), windowScroll()
});
const navLinks = document.querySelectorAll(".nav-item"),
    menuToggle = document.getElementById("navbarSupportedContent");
let bsCollapse = "";

function toggleMenu() {
    document.documentElement.clientWidth < 980 ? bsCollapse.toggle() : bsCollapse = ""
}
window.addEventListener("load", function () {
    window.dispatchEvent(new Event("resize"))
}), window.addEventListener("resize", function () {
    var e = document.documentElement.clientWidth;
    bsCollapse = new bootstrap.Collapse(menuToggle, {
        toggle: !1
    }), e < 980 ? navLinks.forEach(e => {
        e.addEventListener("click", () => {
            toggleMenu()
        })
    }) : toggleMenu()
});

function check() {
    for (var e = document.getElementById("plan-switch"), n = document.getElementsByClassName("month"), t = document.getElementsByClassName("annual"), o = 0; o < n.length; o++) 1 == e.checked ? (t[o].style.display = "block", n[o].style.display = "none") : 0 == e.checked && (t[o].style.display = "none", n[o].style.display = "block")
}
check();


function counter() {
    var e = document.querySelectorAll(".counter-value");

    function i(e) {
        return e.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }
    e && e.forEach(function (l) {
        ! function e() {
            var n = +l.getAttribute("data-target"),
                t = +l.innerText,
                o = n / 250;
            o < 1 && (o = 1), t < n ? (l.innerText = (t + o).toFixed(0), setTimeout(e, 1)) : l.innerText = i(n), i(l.innerText)
        }()
    })
}
counter();