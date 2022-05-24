/* Индекс слайда по умолчанию */
let slideIndex = 1;
showSlides(slideIndex);

/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide() {
    showSlides(slideIndex += 1);
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide() {
    showSlides(slideIndex -= 1);  
}

/* Устанавливает текущий слайд */
function currentSlide(n) {
    showSlides(slideIndex = n);
}

/* Основная функция слайдера */
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("item");
    let dots = document.getElementsByClassName("slider-dots_item");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}


const openPopUpImg1 = document.getElementById('openPopUpImg1');
const openPopUpImg2 = document.getElementById('openPopUpImg2');
const openPopUpImg3 = document.getElementById('openPopUpImg3');

const popUpImg = document.getElementById('popUpImg');

const closePopUpImg1 = document.getElementById('closePopUpImg1');
const closePopUpImg2 = document.getElementById('closePopUpImg2');
const closePopUpImg3 = document.getElementById('closePopUpImg3');


openPopUpImg1.addEventListener('click', function(e) {
    e.preventDefault();
    popUpImg.classList.add('act');
});

openPopUpImg2.addEventListener('click', function(e) {
    e.preventDefault();
    popUpImg.classList.add('act');
});

openPopUpImg3.addEventListener('click', function(e) {
    e.preventDefault();
    popUpImg.classList.add('act');
});

closePopUpImg1.addEventListener('click', function(e) {
    e.preventDefault();
    popUpImg.classList.remove('act');
});

closePopUpImg2.addEventListener('click', function(e) {
    e.preventDefault();
    popUpImg.classList.remove('act');
});

closePopUpImg3.addEventListener('click', function(e) {
    e.preventDefault();
    popUpImg.classList.remove('act');
});