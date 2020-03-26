
document.getElementById("button1").addEventListener("click", function() {
    anime({
        targets:'div.result',
        translateX: [
            {value:1038, duration: 1200},
            {value: 0, duration: 800}
        ],

    });
});

document.getElementById("button2").addEventListener("click", function() {
    var relativeEl = document.querySelector('div.result');
    relativeEl.style.transform = 'translateX(100px)';

    anime({
        targets: 'div.result',
        translateX: {
            value: '*=9.5',
            duration: 1000
        },
        width: {
            value: '-=20px',
            duration: 1800,
            easing: 'easeInOutSine'
        },
        rotate: {
            value: '+=2turn',
            duration: 1800,
            easing: 'easeInOutSine'
        },
        direction: 'alternate'
    });
});


document.getElementById("button3").addEventListener("click", function() {
    var relativeEl = document.querySelector('div.result');
    relativeEl.style.transform = 'translateX(100px)';

    anime({
        targets: 'div.result',
        keyframes: [
            {translateY: 0},
            {translateX: 1038},
            {translateY: 330},
            {translateX: 0},
            {translateY: 0}
        ],
        duration: 4000,
        easing: 'easeOutElastic(1, .8)',
    });

});

let animation = anime({
    targets: 'div.result',
    translateX: 1038,
    delay: function(el, i) { return i * 100; },
    direction: 'alternate',
    loop: true,
    autoplay: false,
    easing: 'easeInOutSine'
});

document.querySelector('#button4').onclick = animation.play;
document.querySelector('#button5').onclick = animation.pause;



const selectElement = document.querySelector('.shapes');

selectElement.addEventListener('change', (event) => {
    const result = document.querySelector('.result');
    result.textContent = `${event.target.value}`;
});