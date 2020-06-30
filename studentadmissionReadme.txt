Assignment: Student admission data insertion
Author: Phong Vo
Date: 1/2019
Frameworks: PHP, MySQL, XAMPP
Role: Creating a local web page that can insert student data into database which is stored in XAMPP


database: dbcourse
table: admission

Location of files: "studentadmission.php" and "studentadmissiondatainsert.php"
C:\xampp\htdocs\studentadmission
http://localhost:8080/studentadmission/
port: 8080


SQL:

USE dbcourse;
CREATE TABLE admission(
    sid INT(10) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    class INT(10) NOT NULL,
    dob DATE NOT NULL,
    address VARCHAR(200) NOT NULL,
    PRIMARY KEY (sid)
);