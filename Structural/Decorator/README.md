# Decorator 

Le **Decorator ** est un patron de conception structurel qui permet d’affecter dynamiquement de nouveaux comportements à des objets en les plaçant dans des emballeurs qui implémentent ces comportements.

---
### Avantages et Inconvénients

- Vous pouvez étendre le comportement d’un objet sans avoir recours à la création d’une nouvelle sous-classe. ✅
- Vous pouvez ajouter ou retirer dynamiquement des responsabilités à un objet au moment de l’exécution. ✅
- Vous pouvez combiner plusieurs comportements en emballant un objet dans plusieurs décorateurs. ✅
- Principe de responsabilité unique. Vous pouvez découper une classe monolithique qui implémente plusieurs comportements différents en plusieurs petits morceaux. ✅

- Retirer un emballeur spécifique de la pile n’est pas chose aisée. ❌
- Il n’est pas non plus aisé de mettre en place un décorateur dont le comportement ne varie pas en fonction de sa position dans la pile. ❌
- Le code de configuration initial des couches peut avoir l’air assez moche. ❌
