"use strict";

const openPopUp = document.getElementById('open__pop_up');
const closePopUp = document.getElementById('close__pop_up');
const closePopUp1 = document.querySelectorAll('body');
const popUp = document.getElementById('pop_up');

openPopUp.addEventListener('click', function(e) {
    e.preventDefault();
    popUp.classList.add('_active');
});

closePopUp.addEventListener('click', () => {
    popUp.classList.remove('_active');
});

closePopUp1.addEventListener('click', () => {
    popUp.classList.remove('_active');
});