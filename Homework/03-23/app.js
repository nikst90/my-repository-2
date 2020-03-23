var Ball = document.getElementById('ball');
var ballPosition = 0;
var direction = 1;

var pageWidth = document.body.offsetWidth;

var Loop = setInterval(function () {
    ballPosition = Ball.offsetLeft;

    if (ballPosition > pageWidth) {
        direction = -1;
    } else if (ballPosition < 0){
        direction = 1;
    }
    Ball.style.left = (ballPosition + direction*10) + "px";

}, 1000 / 60);