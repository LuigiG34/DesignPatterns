# Abstract Factory

The **Abstract Factory** is a creational design pattern that lets you produce families of related objects without specifying their concrete classes.

---
### Pros & Cons

- You can be sure that the classes you're getting from a factory are compatible with each other. ✅
- You avoid tight coupling between concrete classes and code. ✅
- (SRP) You can extract the classe creation code into one place, making the code easier to support. ✅
- (OCP) You can introduce new variants of classes without breaking existing code. ✅

- The code may become more complicated, since a lot of new classes and interfaces are being introduced along with the pattern.❌
