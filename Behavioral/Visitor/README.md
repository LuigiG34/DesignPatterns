# Visitor

Le **Visitor** est un patron de conception comportemental qui vous permet de séparer les algorithmes et les objets sur lesquels ils opèrent.

---
### Avantages et Inconvénients

- Principe ouvert/fermé. Vous pouvez ajouter un nouveau comportement qui acceptera les objets de différentes classes sans les modifier. ✅
- Principe de responsabilité unique. Vous pouvez déplacer plusieurs versions du même comportement dans une seule classe. ✅
- Un objet visiteur peut accumuler des informations utiles en manipulant différents objets. Cela peut se révéler pratique si vous voulez parcourir une structure complexe d’objets comme un arbre, et lancer le traitement du visiteur sur chaque objet de cette structure. ✅

- Vous devez mettre à jour les visiteurs chaque fois qu’une classe est ajoutée ou retirée de la hiérarchie des éléments. ❌
- Les visiteurs n’ont parfois pas les accès nécessaires aux attributs ou méthodes privés des éléments qu’ils sont censés manipuler. ❌