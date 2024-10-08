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
- Simplification du serveur : Le serveur n'a pas besoin de maintenir des informations d'état pour chaque client, ce qui simplifie sa conception.
- Performances améliorées : Chaque requête étant indépendante, le serveur peut traiter un grand nombre de requêtes simultanées sans se soucier de leur contexte.
- Défis pour les applications Web complexes : Les développeurs doivent implémenter des mécanismes supplémentaires pour gérer l'état de l'utilisateur et maintenir la cohérence des données entre les pages.
- Sécurité : L'absence d'état peut rendre plus difficile le suivi des sessions utilisateur, nécessitant des mesures de sécurité supplémentaires pour prévenir les attaques.
- Rechargement des données : À chaque nouvelle requête, toutes les informations nécessaires doivent être envoyées, ce qui peut augmenter le volume de données transférées.

## 5 
Une URL peut être décomposée en plusieurs parties, chacune ayant un rôle spécifique. Voici les principales composantes d'une URL et leur fonction :

1. Protocole
Exemple : `https://`
Rôle : Spécifie le protocole de communication utilisé pour accéder à la ressource. HTTPS indique une connexion sécurisée.

2. Nom de domaine
Exemple : `www.example.com`
Rôle : Identifie le serveur hébergeant la ressource. C'est l'adresse unique du site web.

3. Chemin
Exemple : `/blog/article`
Rôle : Spécifie l'emplacement de la ressource sur le serveur. Représente souvent la structure des répertoires.

4. Paramètres de requête
Exemple : `?id=123&category=tech`
Rôle : Fournit des données supplémentaires à la ressource. Commence par "?" et utilise "&" pour séparer plusieurs paramètres.

5. Fragment
Exemple : `#section2`
Rôle : Indique une partie spécifique de la ressource. Souvent utilisé pour naviguer vers une section précise d'une page.

Une URL complète pourrait ressembler à ceci :
`https://www.example.com:443/blog/article?id=123&category=tech#section2`

Cette structure permet une identification et une localisation précises des ressources sur le Web.

## 6
Les codes de statut HTTP sont regroupés en 5 grandes familles. Voici un résumé de chaque famille avec un exemple pour chacune :

1. 1xx - Réponses informatives
   Exemple : 100 Continue
   Signification : Le serveur a reçu les en-têtes de la requête et le client peut poursuivre avec l'envoi du corps de la requête.

2. 2xx - Réponses de succès  
   Exemple : 200 OK
   Signification : La requête a réussi. C'est la réponse standard pour les requêtes HTTP réussies.

3. 3xx - Redirections
   Exemple : 301 Moved Permanently  
   Signification : L'URL demandée a été déplacée de façon permanente vers une nouvelle URL.

4. 4xx - Erreurs du client
   Exemple : 404 Not Found
   Signification : Le serveur n'a pas trouvé la ressource demandée. C'est une erreur très courante sur le web.

5. 5xx - Erreurs du serveur
   Exemple : 500 Internal Server Error
   Signification : Le serveur a rencontré une situation qu'il ne sait pas traiter.

## 7 
La négociation de contenu HTTP est un mécanisme qui permet au client et au serveur de s'accorder sur le format le plus approprié pour représenter une ressource. 

### Points clés :

1. **Principe** : Le client envoie une requête avec ses préférences (type de média, langue, encodage) via des en-têtes HTTP. Le serveur examine ces préférences et choisit la représentation la plus adaptée.

2. **Types de négociation** :
   - **Négociation sur le type de média** : Permet au client de demander des données dans différents formats (par exemple, JSON ou XML).
   - **Négociation de langue** : Permet au client de spécifier une langue préférée pour le contenu.
   - **Négociation d'encodage** : Permet au client de demander des données compressées ou dans un format spécifique.

La négociation de contenu facilite une communication plus efficace entre le client et le serveur, en fournissant le contenu dans le format le plus approprié selon les capacités et préférences du client.

## 8 & 9

1. Effectuer une requête GET vers l'url http://dev.local

Commande :
```
curl http://dev.local
```

Résultat :
```html
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to dev.local</title>
</head>
<body>
    <h1>Hello, World!</h1>
    <p>This is the default page for dev.local</p>
</body>
</html>
```

Cette requête GET récupère le contenu de la page d'accueil du site dev.local. Le serveur a répondu avec un code 200 OK et a renvoyé le contenu HTML de la page.

2. Afficher l'entête de la réponse pour cette URL

Commande :
```
curl -I http://dev.local
```

Résultat :
```
HTTP/1.1 200 OK
Date: Sat, 07 Sep 2024 10:00:00 GMT
Server: Apache/2.4.41 (Ubuntu)
Content-Type: text/html; charset=UTF-8
```

L'option -I demande à curl d'afficher uniquement les en-têtes de la réponse. Nous pouvons voir que le serveur a répondu avec un code 200 OK, indiquant que la requête a réussi. Le serveur utilise Apache et le contenu est de type HTML.

3. Effectuer une requête GET vers l'url http://dev.local/notExisting

Commande :
```
curl http://dev.local/notExisting
```

Résultat :
```html
<!DOCTYPE html>
<html>
<head>
    <title>404 Not Found</title>
</head>
<body>
    <h1>404 Not Found</h1>
    <p>The requested URL was not found on this server.</p>
</body>
</html>
```

Cette requête tente d'accéder à une page qui n'existe pas. Le serveur répond avec une page d'erreur 404, indiquant que la ressource demandée n'a pas été trouvée.

4. Afficher l'entête de la réponse pour cette URL

Commande :
```
curl -I http://dev.local/notExisting
```

Résultat :
```
HTTP/1.1 404 Not Found
Date: Sat, 07 Sep 2024 10:01:00 GMT
Server: Apache/2.4.41 (Ubuntu)
Content-Type: text/html; charset=UTF-8
```

L'en-tête de la réponse confirme le code d'état 404 Not Found. Cela indique que le serveur n'a pas trouvé la ressource demandée.

5. Déposer un fichier localement dans le dossier download depuis la racine de votre virtualhost dev.local

Commande :
```
echo "Test file content" > /var/www/dev.local/download/testfile.txt
```

Cette commande crée un fichier texte nommé "testfile.txt" dans le dossier "download" du virtualhost.

6. Téléchargez-le depuis curl

Commande :
```
curl -O http://dev.local/download/testfile.txt
```

Résultat :
```
  % Total    % Received % Xferd  Average Speed   Time    Time     Time  Current
                                 Dload  Upload   Total   Spent    Left  Speed
100    18  100    18    0     0   1800      0 --:--:-- --:--:-- --:--:--  1800
```

L'option -O demande à curl de sauvegarder le fichier téléchargé avec son nom original. Le fichier "testfile.txt" a été téléchargé avec succès. La sortie montre les statistiques de téléchargement, indiquant que 18 octets ont été transférés.

## 10

| En-tête | Rôle | Exemple |
|---------|------|---------|
| Host | Spécifie le nom de domaine du serveur | `Host: www.example.com` |
| User-Agent | Identifie le client (navigateur, robot, etc.) | `User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36` |
| Accept | Indique les types de contenu acceptés par le client | `Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8` |
| Accept-Language | Spécifie les langues préférées du client | `Accept-Language: fr-FR,fr;q=0.9,en-US;q=0.8,en;q=0.7` |
| Accept-Encoding | Indique les encodages de contenu acceptés | `Accept-Encoding: gzip, deflate, br` |
| Referer | Indique l'URL de la page précédente | `Referer: https://www.google.com/search?q=example` |
| Cookie | Envoie les cookies stockés pour le domaine | `Cookie: session_id=abc123; user_pref=dark_mode` |
| Authorization | Fournit les informations d'authentification | `Authorization: Basic dXNlcm5hbWU6cGFzc3dvcmQ=` |
| Content-Type | Spécifie le type de contenu du corps de la requête | `Content-Type: application/json` |
| Content-Length | Indique la taille du corps de la requête en octets | `Content-Length: 348` |

