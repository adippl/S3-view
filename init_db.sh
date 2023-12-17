#!/bin/sh
set -e
set -v
mysql -uroot -proot < .//db_create.sql

php artisan migrate:refresh --seed
mysql -uuser_s3_view -ptestpw -e 'select * from db_s3_view.users;'
mysql -uuser_s3_view -ptestpw -e 'select * from db_s3_view.s3_user_accounts;'
mysql -uuser_s3_view -ptestpw -e 'select * from db_s3_view.users;'
mysql -uuser_s3_view -ptestpw -e 'DESCRIBE db_s3_view.s3_user_accounts;'
mysql -uuser_s3_view -ptestpw -e 'DESCRIBE db_s3_view.users;'
mysql -uuser_s3_view -ptestpw -e 'SHOW DATABASES;'
mysql -uuser_s3_view -ptestpw -e 'SHOW TABLES FROM db_s3_view'
