# bashroom

BA$HROOM auto deployed application ! 

## How to use 

On code sur nos branches en test local, comme à notre habitude, et quand c'est joli et que on veut voir ce que cela donne, merge avec la branche `main` et par une magie mysterieuse, ça s'affiche [a cette adresse](https://bashroom.herokuapp.com/)

## Configuration :
Pour faire fonctionner l'application localement, pensez à ajouter (créer) le fichier `conf.php` à la racine du dossier `assets/`, ce fichier sera ignoré par le git, on peut donc avoir chaqun sa propre configuration sans proglèmes !

Le contenu du fichier :
> Pensez a remplacer `[userName]`, `[password]`, et `[dataBaseName]` par les bonnes valeurs !
```php
<?php
    $pdo = new PDO("mysql:dbname=[dataBaseName];host=localhost",'[userName]','[password]');
?>
```