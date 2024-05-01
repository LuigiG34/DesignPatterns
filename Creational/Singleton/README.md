# Singleton

Le **Singleton** est un modèle de conception de création qui vous permet de garantir qu'une classe a une seule instance, tout en fournissant un point d'accès global à cette instance.

---
### Avantages et Inconvénients

- Vous pouvez être sûr qu'une classe n'a qu'une seule instance. ✅
- Vous gagnez un point d'accès global à cette instance. ✅
- L'objet singleton est initialisé uniquement lorsqu'il est demandé pour la première fois. ✅

- Viole le Principe de Responsabilité Unique. Le modèle résout deux problèmes à la fois. ❌
- Le modèle Singleton peut masquer une mauvaise conception, par exemple, lorsque les composants du programme en savent trop les uns sur les autres. ❌
- Le modèle nécessite un traitement spécial dans un environnement multithread afin que plusieurs fils d'exécution ne créent pas plusieurs fois un objet singleton. ❌
- Il peut être difficile de tester unitairement le code client du Singleton car de nombreux cadres de test reposent sur l'héritage pour produire des objets simulés. Étant donné que le constructeur de la classe singleton est privé et qu'il est impossible de remplacer les méthodes statiques dans la plupart des langues, vous devrez trouver une manière créative de simuler le singleton. Ou simplement ne pas écrire les tests. Ou ne pas utiliser le modèle Singleton. ❌
