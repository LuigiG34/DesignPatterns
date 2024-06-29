# Observer

L'**Observer** est un patron de conception comportemental qui permet de mettre en place un mécanisme de souscription pour envoyer des notifications à plusieurs objets, au sujet d’événements concernant les objets qu’ils observent.

---
### Avantages et Inconvénients

- Principe ouvert/fermé. Vous pouvez ajouter de nouvelles classes souscripteur sans avoir à modifier le code du diffuseur (et inversement si vous avez une interface diffuseur). ✅
- Vous pouvez établir des relations entre les objets lors du lancement de l’application. ✅

- Les souscripteurs sont avertis dans un ordre aléatoire. ❌
