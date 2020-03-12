function isEven(num) {
    if (typeof num != 'number') {
        return NaN;
    }

    // if (number % 2 == 0) {
    // 	return true;
    // } else {
    // 	return false;
    // }

	return num % 2 == 0;
}

function sumArr(items, only_even = false, only_positive = true) {
    let sum = 0;

	console.log(only_even);

	for (let value of items) {
        // isEven
        // if (value % 2 == 0) {

		if (typeof value != 'number') {
            continue;
        }

		if (only_positive && value <= 0) {
            continue;
        }

        // let is_even = isEven(value);

		if (only_even && !isEven(value)) {
            continue;
        }

		sum += value;
    }

	return sum;
}

let arr = [[], 2,4,5,7,8,12,4,7,-2,2,7];

console.log(sumArr(arr)); // sum all nums

// console.log(isEven([]));
// console.log(isEven(2));

console.log(sumArr(arr, true)); // sum only even nums

console.log(sumArr(arr, true, false)); // sum only even positive nums



