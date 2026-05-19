TYPE=VIEW
query=select `p`.`id` AS `id`,`p`.`product_name` AS `product_name`,`b`.`name` AS `brand`,`c`.`name` AS `category`,`p`.`price` AS `price` from `invertory_hw_19_may`.`products` `p` join `invertory_hw_19_may`.`brands` `b` join `invertory_hw_19_may`.`categories` `c` where `p`.`brand_id` = `b`.`id` and `p`.`category_id` = `c`.`id`
md5=22e6e765e4574ae9e557bbd40ded9195
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=0001779120296428227
create-version=2
source=SELECT p.id, p.product_name, b.name AS brand, c.name AS category, p.price FROM products AS p, brands AS b, categories AS c WHERE p.brand_id = b.id AND p.category_id = c.id
client_cs_name=cp850
connection_cl_name=cp850_general_ci
view_body_utf8=select `p`.`id` AS `id`,`p`.`product_name` AS `product_name`,`b`.`name` AS `brand`,`c`.`name` AS `category`,`p`.`price` AS `price` from `invertory_hw_19_may`.`products` `p` join `invertory_hw_19_may`.`brands` `b` join `invertory_hw_19_may`.`categories` `c` where `p`.`brand_id` = `b`.`id` and `p`.`category_id` = `c`.`id`
mariadb-version=100432
