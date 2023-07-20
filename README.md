
<h1>Test Technique Selsebil Trabelsi - Backend</h1>

Ce dépôt contient la partie backend du projet Test Technique Selsebil Trabelsi, l'autre dépôt contient la partie frontend du projet Test Technique Selsebil Trabelsi . </br>
Il s'agit d'une application développée avec le framework Laravel, permettant de gérer les produits d'une base de données.

<h2>Installation</h2>

   * Clonez ce dépôt en utilisant la commande suivante :

    git clone https://github.com/selsebil82/Test_Technique_Selsebil_Trabelsi_backend.git

   * Accédez au répertoire du projet :

    cd Test_Technique_Selsebil_Trabelsi_backend

   * Configuration de la base de données

     Assurez-vous que vous avez une base de données MySQL créée pour ce projet.

     Copiez le fichier .env.example et renommez-le en .env. Vous pouvez le faire en exécutant la commande suivante :

    cp .env.example .env

   * Ouvrez le fichier .env dans un éditeur de texte et configurez les informations de la base de données en fonction de votre environnement :


    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nom_de_votre_base_de_donnees
    DB_USERNAME=votre_nom_d_utilisateur
    DB_PASSWORD=votre_mot_de_passe

  * Exécutez les migrations pour créer les tables de base de données :

    php artisan migrate

  * Démarrer le serveur
    
  Après avoir correctement configuré la base de données, vous pouvez démarrer le serveur de développement en utilisant la commande artisan suivante :

    php artisan serve

Vous devriez maintenant pouvoir accéder à l'application en visitant http://127.0.0.1:8000 dans votre navigateur.
<h2>API</h2>

Le backend expose les API suivantes pour gérer les produits :

    GET /api/products : Récupérer la liste de tous les produits.
    GET /api/products/{id} : Récupérer les détails d'un produit spécifique en fonction de son ID.
    POST /api/products : Ajouter un nouveau produit à la base de données.
    PUT /api/products/{id} : Mettre à jour les informations d'un produit existant en fonction de son ID.
    DELETE /api/products/{id} : Supprimer un produit de la base de données en fonction de son ID.
    GET /api/products/search : Rechercher un produit 
<h2>captures d'écran </h2>

<h2>Auteur</h2>

Ce projet a été réalisé par Selsebil Trabelsi.

N'hésitez pas à ouvrir une issue si vous rencontrez des problèmes ou si vous avez des suggestions d'amélioration. Bonne utilisation !
