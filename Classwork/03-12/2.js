let button = document.querySelector('button');

// function onClick() {
// 	alert('function');
// }

// let func = function() {
// 	alert('function');
// }


if (button) {
    button.addEventListener('click', function() {
        console.log(document.querySelector('#input-1').value);
        console.log(document.querySelector('#input-2').value);
    });

    // button.addEventListener('click', onClick);
    // button.addEventListener('click', func);
}

// document.querySelector('#input-1').addEventListener('focus', function() {
// 	alert('Input Focused');
// });




