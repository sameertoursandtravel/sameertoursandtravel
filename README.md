# Sameer Tours & Travels — Website

Laravel + Livewire/Flux + Tailwind v4 build for **sameertoursandtravel.com**, a Kerala-based overseas recruitment consultancy.

This package contains the **application-specific files only** (routes, Blade views, Livewire components, models, migrations, seeders, design tokens). It's designed to sit on top of Laravel's official Livewire starter kit — the same foundation used for your other Laravel projects.

---

## 1. Create the base project

```bash
composer create-project laravel/laravel sameer-tours
cd sameer-tours
php artisan install:api        # skip if not needed
composer require livewire/livewire livewire/flux
php artisan livewire:publish --config   # optional
```

> If you prefer starting from the official starter kit instead of a blank Laravel app:
> `laravel new sameer-tours --livewire` (choose Livewire when prompted), then `cd sameer-tours`.

## 2. Copy in this package's files

Copy everything from this package **on top of** the fresh project, preserving paths:

```
app/Livewire/EnquiryForm.php
app/Mail/EnquiryReceived.php
app/Models/Vacancy.php
app/Models/Enquiry.php
database/migrations/*.php
database/seeders/VacancySeeder.php
database/seeders/DatabaseSeeder.php   (merge with existing if present)
resources/views/**                    (components, pages, livewire, emails, errors)
resources/css/app.css
resources/js/app.js
routes/web.php                        (merge with existing if present)
public/favicon.svg
public/robots.txt
vite.config.js
.env.example                          (merge values into your .env)
```

Then register the mail recipient config. Open `config/mail.php` and add, near the bottom of the returned array:

```php
'enquiry_recipient' => env('ENQUIRY_RECIPIENT_EMAIL', 'info@sameertoursandtravel.com'),
```

## 3. Install front-end dependencies

```bash
npm install
npm run build   # or `npm run dev` while developing
```

## 4. Database

```bash
cp .env.example .env    # if starting fresh; otherwise merge values
php artisan key:generate
php artisan migrate --seed
```

This seeds the **Current Vacancies** shown on the homepage and the `/current-vacancies` page (Israel: Caregiver, General Workers, CNC Operator, Machine Operator, Welder, Electrician, Wood Carpenter, Aluminium Fabricator — Armenia: Warehouse Jobs, Helper Jobs). Update or add roles any time with:

```bash
php artisan tinker
>>> App\Models\Vacancy::create([...]);
```
or by editing `database/seeders/VacancySeeder.php` and re-running `php artisan db:seed --class=VacancySeeder`.

## 5. Run locally

```bash
php artisan serve
npm run dev
```

Visit `http://localhost:8000`.

---

## 6. Push to a brand-new GitHub repository

```bash
git init
git add .
git commit -m "Initial commit: Sameer Tours & Travels website"
gh repo create sameer-tours-travel --private --source=. --remote=origin
git push -u origin main
```

(No GitHub CLI? Create an empty repo at github.com/new named `sameer-tours-travel`, then:
`git remote add origin https://github.com/<your-username>/sameer-tours-travel.git && git push -u origin main`)

## 7. Deploy on Laravel Cloud

1. Go to your Laravel Cloud dashboard → **New Project** → **Import from GitHub** → select `sameer-tours-travel`.
2. Framework preset: **Laravel**. Build command: `npm install && npm run build`. Laravel Cloud runs `composer install` automatically.
3. Attach a **MySQL** (or Postgres) database — Laravel Cloud injects `DB_*` env vars automatically.
4. Attach **S3-compatible object storage** if you want resumes/uploads to persist across deploys; set `FILESYSTEM_DISK=s3` and the AWS/S3 env vars it provides.
5. In **Environment Variables**, set at minimum:
   - `APP_NAME="Sameer Tours & Travels"`
   - `APP_URL=https://sameertoursandtravel.com`
   - `MAIL_MAILER`, `MAIL_HOST`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_FROM_ADDRESS` (use a transactional provider — Postmark, SES, etc.)
   - `ENQUIRY_RECIPIENT_EMAIL=info@sameertoursandtravel.com`
6. Add a **post-deploy step**: `php artisan migrate --force && php artisan db:seed --class=VacancySeeder --force`
7. Point your domain's DNS (`sameertoursandtravel.com`) at Laravel Cloud per the dashboard instructions, then issue the free SSL certificate from the Domains tab.

Every subsequent `git push` to `main` triggers an automatic Laravel Cloud deploy.

---

## Design system

| Token | Value |
|---|---|
| Deep Navy | `#0B1E3D` (with `#071228` / `#122a52` shades) |
| Elegant Gold | `#C9A227` (`#E4C158` hover, `#F7EDCD` tint) |
| Light Grey | `#F4F5F7` |
| Ink (text) | `#1E2733` / `#64707D` muted |
| Display type | Montserrat (700/800) |
| Body type | Inter |
| Reference/mono | JetBrains Mono — used for licence numbers, vacancy reference codes and the "boarding pass" motif |

The signature visual device is a **boarding-pass card** (`.boarding-card` / `.boarding-stub` in `resources/css/app.css`) used for vacancy listings and the six-step process section — a nod to the company's own material world (tickets, visas, stamps) rather than a generic card grid.

## Content still needed from you

- **Real photography**: team/office photos (About), candidate departure & airport send-off photos, visa-approval close-ups (Success Stories — currently placeholder tiles marked "PHOTO PENDING"), and a hero/OG image at `public/images/og-cover.jpg` (1200×630px).
- **Testimonial videos**, if available, to embed alongside the written quotes.
- Confirm the **RA Licence number** is displayed exactly as required by your licensing authority (currently shown in the footer, About page, and Contact page as `4008/RAJ/PER/1000+/3/6216/2003`).
- Swap the placeholder social links (add real Instagram/Facebook/LinkedIn URLs to the footer once available).

## Pages included

Home · About Us · Services · Current Vacancies · Success Stories · Contact Us · Privacy Policy · Terms & Conditions · Disclaimer · Custom 404
