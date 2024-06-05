DROP DATABASE IF EXISTS SkyLink;
CREATE DATABASE SkyLink;
DROP TABLE IF EXISTS flights;
CREATE TABLE flights(
                        id int not NULL AUTO_INCREMENT PRIMARY KEY,
                        flight_name text,
                        discription text,
                        price varchar(50)
);


INSERT INTO flights (flight_name, discription, price) VALUES ('eerste vlucht', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', '$299,99');

DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
                         `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                         `name` varchar(255) NOT NULL,
                         `lastName` varchar(255) NOT NULL,
                         `email` varchar(255) NOT NULL,
                         `password` varchar(255) NOT NULL,
                         `user-type` varchar(255) NOT NULL DEFAULT 'user'
)
