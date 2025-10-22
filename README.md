## Project Setup Guide

### 1. Clone the Project

```bash
git clone <GitHub repository URL>
```

### 2. Install Dependencies

Install the `vendor` folder which is excluded by `.gitignore`.

```bash
composer install
```

### 3. Configure the Environment

Create the `.env` file and copy its content from the example file (`.env.example`).

```bash
cp .env.example .env
```

### 4. Generate Application Key

This step is essential for securing Laravel sessions.

```bash
php artisan key:generate
```
