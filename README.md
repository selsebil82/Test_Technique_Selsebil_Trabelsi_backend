
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

![Screenshot from 2023-07-20 09-09-29](https://github.com/selsebil82/Test_Technique_Selsebil_Trabelsi_backend/assets/134981597/8886a1a7-515f-4058-97ec-e8c769ff8b48)
![Screenshot from 2023-07-20 09-10-54](https://github.com/selsebil82/Test_Technique_Selsebil_Trabelsi_backend/assets/134981597/0a530a4d-14d6-4aa6-9ec6-4bf5c50a9d8e)
![Screenshot from 2023-07-20 09-15-02](https://github.com/selsebil82/Test_Technique_Selsebil_Trabelsi_backend/assets/134981597/153bda7b-fc96-4ec5-b3ea-968f52f6059f)
![Screenshot from 2023-07-20 09-16-20](https://github.com/selsebil82/Test_Technique_Selsebil_Trabelsi_backend/assets/134981597/c36bde29-bdc2-4159-bb14-1854118d0c6b)
![Screenshot from 2023-07-20 09-17-12](https://github.com/selsebil82/Test_Technique_Selsebil_Trabelsi_backend/assets/134981597/79040c63-3d2e-49f5-b2b7-438248596c40)
![Screenshot from 2023-07-20 09-18-43](https://github.com/selsebil82/Test_Technique_Selsebil_Trabelsi_backend/assets/134981597/d6b3a07c-5539-432d-b36b-55abd418e5d2)
![Screenshot from 2023-07-20 09-19-34](https://github.com/selsebil82/Test_Technique_Selsebil_Trabelsi_backend/assets/134981597/598444c8-3ad8-41a1-9aea-5f67e394b0a8)


<h2>Auteur</h2>

Ce projet a été réalisé par Selsebil Trabelsi.

N'hésitez pas à ouvrir une issue si vous rencontrez des problèmes ou si vous avez des suggestions d'amélioration. Bonne utilisation !
