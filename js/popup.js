"use strict";

const openPopUp = document.getElementById('open__pop_up');
const closePopUp = document.getElementById('close__pop_up');
const popUp = document.getElementById('pop_up');
const popUpBody = document.getElementById('popup__container');

openPopUp.addEventListener('click', function(e) {
    e.preventDefault();
    popUp.classList.add('_active');
});

popUpBody.addEventListener('click', function(e) {
    e.preventDefault();
    popUp.classList.remove('_active');
});

closePopUp.addEventListener('click', () => {
    popUp.classList.remove('_active');
});
