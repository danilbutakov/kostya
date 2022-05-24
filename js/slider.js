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


const open_pop_up_img1 = document.getElementById('pop_up_img1');
const open_pop_up_img2 = document.getElementById('pop_up_img2');
const open_pop_up_img3 = document.getElementById('pop_up_img3');

const closePopUpImg1 = document.getElementById('close__pop_up_img');

const imgUp1 = document.getElementById('pop_up_img1');
const imgUp2 = document.getElementById('pop_up_img2');
const imgUp3 = document.getElementById('pop_up_img3');


openPopUpImg1.addEventListener('click', function(e) {
    e.preventDefault();
    imgUp.classList.add('_active');
});

openPopUpImg2.addEventListener('click', function(e) {
    e.preventDefault();
    imgUp.classList.add('_active');
});

openPopUpImg3.addEventListener('click', function(e) {
    e.preventDefault();
    imgUp.classList.add('_active');
});

imgUp.addEventListener('click', function(e) {
    e.preventDefault();
    popUp.classList.remove('_active');
});

closePopUpImg.addEventListener('click', () => {
    imgUp.classList.remove('_active');
});