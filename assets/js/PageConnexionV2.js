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