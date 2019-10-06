<!--Vy Hoang | vyhoang@vyhoang.me-->




DROP TABLE IF EXISTS orderlist;
CREATE TABLE orderlist (
id int(11) NOT NULL PRIMARY KEY auto_increment,
item varchar (50) Not null,
date_of_order DATE NOT NULL,
quantity int(6) NOT NULL,
amount dec(10,2) NOT NULL,
status varchar (15) NOT NULL,
photo blob
) ;


Create TABLE users(
	user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL
);

		