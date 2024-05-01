# Abstract Factory

L'**Abstract Factory** est un modèle de conception de création qui vous permet de produire des familles d'objets liés sans spécifier leurs classes concrètes.

---
### Avantages et Inconvénients

- Vous pouvez être sûr que les classes que vous obtenez d'une fabrique sont compatibles entre elles. ✅
- Vous évitez un couplage serré entre les classes concrètes et le code. ✅
- (SRP) Vous pouvez extraire le code de création de classe en un seul endroit, rendant le code plus facile à supporter. ✅
- (OCP) Vous pouvez introduire de nouvelles variantes de classes sans casser le code existant. ✅

- Le code peut devenir plus compliqué, car de nombreuses nouvelles classes et interfaces sont introduites avec le modèle. ❌
