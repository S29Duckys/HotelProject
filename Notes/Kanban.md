---

kanban-plugin: board

---

## 🔴 À faire

- [ ] **[FP001 — HTML/CSS] Gestion du client** ⏱️ *3h*
	- [ ] Page liste des clients (tableau)
	- [ ] Formulaire création / édition client
	- [ ] Page détail client (historique, réservations)
	- [ ] Responsive mobile
	> ✅ **Critère de validation :** Les 3 vues s'affichent correctement avec la charte graphique.
- [ ] **[FP002 — HTML/CSS] Gestion des chambres** ⏱️ *3h*
	- [ ] Vue grille des chambres (libre / occupée / nettoyage)
	- [ ] Formulaire réservation chambre
	- [ ] Page détail chambre (catégorie, options, état)
	- [ ] Responsive mobile
	> ✅ **Critère de validation :** Les états de chambre sont visuellement distincts.
- [ ] **[FP003 — HTML/CSS] Gestion du restaurant** ⏱️ *2h30*
	- [ ] Vue tables du restaurant
	- [ ] Formulaire nouvelle commande
	- [ ] Page facture restaurant
	- [ ] Responsive mobile
	> ✅ **Critère de validation :** On peut simuler une commande de A à Z visuellement.
- [ ] **[FP004 — HTML/CSS] Gestion du bar** ⏱️ *2h*
	- [ ] Vue ventes du bar
	- [ ] Vue stocks avec alertes visuelles
	- [ ] Formulaire nouvelle vente
	- [ ] Responsive mobile
	> ✅ **Critère de validation :** Les alertes de stock faible sont visibles.
- [ ] **[FP005 — HTML/CSS] Salles & Piscine** ⏱️ *2h30*
	- [ ] Vue disponibilité des salles
	- [ ] Formulaire réservation salle + options
	- [ ] Vue piscine (horaires, accès, état)
	- [ ] Formulaire accès visiteur piscine
	- [ ] Responsive mobile
	> ✅ **Critère de validation :** On peut réserver une salle et un accès piscine.
- [ ] **[FP006 — HTML/CSS] Administration** ⏱️ *1h30*
	- [ ] Vue liste utilisateurs
	- [ ] Formulaire création utilisateur + rôle
	- [ ] Vue gestion des menus / navigation
	- [ ] Responsive mobile
	> ✅ **Critère de validation :** Un admin peut créer un utilisateur et lui assigner un rôle.
- [ ] **[GLOBAL — HTML/CSS] Composants communs** ⏱️ *2h*
	- [ ] Sidebar navigation
	- [ ] Topbar (titre + bouton + recherche)
	- [ ] Comportement hamburger mobile
	- [ ] Composant modal (générique)
	- [ ] Composant badge / tag de statut
	- [ ] Composant tableau générique
	- [ ] Charte graphique (couleurs, polices Kaushan Script + Pacifico)
	> ✅ **Critère de validation :** Les composants sont identiques sur toutes les pages.
- [ ] **[FP001 — MVC] Gestion du client** ⏱️ *4h*
	- [ ] Modèle Client (héritage si applicable)
	- [ ] Contrôleur : lister, créer, modifier, supprimer
	- [ ] Contrôleur : enregistrement d'une réservation client
	- [ ] Contrôleur : historique du client
	- [ ] Vues liées aux actions
	> ✅ **Critère de validation :** CRUD client fonctionnel en base de données.
- [ ] **[FP002 — MVC] Gestion des chambres** ⏱️ *4h*
	- [ ] Modèle Chambre + Catégorie (héritage)
	- [ ] Contrôleur : occupations, états, catégories, options
	- [ ] Contrôleur : réservation d'une chambre
	- [ ] Vues liées aux actions
	> ✅ **Critère de validation :** On peut réserver une chambre et changer son état.
- [ ] **[FP003 — MVC] Gestion du restaurant** ⏱️ *3h*
	- [ ] Modèle Commande + Produit
	- [ ] Contrôleur : ventes, facturation
	- [ ] Vues liées aux actions
	> ✅ **Critère de validation :** Une commande est enregistrée et une facture générée.
- [ ] **[FP004 — MVC] Gestion du bar** ⏱️ *2h30*
	- [ ] Modèle Boisson + Stock
	- [ ] Contrôleur : ventes, mise à jour stock
	- [ ] Vues liées aux actions
	> ✅ **Critère de validation :** Le stock se décrémente lors d'une vente.
- [ ] **[FP005 — MVC] Salles & Piscine** ⏱️ *3h*
	- [ ] Modèle Salle + Réservation salle
	- [ ] Modèle Piscine + Accès
	- [ ] Contrôleurs : réservations, options, réservant
	- [ ] Vues liées aux actions
	> ✅ **Critère de validation :** Réservation salle et accès piscine fonctionnels en BDD.
- [ ] **[FP007 — MVC] Administration** ⏱️ *2h*
	- [ ] Modèle Utilisateur + Rôle
	- [ ] Contrôleur : gestion utilisateurs, menus
	- [ ] Système de droits d'accès par rôle
	- [ ] Vues liées aux actions
	> ✅ **Critère de validation :** Un utilisateur sans droits ne peut pas accéder aux modules restreints.
- [ ] **[HÉRITAGE — MVC] Implémenter au moins 1 héritage** ⏱️ *1h30*
	- [ ] Identifier quelle classe hérite de quelle autre (ex: Suite extends Chambre)
	- [ ] Implémenter l'héritage dans le code
	- [ ] Documenter le choix dans le rapport
	> ✅ **Critère de validation :** L'héritage est visible dans le code et justifié.
- [ ] **[TESTS] Tests unitaires** ⏱️ *3h*
	- [ ] Configurer le framework de test
	- [ ] Test : création d'un client
	- [ ] Test : réservation d'une chambre
	- [ ] Test : vérification des droits utilisateur
	- [ ] Test : mise à jour du stock bar
	- [ ] Lancer tous les tests et corriger les erreurs
	> ✅ **Critère de validation :** Tous les tests passent au vert.
- [ ] **[GIT] Mise en place du dépôt** ⏱️ *30min*
	- [ ] Créer la branche avec les 2 prénoms du binôme
	- [ ] Définir les règles de commit (convention de nommage)
	- [ ] Premier commit : structure du projet
	> ✅ **Critère de validation :** La branche existe sur le dépôt distant.


## 🟡 En cours

- [ ] **[PHASE 1 — MODÉLISATION]** ⏱️ *~8h*
	- [x] Identifier toutes les entités du projet (Client, Chambre, Réservation, etc.)
	- [x] Définir les attributs de chaque entité
	- [x] Définir les relations entre entités (cardinalités)
	- [x] Réaliser le MCD complet
	- [x] Transformer le MCD en MLD
	- [ ] Créer le script SQL de la base de données
	- [ ] Insérer des données de test (fixtures)
	> ✅ **Critère de validation :** Le MCD est relu et validé par le binôme. Le script SQL tourne sans erreur.


## 🔵 En révision / À valider par le binôme



## ✅ Terminé





%% kanban:settings
```
{"kanban-plugin":"board","list-collapse":[false]}
```
%%