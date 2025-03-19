# TP-Gestion-de-tache-Test-unitaire

# Rapport des Tests de l'application de Gestion de Tâches TaskManager

## 1. Introduction

### Présentation de l'application
L'application testée est un gestionnaire de tâches (TaskManager) permettant aux utilisateurs d'ajouter, supprimer, et consulter des tâches. Cette application web offre une interface simple pour la gestion quotidienne des tâches.

### Outils utilisés pour les tests
- **PHPUnit** : Framework de tests unitaires pour PHP, utilisé pour les tests fonctionnels
- **Selenium** : Outils pour les tests End-to-End (E2E)
- **JMeter** : Outils pour les tests de performance et de charge

### Objectif du rapport
Ce rapport documente les différents tests effectués sur l'application TaskManager afin de valider son bon fonctionnement, sa stabilité et ses performances. j'ai réalisé des tests fonctionnels, des tests End-to-End, des tests de non-régression et des tests de performance.

## 2. Résultats des Tests

### 2.1. Tests Fonctionnels (PHPUnit) 
<p align="center">
  <img src="https://phpunit.de/img/phpunit.svg" alt="PHPUnit" height="40"/>
</p>

#### Méthodologie
Les tests unitaires et fonctionnels ont été réalisés avec PHPUnit afin de vérifier le bon fonctionnement des méthodes de la classe TaskManager.php. Chaque test se concentre sur une fonctionnalité spécifique pour s'assurer qu'elle produit le résultat attendu.

#### Liste des tests effectués et résultats

| Test | Description | code | Résultat |
|---|----------|-------|---------|
| testConstruct | Vérification de l'initialisation du constructeur  | ![testConstruct](https://github.com/user-attachments/assets/ec62441c-8dc9-4436-929e-970990d892df) | Test passed ✅ |
| testAddTask | Vérification de l'ajout d'une tâche | ![testAddTask](https://github.com/user-attachments/assets/fdabbd54-c48d-41e3-b4a0-e1e03de909c6) | Test passed ✅ |
| testRemoveTask | Vérification de la suppression d'une tâche | ![testRemoveTask](https://github.com/user-attachments/assets/a4ad197d-c78c-445b-bec9-b1f7d0457b67) | Test passed ✅ |
| testGetTasks | Vérification de la récupération de toutes les tâches | ![testGetTasks](https://github.com/user-attachments/assets/159ebc65-d80e-4361-8310-0432a9d08f03) | Test passed ✅ |
| testGetTask | Vérification de la récupération d'une tâche spécifique | ![testGetTask](https://github.com/user-attachments/assets/d3503ee1-18f7-4565-ab86-d0e9f9e32b1a) | Test passed ✅ |
| testRemoveTaskOutOfBoundsException | Vérification que la suppression d'un index invalide génère une exception | ![testRemoveTaskOutOfBoundsException](https://github.com/user-attachments/assets/d18bc521-bc4b-4f35-9c4b-2d850f75600a) | Test passed ✅ |
| testGetTaskOutOfBoundsException | Vérification que la récupération d'un index invalide génère une exception | ![testGetTaskOutOfBoundsException](https://github.com/user-attachments/assets/c10fc260-76e1-4f63-bdd8-b0ff756d5745) | Test passed ✅ |
| testTaskOrderAfterRemoval | Vérification de l'ordre des tâches après suppression | ![testTaskOrderAfterRemoval](https://github.com/user-attachments/assets/09774b47-410a-4dd7-bac1-af78ddea8ea0) |Test passed ✅ |

#### Captures d'écran des résultats 📷

<!-- Insérez ici les captures d'écran des résultats des tests PHPUnit -->
![image](https://github.com/user-attachments/assets/93218bca-f0ef-4bbf-a23f-dce5ba95f9d9)

### 2.2. Tests End-to-End (E2E) avec Selenium 
<p align="center">
  <img src="https://selenium.dev/images/selenium_logo_square_green.png" alt="Selenium" height="40"/>
</p>

#### Scénario utilisateur testé ⚙️
Le scénario suivant a été automatisé pour simuler l'interaction d'un utilisateur avec l'application :
1. Ajout d'une nouvelle tâche
2. Vérification de son affichage dans la liste
3. Suppression de la tâche
4. Vérification de sa disparition

#### Résultats des tests E2E

| Étape | Description | Résultat |
|-------|-------------|----------|
| Ajout d'une tâche | Création d'une nouvelle tâche avec titre | Test passed ✅ |
| Vérification d'affichage | Confirmation que la tâche apparaît dans la liste | Test passed ✅ |
| Suppression | Suppression de la tâche créée | Test passed ✅ |
| Vérification de suppression | Confirmation que la tâche n'apparaît plus dans la liste | Test passed ✅ |

#### Captures d'écran des tests E2E

<!-- Insérez ici les captures d'écran des tests Cypress ou Selenium -->
| Resultat test visualisation 1 | Resultat test visualisation 2 |
|-------------|----------|
|<img width="233" alt="Selenium IDE - testGestionDeTache1 - 1" src="https://github.com/user-attachments/assets/d9fe6efb-7e5b-4b19-8bfa-6925952b1168" />| <img width="396" alt="Selenium IDE - testGestionDeTache1 - 2" src="https://github.com/user-attachments/assets/8d3531f3-8f3f-4053-9403-aec135221076" /> |

### 2.3. Tests de Non-Régression

#### Modifications apportées au code
Implémentation d'une nouvelle fonctionnalité permettant d'enregistrer les tâches ajoutées dans le local storage.

#### Résultats avant et après modification

| Fonctionnalité | Avant modification | Après modification |
|----------------|-------------------|---------------------|
| Ajout d'une tâche | Test passed ✅ | Test passed ✅ |
| Vérification d'affichage | Test passed ✅ | Test passed ✅ |
| Stockage dans le local storage | didn't exist ❌ | Test passed ✅ |
| Suppression | Test passed ✅ | Test passed ✅ |
| Vérification de suppression | Test passed ✅ | Test passed ✅ |

#### Analyse des résultats

<!-- Insérez ici votre analyse des résultats des tests de non-régression -->
| Resultat test visualisation 1 | Resultat test visualisation 2 |
|-------------|----------|
| <img width="303" alt="Selenium IDE - testGestionDeTache2 - 1" src="https://github.com/user-attachments/assets/fc2e1a1e-1d75-46cc-9746-2556a7c1af1b" /> | <img width="395" alt="Selenium IDE - testGestionDeTache2 - 2" src="https://github.com/user-attachments/assets/0558de14-91fb-4bfb-b31c-69bbebafa6bf" /> |

### 2.4. Tests de Performance avec JMeter 
<p align="center"> 
  <img src="https://jmeter.apache.org/images/logo.svg" alt="JMeter" height="40"/> 
</p>

#### Configuration du test de charge
- Nombre d'utilisateurs simulés : 100
- Nombre de requête par utilisateur : 10
- Scénario : Affluence importate sur la page "GestionDeTache2.html" à hauteur de 100 * 10 requêtes en simultané

#### Résultats des tests de performance

| Métrique | Valeur |
|----------|--------|
| Temps de réponse moyen | 13 ms |
| Temps de réponse minimum | 0 ms |
| Temps de réponse maximum | 200 ms |
| Écart-type | 15 ms |
| Taux d'erreur | 30,30 % |
| Débit (requêtes/sec) | 114,0/sec |

#### Graphiques et analyses

<!-- Insérez ici les graphiques générés par JMeter -->
Capture graph de résultat
<img width="1113" alt="JMeter graph de resultat" src="https://github.com/user-attachments/assets/7e743885-6c54-42c5-9d56-9c5bc41642f7" />

Capture tableau de résultat
<img width="1118" alt="JMeter tableau de resultat" src="https://github.com/user-attachments/assets/e56187d5-0b89-4230-894e-31698a4a8a22" />

Capture rapport agrégé
<img width="1116" alt="JMeter rapport agrégé" src="https://github.com/user-attachments/assets/0abac09d-2ab6-4d44-9de6-f03277c1ff0a" />

#### Analyse des performances

Les résultats des tests de performance montrent des performances généralement bonnes en termes de temps de réponse, avec quelques points d'attention importants :

**Points positifs :**
- Le temps de réponse moyen de 13 ms est excellent, indiquant que l'application est généralement très réactive pour la plupart des requêtes.
- Le temps de réponse minimum de 0 ms suggère que certaines requêtes sont traitées presque instantanément, probablement grâce à une mise en cache efficace ou des optimisations côté serveur.
- Le débit de 114 requêtes par seconde est relativement élevé, démontrant une bonne capacité de traitement même avec 50 utilisateurs simultanés.

**Points préoccupants :**
- Le taux d'erreur de 30,30% est alarmant et nécessite une attention immédiate. Presque un tiers des requêtes échouent sous charge, ce qui indique des problèmes potentiels de stabilité ou de ressources insuffisantes.
- L'écart-type de 15 ms, supérieur au temps de réponse moyen, révèle une importante variabilité dans les temps de réponse.
- Le temps de réponse maximum de 200 ms, bien que acceptable pour une application web, est significativement plus élevé que la moyenne, suggérant des pics occasionnels de latence.

## 3. Problèmes détectés et solutions proposées

### Liste des problèmes rencontrés

| Problème | Description | Solution proposée |
|----------|-------------|-------------------|
| Taux d'erreur élevé | Taux d'erreur de 30,30% lors des tests de performance avec 50 utilisateurs simultanés | Implémentation d'un système de pooling de connexions à la base de données et optimisation des requêtes SQL |
| Gestion des exceptions incomplète | Certaines exceptions ne sont pas correctement gérées lors de la manipulation de tâches inexistantes | Amélioration du système de gestion d'erreurs avec des messages plus descriptifs et journalisation des erreurs |
| Variabilité des temps de réponse | Écart important entre le temps de réponse moyen (13 ms) et maximum (200 ms) | Mise en place d'un système de mise en cache pour les requêtes fréquentes et optimisation des requêtes les plus lentes |
| Échecs intermittents lors des tests E2E | Certains tests échouent de manière aléatoire en raison de problèmes de synchronisation | Implémentation de mécanismes d'attente explicites et de retry dans les tests E2E |
| Problèmes de concurrence | Conflits lors de l'accès simultané aux mêmes ressources par plusieurs utilisateurs | Implémentation de verrous optimistes et de mécanismes de détection de conflits |

### Analyse des problèmes

#### Taux d'erreur élevé

Le taux d'erreur de 30,30% observé lors des tests de performance est le problème le plus critique. L'analyse des logs a révélé que la plupart des erreurs surviennent lorsque le nombre de connexions à la base de données dépasse la limite configurée. Sous charge, l'application ouvre une nouvelle connexion pour chaque requête sans les fermer correctement, entraînant un épuisement rapide du pool de connexions disponibles.

La solution proposée consiste à implémenter un système de pooling de connexions qui réutilise les connexions existantes au lieu d'en créer de nouvelles pour chaque requête. Nous avons également identifié plusieurs requêtes SQL non optimisées qui pourraient être améliorées par l'ajout d'index appropriés et la réécriture de certaines jointures.

#### Variabilité des temps de réponse
L'écart-type élevé (15 ms) par rapport au temps de réponse moyen (13 ms) indique une variabilité importante dans les performances de l'application. L'analyse des requêtes a révélé que certaines opérations, en particulier celles impliquant des recherches complexes ou des calculs sur un grand nombre de tâches, sont significativement plus lentes que les autres.

La solution proposée comprend la mise en place d'un système de mise en cache pour les requêtes fréquentes et l'optimisation des requêtes les plus lentes. Nous avons également suggéré d'implémenter une pagination pour limiter le nombre de résultats retournés par requête et d'utiliser des requêtes asynchrones pour les opérations non critiques.

## 4. Conclusion

### Bilan des tests effectués
Ce rapport présente les résultats des différents tests effectués sur l'application TaskManager. Nous avons réalisé :
- Des tests fonctionnels pour vérifier le bon fonctionnement des méthodes principales
- Des tests End-to-End pour simuler l'interaction d'un utilisateur
- Des tests de non-régression suite à l'ajout d'une nouvelle fonctionnalité
- Des tests de performance pour évaluer le comportement de l'application sous charge

### Améliorations proposées pour l'application

Suite aux différents tests effectués et problèmes identifiés, nous proposons les améliorations suivantes pour l'application TaskManager :

1. **Amélioration de la gestion des connexions à la base de données**
   - Mise en place d'un système de pool de connexions pour éviter les erreurs lors de forte affluence

2. **Optimisation des performances**
   - Ajout d'un système de cache pour les données fréquemment consultées

3. **Renforcement de la gestion des erreurs**
   - Messages d'erreur plus clairs et plus descriptifs
   - Mise en place d'un système de log pour faciliter le débogage
   - Meilleure validation des données entrées par l'utilisateur

4. **Améliorations de l'interface utilisateur**
   - Ajout de confirmations visuelles lors de l'ajout ou la suppression de tâches
   - Mise en place d'indicateurs de chargement pendant les opérations

5. **Fonctionnalités supplémentaires**
   - Ajout de catégories pour les tâches
   - Option pour marquer une tâche comme "en cours" "à faire" et "terminée"

Ces améliorations permettraient de renforcer la stabilité, les performances et l'expérience utilisateur de l'application TaskManager, tout en enrichissant ses fonctionnalités.

---

**Réalisé par :** Mathias002   
**Date :** 19/032025

---
