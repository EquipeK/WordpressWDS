# WordpressWDS
=================

En attente de créer la bdd sur le serveur de l'école avant d'ajouter le gitignore pour la config serveur et autres.

--------
Cloner le repo (moi je l'ai dans C:\wamp64\www\WordpressWDS) :
--------
* git clone --recursive https://github.com/EquipeK/WordpressWDS.git

Cloner le repo si il vous manque juste les submodules :
--------
* git clone https://github.com/EquipeK/WordpressWDS.git
* cd WordpressWDS
* git submodule update --init --recursive

Passer d’une version de WordPress à une autre :
--------
* cd wordpress
* git checkout 4.4.2
* cd ..
* git commit -m "Passage à la version 4.4.2 de WordPress"
    
Mettre à jour WordPress :
--------
* cd wordpress
* git fetch --tags
* git checkout x.x.x

--------

Avant de commencer faites un npm install dans le dossier du theme.
Ensuite simplement faire un gulp watch pour auto compiler le js/sass