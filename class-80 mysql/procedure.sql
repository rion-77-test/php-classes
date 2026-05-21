delimiter //
CREATE PROCEDURE IF NOT EXISTS show_products()
begin
select * from vw_active_products;
select * from products;
end //
delimiter ; 


call show_products();

SHOW PROCEDURE STATUS WHERE DB="home_task_20_may";
DROP PROCEDURE show_products;

DROP PROCEDURE create_product;
delimiter //
CREATE PROCEDURE create_product(p_name varchar(100), p_brand_id int, p_category_id int, p_price float, p_is_active tinyint)
begin
INSERT INTO products(name, brand_id, category_id, price, is_active) VALUES (p_name, p_brand_id, p_category_id, p_price,p_is_active);
end //
delimiter ;

CALL create_product("ipad", 1, 1, 1200, 0);