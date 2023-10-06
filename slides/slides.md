---
marp: true
theme: brutalism
footer: 'design patterns - 2023 / 2024 ///'
---

<script src="https://cdn.tailwindcss.com/3.0.0"></script>
<script>tailwind.config = { corePlugins: { preflight: false } }</script>

<div class="h-full grid items-center my-16">
<div>

# <!--fit--> Design Patterns
<h3 class="text-right">par eliot demots</h3>

</div>
</div>

---

<!-- paginate: true -->
![bg left](./themes/images/P1006722%20-%20Grande.jpeg)

## À propos

<div class="my-16">

**Eliot**

ESGI IW 2021

Développeur web fullstack

Wizards Technologies

PHP / React

</div>

---

<!-- paginate: true -->
![bg right](https://picsum.photos/600/800?random=99)

<div class="my-16 h-full grid items-center">

## <!-- fit -->Et vous ?

</div>

---

<!-- paginate: true -->
![bg left:25%](https://picsum.photos/id/442/300/800)

<div class="my-16 h-full grid items-center">

## Test de positionnement

</div>

---

## Sommaire

![bg opacity:.3](https://picsum.photos/id/870/1280/720?grayscale&blur)

<div class="h-full content-center grid grid-auto-rows gap-2 my-16">
<div class="px-4 border-4 border-black border-solid">

### 1 - Principes de conception

</div>
<div class="px-4 border-4 border-black border-solid">

### 2 - Design patterns

</div>
</div>

---

## Principes de conception

> Méthodologie pour concevoir un programme

<div class="columns my-16 h-full items-center">
<div class="text-center">

### S.O.L.I.D

</div>
<div class="text-center">

### D.R.Y

</div>
</div>

---

## S.O.L.I.D

> Acronyme des cinqs fondamentaux de la POO

<div class="my-16">
<div>

Single responsibility

</div>
<div>

Open-Closed

</div>
<div>

Liskov Substitution

</div>
<div>

Interface segragation

</div>
<div>

Dependency inversion

</div>
</div>

---

## Single responsibility principle (SRP)

> Une classe n'a **qu'une seule responsabilité**

<div class="my-8">

#### Les +

- *Tests* - une classe n'ayant qu'une responsabilité est plus facile à tester
- *Organisation* - des classes plus petites sont plus faciles à rechercher et maintenir 

</div>

---

## Open-Closed principle (OCP)

> Une classe est **ouverte à l'extension** mais **fermée à la modification** 

<!-- Exception faite de la correction de bugs dans l'application -->

<div class="my-8">

#### Les +

- *Evolutivité* - on ne modifie pas le code éxistant donc on évite l'ajout de bugs potentiels

</div>

---

## Liskov substitution principle (LSP)

> Si une classe B est un sous-type de la classe A, **alors on doit pouvoir remplacer A par B sans perturber le comportement du programme**

---

## Interface segregation principle (ISP)

> Les grandes interfaces doivent être **divisées** en plus petites interfaces.

<div class="my-8">

#### Les +

- *Organisation* - Les classes qui implémentent les interfaces ne se préoccupent que des méthodes qui les intéressent

</div>

---

## Dependency inversion principle (DIP)

<!-- Ex: Garage > Voiture / Moto / Vélo => Véhicules -->

> Découplage de modules grâce à des abstractions

<div class="my-8">

#### Les +

- *Fléxibilité* - Permettre une meilleure évolutivité au programme

</div>

---

## D.R.Y

> Don't Repeat Yourself

<div class="my-16">
<figure>
<blockquote>
"Chaque élément […] doit avoir une représentation unique, non ambigüe et faisant autorité au sein d'un système."
</blockquote>
<figcaption>
Andy Hunt et Dave Thomas - The Pragmatic Programmer
</figcaption>
</figure>
</div>

---

## D.R.Y

> Don't Repeat Yourself

<div class="my-16">

- Vise à réduire la répétition de modèle dans le code et la remplaçant par des **abtractions** ou en la **normalisant** pour *éviter la redondance*

</div>

---

## design patterns

> Solutions typiques pour résoudre des problèmes récurrents

<div class="my-16">

<!-- Pas de copier/coller comme pour une fonction ou une librairie qu'on importe -->
- Ressemblent à des plans préétablis pour résoudre un problème de concéption récurrent dans votre code
- C'est un **concept général pour résoudre un problème particulier** 

</div>

---

## design patterns

> Ce ne sont pas des algorithmes !

<div class="my-16">

- Les 2 concepts décrivent des solutions typiques à des problèmes connus
- *L'algorithme* définit un ensemble d'actions claires pour atteindre un même résultat
- *Un patron de concéption* appliqué à deux programmes différents **peut être différent**

<!-- Analogie: Recette de cuisine / Plan de maison

Recette: instructions claires qui mènent à un résultat
Plan: Vue d'ensemble du résultat et ses caractéristques, pas d'étapes précises pour y parvenir -->

</div>

---

## Catégories de design patterns

<div class="columns grid-cols-3 items-center h-full my-8">
<div>

Patrons de **création**

</div>
<div>

Patrons **structurels**

</div>
<div>

Patrons **comportementaux**

</div>
</div>

---

## Patrons de création

<div class="my-16">

> Fournissent un mécanisme de création d'objets augmentant la fléxibilité et la réutilisation du code éxistant

</div>

---

## Patrons structurels

<div class="my-16">

> Expliquent comment assembler des objets et des classes dans des structures plus grandes, tout en gardant les structures fléxibles et efficaces

</div>

---

## Patrons comportementaux

<div class="my-16">

> Assurent une communication efficace et l'attribution des responsabilités entre les objets

</div>

---

![bg opacity:.3](https://picsum.photos/1280/720?random=1)

<div class="my-16 h-full grid items-center">

## <!-- fit --> Patrons de création

</div>

---

##  Factory method

<div class="my-16">

<!-- SRP / OCP -->
- **Interface** pour la création d'objets
- **Délègue** aux classes enfant le choix du **type d'objet** à créer

--
#### Use case

Quand on ne connait pas à l'avance les types et dépendances précis des objets.

</div>

---

##  Factory method

<div class="grid grid-cols-2 gap-16 my-16">
<div>

![](./themes/images/factory-method/factory-method.png)

</div>
<div>

![](./themes/images/factory-method/factory-method(1).png)

</div>
</div>

---

##  Abstract factory

<!-- SRP / OCP -->
<div class="my-16">

- Permet de créer des familles d'objets sans préciser leur classe concrète

--
#### Use case

Quand on souhaite maniupler les objets d'un même thème si on ne les connaît pas encore ou si on souhaite rendre le code évolutif

</div>

---

##  Abstract factory

<div class="my-16">

![](./themes/images/abstract-factory/abstract-factory-uml.png)

</div>

---

##  Builder

<!-- SRP / OCP -->
<div class="my-16">

- Permet de construire des objets complexes étape par étape

--
#### Use case

Si l'on souhaite **produire différentes variantes** d'un objet en utilisant le **même code**

</div>

---

##  Builder

<div class="grid grid-cols-[max-content,1fr] gap-16 my-8">
<div>

![](./themes/images/builder/builder-uml.png)

</div>
<div>

![](./themes/images/builder/builder.png)

</div>
</div>

---

##  Singleton

<div class="my-16">

- Créer et fourni une instance qui ne pourra éxister qu'en un seul exemplaire

--
#### Use case

Si l'on souhaite s'assurer qu'une classe n'aura toujours **qu'une seule instance** pour accéder à des ressources partagées - ex: pour se connecter à une base de données, lire un fichier

</div>

---

##  Singleton

<div class="text-center h-full my-8">

![h:420](./themes/images/singleton/singleton.png)

</div>

---

<div class="h-full grid content-center my-16">

## TP 1

### Creational design patterns

![bg right:33%](https://picsum.photos/1280/720?random=4)

</div>

---

## TP 1 (factory method)

<div class="my-16">

- Créez une interface `Book` avec une méthode `getDetails()`.
- Implémentez deux classes concrètes `FictionBook` et
`HistoryBook` qui implémentent cette interface.
- Créez une classe `BookFactory` qui utilise le Factory Method
Pattern pour instancier des objets de classe `Book` en fonction d'un paramètre.

</div>

---

## TP 1 (abstract factory)

<div class="my-16">

- Créez une interface `BookFactory` avec des méthodes
`createFictionBook()` et `createHistoryBook()`.
- Implémentez deux classes concrètes `EnglishBookFactory` et
`FrenchBookFactory` qui implémentent cette interface.
- Chacune de ces classes devrait retourner des objets `FictionBook` et `HistoryBook` respectivement.

</div>

---

## TP 1 (builder)

<div class="my-16">

- Créez une classe `BookBuilder` qui utilise le deisgn pattern Builder pour construire des objets `Book` étape par étape.
- Utilisez le pattern Builder pour créer un objet `Book` avec divers attributs tels que le titre, l'auteur, 'ISBN, etc.

</div>

---

![bg opacity:.3](https://picsum.photos/1280/720?random=2)

<div class="my-16 h-full grid items-center">

## <!-- fit --> Patrons structurels

</div>

---

##  Adapter

<!-- SRP / OCP -->
<div class="my-16">

- Permet de faire collaborer des classes normalement incompatibles qui n'implémente pas les mêmes interfaces.

--
#### Use case

Lorsqu'on souhaite notamment utiliser des librairies externes qui ne sont pas frocèment compatibles avec notre code éxistant

</div>

---

##  Adapter

<div class="text-center h-full my-8">

![h:420](./themes/images/adapter/adapter-uml.png)

</div>

---

##  Composite

<!-- OCP -->
<div class="my-16">

- Agence les objets en **arborescence** pour traiter ces arborescences comme des **objets individuels**.

--
#### Use case

Quand on doit implémenter une arborescence objets

</div>

---

##  Composite

<div class="text-center h-full my-8">

![h:420](./themes/images/composite/structure-en-2x.png)

</div>

---

##  Facade

<div class="columns h-full items-center my-8 gap-16">
<div>

- Procure une classe donnant un  accès simplifié à n'importe quel ensemble complexe de classes.

</div>
<div>

![](./themes/images/facade/facade.png)

</div>
</div>

---

##  Facade

<div class="text-center h-full my-8">

![h:420](./themes/images/facade/facade-uml.png)

</div>

---

##  Proxy

<div class="my-16">
<div>

- Permet de maîtriser l'accès à un objet
- Permet d'éffectuer des actions et/ou manipulations avant ou après que la demande ne lui parvienne.

</div>
<div>

--
#### Use case

Lorsque qu'on souhaite accèder à des données volumineuses, mais seulement de temps en temps

</div>
</div>

---

##  Proxy

<div class="text-center h-full my-8">

![h:420](./themes/images/proxy/live-example-2x.png)

</div>

---

##  Decorator

<div class="my-16">
<div>

- Ajoute dynamiquement de nouveaux comportements à des objets.
- "Emballe" notre objets dans des boîtes qui ajoutent ces comportements.

</div>
<div>

--
#### Use case

Si l'on souhaite ajouter des fonctionnalités cumulables à notre objet.

</div>
</div>

---

##  Decorator

<div class="text-center h-full my-8">

![h:420](./themes/images/decorator/decorator-comic-1-2x.png)

</div>

---


<div class="h-full grid content-center my-16">

## TP 2

### structual design patterns

![bg right:33%](https://picsum.photos/1280/720?random=5)

</div>

---

## TP 2 (Adapter)

<div class="my-8">

- Si ce n'est pas déjà le cas, ajoutez un attribut `price` à votre classe Book.
- Créez une interface `EBook` avec une méthode `getPrice()` pour les livres électroniques.
- Implémentez une classe `EBookAdapter` qui adapte la classe `Book` pour fonctionner avec des livres électroniques. Cette classe devrait implémenter l'interface `EBook` et utiliser la classe `Book` pour obtenir le prix.

</div>

---

## TP 2 (Composite)

<div class="my-16">

- Créez une classe `BookCategory` qui représente une catégorie de livres, telle que "Science-Fiction", "Histoire" ou "Romance".
- Utilisez le pattern **composite** pour permettre l'ajout de livres individuels ou de sous-catégories de livres à une catégorie.
- Implémentez une méthode pour afficher la hiérarchie complète des catégories et des livres.

</div>

---

## TP 2 (decorator)

<div class="my-16">

- Créez une classe `DiscountedBook` qui implémente l'interface `Book` et accepte un livre en tant que paramètre dans son constructeur.
- La classe `DiscountedBook` doit réduire le prix du livre original de 10% lors de l'appel à la méthode `getPrice()`.

</div>

---

## TP 2 (proxy)

<div class="my-8">

- Ajoutez un attribut `pegi` à vos livres.
- Créez une interface `LibraryInterface` avec une méthode `readBook()`.
- Implémentez une classe `Library` qui implémente cette interface pour permettre la lecture de livres.
- Créez une classe `PegiProxy` qui agit comme un proxy pour `Library`. Le proxy doit vérifier si l'utilisateur a l'âge requis pour lire le livre et appeler la méthode `readBook()` en conséquence.

</div>

---

## TP 2 (facade)

<div class="my-16 columns gap-16">
<div>
<small>

- Créez une classe `Library`.
- Créez une méthode `getBook()` qui prendra en paramètre un titre, l'âge du client, si le client veut un e-book et si il a le droit à une remise.

</small>
</div>
<div>
<small>

- Dans la méthode `getBook()`, 
  + Cherchez le livre grâce à son titre dans la liste créée (`BookCategory`)
  + vérifiez que le client à l'âge requis pour le lire
  + transformez le livre en e-book si nécessaire
  + appliquez une réduction si il y est éligible.

</small>
</div>
</div>

---

![bg opacity:.3](https://picsum.photos/1280/720?random=3)

<div class="my-16 h-full grid items-center">

## <!-- fit --> Patrons comportementaux

</div>

---

<div class="my-16 h-full grid items-center">

# <!--fit--> Merci !

</div>

---

## Une question ?
> ddemots@myges.fr

<div class="my-16 h-full grid items-center">
<div>

#### Crédits

- [refactoring.guru](refactoring.guru)

</div>
</div>
