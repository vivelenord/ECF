import * as data from '/assets/js/dataCreationCompte.js';
console.log(data.users);
let soumettre = document.querySelector("#soumettre");
soumettre.addEventListener("click",ajouterNewUser);

//Affichage des utiliasaterus qui ont crée un compte 
// var enteteMenu = document.querySelector('#menu-flters');
// data.users.forEach(typeuser => {
//     enteteMenu.innerHTML += typeuser.getComposantHtml();
// });

let zoneListe = document.querySelector("#zoneSelect1");
fetch('https://geo.api.gouv.fr/departements')
    .then(response => {
        if (!response.ok) throw new Error();
        return response.json()
    })
    .then(datas => inSelect(datas))   
    .catch(error => {erreur('Serveur indisponible. Bientôt de retour')});

document.querySelector("#rechercher").addEventListener('click',rechercher);
let zoneListe2 = document.querySelector("#zoneSelect2");

function rechercher() {
  let saisie2 = zoneListe.value;

  fetch('https://geo.api.gouv.fr/departements/' + saisie2 + '/communes')
      .then(response => {
          if (!response.ok) throw new Error();
          return response.json()
      })
      .then(datas => inSelect2(datas))   
      .catch(error => {erreur('Serveur indisponible. Bientôt de retour')});
}

function inSelect(departements) {
  let fragment = document.createDocumentFragment();
  departements.forEach(departement => {
      let elemOption = document.createElement("option");
      elemOption.value=departement.code;
      let text = document.createTextNode(departement.code + " - " + departement.nom);
      elemOption.appendChild(text);
      fragment.append(elemOption);
  });
  zoneListe.append(fragment);
} 
function inSelect2(communes) {
  let fragment = document.createDocumentFragment();
  communes.forEach(commune => {
      let elemOption = document.createElement("option");
      elemOption.value=commune.nom;
      let text = document.createTextNode(commune.nom + " - " + commune.code);
      elemOption.appendChild(text);
      fragment.append(elemOption);
  });
  zoneListe2.append(fragment);
  
}


function getsaisieUser(e){
  let checkclient = document.querySelector("#client");
  let choix1 = checkclient.checked;
  let checkartisan = document.querySelector("#artisan");
  let choix2 = checkartisan.checked;
  
  if (choix1){document.querySelector("#message").innerHTML = "Vous êtes un Client";}
  else if (choix2){document.querySelector("#message").innerHTML = "Vous êtes un artisan";}
  var erreur;
  var inputs = document.getElementsByTagName("input");
  for (var i = 0;i < inputs.length; i++){
    if (inputs[i].value===null || inputs[i].value.length < 2){
      erreur = "Veuillez renseigner tous les champs";
      inputs[i].classList.add("error");
    }
  }
  if (document.querySelector("#mail1").value !== document.querySelector("#mail2").value){
    erreur = "les adresses emails ne sont pas identiques";
    document.getElementById("mail1").classList.add("error");
    document.getElementById("mail2").classList.add("error");
  }
  if (document.querySelector("#tel").value.length < 10 || isNaN(document.querySelector("#tel").value)){
    erreur = "Le numéro de téléphone de contenir 10 chiffres";
    document.getElementById("tel").classList.add("error");
  }
  if (document.querySelector("#passw1").value !== document.querySelector("#passw2").value){
    erreur = "les mots de passes ne sont pas identiques";
    document.getElementById("passw1").classList.add("error");
    document.getElementById("passw2").classList.add("error");
  }

  if (erreur){
    e.preventDefault();
    document.getElementById("message2").innerHTML = erreur;
    return false;
  } 
  else if (!erreur){
    alert('Formulaire envoyé');
    let nom = document.querySelector("#nom").value;
    let prenom1 = document.querySelector("#prenom").value;
    let tel1 = document.querySelector("#tel").value;
    console.log(tel1.length);
    let mail1 = document.querySelector("#mail1").value;
    let mail2 = document.querySelector("#mail2").value;
    let passw1 = document.querySelector("#passw1").value;
    let passw2 = document.querySelector("#passw2").value;
    let adresse1 = document.querySelector("#inputAddress1").value;
    let adresse2 = document.querySelector("#inputAddress2").value;
    // let codepostal1 = document.querySelector("#codepostal").value;
    let codepostal1 = '06000';
    let ville1 = document.querySelector("#zoneSelect2").value + 'code postal';
    let departement1 = document.querySelector("#zoneSelect1").value;
    let photo1 = document.getElementById('photoprofil').files[0].name
    //Les images sont dans assets/images/images-users
    let leType = 'art';
    document.querySelector("#form-user").style.display = "none";
    let user = new data.Utilisateur(leType, "p1", nom,prenom1,tel1,mail1,mail2,passw1,passw2,adresse1,adresse2,codepostal1,ville1,departement1,photo1,new Date());
    return user;
  } 
}
function ajouterNewUser(){
  let user = getsaisieUser();
  console.log(user);
  data.users.push(user);
  data.users.forEach(user => enteteMenu.innerHTML += user.getComposantHtml());
}