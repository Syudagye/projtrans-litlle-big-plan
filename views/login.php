<head>
    <title>Agence de Voyage</title>
    <meta name="title" content="Agence de Voyage">
    <link rel="icon" type="image/png" sizes="16x16" href="https://img.freepik.com/vecteurs-libre/logo-voyage-detaille_23-2148616611.jpg?size=338&ext=jpg&ga=GA1.2.1811374570.1665644126">
    <link rel="stylesheet" href="view/css/login.css"/>
</head>


<form action="index.php?page=login" method="POST">
    <div class="container">
        <h1>Connexion</h1>
        <hr>
        <h2> <?php echo $error ?? '' ;?> </h2>
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Entrer votre Email" name="email" id="email" required>

        <label for="password"><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer votre mot de passe" name="password" id="password" required>


        <button type="submit" class="button">Se connecter</button>
    </div>

    <div class="container signin">
        <p>Vous n'avez pas encore de compte ? <a href="index.php?page=register">S'inscrire</a>.</p>
    </div>
</form>