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
- des séries vous utilisez l'url suivant:
``http://localhost:8080/jalon2/public/loadserie``

## Création d'un utilisateur:

Pour créer un utilisateur vous pouvez accéder au formulaire d'inscription avec l'url suivant: 
``http://localhost:8080/jalon2/public/user/register``

## Se connecter:

Pour se connecter vous pouvez accéder au formulaire de connexion avec l'url suivant: 
- des films on utilise l'url suivant:
``http://localhost:8080/jalon2/public/login``

La barre de navigation se modifie en fonction du statut de l'utilisateur.

## Modification du profil utilisateur:

la mise à jour du profil utilisateur est possible à travers l'url:
``http://localhost:8080/jalon2/public/user/profile``
vous pouvez :
- modifier l'image de l'avatar, cependant la nouvelle image doit être sauvegarder au niveau du path suivant:'storage/app/public'.
- modifier le pseudo et l'email
- modifier le mot de passe
- supprimer le compte

## Medias disponible:
Les médias sont répartis en 2:

### Films:

accessible via la barre de navigation ou bien l'url suivant:
``http://localhost:8080/jalon2/public/allFilm``
il permet d'afficher la liste des films qui existent dans la base de données

### Séries:

accessible via la barre de navigation ou bien l'url suivant:
``http://localhost:8080/jalon2/public/allSerie``
il permet d'afficher la liste des séries qui existent dans la base de données

## Fonctionnalités

### Rechercher des medias 

Avec les filtres 'Genre' et 'Date de sortie'

### Marquer un media comme vu 

### Attribuer un "j'aime" à media

### Ajouter dans une playlist

Vous trouverez la liste des medias vus et aimer dans la page favoris
``http://localhost:8080/jalon2/public/historique``

## Playlist:

### Création d'une playlist

pour la création d'une playlist vous trouverez le formulaire dans la page historique ou bien avec l'url suivant:
``http://localhost:8080/jalon2/public/createPlaylist``

### Ajouter dans une playlist

Pour ajouter un média dans une playlist il suffit de cliquer sur le bouton '+'

## Page d'accueil:

Affiche les films du moments avec un carousel qui permet un passage dynamique d'un media au suivant 
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







