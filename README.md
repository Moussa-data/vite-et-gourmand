# Vite & Gourmand

> Application web pour le traiteur bordelais Vite & Gourmand. Permet la consultation des menus et la commande en ligne.
>
> Projet réalisé dans le cadre de l'ECF du **TP Développeur Web et Web Mobile — Studi 2026**.

**Auteur :** Moussa Wane Camara — m.wanecamara@gmail.com
**Stack :** HTML5, CSS3, Bootstrap 5, JavaScript vanilla, PHP 8, PDO, MySQL, MongoDB, Fly.io
**Statut :** En développement — dépôt prévu le 23 juillet 2026

---

## Sommaire

1. [Présentation](#présentation)
2. [Stack technique](#stack-technique)
3. [Installation en local](#installation-en-local)
4. [Structure du projet](#structure-du-projet)
5. [Workflow Git](#workflow-git)
6. [Documentation associée](#documentation-associée)

---

## Présentation

Vite & Gourmand est un traiteur bordelais historique. L'application web a pour objectifs :

- présenter l'entreprise et ses menus,
- permettre aux clients de commander en ligne,
- offrir aux employés un espace de gestion des commandes,
- offrir à l'administrateur un espace de pilotage avec statistiques.

Quatre profils utilisateurs : visiteur, utilisateur enregistré, employé, administrateur.

## Stack technique

| Couche | Technologie |
|---|---|
| Front statique | HTML5, CSS3, Bootstrap 5 |
| Front dynamique | JavaScript vanilla, Fetch API |
| Back-end | PHP 8 + PDO |
| BDD relationnelle | MySQL / MariaDB |
| BDD non-relationnelle | MongoDB Atlas |
| Versioning | Git + GitHub |
| Déploiement | Fly.io |

Justifications détaillées dans `docs/doc-technique.md`.

## Installation en local

### Pré-requis

- macOS, Linux ou Windows
- [MAMP](https://www.mamp.info/) (Mac) ou [XAMPP](https://www.apachefriends.org/) (Windows/Linux)
- PHP 8 ou supérieur (fourni par MAMP/XAMPP)
- MySQL / MariaDB (fourni par MAMP/XAMPP)
- Git
- Un compte [MongoDB Atlas](https://www.mongodb.com/atlas) gratuit

### Étapes

1. **Cloner le repo**

   ```bash
   git clone git@github.com:moussawanecamara/vite-et-gourmand.git
   cd vite-et-gourmand
   ```

2. **Configurer la base MySQL**

   - Démarrer MAMP / XAMPP, ouvrir phpMyAdmin.
   - Créer une base de données nommée `vite_et_gourmand`.
   - Importer le fichier `sql/creation.sql` puis `sql/donnees.sql`.

3. **Configurer l'accès BDD**

   ```bash
   cp config/database.example.php config/database.local.php
   # Éditer database.local.php avec tes identifiants MySQL et l'URI MongoDB Atlas
   ```

4. **Servir l'application**

   - Créer un lien symbolique dans htdocs vers ce dossier, ou copier le projet dedans.
   - Visiter http://localhost/vite-et-gourmand/.

5. **Comptes de démo** (fournis dans `docs/manuel-utilisateur.pdf`) :
   - Visiteur : pas besoin de compte
   - Utilisateur : `client@demo.fr` / `Demo1234!`
   - Employé : `employe@viteetgourmand.fr` / `Employe2026!`
   - Administrateur : `admin@viteetgourmand.fr` / `Admin2026!`

## Structure du projet

```
vite-et-gourmand/
├── assets/
│   ├── css/             # Feuilles de styles (variables, style global)
│   ├── js/              # Scripts (filtres, validation)
│   └── images/          # Images statiques (logo, photos)
├── config/              # Configuration (BDD, constantes)
├── includes/            # Fonctions PHP communes, header, footer
├── views/               # Vues PHP (par espace fonctionnel)
│   ├── partials/
│   ├── menus/
│   ├── utilisateur/
│   ├── employe/
│   └── admin/
├── public/uploads/      # Uploads utilisateurs (images de menus)
├── sql/                 # Scripts de création et de données
├── docs/                # Documentation (MCD, manuel utilisateur, etc.)
├── tests/               # Captures et notes de tests
├── .gitignore
├── index.php            # Point d'entrée
└── README.md
```

## Workflow Git

Trois niveaux de branches :

- **`main`** : code stable, déployé en production
- **`dev`** : intégration des fonctionnalités, testée avant merge vers `main`
- **`feature/...`** : une branche par fonctionnalité, créée à partir de `dev`

Convention des messages de commit :

- `feat:` nouvelle fonctionnalité
- `fix:` correction de bug
- `docs:` documentation
- `style:` mise en forme du code
- `refactor:` réorganisation du code sans changement de comportement

## Documentation associée

Dans le dossier `docs/` :

- `doc-technique.md` — Choix techniques et architecture
- `mcd.png` — Modèle conceptuel de données
- `diagramme-cas-utilisation.png` — Diagrammes UML
- `diagramme-sequence.png` — Diagrammes UML
- `manuel-utilisateur.pdf` — Guide d'utilisation pour le jury
- `deploiement.md` — Procédure de déploiement sur Fly.io

Dans le dossier parent `Ma-formation-studi/` :

- `charte-graphique-vite-gourmand.pdf` — Charte graphique
- `01-cadrage/user-stories.md` — User stories du backlog

---

*ECF Studi 2026 — Reproduction et utilisation à des fins pédagogiques uniquement.*
