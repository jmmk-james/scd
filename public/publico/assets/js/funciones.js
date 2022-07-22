function selecunversidad(){
    let u=document.getElementById('universidad').value;
    if(u==-1){
        document.getElementById('divotro').style.display = "block";
        document.getElementById('otra_universidad').value = "Universidad ";
    }
    else
        document.getElementById('divotro').style.display = "none";
}