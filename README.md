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
php-crud-app-produkty-team-project-/
├─ public/                      <-- strony publiczne i CSS
│   ├─ index.html               <-- strona główna z tabelą produktów
│   ├─ create.html              <-- strona dodawania nowego produktu
│   ├─ update.html              <-- strona edycji produktu
│   ├─ login.php                <-- strona logowania
│   ├─ logout.php               <-- wylogowanie
│   ├─ style.css                <-- style dla wszystkich stron
│   └─ api/                     <-- folder ze skryptami PHP dla CRUD i integracji pogodowej
│       ├─ index.php            <-- pobieranie listy produktów (GET)
│       ├─ create.php           <-- dodawanie produktu (POST)
│       ├─ update.php           <-- aktualizacja produktu (POST)
│       ├─ delete.php           <-- usuwanie produktu (GET lub POST)
│       └─ weather.php          <-- pobieranie prognozy pogody z Open-Meteo
├─ .git/                        <-- folder Git (jeśli używasz)
├─ README.md                    <-- opis projektu (opcjonalnie)                      
└─ db.php                       <-- połączenie z MySQL

```

---

## 🧠 Instalacja i uruchomienie

1. Skopiuj repozytorium:
   ```bash
   git clone https://github.com/KEGLIA69/php-crud-app-produkty-team-project-.git

