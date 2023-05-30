import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const btns = document.querySelectorAll(".clicked-btn");
btns.forEach(btn => {
    btn.addEventListener('click', (e) => {
        const response = confirm("Eliminare definitivamente?");

        if (!response) {
            e.preventDefault();
        }
    });
});
