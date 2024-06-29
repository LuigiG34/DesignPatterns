# Flyweight 

Le **Flyweight** est un patron de conception structurel qui permet de stocker plus d’objets dans la RAM en partageant les états similaires entre de multiples objets, plutôt que de stocker les données dans chaque objet.

---
### Avantages et Inconvénients

- Vous économisez beaucoup de RAM si votre programme est noyé par des tonnes d’objets similaires. ✅

- Vous allez gagner en RAM mais perdre en cycles microprocesseur (CPU) si les données du contexte sont recalculées lors de chaque appel d’une méthode poids mouche. ❌
- Le code devient beaucoup plus compliqué. Les développeurs qui rejoignent l’équipe vont se demander pourquoi les états d’une entité ont été séparés de cette manière. ❌
