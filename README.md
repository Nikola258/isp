# Portfolio — Nikola Nikolić

Personal portfolio website built with Laravel. Showcases my projects, skills, internship experience and why I am looking for an international internship in Italy.

## Stack

- **Laravel 11** — backend framework
- **Tailwind CSS v4** — styling
- **Alpine.js** — UI interactions (dark mode, dropdowns, carousel)
- **Blade** — templating
- **Vite** — asset bundling

## Features

- Multilingual: English, Dutch, Italian
- Dark mode (persists via localStorage)
- Language switcher with flags
- Pages: Home, About, Skills, Projects, How I Work, Internship, Q&A, Contact
- Screenshot carousel for BrickleyNova project
- Mobile-responsive navigation

## Local setup

```bash
cp .env.example .env
composer install
npm install
php artisan key:generate
php artisan migrate
npm run dev
php artisan serve
```

Then open [http://localhost:8000](http://localhost:8000).

## Project

**BrickleyNova** — a real estate CRM built with Laravel and Filament. Manages projects, broker agencies, leads, email lead capture and a shared calendar.

GitHub: [github.com/Nikola258](https://github.com/Nikola258)  
LinkedIn: [nikola-nikolic-289222303](https://www.linkedin.com/in/nikola-nikolic-289222303/)
