# Prototype

The **Prototype** is a creational design pattern that lets you copy existing objects without making your code dependent on their classes.

---
### Pros & Cons

- You can clone objects without coupling to their concrete classes. ✅
- You can get rid of repeated initialization code in favor of cloning pre-built prototypes. ✅
- You can produce complex objects more conveniently. ✅

- You get an alternative to inheritance when dealing with configuration presets for complex objects. ✅
- Cloning complex objects that have circular references might be very tricky. ❌
