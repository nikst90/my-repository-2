// <input class="form-control" type="text" id="inputCaps" placeholder="Fill me in">
//     <div class="input-group-append">
//     <button class="btn btn-outline-secondary" id="toUpCase" type="button">To Upper Case</button>
// <button class="btn btn-outline-secondary" id="toLowCase" type="button">To Lower Case</button>
// <button class="btn btn-outline-secondary" id="firstUpCase" type="button">First Upper Case</button>
// <button class="btn btn-outline-secondary" id="firstLowCase" type="button">First Lower Case</button>
// </div>



let inputCaps = document.querySelector("#inputCaps");


document.getElementById("btn_1").addEventListener("click", function() {
    alert("Hello World!");
});


document.getElementById("btn_toUpCase").addEventListener("click", function() {
    document.getElementById("inputCaps").style.textTransform = "uppercase";
});
document.getElementById("btn_toLowCase").addEventListener("click", function() {
    document.getElementById("inputCaps").style.textTransform = "lowercase";
});
document.getElementById("btn_firstUpCase").addEventListener("click", function() {
            document.querySelector(inputCaps).addEventListener("click", function() {
                inputCaps.value = capitalizeFirstLetter(inputCaps.value)



});

// document.getElementById("btn_firstLowCase").addEventListener("click", function() {
//     document.getElementById("inputCaps").style.
//
// });
// -----------------------------
//






//
//
//
// function capitalizeFirstLetter2(string) {
//     document.getElementById("inputCaps").style.textTransform = string.charAt(0).toUpperCase() + string.slice(1)
//     return string.charAt(0).toUpperCase() + string.slice(1);
// }
//


//First caps, after comma caps.
function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
};

// function isLetter(val) {
//     return val.toLowerCase() != val.toUpperCase();
// }
//
// function toTitleCase(str, d = ' ') {
//     let parts = str.split(d);
//
// 	for (let i in parts) {
//         let special = [];
//
// 		for (j = 0; j < parts[i].length; j++) {
//             if (isLetter(parts[i].charAt(j)) === false) {
//                 special.push(parts[i].charAt(j));
//             } else {
//                 break;
//             }
//         }
//
//         parts[i] = parts[i].slice(special.length);
//
//         parts[i] = capitalizeFirstLetter(parts[i]);
//
// 		if (special.length > 0) {
//             parts[i] = special.join('') + parts[i];
//         }
//     }
//
// 	return parts.join(d);
// }
//
// let name = 'petras petraitis';
//
// // name = toTitleCase(name);
//
// // console.log(`Hello, ${name}`);
//
// let str = 'Lorem ipsum dolor sit amet, .  . 1  consectetur adipisicing elit, sed do eiusmod';