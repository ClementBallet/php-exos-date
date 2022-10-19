# php-exos-date

## Ressources :
- https://www.php.net/manual/fr/book.datetime.php
- https://www.php.net/manual/fr/ref.datetime.php
- https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912352-exploitez-toute-la-puissance-des-fonctions-php#/id/r-7448095
- https://www.w3schools.com/php/func_date_date.asp
- https://youtu.be/DhMcHjDOitE (l'objet DateTime)

## Exercices sur les dates
### Exercice 1

- Dans un fichier PHP, insérer le code suivant :<br> `echo "A cet instant, le timestamp est : ", time(),"<br>"` <br>La fonction `time()` renvoie le timestamp actuel (le timestamp se définit comme le système d'horodatage qui donne le nombre de temps en secondes qui s’écoule depuis le 1er janvier 1970 à 00 h).
- A l'aide de la fonction `date()`, déterminer la date et l'heure du timestamp précédant.

### Exercice 2

- Calculer votre âge à la seconde près

<details>
<summary>Un indice ?</summary>
Voir la fonction <code>mktime()</code>.
</details>

### Exercice 3

- Vérifier si la date du 29 février 1962 a bien existé.
- Si la date a existée alors on affiche "29 février 1962 : date valide" et à l'inverse "29 février 1962 : date non valide".

<details>
<summary>Un indice ?</summary>
Voir la fonction <code>checkdate()</code>.
</details>

### Exercice 4

- Quel jour de la semaine était le 3 mars 1993 ?
- Afficher le résultat en francais.

<details>
<summary>Un indice ?</summary>
Voir les fonctions <code>mktime()</code> et <code>date()</code>.
</details>

### Exercice 5

- Afficher toutes les années bissextiles comprises entre 2005 et 2052 (rappel : Une année bissextile est une année comportant 366 jours au lieu des 365 pour une année commune.)

<details>
<summary>Un indice ?</summary>
Voir la boucle <code>for()</code> et les fonctions <code>mktime()</code> et <code>date()</code>. Voir également les paramètres de la fonction <code>date()</code>. Exemple <code>date('w')</code>
</details>

### Exercice 6

- En vue de vos prises de congés payés, vous voulez savoir quel jour tombe tous les 1er mai entre 2023 et 2030
- Si le jour est un samedi ou un dimanche, afficher "Désolé..."
- Si le jour est un lundi ou un vendredi, afficher "C'est un weekend prolongé !"

<details>
<summary>Un indice ?</summary>
Voir la boucle <code>for()</code> et les fonctions <code>mktime()</code> et <code>date()</code>.
</details>

### Exercice 7

- Trouver le jour de Pâques pour les années 2023 à 2030

<details>
<summary>Un indice ?</summary>
Voir la boucle <code>for()</code> et les fonctions <code>easter_date()</code> et <code>date()</code>.
</details>
