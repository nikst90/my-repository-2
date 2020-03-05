let time

do {
    time = parseInt(prompt('enter time'));
}while(isNaN(time)==true || time<0 || time >24 )


 if (0<= time && time<= 3 || time == 24) {
    alert('naktis');
}
 else if (4<=time && time<=11) {
    alert("rytas");
}
 else if (12<=time && time<=17){
     alert("diena");
}
 else if (18<=time && time <=24){
     alert("vakaras")
 }
 else {
    alert('Klaida');
}

