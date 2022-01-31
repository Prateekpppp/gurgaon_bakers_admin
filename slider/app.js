let slidepos = 0;
const slides = document.getElementsByClassName('slider_item');
const totalSlides = slides.length;
document.
getElementById('nxt')
    .addEventListener('click', () => {
        nxtslide();
    });

document.
getElementById('prv')
    .addEventListener('click', () => {
        prvslide();
    });

function updateSlide() {
    for (let slide of slides) {
        slide.classList.remove('slider_item--visible');
        slide.classList.add('slider_item--hidden');
    }
    slides[slidepos].classList.add('slider_item--visible');
}

function nxtslide() {
    updateSlide();
    if (slidepos == totalSlides - 1) {
        slidepos = 0;
    } else {
        slidepos++;
    }
}

function prvslide() {
    updateSlide();
    if (slidepos == 0) {
        slidepos = totalSlides - 1;
    } else {
        slidepos--;
    }
}