CREATE DATABASE IF NOT EXISTS food_catalog;
USE food_catalog;

CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO products (name, price, description) VALUES
('Jabłka', 5.99, 'Świeże zielone jabłka'),
('Chleb', 3.50, 'Pszeniczny, 400 g'),
('Mleko', 4.20, '3.2%, 1 litr'),
('Ser', 9.90, 'Twardy, 200 g'),
('Jogurt', 2.80, 'Truskawkowy, 250 ml');
