# Memento

Le **Memento** est un patron de conception comportemental qui permet de sauvegarder et de rétablir l’état précédent d’un objet sans révéler les détails de son implémentation.

---
### Avantages et Inconvénients

- Vous pouvez prendre des instantanés de l’état d’un objet tout en respectant son encapsulation. ✅
- Vous pouvez simplifier le code du créateur en laissant le gardien gérer l’historique de l’état du créateur. ✅

- L’application pourrait consommer beaucoup de RAM si les clients créent des mémentos trop souvent. ❌
- Les gardiens doivent garder la trace du cycle de vie des créateurs pour pouvoir détruire les mémentos obsolètes. ❌
- La majorité des langages de programmation dynamiques comme le PHP, Python ou le JavaScript ne peuvent pas garantir que l’état sauvegardé dans le mémento ne sera pas modifié. ❌
