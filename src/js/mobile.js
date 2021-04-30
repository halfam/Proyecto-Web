const doc = document;
const menuOpen = doc.querySelectorAll(".menu");
const menuClose = doc.querySelectorAll(".cerrar");
const overlay = doc.querySelector(".overlay");
for (const menu of menuOpen) {
  menu.addEventListener("click", () => {
    overlay.classList.add("overlay--active");
  });
}

for (const menu of menuClose) {
  menu.addEventListener("click", () => {
    overlay.classList.remove("overlay--active");
  });


}
