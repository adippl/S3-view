DROP DATABASE IF EXISTS db_s3_view;
CREATE DATABASE db_s3_view;
DROP USER IF EXISTS user_s3_view;
CREATE USER user_s3_view IDENTIFIED BY 'testpw';
SELECT USER FROM mysql.user;
GRANT ALL ON `db_s3_view`.* TO 'user_s3_view';
FLUSH PRIVILEGES;
SHOW GRANTS FOR 'user_s3_view';
