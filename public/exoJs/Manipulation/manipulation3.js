"use strict";
function modify(e)
{
    alert(e.type +" on modify for "+ e.currentTarget.parentNode.id+" !");
    e.currentTarget.parentNode.childNodes[3].innerHTML= "cest modifié";
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
Array.from(modifiers).forEach(m => m.addEventListener("click",modify));
let remover = document.getElementsByClassName("remove");
Array.from(remover).forEach(m => m.addEventListener("click",deleter));