# 🛠️ Esanj Public Pages for Laravel

`esanj/public-pages` is a Laravel package providing clean and customizable public-facing pages such as error views (404,
500, 403, etc.), along with localized messages and frontend assets (CSS/JS/images).

Built for maintainability and full flexibility, this package integrates quickly into any Laravel 10+ or 12 project with
a few commands.

---

## ✨ Features

- ✅ Pre-designed error templates (404, 500, 403, etc.)
- 📁 Includes public assets (CSS, icons…)
- 🌐 Supports multi-language via Laravel's lang system
- 🎨 Full ability to customize views, assets, config & messages
- ⚡ Works out-of-the-box with Blade or Livewire
- 🧼 Clean UI with minimal setup time

---

## 📦 Installation

### 1️⃣ Install via Composer:

```bash
composer require esanj/public-pages
```

### 2️⃣ Then publish the views and assets with:

```bash
php artisan publicpages:install
```

This command will publish:

```
Blade views → resources/views/vendor/publicpages/

Assets → public/assets/vendor/publicpages/
```

### **You’re ready to go!**

---

### 📂 File Structure (after install)

```
resources/
├── views/
│   ├── vendor/publicpages/home.blade.php
│   └── errors/
│       ├── 404.blade.php
│       ├── 500.blade.php
│       └── ...
public/
├── assets/
    ├── vendor/
        ├── public-pages/
            ├── style.css
            └── background.png
```

---

### 🧩 Commands Overview

**⬇️ Installs views and assets (required)**

```bash
php artisan publicpages:install
```

**📄 Publishes ONLY views + assets**

```bash
php artisan publicpages:publish-views
```

**🌐 Publishes language/translation files**

```bash
php artisan publicpages:publish-lang
```

**⚙️ Publishes config file**

```bash
php artisan publicpages:publish-config
```

You can rerun them anytime using --force.

---

## 🌐 Localization

This package supports multiple languages.

To publish translation files:

```bash
php artisan publicpages:publish-lang
```

This will create:

`📄 /lang/*/publicpages.php`

Sample structure:

```php
return [
   'errors' => [
         '404' => [
            'title' => 'Page not found',
            'message' => 'The page you’re looking for does not exist.',
         ],
         '500' => [
            'title' => 'Internal Server Error',
            'message' => 'Something went wrong. Please try again later.',
         ],
         // Add more codes...
   ]
];
```

You can create files for other locales (e.g. fa, es, etc.) as needed.

---

## ➕ Add New Error Page

To support a new status code like 505 (HTTP Version Not Supported):

### 1️⃣ Add entry in your lang file:
```php
'505' => [
   'title' => 'HTTP Version Not Supported',
   'message' => 'The server does not support the HTTP protocol version used in the request.',
],
```

### 2️⃣ Then create a new blade file:

`resources/views/errors/505.blade.php`

This file can extend the base layout and use the dynamic error message like so:

```blade
@extends('errors::layout')

@php
    $code = 505;
@endphp
```

---

## 🛠 Config File (optional)

If the package provides a config file:

```bash
php artisan publicpages:publish-config
```

It will land in:

`config/publicpages.php`

You can override default behavior there.

---

## 📦 Publishing Summary

You can always run a specific tag manually:

Tag Includes

`public-pages-views 🎨 Views only`

`public-pages-assets 🧩 Public assets only`

`public-pages-lang 🌐 Language files`

`public-pages-config ⚙️ Configuration file`

Example:
```bash
php artisan vendor:publish --tag=public-pages-views
```

---

## 📄 License

MIT © 2025 — Esanj Team
