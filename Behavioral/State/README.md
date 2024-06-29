# State

Le **State** est un patron de conception comportemental qui permet de modifier le comportement d’un objet lorsque son état interne change. L’objet donne l’impression qu’il change de classe.

---
### Avantages et Inconvénients

- Principe de responsabilité unique. Organisez le code lié aux différents états dans des classes séparées. ✅
- Principe ouvert/fermé. Ajoutez de nouveaux états sans modifier les classes état ou le contexte existants. ✅
- Simplifiez le code du contexte en éliminant les gros blocs conditionnels de l’automate. ✅

- L’utilisation de ce patron est un peu exagérée si votre automate n’a que quelques états ou qu’il y a peu de transitions. ❌
