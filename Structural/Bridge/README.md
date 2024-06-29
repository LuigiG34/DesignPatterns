# Bridge

Le **Bridge** est un patron de conception structurel qui permet de séparer une grosse classe ou un ensemble de classes connexes en deux hiérarchies — abstraction et implémentation — qui peuvent évoluer indépendamment l’une de l’autre.

---
### Avantages et Inconvénients

- Vous pouvez créer des classes et des applications multiplateformes. ✅
- Le code client manipule des abstractions de haut niveau. Il n’est pas dépendant des détails de la plateforme. ✅
- Principe ouvert/fermé. Vous pouvez introduire de nouvelles abstractions et implémentations indépendamment les unes des autres. ✅
- Principe de responsabilité unique. Vous pouvez vous concentrer sur la logique de haut niveau dans l’abstraction, et sur les détails de la plateforme dans l’implémentation. ✅

- Le code va devenir plus compliqué si vous introduisez ce patron dans une classe très cohésive. ❌
