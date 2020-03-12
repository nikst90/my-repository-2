let arr = [2,4,5,7,8,12,4,7,-2,2,7];

function sumarr(arr1) {
    let sum=0;

	for (let i=0; i < arr1.length; i++) {
        if (arr1[i] % 2 == 0) {
            sum = sum + arr1[i];
        }
    }

	return sum;
}

console.log(sumarr(arr));