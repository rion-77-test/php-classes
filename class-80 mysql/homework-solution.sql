------------------------------------------------
-------------------- Question ------------------

/* SQL Practice Task
Create a database structure for an inventory system using the following requirements:
1. Create Tables
Create these 3 tables:
brands
Columns:
•	id
•	name
categories
Columns:
•	id
•	name
products
Columns:
•	id
•	product_name
•	brand_id
•	category_id
•	price
•	is_active
2. Relationships
•	brand_id in the products table should reference the brands table.
•	category_id in the products table should reference the categories table.
3. Insert Data
Insert at least:
•	3 brands
•	3 categories
•	5 to 10 products
4. Create a View
Create a view that shows:
•	Product Id
•	Product Name
•	Brand Name
•	Category Name
•	Price
5. Query the View
	Write a query to display products from the view where:
•	price > 1000
	Write a query from the created view to show products for:
•	a specific brand
•	and a specific category
Example requirement:
•	Show all products where:
o	Brand = 'Apple'
o	Category = 'Mobile'
	Write a query from the created view to show products:
•	for a specific category
•	within a specific price range
Example requirement:
•	Category = 'Mobile'
•	Price between 500 and 1500 */

------------------------------------------------
-------------------- Solution ------------------

-- Creating Database
DROP DATABASE IF EXISTS home_task_20_may;
CREATE DATABASE home_task_20_may;
USE home_task_20_may;

-- Creating Brand table and adding data
DROP TABLE IF EXISTS brands;
CREATE TABLE brands(
    id int auto_increment primary key,
    name varchar(100)
);

INSERT INTO brands (name) VALUES ("Apple"), ("Samsung"), ("Xiaomi");

-- Creating categories table and adding data
DROP TABLE IF EXISTS categories;
CREATE TABLE categories(
    id int auto_increment primary key,
    name varchar(100)
);
INSERT INTO categories (name) VALUES ("Mobile"), ("Smart Watch"), ("Laptop");

-- Creating products table and adding data
DROP TABLE IF EXISTS products;
CREATE TABLE products(
    id int auto_increment primary key,
    name varchar(100),
    brand_id int,
    category_id int,
    price float,
    is_active tinyint
);

INSERT INTO products(name,brand_id,category_id,price,is_active) 
VALUES("iPhone 14",1,1,1000,1),
("Samsung Galaxy S22",2,1,800,1),
("Techno X2",3,2,600,1),
("Smart Watch 2",1,2,300,1),
("Laptop 2",1,3,2000,1),
("Smart Watch 3",2,2,400,1);



-- Creating view 
DROP VIEW IF EXISTS vw_active_products;
CREATE VIEW vw_active_products AS
SELECT p.id, p.name, b.name as brand, c.name as category, p.price 
FROM products p, brands b, categories c WHERE p.brand_id = b.id AND p.category_id = c.id AND p.is_active=1;

-- Creating queries
SELECT * FROM vw_active_products WHERE price > 1000;

SELECT * FROM vw_active_products WHERE category="Mobile" AND brand="Apple";

SELECT * FROM vw_active_products WHERE category="Mobile" AND price > 500 AND price < 1500;


--Creating trigger
DROP TRIGGER IF EXISTS remove_products;
CREATE TRIGGER remove_products
AFTER DELETE ON brands
FOR EACH ROW
DELETE FROM products WHERE brand_id = old.id;

DELETE FROM brands WHERE id=2;

DROP TRIGGER IF EXISTS product_active_status;
CREATE TRIGGER product_active_status 
AFTER DELETE ON categories
FOR EACH ROW UPDATE products SET is_active = 0 WHERE category_id = old.id; 

DELETE FROM categories WHERE id = 2;