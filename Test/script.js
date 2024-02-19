window.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.H');
    const images = ['Images/e2.jpg']; // Replace with paths to your images

    let index = 0;

    function changeBackground() {
        header.style.backgroundImage = `url(${images[index]})`;
        index = (index + 1) % images.length;
    }

    setInterval(changeBackground, 5000); // Change background every 5 seconds (5000 milliseconds)
});