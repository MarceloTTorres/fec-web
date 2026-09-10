# FEC Web — Uniara's Majors Fair

<p align="center">
  <strong>Academic Project Repository and Publishing Platform</strong>
</p>

<p align="center">
  A web platform developed for <strong>Uniara's Majors Fair (FEC)</strong>, designed to organize, store and publish academic projects developed by university students.
</p>

---

## About the Project

**FEC Web** is a web-based platform developed for **Uniara's Majors Fair (Feira de Cursos da Uniara)**.

The application was designed to provide a centralized environment for registering, organizing and publishing information about academic projects developed by students.

The platform supports the academic community by making project information easier to organize, manage and share, including projects presented during the FEC and other projects developed throughout academic activities.

This project represents a **real-world institutional software solution**, combining backend development, frontend development, database persistence, authentication and web application architecture.

---

## 🎓 Uniara's Majors Fair

The application was developed specifically to support the **Uniara's Majors Fair**, an academic event where students present projects and academic work.

Instead of treating the application as a simple CRUD exercise, the system was designed around an actual institutional use case:

* Academic project registration
* Project information management
* Student/project organization
* Academic content publishing
* User management
* Centralized project repository
* Web-based access for the academic community

This real-world context makes the project particularly relevant as a software engineering portfolio case study.

---

## Key Features

### 📚 Academic Project Repository

Centralizes information about academic projects developed by students.

The platform can be used to organize projects presented at the Majors Fair as well as projects developed during regular academic activities.

### 👤 User Management

The application includes user-related functionality for managing access to the platform.

The Laravel application contains authentication-related views and user management functionality.

### 📝 Project Information Management

Provides a structured environment for storing information about academic projects.

The system was designed around the concept of maintaining an organized repository of student projects.

### 🌐 Web-Based Platform

The system is accessible through a browser and follows a traditional web application architecture based on Laravel and Vue.js.

### 🔌 API Support

The project includes Laravel API routes, allowing backend functionality to be exposed through API endpoints.

### 🖥️ Responsive Web Interface

The frontend combines Vue.js with Bootstrap and Laravel Mix to provide a modern web interface for the application.

---

## Architecture

The application follows a traditional Laravel MVC architecture combined with a JavaScript-based frontend.

```text
                    ┌─────────────────────┐
                    │       Browser       │
                    │                     │
                    │  HTML / Vue.js      │
                    │  Bootstrap          │
                    └──────────┬──────────┘
                               │
                               ▼
                    ┌─────────────────────┐
                    │      Laravel        │
                    │                     │
                    │  Routes             │
                    │  Controllers        │
                    │  Validation         │
                    │  Business Logic     │
                    └──────────┬──────────┘
                               │
                               ▼
                    ┌─────────────────────┐
                    │    Eloquent ORM     │
                    │                     │
                    │ Models / Relations  │
                    └──────────┬──────────┘
                               │
                               ▼
                    ┌─────────────────────┐
                    │      Database       │
                    │                     │
                    │ Academic Data       │
                    │ Users / Projects    │
                    └─────────────────────┘
```

---

## Technology Stack

| Layer                 | Technology             |
| --------------------- | ---------------------- |
| Backend               | PHP                    |
| Framework             | Laravel 5.8            |
| Frontend              | Vue.js 2               |
| UI                    | Bootstrap 4            |
| Build Tool            | Laravel Mix            |
| JavaScript            | JavaScript / Axios     |
| ORM                   | Laravel Eloquent       |
| Database              | Laravel database layer |
| Authentication        | Laravel Authentication |
| Testing               | PHPUnit                |
| Dependency Management | Composer / NPM         |
| Web Server            | PHP / Laravel          |

The repository uses Laravel 5.8 with PHP `^7.1.3`, Laravel Mix 4 and Vue.js 2.5.

---

## Project Structure

The project follows the conventional Laravel application structure:

```text
fec-web/
│
├── app/
│   ├── Console/
│   ├── Exceptions/
│   ├── Http/
│   ├── Providers/
│   ├── Rules/
│   ├── Course.php
│   └── User.php
│
├── bootstrap/
│
├── config/
│
├── database/
│
├── public/
│
├── resources/
│   └── views/
│       ├── auth/
│       ├── layouts/
│       ├── home.blade.php
│       ├── consultarUsuario.blade.php
│       ├── editarUsuario.blade.php
│       └── listarUsuario.blade.php
│
├── routes/
│   ├── api.php
│   ├── channels.php
│   ├── console.php
│   └── web.php
│
├── storage/
│
├── tests/
│
├── artisan
├── composer.json
├── package.json
└── webpack.mix.js
```

The repository follows Laravel's conventional separation of application logic, HTTP handling, providers, models, views, routes, database and tests.

---

## Frontend Architecture

The frontend combines Laravel's server-side capabilities with Vue.js components.

The JavaScript stack includes:

* Vue.js
* Axios
* Bootstrap
* Laravel Mix
* Sass
* Font Awesome

This combination provides a foundation for building interactive web interfaces while maintaining Laravel as the main application framework.

---

## Backend Architecture

The backend is implemented using Laravel and follows the framework's MVC conventions.

Key architectural elements include:

* Routes
* Controllers
* Models
* HTTP layer
* Validation rules
* Authentication
* Database access
* API routes
* Blade views

The application contains both `web.php` and `api.php`, supporting traditional web requests and API-oriented functionality.

---

## Development Workflow

The project uses Composer for PHP dependencies and NPM/Laravel Mix for frontend assets.

### Install PHP dependencies

```bash
composer install
```

### Install JavaScript dependencies

```bash
npm install
```

### Configure environment

Create the environment file:

```bash
cp .env.example .env
```

On Windows:

```powershell
copy .env.example .env
```

Generate the Laravel application key:

```bash
php artisan key:generate
```

Configure the database and other environment-specific settings in `.env`.

---

## Running the Application

Start the Laravel development server:

```bash
php artisan serve
```

In another terminal, compile the frontend assets:

```bash
npm run watch
```

For a production build:

```bash
npm run production
```

The project's `package.json` provides development, watch, hot-reload and production build scripts through Laravel Mix.

---

## Testing

The project includes PHPUnit as its testing framework.

Run the test suite with:

```bash
./vendor/bin/phpunit
```

or:

```bash
php artisan test
```

Testing is an important part of maintaining application reliability as the platform evolves.

---

## Real-World Software Engineering

One of the main characteristics of this project is that it was developed around a **real institutional requirement**, rather than being only a tutorial or demonstration application.

The platform addresses a concrete problem:

> How can an academic institution organize, maintain and publish information about student projects presented during an academic event?

The solution combines:

```text
Academic Event
      │
      ▼
Student Projects
      │
      ▼
Structured Data
      │
      ▼
Web Application
      │
      ▼
Academic Community
```

This makes the project representative of several common software engineering scenarios:

* Requirements analysis
* Domain modeling
* Database design
* CRUD operations
* Authentication
* Web application architecture
* Frontend/backend integration
* API development
* Data validation
* Automated testing
* Deployment considerations

---

## Engineering Concepts Demonstrated

This project demonstrates practical experience with:

### Backend Development

* PHP
* Laravel
* MVC architecture
* Eloquent ORM
* HTTP request handling
* Routing
* Authentication
* Validation
* API development

### Frontend Development

* Vue.js
* JavaScript
* Axios
* Bootstrap
* Sass
* Responsive interfaces

### Software Architecture

* MVC
* Separation of concerns
* Service/application layers
* Database abstraction
* API endpoints
* Authentication boundaries

### Development Practices

* Dependency management
* Automated testing
* Environment configuration
* Frontend asset compilation
* Version control

---

## Legacy Technology and Modernization

This repository represents an earlier generation of the Laravel ecosystem.

The current codebase uses:

* Laravel 5.8
* Vue.js 2
* PHP 7.x-era requirements
* Laravel Mix 4
* Bootstrap 4

These technologies are valuable for understanding the evolution of modern web application architecture, but they should not be interpreted as the recommended stack for a new production application today.

A modern version of this project could be migrated toward:

```text
Laravel 13+
      │
      ├── PHP 8.3+
      │
      ├── Vue 3
      │
      ├── TypeScript
      │
      ├── Inertia.js
      │
      ├── Tailwind CSS
      │
      ├── Vite
      │
      ├── REST API
      │
      └── Automated CI/CD
```

This makes the project particularly interesting as a **legacy modernization case study**.

---

## Modernization Roadmap

Potential improvements for a modernized version include:

* [ ] Upgrade PHP
* [ ] Upgrade Laravel
* [ ] Migrate Vue 2 → Vue 3
* [ ] Introduce TypeScript
* [ ] Replace Laravel Mix with Vite
* [ ] Modernize Bootstrap or migrate to Tailwind CSS
* [ ] Improve API architecture
* [ ] Introduce API Resources / DTOs
* [ ] Improve automated test coverage
* [ ] Add feature and integration tests
* [ ] Add GitHub Actions CI/CD
* [ ] Add Docker development environment
* [ ] Improve authentication and authorization
* [ ] Add role-based access control
* [ ] Add project search and filtering
* [ ] Add project categories
* [ ] Add project images/files
* [ ] Add project presentation pages
* [ ] Add analytics
* [ ] Add production monitoring

---

## Why This Project Matters in a Software Engineering Portfolio

For an international software engineering portfolio, this project demonstrates something important:

**the ability to build software around a real organizational requirement.**

Rather than demonstrating only knowledge of Laravel syntax, the project shows experience with:

```text
Business / Academic Requirement
              ↓
        Domain Modeling
              ↓
       Application Design
              ↓
       Backend Development
              ↓
       Frontend Development
              ↓
       Database Integration
              ↓
          Testing
              ↓
       Real-world Usage
```

This is especially relevant for positions involving:

* Full-Stack Development
* Backend Development
* PHP / Laravel
* Web Application Development
* Software Engineering
* Technical Leadership
* Education Technology
* Institutional Systems

---

## Project Context

**Project:** FEC Web
**Organization:** Uniara
**Event:** Uniara's Majors Fair — Feira de Cursos
**Type:** Academic / Institutional Web Platform
**Primary Purpose:** Academic project repository and publishing platform

The repository currently contains a Laravel application with frontend assets based on Vue.js and Laravel Mix.

---

## Portfolio Perspective

This project complements the mobile application developed for the same academic context.

### FEC Web

```text
Laravel
PHP
Vue.js
Web
Database
Authentication
API
MVC
```

### FEC App

```text
Ionic
Angular
TypeScript
Mobile
Firebase
Geolocation
Maps
Authentication
```

Together, they demonstrate experience building **multiple clients and platforms around the same real-world academic domain**.

That is a stronger portfolio story than presenting the repositories as unrelated projects.

---

## Learning Outcomes

Working on this project provided practical experience with:

* Laravel application architecture
* PHP backend development
* MVC
* Database-driven applications
* Vue.js frontend development
* REST/API concepts
* Authentication
* User management
* Academic domain modeling
* Web application development
* Frontend build pipelines
* Automated testing
* Institutional software requirements

---

## License

This project is distributed under the MIT License.

See the `LICENSE` file for details.

---

## Author

**Marcelo Torres**

Software Engineer | Full-Stack Developer | Technical Lead

Areas of interest:

* Backend Engineering
* Full-Stack Development
* Cloud Computing
* API Development
* Mobile Applications
* Software Architecture
* Technical Leadership
* Education Technology

---

## Final Note

FEC Web was created as a practical software solution for **Uniara's Majors Fair**, providing an organized digital platform for academic projects and their dissemination to the university community.

The project represents the intersection of **software engineering, education and real-world institutional requirements**, making it a valuable part of a professional software engineering portfolio.
