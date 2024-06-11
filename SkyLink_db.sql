DROP DATABASE IF EXISTS SkyLink;
CREATE DATABASE SkyLink;
DROP TABLE IF EXISTS flights;
CREATE TABLE flights(
                        id int not NULL AUTO_INCREMENT PRIMARY KEY,
                        flight_name text,
                        discription text,
                        price DECIMAL(10,2),
                        imgs VARCHAR(255)
);


INSERT INTO flights (flight_name, discription, price, imgs) VALUES ('Italian Landscape', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', 299.99, 'italian-land.jpg');
INSERT INTO flights (flight_name, discription, price, imgs) VALUES ('Thailand Phi Phi Islands', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', 399.99, 'phiphiIslands.jpg');
INSERT INTO flights (flight_name, discription, price, imgs) VALUES ('Greece Santorini Island', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', 599.99, '');
INSERT INTO flights (flight_name, discription, price, imgs) VALUES ('Norway Lofoten Islands', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', 599.99, '');
INSERT INTO flights (flight_name, discription, price, imgs) VALUES ('Japanese Hakone Gate', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', 799.99, '');

DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
                         `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                         `name` varchar(255) NOT NULL,
                         `lastName` varchar(255) NOT NULL,
                         `email` varchar(255) NOT NULL,
                         `password` varchar(255) NOT NULL,
                         `user-type` varchar(255) NOT NULL DEFAULT 'user'
)
