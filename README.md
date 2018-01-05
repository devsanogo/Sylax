# Sylax PHP #

Framework PHP simple et leger facilitant la conception de tout type d'application web.
Sylax est equipé d'un ORM (Doctrine) pour la gestion des requetes côté base de donnée.

L'installation est simple et rapide et se fait en suivant les differentes étapes ci-dessous :

**Installation**

1 - Cloner le depot depuis github	

```
git clone https://github.com/stommy11/sylax.git

```

2 - se placer dans le repertoire du projet

```
cd sylax

```

3 - Telecharger les dependances

```
composer update

```

4 - Creer la base donnée en utilisant le meme nom que celui dans bootstrap.php (sylax)


5 - Mettre à jour la base de donnée avec la ligne de commande doctrine

```
php vendor/doctrine/orm/bin/doctrine.php orm:schema-tool:update --force

```

**NB: Pour un demarrage rapide ce depot contient déjà un exemple de CRUD** 