"use strict";
function modify(e)
{   var VarId= e.currentTarget.parentNode.id;

    let comment=e.currentTarget.parentNode.childNodes[3].innerHTML;
    let form = document.getElementById("comment_form");
    form.value=comment;
    //alert(e.type +" on modify for "+ e.currentTarget.parentNode.id+" !");
    //e.currentTarget.parentNode.childNodes[3].innerHTML= "cest modifié";
}
function deleter(e)
{
    alert(e.type +" on remove for "+ e.currentTarget.parentNode.id+" !");
    e.currentTarget.parentNode.remove();
}
document.getElementById("addNew").addEventListener("click", function(e){
    alert(e.type +" on add !");
    let user =document.getElementById('users');
    let lastId = user.lastElementChild.id;
   
    let newId = lastId.substr(4);
    newId = Number(newId)+1;
    console.log(newId);
    user.innerHTML += "<div id='user"+newId+"'><h4>Gorō Majima</h4><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><button class='modify'>Modify Comment</button><button class='remove'>Remove Comment</button></div>";
})
let modifiers = document.getElementsByClassName("modify");
Array.from(modifiers).forEach(
    m => m.addEventListener("click",modify));
let remover = document.getElementsByClassName("remove");
Array.from(remover).forEach(m => m.addEventListener("click",deleter));

function myVerif(e)
{
    let valToCheck = e.currentTarget.elements[0].value; //récupère la valeur du texte dans le premier input
    if(valToCheck == ""){ //si on a une regexp pour valider la valeur, et que ça ne match pas, on ne veut pas envoyer ça au serveur !
        e.preventDefault();
        alert("Votre commentaire est vide!");
    }else{
        alert("a modifié son commentaire!");
        let user = document.getElementById(VarId);
        alert(user+"a modifié son commentaire!");
        user.childNodes[3].innerHTML=valToCheck;
    }
}
document.forms["myForm"].addEventListener("submit", myVerif);