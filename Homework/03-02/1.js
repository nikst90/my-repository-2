let three = "3";
let a = b1 = 10; // 1st part
let b = d = 2;
let c = 15; // 2nd part
let result = a1 = c+d; // result = 17
let c1 = a1 - b1;
let d1 = 7;
let result_2 = d1 + c1;
let str = "Hello World!";
let str1 = "Hello";
let str2 = "World!";
let name = "Nikita";
let age = 30;
let test = " year "
let test1;
if (age > 1) {
    test1 = " years "
}
else {
    test1 = test
}

function nr_1() {
    alert(three);
}
function Addition() {
    document.getElementById("result").innerHTML = a+b;
}
function Subtraction() {
    document.getElementById("result").innerHTML = a-b;
}
function Multiplication() {
    document.getElementById("result").innerHTML = a*b;
}
function Division() {
    document.getElementById("result").innerHTML = a/b;
}
function nr_3() {
    document.getElementById("result").innerHTML = result;
}
function nr_4() {
    document.getElementById("result").innerHTML = result_2;
}
function nr_5() {
    document.getElementById("result").innerHTML = str;
}
function nr_6() {
    document.getElementById( "result").innerHTML = str1+" "+str2;
}
function nr_7() {
    document.getElementById("result").innerHTML = "Hello " + name + "!";
}
function nr_8() {
    document.getElementById("result").innerHTML = "I am " + age + test1 + "old!";
}
function nr_9() {
    name1 = prompt("enter your name");
    alert("Your name is " + name1);
}
