# Proxy

Le **Proxy** est un patron de conception structurel qui vous permet d’utiliser un substitut pour un objet. Elle donne le contrôle sur l’objet original, vous permettant d’effectuer des manipulations avant ou après que la demande ne lui parvienne.

---
### Avantages et Inconvénients

- Vous pouvez contrôler l’objet du service sans que le client ne s’en aperçoive. ✅
- Vous pouvez gérer le cycle de vie de l’objet du service si les clients ne s’en occupent pas. ✅
- La procuration fonctionne même si l’objet du service n’est pas prêt ou pas disponible. ✅
- Principe ouvert/fermé. Vous pouvez ajouter de nouvelles procurations sans toucher au service ou aux clients. ✅

- Le code peut devenir plus complexe puisque vous devez y introduire de nombreuses classes. ❌
- La réponse du service peut mettre plus de temps à arriver. ❌
