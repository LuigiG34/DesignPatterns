# Strategy

La **Strategy** est un patron de conception comportemental qui permet de définir une famille d’algorithmes, de les mettre dans des classes séparées et de rendre leurs objets interchangeables.

---
### Avantages et Inconvénients

- Vous pouvez permuter l’algorithme utilisé à l’intérieur d’un objet à l’exécution. ✅
- Vous pouvez séparer les détails de l’implémentation d’un algorithme et le code qui l’utilise. ✅
- Vous pouvez remplacer l’héritage par la composition. ✅
- Principe ouvert/fermé. Vous pouvez ajouter de nouvelles stratégies sans avoir à modifier le contexte. ✅

- Si vous n’avez que quelques algorithmes qui ne varient pas beaucoup, nul besoin de rendre votre programme plus compliqué avec les nouvelles classes et interfaces qui accompagnent la mise en place du patron. ❌
- Les clients doivent pouvoir comparer les différentes stratégies et choisir la bonne. ❌
- De nombreux langages de programmation modernes gèrent les types fonctionnels et vous permettent d’implémenter différentes versions d’un algorithme à l’intérieur d’un ensemble de fonctions anonymes. Vous pouvez ensuite utiliser ces fonctions exactement comme vous le feriez pour des objets stratégie, sans encombrer votre code avec des classes et interfaces supplémentaires. ❌

