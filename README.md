# QuadraSec — PKI & Digital Trust Services

**Academic Public Key Infrastructure and Cryptographic Trust Services Platform**

## Overview

QuadraSec is an academic cybersecurity project designed to explore Public Key Infrastructure (PKI), digital certificates, cryptographic operations, and electronic trust services.

The platform demonstrates how cryptographic mechanisms can support authentication, data integrity, confidentiality, and document protection.

It combines a web-based interface with backend services for certificate generation, digital signatures, encryption, hashing, and timestamping.

> **Disclaimer:** QuadraSec is an educational prototype, not a production-ready certification authority or a qualified trust service provider.

## Key Features

### 1. Public Key Infrastructure (PKI)

- Generation of a local demonstration Certificate Authority (CA).
- Creation of RSA 2048-bit cryptographic key pairs.
- Generation of X.509 digital certificates.
- Certificate signing using a locally generated CA private key.
- Management of certificate subject and issuer information.
- Configuration of certificate validity periods.

### 2. Digital Signatures

- Generation of cryptographic signatures using RSA and SHA-256.
- Document hashing prior to signature generation.
- Demonstration of document integrity and authenticity mechanisms.
- Support for signature generation through backend endpoints.

### 3. Encryption and Data Protection

- Web interfaces dedicated to encryption services.
- Demonstration of cryptographic operations for protecting information.
- Exploration of confidentiality and secure data exchange principles.

### 4. Cryptographic Hashing

- Hashing functionality for data and documents.
- SHA-256-based document digest generation.
- Demonstration of integrity verification concepts.

### 5. Electronic Timestamping

- Generation of timestamps associated with certificate-related operations.
- Demonstration of timestamp recording.
- Exploration of electronic timestamping concepts.

**Note:** The timestamp functionality is a demonstration and does not implement a qualified trusted timestamp authority.

### 6. Email Security

- Prototype components for email-related cryptographic services.
- Certificate generation workflows associated with email protection.
- Backend integration with Nodemailer.

### 7. Web Interface

- Multi-page web interface for accessing cryptographic services.
- Certificate generation and service presentation pages.
- Authentication-related PHP components.
- Responsive layouts using HTML, CSS, JavaScript, and Bootstrap.

## Technology Stack

| Category | Technologies |
|---|---|
| Backend | Node.js, Express.js, PHP |
| Frontend | HTML5, CSS3, JavaScript, Bootstrap |
| Cryptography | RSA, SHA-256, X.509 |
| PKI Library | Node Forge |
| Database Integration | PHP, MySQL |
| Email Services | Nodemailer |
| File Uploads | Multer |
| Date Handling | Moment.js |

## Project Architecture

The project combines several components:

**Frontend Layer**
- HTML, CSS, and JavaScript interfaces
- Forms for accessing certificate and cryptographic services

**Application Layer**
- Express.js servers
- PHP backend components
- Request processing and file handling

**Cryptographic Layer**
- Local CA generation
- RSA key pair generation
- X.509 certificate issuance
- Digital signature operations
- SHA-256 hashing

**Data and Storage Layer**
- Local demonstration CA files
- Generated certificate and key files
- Uploaded documents
- Optional MySQL integration for PHP components

## Project Structure

```text
quadrasec-pki-trust-services/
├── README.md
├── package.json
├── package-lock.json
├── .gitignore
├── connection.example.php
│
├── generateCA.js
├── server.js
├── server_final.js
├── server-email.js
├── server-email1.js
├── server1.js
├── server3.js
├── serverUNO.js
│
├── signature.js
├── sign-document.php
├── login.php
├── session.php
├── upload.php
│
├── index.html
├── certif.html
├── encryption.html
├── hash.html
├── stamp.html
├── service.html
│
├── css/
├── js/
├── images/
└── fonts/
```

## Installation and Local Setup

### Prerequisites

- Node.js and npm
- Git
- A modern web browser
- PHP and MySQL for PHP-dependent functionality

### Step 1 — Clone the Repository

```bash
git clone https://github.com/YOUR_USERNAME/quadrasec-pki-trust-services.git
cd quadrasec-pki-trust-services
```

Replace `YOUR_USERNAME` with your GitHub username.

### Step 2 — Install Dependencies

```bash
npm install
```

### Step 3 — Generate the Local Certificate Authority

```bash
node generateCA.js
```

This command generates a demonstration Certificate Authority and stores its files in:

```text
internal-ca/
├── ca-cert.pem
└── ca-key.pem
```

The `internal-ca/` directory is excluded from Git version control.

**Important:** These certificates and keys must only be used in an isolated development environment.

### Step 4 — Start the Application

To start the basic certificate generation service:

```bash
node server.js
```

Open:

```text
http://localhost:3000
```

The repository also contains `server_final.js`, which implements additional certificate and signature endpoints. These components require security review before use beyond a controlled local environment.

### Step 5 — Optional PHP Configuration

For PHP/MySQL-dependent components:

1. Configure a local PHP and MySQL development environment.
2. Copy `connection.example.php` to `connection.php`.
3. Update the local database connection settings.
4. Keep credentials outside version control.

The PHP functionality requires separate configuration and validation.

## Security Considerations

This repository is intended exclusively for educational use and controlled security demonstrations.

- Never commit private keys, API credentials, or production certificates.
- Do not expose the demonstration CA to the public internet.
- Do not use generated certificates for production authentication.
- Protect cryptographic keys from unauthorized access.
- Restrict file uploads and downloads.
- Validate user input and file paths.
- Avoid exposing sensitive cryptographic material through HTTP endpoints.
- Apply authentication, authorization, and secure session management before deployment.

The project requires additional security hardening and testing before any production use.

## Future Improvements

- Certificate revocation mechanisms using CRLs or OCSP.
- Secure private key storage and lifecycle management.
- Improved certificate validation and chain verification.
- Role-based access control (RBAC).
- Secure document upload and download handling.
- Automated security testing.
- CI/CD integration using GitHub Actions.
- Docker-based development environment.
- Centralized logging and audit trails.
- Integration with hardware-backed key management.

## Learning Outcomes

This project provides practical exposure to:

- Public Key Infrastructure architecture.
- Certificate Authority operations.
- X.509 certificate generation.
- RSA cryptography and digital signatures.
- Hashing and document integrity.
- Cryptographic key management.
- Security considerations for digital trust services.

## Author

**Asma Bensassi Nour**

Cyberdefense Engineering Student — ENSA Marrakech

Academic project focused on PKI, cryptography, digital certificates, and electronic trust services.
