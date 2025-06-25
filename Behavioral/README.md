# Chain of Responsibility

> La **Chain of Responsibility** est un patron de conception comportemental qui permet de faire circuler des demandes dans une chaîne de handlers. Lorsqu’un handler reçoit une demande, il décide de la traiter ou de l’envoyer au handler suivant de la chaîne.

|Avantages|Inconvénients|
|-|:-:|
|Vous pouvez contrôler l’ordre des traitements de la demande. ✅|Il se peut que certaines demandes ne soient pas traitées. ❌|
|Principe de responsabilité unique. Vous pouvez découpler les classes qui appellent des traitements, de celles qui les exécutent. ✅|
|Principe ouvert/fermé. Vous pouvez ajouter de nouveaux handlers dans le programme sans toucher au code client existant. ✅|

---

# Command 

> La **Command** est un patron de conception comportemental qui prend une action à effectuer et la transforme en un objet autonome qui contient tous les détails de cette action. Cette transformation permet de paramétrer des méthodes avec différentes actions, planifier leur exécution, les mettre dans une file d’attente ou d’annuler des opérations effectuées.

|Avantages|Inconvénients|
|-|:-:|
|Principe de responsabilité unique. Vous pouvez découpler les classes qui appellent des traitements, de celles qui les exécutent. ✅|Le code peut devenir plus compliqué, car vous créez une nouvelle couche entre les demandeurs et les récepteurs. ❌|
|Principe ouvert/fermé. Vous pouvez ajouter de nouvelles commandes dans le programme sans endommager le code client existant. ✅|
|Vous pouvez mettre en place une fonctionnalité annuler-rétablir. ✅|
|Vous pouvez différer l’exécution de vos traitements. ✅|
|Vous pouvez assembler plusieurs commandes simples en une seule plus complexe. ✅|

---

# Iterator

> L'**Iterator** est un patron de conception comportemental qui permet de parcourir les éléments d’une collection sans révéler sa représentation interne (liste, pile, arbre, etc.).

|Avantages|Inconvénients|
|-|:-:|
|Principe de responsabilité unique. Vous allez nettoyer le code client et les collections en déplaçant les algorithmes de parcours — souvent très lourds — dans des classes séparées. ✅|L’utilisation de ce patron est exagérée si votre application ne se sert que de collections simples. ❌|
|Principe ouvert/fermé. Vous pouvez implémenter de nouveaux types de collections et d’itérateurs et les utiliser avec le code existant sans rien endommager. ✅|Les itérateurs sont parfois moins efficaces que certaines collections spécialisées. ❌|
|Vous pouvez parcourir une même collection avec plusieurs itérateurs simultanément, car chacun possède son propre état d’itération. ✅|
|Pour cette même raison, vous pouvez arrêter une itération et la reprendre quand vous le souhaitez. ✅|

---

# Mediator

> Le **Mediator** est un patron de conception comportemental qui diminue les dépendances chaotiques entre les objets. Il restreint les communications directes entre les objets et les force à collaborer uniquement via un objet médiateur.

|Avantages|Inconvénients|
|-|:-:|
|Principe de responsabilité unique. Vous pouvez mettre les communications entre les différents composants au même endroit, rendant le code plus facile à comprendre et à maintenir. ✅|Avec le temps, un médiateur peut évoluer en Objet Omniscient (un objet qui reconnaît trop de choses ou fait trop de choses). ❌|
|Principe ouvert/fermé. Vous pouvez ajouter de nouveaux médiateurs sans avoir à modifier les composants déjà en place. ✅|
|Vous diminuez le couplage entre les différents composants d’un programme. ✅|
|Vous pouvez réutiliser les composants individuels plus facilement. ✅|

---

# Memento

> Le **Memento** est un patron de conception comportemental qui permet de sauvegarder et de rétablir l’état précédent d’un objet sans révéler les détails de son implémentation.

|Avantages|Inconvénients|
|-|:-:|
|Vous pouvez prendre des instantanés de l’état d’un objet tout en respectant son encapsulation. ✅|L’application pourrait consommer beaucoup de RAM si les clients créent des mémentos trop souvent. ❌|
|Vous pouvez simplifier le code du créateur en laissant le gardien gérer l’historique de l’état du créateur. ✅|Les gardiens doivent garder la trace du cycle de vie des créateurs pour pouvoir détruire les mémentos obsolètes. ❌|
||La majorité des langages de programmation dynamiques comme le PHP, Python ou le JavaScript ne peuvent pas garantir que l’état sauvegardé dans le mémento ne sera pas modifié. ❌|

---

# Observer

> L'**Observer** est un patron de conception comportemental qui permet de mettre en place un mécanisme de souscription pour envoyer des notifications à plusieurs objets, au sujet d’événements concernant les objets qu’ils observent.

|Avantages|Inconvénients|
|-|:-:|
|Principe ouvert/fermé. Vous pouvez ajouter de nouvelles classes souscripteur sans avoir à modifier le code du diffuseur (et inversement si vous avez une interface diffuseur). ✅| Les souscripteurs sont avertis dans un ordre aléatoire. ❌|
|Vous pouvez établir des relations entre les objets lors du lancement de l’application. ✅|

---

# State

> Le **State** est un patron de conception comportemental qui permet de modifier le comportement d’un objet lorsque son état interne change. L’objet donne l’impression qu’il change de classe.

|Avantages|Inconvénients|
|-|:-:|
|Principe de responsabilité unique. Organisez le code lié aux différents états dans des classes séparées. ✅|L’utilisation de ce patron est un peu exagérée si votre automate n’a que quelques états ou qu’il y a peu de transitions. ❌|
|Principe ouvert/fermé. Ajoutez de nouveaux états sans modifier les classes état ou le contexte existants. ✅|
|Simplifiez le code du contexte en éliminant les gros blocs conditionnels de l’automate. ✅|

---

# Strategy

> La **Strategy** est un patron de conception comportemental qui permet de définir une famille d’algorithmes, de les mettre dans des classes séparées et de rendre leurs objets interchangeables.

|Avantages|Inconvénients|
|-|:-:|
|Vous pouvez permuter l’algorithme utilisé à l’intérieur d’un objet à l’exécution. ✅|Si vous n’avez que quelques algorithmes qui ne varient pas beaucoup, nul besoin de rendre votre programme plus compliqué avec les nouvelles classes et interfaces qui accompagnent la mise en place du patron. ❌|
|Vous pouvez séparer les détails de l’implémentation d’un algorithme et le code qui l’utilise. ✅|Les clients doivent pouvoir comparer les différentes stratégies et choisir la bonne. ❌|
|Vous pouvez remplacer l’héritage par la composition. ✅|De nombreux langages de programmation modernes gèrent les types fonctionnels et vous permettent d’implémenter différentes versions d’un algorithme à l’intérieur d’un ensemble de fonctions anonymes. Vous pouvez ensuite utiliser ces fonctions exactement comme vous le feriez pour des objets stratégie, sans encombrer votre code avec des classes et interfaces supplémentaires. ❌|
|Principe ouvert/fermé. Vous pouvez ajouter de nouvelles stratégies sans avoir à modifier le contexte. ✅|

---

# TemplateMethod

> La **TemplateMethod** est un patron de conception comportemental qui permet de mettre le squelette d’un algorithme dans la classe mère, mais laisse les sous-classes redéfinir certaines étapes de l’algorithme sans changer sa structure.

|Avantages|Inconvénients|
|-|:-:|
|Vous permettez aux clients de redéfinir certaines parties d’un grand algorithme. Elles sont ainsi moins affectées par les modifications apportées aux autres parties de l’algorithme. ✅|Certains clients peuvent être limités à cause du squelette de l’algorithme. ❌|
|Vous pouvez remonter le code dupliqué dans la classe mère. ✅|Vous ne respectez pas le Principe de substitution de Liskov, si vous supprimez l’implémentation d’une étape par défaut dans une sous-classe. ❌|
||Plus vous avez d’étapes, plus le patron de méthode devient difficile à maintenir. ❌|

---

# Visitor

> Le **Visitor** est un patron de conception comportemental qui vous permet de séparer les algorithmes et les objets sur lesquels ils opèrent.

|Avantages|Inconvénients|
|-|:-:|
|Principe ouvert/fermé. Vous pouvez ajouter un nouveau comportement qui acceptera les objets de différentes classes sans les modifier. ✅|Vous devez mettre à jour les visiteurs chaque fois qu’une classe est ajoutée ou retirée de la hiérarchie des éléments. ❌|
|Principe de responsabilité unique. Vous pouvez déplacer plusieurs versions du même comportement dans une seule classe. ✅|Les visiteurs n’ont parfois pas les accès nécessaires aux attributs ou méthodes privés des éléments qu’ils sont censés manipuler. ❌|
|Un objet visiteur peut accumuler des informations utiles en manipulant différents objets. Cela peut se révéler pratique si vous voulez parcourir une structure complexe d’objets comme un arbre, et lancer le traitement du visiteur sur chaque objet de cette structure. ✅|
