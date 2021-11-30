
likeBouton = document.getElementById('likeBouton');

function getCookie(name) {
  if (!document.cookie) {
    return null;
  }

  const xsrfCookies = document.cookie.split(';')
    .map(c => c.trim())
    .filter(c => c.startsWith(name + '='));

  if (xsrfCookies.length === 0) {
    return null;
  }
  return decodeURIComponent(xsrfCookies[0].split('=')[1]);
}

const csrfToken = getCookie('CSRF-TOKEN');

const headers = new Headers({
  'Content-Type': 'x-www-form-urlencoded',
  'X-CSRF-TOKEN': '{{csrf_token()}}'
});

var myInit = {
  method: 'POST',
  headers: headers,
  mode: 'cors',
  cache: 'default'
};



likeBouton.addEventListener("click", function (e) {
  console.log('heelo');

  let request = $.ajax({
    type: "POST",
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    url: "http://localhost:8080/jalon2/public/likeCreate/2/829",
   success: function(msg){

   },
    error:function(resultat, statut, erreur){
      // e.preventDefault();
      // alert('Un problème est survenu lors de la récupération des informations');
    }
});
});
