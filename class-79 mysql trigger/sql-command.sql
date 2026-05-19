-- Creating a new table for trigger
CREATE TABLE IF NOT EXISTS student_logs(
    id int unsigned auto_increment primary key,
    student_id int,
    status varchar(20),
    time timestamp
);

-- Trigger
drop trigger if exists add_student;
CREATE TRIGGER add_student
AFTER INSERT ON students 
FOR EACH ROW 
INSERT INTO student_logs(student_id,status,time) VALUES(new.id, "Added", now());

INSERT INTO students(full_name, email) VALUES ("Redoy", "redoy@gmail.com");

-- Trigger on update
DROP TRIGGER IF EXISTS  update_student;
CREATE TRIGGER update_student AFTER UPDATE ON students FOR EACH ROW INSERT INTO student_logs(student_id,status,time) VALUES(old.id, "Updated", now());

UPDATE students SET full_name="Khairul" WHERE id=9;

-- Trigger on Delete
DROP TRIGGER IF EXISTS  delete_student;
CREATE TRIGGER delete_student AFTER DELETE ON students FOR EACH ROW INSERT INTO student_logs(student_id,status,time) VALUES(old.id, "Deleted", now());

INSERT INTO students(full_name, email) VALUES ("Vimrul", "vimrul@gmail.com");

DELETE FROM students WHERE full_name="Vimrul";