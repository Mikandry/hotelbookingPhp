let slideIndex = 0;
const slides = document.querySelectorAll(".slide");
const totalSlides = slides.length;

function showSlide(index) {
	// Loop through slides
	if (index >= totalSlides) {
		slideIndex = 0;
	}
	if (index < 0) {
		slideIndex = totalSlides - 1;
	}

	// Move the slider to the correct position
	document.querySelector(".slider").style.transform = `translateX(-${
		slideIndex * 100
	}%)`;
}

function moveSlide(step) {
	slideIndex += step;
	showSlide(slideIndex);
}

// Auto slide every 3 seconds
setInterval(() => {
	moveSlide(1);
}, 3000);

// Initially show the first slide
showSlide(slideIndex);
