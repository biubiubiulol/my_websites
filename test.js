//this is a circular loop to display an array of images.
//to show like a slides.
function displayNextImage() {
	// The dots part is quoted
	// from"https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_slideshow_auto"
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	document.getElementById("img").src = images[x];
	dots[x].className += " active";
	x = (x + 1) % 3;
}
// this is a function to control the indictors.
//ueser can just click it and turn to the picture.
function showImage(tmp) {
	x = tmp;
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	document.getElementById("img").src = images[x];
	dots[x].className += " active";
}
//This function is to set the time, then the imgs will change automaticly.
function startTimer() {
	setInterval(displayNextImage, 3000);
}
var images = [], x = 0;
var dots = document.getElementsByClassName("dot");

images[0] = "image1.jpg";
images[1] = "image2.jpg";
images[2] = "image3.jpg";
window.onload = startTimer();