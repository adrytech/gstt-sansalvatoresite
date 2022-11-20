function date(){

    var option = {weekday: 'long', day:'numeric', month:'numeric', year:'numeric'}
    var date = new Date();
    const today = date.getDay();
    var dayhtml = document.getElementById("date"); 

    // Dom = 0 , Lun = 1 , Mar = 2, Mer = 3, Gio = 4, Ven = 5, Sab = 6

    if (today == 0 || today == 4) {
        dayhtml.innerHTML= date.toLocaleDateString("it", option).bold();
    } else {
        dayhtml.innerHTML = "Non puoi prenotarti in questo giorno!".bold();
        var col1 = document.getElementById("col1");
        col1.parentNode.removeChild(col1);
        var orario = document.getElementById("orario");
        orario.parentNode.removeChild(orario);
        var btn = document.getElementById("btn");
        btn.parentNode.removeChild(btn);

    }

}
    
function change(){
    var btn = document.getElementById("buttonchange");
    btn.innerHTML="Prenotato!";
}