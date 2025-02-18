# Aperçu du site.

Réalisation d'un site catalogue de média (films, séries, ...)

Notre projet se trouve au niveau du path suivant: 'public/jalon2'


## Configuration Base de données

Pour faire fonctionner l'application en local, vous devez :
- créer une base de données 'medias' dans phpMyAdmin 
- faire les migrations avec la commande :
```shell
php artisan migrate
```

## Remplir la Bdd

Pour remplir la base de données par :
- des films vous utilisez l'url suivant:
``http://localhost:8080/jalon2/public/loadfilm``
(il est possible qqu'un message d'erreur s'affiche, la base s'est tout de même remplie partielement)
- des séries vous utilisez l'url suivant:
``http://localhost:8080/jalon2/public/loadserie``

## Création d'un utilisateur:

Pour créer un utilisateur vous pouvez accéder au formulaire d'inscription avec l'url suivant: 
``http://localhost:8080/jalon2/public/user/register``

## Se connecter:

Pour se connecter vous pouvez accéder au formulaire de connexion avec l'url suivant: 
``http://localhost:8080/jalon2/public/login``, 

La barre de navigation se met à jour en fonction du statut de l'utilisateur.

## Modification du profil utilisateur:

la mise à jour du profil utilisateur est possible à travers l'url:
``http://localhost:8080/jalon2/public/user/profile``, 
vous pouvez :
- modifier l'image de l'avatar, cependant la nouvelle image doit être sauvegarder au niveau du path suivant:'storage/app/public'.
- modifier le pseudo et l'email
- modifier le mot de passe
- supprimer le compte

## Navbar

### Home

Permet de se rendre à la page d'accueil

### Films

Permet de voir la liste des films repertoriés.

### Séries

Permet de voir la liste des films repertoriés.

### Favoris 
Disponible uniquement lorsque l'utilisateur est connecté.
Permet d'accéder à l'historique de visionnage ainsi qu'aux playlists crées par l'utilisateur. 

### Search 

Fonction indisponible pour le moment.

### Se connecter / Déconnexion

Permet de se connecter/s'inscrire et se déconnecter. 

## Medias disponible:
Les médias sont répartis en 2:

### Films:

accessible via la barre de navigation ou bien l'url suivant:
``http://localhost:8080/jalon2/public/allFilm``, 
il permet d'afficher la liste des films qui existent dans la base de données

### Séries:

accessible via la barre de navigation ou bien l'url suivant:
``http://localhost:8080/jalon2/public/allSerie``, 
il permet d'afficher la liste des séries qui existent dans la base de données

## Fonctionnalités

#### Rechercher des medias 

Avec les filtres 'Genre' et 'Date de sortie'

#### Marquer un media comme vu 

Il vous suffit de cliquer sur l'oeil au niveau du média ( Le média sera ensuite disponible dans votre historique ( onglet favoris de la navbar)

#### Attribuer un "j'aime" à media

Il vous suffit de cliquer sur le coeur au niveau du média

#### Ajouter dans une playlist

Vous trouverez la liste des medias vus et aimés dans la page favoris
``http://localhost:8080/jalon2/public/historique``

## Playlist:

### Création d'une playlist

pour la création d'une playlist vous trouverez le formulaire dans la page favoris en dessous de l'historique ou bien avec l'url suivant:
``http://localhost:8080/jalon2/public/createPlaylist``

### Ajouter dans une playlist

Pour ajouter un média dans une playlist il suffit de cliquer sur le bouton '+'. Pour le moment il n'est possible d'ajouter un media que dans la playlist numéro 1.

### Consulter sa playlist

Lors du click sur une playlist : une page avec tous les films contenus.
La miniature de toutes les playlists est celle d'un film, nous n'avons pas eu le temps de developper cette fonctionnalité.

## Page d'accueil:

Affiche les films du moments avec un carousel qui permet un passage dynamique d'un media au suivant.
l'url: ``http://localhost:8080/jalon2/public/home``

## Axes d'amélioration:


Nous avons prévu de travailler aussi sur les fonctionnalités suivantes, mais nous avions pas eu assez de temps pour les completer.

- Ajouter la vue administrateur pour la gestion des utilisateurs
- Ajouter un media dans plusieurs playlist
- Ajouter des commentaires
- Collaborer avec d'autres utilisateur pour la création des playlists
- S'abonner à une playlist d'un autre utilisateur
- Afficher les medias recommandés à un utilisateur particulier
- Travailler sur l'UX de l'application

## Problèmes 

Les pages sont longues a être chargé et il est possible lors d'un appel asynchrone que le serveur soit long à répondre, cela est du à docker, nous n'avons pas fait les changements pour améliorer la rapidité par manque de temps. Par exemple lors d'un j'aime le coeur deviendra rouge quelques secondes après le click.

## Vidéo de présentation
lien : 
``https://drive.google.com/file/d/1ZtheZ7iObNtb2IZEyPXEwqMxnG9qqy6o/view?usp=sharing``





