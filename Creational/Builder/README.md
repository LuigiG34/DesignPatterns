# Builder

The **Builder** is a creational design pattern that lets you construct complex objects step by step. The pattern allows you to produce different types and representations of an object using the same construction code.

---
### Pros & Cons

- You can construct objects step-by-step, defer construction steps or run steps recursively. ✅
- You can reuse the same construction code when building various representations of products. ✅
- Single Responsibility Principle. You can isolate complex construction code from the business logic of the product. ✅

- The overall complexity of the code increases since the pattern requires creating multiple new classes. ❌
