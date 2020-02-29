let user = prompt('enter usermane');
let pass = prompt("enter password");
if (!user && !pass) {
    document.write("Wrongpassword");
}else { if ((user == "admin" && pass == "master") || (user && pass == user + "11")) {
    document.write("Hello");
} else {
    document.write("viso gero");
}
}

