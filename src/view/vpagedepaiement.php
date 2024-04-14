<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Paiement avec Stripe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">

    <h1 class="display-4 text-center mt-5">Paiement avec Stripe</h1>

    <div class="card mt-5">
        <div class="card-body">
            <div id="stripe-elements"></div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>

    <script>
        // Crée un objet Stripe
        const stripe = Stripe("pk_test_YOUR_PUBLISHABLE_KEY");

        // Initialise le widget de paiement
        const elements = stripe.elements();

        // Crée un formulaire de paiement
        const form = document.getElementById("payment-form");

        // Crée un champ de carte de crédit
        const card = elements.create("card");

        // Ajoute le champ de carte de crédit au formulaire
        card.mount("#stripe-elements");

        // Associe le formulaire de paiement au widget de paiement
        form.addEventListener("submit", (event) => {
            event.preventDefault();

            // Récupère les informations de la carte de crédit
            const cardDetails = card.getElement();

            // Crée une transaction
            stripe.createPaymentIntent({
                amount: 1000,
                currency: "eur",
                paymentMethod: cardDetails,
            }).then((paymentIntent) => {
                // Envoyé la transaction au serveur
                const data = {
                    paymentIntentId: paymentIntent.id,
                };

                const xhr = new XMLHttpRequest();
                xhr.open("POST", "/api/payments");
                xhr.setRequestHeader("Content-Type", "application/json");
                xhr.send(JSON.stringify(data));

                // Redirige l'utilisateur vers la page de confirmation
                xhr.onload = () => {
                    if (xhr.status === 200) {
                        window.location.href = "/confirmation";
                    } else {
                        // Affiche une erreur
                        alert("Une erreur s'est produite.");
                    }
                };
            });
        });
    </script>
    <button type="button" class="btn btn-primary btn-lg mt-5"onclick="window.location.href='commandevalidee.html'">Valider la livraison</button>

</div>

</body>
</html>