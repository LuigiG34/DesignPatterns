# Chain of Responsibility

La **Chain of Responsibility** est un patron de conception comportemental qui permet de faire circuler des demandes dans une chaîne de handlers. Lorsqu’un handler reçoit une demande, il décide de la traiter ou de l’envoyer au handler suivant de la chaîne.

---
### Avantages et Inconvénients

- Vous pouvez contrôler l’ordre des traitements de la demande. ✅
- Principe de responsabilité unique. Vous pouvez découpler les classes qui appellent des traitements, de celles qui les exécutent. ✅
- Principe ouvert/fermé. Vous pouvez ajouter de nouveaux handlers dans le programme sans toucher au code client existant. ✅

- Il se peut que certaines demandes ne soient pas traitées. ❌
