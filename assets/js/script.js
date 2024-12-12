let count = 1;
document.getElementById("radio1").checked = true;

setInterval(function () {
  nextImage();
}, 5000);

function nextImage() {
  count++;
  if (count > 4) {
    count = 1;
  }

  document.getElementById("radio" + count).checked = true;
}

let currentIndex = 0;
function moveCarousel(direction) {
  const carousel = document.getElementById("carousel");
  const totalCards = carousel.children.length;
  const cardWidth = carousel.children[0].offsetWidth;
  currentIndex += direction;
  if (currentIndex < 0) {
    currentIndex = totalCards - 1;
  } else if (currentIndex >= totalCards) {
    currentIndex = 0;
  }
  const offset = -currentIndex * cardWidth;
  carousel.style.transform = `translateX(${offset}px)`;
}

var modal = document.getElementById("popup");
var btn = document.getElementById("open-popup");
var span = document.getElementById("closeModalBtn");
btn.onclick = function () {
  modal.style.display = "flex";
};
span.onclick = function () {
  modal.style.display = "none";
};
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
