CREATE DATABASE IF NOT EXISTS food_catalog;
USE food_catalog;

-- Drop existing tables if they exist
DROP TABLE IF EXISTS products;
DROP TABLE IF EXISTS categories;

-- Table structure for table `categories`
CREATE TABLE categories (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  description TEXT
) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

-- Table structure for table `products`
CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  description TEXT,
  category_id INT,
  CONSTRAINT fk_category
    FOREIGN KEY (category_id)
    REFERENCES categories(id)
    ON DELETE SET NULL
) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

-- Inserting sample data into `categories`
INSERT INTO products (name, price, description) VALUES
('Jabłka', 5.99, 'Świeże zielone jabłka'),
('Chleb', 3.50, 'Pszeniczny, 400 g'),
('Mleko', 4.20, '3.2%, 1 litr'),
('Ser', 9.90, 'Twardy, 200 g'),
('Jogurt', 2.80, 'Truskawkowy, 250 ml');

