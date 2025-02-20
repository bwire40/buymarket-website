let currentIndex = 0;
const slides = document.querySelectorAll(".carousel-open");
const totalSlides = slides.length;

// Function to go to the next slide
function nextSlide() {
    // Uncheck the current slide
    slides[currentIndex].checked = false;

    // Increment index and loop back to the start if at the last slide
    currentIndex = (currentIndex + 1) % totalSlides;

    // Check the next slide
    slides[currentIndex].checked = true;
}

// Set the interval to change the slide every 3 seconds (3000ms)
setInterval(nextSlide, 4000);
