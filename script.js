// Navbar
const openBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("menu-close");
const ul = document.getElementById("links");

openBtn.addEventListener("click", showMenu);
closeBtn.addEventListener("click", hideMenu);

function showMenu() {
  ul.classList.add("active");
}

function hideMenu() {
  ul.classList.remove("active");
}
