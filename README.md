# Design Patterns en PHP

Il existe trois types différents de modèles de conception et, dans ces catégories, nous avons plusieurs types de modèles de conception en PHP. Ce projet est juste un exemple de la manière d'implémenter ces modèles en PHP. Ces modèles ne sont pas exclusifs au PHP.

---
### Patterns de Création
> Ces patterns indiquent différentes façons de créer des objets/classes.

|Popularité|Nom|Description|
|:-:|:-:|-|
|★★★|Abstract Factory|```Produit des familles d'objets liés sans définir explicitement les types spécifiques des objets.```|
|★★★|Builder|```Construit des objets complexes étape par étape.```|
|★★★|Factory Method|```Fournit une interface pour créer des objets dans une superclasse, mais permet aux sous-classes de modifier le type d'objets qui seront créés.```|
|★★☆|Prototype|```Duplique des objets existants sans que le code ne dépende de leurs classes..```|
|★★☆|Singleton|```Assurez-vous que la classe n'a qu'une seule instance, tout en fournissant un point d'accès global à cette instance.```|
---
### Patterns de Structure
> Ces patterns indiquent les différentes manières dont les objets/classes se rapportent les uns aux autres.

|Popularité|Nom|Description|
|:-:|:-:|-|
|★★★|Adapter|```Faire collaborer des objets ayant des interfaces normalement incompatibles.```|
|★☆☆|Bridge|```Séparer une grosse classe ou un ensemble de classes connexes en deux hiérarchies (abstraction et implémentation)```|
|★★☆|Composite|```Agencer les objets dans des arborescences afin de pouvoir traiter celles-ci comme des objets individuels.```|
|★☆☆|Decorator|```Affecter dynamiquement de nouveaux comportements à des objets en les plaçant dans des wrappers.```|
|★★☆|Facade|```Procure une interface qui offre un accès simplifié à une librairie, un framework ou à n’importe quel ensemble complexe de classes.```|
|☆☆☆|Flyweight|```Permet de stocker plus d’objets dans la RAM en partageant les états similaires entre de multiples objets, plutôt que de stocker les données dans chaque objet.```|
|★☆☆|Proxy|```Fournir un substitut d’un objet, un Proxy donne le contrôle sur l’objet original.```|
---
### Patterns de Comportement
> Ces patterns montrent comment les objets/classes communiquent et interagissent entre eux.

|Popularité|Nom|Description|
|:-:|:-:|-|
|★☆☆|Chain of Responsibility|```Faire circuler une demande dans une chaîne de handlers. Lorsqu'un handler reçoit une demande, il décide de la traiter ou de l’envoyer au handler suivant.```|
|★★★|Command|```Action à effectuer et la transforme en un objet autonome qui contient tous les détails de cette action.```|
|★★★|Iterator|```Parcourir les éléments d’une collection sans révéler sa représentation interne.```|
|☆☆☆|Mediator|```Diminuer les dépendances chaotiques entre les objets, restreint les communications directes entre les objets.```|
|★☆☆|Memento|```Sauvegarder et de rétablir l'état précédent d’un objet sans révéler les détails de son implémentation.```|
|★★★|Observer|```Mettre en place un mécanisme de souscription pour envoyer des notifications à plusieurs objets.```|
|★★☆|State|```Modifie le comportement d’un objet lorsque son état interne change. L’objet donne l’impression qu’il change de classe.```|
|★★★|Strategy|```Permet de définir une famille d’algorithmes, de les mettre dans des classes séparées et de rendre leurs objets interchangeables.```|
|★★☆|Template Method|```Mettre le squelette d’un algorithme dans la classe mère, mais laisse les sous-classes redéfinir certaines étapes de l’algorithme sans changer sa structure.```|
|★☆☆|Visitor|```Séparer les algorithmes et les objets sur lesquels ils opèrent.```|

Source : https://refactoring.guru/design-patterns/php