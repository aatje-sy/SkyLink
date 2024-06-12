DROP DATABASE IF EXISTS SkyLink;
CREATE DATABASE SkyLink;
DROP TABLE IF EXISTS flights;
CREATE TABLE flights(
                        id int not NULL AUTO_INCREMENT PRIMARY KEY,
                        flight_name text,
                        discription text,
                        price DECIMAL(10,2)
);


INSERT INTO flights (flight_name, discription, price) VALUES ('Italian Landscape', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', 299.99);
INSERT INTO flights (flight_name, discription, price) VALUES ('Thailand Phi Phi Islands', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', 399.99);
INSERT INTO flights (flight_name, discription, price) VALUES ('Greece Santorini Island', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', 599.99);
INSERT INTO flights (flight_name, discription, price) VALUES ('Norway Lofoten Islands', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', 599.99);
INSERT INTO flights (flight_name, discription, price) VALUES ('Japanese Hakone Gate', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', 799.99);


DROP TABLE IF EXISTS Images;
CREATE TABLE Images(
                        id int not NULL AUTO_INCREMENT PRIMARY KEY,
                        imags varchar(255),
                        flight_id int(255)
);

INSERT INTO Images (imags, flight_id) VALUES ('italian-land.jpg', 1);
INSERT INTO Images (imags, flight_id) VALUES ('SideImg-Italy.jpg', 1);
INSERT INTO Images (imags, flight_id) VALUES ('vacation-1-italy.jpg', 1);
INSERT INTO Images (imags, flight_id) VALUES ('hotel-img-vacation1.png', 1);
INSERT INTO Images (imags, flight_id) VALUES ('phiphiIslands.jpg', 2);
INSERT INTO Images (imags, flight_id) VALUES ('phiPhi-hotel.jpg', 2);
INSERT INTO Images (imags, flight_id) VALUES ('phiphiBoat.jpg', 2);
INSERT INTO Images (imags, flight_id) VALUES ('phiMountain.jpg', 2);



SELECT * FROM Images INNER JOIN flights on Images.flight_id = flights.id;

DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
                         `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                         `name` varchar(255) NOT NULL,
                         `lastName` varchar(255) NOT NULL,
                         `email` varchar(255) NOT NULL,
                         `password` varchar(255) NOT NULL,
                         `admin` tinyint(1) NOT NULL DEFAULT '0'
                         );
