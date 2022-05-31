</head>

<body>
    <section id="home" class="home-container">
        <header id="header" class="header">
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
                <li>
                    <a href="customer_register.php" data-text="Inscription">Inscription</a>
                </li>
                 <li>
                    <a href="login.php" data-text="Connexion">Connexion</a>
                </li>
            </ul>
            <ul class="nav-links panier">
                <li>
                    <a href="panier.php" data-text="Panier"><image src="images/panier.png" alt="Panier" class="img-panier"></a>
                </li>
            </ul>
            <div class="burger-container">
                <div class="burger"></div>
        </header>
        <div class="landing">
            <h1 class="big-title">La Fleur,<br> meilleur que le chocolat.</h1>
            <a href="#delivery" class="delivery-link">
                <span class="scroll-text" data-text="Scroll">Scroll</span>
                <i class="scroll-icon fas fa-angle-down"></i>
            </a>
        </div>
    </section>
    <section id="delivery" class="delivery-container">
        <div class="shop">
            <i class="delivery-icon fas fa-store"></i>
            <p class="box-content">
                Nos magasins à votre service
            </p>
        </div>
        <div class="withdrawal">
            <i class="delivery-icon fas fa-people-carry"></i>
            <p class="box-content">
                Retrait en magasin sans contact
            </p>
        </div>
        <div class="delivery">
            <i class="delivery-icon fas fa-truck"></i>
            <p class="box-content">
                Livraison à domicile sans contact
            </p>
        </div>
    </section>
  
    <script>
        const burgerContainer = document.querySelector('.burger-container');
        const navLinks = document.querySelector('.nav-links');

        burgerContainer.addEventListener('click', () => {
            burgerContainer.classList.toggle('active');
            navLinks.classList.toggle('active');
        })
    </script>
</body>