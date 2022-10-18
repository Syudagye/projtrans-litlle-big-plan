<head>
    <title>Agence de Voyage</title>
    <meta name="title" content="Agence de Voyage">
    <link rel="icon" type="image/png" sizes="16x16" href="https://img.freepik.com/vecteurs-libre/logo-voyage-detaille_23-2148616611.jpg?size=338&ext=jpg&ga=GA1.2.1811374570.1665644126">
    <link rel="stylesheet" href="view/css/register.css"/>
</head>


<form action="index.php?page=register" method="POST">
    <div class="container">
        <h1>Inscription</h1>
        <p>Merci d'utiliser des caractères acceptables.</p>
        <hr>

        <label for="firstname"><b>Prénom</b></label>
        <input type="text" placeholder="Entrer votre prénom" name="firstname" id="firstname" required>

        <label for="lastname"><b>Nom</b></label>
        <input type="text" placeholder="Entrer votre nom" name="lastname" id="lastname" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Entrer votre Email" name="email" id="email" required>

        <label for="password"><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer votre mot de passe" name="password" id="password" required>

        <label for="passwordconf"><b>Confirmer le mot de passe</b></label>
        <input type="password" placeholder="Confirmer le mot de passe" name="passwordconf" id="passwordconf" required>
        <hr>

        <p>En créant un compte, vous acceptez nos <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="button">S'inscrire</button>
    </div>

    <div class="container signin">
        <p>Vous avez déjà un compte ? <a href="index.php?page=login"> Se connecter </a></p>
    </div>
</form>