# 🎓 Mini Application MVC – Gestion des Élèves et des Matières

## 🧩 Description du projet

Cette mini application a été développée dans le cadre d'un apprentissage du **design pattern MVC (Modèle-Vue-Contrôleur)** en PHP.  

Elle permet de **gérer des élèves et leurs niveaux**, ainsi que d'afficher et manipuler des **matières scolaires**.

Le projet est conçu pour illustrer la séparation des responsabilités entre :
- **Modèles** : gestion des interactions avec la base de données (PDO)
- **Vues** : affichage des données à l'utilisateur
- **Contrôleurs** : logique applicative et coordination entre modèle et vue

---

## ⚙️ Fonctionnalités principales

### 👩‍🎓 Gestion des élèves
- Affichage de la liste des élèves avec leur niveau  
- Ajout d'un nouvel élève (avec mot de passe sécurisé `password_hash`)  
- Modification des informations d'un élève  
- Suppression d'un élève  

### 📚 Gestion des matières
- Affichage de la liste des matières  
- Ajout d'une nouvelle matière  

---

## 🗂️ Structure du projet
```
design-patterns-MVC/
│
├── controller/
│   ├── elevesController.php
│   ├── matieresController.php
│   └── route.php
│
├── modele/
│   ├── bdd.php
│   ├── elevesModele.php
│   ├── niveauxModele.php
│   └── matieresModele.php
│
├── view/
│   ├── elevesList.php
│   ├── addEleve.php
│   ├── editEleve.php
│   ├── matieresList.php
│   ├── header.php
│   ├── footer.php
│   └── home.php
│
└── index.php
```

---

## 🧠 Technologies utilisées

- **PHP 8+**
- **PostgreSQL / MySQL**
- **HTML5 / CSS3 / Bootstrap 5**
- **Architecture MVC**
- **PDO** pour les interactions avec la base de données

---

## 🔧 Installation

1. **Clone le projet** :
```bash
   git clone https://github.com/tonpseudo/design-patterns-MVC.git
```

2. **Place le dossier** dans ton répertoire `htdocs` (si tu utilises XAMPP) ou dans ton serveur web

3. **Crée une base de données** PostgreSQL/MySQL et importe le fichier `database.sql` (si fourni)

4. **Configure les identifiants** de connexion dans `modele/bdd.php` :
```php
   private static $host = 'localhost';
   private static $dbname = 'ton_nom_de_bdd';
   private static $user = 'ton_utilisateur';
   private static $password = 'ton_mot_de_passe';
```

5. **Lance ton serveur** Apache et rends-toi sur :
```
   http://localhost/design-patterns-MVC/
```

---

## 🎯 Fonctionnalités à venir

- [ ] Système d'authentification pour les élèves
- [ ] Association élèves ↔ matières
- [ ] Gestion des notes
- [ ] Pagination de la liste des élèves
- [ ] Recherche et filtres avancés

---

## 🧪 Auteur

Projet réalisé par **[Ton Nom]**  
Dans le cadre de l'apprentissage du **pattern MVC en PHP**.

---

## 📜 Licence

Ce projet est librement réutilisable à des fins pédagogiques.

---

## 🤝 Contribuer

Les contributions sont les bienvenues ! N'hésite pas à ouvrir une **issue** ou soumettre une **pull request**.