README

Bière en stock, c’est un site de vitrine. Un vendeur des bières souhaitait publier leurs produits classés en catégorie sur internet. Le but de ce site n’est pas pour vendre leurs produits, mais plutôt avec une jolie présentation qui peut tirer leurs clients. 

Pour la gestion de site, j’ai réalisé une plateforme d’administration. Le client peut se connecter avec son compte administrateur. 

Pour réaliser notre site, j’ai utilisé plusieurs nouvelles technologies web. En parallèle, pour l’intérêt de notre projet, j’ai évité les technologies « raccourci » : Boostrap, framework php publique, librairie css téléchargée.  




Connexion

    •	Site Bière en stock :
        o	http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/

    •	Portail d’administration
        o	URL : http://www.greta-bretagne-sud.fr/stagiaires/saiyin-dong/biere_en_stock/auth
        o	Login : test@test.com
        o	MDP : test@test.com






Fabriqué avec
    
    
    
    html :
    •	Balise svg : Logo administration, source app/views/template/headerAdmin.php, ligne 7
    
    CSS :
    •	Tous les mediaqueries 
    •	Les animations : page d’accueil section « Nos produits », source app/public/css/style.css, ligne 252 
    •	Mise en page en flexbox

    
    JS :
    •	Utilisation de jquery 
    •	Requête http Ajax avec jquery : Sorting « Liste des messages client » par Nom, 
        source app/views/admin/adminMessage.php, ligne 38
    •	Api rest : Page « Formulaire de contact » saisie dynamique de champ  « Adresse », source app/views/contact.php
    •	Gestion d'évènements autres que le click souris : Page « Formulaire de contact » saisie dynamique de champ 
        « Adresse », source app/views/contact.php
    •	Plugin jquery : 
        o	Fenêtre de connexion utilisateur (Le module d’inscription et de connexion n’est pas disponible. Ceci est créé pour la démonstration de plugin)
        o	Slider  page d’accueil

    php :
    •	Architecture design pattern MVC
    
    SQL:
    •	Requêtes SELECT avec INNER JOIN 
    •	Crud complet (CREATE, READ, UPDATE, DELETE)
    

    Rewrite URL