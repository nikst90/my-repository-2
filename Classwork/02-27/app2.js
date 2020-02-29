let user = prompt('enter usermane');
let pass = prompt("enter password");

console.log({user, pass});

if ((user != "admin"  && pass != "master") || (user != user  && pass != user+11)) {
    document.write("Wrongpassword");
}else { if (user == "admin" && pass == "master") {
    document.write("Hello");
}else if (user && pass == (user + "11")) {
    document.write("Hello");
} else {
    document.write("viso gero");
}
}

