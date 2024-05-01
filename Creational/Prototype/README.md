# Prototype

Le **Prototype** est un modèle de conception de création qui vous permet de copier des objets existants sans rendre votre code dépendant de leurs classes.

---
### Avantages et Inconvénients

- Vous pouvez cloner des objets sans être lié à leurs classes concrètes. ✅
- Vous pouvez vous débarrasser du code d'initialisation répété en faveur du clonage de prototypes pré-construits. ✅
- Vous pouvez produire des objets complexes plus facilement. ✅
- Vous obtenez une alternative à l'héritage lors de la gestion des préréglages de configuration pour des objets complexes. ✅

- Cloner des objets complexes qui ont des références circulaires peut être très délicat. ❌
