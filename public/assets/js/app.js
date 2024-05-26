
const button = document.getElementById("button");
const popup = document.querySelector(".popup");
const closeIcon = document.querySelector(".close");

button.addEventListener("click", function () {
    popup.classList.add("visible");
});

closeIcon.addEventListener("click", function () {
    popup.classList.remove("visible");
});
