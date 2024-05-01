# Factory Method

La **Factory Method** est un modèle de conception de création qui fournit une interface pour créer des objets dans une superclasse, mais permet aux sous-classes de modifier le type d'objets qui seront créés.

---
### Avantages et Inconvénients

- Vous évitez un couplage serré entre le créateur et les produits concrets. ✅
- Principe de Responsabilité Unique. Vous pouvez déplacer le code de création de produit en un seul endroit dans le programme, rendant le code plus facile à supporter. ✅
- Principe Ouvert/Fermé. Vous pouvez introduire de nouveaux types de produits dans le programme sans casser le code client existant. ✅

- Le code peut devenir plus compliqué puisque vous devez introduire de nombreuses nouvelles sous-classes pour mettre en œuvre le modèle. Le meilleur cas de figure est lorsque vous introduisez le modèle dans une hiérarchie existante de classes créatrices. ❌
