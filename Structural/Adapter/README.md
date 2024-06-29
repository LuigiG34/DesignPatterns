# Adapter

L'**Adapter** est un patron de conception structurel qui permet de faire collaborer des objets ayant des interfaces normalement incompatibles.

---
### Avantages et Inconvénients

- Principe de responsabilité unique. Vous découplez l’interface ou le code de conversion des données, de la logique métier du programme. ✅
- Principe ouvert/fermé. Vous pouvez ajouter de nouveaux types d’adaptateurs dans le programme sans modifier le code client existant. Ces adaptateurs doivent forcément passer par l’interface du client. ✅

- La complexité générale du code augmente, car vous devez créer un ensemble de nouvelles classes et interfaces. Parfois, il est plus simple de modifier la classe du service afin de la faire correspondre avec votre code. ❌
