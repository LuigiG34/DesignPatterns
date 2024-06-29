# Iterator

L'**Iterator** est un patron de conception comportemental qui permet de parcourir les éléments d’une collection sans révéler sa représentation interne (liste, pile, arbre, etc.).

---
### Avantages et Inconvénients

- Principe de responsabilité unique. Vous allez nettoyer le code client et les collections en déplaçant les algorithmes de parcours — souvent très lourds — dans des classes séparées. ✅
- Principe ouvert/fermé. Vous pouvez implémenter de nouveaux types de collections et d’itérateurs et les utiliser avec le code existant sans rien endommager. ✅
- Vous pouvez parcourir une même collection avec plusieurs itérateurs simultanément, car chacun possède son propre état d’itération. ✅
- Pour cette même raison, vous pouvez arrêter une itération et la reprendre quand vous le souhaitez. ✅

- L’utilisation de ce patron est exagérée si votre application ne se sert que de collections simples. ❌
- Les itérateurs sont parfois moins efficaces que certaines collections spécialisées. ❌
