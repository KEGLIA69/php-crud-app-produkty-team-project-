# Aplikacja CRUD - Zarządzanie produktami (PL/EN)

Jest to aplikacja end-to-end, która pozwala zarządzać listą produktów.

## Jak uruchomić projekt

### Uruchomienie lokalne (z XAMPP)

1.  Uruchom XAMPP (moduły Apache i MySQL).
2.  Skopiuj folder projektu `crud-produkty` do katalogu `htdocs`.
3.  Otwórz `http://localhost/phpmyadmin/` i stwórz nową bazę danych o nazwie `produkty_db`.
4.  Wykonaj zapytanie z pliku `migracja.sql`, aby stworzyć tabelę `products`.
5.  Otwórz w przeglądarce adres `http://localhost/crud-produkty/`.

## Opis endpointów (API)

*   **`GET /api/entities`**: Pobiera listę wszystkich produktów.
*   **`GET /api/entities/{id}`**: Pobiera jeden produkt o podanym ID.
*   **`POST /api/entities`**: Dodaje nowy produkt. Wymagane ciało żądania w JSON: `{"name": "...", "description": "...", "price": ...}`.
*   **`PUT /api/entities/{id}`**: Aktualizuje dane produktu o podanym ID.
*   **`DELETE /api/entities/{id}`**: Usuwa produkt o podanym ID.

## 📦 Instalacja i uruchomienie

1. Sklonuj repozytorium:
```bash

---

# CRUD Application - Product Management (PL/EN)

This is an end-to-end application that allows you to manage a product list.

## How to run the project

### Local launch (with XAMPP)

1. Launch XAMPP (Apache and MySQL modules).
2. Copy the `crud-products` project folder to the `htdocs` directory.
3. Open `http://localhost/phpmyadmin/` and create a new database named `products_db`.
4. Execute a query from the `migracja.sql` file to create the `products` table.
5. Open `http://localhost/crud-products/` in a browser.

## Endpoint description (API)

* **`GET /api/entities`**: Retrieves a list of all products.

* **`GET /api/entities/{id}`**: Retrieves a single product with the given ID.
* **`POST /api/entities`**: Adds a new product. Required JSON request body: `{"name": "...", "description": "...", "price": ...}`.
* **`PUT /api/entities/{id}`**: Updates the product data for the given ID.
* **`DELETE /api/entities/{id}`**: Deletes the product for the given ID.

## 📦 Installation and launch

1. Clone the repository:
```bash