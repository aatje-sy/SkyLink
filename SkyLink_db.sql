DROP DATABASE IF EXISTS SkyLink;
CREATE DATABASE SkyLink;
DROP TABLE IF EXISTS flights;
CREATE TABLE flights(
                        id int not NULL AUTO_INCREMENT PRIMARY KEY,
                        flight_name text,
                        discription text,
                        price DECIMAL,
                        main_img text(255),
                        start_date date null ,
                        end_Date date null
);


INSERT INTO flights (flight_name, discription, price, main_img, start_date, end_Date) VALUES ('Italian Landscape', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', 299.99, 'italian-land.jpg', '2024-01-01', '2024-12-31');
INSERT INTO flights (flight_name, discription, price, main_img, start_date, end_Date) VALUES ('Thailand Phi Phi Islands', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', 399.99, 'phiphiIslands.jpg', '2024-01-01', '2024-12-31');
INSERT INTO flights (flight_name, discription, price, main_img, start_date, end_Date) VALUES ('Greece Santorini Island', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', 599.99, 'greece-land.jpg', '2024-01-01', '2024-12-31');
INSERT INTO flights (flight_name, discription, price, main_img, start_date, end_Date) VALUES ('Norway Lofoten Islands', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', 599.99, 'Norway-Loften.jpg', '2024-01-01', '2024-12-31');
INSERT INTO flights (flight_name, discription, price, main_img, start_date, end_Date) VALUES ('Japanese Hakone Gate', 'hvopeahvgowrphbvwovn ovnweovgnw9ov', 799.99, 'Japan-land.jpg', '2024-01-01', '2024-12-31');
INSERT INTO flights (flight_name, discription, price, main_img, start_date, end_Date) VALUES ('Syria Palmyra', 'Syria fererfe', 299.98, 'Syria-palmyra.jpg', '2024-01-01', '2024-12-31');
INSERT INTO flights (flight_name, discription, price, main_img, start_date, end_Date) VALUES ('Saudi Arabia Umrah', 'Saudi Arabia umrah for muslims. Entering certification included', 999.99, 'kaba.jpg', '2024-01-01', '2024-12-31');
INSERT INTO flights (flight_name, discription, price, main_img, start_date, end_Date) VALUES ('Syria Palmyra', 'Syria fererfe', 299.98, 'Syria-palmyra.jpg', '2024-01-01', '2024-12-31');

DROP TABLE IF EXISTS bookings;
CREATE TABLE bookings
(

    id int not NULL AUTO_INCREMENT PRIMARY KEY,
    userID int,
    flight_ID int

);


DROP TABLE IF EXISTS Images;
CREATE TABLE Images(
                        id int not NULL AUTO_INCREMENT PRIMARY KEY,
                        imgs varchar(255),
                        flight_id int(255)
);

INSERT INTO Images (imgs, flight_id) VALUES ('SideImg-Italy.jpg', 1);
INSERT INTO Images (imgs, flight_id) VALUES ('vacation-1-italy.jpg', 1);
INSERT INTO Images (imgs, flight_id) VALUES ('hotel-img-vacation1.png', 1);
INSERT INTO Images (imgs, flight_id) VALUES ('phiPhi-hotel.jpg', 2);
INSERT INTO Images (imgs, flight_id) VALUES ('phiphiBoat.jpg', 2);
INSERT INTO Images (imgs, flight_id) VALUES ('phiMountain.jpg', 2);
INSERT INTO Images (imgs, flight_id) VALUES ('Santorini-side.jpg', 3);
INSERT INTO Images (imgs, flight_id) VALUES ('Santorini-balcony.jpg', 3);
INSERT INTO Images (imgs, flight_id) VALUES ('Santorini-hotel.jpg', 3);
INSERT INTO Images (imgs, flight_id) VALUES ('loften-sideIMG.jpg', 4);
INSERT INTO Images (imgs, flight_id) VALUES ('Norway-Land.jpg', 4);
INSERT INTO Images (imgs, flight_id) VALUES ('norway-house.jpg', 4);
INSERT INTO Images (imgs, flight_id) VALUES ('Japan-Gate.jpg', 5);
INSERT INTO Images (imgs, flight_id) VALUES ('japan-sideIMG.jpg', 5);
INSERT INTO Images (imgs, flight_id) VALUES ('Japan-sit.jpg', 5);
INSERT INTO Images (imgs, flight_id) VALUES ('alhamidiyah.jpg', 6);
INSERT INTO Images (imgs, flight_id) VALUES ('Masjid.jpg', 6);
INSERT INTO Images (imgs, flight_id) VALUES ('Syria-alley.jpg', 6);
INSERT INTO Images (imgs, flight_id) VALUES ('Mosque-img.png', 7);
INSERT INTO Images (imgs, flight_id) VALUES ('WhiteMosque.png', 7);
INSERT INTO Images (imgs, flight_id) VALUES ('BigClock.jpg', 7);



DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
                         `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                         `name` varchar(255) NOT NULL,
                         `lastName` varchar(255) NOT NULL,
                         `email` varchar(255) NOT NULL,
                         `password` varchar(255) NOT NULL,
                         `admin` tinyint(1) NOT NULL DEFAULT '0'
                         );
INSERT INTO users (name, lastName, email, password, admin) VALUES ('admin', 'a', 'admin@a.com', '$2y$10$t4XTMesq1A55NQ8xW8T0Wuq5B3.INJEMmJiWStOeXUo/HGfjnhY2q', 1);
INSERT INTO users (name, lastName, email, password, admin) VALUES ('user', 'a', 'user@a.com', '$2y$10$t4XTMesq1A55NQ8xW8T0Wuq5B3.INJEMmJiWStOeXUo/HGfjnhY2q', 0);

DROP TABLE IF EXISTS reviews;
CREATE TABLE reviews(

                        comments text(555),
                        flight_id int,
                        user_id int
);

SELECT * FROM Images INNER JOIN flights on Images.flight_id = flights.id;

SELECT * FROM `reviews`
    INNER JOIN flights ON flight_id = flights.id
    INNER JOIN users ON reviews.user_id = users.id;

SELECT * FROM flights
    INNER JOIN bookings on flights.id = bookings.flight_ID
    INNER JOIN users ON bookings.id = users.id;
