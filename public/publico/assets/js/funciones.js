function selecunversidad(){
    let u=document.getElementById('universidad').value;
    if(u==-1){
        document.getElementById('divotro').style.display = "block";
        document.getElementById('otra_universidad').value = "Universidad ";
    }
    else
        document.getElementById('divotro').style.display = "none";
}

function seleccarrera(){
    let u=document.getElementById('carrera').value;
    if(u==-1){
        document.getElementById('divotrocarrera').style.display = "block";
        document.getElementById('otra_carrera').value = "Carrera ";
    }
    else
        document.getElementById('divotrocarrera').style.display = "none";
}