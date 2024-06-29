# Mediator

Le **Mediator** est un patron de conception comportemental qui diminue les dépendances chaotiques entre les objets. Il restreint les communications directes entre les objets et les force à collaborer uniquement via un objet médiateur.

---
### Avantages et Inconvénients

- Principe de responsabilité unique. Vous pouvez mettre les communications entre les différents composants au même endroit, rendant le code plus facile à comprendre et à maintenir. ✅
- Principe ouvert/fermé. Vous pouvez ajouter de nouveaux médiateurs sans avoir à modifier les composants déjà en place. ✅
- Vous diminuez le couplage entre les différents composants d’un programme. ✅
- Vous pouvez réutiliser les composants individuels plus facilement. ✅

- Avec le temps, un médiateur peut évoluer en Objet Omniscient (un objet qui reconnaît trop de choses ou fait trop de choses). ❌
