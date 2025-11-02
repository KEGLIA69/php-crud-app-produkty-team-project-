# 🧺 PHP CRUD – Katalog Produktów Spożywczych

Prosty projekt webowy napisany w **PHP** i **MySQL**, który umożliwia zarządzanie katalogiem produktów spożywczych.  
Aplikacja pozwala dodawać, przeglądać, edytować i usuwać produkty – czyli pełny cykl **CRUD** (Create, Read, Update, Delete).

---

## Funkcje

✅ Dodawanie nowych produktów  
✅ Przeglądanie listy wszystkich produktów  
✅ Edycja danych produktu (nazwa, cena, opis)  
✅ Usuwanie produktu z katalogu  
✅ Prosty, responsywny interfejs w HTML + CSS  
✅ Połączenie z bazą danych MySQL

---

## Struktura projektu
```/php-crud-app-produkty-team-project
public/
├── api/                    # Server(PHP)
│   ├── db.php
│   ├── index.php           # GET /products
│   ├── create.php          # POST /products
│   ├── update.php          # PUT /products/:id
│   └── delete.php          # DELETE /products/:id
│
├── public/                 # ALL, that user seen
│   ├── index.html
│   ├── create.html
│   ├── update.html
│   ├── style.css
│   └── js/
│       └── main.js
│
└── database.sql
```

---

## Wymagania

- **XAMPP / MAMP / Laragon** lub inny lokalny serwer PHP  
- PHP w wersji 7.4+  
- MySQL lub MariaDB  
- Przeglądarka internetowa (Chrome, Firefox itp.)

---

## 🧠 Instalacja i uruchomienie

1. Skopiuj repozytorium:
   ```bash
   git clone https://github.com/KEGLIA69/php-crud-app-produkty-team-project-.git

