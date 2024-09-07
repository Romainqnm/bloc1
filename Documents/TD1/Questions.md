# Bloc 1 - Questions

## 1

Les méthodes HTTP GET et POST servent à envoyer des données au serveur, mais elles diffèrent significativement dans leur utilisation et leur fonctionnement. La méthode GET est utilisée pour récupérer des données, comme lors d'une recherche de produits sur un site de e-commerce. Les paramètres de recherche sont inclus dans l'URL (par exemple, `https://www.monsite-ecommerce.com/recherche?q=chaussures&couleur=noir`), ce qui rend les données visibles et facilement partageables. GET est appropriée pour des requêtes non sensibles et dont la répétition de la requête n'entraîne pas de changements sur le serveur.

En revanche, la méthode POST est utilisée pour envoyer des données au serveur de manière plus sécurisée, comme lors de l'inscription d'un nouvel utilisateur. Dans ce cas, les informations (comme le mot de passe) sont envoyées dans le corps de la requête, sans être visibles dans l'URL (par exemple, `https://www.monsite-ecommerce.com/inscription`). POST permet d'envoyer des données sensibles et volumineuses, et elle modifie l'état du serveur.

## 2 
| Critère                     | GET                                      | POST                                   |
|-----------------------------|------------------------------------------|----------------------------------------|
| **Exemple d'utilisation**   | Recherche de produits                    | Inscription utilisateur                |
| **URL exemple**             | https://www.monsite-ecommerce.com/recherche?q=chaussures&couleur=noir | https://www.monsite-ecommerce.com/inscription |
| **Visibilité des données**   | Visibles dans l'URL                     | Cachées dans le corps de la requête   |
| **Sécurité**                | Moins sécurisé pour les données sensibles| Plus sécurisé pour les données sensibles|
| **Quantité de données**     | Limitée par la longueur de l'URL        | Peut envoyer de grandes quantités de données |
| **Mise en cache**           | Facilement mise en cache                 | Généralement non mise en cache        |
| **Partage/Favoris**         | Facile à partager ou mettre en favori    | Difficile à partager ou mettre en favori |
| **Type de données**         | Principalement pour récupérer des données | Pour envoyer des données au serveur    |
| **Modification du serveur**  | Ne modifie pas l'état du serveur        | Peut modifier l'état du serveur       |
| **Encodage des données**    | URL-encoded                              | Peut utiliser différents encodages (form-data, JSON, etc.) |
| **Utilisation du navigateur**| Peut être utilisé directement dans la barre d'adresse | Nécessite généralement un formulaire ou du JavaScript |

## 3
Le protocole HTTP est conçu pour être hautement extensible, ce qui lui permet d'évoluer et de s'adapter aux besoins changeants du Web sans nécessiter une refonte complète.

## 4 
Le fait qu'HTTP soit qualifié de protocole sans état signifie que chaque requête HTTP est traitée indépendamment, sans aucune mémoire des requêtes précédentes. Le serveur ne conserve pas d'informations sur l'état des clients entre les requêtes successives.
Cette caractéristique a plusieurs conséquences importantes pour la navigation Web :

- Absence de contexte persistant : Le serveur ne garde pas automatiquement trace des actions précédentes de l'utilisateur ou de son état de connexion entre les requêtes.
- Nécessité de mécanismes supplémentaires : Pour maintenir une session utilisateur ou conserver des informations d'une page à l'autre, des techniques additionnelles sont nécessaires, comme l'utilisation de cookies ou de sessions côté serveur.
- Simplification du serveur : Le serveur n'a pas besoin de maintenir des informations d'état pour chaque client, ce qui simplifie sa conception et améliore sa scalabilité.
- Performances améliorées : Chaque requête étant indépendante, le serveur peut traiter un grand nombre de requêtes simultanées sans se soucier de leur contexte.
- Défis pour les applications Web complexes : Les développeurs doivent implémenter des mécanismes supplémentaires pour gérer l'état de l'utilisateur et maintenir la cohérence des données entre les pages.
- Sécurité : L'absence d'état peut rendre plus difficile le suivi des sessions utilisateur, nécessitant des mesures de sécurité supplémentaires pour prévenir les attaques.
- Rechargement des données : À chaque nouvelle requête, toutes les informations nécessaires doivent être envoyées, ce qui peut augmenter le volume de données transférées.
