// Funkcija skirta "pakelti" pirma perduodamo string'o zenkla
function capitalizeFirstLetter(string) {
    return // Grazinamas rezultatas
    string.charAt(0).toUpperCase() // pirmas perduodamo string'o zenklas "pakeliama"
    + // sujungimas
    string.slice(1); // gaunasmas string'as nuo pirmo zenklo iki galo
}

// Funkcija tikrina ar perduota reiksme yra raide
function isLetter(str) {
    return str.toLowerCase() != str.toUpperCase();
}

// Funkcija konvertuoja perduodama string'a i "Title Case"
// 1 parametras - pats string'as
// 2 parametras - nurodoma palei ka isskaidyti nurodyta pirmai string'a, palei nutilejima yra tarpas
function toTitleCase(str, d = ' ') {
    // gauta stringa isskaidoma i dalis palei nurodyta skaidimo parametra
    let parts = str.split(d);

    // cikle prasukam kieviena isskaidyta dali
    for (let i in parts) {
        // sukuriame flag'a
        // Issamiaiu apie flagus https://www.geeksforgeeks.org/use-of-flag-in-programming/
        let add_first = false;

        // patikriname ar pirmas zenklas pas mus yra raide
        // jeigu ne tai issaugojama ja ateiciai
        // ir istriname
        if (isLetter(parts[i].charAt(0)) == false) {
            add_first = parts[i].charAt(0);

			parts[i] = parts[i].slice(1);
        }

        // pakeiciame pirma raide i Upper Case
        parts[i] = capitalizeFirstLetter(parts[i]);

        // jeigu is anksciau mes buvome istrine pirmaji zenkla pries raide
        // pridedame ji atgal
        if (add_first) {
            parts[i] = add_first + parts[i];
        }
    }

    // sulipdome musu rezultata panaudojant skirimo parametra ir graziname ji
    return parts.join(d);

    // po return'o joks kodas nebebus vykdomas
    console.log(parts);
}

let name = 'petras petraitis';

// name = toTitleCase(name);

// console.log(`Hello, ${name}`);

let str = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod';

let str_u = toTitleCase(str, ',');

console.log(str);
console.log(str_u);




