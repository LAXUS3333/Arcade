const carousel = document.querySelector('.images');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');

let index = 0;

function moveToNextSlide() {
  index++;
  if (index >= 10) {
    index = 0;
  }
  carousel.style.transform = `translateX(-${index * 100}%)`;
}

function moveToPrevSlide() {
  index--;
  if (index < 0) {
    index = 9;
  }
  carousel.style.transform = `translateX(-${index * 100}%)`;
}

next.addEventListener('click', moveToNextSlide);
prev.addEventListener('click', moveToPrevSlide);

// Automatically move to the next slide every 3 seconds
setInterval(moveToNextSlide, 3000);