"use strict";

const openPopUp = document.getElementById('open__pop_up');
const closePopUp = document.getElementById('close__pop_up');
const popUp = document.getElementById('pop_up');

openPopUp.addEventListener('click', function(e) {
    e.preventDefault();
    popUp.classList.add('_active');
});

document.body.addEventListener('click', function(e) {
    e.preventDefault();
    body.classList.add('_active');
});

closePopUp.addEventListener('click', () => {
    popUp.classList.remove('_active');
});

document.body.addEventListener('click', () => {
    body.classList.remove('_active');
});