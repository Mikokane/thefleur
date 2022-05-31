<?php

session_start();

include("includes/db.php");
//include("functions/functions.php");

?>
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <title>Connexion</title>
</head>

<body>
    <section id="home" class="home-container">
<!--        <header id="header" class="header">
            <img src="images/logo.png" alt="Nature Emoi" class="logo">
            <ul class="nav-links">
                <li>
                    <a href="#" data-text="Accueil">Accueil</a>
                </li>
                <li>
                    <a href="#best-sales" data-text="Nos meilleures ventes">Nos meilleures ventes</a>
                </li>
                <li>
                    <a href="#plants" data-text="Nos plantes">Nos plantes</a>
                </li>
            </ul>
            <div class="burger-container">
                <div class="burger"></div>
            </div>
            <div class="connexion"><a href="form_connexion.php" data-text="Nos meilleures ventes">Connexion</a></div>
        </header >-->
         <div id="formconnexion">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
</section>
        <footer id="footer" class="footer">
            <span class="copyrights">&copy; 2020 - LaFLeur</span>
            <a href="#" class="conditions">Condition générales de vente</a>
        </footer>
    
</body>
