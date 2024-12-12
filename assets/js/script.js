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

let currentIndex = 4;
function moveCarousel(direction) {
  const carousel = document.getElementById("carousel-card");
  const totalCards = carousel.children.length;
  const cardWidth = carousel.children[0].offsetWidth;
  currentIndex += direction;
  if (currentIndex < 0) {
    currentIndex = totalCards - 1;
    carousel.style.transition = "none";
    carousel.style.transform = `translateX(${-currentIndex * cardWidth}px)`;
    setTimeout(() => {
      carousel.style.transition = "transform 0.5s ease";
    }, 0);
  } else if (currentIndex >= totalCards) {
    currentIndex = 0;
    carousel.style.transition = "none";
    carousel.style.transform = `translateX(0px)`;
    setTimeout(() => {
      carousel.style.transition = "transform 0.5s ease";
    }, 0);
  } else if (currentIndex === 9) {
    currentIndex = 4;
    carousel.style.transition = "none";
    carousel.style.transform = `translateX(${-currentIndex * cardWidth}px)`;
    setTimeout(() => {
      carousel.style.transition = "transform 0.5s ease";
    }, 0);
  } else {
    const offset = -currentIndex * cardWidth;
    carousel.style.transform = `translateX(${offset}px)`;
  }
}

// Clonar os cards para criar o efeito de loop

window.onload = function () {
  const carousel = document.getElementById("carousel-card");
  const cards = Array.from(carousel.children);
  for (let i = 0; i < 2; i++) {
    cards.forEach((card) => {
      const clone = card.cloneNode(true);
      carousel.appendChild(clone);
    });
  }

  //Ajustar a posição inicial do carrossel

  const initialOffset = -currentIndex * carousel.children[0].offsetWidth;
  carousel.style.transform = `translateX(${initialOffset}px)`;
};

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
