window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navmenu");
  navbar.classList.toggle("sticky", window.scrollY > 0);
});
