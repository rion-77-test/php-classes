-- Creating database
DROP DATABASE IF EXISTS hw_21_may;
CREATE DATABASE hw_21_may;
use hw_21_may;

-- 1. Creating "positions" table
DROP TABLE IF EXISTS positions;
CREATE TABLE positions(
    id INT PRIMARY KEY AUTO_INCREMENT,
    position_name VARCHAR(100)
);

-- 2. inserting sample records into the positions table.
INSERT INTO positions (position_name) VALUES
("Manager"),
("Developer"),
("Sales Associate");

SELECT * FROM positions;


-- 3. Creating "employees" table ind inserting data
DROP TABLE IF EXISTS employees;
CREATE TABLE employees(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    position_id INT,
    salary FLOAT,
    hire_date DATE
);

-- 4. inserting employee records into the positions table.
INSERT INTO employees (name,position_id,salary,hire_date) VALUES
("Alice Johnson",2 , 2800.00 ,"2023-06-15"),
("Bob Smith",3,2500.00,"2024-01-10"),
("Carol Davis",1,4500.00,"2022-11-01"),
("David Lee",2,2700.00,"2023-09-20"),
("Emma Watson",3,2600.00,"2024-02-05"),
("Frank Miller",1,4800.00,"2021-07-12"),
("Grace Kim",2,3050.00,"2024-03-01"),
("Henry Adams",3,2400.00,"2024-04-18");

SELECT * FROM employees;

-- 5. Selecting all employees whose salary is less than 3000.
SELECT * FROM employees WHERE salary > 3000;

-- 6. Updating the position_name of a specific position using its id
UPDATE positions SET position_name = "Marketing Officer" WHERE id=3;

SELECT * FROM positions;

-- 7. Delete an employee record by id.
DELETE FROM employees WHERE id="4";

SELECT * FROM employees;

-- 8. Creating a view named employee_summary
DROP VIEW IF EXISTS employee_summary;
CREATE VIEW employee_summary as 
SELECT e.name employee_name, p.position_name, e.salary 
FROM positions p, employees e 
WHERE e.position_id = p.id;

SELECT * FROM employee_summary;

-- 9. Writing a stored procedure named GetEmployeeByPosition 
DROP PROCEDURE IF EXISTS GetEmployeeByPosition;

DELIMITER ??
CREATE PROCEDURE GetEmployeeByPosition(p_positon_name VARCHAR(100))
BEGIN
SELECT * FROM employee_summary WHERE position_name = p_positon_name;
END ??
DELIMITER ;

CALL GetEmployeeByPosition("Manager");

-- 10. Create an audit table named employee_log
DROP TABLE IF EXISTS employee_log;
CREATE TABLE employee_log(
    log_id INT PRIMARY KEY AUTO_INCREMENT,
    employee_id INT,
    action VARCHAR(50),
    action_time TIMESTAMP
);

DESC employee_log;

-- 11. Writing trigger
DROP TRIGGER IF EXISTS employee_status_update;

CREATE TRIGGER employee_status_update 
AFTER INSERT ON employees
FOR EACH ROW
INSERT INTO employee_log (employee_id,action,action_time) VALUES
(new.id, "INSERT", now());

SHOW TRIGGERS;
INSERT INTO employees (name,position_id,salary,hire_date) VALUES
("Bruce Wayne ",1 , 5000.00 ,"2023-07-15");

SELECT * FROM employees;
