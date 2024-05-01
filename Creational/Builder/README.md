# Builder

Le **Builder** est un modèle de conception de création qui vous permet de construire des objets complexes étape par étape. Le modèle vous permet de produire différents types et représentations d'un objet en utilisant le même code de construction.

---
### Avantages et Inconvénients

- Vous pouvez construire des objets étape par étape, différer les étapes de construction ou exécuter des étapes de manière récursive. ✅
- Vous pouvez réutiliser le même code de construction lors de la construction de différentes représentations de produits. ✅
- Principe de Responsabilité Unique. Vous pouvez isoler le code de construction complexe de la logique commerciale du produit. ✅

- La complexité globale du code augmente car le modèle nécessite la création de plusieurs nouvelles classes. ❌
