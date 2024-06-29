# Composite

Le **Composite** est un patron de conception structurel qui permet d’agencer les objets dans des arborescences afin de pouvoir traiter celles-ci comme des objets individuels.

---
### Avantages et Inconvénients

- Vous pouvez travailler dans des structures arborescentes complexes plus facilement en utilisant les avantages du polymorphisme et de la récursivité. ✅
- Principe ouvert/fermé. Vous pouvez introduire de nouveaux types d’éléments dans l’application qui pourront directement être intégrés dans l’arborescence, sans avoir à réécrire l’existant. ✅

- Vous rencontrerez parfois des difficultés pour définir une interface commune à certaines classes dont les fonctionnalités sont trop différentes. Dans certains scénarios, vous devez créer une interface composant bien trop générique, rendant le fonctionnement difficile à comprendre. ❌
