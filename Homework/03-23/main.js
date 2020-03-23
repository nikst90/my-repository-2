
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


const selectElement = document.querySelector('.shapes');

selectElement.addEventListener('change', (event) => {
    const result = document.querySelector('.result');
    result.textContent = `${event.target.value}`;
});