# Abstract Factory

> L'**Abstract Factory** est un modèle de conception de création qui vous permet de produire des familles d'objets liés sans spécifier leurs classes concrètes.

|Avantages|Inconvénients|
|-|:-:|
|Vous pouvez être sûr que les classes que vous obtenez d'une fabrique sont compatibles entre elles. ✅|Le code peut devenir plus compliqué, car de nombreuses nouvelles classes et interfaces sont introduites avec le modèle. ❌|
|(SRP) Vous pouvez extraire le code de création de classe en un seul endroit, rendant le code plus facile à supporter. ✅|
|(OCP) Vous pouvez introduire de nouvelles variantes de classes sans casser le code existant. ✅|
|Vous évitez un couplage serré entre les classes concrètes et le code. ✅|

---

# Builder

> Le **Builder** est un modèle de conception de création qui vous permet de construire des objets complexes étape par étape. Le modèle vous permet de produire différents types et représentations d'un objet en utilisant le même code de construction.

|Avantages|Inconvénients|
|-|:-:|
|Vous pouvez construire des objets étape par étape, différer les étapes de construction ou exécuter des étapes de manière récursive. ✅|La complexité globale du code augmente car le modèle nécessite la création de plusieurs nouvelles classes. ❌|
|Vous pouvez réutiliser le même code de construction lors de la construction de différentes représentations de produits. ✅|
|Principe de Responsabilité Unique. Vous pouvez isoler le code de construction complexe de la logique commerciale du produit. ✅|

---

# Factory Method

> La **Factory Method** est un modèle de conception de création qui fournit une interface pour créer des objets dans une superclasse, mais permet aux sous-classes de modifier le type d'objets qui seront créés.

### Avantages et Inconvénients

|Avantages|Inconvénients|
|-|:-:|
|Vous évitez un couplage serré entre le créateur et les produits concrets. ✅|Le code peut devenir plus compliqué puisque vous devez introduire de nombreuses nouvelles sous-classes pour mettre en œuvre le modèle. Le meilleur cas de figure est lorsque vous introduisez le modèle dans une hiérarchie existante de classes créatrices. ❌|
|Principe de Responsabilité Unique. Vous pouvez déplacer le code de création de produit en un seul endroit dans le programme, rendant le code plus facile à supporter. ✅|
|Principe Ouvert/Fermé. Vous pouvez introduire de nouveaux types de produits dans le programme sans casser le code client existant. ✅|

---

# Prototype

> Le **Prototype** est un modèle de conception de création qui vous permet de copier des objets existants sans rendre votre code dépendant de leurs classes.

|Avantages|Inconvénients|
|-|:-:|
|Vous pouvez cloner des objets sans être lié à leurs classes concrètes. ✅|Cloner des objets complexes qui ont des références circulaires peut être très délicat. ❌|
|Vous pouvez vous débarrasser du code d'initialisation répété en faveur du clonage de prototypes pré-construits. ✅|
|Vous pouvez produire des objets complexes plus facilement. ✅|
|Vous obtenez une alternative à l'héritage lors de la gestion des préréglages de configuration pour des objets complexes. ✅|

---

# Singleton

> Le **Singleton** est un modèle de conception de création qui vous permet de garantir qu'une classe a une seule instance, tout en fournissant un point d'accès global à cette instance.

|Avantages|Inconvénients|
|-|:-:|
|Vous pouvez être sûr qu'une classe n'a qu'une seule instance. ✅|Viole le Principe de Responsabilité Unique. Le modèle résout deux problèmes à la fois. ❌
|Vous gagnez un point d'accès global à cette instance. ✅|Le modèle Singleton peut masquer une mauvaise conception, par exemple, lorsque les composants du programme en savent trop les uns sur les autres. ❌
|L'objet singleton est initialisé uniquement lorsqu'il est demandé pour la première fois. ✅|Le modèle nécessite un traitement spécial dans un environnement multithread afin que plusieurs fils d'exécution ne créent pas plusieurs fois un objet singleton. ❌
||Il peut être difficile de tester unitairement le code client du Singleton car de nombreux cadres de test reposent sur l'héritage pour produire des objets simulés. Étant donné que le constructeur de la classe singleton est privé et qu'il est impossible de remplacer les méthodes statiques dans la plupart des langues, vous devrez trouver une manière créative de simuler le singleton. Ou simplement ne pas écrire les tests. Ou ne pas utiliser le modèle Singleton. ❌
