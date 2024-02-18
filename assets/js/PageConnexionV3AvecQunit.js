const email = document.getElementById('email')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

//On click sur l'icone eye, on affiche ou en cache le mot de passe
const eyeIcon = document.querySelector(".pass-field i");
eyeIcon.addEventListener("click", () => {
  password.type = password.type === "password" ? "text" : "password";

  eyeIcon.className = `fa-solid fa-eye${password.type === "password" ? "" : "-slash"}`;
});

form.addEventListener('submit', valider);

function valider(e){
  let messages = []
if (email.value === '' || email.value == null) {
  messages.push('email is required')
}

if (password.value !== '' && password.value.length <= 6) {
  messages.push('Le mot de passe doit contenir au moins 6 caractères')
}

if (password.value.length >= 20) {
  messages.push('Le mot de passe doit contenir plus de 20 caractères')
}

if (password.value === 'password') {
  messages.push('Password cannot be password')
}

if (messages.length > 0) {
  e.preventDefault()
  errorElement.innerText = messages.join(', ')
}
}

//Pour les tests unitaires : il faut decommenter la fonction suivante et commenter la fonction ci-haut


// function valider(arg){
//     let messages = []
//     let code;
//     let retour = {code, messages}
//   if (arg === '' || arg == null) {
//     retour.messages.push("email is required");
//     retour.code = 0;
//   }
//   if (arg !== '' && arg.length < 6 ) {
//     retour.messages.push("Le mot de passe doit contenir au moins 6 caractères");
//     retour.code = 1;
//   }
//   if (arg.length > 20 ) {
//     retour.messages.push("Le mot de passe doit contenir plus de 20 caractères");
//     retour.code = 2;
//   }
//   return retour;
// }
// const {test} = QUnit;
// test('T1 - email is required', assert => {
//       const reponse = valider2("");
//       assert.equal(reponse.code,0);
//       assert.equal(reponse.messages,"email is required");
//   });
//   test('T2 - mot de passe court', assert => {
//     const reponse = valider2("v");
//     assert.equal(reponse.code,1);
//     assert.equal(reponse.messages,"Le mot de passe doit contenir au moins 6 caractères");
// });
// test('T3 - mot de passe long', assert => {
//     const reponse = valider2("vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv");
//     assert.equal(reponse.code,2);
//     assert.equal(reponse.messages,"Le mot de passe doit contenir plus de 20 caractères");
// });