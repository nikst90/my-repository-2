//first block
document.getElementById("btn_1").addEventListener("click", function() {
    alert("Hello World!");
});


//2nd block
let input2Value = document.querySelector("#inputCaps").value;
document.getElementById("btn_toUpCase").addEventListener("click", function() {
    let input2Value = document.querySelector("#inputCaps").value;
    document.querySelector("#inputCaps").value=input2Value.toUpperCase();
});

document.getElementById("btn_toLowCase").addEventListener("click", function() {
    let input2Value = document.querySelector("#inputCaps").value;
    document.querySelector("#inputCaps").value=input2Value.toLowerCase();
});

document.getElementById("btn_firstUpCase").addEventListener("click", function () {
    let input2Value = document.querySelector("#inputCaps").value.toLowerCase();
    document.querySelector("#inputCaps").value=input2Value.charAt(0).toUpperCase() + input2Value.slice(1);
});

document.getElementById("btn_firstLowCase").addEventListener("click", function () {
    let input2Value = document.querySelector("#inputCaps").value.toUpperCase();
    document.querySelector("#inputCaps").value=input2Value.charAt(0).toLowerCase() + input2Value.slice(1);
});

//QUESTOn: Kodel negalima buvo prideti
// let input2Value = document.querySelector("#inputCaps").value.toUpperCase();
// prie pagrindinio scoupo?

//4rd block

document.getElementById("btn_disable").addEventListener("click", function () {
    document.querySelector("body > div > div:nth-child(5) > div.card-body > div:nth-child(3) > div.card-body > div > input").disabled = true
});

document.getElementById("btn_enable").addEventListener("click", function () {
    document.querySelector("body > div > div:nth-child(5) > div.card-body > div:nth-child(3) > div.card-body > div > input").disabled = false
});