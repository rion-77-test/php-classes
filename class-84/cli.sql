use round_70a;

DROP TABLE IF EXISTS manufactures;
create table manufactures (
    id INT auto_increment PRIMARY KEY,
    name VARCHAR (100), 
    address VARCHAR(255)
);

DROP TABLE IF EXISTS products;
CREATE TABLE products (
    id INT auto_increment PRIMARY KEY,
    name VARCHAR(100),
    manufacture_id INT, 
    price FLOAT
);

INSERT INTO manufactures (name,address) VALUES ("HP", "USA");
INSERT INTO manufactures (name,address) VALUES ("DELL", "UK");

INSERT INTO products (name,manufacture_id,price) VALUES ("Mouse", 1, 800);
INSERT INTO products (name,manufacture_id,price) VALUES ("Monitor", 1, 11000);
INSERT INTO products (name,manufacture_id,price) VALUES ("Monitor", 2, 9900);
INSERT INTO products (name,manufacture_id,price) VALUES ("Speaker", 2, 5500);

DROP PROCEDURE IF EXISTS createManufacturer;
DELIMITER //
CREATE PROCEDURE createManufacturer(pname VARCHAR(100), paddress VARCHAR(255))
BEGIN
INSERT INTO manufactures (name,address) VALUES (pname, paddress);
END //
DELIMITER ;

DROP VIEW IF EXISTS vw_product_list;
CREATE VIEW vw_product_list as 
SELECT p.* , m.name mfg FROM  products AS p, manufactures AS m WHERE p.manufacture_id = m.id AND p.price > 5000;

DROP TRIGGER IF EXISTS delete_mfg;
CREATE TRIGGER delete_mfg
AFTER DELETE ON manufactures
FOR EACH ROW
DELETE FROM products WHERE id = old.id;