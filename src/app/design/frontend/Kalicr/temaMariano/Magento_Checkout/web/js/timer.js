
define([
    'jquery'
], function ($) {

    return function () {
       const timerEl = document.getElementById("checkout-timer");
       let seconds = 300;

        setInterval(() => {
            const m = String(Math.floor(seconds/60)).padStart(2,'0');
            const s = String(seconds % 60).padStart(2,'0');
            timerEl.textContent = `${m}:${s}`;
            seconds--;            
        }, 1000);
    }
});