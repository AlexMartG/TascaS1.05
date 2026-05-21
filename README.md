# 🐘 Task S1.05. OOP 2 — Level 1

Abstract classes and interfaces in PHP applied through practical examples.

---

## 📄 Description

This project builds on Object-Oriented Programming concepts in PHP, focusing on abstract classes and interfaces. The exercises explore polymorphism through animal behaviours and geometric shape area calculations.

---

## 🎯 Learning objectives

- Apply abstract classes and interfaces in PHP
- Understand polymorphism: same method, different behaviour per class
- Structure class hierarchies in a clean and extensible way

---

## 🛠 Technologies

- **PHP 8+**

---

## 📁 Project structure

```
TascaS1.05/
└── level1/
    ├── exercise1/
    │   ├── Animal.php
    │   ├── AnimalSound.php
    │   ├── Cat.php
    │   ├── Dog.php
    │   └── index.php
    ├── exercise2/
    │   ├── Area.php
    │   ├── Rectangle.php
    │   ├── Shape.php
    │   ├── Triangle.php
    │   └── index.php
    └── README.md
```

---

## 📝 Exercises summary

| Exercise | Description |
|----------|-------------|
| **Exercise 1** | Abstract `Animal` class with a `name` attribute and an abstract `speak()` method via the `AnimalSound` interface; `Dog` and `Cat` subclasses each implement their own sound |
| **Exercise 2** | Abstract `Shape` class with `width` and `height`; `Area` interface with an `area()` method; `Triangle` and `Rectangle` subclasses that implement their own area calculation |

---

## 🚀 How to run the project

1. Clone the repository:
   ```bash
   git clone https://github.com/AlexMartG/TascaS1.05.git
   ```

2. Make sure you have PHP installed:
   ```bash
   php --version
   ```

3. Navigate into an exercise folder and run it:
   ```bash
   cd TascaS1.05/level1/exercise1
   php index.php
   ```

---

## ⚠️ Challenges faced

- Understanding when to use an abstract class versus an interface, and choosing the right approach for each exercise.
- Ensuring every subclass correctly implements all abstract methods and interfaces to avoid PHP fatal errors.

---

## ✅ Best practices applied

- Each exercise isolated in its own folder with clearly named files
- Abstract methods and interfaces enforced at the parent level to guarantee consistent behaviour across subclasses
- Code structured to be easily extended with new animals or shapes
