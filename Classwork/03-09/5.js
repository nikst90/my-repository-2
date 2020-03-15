//First caps, after comma caps.
function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}
​
function isLetter(val) {
    return val.toLowerCase() != val.toUpperCase();
}
​
function toTitleCase(str, d = ' ') {
    let parts = str.split(d);
​
	for (let i in parts) {
        let special = [];
​
		for (j = 0; j < parts[i].length; j++) {
            if (isLetter(parts[i].charAt(j)) === false) {
                special.push(parts[i].charAt(j));
            } else {
                break;
            }
        }
​
        parts[i] = parts[i].slice(special.length);
​
        parts[i] = capitalizeFirstLetter(parts[i]);
​
		if (special.length > 0) {
            parts[i] = special.join('') + parts[i];
        }
    }
​
	return parts.join(d);
}
​
let name = 'petras petraitis';
​
// name = toTitleCase(name);
​
// console.log(`Hello, ${name}`);
​
let str = 'Lorem ipsum dolor sit amet, .  . 1  consectetur adipisicing elit, sed do eiusmod';
​
console.log(str);
​
let str_u = toTitleCase(str, ',');
​
// console.log(str);
console.log(str_u);