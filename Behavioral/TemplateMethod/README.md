# TemplateMethod

La **TemplateMethod** est un patron de conception comportemental qui permet de mettre le squelette d’un algorithme dans la classe mère, mais laisse les sous-classes redéfinir certaines étapes de l’algorithme sans changer sa structure.

---
### Avantages et Inconvénients

- Vous permettez aux clients de redéfinir certaines parties d’un grand algorithme. Elles sont ainsi moins affectées par les modifications apportées aux autres parties de l’algorithme. ✅
- Vous pouvez remonter le code dupliqué dans la classe mère. ✅

- Certains clients peuvent être limités à cause du squelette de l’algorithme. ❌
- Vous ne respectez pas le Principe de substitution de Liskov, si vous supprimez l’implémentation d’une étape par défaut dans une sous-classe. ❌
- Plus vous avez d’étapes, plus le patron de méthode devient difficile à maintenir. ❌
