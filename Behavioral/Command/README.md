# Command 

La **Command** est un patron de conception comportemental qui prend une action à effectuer et la transforme en un objet autonome qui contient tous les détails de cette action. Cette transformation permet de paramétrer des méthodes avec différentes actions, planifier leur exécution, les mettre dans une file d’attente ou d’annuler des opérations effectuées.

---
### Avantages et Inconvénients

- Principe de responsabilité unique. Vous pouvez découpler les classes qui appellent des traitements, de celles qui les exécutent. ✅
- Principe ouvert/fermé. Vous pouvez ajouter de nouvelles commandes dans le programme sans endommager le code client existant. ✅
- Vous pouvez mettre en place une fonctionnalité annuler-rétablir. ✅
- Vous pouvez différer l’exécution de vos traitements. ✅
- Vous pouvez assembler plusieurs commandes simples en une seule plus complexe. ✅

- Le code peut devenir plus compliqué, car vous créez une nouvelle couche entre les demandeurs et les récepteurs. ❌
