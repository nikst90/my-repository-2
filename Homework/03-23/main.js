
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
            value: '*=2.5', // 100px * 2.5 = '250px'
            duration: 1000
        },
        width: {
            value: '-=20px', // 28 - 20 = '8px'
            duration: 1800,
            easing: 'easeInOutSine'
        },
        rotate: {
            value: '+=2turn', // 0 + 2 = '2turn'
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
            {translateY: 370},
            {translateX: 0},
            {translateY: 0}
        ],
        duration: 4000,
        easing: 'easeOutElastic(1, .8)',
    });
});





const selectElement = document.querySelector('.shapes');

selectElement.addEventListener('change', (event) => {
    const result = document.querySelector('.result');
    result.textContent = `${event.target.value}`;
});