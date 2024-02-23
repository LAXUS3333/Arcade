const carouselSlide = document.querySelector('.carousel-slide');
const images = document.querySelectorAll('.carousel-slide img');

let counter = 0;
const slideWidth = images[0].clientWidth;

function nextSlide() {
    if (counter >= images.length - 1) return;
    counter++;
    carouselSlide.style.transition = 'transform 0.4s ease-in-out';
    carouselSlide.style.transform = `translateX(${-counter * slideWidth}px)`;
}

function prevSlide() {
    if (counter <= 0) return;
    counter--;
    carouselSlide.style.transition = 'transform 0.4s ease-in-out';
    carouselSlide.style.transform = `translateX(${-counter * slideWidth}px)`;
}

document.querySelector('.next-btn').addEventListener('click', nextSlide);
document.querySelector('.prev-btn').addEventListener('click', prevSlide);

// Automatic slide
setInterval(nextSlide, 3000);
