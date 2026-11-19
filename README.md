# QuadraSec — PKI & Trust Services

Prototype académique de plateforme de services de confiance numériques. Le projet illustre les principes d'une PKI et les mécanismes de protection appliqués aux documents et aux échanges.

> Projet de démonstration : aucune clé privée ou certificat généré n'est inclus dans ce dépôt.

## Fonctionnalités

- Génération locale de certificats clients X.509 avec une autorité de certification de démonstration.
- Services de certification et d'authentification.
- Chiffrement et hachage de données.
- Fonctions de signature et de protection de documents.
- Horodatage électronique et chiffrement d'e-mails (prototype).

## Technologies

Node.js · Express · Node Forge · HTML · CSS · JavaScript · Bootstrap · PHP/MySQL

## Démarrage local

```powershell
npm install
node generateCA.js
node server.js
```

Ouvrez ensuite `http://localhost:3000`.

`node generateCA.js` crée une autorité de certification **locale de test** dans `internal-ca/`. Ce dossier reste exclu de Git par sécurité.

## Sécurité

Les clés privées, certificats générés, dépendances installées et fichiers téléversés sont exclus du contrôle de version. N'utilisez jamais de clés ou certificats de production avec ce prototype.

## Auteur

Asma Bensassi Nour — Étudiante ingénieure en Cyberdéfense, ENSA Marrakech.
