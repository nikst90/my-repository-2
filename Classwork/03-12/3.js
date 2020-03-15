console.log(document.getElementsByTagName('h1'));
console.log(document.getElementsByClassName('test-class'));
console.log(document.getElementById('test-id'));
​
console.log(document.querySelector('#test-id'));
console.log(document.querySelectorAll('#test-id,.test-class'));
​
let some_h = document.querySelector('#test-id');
​
setTimeout(function() {
    some_h.style.color = 'green';
}, 3 * 1000);
​
setTimeout(function() {
    some_h.style.color = 'red';
}, 5 * 1000);
​
setTimeout(function() {
    some_h.textContent = 123;
}, 7 * 1000);
​
setTimeout(function() {
    document.getElementsByClassName('test-class')[0].style.color = 'red';
}, 3 * 1000);
​
let el_by_class = document.getElementsByClassName('test-class')[0];
​
setInterval(function() {
    el_by_class.style.display = el_by_class.style.display == 'none' ? 'block' : 'none';
}, 700);
​
​
let el = document.createElement('div');
​
let text = 'demo'
​
let inner_el = `<h1 style="color:red">${text}<h1><img src="https://s2.15min.lt/static/cache/NDAweDI2MCw5NjJ4MzY0LDYzNTE5MyxvcmlnaW5hbCwsaWQ9NTI3ODA4NCZkYXRlPTIwMjAlMkYwMyUyRjEwLDc5MjI5MDg1Mw==/ar-siltesni-orai-sustabdys-koronaviruso-protruki-5e677af1e8206.jpg">`;
​
if (Math.random() >= 0.5) {
    el.innerHTML = inner_el;
} else {
    el.innerText = inner_el;
}
​
el.style['text-align'] = 'center';
​
​
document.querySelector('div').appendChild(el);