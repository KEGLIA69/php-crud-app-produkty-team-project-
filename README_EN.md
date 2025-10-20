# CRUD Application - Product Management (EN)

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
https://github.com/KEGLIA69/php-crud-app-produkty-team-project-
