function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function toTitleCase(str,d='') {
    let words = str.split(' ');

	for (let i in words) {
        words[i] = capitalizeFirstLetter(words[i]);
    }

	return words.join(' ');

	console.log(words);
}

let name = 'petras petraitis';

name = toTitleCase(name);

console.log(`Hello, ${name}`);

let str = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod';

str = toTitleCase(str, ',');

console.log(str);
