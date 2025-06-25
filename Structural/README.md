# Adapter

> L'**Adapter** est un patron de conception structurel qui permet de faire collaborer des objets ayant des interfaces normalement incompatibles.

|Avantages|Inconvénients|
|-|:-:|
|Principe de responsabilité unique. Vous découplez l’interface ou le code de conversion des données, de la logique métier du programme. ✅|La complexité générale du code augmente, car vous devez créer un ensemble de nouvelles classes et interfaces. Parfois, il est plus simple de modifier la classe du service afin de la faire correspondre avec votre code. ❌|
|Principe ouvert/fermé. Vous pouvez ajouter de nouveaux types d’adaptateurs dans le programme sans modifier le code client existant. Ces adaptateurs doivent forcément passer par l’interface du client. ✅|

---

# Bridge

> Le **Bridge** est un patron de conception structurel qui permet de séparer une grosse classe ou un ensemble de classes connexes en deux hiérarchies — abstraction et implémentation — qui peuvent évoluer indépendamment l’une de l’autre.


|Avantages|Inconvénients|
|-|:-:|
|Vous pouvez créer des classes et des applications multiplateformes. ✅|Le code va devenir plus compliqué si vous introduisez ce patron dans une classe très cohésive. ❌|
|Le code client manipule des abstractions de haut niveau. Il n’est pas dépendant des détails de la plateforme. ✅|
|Principe ouvert/fermé. Vous pouvez introduire de nouvelles abstractions et implémentations indépendamment les unes des autres. ✅|
|Principe de responsabilité unique. Vous pouvez vous concentrer sur la logique de haut niveau dans l’abstraction, et sur les détails de la plateforme dans l’implémentation. ✅|

---

# Composite

> Le **Composite** est un patron de conception structurel qui permet d’agencer les objets dans des arborescences afin de pouvoir traiter celles-ci comme des objets individuels.

|Avantages|Inconvénients|
|-|:-:|
|Vous pouvez travailler dans des structures arborescentes complexes plus facilement en utilisant les avantages du polymorphisme et de la récursivité. ✅|Vous rencontrerez parfois des difficultés pour définir une interface commune à certaines classes dont les fonctionnalités sont trop différentes. Dans certains scénarios, vous devez créer une interface composant bien trop générique, rendant le fonctionnement difficile à comprendre. ❌|
|Principe ouvert/fermé. Vous pouvez introduire de nouveaux types d’éléments dans l’application qui pourront directement être intégrés dans l’arborescence, sans avoir à réécrire l’existant. ✅|

---

# Decorator 

> Le **Decorator ** est un patron de conception structurel qui permet d’affecter dynamiquement de nouveaux comportements à des objets en les plaçant dans des emballeurs qui implémentent ces comportements.

|Avantages|Inconvénients|
|-|:-:|
|Vous pouvez étendre le comportement d’un objet sans avoir recours à la création d’une nouvelle sous-classe. ✅|Retirer un emballeur spécifique de la pile n’est pas chose aisée. ❌|
|Vous pouvez ajouter ou retirer dynamiquement des responsabilités à un objet au moment de l’exécution. ✅|Il n’est pas non plus aisé de mettre en place un décorateur dont le comportement ne varie pas en fonction de sa position dans la pile. ❌|
|Vous pouvez combiner plusieurs comportements en emballant un objet dans plusieurs décorateurs. ✅|Le code de configuration initial des couches peut avoir l’air assez moche. ❌|
|Principe de responsabilité unique. Vous pouvez découper une classe monolithique qui implémente plusieurs comportements différents en plusieurs petits morceaux. ✅|

---

# Façade 

> La **Façade** est un patron de conception structurel qui procure une interface offrant un accès simplifié à une librairie, un framework ou à n’importe quel ensemble complexe de classes.

|Avantages|Inconvénients|
|-|:-:|
|Vous pouvez isoler votre code de la complexité d’un sous-système. ✅|Une façade peut devenir un objet omniscient couplé à toutes les classes d’une application. ❌|

---

# Flyweight 

> Le **Flyweight** est un patron de conception structurel qui permet de stocker plus d’objets dans la RAM en partageant les états similaires entre de multiples objets, plutôt que de stocker les données dans chaque objet.

|Avantages|Inconvénients|
|-|:-:|
|Vous économisez beaucoup de RAM si votre programme est noyé par des tonnes d’objets similaires. ✅|Vous allez gagner en RAM mais perdre en cycles microprocesseur (CPU) si les données du contexte sont recalculées lors de chaque appel d’une méthode poids mouche. ❌|
||Le code devient beaucoup plus compliqué. Les développeurs qui rejoignent l’équipe vont se demander pourquoi les états d’une entité ont été séparés de cette manière. ❌|

---

# Proxy

> Le **Proxy** est un patron de conception structurel qui vous permet d’utiliser un substitut pour un objet. Elle donne le contrôle sur l’objet original, vous permettant d’effectuer des manipulations avant ou après que la demande ne lui parvienne.

|Avantages|Inconvénients|
|-|:-:|
|Vous pouvez contrôler l’objet du service sans que le client ne s’en aperçoive. ✅|Le code peut devenir plus complexe puisque vous devez y introduire de nombreuses classes. ❌|
|Vous pouvez gérer le cycle de vie de l’objet du service si les clients ne s’en occupent pas. ✅|La réponse du service peut mettre plus de temps à arriver. ❌|
|La procuration fonctionne même si l’objet du service n’est pas prêt ou pas disponible. ✅|
|Principe ouvert/fermé. Vous pouvez ajouter de nouvelles procurations sans toucher au service ou aux clients. ✅|